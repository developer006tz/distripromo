<!DOCTYPE html>
<html class="no-js" lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- SEO Meta Description -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="keywords" content="Distripromo, Resell, Grow, Digital Panel,MMS panel,Distripromo MMS panel, Social Media Services, Online Marketplaces, Distripromo">
    <meta name="author" content="Distripromo Company">
    <meta name="robots" content="index, follow">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Distripromo offers the fastest, most affordable, and most advanced digital panel in the world. Earn a great income by reselling our high-quality social media services on your own platforms or on various online marketplaces. Distripromo is unbeatable in speed, price, and performance.">
    <meta property="og:title" content="Distripromo - Resell and Grow (Advanced MMS panel)">
    <meta property="og:description" content="The Fastest, Most Affordable, and Most Advanced Digital MMS Panel in the World. Earn a great income by reselling our high-quality social media services. Distripromo is unbeatable in speed, price, and performance.">
    <meta name="format-detection" content="telephone=no">
    <meta property="og:url" content="https://www.instagram.com/distrimusic/">
    <meta property="og:type" content="Instagram">
    <meta property="og:title" content="Distrimusic">
    <meta property="og:description" content="Distripromo, Resell, Grow, Digital Panel,MMS panel,Distripromo MMS panel, Social Media Services, Online Marketplaces, Distripromo.">
    <meta property="og:image" content="{{ URL::to('website/assets/img/logo/logo-blue.png') }}">
    <meta name="theme-color" content="#000000">
    <meta property="og:type" content="website"> 
    <meta property="og:url" content="https://distripromo.com/">
    <meta property="og:image" content="{{ URL::to('website/assets/img/logo/logo-blue.png') }}">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:site" content="@distripromo">
     

    <!-- Title  -->
    <title>Distripromo</title>
    <script>
        const startTime = performance.now();
        window.addEventListener('load', () => {
            const endTime = performance.now();
            const renderingTimeInSeconds = (endTime - startTime) / 1000;
            const loadTimeElement =  document.getElementById("loadTime");
            loadTimeElement.textContent = `Page rendering time: ${renderingTimeInSeconds.toFixed(2)} seconds`;
        });
    </script>

    <!-- Favicon  -->
    <link rel="icon" href="{{ URL::to('website/assets/img/logo/logo-blue.png') }}">

    <!-- ***** All CSS Files ***** -->

    <!-- Style css -->
    <link rel="stylesheet" href="{{ URL::to('website/assets/css/style.css') }}">

    <!-- Responsive css -->
    <link rel="stylesheet" href="{{ URL::to('website/assets/css/responsive.css') }}">

</head>

<body class="homepage-3">
<!--====== Preloader Area Start ======-->
<div id="preloader">
    <!-- Distripromo Preloader -->
    <div id="distrimusic-preloader" class="distrimusic-preloader">
        <!-- Preloader Animation -->
        <div class="preloader-animation">
            <!-- Spinner -->
            <div class="spinner"></div>
            <!-- Loader -->
            <div class="loader">
                <span data-text-preloader="D" class="animated-letters">D</span>
                <span data-text-preloader="I" class="animated-letters">I</span>
                <span data-text-preloader="S" class="animated-letters">S</span>
                <span data-text-preloader="T" class="animated-letters">T</span>
                <span data-text-preloader="R" class="animated-letters">R</span>
                <span data-text-preloader="I" class="animated-letters">I</span>
                <span data-text-preloader="P" class="animated-letters">P</span>
                <span data-text-preloader="R" class="animated-letters">R</span>
                <span data-text-preloader="O" class="animated-letters">O</span>
                <span data-text-preloader="M" class="animated-letters">M</span>
                <span data-text-preloader="O" class="animated-letters">O</span>
            </div>
            <p class="fw-5 text-center text-uppercase">Loading...</p>
        </div>
        <!-- Loader Animation -->
        <div class="loader-animation">
            <div class="row h-100">
                <!-- Single Loader -->
                <div class="col-3 single-loader p-0">
                    <div class="loader-bg"></div>
                </div>
                <!-- Single Loader -->
                <div class="col-3 single-loader p-0">
                    <div class="loader-bg"></div>
                </div>
                <!-- Single Loader -->
                <div class="col-3 single-loader p-0">
                    <div class="loader-bg"></div>
                </div>
                <!-- Single Loader -->
                <div class="col-3 single-loader p-0">
                    <div class="loader-bg"></div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--====== Preloader Area End ======-->

<!--====== Scroll To Top Area Start ======-->
<div id="scrollUp" title="Scroll To Top">
    <i class="fas fa-arrow-up"></i>
</div>
<!--====== Scroll To Top Area End ======-->

<div class="main overflow-hidden">
    <!-- ***** Header Start ***** -->
    <header id="header">
        <!-- Navbar -->
        <nav data-aos="zoom-out" data-aos-delay="800" class="navbar navbar-expand">
            <div class="container header">
                <!-- Navbar Brand-->
                <a class="navbar-brand" href="index.html">
                    <img class="navbar-brand-regular" width="43" height="52" src="{{ URL::to('website/assets/img/logo/distri-logo-white.png') }}" alt="brand-logo">
                    <img class="navbar-brand-sticky" width="43" height="52" src="{{ URL::to('website/assets/img/logo/logo-blue.png') }}" alt="sticky brand-logo">
                </a>
                <div class="ml-auto"></div>
                <!-- Navbar -->
                <ul class="navbar-nav items">
                    <li class="nav-item">
                        <a class="nav-link scroll" href="#home">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link scroll" href="#about">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link scroll" href="#services">Services</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link scroll" href="#pricing">Pricing</a>
                    </li>
                        <li class="nav-item">
                             <a class="nav-link scroll" href="#contact">Contact</a>
                    </li>

                    {{-- <li class="nav-item">
                        <a class="nav-link scroll" href="#faq">Faq</a>
                    </li> --}}
                </ul>
                <!-- Navbar Icons -->
                <ul class="navbar-nav icons">
                    {{-- <li class="nav-item">
                        <a href="#" class="nav-link" data-toggle="modal" data-target="#search">
                            <i class="fas fa-search"></i>
                        </a>
                    </li> --}}
                    <li class="nav-item social">
                        <a href="https://wa.link/p17jaq" class="nav-link" target="_blank"><i class="fab fa-whatsapp"></i></a>
                    </li>
                    <li class="nav-item social">
                        <a href="https://www.instagram.com/distrimusic/" class="nav-link" target="_blank"><i class="fab fa-instagram"></i></a>
                    </li>
                </ul>

                <!-- Navbar Toggler -->
                <ul class="navbar-nav toggle">
                    <li class="nav-item">
                        <a href="#" class="nav-link" data-toggle="modal" data-target="#menu">
                            <i class="fas fa-bars toggle-icon m-0"></i>
                        </a>
                    </li>
                </ul>

                <!-- Navbar Action Button -->
                <ul class="navbar-nav action">
                    <li class="nav-item ml-3">
                        <a href="{{url('login')}}" class="btn ml-lg-auto btn-bordered-white"><i
                                class="fas fa-paper-plane contact-icon mr-md-2"></i>Login</a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
    <!-- ***** Header End ***** -->

    <!-- ***** Welcome Area Start ***** -->
    <section id="home" class="section welcome-area bg-overlay overflow-hidden d-flex align-items-center">
        <div class="container">
            <div class="row align-items-center">
                <!-- Welcome Intro Start -->
                <div class="col-12 col-md-6">
                    <div class="welcome-intro">
                        <h1 class="text-white text-center text-md-left">Distripromo <br> <span
                                class="fw-4">Resell and Grow</span></h1>
                        <p class="text-white text-center text-md-left my-4">The Fastest, Most Affordable, and Most Advanced Digital Panel in the World. We offer you a chance to earn a great income by reselling our high-quality social media services on your own platforms or on various online marketplaces. Distripromo is simply unbeatable in speed, price, and performance..</p>
                        <!-- Buttons -->
                        <div
                            class="button-group d-flex align-items-center justify-content-center justify-content-md-start">
                            <a href="{{url('login')}}" class="btn btn-bordered-white">Start a Project</a>
                            <!-- Play Button -->
                            <a class="play-btn" data-fancybox data-width="640" data-height="360"
                               data-small-btn="true" href="https://youtu.be/TKnufs85hXk">
                                <div class="btn-circle play-animation"></div>
                                <div class="btn-circle play-animation animation-short"></div>
                                <!-- Play Icon -->
                                <div class="play-icon">
                                    <i class="fas fa-play"></i>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6">
                    <!-- Welcome Thumb -->
                    <div class="welcome-thumb-wrapper pt-3 pt-md-5 mt-5">
                            <span class="welcome-thumb-1">
                                <img class="welcome-animation d-block ml-auto" src="{{ URL::to('website/assets/img/welcome/thumb_7.png') }}"
                                     alt="">
                            </span>
                        <span class="welcome-thumb-2">
                                <img class="welcome-animation d-block" src="{{ URL::to('website/assets/img/welcome/thumb_8.png') }}" alt="">
                            </span>
                        <span class="welcome-thumb-3">
                                <img class="welcome-animation d-block" src="{{ URL::to('website/assets/img/welcome/thumb_9.png') }}" alt="">
                            </span>
                        <span class="welcome-thumb-4">
                                <img class="welcome-animation d-block" src="{{ URL::to('website/assets/img/welcome/thumb_10.png') }}" alt="">
                            </span>
                    </div>
                </div>
            </div>
        </div>
        <!-- Shape Bottom -->
        <div class="welcome-shape">
            <img src="{{ URL::to('website/assets/img/hero_shape.png') }}" alt="">
        </div>
    </section>
    <!-- ***** Welcome Area End ***** -->

    <!-- ***** Promo Area Start ***** -->
    <section class="section promo-area ptb_100">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-6 col-lg-4 res-margin">
                    <!-- Single Promo -->
                    <div class="single-promo grad-hover text-center p-5">
                        <!-- Promo Wrapper -->
                        <div class="promo-wrapper">
                            <h3 class="mb-3">Zero to Hero</h3>
                            <p>If you want to be a <strong>successful social media marketer</strong>, you need Distripromo. Distripromo is the <strong>best social media marketing panel for resellers</strong>. You can resell our <strong>high-quality services</strong> on your own platforms or online marketplaces. Choose from followers, likes, views, comments, shares, and more. Customize your orders to fit your needs and budget. Distripromo is <strong>fast, affordable, and powerful</strong>. With Distripromo, you can <strong>achieve your social media marketing goals</strong>. You can go from zero to hero in no time. Join Distripromo today and start your <strong>journey to success</strong>.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4 res-margin">
                    <!-- Single Promo -->
                    <div class="single-promo grad-hover active text-center p-5">
                        <!-- Promo Wrapper -->
                        <div class="promo-wrapper">
                            <h3 class="mb-3">Dedicated Support</h3>
                            <p>Distripromo is dedicated to giving you the <strong>best customer service ever</strong>. We want you to <strong>love our products and services</strong>. That’s why we have a friendly support team that is always ready to help you with any questions or issues. You can reach our support team by email, phone, or live chat. We are available Monday to Friday, 9 am to 5 pm GMT. We will reply to your inquiries within 24 hours or less. You can also visit our FAQ page for quick answers to common questions. We <strong>value your business</strong> and we can’t wait to serve you. Thank you for choosing Distripromo as your <strong>social media marketing partner</strong>.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4">
                    <!-- Single Promo -->
                    <div class="single-promo grad-hover text-center p-5">
                        <!-- Promo Wrapper -->
                        <div class="promo-wrapper">
                            <h3 class="mb-3">How it Works</h3>
                            <p>Distripromo is the <strong>best social media marketing panel for resellers</strong>. You can resell our <strong>top-notch services</strong> on your own platforms or online marketplaces. Choose from followers, likes, views, comments, shares, and more. Customize your orders to fit your needs and budget.

How to use Distripromo:

Sign up for free with your email or Facebook/Google account.
Add funds with PayPal, credit card, or cryptocurrency. Earn free credits by referring friends.
Pick a service and place an order. Use smart filters to find the best options.
Relax and wait for delivery. Track your order and contact support if needed.
Join Distripromo and <strong>make money from social media marketing</strong>.


                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Promo Area End ***** -->

    <!-- ***** Content Area Start ***** -->
    <section id="about" class="section content-area bg-grey ptb_100">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-12 col-lg-6">
                    <!-- Content Inner -->
                    <div class="content-inner text-center">
                        <!-- Section Heading -->
                        <div class="section-heading text-center mb-3">
                            <h2>We help to grow your business.</h2>
                            <p class="d-none d-sm-block mt-4">Grow your business with Distripromo. Resell our top social media services. Boost your online presence and sales. Join us today.</p>
                            <p class="d-block d-sm-none mt-4">Grow your business with Distripromo. Resell our top social media services. Boost your online presence and sales. Join us today</p>
                        </div>
                        <!-- Content List -->
                        <ul class="content-list text-left">
                            <!-- Single Content List -->
                            <li class="single-content-list media py-2">
                                <div class="content-icon pr-4">
                                    <span class="color-1"><i class="fas fa-angle-double-right"></i></span>
                                </div>
                                <div class="content-text media-body">
                                        <span><b>Followers</b><br>Increase your audience and credibility. Attract more customers and opportunities</span>
                                </div>
                            </li>
                            <!-- Single Content List -->
                            <li class="single-content-list media py-2">
                                <div class="content-icon pr-4">
                                    <span class="color-1"><i class="fas fa-angle-double-right"></i></span>
                                </div>
                                <div class="content-text media-body">
                                        <span><b>Likes</b><br>Show your popularity and engagement. Boost your ranking and visibility.</span>
                                </div>
                            </li>
                            <!-- Single Content List -->
                            <li class="single-content-list media py-2">
                                <div class="content-icon pr-4">
                                    <span class="color-1"><i class="fas fa-angle-double-right"></i></span>
                                </div>
                                <div class="content-text media-body">
                                        <span><b>Views</b><br>Expand your reach and exposure. Impress your potential clients and partners</span>
                                </div>
                            </li>
                            <!-- Single Content List -->
                            <li class="single-content-list media py-2">
                                <div class="content-icon pr-4">
                                    <span class="color-1"><i class="fas fa-angle-double-right"></i></span>
                                </div>
                                <div class="content-text media-body">
                                        <span><b>Comments</b><br>Generate feedback and interaction. Build trust and loyalty with your fans</span>
                                </div>
                            </li>
                            <!-- Single Content List -->
                            <li class="single-content-list media py-2">
                                <div class="content-icon pr-4">
                                    <span class="color-1"><i class="fas fa-angle-double-right"></i></span>
                                </div>
                                <div class="content-text media-body">
                                        <span><b>Share</b><br>Spread your message and brand. Create viral effects and referrals.</span>
                                </div>
                            </li>

                        </ul>
                        <a href="#" class="btn btn-bordered mt-4">Learn More</a>
                    </div>
                </div>
                <div class="col-12 col-lg-6">
                    <!-- Service Thumb -->
                    <div class="service-thumb mx-auto pt-4 pt-lg-0">
                        <img src="{{ URL::to('website/assets/img/content/content_thumb.png') }}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Content Area End ***** -->

    <!-- ***** Content Area Start ***** -->
    <section class="section content-area ptb_100">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-12 col-lg-6">
                    <!-- Profile Circle Wrapper -->
                    <div class="profile-circle-wrapper circle-animation d-none d-sm-block">
                        <!-- Profile Inner -->
                        <div class="profile-inner">
                            <!-- Profile Circle -->
                            <div class="profile-circle circle-lg">
                                    <span class="profile-icon icon-1">
                                        <img class="icon-1-img"
                                             src="{{ URL::to('website/assets/img/content/profile-icons/profile_icon_1.svg') }}" alt="" />
                                    </span>
                                <span class="profile-icon icon-2">
                                        <img class="icon-2-img"
                                             src="{{ URL::to('website/assets/img/content/profile-icons/profile_icon_2.svg') }}" alt="" />
                                    </span>
                                <span class="profile-icon icon-3">
                                        <img class="icon-3-img"
                                             src="{{ URL::to('website/assets/img/content/profile-icons/profile_icon_1.svg') }}" alt="" />
                                    </span>
                                <span class="profile-icon icon-4">
                                        <img class="icon-4-img"
                                             src="{{ URL::to('website/assets/img/content/profile-icons/profile_icon_2.svg') }}" alt="" />
                                    </span>
                            </div>

                            <!-- Profile Circle -->
                            <div class="profile-circle circle-md">
                                    <span class="profile-icon icon-5">
                                        <img class="icon-5-img"
                                             src="{{ URL::to('website/assets/img/content/profile-icons/profile_icon_3.svg') }}" alt="" />
                                    </span>
                                <span class="profile-icon icon-6">
                                        <img class="icon-6-img"
                                             src="{{ URL::to('website/assets/img/content/profile-icons/profile_icon_3.svg') }}" alt="" />
                                    </span>
                                <span class="profile-icon icon-7">
                                        <img class="icon-7-img"
                                             src="{{ URL::to('website/assets/img/content/profile-icons/profile_icon_3.svg') }}" alt="" />
                                    </span>
                            </div>

                            <!-- Profile Circle -->
                            <div class="profile-circle circle-sm">
                                    <span class="profile-icon icon-8">
                                        <img class="icon-8-img"
                                             src="{{ URL::to('website/assets/img/content/profile-icons/profile_icon_4.svg') }}" alt="" />
                                    </span>
                                <span class="profile-icon icon-9">
                                        <img class="icon-9-img"
                                             src="{{ URL::to('website/assets/img/content/profile-icons/profile_icon_4.svg') }}" alt="" />
                                    </span>
                            </div>
                        </div>
                        <img class="folder-img" src="{{ URL::to('website/assets/img/content/folders.png') }}" alt="" />
                    </div>
                </div>
                <div class="col-12 col-lg-6">
                    <!-- Content Inner -->
                    <div class="content-inner text-center pt-sm-4 pt-lg-0 mt-sm-5 mt-lg-0">
                        <!-- Section Heading -->
                        <div class="section-heading text-center mb-3">
                            <h2>Work smarter,<br> not harder.</h2>
                            <p class="d-none d-sm-block mt-4">🎵 Resell top social media services. Choose, order, relax. We do the rest. 🎵</p>
                            <p class="d-block d-sm-none mt-4">🎵 Resell top social media services. Choose, order, relax. We do the rest. 🎵.</p>
                        </div>
                        <!-- Content List -->
                        <ul class="content-list text-left">
                            <!-- Single Content List -->
                            <li class="single-content-list media py-2">
                                <div class="content-icon pr-4">
                                    <span class="color-2"><i class="fas fa-angle-double-right"></i></span>
                                </div>
                                <div class="content-text media-body">
                                        <span><b>Social Media Marketing</b><br>🚀 Pick any social media service. Customize and order. Boost your online success. 🚀</span>
                                </div>
                            </li>
                            <!-- Single Content List -->
                            <li class="single-content-list media py-2">
                                <div class="content-icon pr-4">
                                    <span class="color-2"><i class="fas fa-angle-double-right"></i></span>
                                </div>
                                <div class="content-text media-body">
                                        <span><b>Reselling Business</b><br>🚀 Resell our services. Set your prices and profits. Earn free credits. Grow. 🚀</span>
                                </div>
                            </li>
                            <!-- Single Content List -->
                            <li class="single-content-list media py-2">
                                <div class="content-icon pr-4">
                                    <span class="color-2"><i class="fas fa-angle-double-right"></i></span>
                                </div>
                                <div class="content-text media-body">
                                        <span><b>Customer Support</b><br>👋 Need help? Email, call, or chat with us. Fast response. FAQ available. 👋</span>
                                </div>
                            </li>
                        </ul>
                        <a href="#" class="btn btn-bordered mt-4">Learn More</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Content Area End ***** -->

    <!-- ***** Service Area End ***** -->
    <section id="services" class="section service-area bg-grey ptb_100">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-md-10 col-lg-7">
                    <!-- Section Heading -->
                    <div class="section-heading text-center">
                        <h2>We provide the best SMM services</h2>
                        <p class="d-none d-sm-block mt-4">Distripromo: Awesome and Robust Digital Services for Your Online Success. join Us Today.
                        </p>
                        <p class="d-block d-sm-none mt-4">Distripromo: Awesome and Robust Digital Services for Your Online Success. join Us Today.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-md-6 col-lg-4">
                    <!-- Single Service -->
                    <div class="single-service text-center p-4">
                        <span class="flaticon-rocket-launch color-1 icon-bg-1"></span>
                        <h3 class="my-3">Social media advertising</h3>
                        <p><b>Want to reach more customers online?</b> Social media advertising is the answer. We create and run ads on Facebook, Instagram, Youtube, and Tiktok that attract and convert your ideal audience. Contact us today and let’s grow your business with social media ads.</p>
                        <a class="service-btn mt-3" href="#">Learn More</a>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4">
                    <!-- Single Service -->
                    <div class="single-service text-center p-4">
                        <span class="flaticon-monitoring color-2 icon-bg-2"></span>
                        <h3 class="my-3">Music promotions</h3>
                        <p>Are you a musician, singer, rapper, or producer who wants to get more exposure and recognition for your music? If yes, then you need our music promotions service. We can help you promote your music on platforms like Boomplay, Spotify, Apple music, SoundCloud and YouTube. We can get you more streams, plays, views, followers, and fans. .</p>
                        <a class="service-btn mt-3" href="#">Learn More</a>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4">
                    <!-- Single Service -->
                    <div class="single-service text-center p-4">
                        <span class="flaticon-web color-3 icon-bg-3"></span>
                        <h3 class="my-3">Social Media Accounts Management</h3>
                        <p>Do you want to have a strong and consistent social media presence without spending hours on creating and posting content? If yes, then you need our social media accounts management service. We can handle your social media accounts on Facebook, Instagram, Twitter, Youtube, and Tiktok. We can create and post engaging content, respond to comments and messages, and grow your followers and fans.</p>
                        <a class="service-btn mt-3" href="#">Learn More</a>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4">
                    <!-- Single Service -->
                    <div class="single-service text-center p-4">
                        <span class="flaticon-smartphone color-4 icon-bg-4"></span>
                        <h3 class="my-3">Sponsorship Made Easy for Underground Artists</h3>
                        <p>Are you an underground artist who wants to make money from your passion? Do you need sponsors to support your music, art, or performance? If yes, then you need our artist sponsorship finding service. We can help you find and connect with sponsors who are interested in your work. We can also help you negotiate the best deals and contracts. Contact us today and let us help you get paid to do what you love..</p>
                        <a class="service-btn mt-3" href="#">Learn More</a>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4">
                    <!-- Single Service -->
                    <div class="single-service text-center p-4">
                        <span class="flaticon-email color-5 icon-bg-5"></span>
                        <h3 class="my-3">Social Account Boosting</h3>
                        <p>Do you want to grow your social media accounts quickly and easily? Do you want to have more followers and fans who love your content and support your brand? If yes, then you need our social account boosting service. We can help you boost your social media accounts on platforms like Instagram, Twitter, TikTok, and YouTube. We can get you more real and active followers and fans who will engage with your posts and videos.</p>
                        <a class="service-btn mt-3" href="#">Learn More</a>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4">
                    <!-- Single Service -->
                    <div class="single-service text-center p-4">
                        <span class="flaticon-affiliate color-6 icon-bg-6"></span>
                        <h3 class="my-3">Social Media Content Creation & Graphics Design</h3>
                        <p>Do you want to create content that attracts and engages your social media audience? If yes, then you need our social media content creation service. We can create high-quality and engaging content for your social media accounts, such as images, videos, graphics, captions, hashtags, and more. Contact us today and let us captivate your audience with amazing conten.</p>
                        <a class="service-btn mt-3" href="#">Learn More</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Service Area End ***** -->

    <!-- ***** Price Plan Area Start ***** -->
    <section id="pricing" class="section price-plan-area overflow-hidden ptb_100">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-md-10 col-lg-7">
                    <!-- Section Heading -->
                    <div class="section-heading text-center">
                        <h2>Our Price Plans</h2>
                        <p class="d-none d-sm-block mt-4">We offer the price plans to suit your needs and budget. Compare the features and benefits of each plan and pick the best one for you.
                        </p>
                        <p class="d-block d-sm-none mt-4">We offer the price plans to suit your needs and budget. Compare the features and benefits of each plan and pick the best one for you.</p>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-12 col-lg-12">
                    <div class="row price-plan-wrapper">
                        <div class="col-12 col-md-3">
                            <!-- Single Price Plan -->
                            <div class="single-price-plan color-1 bg-hover hover-top text-center p-5">
                                <div class="plan-title mb-2 mb-sm-3">
                                    <h3 class="mb-2">Instagram Followers</h3>
                                </div>
                                <div class="plan-description">
                                    <ul class="plan-features">
                                        <li class="py-2">1000 = Tsh 3000</li>
                                        <li class="py-2">5000 = Tsh 15,000</li>
                                        <li class="py-2 text-muted">10k = Tsh 30,000</li>
                                        <li class="py-2 text-muted">10k = Tsh 30,000</li>
                                    </ul>
                                </div>
                                <!-- Plan Button -->
                                
                            </div>
                        </div>
                            {{-- instragram likes  --}}
                            <div class="col-12 col-md-3">
                            <div class="single-price-plan color-1 bg-hover hover-top text-center p-5">
                                <div class="plan-title mb-2 mb-sm-3">
                                    <h3 class="mb-2">Instagram Likes</h3>
                                </div>
                                <div class="plan-description">
                                    <ul class="plan-features">
                                        <li class="py-2">1000 = Tsh 2000</li>
                                        <li class="py-2">5000 = Tsh 10,000</li>
                                        <li class="py-2 text-muted">10k = Tsh 20,000</li>
                                        <li class="py-2 text-muted">50k = Tsh 100,000</li>
                                    </ul>
                                </div>
                                
                            </div>
                        </div>
                            {{-- Tiktok followers  --}}
                            <div class="col-12 col-md-3">
                            <div class="single-price-plan color-1 bg-hover hover-top text-center p-5">
                                <div class="plan-title mb-2 mb-sm-3">
                                    <h3 class="mb-2">Tiktok Followers</h3>
                                </div>
                                <div class="plan-description">
                                    <ul class="plan-features">
                                        <li class="py-2">1000 = Tsh 5,000</li>
                                        <li class="py-2">5000 = Tsh 25,000</li>
                                        <li class="py-2 text-muted">10k = Tsh 50,000</li>
                                        <li class="py-2 text-muted">100k = Tsh 500,000</li>
                                    </ul>
                                </div>
                                
                            </div>
                        </div>
                            {{-- Tiktok Viewers  --}}
                            <div class="col-12 col-md-3">
                            <div class="single-price-plan color-1 bg-hover hover-top text-center p-5">
                                <div class="plan-title mb-2 mb-sm-3">
                                    <h3 class="mb-2">Tiktok Viewers</h3>
                                </div>
                                <div class="plan-description">
                                    <ul class="plan-features">
                                        <li class="py-2">1000 = Tsh 2,000</li>
                                        <li class="py-2">5000 = Tsh 10,000</li>
                                        <li class="py-2 text-muted">10k = Tsh 20,000</li>
                                        <li class="py-2 text-muted">50k = Tsh 100,000</li>
                                    </ul>
                                </div>
                                
                            </div>
                        </div>
                        {{-- Youtube Subscribers  --}}
                            <div class="col-12 col-md-4 mt-3">
                            <div class="single-price-plan color-1 bg-hover hover-top text-center p-5">
                                <div class="plan-title mb-2 mb-sm-3">
                                    <h3 class="mb-2">Youtube Subscribers</h3>
                                </div>
                                <div class="plan-description">
                                    <ul class="plan-features">
                                        <li class="py-2">1000 = Tsh 35,000</li>
                                        <li class="py-2">5000 = Tsh 174,000</li>
                                        <li class="py-2 text-muted">10k = Tsh 349,500</li>
                                        <li class="py-2 text-muted">50k = Tsh 1,750,000</li>
                                        <li class="py-2 text-muted">100k = Tsh 3,405,000</li>
                                    </ul>
                                </div>
                                
                            </div>
                        </div>
                        {{-- Youtube Subscribers  --}}
                            <div class="col-12 col-md-4 mt-3">
                            <div class="single-price-plan color-1 bg-hover hover-top text-center p-5">
                                <div class="plan-title mb-2 mb-sm-3">
                                    <h3 class="mb-2">Youtube Viewers</h3>
                                </div>
                                <div class="plan-description">
                                    <ul class="plan-features">
                                        <li class="py-2">1000 = Tsh 5,000</li>
                                        <li class="py-2">5000 = Tsh 25,000</li>
                                        <li class="py-2 text-muted">10k = Tsh 50,000</li>
                                        <li class="py-2 text-muted">50k = Tsh 250,000</li>
                                        <li class="py-2 text-muted">100k = Tsh 405,000</li>
                                    </ul>
                                </div>
                                
                            </div>
                        </div>
                        {{-- Youtube watch hours  --}}
                            <div class="col-12 col-md-4 mt-3">
                            <div class="single-price-plan color-1 bg-hover hover-top text-center p-5">
                                <div class="plan-title mb-2 mb-sm-3">
                                    <h3 class="mb-2 h3">Youtube Watch hours</h3>
                                </div>
                                <div class="plan-description">
                                    <ul class="plan-features">
                                        <li class="py-2">1000 = Tsh 36,000</li>
                                        <li class="py-2">4000 = Tsh 124,000</li>
                                    </ul>
                                </div>
                                
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
            <div class="row justify-content-center pt-5">
                <p class="pt-4 fw-5">Not sure what to choose? <a class="service-btn" href="#"><strong>Contact
                            Us</strong></a></p>
            </div>
        </div>
    </section>
    <!-- ***** Price Plan Area End ***** -->

    <!-- ***** Review Area Start ***** -->
    <!-- ***** Review Area End ***** -->

    <!--====== Contact Area Start ======-->
    <section id="contact" class="contact-area ptb_100">
        <div class="container">
            <div class="row justify-content-between align-items-center">
                <div class="col-12 col-lg-5">
                    <!-- Section Heading -->
                    <div class="section-heading text-center mb-3">
                        <h2>Let's connect!</h2>
                        <p class="d-none d-sm-block mt-4">We’d love to hear from you and answer any questions you have about Distripromo, the digital dashboard for social media marketing.
                        </p>
                        <p class="d-block d-sm-none mt-4">We’d love to hear from you and answer any questions you have about Distripromo, the digital dashboard for social media marketing.</p>
                    </div>
                    <!-- Contact Us -->
                    <div class="contact-us">
                        <ul>
                            <!-- Contact Info -->
                            <li class="contact-info color-1 bg-hover active hover-bottom text-center p-5 m-3">
                                <span><i class="fas fa-mobile-alt fa-3x"></i></span>
                                <a class="d-block my-2" href="tel:+255679420201">
                                    <h3>+255 679 420 201</h3>
                                </a>
                                <p>Call or sms us with our phone number.</p>
                            </li>
                            <!-- Contact Info -->
                            <li class="contact-info color-3 bg-hover active hover-bottom text-center p-5 m-3">
                                <span><i class="fas fa-envelope-open-text fa-3x"></i></span>
                                <a class="d-none d-sm-block my-2" href="#">
                                    <h3>info@distripromo.com</h3>
                                </a>
                                <a class="d-block d-sm-none my-2" href="#">
                                    <h3>mail@your company.com</h3>
                                </a>
                                <p>contact us with our email and we will respond quickly.</p>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-12 col-lg-6 pt-4 pt-lg-0">
                    <!-- Contact Box -->
                    <div class="contact-box text-center">
                        <!-- Contact Form -->
                        <form id="contact-form" method="POST" action="{{route('login')}}">
                            <div class="row">
                                <div class="col-12">
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="name" placeholder="Name"
                                               required="required">
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="name"
                                               placeholder="Company Name" required="required">
                                    </div>
                                    <div class="form-group">
                                        <input type="email" class="form-control" name="email" placeholder="Email"
                                               required="required">
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="subject" placeholder="Phone"
                                               required="required">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                            <textarea class="form-control" name="message" placeholder="Message"
                                                      required="required"></textarea>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <button type="submit" class="btn btn-bordered active btn-block mt-3"><span
                                            class="text-white pr-3"><i class="fas fa-paper-plane"></i></span>Send
                                        Message</button>
                                </div>
                            </div>
                        </form>
                        <p class="form-message"></p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--====== Contact Area End ======-->

    <!--====== Call To Action Area Start ======-->
    <section class="section cta-area bg-overlay ptb_100">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-lg-10">
                    <!-- Section Heading -->
                    <div class="section-heading text-center m-0">
                        <h2 class="text-white">Wanna Boost Your Brand with the Best SMM Services &amp; marketing solution?</h2>
                        
                        <a href="{{route('register')}}" class="btn btn-bordered-white mt-4">Start working with us Today</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--====== Call To Action Area End ======-->

    <!--====== Footer Area Start ======-->
    <footer class="section footer-area">
        <!-- Footer Top -->
        <div class="footer-top ptb_100">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-sm-6 col-lg-3">
                        <!-- Footer Items -->
                        <div class="footer-items">
                            <!-- Footer Title -->
                            <h3 class="footer-title text-uppercase mb-2">About Us</h3>
                            <ul>
                                <li class="py-2"><a class="text-black-50" href="#">Company Profile</a></li>
                                <li class="py-2"><a class="text-black-50" href="#">Careers</a></li>
                                <li class="py-2"><a class="text-black-50" href="#">Partners</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-lg-3">
                        <!-- Footer Items -->
                        <div class="footer-items">
                            <!-- Footer Title -->
                            <h3 class="footer-title text-uppercase mb-2">Services</h3>
                            <ul>
                                <li class="py-2"><a class="text-black-50" href="#">Music prommotion</a></li>
                                <li class="py-2"><a class="text-black-50" href="#">social media advertisement</a></li>
                                <li class="py-2"><a class="text-black-50" href="#">Social Account Boost & grow</a></li>
                                <li class="py-2"><a class="text-black-50" href="#">Graphics design</a></li>
                                <li class="py-2"><a class="text-black-50" href="#">Social Media Marketing</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-lg-3">
                        <!-- Footer Items -->
                        <div class="footer-items">
                            <!-- Footer Title -->
                            <h3 class="footer-title text-uppercase mb-2">Support</h3>
                            <ul>
                                <li class="py-2"><a class="text-black-50" href="#">Frequently Asked</a></li>
                                <li class="py-2"><a class="text-black-50" href="#">Terms &amp; Conditions</a></li>
                                <li class="py-2"><a class="text-black-50" href="#">Privacy Policy</a></li>
                                <li class="py-2"><a class="text-black-50" href="#">Contact us</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-lg-3">
                        <!-- Footer Items -->
                        <div class="footer-items">
                            <!-- Footer Title -->
                            <h3 class="footer-title text-uppercase mb-2">Follow Us</h3>
                            <p class="mb-2">Follow us in our social media.
                            </p>
                            <!-- Social Icons -->
                            <ul class="social-icons list-inline pt-2">
                                <li class="list-inline-item px-1"><a href="https://wa.link/p17jaq" target="_blanck"><i class="fab fa-whatsapp"></i></a>
                                </li>
                                <li class="list-inline-item px-1"><a href="https://www.instagram.com/distrimusic/" target="_blanck"><i class="fab fa-instagram"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer Bottom -->
        <div class="footer-bottom bg-grey">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <!-- Copyright Area -->
                        <div
                            class="copyright-area d-flex flex-wrap justify-content-center justify-content-sm-between text-center py-4">
                            <!-- Copyright Left -->
                            <div class="copyright-left">&copy; Copyrights {{date('Y')}} Distripromo.
                            </div>
                            <!-- Copyright Right -->
                            <div class="copyright-right"><span>All right reserved</span></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!--====== Footer Area End ======-->

    <!--====== Modal Search Area Start ======-->
    <div id="search" class="modal fade p-0">
        <div class="modal-dialog dialog-animated">
            <div class="modal-content h-100">
                <div class="modal-header" data-dismiss="modal">
                    Search <i class="far fa-times-circle icon-close"></i>
                </div>
                <div class="modal-body">
                    <form class="row">
                        <div class="col-12 align-self-center">
                            <div class="row">
                                <div class="col-12 pb-3">
                                    <h2 class="search-title mb-3">What are you looking for?</h2>
                                    <p>Find anything about distripromo.</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12 input-group">
                                    <input type="text" class="form-control" placeholder="Enter your keywords">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12 input-group align-self-center">
                                    <button class="btn btn-bordered mt-3">Search</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!--====== Modal Search Area End ======-->

    <!--====== Modal Responsive Menu Area Start ======-->
    <div id="menu" class="modal fade p-0">
        <div class="modal-dialog dialog-animated">
            <div class="modal-content h-100">
                <div class="modal-header" data-dismiss="modal">
                    Menu <i class="far fa-times-circle icon-close"></i>
                </div>
                <div class="menu modal-body">
                    <div class="row w-100">
                        <div class="items p-0 col-12 text-center"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--====== Modal Responsive Menu Area End ======-->
</div>


<!-- ***** All jQuery Plugins ***** -->

<!-- jQuery(necessary for all JavaScript plugins) -->
<script src="{{ URL::to('website/assets/js/jquery/jquery-3.5.1.min.js') }}"></script>

<!-- Bootstrap js -->
<script src="{{ URL::to('website/assets/js/bootstrap/popper.min.js') }}"></script>
<script src="{{ URL::to('website/assets/js/bootstrap/bootstrap.min.js') }}"></script>

<!-- Plugins js -->
<script src="{{ URL::to('website/assets/js/plugins/plugins.min.js') }}"></script>

<!-- Active js -->
<script src="{{ URL::to('website/assets/js/active.js') }}"></script>
</body>

</html>
