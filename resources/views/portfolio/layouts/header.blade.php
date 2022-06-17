<header class="theme-1">
    <div class="header__upper">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="header__upper--left">
                        <div class="logo">
                            <a href="{{url('/')}}"><img src="assets/images/logo-main.png" alt=""  height="50" width="100"></a>
                        </div>
                        <div class="search-bar">
                            <form class="form">
                                <span class="icon icon-left"><i class="fas fa-map-marker-alt"></i></span>
                                <input class="form-control" type="search" name="search-bar" placeholder="Tell us your location" id="search-bar">
                                <button class="button button-dark" type="submit"><img src="assets/images/arrow-shape.png" alt=""></button>
                            </form>
                            
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="header__upper--right">
                        <a href="{{url('/contact-us')}}" class="button button-dark big">Ride with Carrgo</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="header__lower">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <nav class="navbar navbar-expand-lg navbar-dark">
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav me-auto">
                                <li class="nav-item {{collect(request()->segments())->last() == '' ? 'active' : ''}}">
                                    <a class="nav-link" href="{{url('/')}}"><i class="fas fa-home"></i>Home <span class="sr-only"></span></a>
                                </li>
                                <li class="nav-item {{collect(request()->segments())->last() == 'about' ? 'active' : ''}}">
                                    <a class="nav-link" href="{{url('/about')}}"><i class="fas fa-exclamation-circle"></i>About</a>
                                </li>
                                <li class="nav-item {{collect(request()->segments())->last() == 'our-services' ? 'active' : ''}}">
                                    <a class="nav-link" href="{{url('/our-services')}}"><i class="fas fa-cog"></i>Our Services</a>
                                </li>
                                <li class="nav-item {{collect(request()->segments())->last() == 'our-vehicles' ? 'active' : ''}}">
                                    <a class="nav-link" href="{{url('/our-vehicles')}}"><i class="fas fa-taxi"></i>Our Vehicles</a>
                                </li>
                                <li class="nav-item {{collect(request()->segments())->last() == 'contact-us' ? 'active' : ''}}">
                                    <a class="nav-link" href="{{url('/contact-us')}}"><i class="fas fa-map-marker-alt"></i>Contacts</a>
                                </li>
                            </ul>
                            <div class="my-2 my-lg-0">
                                <a href="sign-up.html" class="button button-light big">Become a Driver</a>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</header>