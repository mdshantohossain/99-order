<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <title>DreamGigs</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{asset('/')}}website/assets/img/favicon.png">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset('/')}}website/assets/css/bootstrap.min.css">

    <!-- Fontawesome CSS -->
    <link rel="stylesheet" href="{{asset('/')}}website/assets/plugins/fontawesome/css/fontawesome.min.css">
    <link rel="stylesheet" href="{{asset('/')}}website/assets/plugins/fontawesome/css/all.min.css">

    <!-- Owl carousel CSS -->
    <link rel="stylesheet" href="{{asset('/')}}website/assets/css/owl.carousel.min.css">

    <!-- Fearther CSS -->
    <link rel="stylesheet" href="{{asset('/')}}website/assets/css/feather.css">

    <!-- Main CSS -->
    <link rel="stylesheet" href="{{asset('/')}}website/assets/css/style.css">

</head>
<body>

<!-- Main Wrapper -->
<div class="main-wrapper">

    <!-- Sign In -->
    <div class="row gx-0">

        <!-- Banner Content -->
        <div class="col-lg-6">
            <div class="authentication-wrapper">
                <div class="authentication-content">
                    <div class="login-carousel owl-carousel">
                        <div class="login-slider">
                            <img src="{{asset('/')}}website/assets/img/login-card-01.svg" class="img-fluid" alt="img">
                            <h2>Looking to Buy a service?</h2>
                            <p>Browse Listing & More 900 Services </p>
                        </div>
                        <div class="login-slider">
                            <img src="{{asset('/')}}website/assets/img/login-card-02.svg" class="img-fluid" alt="img">
                            <h2>Looking to Sell a service?</h2>
                            <p>Browse Listing & More 900 Services </p>
                        </div>
                    </div>
                </div>
                <div class="login-bg">
                    <img src="{{asset('/')}}website/assets/img/bg/shape-01.png" alt="img" class="shape-01">
                    <img src="{{asset('/')}}website/assets/img/bg/shape-02.png" alt="img" class="shape-02">
                    <img src="{{asset('/')}}website/assets/img/bg/shape-03.png" alt="img" class="shape-03">
                    <img src="{{asset('/')}}website/assets/img/bg/shape-04.png" alt="img" class="shape-04">
                    <img src="{{asset('/')}}website/assets/img/bg/shape-05.png" alt="img" class="shape-05">
                    <img src="{{asset('/')}}website/assets/img/bg/shape-06.png" alt="img" class="shape-06">
                    <img src="{{asset('/')}}website/assets/img/bg/shape-07.png" alt="img" class="shape-07">
                </div>
            </div>
        </div>
        <!-- /Banner Content -->

        <!-- login Content -->
        <div class="col-lg-6">
            <div class="login-wrapper">
                <div class="login-content">
                    <form action="{{ route('login') }}" method="POST" id="loginForm">
                        @csrf
                        <div class="login-userset">
                            <div class="login-logo">
                                <img src="{{asset('/')}}website/assets/img/logo.svg" alt="img">
                            </div>
                            <div class="login-card">
                                <div class="login-heading">
                                    <h3>Hi, Welcome Back!</h3>
                                    <p>Fill the fields to get into your account</p>
                                </div>

                                <div class="form-row">
                                    <div class="form-wrap form-focus">
                                        <span class="form-icon">
                                            <i class="feather-mail"></i>
                                        </span>
                                        <input type="email" class="form-control floating" id="email" name="email" />
                                        <label class="focus-label">Email</label>
                                    </div>
                                    <span class="text-danger" id="emailError">{{ $errors->has('email') ? $errors->first('email') : '' }}</span>
                                </div>


                                <div class="form-row">
                                    <div class="form-wrap form-focus pass-group">
                                        <span class="form-icon">
                                            <i class="toggle-password feather-eye-off"></i>
                                        </span>
                                        <input type="password" id="password" class="pass-input form-control floating" name="password" />
                                        <label class="focus-label">Password</label>
                                    </div>
                                    <span class="text-danger" id="passwordError">{{ $errors->has('password') ? $errors->first('password') : '' }}</span>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-wrap">
                                            <label class="custom_check mb-0">Remember Me
                                                <input type="checkbox" name="remeber">
                                                <span class="checkmark"></span>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-wrap text-md-end">
                                            <a href="forgot-password.html" class="forgot-link">Forgot Password?</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-wrap mantadory-info d-none">
                                    <p><i class="feather-alert-triangle"></i>Fill all the fields to submit</p>
                                </div>
                                <button type="submit" class="btn btn-primary">Sign In</button>
                                <div class="login-or">
                                    <span class="span-or">or sign up with</span>
                                </div>
                                <ul class="login-social-link">
                                    <li>
                                        <a href="javascript:void(0);">
                                            <img src="{{asset('/')}}website/assets/img/icons/google-icon.svg" alt="Facebook"> Google
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);">
                                            <img src="{{asset('/')}}website/assets/img/icons/fb.svg" alt="Google"> Facebook
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="acc-in">
                                <p>Don’t have an account? <a href="{{ route('register') }}">Sign Up</a></p>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- /Login Content -->

    </div>
    <!-- /Sign In -->

    <!-- Mouse Cursor -->
    <div class="mouse-cursor cursor-outer"></div>
    <div class="mouse-cursor cursor-inner"></div>
    <!-- /Mouse Cursor -->

</div>
<!-- /Main Wrapper -->

<!-- jQuery -->
<script src="{{asset('/')}}website/assets/js/jquery-3.7.1.min.js" type="9deed29d6e12b9e48364cdc8-text/javascript"></script>

<!-- Bootstrap Core JS -->
<script src="{{asset('/')}}website/assets/js/bootstrap.bundle.min.js" type="9deed29d6e12b9e48364cdc8-text/javascript"></script>
<script src="{{asset('/')}}website/assets/js/bootstrap-scrollspy.js" type="9deed29d6e12b9e48364cdc8-text/javascript"></script>

<!-- Feather JS -->
<script src="{{asset('/')}}website/assets/js/feather.min.js" type="9deed29d6e12b9e48364cdc8-text/javascript"></script>

<!-- Owl Carousel JS -->
<script src="{{asset('/')}}website/assets/js/owl.carousel.min.js" type="9deed29d6e12b9e48364cdc8-text/javascript"></script>

<!-- Custom JS -->
<script src="{{asset('/')}}website/assets/js/script.js" type="9deed29d6e12b9e48364cdc8-text/javascript"></script>

<script src="{{asset('/')}}website/assets/cdn-cgi/scripts/7d0fa10a/cloudflare-static/rocket-loader.min.js" data-cf-settings="9deed29d6e12b9e48364cdc8-|49" defer></script><script defer src="https://static.cloudflareinsights.com/beacon.min.js/vcd15cbe7772f49c399c6a5babf22c1241717689176015" integrity="sha512-ZpsOmlRQV6y907TI0dKBHq9Md29nnaEIPlkf84rnaERnq6zvWvPUqr2ft8M1aS28oN72PdrCzSjY4U6VaAw1EQ==" data-cf-beacon='{"rayId":"91b2e783dec23f54","version":"2025.1.0","serverTiming":{"name":{"cfExtPri":true,"cfL4":true,"cfSpeedBrain":true,"cfCacheStatus":true}},"token":"3ca157e612a14eccbb30cf6db6691c29","b":1}' crossorigin="anonymous"></script>

<script>

</script>

</body>
</html>

