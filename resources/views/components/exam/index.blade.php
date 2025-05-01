<!doctype html>
<html class="no-js" lang="en">
<head>
    <meta charset="utf-8"/>
    <meta http-equiv="x-ua-compatible" content="ie=edge"/>
    <title>{{$title?'Exam - '.$title:'Exam'}}</title>
    <meta name="robots" content="noindex, follow"/>
    <meta name="description" content=""/>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('exam')}}/assets/images/favicon.png"/>

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com/"/>
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin/>

    <!-- CSS
	============================================ -->

    <!-- Icon Font CSS -->
    <link rel="stylesheet" href="{{asset('exam')}}/assets/css/plugins/font-awesome.min.css"/>
    <link rel="stylesheet" href="{{asset('exam')}}/assets/css/plugins/flaticon.css"/>

    <!-- Plugins CSS -->
    <link rel="stylesheet" href="{{asset('exam')}}/assets/css/plugins/bootstrap.min.css"/>
    <link rel="stylesheet" href="{{asset('exam')}}/assets/css/plugins/animate.min.css"/>
    <link rel="stylesheet" href="{{asset('exam')}}/assets/css/plugins/swiper-bundle.min.css"/>
    <link rel="stylesheet" href="{{asset('exam')}}/assets/css/plugins/nice-select2.css"/>
    <link rel="stylesheet" href="{{asset('exam')}}/assets/css/plugins/jquery.powertip.min.css"/>
    <link rel="stylesheet" href="{{asset('exam')}}/assets/css/plugins/glightbox.min.css"/>
    <link rel="stylesheet" href="{{asset('exam')}}/assets/css/style.min.css"/>
    @livewireStyles
</head>

<body>

<div class="main-wrapper">
    <!-- Header Start  -->
    <div id="header" class="header section">
        <div class="container">

            <!-- Header Wrapper Start  -->
            <div class="header-wrapper">

                <!-- Header Logo Start -->
                <div class="header-logo">
                    <a href="{{route('login')}}"><h1>Exam</h1></a>
                </div>
                <!-- Header Logo End -->

                <!-- Header Menu Start -->
                @if(auth()->check())
                    <div class="header-menu d-none d-lg-block">
                        <ul class="main-menu">
                            <li>
                                <a href="{{route('exam.list')}}">Home</a>
                            </li>
                        </ul>
                    </div>
            @endif
            <!-- Header Menu End -->

                <!-- Header Meta Start -->
                <div class="header-meta">
                    @if(!auth()->check())
                        <div class="header-login d-none d-lg-flex">
                            <a class="link" href="{{route('login')}}"><i class="fa fa-user-o"></i> Login</a>
                        </div>
                    @else
                        <div class="header-login d-none d-lg-flex">
                            <form action="{{route('exam.logout')}}" method="post">
                                @csrf
                                <button class="link" type="submit">Logout</button>
                            </form>
                        </div>
                    @endif

                    <div class="header-toggle d-lg-none">
                        <button data-bs-toggle="offcanvas" data-bs-target="#offcanvasMenu">
                            <span></span>
                            <span></span>
                            <span></span>
                        </button>
                    </div>

                </div>
                <!-- Header Meta End -->

            </div>
            <!-- Header Wrapper End -->
        </div>
    </div>
    <!-- Header End -->

    <!-- Offcanvas Start -->
    <div class="offcanvas offcanvas-start" id="offcanvasMenu">

        <div class="offcanvas-header">
            <!-- Offcanvas Logo Start -->
            <div class="offcanvas-logo">
                <a href="index.html"><img src="{{asset('exam')}}/assets/images/logo.png" alt=""></a>
            </div>
            <!-- Offcanvas Logo End -->
            <button class="btn-close" data-bs-dismiss="offcanvas"></button>
        </div>

        <div class="offcanvas-body">
            <div class="offcanvas-menu">
                <ul class="main-menu">
                    <li>
                        <a href="{{route('login')}}">Home</a>
                    </li>
                </ul>
            </div>
        </div>

    </div>
    <!-- Offcanvas End -->

{{$slot}}

<!-- Footer Start -->
    <div class="footer-section section">
        <div class="container">

            <!-- Footer Widget Wrapper Start -->
            <div class="footer-widget-wrapper">
                <div class="row">
                    <div class="col-lg-3 col-sm-6">
                    </div>
                    <div class="col-lg-3 col-sm-6">
                    </div>
                    <div class="col-lg-3 col-sm-6">
                    </div>
                    <div class="col-lg-3 col-sm-6">
                    </div>
                </div>
            </div>
            <!-- Footer Widget Wrapper End -->

            <!-- Footer Copyright End -->
            <div class="footer-copyright text-center">
                <p>&copy; Copyrights {{date('Y')}}</p>
            </div>
            <!-- Footer Copyright End -->

        </div>
    </div>
    <!-- Footer End -->

    <!-- Back to Top End -->
    <button class="back-btn" id="backBtn"><i class="fa fa-angle-up"></i></button>
    <!-- Back to Top End -->

</div>

<!-- JS
============================================ -->

<!-- Jquery JS -->
<script src="{{asset('exam')}}/assets/js/vendor/jquery-3.6.0.min.js"></script>
<script src="{{asset('exam')}}/assets/js/vendor/modernizr-3.11.7.min.js"></script>

<!-- Bootstrap JS -->
<script src="{{asset('exam')}}/assets/js/plugins/popper.min.js"></script>
<script src="{{asset('exam')}}/assets/js/plugins/bootstrap.min.js"></script>

<!-- Plugins JS -->
<script src="{{asset('exam')}}/assets/js/plugins/swiper-bundle.min.js"></script>
<script src="{{asset('exam')}}/assets/js/plugins/nice-select2.js"></script>
<script src="{{asset('exam')}}/assets/js/plugins/jquery.powertip.min.js"></script>
<script src="{{asset('exam')}}/assets/js/plugins/glightbox.min.js"></script>

<!-- Main JS -->
<script src="{{asset('exam')}}/assets/js/main.js"></script>

<!-- Google Map js -->
<script src="https://maps.googleapis.com/maps/api/js?key="></script>
<script src="{{asset('exam')}}/assets/js/map-script.js"></script>
@livewireScripts
</body>
</html>