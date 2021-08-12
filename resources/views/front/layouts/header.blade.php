<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="{{setting('site.description')}}">
    <meta name="keywords" content="Html, Css, jQuery, JavaScript, FusionBlog, blog, personal blog, template, news theme">

    <!-- Title -->
    <title>{{setting('site.title')}}</title>
    <!-- Favicon -->
    <link rel="icon" href="{{Voyager::image(setting('site.favicon'))}}">
    <!-- Google Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@400;500;700;900&display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@700&display=swap">

    <!-- Font Awesome Css -->
    <link rel="stylesheet" href="{{ asset('front') }}/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Bootstrap Css -->
    <link rel="stylesheet" href="{{ asset('front') }}/css/bootstrap.min.css">
    <!-- Slick Css -->
    <link rel="stylesheet" href="{{ asset('front') }}/css/slick.min.css">
    <!-- Main Style Css -->
    <link rel="stylesheet" href="{{ asset('front') }}/css/main.css">

    <!--[if lt IE 9]>
    <script src="js/html5shiv.min.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->

</head>
<body style="font-family: {{setting('site.site_fonts')}}">

<!-- ========== Start Loading ========== -->

<div class="loading">
    <div class="loading-content">
        <div class="inner-item"></div>
        <div class="inner-item"></div>
        <div class="inner-item"></div>
        <div class="inner-item"></div>
        <div class="inner-item"></div>
    </div>
</div>

<!-- ========== End Loading ========== -->

<!-- ========== Start Header ========== -->

<header>
    <div class="site-brand text-center">
        <div class="container">
            <a href="index.html">
                <img src="{{Voyager::image(setting('site.logo'))}}" width="200" alt="{{setting('site.title')}}">
            </a>
            <p class="site-description">{{setting('site.front_desc')}}</p>
        </div>
    </div>
    <div class="header-inner">
        <div class="container">
            <div class="row">
                <div class="col-md-9 col-sm-8 col-xs-3 pos-s">
                    <button class="menu-toggle">
                        <span class="bar"></span>
                        <span class="bar"></span>
                        <span class="bar"></span>
                    </button>
                    <nav class="navbar navbar-default">
                        <div class="collapse navbar-collapse">
                            <ul class="nav navbar-nav">
                                <li class="menu-item active">
                                    {!! menu('primary', 'bootstrap') !!}
                                </li>
                            </ul>
                        </div>
                    </nav>
                </div>
                <div class="col-md-3 col-sm-4 col-xs-9 text-md-center">
                    <div class="search-toggle">
                        <i class="fa fa-search"></i>
                    </div>
                    <ul class="social-icons-menu list-unstyled">
                        @foreach($socialNetworks as $social)
                            <li><a href="{{$social['social_network_url']}}" target="_blank"><i class="{{$social['social_network_icon']}}"></i></a></li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="search-area">
				<span class="close-search">
                    <i class="fa fa-close"></i>
				</span>
        <div class="display-table">
            <div class="display-table-cell">
                <form role="search" method="get" class="search-form" action="#">
                    <input type="search" class="search-field" placeholder="Search..." name="s" required="required" />
                    <button type="submit" class="search-submit"><i class="fa fa-search"></i></button>
                </form>
            </div>
        </div>
    </div>
</header>

<!-- ========== End Header ========== -->
