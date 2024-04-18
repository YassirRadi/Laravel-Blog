<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <title>Blog web app</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon" />
    <link rel="stylesheet" href="{{ asset('plugins/bootstrap/css/bootstrap.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('plugins/themify/css/themify-icons.css') }}" />
    <link rel="stylesheet" href="{{ asset('plugins/slick-carousel/slick-theme.css') }}" />
    <link rel="stylesheet" href="{{ asset('plugins/slick-carousel/slick.css') }}" />
    <link rel="stylesheet" href="{{ asset('plugins/owl-carousel/owl.carousel.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('plugins/owl-carousel/owl.theme.default.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('plugins/magnific-popup/magnific-popup.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/style.css') }}" />

  </head>
  <body>
    <header class="header-top bg-grey justify-content-center">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-2 header-left col-md-4 col-7">
            <ul class="list-inline header-socials-2 mb-0 text-center">
                <h2 class="list-inline-item">Blogr</h2>
              <li class="list-inline-item">
                <div class="search_toggle mobile-search d-md-block d-lg-none">
                  <i class="ti-search"></i>
                </div>
              </li>
            </ul>
          </div>

          <div class="col-lg-8 text-center col-md-8 col-5">
            <nav class="navbar navbar-expand-lg navigation">
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarContent" aria-controls="navbarContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="ti-menu"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarContent">
                <ul id="menu" class="menu navbar-nav mx-auto">
                  <li class="nav-item">
                    <a class="nav-link" href="/">Home</a>
                  </li>

                  @auth
                  <li class="nav-item">
                    <a href="/dashboard" class="nav-link">Dashboard</a>
                  </li>
                  
                  <li class="nav-item">
                    <a href="/profile" class="nav-link">Profile</a>
                  </li>

                  <form action="{{route('logout')}}" method="POST">
                    @csrf
                    <button type="submit" class="logout">
                      <li class="nav-item">
                        <a class="nav-link">logout</a>
                      </li>
                    </button>
                  </form>
                  @endauth

                  @guest
                  <li class="nav-item">
                    <a href="/register" class="nav-link">Sign Up</a>
                  </li>
                  @endguest
                  
                </ul>
              </div>
            </nav>
          </div>

          <div class="col-lg-2">
            <div class="text-right search">
              <div class="search_toggle d-none d-lg-block">
                <i class="ti-search"></i>
              </div>
            </div>
          </div>
        </div>
      </div>
    </header>

    <!--search overlay start-->
    <div class="search-wrap">
      <div class="overlay">
        <form action="#" class="search-form">
          <div class="container">
            <div class="row">
              <div class="col-md-10 col-9">
                <input type="text" class="form-control" placeholder="Search..." />
              </div>
              <div class="col-md-2 col-3 text-right">
                <div class="search_toggle toggle-wrap d-inline-block">
                  <i class="ti-close"></i>
                </div>
              </div>
            </div>
          </div>
        </form>
      </div>
    </div>
    <!-- search overlay end-->

    @yield('content')

    <section class="footer-2 section-padding gray-bg pb-5">
      <div class="container">
        <div class="footer-btm mt-5 pt-4 border-top">
          <div class="row">
            <div class="col-lg-12">
              <ul class="list-inline footer-socials-2 text-center">
                <li class="list-inline-item"><a href="#">Privacy policy</a></li>
                <li class="list-inline-item"><a href="#">Support</a></li>
                <li class="list-inline-item"><a href="#">About</a></li>
                <li class="list-inline-item"><a href="#">Contact</a></li>
                <li class="list-inline-item"><a href="#">Terms</a></li>
                <li class="list-inline-item"><a href="#">Category</a></li>
              </ul>
            </div>
          </div>
          <div class="row justify-content-center">
            <div class="col-lg-6">
              <div class="copyright text-center">
                copyright @2024 Yassir Radi
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <script src="plugins/jquery/jquery.js"></script>
    <script src="plugins/bootstrap/js/bootstrap.min.js"></script>
    <script src="plugins/bootstrap/js/popper.min.js"></script>
    <script src="plugins/owl-carousel/owl.carousel.min.js"></script>
    <script src="plugins/slick-carousel/slick.min.js"></script>
    <script src="plugins/magnific-popup/magnific-popup.js"></script>
    <script src="plugins/instafeed-js/instafeed.min.js"></script>
    <script src="js/custom.js"></script>
  </body>
</html>
