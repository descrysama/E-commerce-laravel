@extends('layouts.template')
@section('content')
 
<div class="card">
  <div class="card-header">Contactus Page</div>
  <div class="card-body">
      
      <form action="{{ url('addarticle') }}" method="post">
        {!! csrf_field() !!}
        <label>Nom</label></br>
        <input type="text" name="nom" id="name" class="form-control"></br>
        <label>description</label></br>
        <input type="text" name="description" id="address" class="form-control"></br>
        <label>prix</label></br>
        <input type="text" name="prix" id="mobile" class="form-control"></br>
        <label>image</label></br>
        <input type="text" name="image" id="mobile" class="form-control"></br>
        <input type="submit" value="Save" class="btn btn-success"></br>
    </form>
   
  </div>
</div>
 
@stop