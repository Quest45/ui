@extends('layouts.app')
@section('title', 'Inscription')

@section('content')
    <div class="welcome-illustration-signin"></div>
    <div class="signin-panel">
      <div class="signin-sidebar">
        <div class="signin-sidebar-body">
          <a href="dashboard-one.html" class="sidebar-logo mg-b-40"><span>UNIVINFO</span></a>
          <h4 class="signin-title">Creer votre compte</h4>
          <h5 class="signin-subtitle">En quelques minutes et c'est gratuit.</h5>
          <form action="{{ route('register') }}" method="POST">
            @csrf
            <div class="signin-form">
              <div class="form-group">
                <span class="badge bg-primary tx-white">Important</span><br>
                <label for="university">{{ __('Choisissez votre université') }}</label>
                <select id="university" name="university" class="custom-select">
                  <option value="UCAO">UCAO</option>
                  <option value="ESGIS">ESGIS</option>
                  <option value="FORMATEC">FORMATEC</option>
                  <option value="IAI">IAI</option>
                </select>
                <a id="no_university" href="#"><small>Votre université n'est pas dans la liste ?</small></a>
              </div>
              <div class="form-group">
                <label for="name">{{ __('Nom') }}</label>
                <input name="name" type="text" id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="votre nom" value="">
                @error('name')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
                @enderror
              </div>
              <div class="form-group">
                <label for="email">{{ __('Adresse mail') }}</label>
                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="votre email">
                @error('email')
                   <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                   </span>
                @enderror
              </div>
              <div class="form-group">
                <label for="password" class="d-flex justify-content-between">
                  <span>{{ __('Mot de passe') }}</span>
                </label>
                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="votre mot de passe">
                @error('password')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                @enderror
              </div>
              <div class="form-group">
                <label for="password-confirm">{{ __('Confirmez') }}</label>
                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password" placeholder="votre mot de passe">
                @error('password')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                @enderror
              </div>
              <div class="form-group d-flex mg-b-0">
                <button type="submit" class="btn btn-brand-01 btn-uppercase flex-fill">{{ __('INSCRIPTION') }}</button>
                <a href="{{ route('login') }}" class="btn btn-white btn-uppercase flex-fill mg-l-10">deja inscrit?</a>
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
@endsection
