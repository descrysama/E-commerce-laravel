@extends('layouts.template')
@section("header")
  @if (Route::has('register'))
    <a class="nav-link active" href="{{ route('register') }}">S'inscrire</a>
  @endif
@endsection