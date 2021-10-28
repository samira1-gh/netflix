<header id="gen-header" class="gen-header-style-1 gen-has-sticky">
        <div class="gen-bottom-header">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <nav class="navbar navbar-expand-lg navbar-light">
                            <a class="navbar-brand" href="#">
                                <img class="img-fluid logo" src="{{ asset('images/logo-1.png') }}" alt="streamlab-image">
                            </a>
                            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                <div id="gen-menu-contain" class="gen-menu-contain">
                                    <ul id="gen-main-menu" class="navbar-nav ml-auto">
                                        <li class="menu-item">
                                            <a href="/" aria-current="page">Home</a>
                                             
                                           
                                        </li>
                                        <li class="menu-item">
                                            <a href="#">Movies</a>
                                           
                                        </li>
                                        <li class="menu-item">
                                            <a href="#">Tv Shows</a>
                                            
                                        </li>
                                        <li class="menu-item">
                                            <a href="#">Video</a>
                                           
                                        </li>
                                        <li class="menu-item">
                                            
                                            <a href="contact">Contact Us</a>
                                            
                                        </li>
                                        <li class="menu-item">
                                            <a href="pricing">Pricing</a>
                                          
                                            
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="gen-header-info-box">
                                <div class="gen-menu-search-block">
                                    <a href="javascript:void(0)" id="gen-seacrh-btn"><i class="fa fa-search"></i></a>
                                    <div class="gen-search-form">
                                        <form role="search" method="get" class="search-form" action="#">
                                            <label>
                                                <span class="screen-reader-text"></span>
                                                <input type="search" class="search-field" placeholder="Search …"
                                                    value="" name="s">
                                            </label>
                                            <button type="submit" class="search-submit"><span
                                                    class="screen-reader-text"></span></button>
                                        </form>
                                    </div>
                                </div>
                                @guest
                            @if (Route::has('login'))
                                <div class="gen-btn-container">
                                    <a href="{{ route('login') }}" class="gen-button">
                                        <div class="gen-button-block">
                                            <span class="gen-button-line-left"></span>
                                            <span class="gen-button-text">Subscribe</span>
                                        </div>
                                    </a>
                                </div>
                                @endif
                                @else
                                <div class="gen-account-holder">
                                    <a href="javascript:void(0)" id="gen-user-btn"><i class="fa fa-user"></i></a>
                                    <div class="gen-account-menu">
                                        <ul class="gen-account-menu">
                                            <!-- Pms Menu -->
                                            <li>
                                                <a href="{{ url('/dashboard') }}"><i class="fas fa-sign-in-alt"></i>
                                                Dashboard </a>
                                            </li>
                                            <li>
                                                <a onclick="event.preventDefault();
     document.getElementById('logout-form').submit();" href="{{ route('logout') }}"><i class="fa fa-user"></i>
                                                    {{ __('Logout') }}</a>
                                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
        @csrf
    </form>
                                            </li>
                                             
                                        </ul>
                                    </div>
                                </div>
                                @endguest
                            </div>
                            <button class="navbar-toggler" type="button" data-toggle="collapse"
                                data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                                aria-expanded="false" aria-label="Toggle navigation">
                                <i class="fas fa-bars"></i>
                            </button>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </header>
   