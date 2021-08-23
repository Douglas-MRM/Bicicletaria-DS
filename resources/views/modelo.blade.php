<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/header.css">
    <link rel="stylesheet" href="@yield('css')">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
    <script src="resources/js/jquery-3.6.0.min.js"></script>
    <title>@yield('title')</title>
</head>

<body>
<header>
    <div class="container">
        <div class="row">
            <div class="col-4">
                <img src="https://s3-sa-east-1.amazonaws.com/assets.impulso.network/images/partners/rocketseat.svg">
            </div>
            <div class="col-8">
                <nav class="nav">
                    <a href="{{route('dashboard')}}" class="nav-link" href="">HOME</a>
                    <a href="#" class="nav-link" href="">CONFIGS</a>
                    <a href="#" class="nav-link" href="">SUPORTE</a>
                    <a href="#" class="nav-link" href="">SAIR</a>
                </nav>
            </div>
        </div>
    </div>
</header>
    @yield('content')
</body>

<style>
    body {
        background-color: #29292e;
    }
</style>

</html>