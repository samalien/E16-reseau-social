<!DOCTYPE html>
<html class="st-layout ls-top-navbar show-sidebar sidebar-l2 ls-bottom-footer" lang="fr">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="Joey Dubé, Pascal Henrichon, Javier Sanchez">
  <title>QuiVa?</title>
  <!-- Le gabarit de l'application provient de http://themekit-v4.themekit.io/ et l'auteur est mosaicpro. -->

  <link href="css/vendor/all.css" rel="stylesheet">

  <link href="css/app/app.css" rel="stylesheet">

</head>

<body>

  <!-- Wrapper required for sidebar transitions -->
  <div class="st-container">

    <div class="navbar navbar-main navbar-default navbar-fixed-top" role="navigation">
      <div class="container-fluid">
        <div class="navbar-header">
          <a href="#sidebar-menu" data-effect="st-effect-1" data-toggle="sidebar-menu" class="toggle pull-left visible-xs"><i class="fa fa-bars"></i></a>
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#main-nav">
            <span class="sr-only">Afficher le menu</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a href="#sidebar-chat" data-toggle="sidebar-menu" data-effect="st-effect-1" class="toggle pull-right visible-xs "><i class="fa fa-comments"></i></a>
          <a class="navbar-brand navbar-brand-primary hidden-xs" href="flux.blade.php">QuiVa? <span class="md-notifications-on"></span></a>
        </div>
        <div class="collapse navbar-collapse" id="main-nav">
          <ul class="nav navbar-nav hidden-xs">
            <!-- messages -->
            <li class="dropdown notifications hidden-xs hidden-sm">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                <i class="fa fa-envelope-o"></i>

              </a>
              <ul class="dropdown-menu">
                <li class="media">
                  <div class="media-left">
                    <a href="#">
                      <img class="media-object thumb" src="images/people/50/guy-2.jpg" alt="people">
                    </a>
                  </div>
                  <div class="media-body">
                    <div class="pull-right">
                      <span class="label label-default">5 min</span>
                    </div>
                    <h5 class="media-heading">Adrian D.</h5>

                    <p class="margin-none">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                  </div>
                </li>
                <li class="media">
                  <div class="media-left">
                    <a href="#">
                      <img class="media-object thumb" src="images/people/50/woman-7.jpg" alt="people">
                    </a>
                  </div>

                  <div class="media-body">
                    <div class="pull-right">
                      <span class="label label-default">2 jours</span>
                    </div>
                    <h5 class="media-heading">Jane B.</h5>
                    <p class="margin-none">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                  </div>
                </li>
                <li class="media">
                  <div class="media-left">
                    <a href="#">
                      <img class="media-object thumb" src="images/people/50/guy-8.jpg" alt="people">
                    </a>
                  </div>

                  <div class="media-body">
                    <div class="pull-right">
                      <span class="label label-default">3 jours</span>
                    </div>
                    <h5 class="media-heading">Andrew M.</h5>
                    <p class="margin-none">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                  </div>
                </li>
              </ul>
            </li>
            <!-- // END messages -->
          </ul>

          <ul class="nav navbar-nav navbar-user">
            <!-- User -->
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                <img src="images/people/50/guy-5.jpg" width="35" alt="Bill" class="img-circle" /> Joey <span class="caret"></span>
              </a>
              <ul class="dropdown-menu" role="menu">
                <li><a href="profil.blade.php">Profil</a></li>
                <li><a href="notifications.blade.php">Notifications</a></li>
                <li><a href="deconnexion.blade.php">Déconnexion</a></li>
              </ul>
            </li>
          </ul>

          <form class="navbar-form margin-none navbar-left hidden-xs " action="rechercher.blade.php">
            <!-- Search -->
            <div class="search-1">
              <div class="input-group">
                <span class="input-group-addon"><i class="icon-search"></i></span>
                <input type="text" class="form-control" placeholder="Trouver un ami">
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>

    <!-- Sidebar component with st-effect-1 (set on the toggle button within the navbar) -->
    <div class="sidebar left sidebar-size-2 sidebar-offset-0 sidebar-visible-desktop sidebar-visible-mobile sidebar-skin-dark" id="sidebar-menu" data-type="collapse">
      <div data-scrollable>
        <ul class="sidebar-menu">
          <li class="category">Navigation</li>
          <li class=""><a href="flux.blade.php"><i class="icon-worldwide"></i> <span>Flux</span></a></li>
          <li class="hasSubmenu open">
            <a href="#timeline"><i class="md-event"></i> <span>Mes spectacles</span></a>
            <ul class="in" id="timeline">
              <li><a href="spectacle-futur.blade.php"><i class="fa fa-circle-o"></i> <span>Futurs</span></a></li>
              <li class="active"><a href="spectacle-tous.blade.php"><i class="fa fa-circle-o"></i> <span>Tous</span></a></li>
            </ul>
          </li>
          <li class=""><a href="profil.blade.php"><i class="icon-user-1"></i> <span>Profil</span></a></li>
          <li class=""><a href="amis.blade.php"><i class="fa fa-group"></i> <span>Mes amis</span></a></li>
        </ul>
      </div>
    </div>

    <!-- sidebar effects OUTSIDE of st-pusher: -->
    <!-- st-effect-1, st-effect-2, st-effect-4, st-effect-5, st-effect-9, st-effect-10, st-effect-11, st-effect-12, st-effect-13 -->

    <!-- content push wrapper -->
    <div class="st-pusher" id="content">

      <!-- sidebar effects INSIDE of st-pusher: -->
      <!-- st-effect-3, st-effect-6, st-effect-7, st-effect-8, st-effect-14 -->

      <!-- this is the wrapper for the content -->
      <div class="st-content">

        <!-- extra div for emulating position:fixed of the menu -->
        <div class="st-content-inner">

          <div class="container-fluid">

            <div class="row">
              <div class="col-md-9">
                <ul class="timeline-list">
                  <li class="media media-clearfix-xs">
                    <div class="media-left">
                      <div class="user-wrapper">
                        <img src="images/people/110/guy-5.jpg" alt="people" class="img-circle" width="80" />
                        <div>Joey D.</div>
                        <div class="date">11 MAI</div>
                      </div>
                    </div>
                    <div class="media-body" id="mai">
                      <div class="media-body-wrapper">
                        <div class="row">
                          <div class="col-md-10 col-lg-8">
                            <div class="panel panel-default event">
                              <div class="panel-heading title">
                                Céline Dion
                              </div>
                              <ul class="icon-list icon-list-block">
                                <li><i class="fa fa-globe"></i> Montréal</li>
                                <li><i class="fa fa-calendar-o"></i> 11 Juin 2016</li>
                                <li><i class="fa fa-clock-o"></i> 5:50 PM</li>
                                <li>
                                  <a href="../../../../../Users/Joey/Downloads/E16-reseau-social-prototype/billet.pdf" class="btn btn-default btn-sm">Imprimer les billets <i class="fa fa-print"></i></a>
                                </li>
                              </ul>
                              <div class="clearfix"></div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </li>
                </ul>

                <ul class="timeline-list">
                  <li class="media media-clearfix-xs">
                    <div class="media-left">
                      <div class="user-wrapper">
                        <img src="images/people/110/guy-4.jpg" alt="people" class="img-circle" width="80" />
                        <div>Jonny D.</div>
                        <div class="date">11 JUIN</div>
                      </div>
                    </div>
                    <div class="media-body" id="juin">
                      <div class="media-body-wrapper">
                        <div class="row">
                          <div class="col-md-10 col-lg-8">
                            <div class="panel panel-default event">
                              <div class="panel-heading title">
                                Céline Dion
                              </div>
                              <ul class="icon-list icon-list-block">
                                <li><i class="fa fa-globe"></i> Montréal</li>
                                <li><i class="fa fa-calendar-o"></i> 11 Juin 2016</li>
                                <li><i class="fa fa-clock-o"></i> 5:50 PM</li>
                                <li>
                                  <a href="../../../../../Users/Joey/Downloads/E16-reseau-social-prototype/billet.pdf" class="btn btn-default btn-sm">Imprimer les billets <i class="fa fa-print"></i></a>
                                </li>
                              </ul>
                              <div class="clearfix"></div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </li>
                </ul>

                <ul class="timeline-list">
                  <li class="media media-clearfix-xs">
                    <div class="media-left">
                      <div class="user-wrapper">
                        <img src="images/people/110/guy-1.jpg" alt="people" class="img-circle" width="80" />
                        <div>Bob G.</div>
                        <div class="date">11 JUILLET</div>
                      </div>
                    </div>
                    <div class="media-body" id="juillet">
                      <div class="media-body-wrapper">
                        <div class="row">
                          <div class="col-md-10 col-lg-8">
                            <div class="panel panel-default event">
                              <div class="panel-heading title">
                                Céline Dion
                              </div>
                              <ul class="icon-list icon-list-block">
                                <li><i class="fa fa-globe"></i> Montréal</li>
                                <li><i class="fa fa-calendar-o"></i> 11 Juin 2016</li>
                                <li><i class="fa fa-clock-o"></i> 5:50 PM</li>
                                <li>
                                  <a href="../../../../../Users/Joey/Downloads/E16-reseau-social-prototype/billet.pdf" class="btn btn-default btn-sm">Imprimer les billets <i class="fa fa-print"></i></a>
                                </li>
                              </ul>
                              <div class="clearfix"></div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </li>
                </ul>
              </div>
              <div class="col-md-3">
                <ul class="nav timeline-months">
                  <li class="active"><a href="#mai"><i class="fa fa-calendar fa-fw"></i>Mai</a></li>
                  <li><a href="#juin"><i class="fa fa-calendar fa-fw"></i>Juin</a></li>
                  <li><a href="#juillet"><i class="fa fa-calendar fa-fw"></i>Juillet</a></li>
                  <li><a href="#aout"><i class="fa fa-calendar fa-fw"></i>Août</a></li>
                  <li><a href="#septembre"><i class="fa fa-calendar fa-fw"></i>Septembre</a></li>
                </ul>
              </div>
            </div>

          </div>

        </div>
        <!-- /st-content-inner -->

      </div>
      <!-- /st-content -->

    </div>
    <!-- /st-pusher -->

    <footer class="footer">
      <strong>QuiVa?</strong> 1.0.0 &copy; Copyright 2016 - Joey Dubé, Pascal Henrichon, Javier Sanchez
    </footer>

  </div>
  <!-- /st-container -->

  <script src="js/app/config_site.js"></script>

  <script src="js/vendor/all.js"></script>

  <script src="js/app/app.js"></script>

</body>

</html>