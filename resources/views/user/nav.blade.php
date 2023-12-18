<nav class="navbar navbar-expand-lg">
    <div class="container">
        <a class="navbar-brand d-flex align-items-center" href="/">
            <div class="d-flex flex-column">
                <strong class="logo-text"><em>easy</em><em style="color: green;" >Shop</em></strong>
                <small class="logo-slogan">Brings the marketplaces</small>
            </div>
        </a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav align-items-center ms-lg-5">
                <li class="nav-item">
                    <a class="nav-link active" href="/home">Homepage</a>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarLightDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">Services</a>

                    <ul class="dropdown-menu dropdown-menu-light" aria-labelledby="navbarLightDropdownMenuLink">
                        <li><a class="dropdown-item" href="{{ url('about_b2b') }}">B2B Section</a></li>

                        <li><a class="dropdown-item" href="{{ url('about_subscription') }}">Subscription Service</a></li>
                    </ul>
                </li>
                
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarLightDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">About easyShop</a>

                    <ul class="dropdown-menu dropdown-menu-light" aria-labelledby="navbarLightDropdownMenuLink">
                        <li><a class="dropdown-item" href="{{url('/aboutUs')}}">About Us</a></li>

                        <li><a class="dropdown-item" href="#contact">Contact Us</a></li>
                    </ul>
                </li>

                

                @guest
                    @if (Route::has('login'))
                        <li class="nav-item ms-lg-auto">
                            <a class="nav-link" href="{{route('register')}}">Register</a>
                        </li>
                    @endif
                    
                    @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link custom-btn btn" href="{{route('login')}}">Login</a>
                        </li>
                    @endif
                @else
                    <li class="nav-item dropdown ms-lg-auto">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarLightDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false"> <em style="font-style: normal;" >@</em>{{Auth::user()->username }}</a>

                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('users_edit_profile') }}">
                                Edit Profile
                            </a>
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