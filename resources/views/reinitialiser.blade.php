<!DOCTYPE html>
<html class="hide-sidebar ls-bottom-footer" lang="fr">

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

<body class="login">

  <div id="content">

    <div class="container-fluid">
      <div class="panel panel-default">
        <div class="panel-body">
          <h1>Réinitialiser le mot de passe</h1>
          <form action="reinitialiser2.blade.php">
            <div class="form-group form-control-default">
              <label for="exampleInputFirstName">Courriel</label>
              <input type="email" class="form-control" id="exampleInputFirstName" placeholder="Votre courriel">
            </div>

            <button type="submit" class="btn btn-primary">Envoyer un courriel de réinitialisation</button>
          </form>
        </div>
      </div>

    </div>
  </div>

  <footer class="footer">
    <strong>QuiVa?</strong> 1.0.0 &copy; Copyright 2016 - Joey Dubé, Pascal Henrichon, Javier Sanchez
  </footer>

  <script src="js/app/config_site.js"></script>

  <script src="js/vendor/all.js"></script>

  <script src="js/app/app.js"></script>

</body>

</html>