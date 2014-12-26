<!DOCTYPE html>
<!--[if IE 7]> <html lang="en" class="ie7"> <![endif]-->
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->
<head>
    <title>Yoruba Descendants</title>

    <!-- Meta -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="" />
    <meta name="author" content="" />

    <!-- CSS Global Compulsory-->
    {{ HTML::style('assets/plugins/bootstrap/css/bootstrap.min.css') }}
    {{ HTML::style('assets/css/style.css') }}
    {{ HTML::style('assets/css/headers/header1.css') }}
    {{ HTML::style('assets/plugins/bootstrap/css/bootstrap-responsive.min.css') }}
    {{ HTML::style('assets/css/style_responsive.css') }}
    <link rel="shortcut icon" href="favicon.ico" />
    <!-- CSS Implementing Plugins -->
    {{ HTML::style('assets/plugins/font-awesome/css/font-awesome.css') }}
    {{ HTML::style('assets/plugins/flexslider/flexslider.css') }}
    {{ HTML::style('assets/plugins/parallax-slider/css/parallax-slider.css') }}

    <link rel="stylesheet" href="assets/plugins/countdown/css/countdown.css" />

    <!-- CSS Theme -->
    {{ HTML::style('assets/plugins/flexslider/flexslider.css') }}
    {{ HTML::style('assets/plugins/parallax-slider/css/parallax-slider.css') }}
    <link rel="stylesheet" href="assets/css/themes/default.css" id="style_color" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /></head>

<body>

<!--=== Top ===-->
<div class="top">

    <div class="container">

        <div class="row">
            <div class="col-md-6">
                <ul class="loginbar inline">
                    <li><a href="mailto:info@anybiz.com"><i class="icon-envelope-alt"></i> info@yorubadescendants.com</a></li>
                    <li><a><i class="icon-phone-sign"></i> 000 0000 0000</a></li>
                </ul>
            </div>
            <div class="col-md-6">
                <ul class="loginbar pull-right">
                    <li><i class="icon-globe"></i><a>Languages <i class="icon-sort-up"></i></a>
                        <ul class="nav-list">
                            <li class="active"><a href="#">English</a> <i class="icon-ok"></i></li>
                            <li><a href="#">Yoruba</a></li>
                        </ul>
                    </li>
                    <li class="devider">&nbsp;</li>
                    <li><a href="page_faq.html" class="login-btn">Help</a></li>
                    <li class="devider">&nbsp;</li>
                    <li><a href="page_login.html" class="login-btn">Login</a></li>
                </ul>
            </div>
        </div>
    </div>
</div><!--/top-->
<!--=== End Top ===-->

<!--=== Header ===-->
<div class="header">
    <div class="container">
        <!-- Logo -->
        <div class="logo">
            <!-- <a href="index.html"><img id="logo-header" src="assets/img/logo1.png" alt="Logo" /></a> -->
        <!-- /logo -->
        </div>

        <!-- Menu -->
        <div class="navbar">
            <div class="navbar-inner">
                <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </a><!-- /nav-collapse -->
                <div class="nav-collapse collapse">
                    <ul class="nav top-2">
                        <li {{ (Request::is('/') ? 'class="active"' : '') }}>
                            <a href="/">Home
                            </a>
                        </li>
                        <li {{ (Request::is('about') ? 'class="active"' : '') }}>
                            <a href="about">About Us
                            </a>
                        </li>
                        <li {{ (Request::is('news') ? 'class="active"' : '') }}>
                            <a href="news">News
                            </a>
                        </li>
                        <li {{ (Request::is('chapters') ? 'class="active"' : '') }}>
                            <a href="chapters">Chapters
                            </a>
                        </li>
                        <li {{ (Request::is('gallery') ? 'class="active"' : '') }}>
                            <a href="gallery">Gallery
                            </a>
                        </li>
                        <li {{ (Request::is('contact') ? 'class="active"' : '') }}>
                            <a href="contact">Contact

                            </a>

                        </li>
                        <li><a class="search"><i class="icon-search search-btn"></i></a></li>
                    </ul>
                    <div class="search-open">
                        <div class="input-append">
                            <form />
                                <input type="text" class="span3" placeholder="Search" />
                                <button type="submit" class="btn-u">Go</button>
                            </form>
                        </div>
                    </div>
                </div><!-- /nav-collapse -->
            </div><!-- /navbar-inner -->
        </div><!-- /navbar -->
    </div><!-- /container -->
</div><!--/header -->
<!--=== End Header ===-->


<!--=== Content Part ===-->
 @yield('content')
<!-- End Content Part -->

<!--=== Footer ===-->
<div class="footer">
    <div class="container">

    </div><!--/container-->
</div><!--/footer-->
<!--=== End Footer ===-->

<!--=== Copyright ===-->
<div class="copyright">
    <div class="container">
        <div class="row-fluid">
            <div class="span8">
                <p>2014 &copy; Yoruba  Descendants. ALL Rights Reserved. <a href="#">Privacy Policy</a> | <a href="#">Terms of Service</a></p>
            </div>
            <div class="span4">
               <!--  <a href="index.html"><img id="logo-footer" src="assets/img/logo2-default.png" class="pull-right" alt="" /></a> -->
            </div>
        </div><!--/row-fluid-->
    </div><!--/container-->
</div><!--/copyright-->
<!--=== End Copyright ===-->

<!-- JS Global Compulsory -->
<script type="text/javascript" src="assets/js/jquery-1.8.2.min.js"></script>
<script type="text/javascript" src="assets/js/modernizr.custom.js"></script>
<script type="text/javascript" src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>
<!-- JS Implementing Plugins -->
<script type="text/javascript" src="assets/plugins/flexslider/jquery.flexslider-min.js"></script>
<script type="text/javascript" src="assets/plugins/parallax-slider/js/modernizr.js"></script>
<script type="text/javascript" src="assets/plugins/parallax-slider/js/jquery.cslider.js"></script>
<script type="text/javascript" src="assets/plugins/back-to-top.js"></script>
<!-- JS Page Level -->
<script type="text/javascript" src="assets/js/app.js"></script>
<script type="text/javascript" src="assets/js/pages/index.js"></script>
<script type="text/javascript">
    jQuery(document).ready(function() {
        App.init();
        App.initSliders();
        Index.initParallaxSlider();
    });
</script>
</body>
</html>
