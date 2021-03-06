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
    {{ HTML::style('assets/plugins/countdown/css/countdown.css') }}
    {{ HTML::style('assets/css/img-hover-effect.css')}}
    {{ HTML::style('assets/plugins/fancybox/source/jquery.fancybox.css') }}
    {{ HTML::style('assets/css/effects.css')}}


    <!-- CSS Theme -->
    {{ HTML::style('assets/plugins/flexslider/flexslider.css') }}
    {{ HTML::style('assets/plugins/parallax-slider/css/parallax-slider.css') }}
    {{ HTML::style('assets/css/headers/header2.css') }}
    <link rel="stylesheet" href="assets/css/themes/default.css" id="style_color" />

    <!--CSS Fullcalendar -->
    {{ HTML::style('assets/bower_components/fullcalendar/dist/fullcalendar.css') }}
    <link href='assets/bower_components/fullcalendar/dist/fullcalendar.print.css' rel='stylesheet' media='print' />

    <!-- CSS Project -->
     {{ HTML::style('assets/css/project.css') }}

    <!-- Currency Converter -->
    {{ HTML::style('assets/plugins/currency_widget/css/ui-lightness/jquery-ui-1.8.2.custom.css') }}
    {{ HTML::style('assets/plugins/currency_widget/css/currency_widget.css') }}

    <!-- Time Widget -->
    {{ HTML::style('assets/plugins/jQuery-Clock-Plugin-master/jqClock.css') }}

    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" /></head>

<body>

<!--=== Top ===-->
<div class="top">

    <div class="container">


        <div class="row-fluid">
             <img src="assets/img/logos/5.jpg" alt="" >
        </div>
    </div>
</div><!--/top-->
<!--=== End Top ===-->

<!--=== Header ===-->
<div class="header">
    <div class="container">
        <!-- Logo -->
        <div class="">
            <img src="" alt="" >
        </div>

        <!-- Menu -->
        <div class="navbar" style="background-image:url('assets/img/logos/3.png')">
            <div class="navbar-inner">
                <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </a><!-- /nav-collapse -->
                <div class="nav-collapse collapse">
                    <ul class="nav top-2">
                        <li {{ (Request::is('/') ? 'class="active"' : '') }}>
                            <a href="/">Home</a>
                        </li>
                        <li {{ (Request::is('about') ? 'class="active"' : '') }}>
                            <a href="about">About Us</a>
                        </li>
                        <li {{ (Request::is('executive') ? 'class="active"' : '') }}>
                            <a href="executive">National Executive</a>
                        </li>
                        <li {{ (Request::is('chapters') ? 'class="active"' : '') }}>
                            <a href="chapters">Chapters
                            </a>
                        </li>
                          <li {{ (Request::is('#') ? 'class="active"' : '') }}>
                            <a href="events">Events
                            </a>
                        </li>
                    
                        <li {{ (Request::is('gallery') ? 'class="active"' : '') }}>
                            <a href="gallery">Gallery</a>
                        </li>
                        <li {{ (Request::is('#') ? 'class="active"' : '') }}>
                            <a href="Forum">Forum
                            </a>
                        </li> 
                         <li {{ (Request::is('news') ? 'class="active"' : '') }}>
                            <a href="news">Forum
                            </a>
                        </li> 
                     
                         <li {{ (Request::is('contact') ? 'class="active"' : '') }}>
                            <a href="contact">Contact</a>

                        </li>
                    </ul>
                    <div class="search-open">
                        <div class="input-append">
                            <form>
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
                <p>2015 &copy; Yoruba  Descendants. ALL Rights Reserved. <a href="#">Privacy Policy</a> | <a href="#">Terms of Service</a></p>
            </div>
            <div class="span4">
               <!--  <a href="index.html"><img id="logo-footer" src="assets/img/logo2-default.png" class="pull-right" alt="" /></a> -->
            </div>
        </div><!--/row-fluid-->
    </div><!--/container-->
</div><!--/copyright-->
<!--=== End Copyright ===-->

<!-- JS Moment -->
<script type="text/javascript" src="assets/bower_components/moment/moment.js"></script>

<!--JS Jquery -->
<script type="text/javascript" src="assets/bower_components/jquery/dist/jquery.min.js"></script>

<!--JS Jquery Migrate -->
<script src="assets/bower_components/jquery/dist/jquery-migrate-1.2.1.js"></script>

<!-- JS Global Compulsory -->
<script type="text/javascript" src="assets/js/modernizr.custom.js"></script>
<script type="text/javascript" src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>
<!-- JS Implementing Plugins -->
<script type="text/javascript" src="assets/plugins/fancybox/source/jquery.fancybox.pack.js"></script>
<script type="text/javascript" src="assets/plugins/flexslider/jquery.flexslider-min.js"></script>
<script type="text/javascript" src="assets/plugins/parallax-slider/js/modernizr.js"></script>
<script type="text/javascript" src="assets/plugins/parallax-slider/js/jquery.cslider.js"></script>
<script type="text/javascript" src="assets/plugins/back-to-top.js"></script>
<script type="text/javascript" src="assets/js/jquery.auderoFlashingText.js"></script>
<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=true"></script>
<script type="text/javascript" src="assets/plugins/gmap/gmap.js"></script>

<!-- JS Page Level -->
<script type="text/javascript" src="assets/js/app.js"></script>
<script type="text/javascript" src="assets/js/pages/index.js"></script>
<script type="text/javascript" src="assets/js/jquery.modern-blink.js"></script>

<!-- JS Full Calendar -->
<script type="text/javascript" src="assets/bower_components/fullcalendar/dist/fullcalendar.min.js"></script>

<!-- JS Currency Converter -->
<script type="text/javascript" src="assets/plugins/currency_widget/js/jquery.currency_widget.js"></script>

<!-- JS Jquery Clock Plugin -->
<script type="text/javascript" src="assets/plugins/jQuery-Clock-Plugin-master/jqClock.js"></script>


<script type="text/javascript" src="assets/js/pages/contact.js"></script>

<!-- JS Project -->
<script type="text/javascript" src="assets/js/project.js"></script>

</body>
</html>
