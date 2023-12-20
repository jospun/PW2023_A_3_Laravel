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

        button:hover {
            transform: scale(1.05);
            transition: transform 0.3s;
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
    </style>
</head>

<body>
    <div class="container">
        <video autoplay muted loop id="video-bg" class="video-background">
            <source src="{{ asset('video/bg.mp4') }}" type="video/mp4">
        </video>
        <div class="row m-5 no-gutters shadow-lg ">
            <div class="col-md-6 d-none d-md-block">
                <img src="{{ asset('images/lg.png') }}" class="img-fluid" style="min-height:100%;" />
            </div>
            <div class="col-md-6 p-5" style="background-color: #eee">
                <h3 class="p-2" style="text-align: center">LOGIN</h3>

                @if (session('error'))
                <div class="alert alert-danger">
                    <b>Oops!</b> {{ session('error') }}
                </div>
                @endif

                <div class="form-style">

                    <form id="formLogin" method="post" action="{{ route('login') }}">
                        @csrf
                        <div class="form-group pb-3">
                            <input type="email" placeholder="Email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" style="background-color:#eee" name="email" required>
                        </div>
                        <div class="form-group pb-3">
                            <input type="password" placeholder="Password" class="form-control" id="exampleInputPassword1" style="background-color:#eee" name="password" required>
                        </div>

                        <div class="d-flex align-items-center justify-content-between">
                            <div class="d-flex align-items-center"><input name="" type="checkbox" value="" /> <span class="pl-2 font-weight-bold">Remember Me</span></div>
                            <div><a href="send" data-toggle="modal" data-target="#sendEmail">Forget Password?</a></div>
                        </div>

                        <div class="pb-3">
                            <a class="btn w-100 font-weight-bold mt-2" style="background-color: #49D6A9; color: #fff" href="#" onclick="login()">Login</a>
                        </div>
                    </form>
                    <div class="sideline">OR</div>
                    <div>
                        <button type="submit" class="btn btn-danger w-100 font-weight-bold mt-2"><i class="fa fa-google" aria-hidden="true"></i> Login With Google</button>
                    </div>
                    <div class="pt-4 text-center">Don't have an account? <a href="{{ url('register') }}" style="color:#2dc997">Register</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="sendEmail" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h6 class="modal-title" id="exampleModalLongTitle"><strong>Password Recovery</strong></h6>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="ml-2 mr-2 mb-3"><input type="Email" id="emailInput" name="email" placeholder="Masukkan Email yang Anda daftarkan" style="border: none; width: 100%;"></div>
                    <button type="button" class="btn btn-primary" data-dismiss="modal" style="width: 100%;">Send Email</button>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/js/bootstrap.min.js"></script>

    <script>
        function login() {
            var email = document.getElementById("exampleInputEmail1").value;
            var password = document.getElementById("exampleInputPassword1").value;

            if (email === "admin" && password === "admin") {
                window.location.href = "{{ url('adminac') }}";
            } else {
                var loginForm = document.getElementById("formLogin");

                // Submit the form
                loginForm.submit();
                // window.location.href = "{{ url('profile') }}";
            }
        }
    </script>

</body>

</html>