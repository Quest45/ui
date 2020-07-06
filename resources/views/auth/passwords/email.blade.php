@extends('layouts.app')
@section('title', 'Mot de passe oublié')

@section('content')
<div class="welcome-illustration-signin"></div>
    <div class="signin-panel">
      <div class="signin-sidebar">
        <div class="signin-sidebar-body">
          <a href="dashboard-one.html" class="sidebar-logo mg-b-40"><span>UNIVINFO</span></a>
          <h4 class="signin-title">Réinitialision </h4>
          <h5 class="signin-subtitle">de votre mot de passe</h5>
          @if (session('status'))
              <div class="alert alert-success" role="alert">
                  {{ session('status') }}
              </div>
          @endif

          <form method="POST" action="{{ route('password.email') }}">
            @csrf
            <div class="signin-form">
              <div class="form-group">
                <label>{{ __('Adresse mail') }}</label>
                <input name="texte" type="texte" placeholder="votre adresse mail" id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus >
                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
               @enderror
              </div>
              <div class="form-group">
                <button type="submit" class="btn btn-block btn-brand-01 btn-uppercase">{{ __('Envoyer le lien de rénitialisation') }} </button>
              </div>
              <div class="form-group">
                <a href="{{ route('login') }}" class="btn btn-block btn-white btn-uppercase">Retour connexion</a>
              </div>
            </div>
          </form>

        </div><!-- signin-sidebar-body -->
      </div><!-- signin-sidebar -->
    </div><!-- signin-panel -->
    
    <script src=" {{ asset('js/jquery/jquery.min.js') }} "></script>
    <script src=" {{ asset('js/bootstrap/js/bootstrap.bundle.min.js') }} "></script>
    <script src=" {{ asset('js/feather-icons/feather.min.js') }} "></script>

@endsection
