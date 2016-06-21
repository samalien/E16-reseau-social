<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;
use App\Http\Controllers\Controller;
use App\Http\Requests;
use App\User;
use App\Ticket;
use LucaDegasperi\OAuth2Server\Facades\Authorizer;
use Carbon\Carbon;
use DB;


class ApiTicketController extends Controller
{
    /*
    * Constructeur qui force à utiliser Oauth
    */
    public function __construct()
    {
        $this->middleware('oauth');
        $this->middleware('oauth-user');

    }

    /*
     * Fonction pour afficher les billets de l'utilisateur
     */
    public function userTickets()
    {
        $userId = Authorizer::getResourceOwnerId();

        $user = User::find($userId);

        if(!$user)
        {
            return Response::json([
                'error'=> 'not_found',
                'error_description'=>'The token owner is not an existing user.'
            ], 404);
        }
        else
        {
            //Aller chercher tous les billets de l'utilisateur
            //et les trier du plus tôt au plus tard
            $tickets = $user->tickets()->orderBy('date','asc')->get();

            //Garder seulement les billets qui ne sont pas passés
            //Snippet provient de http://stackoverflow.com/questions/33806518/laravel-collection-date-comparison
            //Par: patricus
            $currentDate = Carbon::now();
            $tickets = $tickets->filter(function ($item) use ($currentDate){
                return $item['date']>$currentDate;
            })->values();

            //Vérifier si l'utilisateur a des billets
            if (!$tickets || $tickets->isEmpty())
            {
                //Aucun billet
                return Response::json([], 204);
            }
            else
            {
                //L'utilisateur a des billets
                return Response::json(
                    $this->transformTicketsPrivate($tickets)
                    ,200);
            }


        }

    }

    /*
     * Fonction pour afficher les billets des amis de l'utilisateur
     */
    public function friendsTickets()
    {
        $userId = Authorizer::getResourceOwnerId();

        $user = User::find($userId);

        if(!$user)
        {
            return Response::json([
                'error'=> 'not_found',
                'error_description'=>'The token owner is not an existing user.'
            ], 404);
        }
        else
        {
            $amis = $user->getFriends();

            //Vérifier si l'utilisateur a des amis
            if (!$amis || $amis->isEmpty())
            {
                //Aucun ami
                return Response::json([], 204);
            }
            else
            {
                //L'utilisateur a au moins un ami

                //Aller chercher tous ses amis
                $userList = $amis->all();

                //Faire une liste de tous les billets de tous ses amis
                $ticketList=collect();
                foreach ($userList as $key => $value){

                    $ticketList->push(DB::table('tickets')
                        ->join('users', 'tickets.user_id', '=', 'users.id')
                        ->select('users.id AS idUtilisateur' , 'users.nom', 'users.prenom', 'tickets.titre','tickets.artiste', 'tickets.lieu', 'tickets.date')
                        ->where('user_id', '=', $value['id'])
                        ->where('tickets.date','>',Carbon::now())
                        ->get());
                }

                //Vérifier si les amis ont des billets
                if (!$ticketList || $ticketList->isEmpty())
                {
                    //Aucun billet
                    return Response::json([], 204);
                }
                else
                {
                    //Les amis ont des billets

                    //Merger les liste en une seule liste
                    $ticketList= $ticketList->collapse();

                    //Mettre la liste de billet en ordre de plus imminent au plus tard
                    $ticketList=$ticketList->sortBy('date')->values();

                    //L'utilisateur a des billets
                    return Response::json($ticketList ,200);
                }
            }

        }

    }

    public function addNewTickets()
    {

    }

    /*
     * Fonction pour choisir les champs d'un billet
     * Provient de Laracast #4
     * https://laracasts.com/series/incremental-api-development
     */
    private function transformTicketsPrivate($tickets)
    {
        return array_map(function($tickets)
        {
            return[
                'uuid' => $tickets['uuid'],
                'titre'=>$tickets['titre'],
                'artiste'=>$tickets['artiste'],
                'lieu'=>$tickets['lieu'],
                'date'=>$tickets['date'],
                'montant'=>$tickets['montant']
            ];
        }, $tickets->all());
    }

}
