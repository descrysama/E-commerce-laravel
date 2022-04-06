@extends('layouts.template')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-5 col-12 col-lg-5">
        <img src="{{ asset('img/plante3.jpg') }}" class="card-img-top" alt="3" width="125rem">
        </div>
        <div class="col-md-2 col-12 col-lg-2"></div>
        
        <div class="col-md-5 col-12 col-lg-5">
        <div class="d-flex justify-content-center">
        <h3>Nom Plante</h3>
        </div>
        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Aperiam, voluptas! Quaerat ullam corporis, consequatur possimus officia eaque sed cum minus magnam corrupti aliquid sunt quia, hic qui tempora reprehenderit architecto.</p>
        </div>
    </div>
</div>
@endsection