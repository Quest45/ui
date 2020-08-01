@extends('layouts.app')
@section('title', 'Connexion')

@section('content')
<div class="welcome-illustration-signin"></div>
<div class="signin-panel">
  <div class="signin-sidebar">
    <div class="signin-sidebar-body">
      <a href="dashboard-one.html" class="sidebar-logo mg-b-40"><span>UNIVINFO</span></a>
      <h4 class="signin-title">De retour !</h4>
      <h5 class="signin-subtitle">Connecter vous pour continuer.</h5>
      @if(session('success'))
              <div class="container">
                  <div class="alert alert-success">
                      {{ session('success') }}
                  </div>
              </div>
      @endif
      @if(session('error'))
              <div class="container">
                  <div class="alert alert-danger">
                      {{ session('error') }}
                  </div>
              </div>
      @endif
      <form method="POST" action="{{ route('login') }}">
        @csrf
        <div class="signin-form">
          <div class="form-group">
            <label for="email">{{ __('Adresse mail') }}</label>
            <input  id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="votre adresse mail">
            @error('email')
              <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
              </span>
            @enderror
          </div>
          <div class="form-group">
            <label id="password" class="d-flex justify-content-between">
              <span>{{ __('Mot de passe') }}</span>
              <a href="{{ route('password.request') }}" class="tx-13">{{ __('Mot de passe oublié ?') }}</a>
            </label>
            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="votre mot de passe">
            @error('password')
              <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
              </span>
            @enderror
          </div> 
          <div class="form-group mg-b-30">
            <div class="custom-control custom-checkbox">
              <input type="checkbox" class="custom-control-input" id="agree" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
              <label class="custom-control-label tx-sm" for="agree">{{ __('Rester connecter') }}</label>
            </div>
          </div>
          <div class="form-group d-flex mg-b-0">
            <button type="submit" class="btn btn-brand-01 btn-uppercase flex-fill">{{ __('Connexion') }}</button>
            <a href="{{ route('register') }}" class="btn btn-white btn-uppercase flex-fill mg-l-10">INSCRIPTION</a>
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
@endsection
