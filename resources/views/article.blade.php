@extends('layouts.template')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-5 col-12 col-lg-5">
            <img src="{{$article -> image}}" class="card-img-top" alt="3" width="125rem">
        </div>
        <div class="col-md-2 col-12 col-lg-2"></div>

        <div class="col-md-5 col-12 col-lg-5">
            <div class="d-flex justify-content-center">
                <h3>{{$article -> nom}}</h3>
            </div>
            <p>{{$article -> description}}</p>
            <div class="d-flex justify-content-end">
                <p>{{$article -> prix}}€</p>
            </div>
            <div class="d-flex justify-content-end">
                <form action="{{ url('article/add') }}" method="POST">
                    @csrf
                    <input type="hidden" name="user_id" value="{{Auth::user() -> id}} ">
                    <input type="hidden" name="article_id" value="{{$article -> id}}">
                    <button type="submit" class="btn btn-success">Ajouter au panier</button>
                </form>
            </div>
        </div>

        <hr class="mt-4">

        <p>D'autres articles susceptibles de vous plaires :</p>

        <div class="col-md-3 col-12 col-lg-3 m-2 d-flex justify-content-center">
            <div class="card" style="width: 18rem;">
                <a href="{{ url('/article' , $article->id) }}"><img src="{{$article -> image}}" class="card-img-top" alt="..."></a>
                <div class="card-body">
                    <div class="d-flex">
                        <h6 class="card-title">{{$article -> nom}}</h6>
                        <div class="d-flex justify-content-end ms-auto">
                            <h6 class="card-title">{{$article -> prix}}€</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection