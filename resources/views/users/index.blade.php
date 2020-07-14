@extends('layouts.app')

@section('content')

    <div style="float:left; width:50%;" class="welcome-illustration-signin"></div>
    <div class="welcome_hero">
            <h1> UNIVINFO ALL USERS</h1>
            <p>Liste des comptes</p>
            <div>
            <ul>
                @foreach($users as $user)
                    <li>{{$user->name}} {{$user->university}}</li>
                @endforeach
            </ul>
            {{$users->links()}}
            </div>
    </div><!-- welcome-hero -->

    <script src=" {{ asset('js/jquery/jquery.min.js') }} "></script>
    <script src=" {{ asset('js/bootstrap/js/bootstrap.bundle.min.js') }} "></script>

@endsection