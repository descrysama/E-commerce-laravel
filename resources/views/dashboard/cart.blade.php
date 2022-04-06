@extends('layouts.template')

@section('content')

    <div class="container mx-auto m-2">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h3>Panier</h3>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            @foreach ($cart_content as $article)
                                <div class="col-md-12 m-2">
                                    <div class="card w-75">
                                        <div class="card-body d-flex justify-content-around align-items-center">
                                            <div class="m-2">
                                                <img src="{{$article->image}}" width="100rem" alt="">
                                            </div>
                                            <div class="m-2 h-100">
                                                <h5>{{$article->nom}}</h5>
                                            </div>
                                            <div class="m-2 h-100">
                                                <h5>{{$article->prix}}€</h5>
                                            </div>
                                            <div class="m-2 h-100">
                                                <form action="{{ url('cart/delete', $article->item_id) }}" method="POST">
                                                    @csrf
                                                    <button class="borderless green-h" type="submit"><i class="fa-solid fa-circle-xmark fa fa-2x"></i></button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                            <div class="col-md-12 m-2">
                                <h2>Total : {{$prix_total}}€</h2>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
