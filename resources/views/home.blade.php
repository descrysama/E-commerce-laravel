@extends('layouts.template')

@section('content')

<div class="container">
    <div class="d-flex justify-content-evenly">
        <div class="row">
            <div class="col-md-4 col-12 col-lg-4">
                <div class="card" style="width: 18rem;">
                    <a href="#"><img src="{{ asset('img/plante1.jpg') }}" class="card-img-top" alt="..."></a>
                    <div class="card-body">
                        <div class="d-flex">
                            <h6 class="card-title">Nom plante</h6>
                            <div class="d-flex justify-content-end ms-auto">
                                <h6 class="card-title">Prix</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-12 col-lg-4">
                <div class="card" style="width: 18rem;">
                    <a href="#"><img src="{{ asset('img/plante2.jpg') }}" class="card-img-top" alt="2"></a>
                    <div class="card-body">
                        <div class="d-flex">
                            <h6 class="card-title">Nom plante</h6>
                            <div class="d-flex justify-content-end ms-auto">
                                <h6 class="card-title">Prix</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-12 col-lg-4">
                <div class="card" style="width: 18rem;">
                    <a href="#"><img src="{{ asset('img/plante3.jpg') }}" class="card-img-top" alt="3"></a>
                    <div class="card-body">
                        <div class="d-flex">
                            <h6 class="card-title">Nom plante</h6>
                            <div class="d-flex justify-content-end ms-auto">
                                <h6 class="card-title">Prix</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection