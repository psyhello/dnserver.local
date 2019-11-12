<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Внутренний портал СГСН</title>
        <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.4/css/bulma.css">
      <!-- Scripts -->
    <script defer src="https://use.fontawesome.com/releases/v5.3.1/js/all.js"></script>
</head>
<body>
    <div class="header"><a href="/"><h1>Внутренний портал СГСН</h1></a></div>
    <div class="columns">
        <div class="column"><a href="/issues">Заявки</a></div>
        <div class="column"><a href="/posts">Новости службы</a></div>
    </div>
    <div class="columns">
        <div class="box"><span>Меню</span>
            <li class="nav">
                <div class="menuitem"><a href="/issues/create">Подать заявку</a></div>
            </li> 
        </div>
        <div class="column">@yield('content')</div>
        <div class="box">
            @guest
                <li>
                    <a href="{{ route('login') }}">{{ __('Войти') }}</a>
                </li>
            @if (Route::has('register'))
                <li>
                    <a href="{{ route('register') }}">{{ __('Зарегистрироваться') }}</a>
                </li>
            @endif
            @else
            
                <a href="/home">{{ Auth::user()->name }}</a>
            
            <div>
                <a href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">{{ __('Выйти') }}</a>
            </div>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
        @endguest</div>

        </div>
</body>
</html>