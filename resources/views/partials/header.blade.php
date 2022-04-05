@extends('layouts.template')
@section("header")
<nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand " href="{{ url('/welcome') }}"><img src="{{ asset('img/logo-plantis.png')}}" alt="plantis" width="50%"></a>
            <div class="d-flex">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                    <div class="navbar-nav">
                        @if (Route::has('login'))
                        @auth
                        <a class="nav-link active" href="{{ url('/dashboard') }}">Dashboard</a>
                        @else
                        <a class="nav-link active" href="{{ route('login') }}">Se connecter</a>
                        @endauth
                        @endif
                        <a class="nav-link active" href="#">PANIER</a>
                    </div>
                </div>
            </div>
        </div>
    </nav>
    <div>
        <hr>
    </div>
@endsection