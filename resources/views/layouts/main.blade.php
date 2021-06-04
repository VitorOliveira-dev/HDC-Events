<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <!-- CSS da Aplicação -->
    <link rel="stylesheet" href="/css/style.css?25">
    <!-- CSS Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <script src="/js/script.js"></script>
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-light">
            <div class="collapse navbar-collapse" id="navbar">
            <a href="/" class="navbar-brand"><img id="logo" src="/img/hdcevents_logo.svg" alt="HDC Events"></a>
                <ul class="navbar-nav">
                    <li class="nav-item"><a href="/" class="nav-link">Eventos</a></li>
                    <li class="nav-item"><a href="/events/create" class="nav-link">Criar Evento</a></li>
                    @auth
                    <li class="nav-item"><a href="/dashboard" class="nav-link">Meus Eventos</a></li>
                    <li class="nav-item">
                        <form action="/logout" method="POST">
                            @csrf
                            <a href="/logout" class="nav-link" 
                            onclick="event.preventDefault(); 
                            this.closest('form').submit();">
                            Sair</a></form></li>
                        
                    @endauth
                    @guest
                    <li class="nav-item"><a href="/login" class="nav-link">Entrar</a></li>
                    <li class="nav-item"><a href="/register" class="nav-link">Cadastrar</a></li>
                    @endguest
                     </ul>
            </div>
        </nav>
    </header>
    <main>
        <div class="container-fluid">
            <div class="row">
                @if(session('msg'))
                <p class="msg">{{session('msg')}}</p>
                @endif
                
                @yield('content')
            </div>
        </div>
    </main>    
    <footer>
        <p>HDC Events &copy; 2021</p>
    </footer>
    <script src="https://unpkg.com/ionicons@5.4.0/dist/ionicons.js"></script>
</body>

</html>