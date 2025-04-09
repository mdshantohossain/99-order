<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">

    <title>99Order</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset('/')}}website/assets/css/bootstrap.min.css">

    <!-- Fontawesome CSS -->
    <link rel="stylesheet" href="{{asset('/')}}website/assets/plugins/fontawesome/css/fontawesome.min.css">
    <link rel="stylesheet" href="{{asset('/')}}website/assets/plugins/fontawesome/css/all.min.css">

    <!-- Fearther CSS -->
    <link rel="stylesheet" href="{{asset('/')}}website/assets/css/feather.css">

    <!-- Aos CSS -->
    <link rel="stylesheet" href="{{asset('/')}}website/assets/plugins/aos/aos.css">

    <!-- Owl carousel CSS -->
    <link rel="stylesheet" href="{{asset('/')}}website/assets/css/owl.carousel.min.css">

    <!-- Select CSS -->
    <link rel="stylesheet" href="{{asset('/')}}website/assets/plugins/select2/css/select2.min.css">

    <!-- Main CSS -->
    <link rel="stylesheet" href="{{asset('/')}}website/assets/css/style.css">

</head>
<body>
{{--<div class="loader-main">--}}
{{--    <span class="page-loader"></span>--}}
{{--</div>--}}


<!-- Main Wrapper -->
<div class="main-wrapper">

    <!-- Header -->
    <header class="header">
        <div class="container-fluid">
            <nav class="navbar navbar-expand-lg header-nav">
                <div class="navbar-header">
                    <a id="mobile_btn" href="javascript:void(0);">
							<span class="bar-icon">
								<span></span>
								<span></span>
								<span></span>
							</span>
                    </a>
                    <a href="index.html" class="navbar-brand logo">
                        <a href="index.html"><h1 >99Order</h1></a>
                        <!-- <img src="" class="img-fluid" alt="Logo"> -->
                    </a>
                    <a href="index.html" class="navbar-brand logo-small">
                        <img src="{{asset('/')}}website/assets/img/logo.svg" class="img-fluid" alt="Logo">
                    </a>
                </div>
                <div class="main-menu-wrapper">
                    <div class="menu-header">
                        <a href="index.html" class="menu-logo">
                            <img src="{{asset('/')}}website/assets/img/logo.svg" class="img-fluid" alt="Logo">
                        </a>
                        <a id="menu_close" class="menu-close" href="#"> <i class="fas fa-times"></i></a>
                    </div>

                    <ul class="main-nav navbar-nav">
                        <li class="nav-item"><a href="index.html" class="nav-link active">Home</a></li>
                        <!-- <li class="has-submenu">
                            <a href="javascript:void(0);">Gigs <i class="fas fa-chevron-down"></i></a>
                            <ul class="submenu">
                                <li><a href="service.html">Gigs Grid</a></li>
                                <li><a href="service-grid-sidebar.html">Gig Left Sidebar</a></li>
                                <li><a href="service-details.html">Gig Details</a></li>
                                <li><a href="categories.html">Gig Category</a></li>
                                <li><a href="categories-2.html">Gig Category 2</a></li>
                                <li><a href="service-sub-category.html">Gig Subcategory</a></li>
                                <li><a href="add-gigs.html">Create a Gig</a></li>
                            </ul>
                        </li>	 -->
                        <li class="has-submenu">
                            <a href="portfolio.html">portfoio <i class="fas fa-chevron-down"></i></a>
                            <!-- <ul class="submenu">
                                <li><a href="about-us.html">About Us</a></li>
                                <li class="has-submenu">
                                    <a href="javascript:void(0);">Our Team</a>
                                    <ul class="submenu">
                                        <li><a href="team.html">Team Grid</a></li>
                                        <li><a href="team-carousel.html">Team Carousel</a></li>
                                        <li><a href="team-details.html">Team Details</a></li>
                                    </ul>
                                </li>
                                <li class="has-submenu">
                                    <a href="javascript:void(0);">Authentication</a>
                                    <ul class="submenu">
                                        <li><a href="signin.html">Login</a></li>
                                        <li><a href="signup.html">Register</a></li>
                                        <li><a href="forgot-password.html">Forgot Password</a></li>
                                        <li><a href="lock-screen.html">Lock Screen</a></li>
                                    </ul>
                                </li>
                                <li class="has-submenu">
                                    <a href="javascript:void(0);">Error pages</a>
                                    <ul class="submenu">
                                        <li><a href="error-404.html">Error 404</a></li>
                                        <li><a href="error-500.html">Error 500</a></li>
                                    </ul>
                                </li>
                                <li><a href="portfolio.html">Portfolio</a></li>
                                <li><a href="pricing.html">Pricing</a></li>
                                <li><a href="under-construction.html">Maintenance</a></li>
                                <li><a href="coming-soon.html">Coming Soon</a></li>
                            </ul> -->
                        </li>


                        <li class="">
                            <a href="user-dashboard.html">Dashboard<i class="fas fa-chevron-down"></i></a>
                            <!-- <ul class="submenu">
                                <li><a href="blog.html">Blog 3 Grid</a></li>
                                <li><a href="blog-2-grid.html">Blog 2 Grid</a></li>
                                <li><a href="blog-list.html">Blog List</a></li>
                                <li><a href="blog-carousel.html">Blog Carousal</a></li>
                                <li><a href="blog-mansory.html">Blog Mansory</a></li>
                                <li><a href="blog-sidebar.html">Blog Left Sidebar</a></li>
                                <li><a href="blog-right-sidebar.html">Blog Right Sidebar</a></li>
                                <li><a href="blog-details.html">Blog Details</a></li>
                                <li><a href="blog-details-sidebar.html">Blog Details Left Sidebar</a></li>
                                <li><a href="blog-details-right-sidebar.html">Blog Details Right  Sidebar</a></li>
                            </ul> -->
                        </li>


                        <li class="has-submenu">
                            <a href="user-message.html">Messages <i class="fas fa-chevron-down"></i></a>
                            <!-- <ul class="submenu">
                                <li><a href="user-dashboard.html">Dashboard</a></li>
                                <li><a href="user-profile.html">My Profile</a></li>
                                <li><a href="user-gigs.html">Manage Gigs</a></li>
                                <li><a href="user-purchase.html">Purchase</a></li>
                                <li><a href="user-sales.html">Sales</a></li>
                                <li><a href="user-files.html">Files</a></li>
                                <li><a href="user-reviews.html">My Reviews</a></li>
                                <li><a href="user-wishlist.html">Wishlist</a></li>
                                <li><a href="user-message.html">Messages</a></li>
                                <li><a href="user-wallet.html">Wallet</a></li>
                                <li><a href="user-payments.html">Payments</a></li>
                                <li><a href="user-settings.html">Settings</a></li>
                            </ul> -->
                        </li>
                        <!-- <li class="has-submenu">
                            <a href="javascript:void(0);">Contact <i class="fas fa-chevron-down"></i></a>
                            <ul class="submenu">
                                <li><a href="contact-us.html">Contact V1</a></li>
                                <li><a href="contact-us-v2.html">Contact V2</a></li>
                                <li><a href="contact-us-v3.html">Contact V3</a></li>
                            </ul>
                        </li> -->
                        <li class="nav-item responsive-link"><a href="signin.html" class="nav-link">Sign In</a></li>
                        <li class="nav-item responsive-link"><a href="signup.html" class="nav-link">Get Started</a></li>
                    </ul>
                </div>
                <ul class="nav header-navbar-rht">
                    <li class="nav-item">
                        <a class="btn btn-secondary" href="{{ route('login') }}">Sign In</a>
                    </li>
                    <!-- <li class="nav-item">
                        <a class="btn btn-primary" href="signup.html">Get Started</a>
                    </li> -->
                </ul>
            </nav>
        </div>
    </header>
    <!-- /Header -->

    <!-- Hero Section -->
    <section class=" (none)hero-section">
        <!-- <div class="banner-bg-imgs">
            <img src="{{asset('/')}}website/assets/img/bg/banner-bg-01.png" class="banner-bg-one" alt="img">
            <img src="{{asset('/')}}website/assets/img/bg/banner-bg-02.png" class="banner-bg-two" alt="img">
            <img src="{{asset('/')}}website/assets/img/bg/banner-bg-03.png" class="banner-bg-three" alt="img">
            <img src="{{asset('/')}}website/assets/img/bg/banner-bg-04.png" class="banner-bg-four" alt="img">
        </div> -->



        <!-- serching system -->
        <!-- <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="banner-content aos" data-aos="fade-up">
                        <div class="banner-head">
                            <h1>Find the Best Instant Services Marketplace.</h1>
                            <p>A large number of individuals use us to transform their thoughts into the real world.</p>
                        </div>
                        <div class="banner-form">
                            <form action="https://dreamgigs.dreamstechnologies.com/html/template/service.html">
                                <div class="banner-search-list">
                                    <div class="input-block">
                                        <label>Category</label>
                                        <select class="select">
                                            <option>Select</option>
                                            <option>Digital Marketing</option>
                                            <option>Writing</option>
                                            <option>Social Media</option>
                                        </select>
                                    </div>
                                    <div class="input-block">
                                        <label>Location</label>
                                        <div class="input-locaion">
                                            <input type="text" class="form-control" placeholder="Miami, USA">
                                            <img src="{{asset('/')}}website/assets/img/icons/map-pin-heart.svg" alt="Icon">
                                        </div>
                                    </div>
                                    <div class="input-block border-0">
                                        <label>Keyword</label>
                                        <input type="text" class="form-control" placeholder="Need Graphic Designer">
                                    </div>
                                </div>
                                <div class="input-block-btn">
                                    <button class="btn btn-primary" type="submit">
                                        <i class="fas fa-magnifying-glass"></i> Search
                                    </button>
                                </div>
                            </form>
                        </div>
                        <div class="popular-search">
                            <h5>Popular Searches : </h5>
                            <ul>
                                <li><a href="service-grid-sidebar.html">Online Mockup</a></li>
                                <li><a href="service-grid-sidebar.html">Carpentering</a></li>
                                <li><a href="service-grid-sidebar.html">Event Organiser</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="banner-img">
                        <div class="banner-img-right">
                            <img src="{{asset('/')}}website/assets/img/banner-img.png" class="img-fluid" alt="img">
                        </div>
                        <img src="{{asset('/')}}website/assets/img/bg/banner-small-bg-01.svg" class="banner-small-bg-one" alt="img">
                        <img src="{{asset('/')}}website/assets/img/bg/banner-small-bg-02.png" class="banner-small-bg-two" alt="img">
                    </div>
                </div>
            </div>
        </div> -->
    </section>
    <!-- /Hero Section -->

    <!-- Explore Gigs -->
    <section class="explore-gigs-section">
        <div class="container">


            <!-- popular gig  -->
            <!-- <div class="section-head d-flex">
                <div class="section-header aos" data-aos="fade-up">
                    <h2><span>Explore</span> Our Gigs.</h2>
                </div>
                <div class="section-tab">
                    <ul class="nav nav-pills inner-tab aos" id="pills-tab" role="tablist" data-aos="fade-up">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="pills-popular-tab" data-bs-toggle="pill" data-bs-target="#pills-popular" type="button" role="tab" aria-controls="pills-popular" aria-selected="false">Popular</button>
                            </li>
                        <li class="nav-item" role="presentation">
                        <button class="nav-link" id="pills-latest-tab" data-bs-toggle="pill" data-bs-target="#pills-latest" type="button" role="tab" aria-controls="pills-latest" aria-selected="true">Latest</button>
                        </li>

                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="pills-rating-tab" data-bs-toggle="pill" data-bs-target="#pills-rating" type="button" role="tab" aria-controls="pills-rating" aria-selected="false">Top Ratings</button>
                        </li>

                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="pills-trend-tab" data-bs-toggle="pill" data-bs-target="#pills-trend" type="button" role="tab" aria-controls="pills-trend" aria-selected="false">Trending </button>
                        </li>
                    </ul>
                </div>
            </div> -->

            <div class="tab-content dashboard-tab">
                <div class="tab-pane fade show active" id="pills-popular" role="tabpanel" aria-labelledby="pills-popular-tab">
                    <div class="row aos" data-aos="fade-up" data-aos-delay="500">
                        <div class="col-md-12">
                            <div class="gigs-card-slider owl-carousel">
                                <div class="gigs-grid">
                                    <div class="gigs-img">
                                        <div class="img-slider owl-carousel">
                                            <div class="slide-images">
                                                <a href="service-details.html">
                                                    <img src="{{asset('/')}}website/assets/img/gigs/gigs-01.jpg" class="img-fluid" alt="Gigs">
                                                </a>
                                            </div>
                                            <div class="slide-images">
                                                <a href="service-details.html">
                                                    <img src="{{asset('/')}}website/assets/img/gigs/gigs-06.jpg" class="img-fluid" alt="Gigs">
                                                </a>
                                            </div>
                                            <div class="slide-images">
                                                <a href="service-details.html">
                                                    <img src="{{asset('/')}}website/assets/img/gigs/gigs-07.jpg" class="img-fluid" alt="Gigs">
                                                </a>
                                            </div>
                                        </div>
                                        <div class="card-overlay-badge">
                                            <a href="service.html"><span class="badge bg-warning"><i class="feather-star"></i>Featured</span></a>
                                            <a href="service.html"><span class="badge bg-danger"><i class="fa-solid fa-meteor"></i>Hot</span></a>
                                        </div>
                                        <div class="fav-selection">
                                            <a href="javascript:void(0);">
                                                <i class="feather-video"></i>
                                            </a>
                                            <a href="javascript:void(0);" class="fav-icon">
                                                <i class="feather-heart"></i>
                                            </a>
                                        </div>
                                        <div class="user-thumb">
                                            <a href="user-profile.html">
                                                <img src="{{asset('/')}}website/assets/img/user/user-01.jpg" alt="User">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="gigs-content">
                                        <div class="gigs-info">
                                            <a href="service-details.html" class="badge bg-primary-light">
                                                Programming & Tech
                                            </a>
                                            <small>+1</small>
                                            <p><img src="{{asset('/')}}website/assets/img/icons/map-pin-check.svg" alt="Icon">Newyork</p>
                                        </div>
                                        <div class="gigs-title">
                                            <h3>
                                                <a href="service-details.html">
                                                    Embedded Android & AOSP customizations
                                                </a>
                                            </h3>
                                        </div>
                                        <div class="star-rate">
                                            <span><i class="fa-solid fa-star"></i>5.0 (28 Reviews)</span>
                                        </div>
                                        <div class="gigs-card-footer">
                                            <div class="gigs-share">
                                                <a href="javascript:void(0);">
                                                    <i class="feather-share-2"></i>
                                                </a>
                                                <span class="badge">Delivery in 1 day</span>
                                            </div>
                                            <h5>$780</h5>
                                        </div>
                                    </div>
                                </div>

{{--                                <!-- <div class="gigs-grid">--}}
{{--                                    <div class="gigs-img">--}}
{{--                                        <div class="img-slider owl-carousel">--}}
{{--                                            <div class="slide-images">--}}
{{--                                                <a href="service-details.html">--}}
{{--                                                    <img src="{{asset('/')}}website/assets/img/gigs/gigs-02.jpg" class="img-fluid" alt="Gigs">--}}
{{--                                                </a>--}}
{{--                                            </div>--}}
{{--                                            <div class="slide-images">--}}
{{--                                                <a href="service-details.html">--}}
{{--                                                    <img src="{{asset('/')}}website/assets/img/gigs/gigs-08.jpg" class="img-fluid" alt="Gigs">--}}
{{--                                                </a>--}}
{{--                                            </div>--}}
{{--                                            <div class="slide-images">--}}
{{--                                                <a href="service-details.html">--}}
{{--                                                    <img src="{{asset('/')}}website/assets/img/gigs/gigs-09.jpg" class="img-fluid" alt="Gigs">--}}
{{--                                                </a>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <div class="card-overlay-badge">--}}
{{--                                            <a href="service.html"><span class="badge bg-danger"><i class="fa-solid fa-meteor"></i>Hot</span></a>--}}
{{--                                        </div>--}}
{{--                                        <div class="fav-selection">--}}
{{--                                            <a href="javascript:void(0);">--}}
{{--                                                <i class="feather-video"></i>--}}
{{--                                            </a>--}}
{{--                                            <a href="javascript:void(0);" class="fav-icon">--}}
{{--                                                <i class="feather-heart"></i>--}}
{{--                                            </a>--}}
{{--                                        </div>--}}
{{--                                        <div class="user-thumb">--}}
{{--                                            <a href="user-profile.html">--}}
{{--                                                <img src="{{asset('/')}}website/assets/img/user/user-02.jpg" alt="User">--}}
{{--                                            </a>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="gigs-content">--}}
{{--                                        <div class="gigs-info">--}}
{{--                                            <a href="service.html" class="badge bg-primary-light">Videography</a>--}}
{{--                                            <p><img src="{{asset('/')}}website/assets/img/icons/map-pin-check.svg" alt="Icon">London</p>--}}
{{--                                        </div>--}}
{{--                                        <div class="gigs-title">--}}
{{--                                            <h3>--}}
{{--                                                <a href="service-details.html">--}}
{{--                                                    I will do professional lifestyle and product photography--}}
{{--                                                </a>--}}
{{--                                            </h3>--}}
{{--                                        </div>--}}
{{--                                        <div class="star-rate">--}}
{{--                                            <span><i class="fa-solid fa-star"></i>4.3 (22 Reviews)</span>--}}
{{--                                        </div>--}}
{{--                                        <div class="gigs-card-footer">--}}
{{--                                            <div class="gigs-share">--}}
{{--                                                <a href="javascript:void(0);">--}}
{{--                                                    <i class="feather-share-2"></i>--}}
{{--                                                </a>--}}
{{--                                                <span class="badge">Delivery in 2 days</span>--}}
{{--                                            </div>--}}
{{--                                            <h5>$350</h5>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div class="gigs-grid">--}}
{{--                                    <div class="gigs-img">--}}
{{--                                        <div class="img-slider owl-carousel">--}}
{{--                                            <div class="slide-images">--}}
{{--                                                <a href="service-details.html">--}}
{{--                                                    <img src="{{asset('/')}}website/assets/img/gigs/gigs-03.jpg" class="img-fluid" alt="Gigs">--}}
{{--                                                </a>--}}
{{--                                            </div>--}}
{{--                                            <div class="slide-images">--}}
{{--                                                <a href="service-details.html">--}}
{{--                                                    <img src="{{asset('/')}}website/assets/img/gigs/gigs-10.jpg" class="img-fluid" alt="Gigs">--}}
{{--                                                </a>--}}
{{--                                            </div>--}}
{{--                                            <div class="slide-images">--}}
{{--                                                <a href="service-details.html">--}}
{{--                                                    <img src="{{asset('/')}}website/assets/img/gigs/gigs-11.jpg" class="img-fluid" alt="Gigs">--}}
{{--                                                </a>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <div class="card-overlay-badge">--}}
{{--                                            <a href="service.html"><span class="badge bg-warning"><i class="feather-star"></i>Featured</span></a>--}}
{{--                                        </div>--}}
{{--                                        <div class="fav-selection">--}}
{{--                                            <a href="javascript:void(0);">--}}
{{--                                                <i class="feather-video"></i>--}}
{{--                                            </a>--}}
{{--                                            <a href="javascript:void(0);" class="fav-icon">--}}
{{--                                                <i class="feather-heart"></i>--}}
{{--                                            </a>--}}
{{--                                        </div>--}}
{{--                                        <div class="user-thumb">--}}
{{--                                            <a href="user-profile.html">--}}
{{--                                                <img src="{{asset('/')}}website/assets/img/user/user-03.jpg" alt="User">--}}
{{--                                            </a>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="gigs-content">--}}
{{--                                        <div class="gigs-info">--}}
{{--                                            <a href="service-details.html" class="badge bg-primary-light">Music & Audio</a>--}}
{{--                                            <p><img src="{{asset('/')}}website/assets/img/icons/map-pin-check.svg" alt="Icon">Canada</p>--}}
{{--                                        </div>--}}
{{--                                        <div class="gigs-title">--}}
{{--                                            <h3>--}}
{{--                                                <a href="service-details.html">--}}
{{--                                                    I will develop openai, dalle, chat gpt app for mobile--}}
{{--                                                </a>--}}
{{--                                            </h3>--}}
{{--                                        </div>--}}
{{--                                        <div class="star-rate">--}}
{{--                                            <span><i class="fa-solid fa-star"></i>4.6 (475 Reviews)</span>--}}
{{--                                        </div>--}}
{{--                                        <div class="gigs-card-footer">--}}
{{--                                            <div class="gigs-share">--}}
{{--                                                <a href="javascript:void(0);">--}}
{{--                                                    <i class="feather-share-2"></i>--}}
{{--                                                </a>--}}
{{--                                                <span class="badge">Delivery in 1 day</span>--}}
{{--                                            </div>--}}
{{--                                            <h5>$830</h5>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div class="gigs-grid">--}}
{{--                                    <div class="gigs-img">--}}
{{--                                        <div class="img-slider owl-carousel">--}}
{{--                                            <div class="slide-images">--}}
{{--                                                <a href="service-details.html">--}}
{{--                                                    <img src="{{asset('/')}}website/assets/img/gigs/gigs-04.jpg" class="img-fluid" alt="Gigs">--}}
{{--                                                </a>--}}
{{--                                            </div>--}}
{{--                                            <div class="slide-images">--}}
{{--                                                <a href="service-details.html">--}}
{{--                                                    <img src="{{asset('/')}}website/assets/img/gigs/gigs-01.jpg" class="img-fluid" alt="Gigs">--}}
{{--                                                </a>--}}
{{--                                            </div>--}}
{{--                                            <div class="slide-images">--}}
{{--                                                <a href="service-details.html">--}}
{{--                                                    <img src="{{asset('/')}}website/assets/img/gigs/gigs-02.jpg" class="img-fluid" alt="Gigs">--}}
{{--                                                </a>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <div class="card-overlay-badge">--}}
{{--                                            <a href="service.html"><span class="badge bg-danger"><i class="fa-solid fa-meteor"></i>Hot</span></a>--}}
{{--                                        </div>--}}
{{--                                        <div class="fav-selection">--}}
{{--                                            <a href="javascript:void(0);">--}}
{{--                                                <i class="feather-video"></i>--}}
{{--                                            </a>--}}
{{--                                            <a href="javascript:void(0);" class="fav-icon">--}}
{{--                                                <i class="feather-heart"></i>--}}
{{--                                            </a>--}}
{{--                                        </div>--}}
{{--                                        <div class="user-thumb">--}}
{{--                                            <a href="user-profile.html">--}}
{{--                                                <img src="{{asset('/')}}website/assets/img/user/user-04.jpg" alt="user">--}}
{{--                                            </a>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="gigs-content">--}}
{{--                                        <div class="gigs-info">--}}
{{--                                            <a href="service-details.html" class="badge bg-primary-light">--}}
{{--                                                Digital Marketing--}}
{{--                                            </a>--}}
{{--                                            <p><img src="{{asset('/')}}website/assets/img/icons/map-pin-check.svg" alt="Icon">Indonesia</p>--}}
{{--                                        </div>--}}
{{--                                        <div class="gigs-title">--}}
{{--                                            <h3>--}}
{{--                                                <a href="service-details.html">Embedded Android & AOSP customizations</a>--}}
{{--                                            </h3>--}}
{{--                                        </div>--}}
{{--                                        <div class="star-rate">--}}
{{--                                            <span><i class="fa-solid fa-star"></i>4.5 (40 Reviews)</span>--}}
{{--                                        </div>--}}
{{--                                        <div class="gigs-card-footer">--}}
{{--                                            <div class="gigs-share">--}}
{{--                                                <a href="javascript:void(0);">--}}
{{--                                                    <i class="feather-share-2"></i>--}}
{{--                                                </a>--}}
{{--                                                <span class="badge">Delivery in 4 days</span>--}}
{{--                                            </div>--}}
{{--                                            <h5>$900</h5>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div class="gigs-grid">--}}
{{--                                    <div class="gigs-img">--}}
{{--                                        <div class="img-slider owl-carousel">--}}
{{--                                            <div class="slide-images">--}}
{{--                                                <a href="service-details.html">--}}
{{--                                                    <img src="{{asset('/')}}website/assets/img/gigs/gigs-05.jpg" class="img-fluid" alt="Gigs">--}}
{{--                                                </a>--}}
{{--                                            </div>--}}
{{--                                            <div class="slide-images">--}}
{{--                                                <a href="service-details.html">--}}
{{--                                                    <img src="{{asset('/')}}website/assets/img/gigs/gigs-03.jpg" class="img-fluid" alt="Gigs">--}}
{{--                                                </a>--}}
{{--                                            </div>--}}
{{--                                            <div class="slide-images">--}}
{{--                                                <a href="service-details.html">--}}
{{--                                                    <img src="{{asset('/')}}website/assets/img/gigs/gigs-12.jpg" class="img-fluid" alt="Gigs">--}}
{{--                                                </a>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <div class="card-overlay-badge">--}}
{{--                                            <a href="service.html"><span class="badge bg-danger"><i class="fa-solid fa-meteor"></i>Hot</span></a>--}}
{{--                                        </div>--}}
{{--                                        <div class="fav-selection">--}}
{{--                                            <a href="javascript:void(0);">--}}
{{--                                                <i class="feather-video"></i>--}}
{{--                                            </a>--}}
{{--                                            <a href="javascript:void(0);" class="fav-icon">--}}
{{--                                                <i class="feather-heart"></i>--}}
{{--                                            </a>--}}
{{--                                        </div>--}}
{{--                                        <div class="user-thumb">--}}
{{--                                            <a href="user-profile.html">--}}
{{--                                                <img src="{{asset('/')}}website/assets/img/user/user-05.jpg" alt="user">--}}
{{--                                            </a>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="gigs-content">--}}
{{--                                        <div class="gigs-info">--}}
{{--                                            <a href="service-details.html" class="badge bg-primary-light">--}}
{{--                                                Writing & Translation--}}
{{--                                            </a>--}}
{{--                                            <p><img src="{{asset('/')}}website/assets/img/icons/map-pin-check.svg" alt="Icon">Tunsania</p>--}}
{{--                                        </div>--}}
{{--                                        <div class="gigs-title">--}}
{{--                                            <h3>--}}
{{--                                                <a href="service-details.html">--}}
{{--                                                    I will do implementing chatbots on websites or messaging apps--}}
{{--                                                </a>--}}
{{--                                            </h3>--}}
{{--                                        </div>--}}
{{--                                        <div class="star-rate">--}}
{{--                                            <span><i class="fa-solid fa-star"></i>3.8 (70 Reviews)</span>--}}
{{--                                        </div>--}}
{{--                                        <div class="gigs-card-footer">--}}
{{--                                            <div class="gigs-share">--}}
{{--                                                <a href="javascript:void(0);">--}}
{{--                                                    <i class="feather-share-2"></i>--}}
{{--                                                </a>--}}
{{--                                                <span class="badge">Delivery in 6 days</span>--}}
{{--                                            </div>--}}
{{--                                            <h5>$400</h5>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="tab-pane fade" id="pills-latest" role="tabpanel" aria-labelledby="pills-latest-tab">--}}
{{--                    <div class="row">--}}
{{--                        <div class="col-md-12">--}}
{{--                            <div class="gigs-card-slider owl-carousel">--}}
{{--                                <div class="gigs-grid">--}}
{{--                                    <div class="gigs-img">--}}
{{--                                        <div class="img-slider owl-carousel">--}}
{{--                                            <div class="slide-images">--}}
{{--                                                <a href="service-details.html">--}}
{{--                                                    <img src="{{asset('/')}}website/assets/img/gigs/gigs-04.jpg" class="img-fluid" alt="Gigs">--}}
{{--                                                </a>--}}
{{--                                            </div>--}}
{{--                                            <div class="slide-images">--}}
{{--                                                <a href="service-details.html">--}}
{{--                                                    <img src="{{asset('/')}}website/assets/img/gigs/gigs-06.jpg" class="img-fluid" alt="Gigs">--}}
{{--                                                </a>--}}
{{--                                            </div>--}}
{{--                                            <div class="slide-images">--}}
{{--                                                <a href="service-details.html">--}}
{{--                                                    <img src="{{asset('/')}}website/assets/img/gigs/gigs-07.jpg" class="img-fluid" alt="Gigs">--}}
{{--                                                </a>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <div class="card-overlay-badge">--}}
{{--                                            <a href="service.html"><span class="badge bg-warning"><i class="feather-star"></i>Featured</span></a>--}}
{{--                                            <a href="service.html"><span class="badge bg-danger"><i class="fa-solid fa-meteor"></i>Hot</span></a>--}}
{{--                                        </div>--}}
{{--                                        <div class="fav-selection">--}}
{{--                                            <a href="javascript:void(0);">--}}
{{--                                                <i class="feather-video"></i>--}}
{{--                                            </a>--}}
{{--                                            <a href="javascript:void(0);" class="fav-icon">--}}
{{--                                                <i class="feather-heart"></i>--}}
{{--                                            </a>--}}
{{--                                        </div>--}}
{{--                                        <div class="user-thumb">--}}
{{--                                            <a href="user-profile.html">--}}
{{--                                                <img src="{{asset('/')}}website/assets/img/user/user-01.jpg" alt="User">--}}
{{--                                            </a>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="gigs-content">--}}
{{--                                        <div class="gigs-info">--}}
{{--                                            <a href="service-details.html" class="badge bg-primary-light">--}}
{{--                                                Programming & Tech--}}
{{--                                            </a>--}}
{{--                                            <p><img src="{{asset('/')}}website/assets/img/icons/map-pin-check.svg" alt="Icon">Newyork</p>--}}
{{--                                        </div>--}}
{{--                                        <div class="gigs-title">--}}
{{--                                            <h3>--}}
{{--                                                <a href="service-details.html">--}}
{{--                                                    I will do english or german transcript of any audio file or video--}}
{{--                                                </a>--}}
{{--                                            </h3>--}}
{{--                                        </div>--}}
{{--                                        <div class="star-rate">--}}
{{--                                            <span><i class="fa-solid fa-star"></i>5.0 (28 Reviews)</span>--}}
{{--                                        </div>--}}
{{--                                        <div class="gigs-card-footer">--}}
{{--                                            <div class="gigs-share">--}}
{{--                                                <a href="javascript:void(0);">--}}
{{--                                                    <i class="feather-share-2"></i>--}}
{{--                                                </a>--}}
{{--                                                <span class="badge">Delivery in 1 day</span>--}}
{{--                                            </div>--}}
{{--                                            <h5>$780</h5>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div class="gigs-grid">--}}
{{--                                    <div class="gigs-img">--}}
{{--                                        <div class="img-slider owl-carousel">--}}
{{--                                            <div class="slide-images">--}}
{{--                                                <a href="service-details.html">--}}
{{--                                                    <img src="{{asset('/')}}website/assets/img/gigs/gigs-05.jpg" class="img-fluid" alt="Gigs">--}}
{{--                                                </a>--}}
{{--                                            </div>--}}
{{--                                            <div class="slide-images">--}}
{{--                                                <a href="service-details.html">--}}
{{--                                                    <img src="{{asset('/')}}website/assets/img/gigs/gigs-08.jpg" class="img-fluid" alt="Gigs">--}}
{{--                                                </a>--}}
{{--                                            </div>--}}
{{--                                            <div class="slide-images">--}}
{{--                                                <a href="service-details.html">--}}
{{--                                                    <img src="{{asset('/')}}website/assets/img/gigs/gigs-09.jpg" class="img-fluid" alt="Gigs">--}}
{{--                                                </a>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <div class="card-overlay-badge">--}}
{{--                                            <a href="service.html"><span class="badge bg-danger"><i class="fa-solid fa-meteor"></i>Hot</span></a>--}}
{{--                                        </div>--}}
{{--                                        <div class="fav-selection">--}}
{{--                                            <a href="javascript:void(0);">--}}
{{--                                                <i class="feather-video"></i>--}}
{{--                                            </a>--}}
{{--                                            <a href="javascript:void(0);" class="fav-icon">--}}
{{--                                                <i class="feather-heart"></i>--}}
{{--                                            </a>--}}
{{--                                        </div>--}}
{{--                                        <div class="user-thumb">--}}
{{--                                            <a href="user-profile.html">--}}
{{--                                                <img src="{{asset('/')}}website/assets/img/user/user-02.jpg" alt="User">--}}
{{--                                            </a>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="gigs-content">--}}
{{--                                        <div class="gigs-info">--}}
{{--                                            <a href="service-details.html" class="badge bg-primary-light">--}}
{{--                                                Videography--}}
{{--                                            </a>--}}
{{--                                            <p><img src="{{asset('/')}}website/assets/img/icons/map-pin-check.svg" alt="Icon">London</p>--}}
{{--                                        </div>--}}
{{--                                        <div class="gigs-title">--}}
{{--                                            <h3>--}}
{{--                                                <a href="service-details.html">--}}
{{--                                                    I will do professional lifestyle and product photography--}}
{{--                                                </a>--}}
{{--                                            </h3>--}}
{{--                                        </div>--}}
{{--                                        <div class="star-rate">--}}
{{--                                            <span><i class="fa-solid fa-star"></i>4.3 (22 Reviews)</span>--}}
{{--                                        </div>--}}
{{--                                        <div class="gigs-card-footer">--}}
{{--                                            <div class="gigs-share">--}}
{{--                                                <a href="javascript:void(0);">--}}
{{--                                                    <i class="feather-share-2"></i>--}}
{{--                                                </a>--}}
{{--                                                <span class="badge">Delivery in 5 days</span>--}}
{{--                                            </div>--}}
{{--                                            <h5>$350</h5>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div class="gigs-grid">--}}
{{--                                    <div class="gigs-img">--}}
{{--                                        <div class="img-slider owl-carousel">--}}
{{--                                            <div class="slide-images">--}}
{{--                                                <a href="service-details.html">--}}
{{--                                                    <img src="{{asset('/')}}website/assets/img/gigs/gigs-06.jpg" class="img-fluid" alt="Gigs">--}}
{{--                                                </a>--}}
{{--                                            </div>--}}
{{--                                            <div class="slide-images">--}}
{{--                                                <a href="service-details.html">--}}
{{--                                                    <img src="{{asset('/')}}website/assets/img/gigs/gigs-10.jpg" class="img-fluid" alt="Gigs">--}}
{{--                                                </a>--}}
{{--                                            </div>--}}
{{--                                            <div class="slide-images">--}}
{{--                                                <a href="service-details.html">--}}
{{--                                                    <img src="{{asset('/')}}website/assets/img/gigs/gigs-11.jpg" class="img-fluid" alt="Gigs">--}}
{{--                                                </a>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <div class="card-overlay-badge">--}}
{{--                                            <a href="service.html"><span class="badge bg-warning"><i class="feather-star"></i>Featured</span></a>--}}
{{--                                        </div>--}}
{{--                                        <div class="fav-selection">--}}
{{--                                            <a href="javascript:void(0);">--}}
{{--                                                <i class="feather-video"></i>--}}
{{--                                            </a>--}}
{{--                                            <a href="javascript:void(0);" class="fav-icon">--}}
{{--                                                <i class="feather-heart"></i>--}}
{{--                                            </a>--}}
{{--                                        </div>--}}
{{--                                        <div class="user-thumb">--}}
{{--                                            <a href="user-profile.html">--}}
{{--                                                <img src="{{asset('/')}}website/assets/img/user/user-03.jpg" alt="User">--}}
{{--                                            </a>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="gigs-content">--}}
{{--                                        <div class="gigs-info">--}}
{{--                                            <a href="service-details.html" class="badge bg-primary-light">Music & Audio</a>--}}
{{--                                            <p><img src="{{asset('/')}}website/assets/img/icons/map-pin-check.svg" alt="Icon">Canada</p>--}}
{{--                                        </div>--}}
{{--                                        <div class="gigs-title">--}}
{{--                                            <h3>--}}
{{--                                                <a href="service-details.html">--}}
{{--                                                    I will develop openai, dalle, chat gpt app for mobile--}}
{{--                                                </a>--}}
{{--                                            </h3>--}}
{{--                                        </div>--}}
{{--                                        <div class="star-rate">--}}
{{--                                            <span><i class="fa-solid fa-star"></i>4.6 (475 Reviews)</span>--}}
{{--                                        </div>--}}
{{--                                        <div class="gigs-card-footer">--}}
{{--                                            <div class="gigs-share">--}}
{{--                                                <a href="javascript:void(0);">--}}
{{--                                                    <i class="feather-share-2"></i>--}}
{{--                                                </a>--}}
{{--                                                <span class="badge">Delivery in 8 days</span>--}}
{{--                                            </div>--}}
{{--                                            <h5>$830</h5>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div class="gigs-grid">--}}
{{--                                    <div class="gigs-img">--}}
{{--                                        <div class="img-slider owl-carousel">--}}
{{--                                            <div class="slide-images">--}}
{{--                                                <a href="service-details.html">--}}
{{--                                                    <img src="{{asset('/')}}website/assets/img/gigs/gigs-04.jpg" class="img-fluid" alt="Gigs">--}}
{{--                                                </a>--}}
{{--                                            </div>--}}
{{--                                            <div class="slide-images">--}}
{{--                                                <a href="service-details.html">--}}
{{--                                                    <img src="{{asset('/')}}website/assets/img/gigs/gigs-01.jpg" class="img-fluid" alt="Gigs">--}}
{{--                                                </a>--}}
{{--                                            </div>--}}
{{--                                            <div class="slide-images">--}}
{{--                                                <a href="service-details.html">--}}
{{--                                                    <img src="{{asset('/')}}website/assets/img/gigs/gigs-02.jpg" class="img-fluid" alt="Gigs">--}}
{{--                                                </a>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <div class="card-overlay-badge">--}}
{{--                                            <a href="service.html"><span class="badge bg-danger"><i class="fa-solid fa-meteor"></i>Hot</span></a>--}}
{{--                                        </div>--}}
{{--                                        <div class="fav-selection">--}}
{{--                                            <a href="javascript:void(0);">--}}
{{--                                                <i class="feather-video"></i>--}}
{{--                                            </a>--}}
{{--                                            <a href="javascript:void(0);" class="fav-icon">--}}
{{--                                                <i class="feather-heart"></i>--}}
{{--                                            </a>--}}
{{--                                        </div>--}}
{{--                                        <div class="user-thumb">--}}
{{--                                            <a href="user-profile.html">--}}
{{--                                                <img src="{{asset('/')}}website/assets/img/user/user-04.jpg" alt="User">--}}
{{--                                            </a>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="gigs-content">--}}
{{--                                        <div class="gigs-info">--}}
{{--                                            <a href="service-details.html" class="badge bg-primary-light">--}}
{{--                                                Digital Marketing--}}
{{--                                            </a>--}}
{{--                                            <p><img src="{{asset('/')}}website/assets/img/icons/map-pin-check.svg" alt="Icon">Indonesia</p>--}}
{{--                                        </div>--}}
{{--                                        <div class="gigs-title">--}}
{{--                                            <h3>--}}
{{--                                                <a href="service-details.html">Embedded Android & AOSP customizations</a>--}}
{{--                                            </h3>--}}
{{--                                        </div>--}}
{{--                                        <div class="star-rate">--}}
{{--                                            <span><i class="fa-solid fa-star"></i>4.5 (40 Reviews)</span>--}}
{{--                                        </div>--}}
{{--                                        <div class="gigs-card-footer">--}}
{{--                                            <div class="gigs-share">--}}
{{--                                                <a href="javascript:void(0);">--}}
{{--                                                    <i class="feather-share-2"></i>--}}
{{--                                                </a>--}}
{{--                                                <span class="badge">Delivery in 2 days</span>--}}
{{--                                            </div>--}}
{{--                                            <h5>$900</h5>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div class="gigs-grid">--}}
{{--                                    <div class="gigs-img">--}}
{{--                                        <div class="img-slider owl-carousel">--}}
{{--                                            <div class="slide-images">--}}
{{--                                                <a href="service-details.html">--}}
{{--                                                    <img src="{{asset('/')}}website/assets/img/gigs/gigs-05.jpg" class="img-fluid" alt="Gigs">--}}
{{--                                                </a>--}}
{{--                                            </div>--}}
{{--                                            <div class="slide-images">--}}
{{--                                                <a href="service-details.html">--}}
{{--                                                    <img src="{{asset('/')}}website/assets/img/gigs/gigs-03.jpg" class="img-fluid" alt="Gigs">--}}
{{--                                                </a>--}}
{{--                                            </div>--}}
{{--                                            <div class="slide-images">--}}
{{--                                                <a href="service-details.html">--}}
{{--                                                    <img src="{{asset('/')}}website/assets/img/gigs/gigs-12.jpg" class="img-fluid" alt="Gigs">--}}
{{--                                                </a>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <div class="card-overlay-badge">--}}
{{--                                            <a href="service.html"><span class="badge bg-danger"><i class="fa-solid fa-meteor"></i>Hot</span></a>--}}
{{--                                        </div>--}}
{{--                                        <div class="fav-selection">--}}
{{--                                            <a href="javascript:void(0);">--}}
{{--                                                <i class="feather-video"></i>--}}
{{--                                            </a>--}}
{{--                                            <a href="javascript:void(0);" class="fav-icon">--}}
{{--                                                <i class="feather-heart"></i>--}}
{{--                                            </a>--}}
{{--                                        </div>--}}
{{--                                        <div class="user-thumb">--}}
{{--                                            <a href="user-profile.html">--}}
{{--                                                <img src="{{asset('/')}}website/assets/img/user/user-05.jpg" alt="User">--}}
{{--                                            </a>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="gigs-content">--}}
{{--                                        <div class="gigs-info">--}}
{{--                                            <a href="service-details.html" class="badge bg-primary-light">--}}
{{--                                                Writing & Translation--}}
{{--                                            </a>--}}
{{--                                            <p><img src="{{asset('/')}}website/assets/img/icons/map-pin-check.svg" alt="Icon">Tunsania</p>--}}
{{--                                        </div>--}}
{{--                                        <div class="gigs-title">--}}
{{--                                            <h3>--}}
{{--                                                <a href="service-details.html">--}}
{{--                                                    I will do implementing chatbots on websites or messaging apps--}}
{{--                                                </a>--}}
{{--                                            </h3>--}}
{{--                                        </div>--}}
{{--                                        <div class="star-rate">--}}
{{--                                            <span><i class="fa-solid fa-star"></i>3.8 (70 Reviews)</span>--}}
{{--                                        </div>--}}
{{--                                        <div class="gigs-card-footer">--}}
{{--                                            <div class="gigs-share">--}}
{{--                                                <a href="javascript:void(0);">--}}
{{--                                                    <i class="feather-share-2"></i>--}}
{{--                                                </a>--}}
{{--                                                <span class="badge">Delivery in 1 day</span>--}}
{{--                                            </div>--}}
{{--                                            <h5>$400</h5>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="tab-pane fade" id="pills-rating" role="tabpanel" aria-labelledby="pills-rating-tab">--}}
{{--                    <div class="row">--}}
{{--                        <div class="col-md-12">--}}
{{--                            <div class="gigs-card-slider owl-carousel">--}}
{{--                                <div class="gigs-grid">--}}
{{--                                    <div class="gigs-img">--}}
{{--                                        <div class="img-slider owl-carousel">--}}
{{--                                            <div class="slide-images">--}}
{{--                                                <a href="service-details.html">--}}
{{--                                                    <img src="{{asset('/')}}website/assets/img/gigs/gigs-04.jpg" class="img-fluid" alt="Gigs">--}}
{{--                                                </a>--}}
{{--                                            </div>--}}
{{--                                            <div class="slide-images">--}}
{{--                                                <a href="service-details.html">--}}
{{--                                                    <img src="{{asset('/')}}website/assets/img/gigs/gigs-06.jpg" class="img-fluid" alt="Gigs">--}}
{{--                                                </a>--}}
{{--                                            </div>--}}
{{--                                            <div class="slide-images">--}}
{{--                                                <a href="service-details.html">--}}
{{--                                                    <img src="{{asset('/')}}website/assets/img/gigs/gigs-07.jpg" class="img-fluid" alt="Gigs">--}}
{{--                                                </a>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <div class="card-overlay-badge">--}}
{{--                                            <a href="service.html"><span class="badge bg-warning"><i class="feather-star"></i>Featured</span></a>--}}
{{--                                            <a href="service.html"><span class="badge bg-danger"><i class="fa-solid fa-meteor"></i>Hot</span></a>--}}
{{--                                        </div>--}}
{{--                                        <div class="fav-selection">--}}
{{--                                            <a href="javascript:void(0);">--}}
{{--                                                <i class="feather-video"></i>--}}
{{--                                            </a>--}}
{{--                                            <a href="javascript:void(0);" class="fav-icon">--}}
{{--                                                <i class="feather-heart"></i>--}}
{{--                                            </a>--}}
{{--                                        </div>--}}
{{--                                        <div class="user-thumb">--}}
{{--                                            <a href="user-profile.html">--}}
{{--                                                <img src="{{asset('/')}}website/assets/img/user/user-01.jpg" alt="User">--}}
{{--                                            </a>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="gigs-content">--}}
{{--                                        <div class="gigs-info">--}}
{{--                                            <a href="service-details.html" class="badge bg-primary-light">--}}
{{--                                                Programming & Tech--}}
{{--                                            </a>--}}
{{--                                            <p><img src="{{asset('/')}}website/assets/img/icons/map-pin-check.svg" alt="Icon">Newyork</p>--}}
{{--                                        </div>--}}
{{--                                        <div class="gigs-title">--}}
{{--                                            <h3>--}}
{{--                                                <a href="service-details.html">--}}
{{--                                                    I will do english or german transcript of any audio file or video--}}
{{--                                                </a>--}}
{{--                                            </h3>--}}
{{--                                        </div>--}}
{{--                                        <div class="star-rate">--}}
{{--                                            <span><i class="fa-solid fa-star"></i>5.0 (28 Reviews)</span>--}}
{{--                                        </div>--}}
{{--                                        <div class="gigs-card-footer">--}}
{{--                                            <div class="gigs-share">--}}
{{--                                                <a href="javascript:void(0);">--}}
{{--                                                    <i class="feather-share-2"></i>--}}
{{--                                                </a>--}}
{{--                                                <span class="badge">Delivery in 7 days</span>--}}
{{--                                            </div>--}}
{{--                                            <h5>$780</h5>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div class="gigs-grid">--}}
{{--                                    <div class="gigs-img">--}}
{{--                                        <div class="img-slider owl-carousel">--}}
{{--                                            <div class="slide-images">--}}
{{--                                                <a href="service-details.html">--}}
{{--                                                    <img src="{{asset('/')}}website/assets/img/gigs/gigs-05.jpg" class="img-fluid" alt="Gigs">--}}
{{--                                                </a>--}}
{{--                                            </div>--}}
{{--                                            <div class="slide-images">--}}
{{--                                                <a href="service-details.html">--}}
{{--                                                    <img src="{{asset('/')}}website/assets/img/gigs/gigs-08.jpg" class="img-fluid" alt="Gigs">--}}
{{--                                                </a>--}}
{{--                                            </div>--}}
{{--                                            <div class="slide-images">--}}
{{--                                                <a href="service-details.html">--}}
{{--                                                    <img src="{{asset('/')}}website/assets/img/gigs/gigs-09.jpg" class="img-fluid" alt="Gigs">--}}
{{--                                                </a>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <div class="card-overlay-badge">--}}
{{--                                            <a href="service.html"><span class="badge bg-danger"><i class="fa-solid fa-meteor"></i>Hot</span></a>--}}
{{--                                        </div>--}}
{{--                                        <div class="fav-selection">--}}
{{--                                            <a href="javascript:void(0);">--}}
{{--                                                <i class="feather-video"></i>--}}
{{--                                            </a>--}}
{{--                                            <a href="javascript:void(0);" class="fav-icon">--}}
{{--                                                <i class="feather-heart"></i>--}}
{{--                                            </a>--}}
{{--                                        </div>--}}
{{--                                        <div class="user-thumb">--}}
{{--                                            <a href="user-profile.html">--}}
{{--                                                <img src="{{asset('/')}}website/assets/img/user/user-02.jpg" alt="User">--}}
{{--                                            </a>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="gigs-content">--}}
{{--                                        <div class="gigs-info">--}}
{{--                                            <a href="service-details.html" class="badge bg-primary-light">--}}
{{--                                                Videography--}}
{{--                                            </a>--}}
{{--                                            <p><img src="{{asset('/')}}website/assets/img/icons/map-pin-check.svg" alt="Icon">London</p>--}}
{{--                                        </div>--}}
{{--                                        <div class="gigs-title">--}}
{{--                                            <h3>--}}
{{--                                                <a href="service-details.html">--}}
{{--                                                    I will do professional lifestyle and product photography--}}
{{--                                                </a>--}}
{{--                                            </h3>--}}
{{--                                        </div>--}}
{{--                                        <div class="star-rate">--}}
{{--                                            <span><i class="fa-solid fa-star"></i>4.3 (22 Reviews)</span>--}}
{{--                                        </div>--}}
{{--                                        <div class="gigs-card-footer">--}}
{{--                                            <div class="gigs-share">--}}
{{--                                                <a href="javascript:void(0);">--}}
{{--                                                    <i class="feather-share-2"></i>--}}
{{--                                                </a>--}}
{{--                                                <span class="badge">Delivery in 10 days</span>--}}
{{--                                            </div>--}}
{{--                                            <h5>$350</h5>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div class="gigs-grid">--}}
{{--                                    <div class="gigs-img">--}}
{{--                                        <div class="img-slider owl-carousel">--}}
{{--                                            <div class="slide-images">--}}
{{--                                                <a href="service-details.html">--}}
{{--                                                    <img src="{{asset('/')}}website/assets/img/gigs/gigs-06.jpg" class="img-fluid" alt="Gigs">--}}
{{--                                                </a>--}}
{{--                                            </div>--}}
{{--                                            <div class="slide-images">--}}
{{--                                                <a href="service-details.html">--}}
{{--                                                    <img src="{{asset('/')}}website/assets/img/gigs/gigs-10.jpg" class="img-fluid" alt="Gigs">--}}
{{--                                                </a>--}}
{{--                                            </div>--}}
{{--                                            <div class="slide-images">--}}
{{--                                                <a href="service-details.html">--}}
{{--                                                    <img src="{{asset('/')}}website/assets/img/gigs/gigs-11.jpg" class="img-fluid" alt="Gigs">--}}
{{--                                                </a>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <div class="card-overlay-badge">--}}
{{--                                            <a href="service.html"><span class="badge bg-warning"><i class="feather-star"></i>Featured</span></a>--}}
{{--                                        </div>--}}
{{--                                        <div class="fav-selection">--}}
{{--                                            <a href="javascript:void(0);">--}}
{{--                                                <i class="feather-video"></i>--}}
{{--                                            </a>--}}
{{--                                            <a href="javascript:void(0);" class="fav-icon">--}}
{{--                                                <i class="feather-heart"></i>--}}
{{--                                            </a>--}}
{{--                                        </div>--}}
{{--                                        <div class="user-thumb">--}}
{{--                                            <a href="user-profile.html">--}}
{{--                                                <img src="{{asset('/')}}website/assets/img/user/user-03.jpg" alt="User">--}}
{{--                                            </a>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="gigs-content">--}}
{{--                                        <div class="gigs-info">--}}
{{--                                            <a href="service-details.html" class="badge bg-primary-light">--}}
{{--                                                Music & Audio--}}
{{--                                            </a>--}}
{{--                                            <p><img src="{{asset('/')}}website/assets/img/icons/map-pin-check.svg" alt="Icon">Canada</p>--}}
{{--                                        </div>--}}
{{--                                        <div class="gigs-title">--}}
{{--                                            <h3>--}}
{{--                                                <a href="service-details.html">--}}
{{--                                                    I will develop openai, dalle, chat gpt app for mobile--}}
{{--                                                </a>--}}
{{--                                            </h3>--}}
{{--                                        </div>--}}
{{--                                        <div class="star-rate">--}}
{{--                                            <span><i class="fa-solid fa-star"></i>4.6 (475 Reviews)</span>--}}
{{--                                        </div>--}}
{{--                                        <div class="gigs-card-footer">--}}
{{--                                            <div class="gigs-share">--}}
{{--                                                <a href="javascript:void(0);">--}}
{{--                                                    <i class="feather-share-2"></i>--}}
{{--                                                </a>--}}
{{--                                                <span class="badge">Delivery in 2 days</span>--}}
{{--                                            </div>--}}
{{--                                            <h5>$830</h5>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div class="gigs-grid">--}}
{{--                                    <div class="gigs-img">--}}
{{--                                        <div class="img-slider owl-carousel">--}}
{{--                                            <div class="slide-images">--}}
{{--                                                <a href="service-details.html">--}}
{{--                                                    <img src="{{asset('/')}}website/assets/img/gigs/gigs-04.jpg" class="img-fluid" alt="Gigs">--}}
{{--                                                </a>--}}
{{--                                            </div>--}}
{{--                                            <div class="slide-images">--}}
{{--                                                <a href="service-details.html">--}}
{{--                                                    <img src="{{asset('/')}}website/assets/img/gigs/gigs-01.jpg" class="img-fluid" alt="Gigs">--}}
{{--                                                </a>--}}
{{--                                            </div>--}}
{{--                                            <div class="slide-images">--}}
{{--                                                <a href="service-details.html">--}}
{{--                                                    <img src="{{asset('/')}}website/assets/img/gigs/gigs-02.jpg" class="img-fluid" alt="Gigs">--}}
{{--                                                </a>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <div class="card-overlay-badge">--}}
{{--                                            <a href="service.html"><span class="badge bg-danger"><i class="fa-solid fa-meteor"></i>Hot</span></a>--}}
{{--                                        </div>--}}
{{--                                        <div class="fav-selection">--}}
{{--                                            <a href="javascript:void(0);">--}}
{{--                                                <i class="feather-video"></i>--}}
{{--                                            </a>--}}
{{--                                            <a href="javascript:void(0);" class="fav-icon">--}}
{{--                                                <i class="feather-heart"></i>--}}
{{--                                            </a>--}}
{{--                                        </div>--}}
{{--                                        <div class="user-thumb">--}}
{{--                                            <a href="user-profile.html">--}}
{{--                                                <img src="{{asset('/')}}website/assets/img/user/user-04.jpg" alt="User">--}}
{{--                                            </a>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="gigs-content">--}}
{{--                                        <div class="gigs-info">--}}
{{--                                            <a href="service-details.html" class="badge bg-primary-light">--}}
{{--                                                Digital Marketing--}}
{{--                                            </a>--}}
{{--                                            <p><img src="{{asset('/')}}website/assets/img/icons/map-pin-check.svg" alt="Icon">Indonesia</p>--}}
{{--                                        </div>--}}
{{--                                        <div class="gigs-title">--}}
{{--                                            <h3>--}}
{{--                                                <a href="service-details.html">Embedded Android & AOSP customizations</a>--}}
{{--                                            </h3>--}}
{{--                                        </div>--}}
{{--                                        <div class="star-rate">--}}
{{--                                            <span><i class="fa-solid fa-star"></i>4.5 (40 Reviews)</span>--}}
{{--                                        </div>--}}
{{--                                        <div class="gigs-card-footer">--}}
{{--                                            <div class="gigs-share">--}}
{{--                                                <a href="javascript:void(0);">--}}
{{--                                                    <i class="feather-share-2"></i>--}}
{{--                                                </a>--}}
{{--                                                <span class="badge">Delivery in 3 days</span>--}}
{{--                                            </div>--}}
{{--                                            <h5>$900</h5>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div class="gigs-grid">--}}
{{--                                    <div class="gigs-img">--}}
{{--                                        <div class="img-slider owl-carousel">--}}
{{--                                            <div class="slide-images">--}}
{{--                                                <a href="service-details.html">--}}
{{--                                                    <img src="{{asset('/')}}website/assets/img/gigs/gigs-05.jpg" class="img-fluid" alt="Gigs">--}}
{{--                                                </a>--}}
{{--                                            </div>--}}
{{--                                            <div class="slide-images">--}}
{{--                                                <a href="service-details.html">--}}
{{--                                                    <img src="{{asset('/')}}website/assets/img/gigs/gigs-03.jpg" class="img-fluid" alt="Gigs">--}}
{{--                                                </a>--}}
{{--                                            </div>--}}
{{--                                            <div class="slide-images">--}}
{{--                                                <a href="service-details.html">--}}
{{--                                                    <img src="{{asset('/')}}website/assets/img/gigs/gigs-12.jpg" class="img-fluid" alt="Gigs">--}}
{{--                                                </a>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <div class="card-overlay-badge">--}}
{{--                                            <a href="service.html"><span class="badge bg-danger"><i class="fa-solid fa-meteor"></i>Hot</span></a>--}}
{{--                                        </div>--}}
{{--                                        <div class="fav-selection">--}}
{{--                                            <a href="javascript:void(0);">--}}
{{--                                                <i class="feather-video"></i>--}}
{{--                                            </a>--}}
{{--                                            <a href="javascript:void(0);" class="fav-icon">--}}
{{--                                                <i class="feather-heart"></i>--}}
{{--                                            </a>--}}
{{--                                        </div>--}}
{{--                                        <div class="user-thumb">--}}
{{--                                            <a href="user-profile.html">--}}
{{--                                                <img src="{{asset('/')}}website/assets/img/user/user-05.jpg" alt="User">--}}
{{--                                            </a>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="gigs-content">--}}
{{--                                        <div class="gigs-info">--}}
{{--                                            <a href="service-details.html" class="badge bg-primary-light">--}}
{{--                                                Writing & Translation--}}
{{--                                            </a>--}}
{{--                                            <p><img src="{{asset('/')}}website/assets/img/icons/map-pin-check.svg" alt="Icon">Tunsania</p>--}}
{{--                                        </div>--}}
{{--                                        <div class="gigs-title">--}}
{{--                                            <h3>--}}
{{--                                                <a href="service-details.html">--}}
{{--                                                    I will do implementing chatbots on websites or messaging apps--}}
{{--                                                </a>--}}
{{--                                            </h3>--}}
{{--                                        </div>--}}
{{--                                        <div class="star-rate">--}}
{{--                                            <span><i class="fa-solid fa-star"></i>3.8 (70 Reviews)</span>--}}
{{--                                        </div>--}}
{{--                                        <div class="gigs-card-footer">--}}
{{--                                            <div class="gigs-share">--}}
{{--                                                <a href="javascript:void(0);">--}}
{{--                                                    <i class="feather-share-2"></i>--}}
{{--                                                </a>--}}
{{--                                                <span class="badge">Delivery in 6 days</span>--}}
{{--                                            </div>--}}
{{--                                            <h5>$400</h5>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="tab-pane fade" id="pills-trend" role="tabpanel" aria-labelledby="pills-trend-tab">--}}
{{--                    <div class="row">--}}
{{--                        <div class="col-md-12">--}}
{{--                            <div class="gigs-card-slider owl-carousel">--}}
{{--                                <div class="gigs-grid">--}}
{{--                                    <div class="gigs-img">--}}
{{--                                        <div class="img-slider owl-carousel">--}}
{{--                                            <div class="slide-images">--}}
{{--                                                <a href="service-details.html">--}}
{{--                                                    <img src="{{asset('/')}}website/assets/img/gigs/gigs-08.jpg" class="img-fluid" alt="Gigs">--}}
{{--                                                </a>--}}
{{--                                            </div>--}}
{{--                                            <div class="slide-images">--}}
{{--                                                <a href="service-details.html">--}}
{{--                                                    <img src="{{asset('/')}}website/assets/img/gigs/gigs-06.jpg" class="img-fluid" alt="Gigs">--}}
{{--                                                </a>--}}
{{--                                            </div>--}}
{{--                                            <div class="slide-images">--}}
{{--                                                <a href="service-details.html">--}}
{{--                                                    <img src="{{asset('/')}}website/assets/img/gigs/gigs-07.jpg" class="img-fluid" alt="Gigs">--}}
{{--                                                </a>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <div class="card-overlay-badge">--}}
{{--                                            <a href="service.html"><span class="badge bg-warning"><i class="feather-star"></i>Featured</span></a>--}}
{{--                                            <a href="service.html"><span class="badge bg-danger"><i class="fa-solid fa-meteor"></i>Hot</span></a>--}}
{{--                                        </div>--}}
{{--                                        <div class="fav-selection">--}}
{{--                                            <a href="javascript:void(0);">--}}
{{--                                                <i class="feather-video"></i>--}}
{{--                                            </a>--}}
{{--                                            <a href="javascript:void(0);" class="fav-icon">--}}
{{--                                                <i class="feather-heart"></i>--}}
{{--                                            </a>--}}
{{--                                        </div>--}}
{{--                                        <div class="user-thumb">--}}
{{--                                            <a href="user-profile.html">--}}
{{--                                                <img src="{{asset('/')}}website/assets/img/user/user-01.jpg" alt="User">--}}
{{--                                            </a>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="gigs-content">--}}
{{--                                        <div class="gigs-info">--}}
{{--                                            <a href="service-details.html" class="badge bg-primary-light">--}}
{{--                                                Programming & Tech--}}
{{--                                            </a>--}}
{{--                                            <p><img src="{{asset('/')}}website/assets/img/icons/map-pin-check.svg" alt="Icon">Newyork</p>--}}
{{--                                        </div>--}}
{{--                                        <div class="gigs-title">--}}
{{--                                            <h3>--}}
{{--                                                <a href="service-details.html">--}}
{{--                                                    I will do english or german transcript of any audio file or video--}}
{{--                                                </a>--}}
{{--                                            </h3>--}}
{{--                                        </div>--}}
{{--                                        <div class="star-rate">--}}
{{--                                            <span><i class="fa-solid fa-star"></i>5.0 (28 Reviews)</span>--}}
{{--                                        </div>--}}
{{--                                        <div class="gigs-card-footer">--}}
{{--                                            <div class="gigs-share">--}}
{{--                                                <a href="javascript:void(0);">--}}
{{--                                                    <i class="feather-share-2"></i>--}}
{{--                                                </a>--}}
{{--                                                <span class="badge">Delivery in 12 days</span>--}}
{{--                                            </div>--}}
{{--                                            <h5>$780</h5>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div class="gigs-grid">--}}
{{--                                    <div class="gigs-img">--}}
{{--                                        <div class="img-slider owl-carousel">--}}
{{--                                            <div class="slide-images">--}}
{{--                                                <a href="service-details.html">--}}
{{--                                                    <img src="{{asset('/')}}website/assets/img/gigs/gigs-07.jpg" class="img-fluid" alt="Gigs">--}}
{{--                                                </a>--}}
{{--                                            </div>--}}
{{--                                            <div class="slide-images">--}}
{{--                                                <a href="service-details.html">--}}
{{--                                                    <img src="{{asset('/')}}website/assets/img/gigs/gigs-08.jpg" class="img-fluid" alt="Gigs">--}}
{{--                                                </a>--}}
{{--                                            </div>--}}
{{--                                            <div class="slide-images">--}}
{{--                                                <a href="service-details.html">--}}
{{--                                                    <img src="{{asset('/')}}website/assets/img/gigs/gigs-09.jpg" class="img-fluid" alt="Gigs">--}}
{{--                                                </a>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <div class="card-overlay-badge">--}}
{{--                                            <a href="service.html"><span class="badge bg-danger"><i class="fa-solid fa-meteor"></i>Hot</span></a>--}}
{{--                                        </div>--}}
{{--                                        <div class="fav-selection">--}}
{{--                                            <a href="javascript:void(0);">--}}
{{--                                                <i class="feather-video"></i>--}}
{{--                                            </a>--}}
{{--                                            <a href="javascript:void(0);" class="fav-icon">--}}
{{--                                                <i class="feather-heart"></i>--}}
{{--                                            </a>--}}
{{--                                        </div>--}}
{{--                                        <div class="user-thumb">--}}
{{--                                            <a href="user-profile.html">--}}
{{--                                                <img src="{{asset('/')}}website/assets/img/user/user-02.jpg" alt="User">--}}
{{--                                            </a>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="gigs-content">--}}
{{--                                        <div class="gigs-info">--}}
{{--                                            <a href="service-details.html" class="badge bg-primary-light">--}}
{{--                                                Videography--}}
{{--                                            </a>--}}
{{--                                            <p><img src="{{asset('/')}}website/assets/img/icons/map-pin-check.svg" alt="Icon">London</p>--}}
{{--                                        </div>--}}
{{--                                        <div class="gigs-title">--}}
{{--                                            <h3>--}}
{{--                                                <a href="service-details.html">--}}
{{--                                                    I will do professional lifestyle and product photography--}}
{{--                                                </a>--}}
{{--                                            </h3>--}}
{{--                                        </div>--}}
{{--                                        <div class="star-rate">--}}
{{--                                            <span><i class="fa-solid fa-star"></i>4.3 (22 Reviews)</span>--}}
{{--                                        </div>--}}
{{--                                        <div class="gigs-card-footer">--}}
{{--                                            <div class="gigs-share">--}}
{{--                                                <a href="javascript:void(0);">--}}
{{--                                                    <i class="feather-share-2"></i>--}}
{{--                                                </a>--}}
{{--                                                <span class="badge">Delivery in 5 days</span>--}}
{{--                                            </div>--}}
{{--                                            <h5>$350</h5>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div class="gigs-grid">--}}
{{--                                    <div class="gigs-img">--}}
{{--                                        <div class="img-slider owl-carousel">--}}
{{--                                            <div class="slide-images">--}}
{{--                                                <a href="service-details.html">--}}
{{--                                                    <img src="{{asset('/')}}website/assets/img/gigs/gigs-09.jpg" class="img-fluid" alt="Gigs">--}}
{{--                                                </a>--}}
{{--                                            </div>--}}
{{--                                            <div class="slide-images">--}}
{{--                                                <a href="service-details.html">--}}
{{--                                                    <img src="{{asset('/')}}website/assets/img/gigs/gigs-10.jpg" class="img-fluid" alt="Gigs">--}}
{{--                                                </a>--}}
{{--                                            </div>--}}
{{--                                            <div class="slide-images">--}}
{{--                                                <a href="service-details.html">--}}
{{--                                                    <img src="{{asset('/')}}website/assets/img/gigs/gigs-11.jpg" class="img-fluid" alt="Gigs">--}}
{{--                                                </a>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <div class="card-overlay-badge">--}}
{{--                                            <a href="service.html"><span class="badge bg-warning"><i class="feather-star"></i>Featured</span></a>--}}
{{--                                        </div>--}}
{{--                                        <div class="fav-selection">--}}
{{--                                            <a href="javascript:void(0);">--}}
{{--                                                <i class="feather-video"></i>--}}
{{--                                            </a>--}}
{{--                                            <a href="javascript:void(0);" class="fav-icon">--}}
{{--                                                <i class="feather-heart"></i>--}}
{{--                                            </a>--}}
{{--                                        </div>--}}
{{--                                        <div class="user-thumb">--}}
{{--                                            <a href="user-profile.html">--}}
{{--                                                <img src="{{asset('/')}}website/assets/img/user/user-03.jpg" alt="User">--}}
{{--                                            </a>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="gigs-content">--}}
{{--                                        <div class="gigs-info">--}}
{{--                                            <a href="service-details.html" class="badge bg-primary-light">--}}
{{--                                                Music & Audio--}}
{{--                                            </a>--}}
{{--                                            <p><img src="{{asset('/')}}website/assets/img/icons/map-pin-check.svg" alt="Icon">Canada</p>--}}
{{--                                        </div>--}}
{{--                                        <div class="gigs-title">--}}
{{--                                            <h3>--}}
{{--                                                <a href="service-details.html">--}}
{{--                                                    I will develop openai, dalle, chat gpt app for mobile--}}
{{--                                                </a>--}}
{{--                                            </h3>--}}
{{--                                        </div>--}}
{{--                                        <div class="star-rate">--}}
{{--                                            <span><i class="fa-solid fa-star"></i>4.6 (475 Reviews)</span>--}}
{{--                                        </div>--}}
{{--                                        <div class="gigs-card-footer">--}}
{{--                                            <div class="gigs-share">--}}
{{--                                                <a href="javascript:void(0);">--}}
{{--                                                    <i class="feather-share-2"></i>--}}
{{--                                                </a>--}}
{{--                                                <span class="badge">Delivery in 9 days</span>--}}
{{--                                            </div>--}}
{{--                                            <h5>$830</h5>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div class="gigs-grid">--}}
{{--                                    <div class="gigs-img">--}}
{{--                                        <div class="img-slider owl-carousel">--}}
{{--                                            <div class="slide-images">--}}
{{--                                                <a href="service-details.html">--}}
{{--                                                    <img src="{{asset('/')}}website/assets/img/gigs/gigs-04.jpg" class="img-fluid" alt="Gigs">--}}
{{--                                                </a>--}}
{{--                                            </div>--}}
{{--                                            <div class="slide-images">--}}
{{--                                                <a href="service-details.html">--}}
{{--                                                    <img src="{{asset('/')}}website/assets/img/gigs/gigs-01.jpg" class="img-fluid" alt="Gigs">--}}
{{--                                                </a>--}}
{{--                                            </div>--}}
{{--                                            <div class="slide-images">--}}
{{--                                                <a href="service-details.html">--}}
{{--                                                    <img src="{{asset('/')}}website/assets/img/gigs/gigs-02.jpg" class="img-fluid" alt="Gigs">--}}
{{--                                                </a>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <div class="card-overlay-badge">--}}
{{--                                            <a href="service.html"><span class="badge bg-danger"><i class="fa-solid fa-meteor"></i>Hot</span></a>--}}
{{--                                        </div>--}}
{{--                                        <div class="fav-selection">--}}
{{--                                            <a href="javascript:void(0);">--}}
{{--                                                <i class="feather-video"></i>--}}
{{--                                            </a>--}}
{{--                                            <a href="javascript:void(0);" class="fav-icon">--}}
{{--                                                <i class="feather-heart"></i>--}}
{{--                                            </a>--}}
{{--                                        </div>--}}
{{--                                        <div class="user-thumb">--}}
{{--                                            <a href="user-profile.html">--}}
{{--                                                <img src="{{asset('/')}}website/assets/img/user/user-04.jpg" alt="User">--}}
{{--                                            </a>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="gigs-content">--}}
{{--                                        <div class="gigs-info">--}}
{{--                                            <a href="service-details.html" class="badge bg-primary-light">--}}
{{--                                                Digital Marketing--}}
{{--                                            </a>--}}
{{--                                            <p><img src="{{asset('/')}}website/assets/img/icons/map-pin-check.svg" alt="Icon">Indonesia</p>--}}
{{--                                        </div>--}}
{{--                                        <div class="gigs-title">--}}
{{--                                            <h3>--}}
{{--                                                <a href="service-details.html">Embedded Android & AOSP customizations</a>--}}
{{--                                            </h3>--}}
{{--                                        </div>--}}
{{--                                        <div class="star-rate">--}}
{{--                                            <span><i class="fa-solid fa-star"></i>4.5 (40 Reviews)</span>--}}
{{--                                        </div>--}}
{{--                                        <div class="gigs-card-footer">--}}
{{--                                            <div class="gigs-share">--}}
{{--                                                <a href="javascript:void(0);">--}}
{{--                                                    <i class="feather-share-2"></i>--}}
{{--                                                </a>--}}
{{--                                                <span class="badge">Delivery in 3 days</span>--}}
{{--                                            </div>--}}
{{--                                            <h5>$900</h5>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div class="gigs-grid">--}}
{{--                                    <div class="gigs-img">--}}
{{--                                        <div class="img-slider owl-carousel">--}}
{{--                                            <div class="slide-images">--}}
{{--                                                <a href="service-details.html">--}}
{{--                                                    <img src="{{asset('/')}}website/assets/img/gigs/gigs-05.jpg" class="img-fluid" alt="Gigs">--}}
{{--                                                </a>--}}
{{--                                            </div>--}}
{{--                                            <div class="slide-images">--}}
{{--                                                <a href="service-details.html">--}}
{{--                                                    <img src="{{asset('/')}}website/assets/img/gigs/gigs-03.jpg" class="img-fluid" alt="Gigs">--}}
{{--                                                </a>--}}
{{--                                            </div>--}}
{{--                                            <div class="slide-images">--}}
{{--                                                <a href="service-details.html">--}}
{{--                                                    <img src="{{asset('/')}}website/assets/img/gigs/gigs-12.jpg" class="img-fluid" alt="Gigs">--}}
{{--                                                </a>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <div class="card-overlay-badge">--}}
{{--                                            <a href="service.html"><span class="badge bg-danger"><i class="fa-solid fa-meteor"></i>Hot</span></a>--}}
{{--                                        </div>--}}
{{--                                        <div class="fav-selection">--}}
{{--                                            <a href="javascript:void(0);">--}}
{{--                                                <i class="feather-video"></i>--}}
{{--                                            </a>--}}
{{--                                            <a href="javascript:void(0);" class="fav-icon">--}}
{{--                                                <i class="feather-heart"></i>--}}
{{--                                            </a>--}}
{{--                                        </div>--}}
{{--                                        <div class="user-thumb">--}}
{{--                                            <a href="user-profile.html">--}}
{{--                                                <img src="{{asset('/')}}website/assets/img/user/user-05.jpg" alt="User">--}}
{{--                                            </a>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="gigs-content">--}}
{{--                                        <div class="gigs-info">--}}
{{--                                            <a href="service-details-2.html" class="badge bg-primary-light">--}}
{{--                                                Writing & Translation--}}
{{--                                            </a>--}}
{{--                                            <p><img src="{{asset('/')}}website/assets/img/icons/map-pin-check.svg" alt="Icon">Tunsania</p>--}}
{{--                                        </div>--}}
{{--                                        <div class="gigs-title">--}}
{{--                                            <h3>--}}
{{--                                                <a href="service-details.html">--}}
{{--                                                    I will do implementing chatbots on websites or messaging apps--}}
{{--                                                </a>--}}
{{--                                            </h3>--}}
{{--                                        </div>--}}
{{--                                        <div class="star-rate">--}}
{{--                                            <span><i class="fa-solid fa-star"></i>3.8 (70 Reviews)</span>--}}
{{--                                        </div>--}}
{{--                                        <div class="gigs-card-footer">--}}
{{--                                            <div class="gigs-share">--}}
{{--                                                <a href="javascript:void(0);">--}}
{{--                                                    <i class="feather-share-2"></i>--}}
{{--                                                </a>--}}
{{--                                                <span class="badge">Delivery in 4 days</span>--}}
{{--                                            </div>--}}
{{--                                            <h5>$400</h5>--}}
{{--                                        </div>--}}
{{--                                    </div> -->--}}








                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>



<!-- /Explore Gigs -->


<!-- Footer -->
<footer class="footer">
    <div class="section-bg">
        <img src="{{asset('/')}}website/assets/img/bg/footer-bg-01.png" class="footer-bg-one" alt="img">
        <img src="{{asset('/')}}website/assets/img/bg/footer-bg-02.png" class="footer-bg-two" alt="img">
    </div>
    <div class="container">
        <div class="footer-top">
            <div class="row">
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12" data-aos="fade-up" data-aos-delay="500">
                    <div class="footer-widget">
                        <a href="index.html">
                            <img src="{{asset('/')}}website/assets/img/white-logo.svg" alt="logo">
                        </a>
                        <p>Our mission is to lead the way in digital transformation and automation. We aim to enabling them to navigate the evolving digital landscape with confidence.</p>
                        <div class="social-links">
                            <ul>
                                <li><a href="javascript:void(0);"><i class="fa-brands fa-facebook"></i></a></li>
                                <li><a href="javascript:void(0);"><i class="fa-brands fa-x-twitter"></i></a></li>
                                <li><a href="javascript:void(0);"><i class="fa-brands fa-instagram"></i></a></li>
                                <li><a href="javascript:void(0);"><i class="fa-brands fa-google"></i></a></li>
                                <li><a href="javascript:void(0);"><i class="fa-brands fa-youtube"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xl-2 col-lg-2 col-md-6 col-sm-6" data-aos="fade-up" data-aos-delay="600">
                    <div class="footer-widget">
                        <h3>Our Company</h3>
                        <ul class="menu-items">
                            <li><a href="about-us.html">About Us</a></li>
                            <li><a href="categories-2.html">Categories</a></li>
                            <li><a href="add-gigs.html">Create Gigs</a></li>
                            <li><a href="pricing.html">Pricing</a></li>
                            <li><a href="faq.html">FAQ</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-xl-2 col-lg-2 col-md-6 col-sm-6" data-aos="fade-up" data-aos-delay="800">
                    <div class="footer-widget">
                        <h3>Dashboard</h3>
                        <ul class="menu-items">
                            <li><a href="user-purchase.html">Purchase</a></li>
                            <li><a href="user-sales.html">Sales</a></li>
                            <li><a href="user-payments.html">Payments</a></li>
                            <li><a href="user-files.html">Files</a></li>
                            <li><a href="user-wishlist.html">Wishlist</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6" data-aos="fade-up" data-aos-delay="700">
                    <div class="footer-widget">
                        <h3>Featured Categories</h3>
                        <div class="row">
                            <div class="col-md-6">
                                <ul class="menu-items">
                                    <li><a href="categories.html">Programming & Tech</a></li>
                                    <li><a href="categories.html">Music & Audio</a></li>
                                    <li><a href="categories.html">Lifestyle</a></li>
                                    <li><a href="categories.html">Photography</a></li>
                                    <li><a href="categories.html">Business</a></li>
                                </ul>
                            </div>
                            <div class="col-md-6">
                                <ul class="menu-items extra-menu">
                                    <li><a href="categories.html">eBook Publishing</a></li>
                                    <li><a href="categories.html">AI Artists</a></li>
                                    <li><a href="categories.html">AI Services</a></li>
                                    <li><a href="categories.html">Data</a></li>
                                    <li><a href="categories.html">Consulting</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="contact-widget">
                <div class="row align-items-center">
                    <div class="col-xl-9">
                        <ul class="location-list">
                            <li>
                                <span><i class="feather-map-pin"></i></span>
                                <div class="location-info">
                                    <h6>Address</h6>
                                    <p>367 Hillcrest Lane, Irvine, California,USA</p>
                                </div>
                            </li>
                            <li>
                                <span><i class="feather-phone"></i></span>
                                <div class="location-info">
                                    <h6>Phone</h6>
                                    <p>310-437-2766</p>
                                </div>
                            </li>
                            <li>
                                <span><i class="feather-mail"></i></span>
                                <div class="location-info">
                                    <h6>Email</h6>
                                    <p><a href="https://dreamgigs.dreamstechnologies.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="97fef9f1f8d7f2eff6fae7fbf2b9f4f8fa">[email&#160;protected]</a></p>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="col-xl-3 text-xl-end">
                        <div class="paypal-icons">
                            <a href="javascript:void(0);">
                                <img src="{{asset('/')}}website/assets/img/icons/stripe-icon.svg" alt="icon">
                            </a>
                            <a href="javascript:void(0);">
                                <img src="{{asset('/')}}website/assets/img/icons/paypal-icon.svg" alt="icon">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-bottom">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="copy-right">
                        <p>Copyright © 2024 DreamGigs. All rights reserved.</p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="footer-bottom-links">
                        <ul>
                            <li><a href="privacy-policy.html">Privacy Policy</a></li>
                            <li><a href="terms-condition.html">Terms & Conditions</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- /Footer -->

<!-- Mouse Cursor -->
<div class="mouse-cursor cursor-outer"></div>
<div class="mouse-cursor cursor-inner"></div>
<!-- /Mouse Cursor -->

<!-- Top Scroll -->
<div class="back-to-top">
    <a class="back-to-top-icon align-items-center justify-content-center d-flex" href="#top">
        <i class="fa fa-arrow-up" aria-hidden="true"></i>
    </a>
</div>
<!-- /Top Scroll -->
<!-- /Main Wrapper -->

<!-- jQuery -->
<script data-cfasync="false" src="{{asset('/')}}website/assets/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="{{asset('/')}}website/assets/js/jquery-3.7.1.min.js" type="cc6928ba1541435f4cf5cc64-text/javascript"></script>

<!-- Bootstrap Core JS -->
<script src="{{asset('/')}}website/assets/js/bootstrap.bundle.min.js" type="cc6928ba1541435f4cf5cc64-text/javascript"></script>
<script src="{{asset('/')}}website/assets/js/bootstrap-scrollspy.js" type="cc6928ba1541435f4cf5cc64-text/javascript"></script>

<!-- Feather JS -->
<script src="{{asset('/')}}website/assets/js/feather.min.js" type="cc6928ba1541435f4cf5cc64-text/javascript"></script>

<!-- Aos -->
<script src="{{asset('/')}}website/assets/plugins/aos/aos.js" type="cc6928ba1541435f4cf5cc64-text/javascript"></script>

<!-- counterup JS -->
<script src="{{asset('/')}}website/assets/js/jquery.waypoints.js" type="cc6928ba1541435f4cf5cc64-text/javascript"></script>
<script src="{{asset('/')}}website/assets/js/jquery.counterup.min.js" type="cc6928ba1541435f4cf5cc64-text/javascript"></script>

<!-- Owl Carousel JS -->
<script src="{{asset('/')}}website/assets/js/owl.carousel.min.js" type="cc6928ba1541435f4cf5cc64-text/javascript"></script>

<!-- Select JS -->
<script src="{{asset('/')}}website/assets/plugins/select2/js/select2.min.js" type="cc6928ba1541435f4cf5cc64-text/javascript"></script>

<!-- Custom JS -->
<script src="{{asset('/')}}website/assets/js/script.js" type="cc6928ba1541435f4cf5cc64-text/javascript"></script>

<script src="{{asset('/')}}website/assets/cdn-cgi/scripts/7d0fa10a/cloudflare-static/rocket-loader.min.js" data-cf-settings="cc6928ba1541435f4cf5cc64-|49" defer></script><script defer src="https://static.cloudflareinsights.com/beacon.min.js/vcd15cbe7772f49c399c6a5babf22c1241717689176015" integrity="sha512-ZpsOmlRQV6y907TI0dKBHq9Md29nnaEIPlkf84rnaERnq6zvWvPUqr2ft8M1aS28oN72PdrCzSjY4U6VaAw1EQ==" data-cf-beacon='{"rayId":"91b2e75aaa2a3fdd","version":"2025.1.0","serverTiming":{"name":{"cfExtPri":true,"cfL4":true,"cfSpeedBrain":true,"cfCacheStatus":true}},"token":"3ca157e612a14eccbb30cf6db6691c29","b":1}' crossorigin="anonymous"></script>


@stack('scripts')

</body>

<!-- Mirrored from dreamgigs.dreamstechnologies.com/html/template/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 04 Mar 2025 16:56:36 GMT -->
</html>
