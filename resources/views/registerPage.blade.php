<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://use.fontawesome.com/f59bcd8580.js"></script>
    <title>FEST fes</title>
    <style>
        body {
            background: #eeeeee;
        }

        .btn-circle.btn-sm {
            width: 30px;
            height: 30px;
            padding: 6px 0px;
            border-radius: 15px;
            font-size: 8px;
            text-align: center;
        }

        .form-style input {
            border: 0;
            height: 50px;
            border-radius: 0;
            border-bottom: 1px solid #999;
        }

        .form-style input:focus {
            border-bottom: 1px solid #2dc997;
            box-shadow: none;
            outline: 0;
        }

        .sideline {
            display: flex;
            width: 100%;
            justify-content: center;
            align-items: center;
            text-align: center;
            color: #999;
        }

        button {
            height: 50px;
            transition: opacity 0.3s ease;
        }

        button:hover {
            opacity: 1;
            transform: scale(1.05);
            transition: transform 0.3s;
        }

        .button_log {
            height: 30px;
            width: 30px;
            border-radius: 15px;
        }

        .sideline:before,
        .sideline:after {
            content: '';
            border-top: 1px solid #ebebeb;
            margin: 0 20px 0 0;
            flex: 1 0 20px;
        }

        .sideline:after {
            margin: 0 0 0 20px;
        }

        .video-background {
            position: fixed;
            top: 0;
            left: 0;
            width: 100% !important;
            height: 100% !important;
            opacity: 80%;
            object-fit: cover;
            z-index: -1;
            overflow: hidden;
        }

        .slider-feature-card {
            background: #fff;
            max-width: 500px;
            height: 100%;
            text-align: center;
            -webkit-box-shadow: 0 2px 25px -3px rgba(0, 0, 0, 0.1);
            box-shadow: 0 2px 25px -3px rgba(0, 0, 0, 0.1);
        }

        .slider-feature-card h3,
        .slider-feature-card p {
            margin-bottom: 30px;
        }

        .tag {
            width: 100px;
            height: 100px;
        }

        .indicator {
            width: 20px;
            height: 20px;
            border-radius: 700%;
            background-color: #007bff;
            margin: 0 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .carousel-indicators .active .indicator {
            background-color: #28a745;
            width: 30px;
            height: 30px;
        }

        @media only screen and (max-width: 767px) {
            .hide-on-mobile {
                display: none;
            }
        }
    </style>
    <script type='text/javascript' src=''></script>
    <script type='text/javascript' src='https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js'></script>
</head>

<body>
    <div class="container">
        <video autoplay muted loop id="video-bg" class="video-background">
            <source src="{{ asset('video/bg.mp4') }}" type="video/mp4">
        </video>
        <div class="row m-5 no-gutters shadow-lg" style>
            <div class="col-md-7 bg-white p-5">
                <h3 class="p-2" style="text-align: center">Create Account</h3>
                <div class="row d-flex justify-content-center">
                    <button class="button button_log btn-md btn-circle border-danger" style="margin-right: 20px;">
                        <i class="fa fa-google"></i>
                    </button>
                    <button class="button button_log btn-md btn-circle border-primary" style="margin-right: 20px;">
                        <i class="fa fa-facebook"></i>
                    </button>
                    <button class="button button_log btn-md btn-circle border-info" style="margin-right: 20px;">
                        <i class="fa fa-twitter"></i>
                    </button>
                </div>


                <div class="sideline mt-2">or use email to register</div>

                <div class="form-style">
                    @if (session('message'))
                    <div class="alert alert-success">
                        {{ session('message') }}
                    </div>
                    @endif


                    <form method="post" action="{{ route('register') }}">

                        @csrf
                        <div class="form-group pb-2">
                            <input type="text" placeholder="Email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email" required>
                        </div>

                        <div class="form-group pb-2">
                            <input type="text" placeholder="Name" class="form-control" id="inputName" name="nama_user" required>
                        </div>

                        <div class="form-group pb-2">
                            <input type="number" placeholder="Phone Number" class="form-control" id="inputNo" name="no_telp" required>
                        </div>

                        <div class="form-group pb-2">
                            <input type="text" onfocus="(this.type='date')" onblur="(this.type='text')" placeholder="Tanggal Lahir" class="form-control" id="inputTanggal" name="tanggal_lahir" required>
                        </div>

                        <div class="form-group pb-2">
                            <input id="password" placeholder="Password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                        </div>

                        <div class="form-group pb-2">
                            <input id="password" placeholder="Confirm Password" type="password" class="form-control @error('password') is-invalid @enderror" name="password_confirmation" required autocomplete="current-password">
                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>

                        <div class="pb-2">
                            <button type="submit" class="btn w-100 font-weight-bold mt-2 in" style="background-color: #49D6A9; color: #fff">Register</button>
                        </div>
                    </form>

                    <div class="pt-2 text-center">Already have an account? <a href="{{ url('login') }}" style="color: #2dc997">Login</a>
                    </div>
                </div>
            </div>
            <div class="col-md-5 d-none d-md-block">
                <div id="demo" class="carousel slide" data-ride="carousel">
                    <!-- Indicators -->
                    <ol class="carousel-indicators">
                        <li data-target="#demo" data-slide-to="0" class="indicator active">
                        </li>
                        <li data-target="#demo" data-slide-to="1" class="indicator">
                        </li>
                        <li data-target="#demo" data-slide-to="2" class="indicator">
                        </li>
                    </ol>
                    <!-- The slideshow -->
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <div class="slider-feature-card">
                                <img src="{{ asset('images/FotoCarousel.png') }}" alt="">

                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="slider-feature-card">
                                <img src="{{ asset('images/FotoCarousel3.png') }}" alt="">

                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="slider-feature-card">
                                <img src="{{ asset('images/FotoCarousel2.png') }}" alt="">
                            </div>
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#demo" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#demo" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>


        </div>
    </div>
</body>

</html>