<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="storage/images/favicon.png" type="image/png">
    <title>Verify Asap</title>


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css"
        integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA=="
        crossorigin="anonymous" />
    <link rel="stylesheet" href="css/vendor.css">
    <link rel="stylesheet" href="css/common.css">
    <script src="vendor/Shortcode/Shortcode.js"></script>
    <script src="https://cdn.tailwindcss.com"></script>

    <script src="js/app.js" defer></script>
    <style>
        [wire\:loading],
        [wire\:loading\.delay],
        [wire\:loading\.inline-block],
        [wire\:loading\.inline],
        [wire\:loading\.block],
        [wire\:loading\.flex],
        [wire\:loading\.table],
        [wire\:loading\.grid],
        [wire\:loading\.inline-flex] {
            display: none;
        }

        [wire\:loading\.delay\.shortest],
        [wire\:loading\.delay\.shorter],
        [wire\:loading\.delay\.short],
        [wire\:loading\.delay\.long],
        [wire\:loading\.delay\.longer],
        [wire\:loading\.delay\.longest] {
            display: none;
        }

        [wire\:offline] {
            display: none;
        }

        [wire\:dirty]:not(textarea):not(input):not(select) {
            display: none;
        }

        input:-webkit-autofill,
        select:-webkit-autofill,
        textarea:-webkit-autofill {
            animation-duration: 50000s;
            animation-name: livewireautofill;
        }

        @keyframes livewireautofill {
            from {}
        }
    </style>

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Kadwa:wght@400;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <style>
        :root {
            --head-font: "Kadwa";
            --body-font: "Poppins";
        }

        .bg-primary {
            background-color: #6633db;
        }

        .text-primary {
            color: #6633db;
        }

        .border-primary {
            border-color: #6633db;
        }

        .bg-secondary {
            background-color: #c1dc78;
        }

        .text-secondary {
            color: #c1dc78;
        }

        .border-secondary {
            border-color: #c1dc78;
        }

        .bg-tertiary {
            background-color: #d2ab3e;
        }

        .text-tertiary {
            color: #d2ab3e;
        }

        .border-tertiary {
            border-color: #d2ab3e;
        }

        input:checked~.toggle-path {
            background-color: #6633db;
        }
    </style>
    <style>
        #span-3 {
            color: #6633db;
            white-space: nowrap;
            justify-content: center;
            border-radius: 20px;
            background-color: #1e1e1e;
            padding: 21px 50px;
            font: 700 16px Inter, sans-serif;
        }

        #div-2 {
            white-space: nowrap;
            justify-content: center;
            color: #6633db;
            border-radius: 20px;
            padding: 21px 50px;
            font: 700 16px Inter, sans-serif;
        }

        #myDiv3 {
            display: none;
        }
    </style>
</head>

<body>
    <div class="default-theme">

        <div style="color:#3f78e0; font-weight:bold;" class="flex justify-end text-white">
            <a class="text-xs md:text-base flex gap-3 px-3 md:px-5 py-2 md:py-3 bg-primary rounded-bl-lg"
                href="register">
                <svg style="color:white;" xmlns="http://www.w3.org/2000/svg" class="h-4 md:h-5 w-4 md:w-5" fill="none"
                    viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M18 9v3m0 0v3m0-3h3m-3 0h-3m-2-5a4 4 0 11-8 0 4 4 0 018 0zM3 20a6 6 0 0112 0v1H3v-1z" />
                </svg>
                <span style="color:white;">Register</span>
            </a>
            <a style="color:white;"
                class="text-xs md:text-base flex gap-3 px-3 md:px-5 py-2 md:py-3 bg-secondary rounded-br-lg"
                href="login">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 md:h-5 w-4 md:w-5" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M11 16l-4-4m0 0l4-4m-4 4h14m-5 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h7a3 3 0 013 3v1" />
                </svg>
                <span style="color:white;">Login</span>
            </a>
        </div>

        <!DOCTYPE html>
        <html wire:id="eYPSy5A4nBOh9Tk7XhoH"
            wire:initial-data="{&quot;fingerprint&quot;:{&quot;id&quot;:&quot;eYPSy5A4nBOh9Tk7XhoH&quot;,&quot;name&quot;:&quot;frontend.home&quot;,&quot;locale&quot;:&quot;en&quot;,&quot;path&quot;:&quot;\/&quot;,&quot;method&quot;:&quot;GET&quot;,&quot;v&quot;:&quot;acj&quot;},&quot;effects&quot;:{&quot;listeners&quot;:[]},&quot;serverMemo&quot;:{&quot;children&quot;:[],&quot;errors&quot;:[],&quot;htmlHash&quot;:&quot;2d49452b&quot;,&quot;data&quot;:{&quot;numbers&quot;:[],&quot;features&quot;:[],&quot;sections&quot;:[],&quot;assigned&quot;:[],&quot;user&quot;:null,&quot;orders&quot;:[],&quot;filters&quot;:{&quot;number&quot;:{&quot;country&quot;:[]},&quot;private&quot;:{&quot;country&quot;:[]},&quot;rented&quot;:{&quot;country&quot;:[]}},&quot;private&quot;:[],&quot;rented&quot;:[],&quot;types&quot;:[&quot;Open&quot;,&quot;Register Only&quot;,&quot;Private&quot;,&quot;Shared Buy&quot;,&quot;Private Buy&quot;],&quot;bg&quot;:[&quot;bg-gray-200&quot;,&quot;bg-lime-200&quot;,&quot;bg-red-200&quot;,&quot;bg-purple-200&quot;,&quot;bg-pink-200&quot;],&quot;text&quot;:[&quot;text-gray-800&quot;,&quot;text-lime-800&quot;,&quot;text-red-800&quot;,&quot;text-purple-800&quot;,&quot;text-pink-800&quot;]},&quot;dataMeta&quot;:{&quot;modelCollections&quot;:{&quot;numbers&quot;:{&quot;class&quot;:null,&quot;id&quot;:[],&quot;relations&quot;:[],&quot;connection&quot;:null,&quot;collectionClass&quot;:null},&quot;features&quot;:{&quot;class&quot;:&quot;App\\Models\\Feature&quot;,&quot;id&quot;:[1,2,3],&quot;relations&quot;:[],&quot;connection&quot;:&quot;mysql&quot;,&quot;collectionClass&quot;:null},&quot;sections&quot;:{&quot;class&quot;:&quot;App\\Models\\Section&quot;,&quot;id&quot;:[1,2],&quot;relations&quot;:[],&quot;connection&quot;:&quot;mysql&quot;,&quot;collectionClass&quot;:null}},&quot;collections&quot;:[&quot;assigned&quot;,&quot;orders&quot;,&quot;private&quot;,&quot;rented&quot;]},&quot;checksum&quot;:&quot;1e20f070cb307553f846e687a18203088848521121a80dfdb9952ea6874aa6d0&quot;}}"
            lang="en">

        <head>
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <meta name="description"
                content="An impressive and flawless site template that includes various UI elements and countless features, attractive ready-made blocks and rich pages, basically everything you need to create a unique and professional website.">
            <meta name="keywords"
                content="bootstrap 5, business, corporate, creative, gulp, marketing, minimal, modern, multipurpose, one page, responsive, saas, sass, seo, startup, html5 template, site template">
            <meta name="author" content="elemis">
            <title>Verify Asap | SMS Verification Website.</title>
            <link rel="shortcut icon" href="{{url('')}}/public/assets/img/favicon.png">
            <link rel="stylesheet" href="{{url('')}}/public/assets/css/plugins.css">
            <link rel="stylesheet" href="{{url('')}}/public/assets/css/style.css">
            <link rel="preload" href="{{url('')}}/public/assets/css/fonts/space.css" as="style"
                onload="this.rel='stylesheet'">
        </head>

        <body>
            <div class="content-wrapper">
                <header class="wrapper bg-light">

                    <nav class="navbar navbar-expand-lg center-nav transparent navbar-light">
                        <div class="container flex-lg-row flex-nowrap align-items-center">
                            <div class="navbar-brand w-100">
                                <a href="/">
                                    <img src="{{url('')}}/public/assets/img/logo.png" alt="">
                                </a>
                            </div>
                            <div class="navbar-collapse offcanvas offcanvas-nav offcanvas-start">
                                <div class="offcanvas-header d-lg-none">
                                    <h3 class="text-white fs-30 mb-0">VerifyAsap</h3>
                                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas"
                                        aria-label="Close"></button>
                                </div>
                                <div class="offcanvas-body ms-lg-auto d-flex flex-column h-100">
                                    <ul class="navbar-nav">


                                        <li class="nav-item dropdown">
                                            <a class="nav-link " href="home">Buy Number</a>

                                        </li>

                                        <li class="nav-item dropdown">
                                            <a class="nav-link " href="about-us">About Us</a>

                                        </li>






                                    </ul>
                                    <!-- /.navbar-nav -->
                                    <div class="offcanvas-footer d-lg-none">
                                        <div>
                                            <nav class="nav social social-white mt-4">
                                                <a href="/"><i class="uil uil-twitter"></i></a>
                                                <a href="/"><i class="uil uil-facebook-f"></i></a>
                                                <a href="/"><i class="uil uil-dribbble"></i></a>
                                                <a href="/"><i class="uil uil-instagram"></i></a>
                                                <a href="/"><i class="uil uil-youtube"></i></a>
                                            </nav>
                                            <!-- /.social -->
                                        </div>
                                    </div>
                                    <!-- /.offcanvas-footer -->
                                </div>
                                <!-- /.offcanvas-body -->
                            </div>
                            <!-- /.navbar-collapse -->
                            <div class="navbar-other w-100 d-flex ms-auto">
                                <ul class="navbar-nav flex-row align-items-center ms-auto">

                                    <li class="nav-item d-none d-md-block">
                                        <a href="https://verifyasap.com/contact.html"
                                            class="btn btn-sm btn-primary rounded">Contact</a>
                                    </li>
                                    <li class="nav-item d-lg-none">
                                        <button class="hamburger offcanvas-nav-btn"><span></span></button>
                                    </li>
                                </ul>
                                <!-- /.navbar-nav -->
                            </div>
                            <!-- /.navbar-other -->
                        </div>
                        <!-- /.container -->
                    </nav>
                    <!-- /.navbar -->
                </header>
                <!-- /header -->
                <section class="wrapper">
                    <div class="container pt-11 pt-md-13 pb-19 pb-md-17 text-center">
                        <div class="row">
                            <div class="col-lg-9 col-xl-8 col-xxl-7 mx-auto" data-cues="slideInDown"
                                data-group="page-title" data-delay="500">
                                <h3 class="display-1 ls-sm fs-40 mb-4 px-md-8 px-lg-0">Cheapest and Fastest Online SMS
                                    verification for your <span
                                        class="underline-3 style-1 primary"><em>business</em></span></h3>
                                <p class="lead fs-19 lh-sm mb-7">Don't feel comfortable giving out your phone number?
                                    Protect your online identity by using our virtual phone numbers.</p>
                                <div>
                                    <a href="home"
                                        class="btn btn-lg btn-primary rounded mb-10 mb-xxl-5https://verifyasap.com/register">Buy
                                        Numbers Now!</a>
                                </div>
                            </div>
                            <!-- /column -->
                        </div>
                        <!-- /.row -->
                        <div class="row">
                            <div class="col-lg-10 col-xl-9 mx-auto mt-11 mb-n21">
                                <figure><img class="img-fluid" src="{{url('')}}/public/assets/img/illustrations/i28.png"
                                        srcset="{{url('')}}/public/assets/img/illustrations/i28@2x.png 2x" alt="">
                                </figure>
                            </div>
                            <!-- /column -->
                        </div>
                        <!-- /.row -->
                    </div>
                    <!-- /.container -->
                    <div class="overflow-hidden">
                        <div class="divider text-soft-primary mx-n2">
                            <svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 1440 70">
                                <path fill="currentColor" d="M1440,70H0V45.16a5762.49,5762.49,0,0,1,1440,0Z"></path>
                            </svg>
                        </div>
                    </div>
                </section>
                <!-- /section -->
                <section class="wrapper bg-gradient-primary">
                    <div class="container pt-15 pt-md-17">
                        <h2 class="fs-16 text-uppercase text-muted mb-8 text-center">Trusted by over 5000 clients</h2>
                        <div class="swiper-container clients mb-19" data-margin="30" data-dots="false" data-loop="true"
                            data-autoplay="true" data-autoplaytime="1" data-drag="false" data-speed="5000"
                            data-items-xxl="7" data-items-xl="6" data-items-lg="5" data-items-md="4" data-items-sm="3"
                            data-items-xs="3">
                            <div class="swiper pe-none">
                                <div class="swiper-wrapper ticker">
                                    <div class="swiper-slide px-5"><img
                                            src="{{url('')}}/public/assets/img/brands/c1.png" alt=""></div>
                                    <div class="swiper-slide px-5"><img
                                            src="{{url('')}}/public/assets/img/brands/c2.png" alt=""></div>
                                    <div class="swiper-slide px-5"><img
                                            src="{{url('')}}/public/assets/img/brands/c3.png" alt=""></div>
                                    <div class="swiper-slide px-5"><img
                                            src="{{url('')}}/public/assets/img/brands/c4.png" alt=""></div>
                                    <div class="swiper-slide px-5"><img
                                            src="{{url('')}}/public/assets/img/brands/c5.png" alt=""></div>
                                    <div class="swiper-slide px-5"><img
                                            src="{{url('')}}/public/assets/img/brands/c6.png" alt=""></div>
                                    <div class="swiper-slide px-5"><img
                                            src="{{url('')}}/public/assets/img/brands/c7.png" alt=""></div>
                                    <div class="swiper-slide px-5"><img
                                            src="{{url('')}}/public/assets/img/brands/c8.png" alt=""></div>
                                    <div class="swiper-slide px-5"><img
                                            src="{{url('')}}/public/assets/img/brands/c9.png" alt=""></div>
                                    <div class="swiper-slide px-5"><img
                                            src="{{url('')}}/public/assets/img/brands/c10.png" alt=""></div>
                                    <div class="swiper-slide px-5"><img
                                            src="{{url('')}}/public/assets/img/brands/c11.png" alt=""></div>
                                </div>
                                <!--/.swiper-wrapper -->
                            </div>
                            <!-- /.swiper -->
                        </div>
                        <!-- /.swiper-container -->
                        <div class="row text-center">
                            <div class="col-md-10 col-lg-9 col-xxl-7 mx-auto mb-12">
                                <h2 class="fs-16 text-uppercase text-muted mb-3">Our Services</h2>
                                <h3 class="display-2 ls-sm px-xxl-10">The service we offer is <span
                                        class="underline-3 style-1 primary"><em>designed</em></span> to meet your
                                    business needs.</h3>
                            </div>
                            <!-- /column -->
                        </div>
                        <!-- /.row -->
                        <div class="row gy-10 align-items-center mb-15 mb-md-17">
                            <div class="col-lg-7">
                                <figure><img class="img-fluid" src="{{url('')}}/public/assets/img/illustrations/i29.png"
                                        srcset="{{url('')}}/public/assets/img/illustrations/i29@2x.png 2x" alt="">
                                </figure>
                            </div>
                            <!-- /column -->
                            <div class="col-lg-4 ms-auto">
                                <div class="svg-bg bg-pale-primary rounded mb-5"> <img
                                        src="{{url('')}}/public/assets/img/icons/solid/like.svg"
                                        class="svg-inject icon-svg solid text-primary" alt=""> </div>
                                <h3 class="h1 post-title ls-sm mb-3">Receive SMS hassle-free </h3>
                                <p>We currently support a large variety of services including, but not limited to Steam,
                                    Tinder, Google, Uber, Discord, and even Twitter. To buy an online phone number has
                                    never been this easy!</p>
                                <ul class="icon-list bullet-bg bullet-soft-primary">
                                    <li><i class="uil uil-check"></i>Prevention of Unauthorized Access.</li>
                                    <li><i class="uil uil-check"></i>User Authentication</li>
                                    <li><i class="uil uil-check"></i>Prevention of Unauthorized Access.</li>
                                </ul>
                                <a href="register" class="more hover link-primary">Sign Up</a>
                            </div>
                            <!-- /column -->
                        </div>
                        <!-- /.row -->
                        <div class="row gy-10 align-items-center mb-15 mb-md-17">
                            <div class="col-lg-7 order-lg-2">
                                <figure><img class="img-fluid" src="{{url('')}}/public/assets/img/illustrations/i30.png"
                                        srcset="{{url('')}}/public/assets/img/illustrations/i30@2x.png 2x" alt="">
                                </figure>
                            </div>
                            <!-- /column -->
                            <div class="col-lg-4 me-auto">
                                <div class="svg-bg bg-pale-green rounded mb-5"> <img
                                        src="{{url('')}}/public/assets/img/icons/solid/layout-2.svg"
                                        class="svg-inject icon-svg solid text-green" alt=""> </div>
                                <h3 class="h1 post-title ls-sm mb-3">High quality SMS verifications</h3>
                                <p>At VerifyAsap, we pride ourselves on providing the highest quality SMS verifications
                                    for your SMS verification needs. We make sure to only provide non-VoIP phone numbers
                                    in order to work with any service.</p>
                                <ul class="icon-list bullet-bg bullet-soft-green">
                                    <li><i class="uil uil-check"></i>100% Fast SMS Webhook System.</li>
                                    <li><i class="uil uil-check"></i>Reliable Delivery.</li>
                                    <li><i class="uil uil-check"></i>Fallback Options.</li>
                                </ul>
                                <a href="register" class="more hover link-green">Sign Up</a>
                            </div>
                            <!-- /column -->
                        </div>
                        <!-- /.row -->
                        <div class="row gy-10 align-items-center">
                            <div class="col-lg-7">
                                <figure><img class="img-fluid" src="{{url('')}}/public/assets/img/illustrations/i31.png"
                                        srcset="{{url('')}}/public/assets/img/illustrations/i31@2x.png 2x" alt="">
                                </figure>
                            </div>
                            <!-- /column -->
                            <div class="col-lg-4 ms-auto">
                                <div class="svg-bg bg-pale-fuchsia rounded mb-5"> <img
                                        src="{{url('')}}/public/assets/img/icons/solid/bullhorn.svg"
                                        class="svg-inject icon-svg solid text-fuchsia" alt=""> </div>
                                <h3 class="h1 post-title ls-sm mb-3">No Price Fluctuation</h3>
                                <p>Our numbers start at 2 cents each, and our prices never fluctuate, even during high
                                    demand!</p>
                                <ul class="icon-list bullet-bg bullet-soft-fuchsia">
                                    <li><i class="uil uil-check"></i>Get A Number For As Low As ₦500</li>
                                    <li><i class="uil uil-check"></i>100% Discount Prices.</li>

                                </ul>
                                <a href="register" class="more hover link-fuchsia">Sign Up</a>
                            </div>
                            <!-- /column -->
                        </div>
                        <!-- /.row -->
                    </div>
                    <!-- /.container -->

                </section>
                <!-- /section -->
                <section class="wrapper bg-light">
                    <div class="container py-16 py-md-18">

                        <!-- /.row -->

                        <div class="card bg-soft-primary rounded-4 mb-16 mb-md-18">
                            <div class="card-body py-14 px-lg-0">
                                <div class="row text-center">
                                    <div class="col-lg-9 col-xl-8 mx-auto">
                                        <h2 class="fs-16 text-uppercase text-muted mb-3">Happy Customers</h2>
                                        <h3 class="display-2 ls-sm mb-10 px-xxl-10">Don't take our word for it. See what
                                            our <span class="underline-3 style-1 primary"><em>customers</em></span> are
                                            saying about us.</h3>
                                    </div>
                                    <!-- /column -->
                                </div>
                                <!-- /.row -->
                                <div class="row gx-lg-8 gx-xl-12 align-items-center">
                                    <div class="col-lg-5 ms-auto col-xl-4 d-none d-lg-flex">
                                        <div class="img-mask mask-3"><img
                                                src="{{url('')}}/public/assets/img/photos/about13.jpg"
                                                srcset="{{url('')}}/public/assets/img/photos/about13@2x.jpg 2x" alt="">
                                        </div>
                                    </div>
                                    <!--/column -->
                                    <div class="col-lg-6 col-xl-6 col-xxl-5 me-auto">
                                        <div class="swiper-container dots-start dots-closer mb-6" data-margin="30"
                                            data-dots="true">
                                            <div class="swiper">
                                                <div class="swiper-wrapper">
                                                    <div class="swiper-slide">
                                                        <span class="ratings five mb-3"></span>
                                                        <blockquote class="border-0 fs-lg mb-0">
                                                            <p>“As an online business owner, security is my top
                                                                priority. VerifyAsap has been a game-changer for me. The
                                                                seamless integration of their SMS verification service
                                                                has not only fortified our user accounts but also
                                                                boosted customer trust. The real-time delivery of codes
                                                                is impressive, and it's a breeze for our customers to
                                                                use. Highly recommended!.”</p>
                                                            <div class="blockquote-details">
                                                                <div class="info ps-0">
                                                                    <h5 class="mb-1">James Thompson</h5>
                                                                    <p class="mb-0">Financial Analyst</p>
                                                                </div>
                                                            </div>
                                                        </blockquote>
                                                    </div>
                                                    <!--/.swiper-slide -->
                                                    <div class="swiper-slide">
                                                        <span class="ratings five mb-3"></span>
                                                        <blockquote class="border-0 fs-lg mb-0">
                                                            <p>“As a small business owner, I needed a cost-effective yet
                                                                reliable SMS verification solution. VerifyAsap not only
                                                                met but exceeded my expectations. The pricing is
                                                                reasonable, and the ease of use is unmatched. My
                                                                customers appreciate the added layer of security, and I
                                                                appreciate the peace of mind it brings. Thank you,
                                                                VerifyAsap!”</p>
                                                            <div class="blockquote-details">
                                                                <div class="info ps-0">
                                                                    <h5 class="mb-1">Cory Zamora</h5>
                                                                    <p class="mb-0">Marketing Specialist</p>
                                                                </div>
                                                            </div>
                                                        </blockquote>
                                                    </div>
                                                    <!--/.swiper-slide -->
                                                    <div class="swiper-slide">
                                                        <span class="ratings five mb-3"></span>
                                                        <blockquote class="border-0 fs-lg mb-0">
                                                            <p>“I shop online a lot, and the thought of someone gaining
                                                                unauthorized access to my accounts always worried me.
                                                                Since I started using VerifyAsap, that worry has
                                                                vanished. The SMS codes are delivered instantly, and the
                                                                process is straightforward. It's a small effort for a
                                                                significant boost in security. I feel much safer now!”
                                                            </p>
                                                            <div class="blockquote-details">
                                                                <div class="info ps-0">
                                                                    <h5 class="mb-1">Nikolas Brooten</h5>
                                                                    <p class="mb-0">Sales Manager</p>
                                                                </div>
                                                            </div>
                                                        </blockquote>
                                                    </div>
                                                    <!--/.swiper-slide -->
                                                </div>
                                                <!--/.swiper-wrapper -->
                                            </div>
                                            <!-- /.swiper -->
                                        </div>
                                        <!-- /.swiper-container -->
                                    </div>
                                    <!--/column -->
                                </div>
                                <!--/.row -->
                            </div>
                            <!--/.card-body -->
                        </div>
                        <!--/.card -->


                        <!-- /.row -->
                        <div class="row text-center mb-7">
                            <div class="col-lg-10 col-xl-9 col-xxl-8 mx-auto">
                                <h2 class="fs-16 text-uppercase text-muted mb-3">Join Our Community</h2>
                                <h3 class="display-2 ls-sm">We are <span
                                        class="underline-3 style-1 primary"><em>trusted</em></span> by over 50000+
                                    clients. Join them now and grow your business.</h3>
                            </div>
                            <!-- /column -->
                        </div>
                        <!-- /.row -->
                        <div class="row mb-8">
                            <div class="col-md-10 col-lg-9 col-xl-7 mx-auto">
                                <div class="row align-items-center counter-wrapper gy-4 gy-md-0">
                                    <div class="col-md-4 text-center">
                                        <h3 class="counter counter-lg text-primary">1000+</h3>
                                        <p>Completed Projects</p>
                                    </div>
                                    <!--/column -->
                                    <div class="col-md-4 text-center">
                                        <h3 class="counter counter-lg text-primary">50K+</h3>
                                        <p>Happy Customers</p>
                                    </div>
                                    <!--/column -->
                                    <div class="col-md-4 text-center">
                                        <h3 class="counter counter-lg text-primary">4x</h3>
                                        <p>Revenue Growth</p>
                                    </div>
                                    <!--/column -->
                                </div>
                                <!--/.row -->
                            </div>
                            <!-- /column -->
                        </div>
                        <!-- /.row -->
                        <div class="row position-relative" style="z-index: 1">
                            <div class="col-lg-10 col-xl-9 mx-auto mt-11 mb-sm-n20 mb-md-n22">
                                <figure><img class="img-fluid" src="{{url('')}}/public/assets/img/illustrations/i32.png"
                                        srcset="{{url('')}}/public/assets/img/illustrations/i32@2x.png 2x" alt="">
                                </figure>
                            </div>
                            <!-- /column -->
                        </div>
                        <!-- /.row -->
                    </div>
                    <!-- /.container -->
                    <div class="overflow-hidden">
                        <div class="divider text-soft-primary mx-n2">
                            <svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 1440 70">
                                <path fill="currentColor" d="M1440,70H0V45.16a5762.49,5762.49,0,0,1,1440,0Z"></path>
                            </svg>
                        </div>
                    </div>

                </section>
                <!-- /section -->
            </div>
            <!-- /.content-wrapper -->
            <footer class="bg-soft-primary">
                <div class="container pt-17 pt-md-19 pb-14 pb-md-16">
                    <div class="row gy-6 gy-lg-0">
                        <div class="col-md-4 col-lg-3">
                            <div class="widget">
                                <img class="mb-4" src="{{url('')}}/public/assets/img/logo.png" alt="">
                                <p class="mb-4">© 2024 Verify Asap. <br class="d-none d-lg-block">All rights reserved.
                                </p>
                                <nav class="nav social ">
                                    <a href="/"><i class="uil uil-twitter"></i></a>
                                    <a href="/"><i class="uil uil-facebook-f"></i></a>
                                    <a href="/"><i class="uil uil-dribbble"></i></a>
                                    <a href="/"><i class="uil uil-instagram"></i></a>
                                    <a href="/"><i class="uil uil-youtube"></i></a>
                                </nav>
                                <!-- /.social -->
                            </div>
                            <!-- /.widget -->
                        </div>
                        <!-- /column -->
                        <div class="col-md-4 col-lg-3">
                            <div class="widget">
                                <h4 class="widget-title  mb-3">Get in Touch</h4>
                                <address class="pe-xl-15 pe-xxl-17">Moonshine St. 14/05 Light City, London, United
                                    Kingdom</address>
                                <a href="/" class="link-body">support@verifyasap.com</a>
                            </div>
                            <!-- /.widget -->
                        </div>
                        <!-- /column -->
                        <div class="col-md-4 col-lg-3">
                            <div class="widget">
                                <h4 class="widget-title  mb-3">Learn More</h4>
                                <ul class="list-unstyled text-reset mb-0">
                                    <li><a href="about-us">About Us</a></li>
                                       <li><a href="policy">Policies</a></li>


                                </ul>
                            </div>
                            <!-- /.widget -->
                        </div>
                        <!-- /column -->
                        <div class="col-md-12 col-lg-3">
                            <div class="widget">
                                <h4 class="widget-title  mb-3">Our Newsletter</h4>
                                <p class="mb-5">Subscribe to our newsletter to get our news & deals delivered to you.
                                </p>
                                <div class="newsletter-wrapper">
                                    <!-- Begin Mailchimp Signup Form -->
                                    <div id="mc_embed_signup2">
                                        <form
                                            action="https://elemisfreebies.us20.list-manage.com/subscribe/post?u=aa4947f70a475ce162057838d&amp;id=b49ef47a9a"
                                            method="post" id="mc-embedded-subscribe-form2"
                                            name="mc-embedded-subscribe-form" class="validate " target="_blank"
                                            novalidate="">
                                            <div id="mc_embed_signup_scroll2">
                                                <div class="mc-field-group input-group form-floating">
                                                    <input type="email" value="" name="EMAIL"
                                                        class="required email form-control" placeholder="Email Address"
                                                        id="mce-EMAIL2">
                                                    <label for="mce-EMAIL2">Email Address</label>
                                                    <input type="submit" value="Join" name="subscribe"
                                                        id="mc-embedded-subscribe2" class="btn btn-primary ">
                                                </div>
                                                <div id="mce-responses2" class="clear">
                                                    <div class="response" id="mce-error-response2" style="display:none">
                                                    </div>
                                                    <div class="response" id="mce-success-response2"
                                                        style="display:none"></div>
                                                </div>
                                                <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
                                                <div style="position: absolute; left: -5000px;" aria-hidden="true">
                                                    <input type="text" name="b_ddc180777a163e0f9f66ee014_4b1bcfa0bc"
                                                        tabindex="-1" value=""></div>
                                                <div class="clear"></div>
                                            </div>
                                        </form>
                                    </div>
                                    <!--End mc_embed_signup-->
                                </div>
                                <!-- /.newsletter-wrapper -->
                            </div>
                            <!-- /.widget -->
                        </div>
                        <!-- /column -->
                    </div>
                    <!--/.row -->
                </div>
                <!-- /.container -->
            </footer>
            <div class="progress-wrap">
                <svg class="progress-circle svg-content" width="100%" height="100%" viewbox="-1 -1 102 102">
                    <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98"></path>
                </svg>
            </div>
            <script data-cfasync="false" src="cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
            <script src="{{url('')}}/public/assets/js/plugins.js"></script>
            <script src="{{url('')}}/public/assets/js/theme.js"></script>


            <style>
                .float {
                    position: fixed;
                    width: 60px;
                    height: 60px;
                    bottom: 40px;
                    right: 40px;
                    background-color: #000000;
                    color: #FFF;
                    border-radius: 50px;
                    text-align: center;
                    font-size: 30px;
                    box-shadow: 2px 2px 3px #999;
                    z-index: 100;
                }

                .my-float {
                    margin-top: 16px;
                }
            </style>

            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
            <a href="https://t.me/verifyasapp" class="float" target="_blank">
                <i class="fa fa-comment my-float"></i>
            </a>


        </body>

        </html>
        <!-- Livewire Component wire-end:eYPSy5A4nBOh9Tk7XhoH -->
    </div>
    </div>




</body>

</html>
