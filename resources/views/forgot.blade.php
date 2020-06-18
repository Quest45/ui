<!DOCTYPE html>
<html lang="fr">
  
<head>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Meta -->
    <meta name="description" content="UNIVINFO - description">
    <meta name="author" content="GTEA">

    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('favicon.ico') }}">

    <title>UNIVINFO - Connexion</title>

     <!-- vendor css -->
     <link rel="stylesheet" href="{{ asset('js/fortawesome/fontawesome-free/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('js/ionicons/css/ionicons.min.css') }}">

    <!-- template css -->
    <link rel="stylesheet" href="{{ asset('css/all.css') }}">

  </head>
  <body>
    <div class="welcome-illustration-signin"></div>
    <div class="signin-panel">
      <div class="signin-sidebar">
        <div class="signin-sidebar-body">
          <a href="dashboard-one.html" class="sidebar-logo mg-b-40"><span>UNIVINFO</span></a>
          <h4 class="signin-title">Réinitialisez votre mot de passe </h4>
          <h5 class="signin-subtitle">Entrez votre nom d'utilisateur ou votre adresse mail et nous vous enverrons un lien pour réinitialiser votre mot de passe.</h5>
          <form action="/">
            <div class="signin-form">
              <div class="form-group">
                <label>Nom d'utilisateur/Adresse mail</label>
                <input name="texte" type="texte" class="form-control" placeholder="saississez cette information" value="">
              </div>
              <div class="form-group">
            <button type="submit" class="btn btn-block btn-brand-01 btn-uppercase">Envoyez le lien de rénitialisation</button>
          </div>
          <div class="form-group">
            <a href="/" class="btn btn-block btn-white btn-uppercase">Retour connexion</a>
          </div>
            </div>
          </form>
          <p class="mg-t-auto mg-b-0 tx-sm tx-color-03">En continuant, vous acceptez nos <a href="#">Conditions d'utilisation</a> et notre <a href="#">Polique privée</a></p>
        </div><!-- signin-sidebar-body -->
      </div><!-- signin-sidebar -->
    </div><!-- signin-panel -->

    <script src=" {{ asset('js/jquery/jquery.min.js') }} "></script>
    <script src=" {{ asset('js/bootstrap/js/bootstrap.bundle.min.js') }} "></script>
    <script src=" {{ asset('js/feather-icons/feather.min.js') }} "></script>
    <script src=" {{ asset('js/perfect-scrollbar/perfect-scrollbar.min.js') }} "></script>

    <script>
      $(function(){

        'use strict'

        feather.replace();

        new PerfectScrollbar('.signin-sidebar', {
          suppressScrollX: true
        });

      })
    </script>
    <script src="../assets/js/svg-inline.js"></script>
  </body>
</html>
