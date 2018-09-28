<nav class="navbar navbar-expand navbar-dark bg-dark static-top">

    <a class="navbar-brand mr-1" href="index.html">Start Bootstrap</a>

    @guest
    @else
        <button class="btn btn-link btn-sm text-white order-1 order-sm-0" id="sidebarToggle" href="#">
            <i class="fas fa-bars"></i>
        </button>
    @endguest


    <!-- Navbar Search -->
    <div class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">

    </div>

    <!-- Navbar -->
    <ul class="navbar-nav ml-auto ml-md-0">

        {{--<li class="nav-item dropdown no-arrow mx-1">--}}
        {{--<a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">--}}
        {{--<i class="fas fa-envelope fa-fw"></i>--}}
        {{--<span class="badge badge-danger">7</span>--}}
        {{--</a>--}}
        {{--<div class="dropdown-menu dropdown-menu-right" aria-labelledby="messagesDropdown">--}}
        {{--<a class="dropdown-item" href="#">Action</a>--}}
        {{--<a class="dropdown-item" href="#">Another action</a>--}}
        {{--<div class="dropdown-divider"></div>--}}
        {{--<a class="dropdown-item" href="#">Something else here</a>--}}
        {{--</div>--}}
        {{--</li>--}}


        @guest

            <li class="nav-item">
                <a href="{{ route('login') }}" class="nav-link">Login</a>
            </li>


        @else
            <li class="nav-item dropdown no-arrow">
                <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown"
                   aria-haspopup="true" aria-expanded="false">
                    <i class="fas fa-user-circle fa-fw"></i>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                    <a class="dropdown-item" href="#">Profile</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="{{ route('logout') }}"
                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST"
                          style="display: none;">
                        @csrf
                    </form>
                </div>
            </li>
        @endguest


    </ul>

</nav>