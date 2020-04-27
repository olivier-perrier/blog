<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

    <!-- Styles -->
    <style>
        html,
        body {
            background-color: #fff;
            color: #636b6f;
            font-family: 'Nunito', sans-serif;
            font-weight: 200;
            height: 100vh;
            margin: 0;
        }

        .full-height {
            height: 100vh;
        }

        .flex-center {
            align-items: center;
            display: flex;
            justify-content: center;
        }

        .position-ref {
            position: relative;
        }

        .top-right {
            position: absolute;
            right: 10px;
            top: 18px;
        }

        .content {
            text-align: center;
        }

        .title {
            font-size: 84px;
        }

        .links>a {
            color: #636b6f;
            padding: 0 25px;
            font-size: 13px;
            font-weight: 600;
            letter-spacing: .1rem;
            text-decoration: none;
            text-transform: uppercase;
        }

        .m-b-md {
            margin-bottom: 30px;
        }
    </style>
</head>

<body>
    <div class="flex-center position-ref full-height">
        @if (Route::has('login'))
        <div class="top-right links">
            @auth
            <a href="{{ url('/home') }}">Home</a>
            @else
            <a href="{{ route('login') }}">Login</a>

            @if (Route::has('register'))
            <a href="{{ route('register') }}">Register</a>
            @endif
            @endauth
        </div>
        @endif

        <div class="content">
            <div class="title m-b-md">
                @auth
                Bonjour {{ Auth::user()->firstname }} {{ Auth::user()->lastname }}
                @else
                Monsieur Négoce
                @endauth
            </div>
            
            <div class="links">
            
                @auth

                @can('client')
                <a href="/users/{{ Auth::id() }}/edit">Pofil client</a>
                <a href="/projects">Mes projets</a>
                @endcan

                @can('negotiator')
                <a href="/users/{{ Auth::id() }}/edit">Pofil négociateur</a>
                <a href="/negotiations">Négociations</a>
                @endcan

                @can('admin')
                <a href="/admin/projects">Tous les projets</a>
                <a href="/admin/users">Tous les utilisateurs</a>
                @endcan

                @endauth
                
                <a href="/about">FAQ</a>
                <a href="/about">A propos</a>
                <a href="/articles">Articles</a>

            </div>
                
        </div>
    </div>
</body>

</html>