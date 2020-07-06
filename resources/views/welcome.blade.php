@extends('layouts.app')
@section('title', 'Bienvenue')

@section('content')
    <div style="float:left; width:50%;" class="welcome-illustration-signin"></div>
    <div class="welcome_hero">
        <span class="welcome_hero_content">
            <h5>Bienvenue sur</h5>
            <h1> UNIVINFO</h1>
            <p>Gérer et transmetter l'information <br> au sein et en dehors de votre <br> université de manière <br> plus efficace</p>
            <div class="form-group d-flex mg-b-0">
                <a href="{{ route('login') }}" class="btn btn-brand-01 btn-uppercase flex-fill">{{ __('Connexion') }}</a>
                <a href="{{ route('register') }}" class="btn btn-white btn-uppercase flex-fill mg-l-10">{{ __('Inscription') }}</a>
            </div>
            <p class="mg-t-20 mg-b-0 tx-sm tx-color-03"><a href="#">Conditions d'utilisation</a> et <a href="#">Polique privée</a></p>
        </span>
    </div><!-- welcome-hero -->

    <script src=" {{ asset('js/jquery/jquery.min.js') }} "></script>
    <script src=" {{ asset('js/bootstrap/js/bootstrap.bundle.min.js') }} "></script>
@endsection

