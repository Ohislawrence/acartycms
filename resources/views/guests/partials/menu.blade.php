<header class="main-header {{ (request()->is('servicerequest')) ? 'position-absolute' : 'z-10' }} w-100 ">
    <nav class="navbar navbar-expand-xl navbar-light sticky-header">
        <div class="container d-flex align-items-center justify-content-lg-between position-relative">
            <a href="index.html" class="navbar-brand d-flex align-items-center mb-md-0 text-decoration-none">
                <img src="{{ asset('acarty_logo2.png') }}" alt="acartylogo" width="113px" class="img-fluid logo-white" />
                <img src="{{ asset('acarty_logo2.png') }}" width="113px" alt="acartylogo" class="img-fluid logo-color" />
            </a>

            <a class="navbar-toggler position-absolute right-0 border-0" href="#offcanvasWithBackdrop" role="button">
                <span
        class="far fa-bars"
        data-bs-toggle="offcanvas"
        data-bs-target="#offcanvasWithBackdrop"
        aria-controls="offcanvasWithBackdrop"
      ></span>
            </a>
            <div class="clearfix"></div>
            <div class="collapse navbar-collapse justify-content-center">
                <ul class="nav col-12 col-md-auto justify-content-center main-menu">

                    <li><a href="{{ route('home.page') }}" class="nav-link">Home</a></li>

                    <li><a href="{{ route('service.page') }}" class="nav-link">Services</a></li>

                    <li><a href="{{ route('blogs.page') }}" class="nav-link">Blogs</a></li>

                    <li><a href="{{ route('learn.page') }}" class="nav-link">Learn</a></li>

                    <li><a href="{{ route('sell.page') }}" class="nav-link">Sell with Acarty</a></li>

                </ul>
            </div>

            <div class="action-btns text-end me-5 me-lg-0 d-none d-md-block d-lg-block">
                @auth
                <a href="{{ route('login') }}" class="btn btn-primary">Dashboard</a>
                @else
                <a href="{{ route('login') }}" class="btn btn-primary">Sign In</a>
                @endauth

            </div>
        </div>
    </nav>
    <!--offcanvas menu start-->
    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasWithBackdrop">
        <div class="offcanvas-header d-flex align-items-center mt-4">
            <a href="index.html" class="d-flex align-items-center mb-md-0 text-decoration-none">
                <img src="{{ asset('logo.png') }}" alt="logo" class="img-fluid ps-2" width="113"/>
            </a>
            <button type="button" class="close-btn text-danger" data-bs-dismiss="offcanvas" aria-label="Close">
                <i class="far fa-close"></i>
            </button>
        </div>
        <div class="offcanvas-body">
            <ul class="nav col-12 col-md-auto justify-content-center main-menu">

                <li><a href="{{ route('home.page') }}" class="nav-link">Home</a></li>

                <li><a href="{{ route('service.page') }}" class="nav-link">Services</a></li>

                <li><a href="{{ route('blogs.page') }}" class="nav-link">Blogs</a></li>

                <li><a href="{{ route('learn.page') }}" class="nav-link">Learn</a></li>

                <li><a href="{{ route('sell.page') }}" class="nav-link">Sell with Acarty</a></li>

            </ul>
            <div class="action-btns mt-4 ps-3">
                @auth
                <a href="{{ route('login') }}" class="btn btn-primary">Dashboard</a>
                @else
                <a href="{{ route('login') }}" class="btn btn-primary">Sign In</a>
                @endauth
            </div>
        </div>
    </div>
    <!--offcanvas menu end-->
</header>
<!--header end-->
<!--header section end-->
