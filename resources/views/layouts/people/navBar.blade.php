<nav class="navbar-top navbar navbar-expand-md navbar-light bg-white shadow-sm">
    <div class="container">
        @auth
        <button type="button" id="sidebarCollapse" class="mr-5 btn btn-info">
            <i class="fas fa-align-left"></i>
            <span></span>
        </button>
        @endauth

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Left Side Of Navbar -->
            <ul class="navbar-nav mr-auto">

            </ul>

            <!-- Right Side Of Navbar -->
            <ul class="navbar-nav ml-auto">
                <!-- Authentication Links -->
                @guest
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                    </li>
                    @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                        </li>
                    @endif
                @else
                    <li class="nav-item">
                        @if(empty(Auth::user()->password))
                            <div class="avatar" style="background-image: url({{Auth::user()->getSocialProfiles[0]->social_avatar}})"></div> 
                        @else
                            {{-- @if(!empty(Auth::user()->avatar)) --}}
                            <div class="avatar" style="background-image: url({{Auth::user()->avatar}})"></div> 
                            {{-- @else
                                <div class="avatar" style="background-image: url(https://i.imgur.com/K44e3JJ.jpg)"></div> 
                            @endif --}}
                        @endif
                        
                    </li>
                    <li class="navbar-itemRight nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre> 
                            <b class="mr-4">{{ Auth::user()->name }} </b> 
                        </a>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            @if(!empty(Auth::user()->password))
                                <a class="dropdown-item" href="{{ route('profile.edit') }}">
                                    {{ __('Profile') }}
                                </a>
                            @endif
                            <a class="dropdown-item" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </div>
                    </li>
                @endguest
            </ul>
        </div>
    </div>
</nav>