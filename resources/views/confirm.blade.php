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

    <title>UNIVINFO - Confirmation</title>

    <!-- vendor css -->
    <link rel="stylesheet" href="{{ asset('css/vendor/fortawesome/fontawesome-free/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/vendor/ionicons/css/ionicons.min.css') }}">

    <!-- template css -->
    <link rel="stylesheet" href="{{ asset('css/all.css') }}">
  </head>
  <body>
  <div class="welcome-illustration-signin"></div>
    <div class="signin-panel">
      <div class="signin-sidebar">
        <div class="signin-sidebar-body">
          <a href="dashboard-one.html" class="sidebar-logo mg-b-40"><span>UNIVINFO</span></a>
          <h4 class="signin-title">Plus qu'une étape</h4>
          <h5 class="signin-subtitle">Confirmer votre compte.</h5>
          <form action="/">
            <div class="signin-form">
              <div class="form-group">
                <label>Code de confirmation</label>
                <input name="code" type="text" class="form-control" placeholder="saisissez le code" value="">
              </div>
              <p class="form-group mg-t-auto mg-b-0 tx-sm tx-color-03">
              Un code de confirmation a été envoyer
              à l'adresse mail spécifiée. Veuiller consulter votre boite de reception ou vos spams et saisissez le code. 
              </p>
              <div class="form-group d-flex mg-b-0">
                <button type="submit" class="btn btn-brand-01 btn-uppercase flex-fill">CONFIRMER</button>
              </div>
          </form>
          <p class="mg-t-auto mg-b-0 tx-sm tx-color-03">En continuant, vous acceptez nos <a href="#">Conditions d'utilisation</a> et notre <a href="#">Polique privée</a></p>
        </div><!-- signin-sidebar-body -->
      </div><!-- signin-sidebar -->
    </div><!-- signin-panel -->
      <script src=" {{ asset('js/jquery/jquery.min.js') }} "></script>
      <script src=" {{ asset('js/jqueryui/jquery-ui.min.js') }} "></script>
      <script src=" {{ asset('js/bootstrap/js/bootstrap.bundle.min.js') }} "></script>
      <script src=" {{ asset('js/feather-icons/feather.min.js') }} "></script>
      <script src=" {{ asset('js/perfect-scrollbar/perfect-scrollbar.min.js') }} "></script>
      <script src=" {{ asset('js/js-cookie/js.cookie.js') }} "></script>
      <script src=" {{ asset('js/cassie.js') }} "></script>
      <script src=" {{ asset('js/flot.sampledata.js') }} "></script>
  </body>
  </html>