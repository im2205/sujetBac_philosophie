<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/sujets.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

    <title>
        @yield('titrePage')
    </title>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="{{url('/  ')}}">PhiloSujet</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav">
            <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="{{ url('/') }}">Accueil</a>
            </li>
            <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="{{ url('sujets') }}">Recherche</a>
            </li> 
            <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="{{ url('statSujet') }}">Statistiques</a>
            </li> 
            <li class="nav-item dropdown">
                @auth
                <a href="" class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">Bienvenue, {{ Auth::user()->name }}</a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <li>
                        <form action="{{ route('logout') }}" id="logout-form" method="POST" style="display: none;">
                            @csrf
                        </form>
                        <a class="dropdown-item" href="{{ route('logout')}}"
                            onclick="event.preventDefault(); 
                            document.getElementById('logout-form').submit();">{{ __('Logout')}}
                        </a>
                    </li>
                </ul>
                @else
                    <a class="nav-link active" aria-current="page" href="{{ route('login') }}" >Login</a>
                @endauth
            </li>

                  
        </ul>
        </div>
    </div>
    </nav>
        @yield('recherche')
    <header>
        @yield('titreItem')
    </header>
    <div class="contenu">
    @yield('contenu')
    </div>
    <footer class ="footer">
        sujet philosophie - copyright 3AInfo ABDELGHANI BAUVENT GREINCH - 2021
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script> 
</body>
</html>
