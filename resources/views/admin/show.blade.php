@extends('layouts.template')
@section('content')


<div class="card">
  <div class="card-header">Contactus Page</div>
  <div class="card-body">


    <div class="card-body">
      <h5 class="card-title">Nom : {{ $articles->nom }}</h5>
      <p class="card-text">Description : {{ $articles->description }}</p>
      <p class="card-text">Prix : {{ $artciles->prix }}</p>
      <p class="card-image">Image : {{ $artciles->image }}</p>
    </div>

    </hr>

  </div>
</div>