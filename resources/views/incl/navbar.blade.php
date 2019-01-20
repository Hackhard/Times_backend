
          </ul>
        </div>
      </nav>
      <nav class="navbar navbar-expand-md navbar-dark bg-dark navbar-laravel">
        <div class="container">
            <a class="navbar-brand" href="{{ url('/') }}">
                {{ config('app.name', 'Laravel') }}
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <!-- Left Side Of Navbar -->
                <ul class="navbar-nav mr-auto">

                </ul>
                <ul class="navbar-nav">
                  <li class="nav-item">
                    <a class="nav-link" href="/newapp/public/home">Home <span class="sr-only">(current)Home</span></a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="/newapp/public/about/">About Us</a>
                  </li>
                    <li class="nav-item">
                    <a class="nav-link" href="/newapp/public/posts/1/brat">Display</a>
                      </li>
                      <li class="nav-item">
                        <a  class ="nav-link" href="/newapp/public/posts/"><b>JSON</b></a>
                      </li>
                    </ul>
                <ul class="nav navbar-nav navbar-right">
                <!-- Right Side Of Navbar -->
                <ul class="navbar-nav ml-auto">
                    <!-- Authentication Links -->
                    @guest
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li>
                        <!--<li class="nav-item">
                            @/if (Route::has('register'))
                                <a class="nav-link" href="{/{ route('register') }}">{/{ __('Register') }}</a>
                            @/endif
                        </li>-->
                    @else
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>
                                &nbsp;&nbsp;&nbsp;&nbsp;<a href="//localhost/newapp/public/home">Home</a>
                                <!--Change this to website accordingly-->
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                            </div>
                        </li>
                    @endguest
                </ul>
            </div>
        </div>
    </nav>