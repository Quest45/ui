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
          <h4 class="signin-title">Creer votre compte</h4>
          <h5 class="signin-subtitle">En quelques minutes et c'est gratuit.</h5>

          <div class="signin-form">
            <div class="form-group">
               <label>Choisissez une université</label>
              <select name="university" class="custom-select">
                <option selected="">UCAO</option>
                <option value="1">ESGIS</option>
                <option value="2">FORMATEC</option>
                <option value="3">IAI</option>
              </select>
            </div>
            <div class="form-group">
              <label>Adresse mail</label>
              <input name="email" type="email" class="form-control" placeholder="votre adresse mail" value="">
            </div>

            <div class="form-group">
              <label class="d-flex justify-content-between">
                <span>Mot de passe</span>
                <a href="#" class="tx-13">Mot de passe oublié ?</a>
              </label>
              <input name="password" type="password" class="form-control" placeholder="votre mot de passe" value="">
            </div>

            <div class="form-group d-flex mg-b-0">
              <button type="submit" class="btn btn-brand-01 btn-uppercase flex-fill">INSCRIPTION</button>
              <a href="/" class="btn btn-white btn-uppercase flex-fill mg-l-10">CONNEXION</a>
            </div>
          </div>
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
  </body>
</html>
