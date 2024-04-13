<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Revolve - Personal Magazine blog Template</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="plugins/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="plugins/themify/css/themify-icons.css">
    <link rel="stylesheet" href="plugins/slick-carousel/slick-theme.css">
    <link rel="stylesheet" href="plugins/slick-carousel/slick.css">
    <link rel="stylesheet" href="plugins/owl-carousel/owl.carousel.min.css">
    <link rel="stylesheet" href="plugins/owl-carousel/owl.theme.default.min.css">
    <link rel="stylesheet" href="plugins/magnific-popup/magnific-popup.css">
    <link rel="stylesheet" href="css/style.css">
</head>

<body class="d-flex align-items-center justify-content-center">
    <div class="container">
        <div class="row">
            <div class="col-md-5 mx-auto">
                <div class="myform form ">
                    <div class="logo mb-3">
                        <div class="col-md-12 text-center">
                            <h1>Login</h1>
                        </div>
                    </div>

                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    @if (session('invalid'))
                        <div class="alert alert-danger">
                            {{ session('invalid') }}
                        </div>
                    @endif
                    
                    <form action="{{ route('loginUser') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="exampleInputEmail1">Email address</label>
                            <input type="email" name="email" class="form-control" id="email" value="{{ old('email') }}" placeholder="Enter email">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Password</label>
                            <input type="password" name="password" id="password" class="form-control" value="{{ old('password')}}" placeholder="Enter Password">
                        </div>
                        <div class="col-md-12 text-center mb-3 p-0">
                            <button type="submit" class=" btn btn-block mybtn btn-primary tx-tfm">
                                Login
                            </button>
                        </div>
                        <div class="col-md-12 ">
                            <div class="form-group">
                                <p class="text-center">
                                    <a href="/register" id="signin">
                                    don't have an account? then create a one
                                    </a>
                                </p>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script src="plugins/jquery/jquery.js"></script>
    <script src="plugins/bootstrap/js/bootstrap.min.js"></script>
    <script src="plugins/bootstrap/js/popper.min.js"></script>
    <script src="plugins/owl-carousel/owl.carousel.min.js"></script>
    <script src="plugins/slick-carousel/slick.min.js"></script>
    <script src="plugins/magnific-popup/magnific-popup.js"></script>
    <script src="plugins/instafeed-js/instafeed.min.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCC72vZw-6tGqFyRhhg5CkF2fqfILn2Tsw"></script>
    <script src="plugins/google-map/gmap.js"></script>
    <script src="js/custom.js"></script>
</body>
</html>
