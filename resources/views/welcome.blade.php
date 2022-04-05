<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <title>Document</title>
</head>
    <body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="nav-link active" href="{{ url('/welcome') }}">SHOP</a>
    <div class="ms-5">
    <a class="navbar-brand " href="{{ url('/welcome') }}"><img src="{{ asset('img/logo-plantis.png')}}" alt="plantis" width="10%"></a>
    </div>
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
        
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>
