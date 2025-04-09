<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from dreamgigs.dreamstechnologies.com/html/template/signup.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 04 Mar 2025 16:58:01 GMT -->
<head>
    <meta name="csrf-token" content="{{ csrf_token() }}">
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

    <!-- Sign Up -->
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

        <!-- Register Content -->
        <div class="col-lg-6">
            <div class="login-wrapper">
                <div class="login-content">
                    <form method="POST" action="{{ route('register') }}" id="registerForm">
                        @csrf
                        <div class="login-userset">
                            <div class="login-logo">
                                <img src="{{asset('/')}}website/assets/img/logo.svg" alt="img">
                            </div>
                            <div class="login-card">
                                <div class="login-heading">
                                    <h3>Hi, Welcome!</h3>
                                    <p>Register to get access to DreamGigs</p>
                                </div>

                                <div class="form-row">
                                    <div class="form-wrap form-focus">
                                        <span class="form-icon">
                                            <i class="feather-user"></i>
                                        </span>
                                        <input type="text" class="form-control floating" name="name" id="name" value="{{ old('name') }}" />
                                        <label class="focus-label">Name *</label>
                                    </div>
                                    <span class="text-danger" id="nameError">{{ $errors->has('name') ? $errors->first('name') : '' }}</span>
                                </div>

                                <div class="form-row">
                                    <div class="form-wrap form-focus">
                                        <span class="form-icon">
                                            <i class="feather-mail"></i>
                                        </span>
                                        <input
                                            type="email"
                                            class="form-control floating"
                                            id="email"
                                            name="email"
                                            value="{{ old('email') }}"
                                        />
                                        <label class="focus-label">Email</label>
                                    </div>
                                    <span class="text-danger" id="emailError">{{ $errors->has('email') ? $errors->first('email') : '' }}</span>
                                </div>


                                <div class="form-row">
                                    <div class="form-wrap form-focus pass-group">
                                        <span class="form-icon">
                                            <i class="toggle-password feather-eye-off"></i>
                                        </span>
                                        <input
                                            type="password"
                                            class="pass-input form-control floating"
                                            id="password"
                                            value="{{ old('password') }}"
                                            name="password"
                                        />
                                        <label class="focus-label">Password</label>
                                    </div>
                                    <span class="text-danger" id="passwordError">{{ $errors->has('password') ? $errors->first('password') : '' }}</span>
                                </div>


                                <div class="form-row">
                                    <div class="form-wrap form-focus pass-group">
                                        <span class="form-icon">
                                            <i class="toggle-password-confirm feather-eye-off"></i>
                                        </span>
                                        <input
                                            type="password"
                                            class="pass-confirm form-control floating"
                                            id="confirm_password"
                                            value="{{ old('password_confirmation') }}"
                                            name="password_confirmation"
                                        />
                                        <label class="focus-label">Confirm Password</label>
                                    </div>
                                    <span id="confirm_password_error" class="text-danger"></span>
                                </div>


                                <div class="form-row">
                                    <div class="form-wrap">
                                        <label class="custom_check mb-0">By login you agree to our <a href="#">Terms of Use</a> and <a href="#">Privacy Policy</a>
                                            <input type="checkbox" name="agree" id="agree" />
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                </div>


                                <button type="submit" class="btn btn-primary">Sign Up</button>
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
                                <p>Already have an account? <a href={{ route('login') }}>Sign In</a></p>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- /Register Content -->

    </div>
    <!-- /Sign Up -->

    <!-- Mouse Cursor -->
    <div class="mouse-cursor cursor-outer"></div>
    <div class="mouse-cursor cursor-inner"></div>
    <!-- /Mouse Cursor -->

</div>
<!-- /Main Wrapper -->

<!-- jQuery -->
<script src="{{asset('/')}}website/assets/js/jquery-3.7.1.min.js" type="89ccae1336d892809bfc0f47-text/javascript"></script>

<!-- Bootstrap Core JS -->
<script src="{{asset('/')}}website/assets/js/bootstrap.bundle.min.js" type="89ccae1336d892809bfc0f47-text/javascript"></script>
<script src="{{asset('/')}}website/assets/js/bootstrap-scrollspy.js" type="89ccae1336d892809bfc0f47-text/javascript"></script>

<!-- Feather JS -->
<script src="{{asset('/')}}website/assets/js/feather.min.js" type="89ccae1336d892809bfc0f47-text/javascript"></script>

<!-- Owl Carousel JS -->
<script src="{{asset('/')}}website/assets/js/owl.carousel.min.js" type="89ccae1336d892809bfc0f47-text/javascript"></script>

<!-- Custom JS -->
<script src="{{asset('/')}}website/assets/js/script.js" type="89ccae1336d892809bfc0f47-text/javascript"></script>

<script src="{{asset('/')}}website/assets/cdn-cgi/scripts/7d0fa10a/cloudflare-static/rocket-loader.min.js" data-cf-settings="89ccae1336d892809bfc0f47-|49" defer></script><script defer src="https://static.cloudflareinsights.com/beacon.min.js/vcd15cbe7772f49c399c6a5babf22c1241717689176015" integrity="sha512-ZpsOmlRQV6y907TI0dKBHq9Md29nnaEIPlkf84rnaERnq6zvWvPUqr2ft8M1aS28oN72PdrCzSjY4U6VaAw1EQ==" data-cf-beacon='{"rayId":"91b2e7855e0f3fdd","version":"2025.1.0","serverTiming":{"name":{"cfExtPri":true,"cfL4":true,"cfSpeedBrain":true,"cfCacheStatus":true}},"token":"3ca157e612a14eccbb30cf6db6691c29","b":1}' crossorigin="anonymous"></script>

<script>

    function nameValidation() {
        const name = document.getElementById('name').value.trim();
        const nameError = document.getElementById('nameError');

        if(!name) {
            nameError.innerText = 'Name field is required*';
            return false;
        }

        if(name.length < 2) {
            nameError.innerText = 'Minimum name length will be 2 characters';
            return false;
        }
        if(name.length > 22) {
            nameError.innerText = 'Maximum name length will be 22 characters';
            return false;
        }
        nameError.innerText = '';
        return true;
    }

    function emailValidation(callback) {
        const emailRegex = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,6}$/;
        const email = document.getElementById('email').value.trim();
        const emailError = document.getElementById('emailError');
        if(!email) {
            emailError.innerText = 'Email field is required*';
            return false;
        }

        if(!emailRegex.test(email)) {
            emailError.innerText = 'Invalid email address';
            return false;
        }

        emailError.innerText = '';

        $.ajax({
            url: '/check-email-address-exist',
            method: 'POST',
            data: { email: email },
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            success: (res) => {
                if (res.exists) {
                    emailError.innerText = 'This email address is already taken';
                    return callback(false);
                }
                callback(true);
            },
            error: (error) => {
                console.error('Error:', error);
            }
        });


        return false;
    }

    function passwordValidation() {
        const password = document.getElementById('password').value.trim();
        const passwordError = document.getElementById('passwordError');

        if(!password) {
            passwordError.innerText = 'Password field is required*';
            return false;
        }

        if(password.length < 8) {
            passwordError.innerText = 'Minimum password length will be 8 characters';
            return false;
        }

        if(password.length > 16) {
            passwordError.innerText = 'Maximum password length will be 8 characters';
            return false;
        }
        passwordError.innerText = '';
        return true;
    }

    function confirmPasswordValidation() {
        const confirmPassword = document.getElementById('confirm_password').value.trim();
        const password = document.getElementById('password').value.trim();
        const passwordError = document.getElementById('passwordError');
        const confirmPasswordError = document.getElementById('confirm_password_error');

        if(!confirmPassword) {
            confirmPasswordError.innerText = 'Confirm password is required field*';
            return false;
        }

        if( password !== confirmPassword) {
            confirmPasswordError.innerText = "These password not match";
            return false;
        }
        confirmPasswordError.innerText = '';
        return true;
    }

    document.getElementById('name').addEventListener('blur', nameValidation);

    document.getElementById('email').addEventListener('blur', () => emailValidation(() => {}));

    document.getElementById('password').addEventListener('blur', passwordValidation);

    document.getElementById('confirm_password').addEventListener('blur', confirmPasswordValidation)


     document.getElementById('registerForm').addEventListener('submit', (e) => {
         e.preventDefault();
         nameValidation()
         passwordValidation()
         confirmPasswordValidation();

         emailValidation((isEmailValid) => {
             if(nameValidation() && isEmailValid && passwordValidation() && confirmPasswordValidation()) {
                 console.log('form submitting...');
                 document.getElementById('registerForm').submit();
             }
         })

    });


</script>


</body>

</html>
