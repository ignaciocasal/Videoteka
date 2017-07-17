<div class="navbar-header">

    <!-- Collapsed Hamburger -->
    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
        <span class="sr-only">Toggle Navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
    </button>

    <!-- Logo-->
    <a class="navbar-brand" href="{{ url('/') }}">
        {{ config('app.name', 'Videoteka') }}
    </a>
</div>

<div class="collapse navbar-collapse" id="app-navbar-collapse">
    <!-- Left Side Of Navbar -->
     @if(Auth::user() && Auth::user()->type == 'admin')
    <ul class="nav navbar-nav">
            <li>
                <a href="{{ route('movies.index') }}">{{ __('messages.movies') }}</a>
            </li>
            <li>
                <a href="{{ route('genres.index') }}">{{ __('messages.genres') }}</a>
            </li>
            <li>
                <a href="{{ route('users.index') }}">{{ __('messages.users') }}</a>
            </li>
            <li>
                <a href="{{ route('rents.index') }}">{{ __('messages.rents') }}</a>
            </li>
    </ul>
     @endif

    <!-- Right Side Of Navbar -->
     <ul class="nav navbar-nav navbar-right">
         <!-- Authentication Links -->
         @if (Auth::guest())
             <li><a href="{{ url('/login') }}">Iniciar sesión</a></li>
             <li><a href="{{ url('/register') }}">Registrarse</a></li>
         @else
             <li class="dropdown">
                 <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                     {{ Auth::user()->name }} <span class="caret"></span>
                 </a>

                 <ul class="dropdown-menu" role="menu">
                     <li>
                         <a href="{{ url('/logout') }}"
                            onclick="event.preventDefault();
                                                      document.getElementById('logout-form').submit();">
                             Cerrar Sesión
                         </a>

                         <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                             {{ csrf_field() }}
                         </form>
                     </li>
                 </ul>
             </li>
         @endif
     </ul>
</div>
