@extends('layouts.default')
@section('content')

<!--=== Breadcrumbs ===-->
<div class="breadcrumbs margin-bottom-40">
    <div class="container">
        <h1 class="color-green pull-left">News</h1>
        <ul class="pull-right breadcrumb">
            <li><a href="/">Home</a> <span class="divider">/</span></li>
            <li class="active">News</li>
        </ul>
    </div><!--/container-->
</div><!--/breadcrumbs-->
<!--=== End Breadcrumbs ===-->

<!--=== Content Part ===-->
<div class="container">
    <div class="row-fluid gallery">
        <ul class="thumbnails">
            <li class="span3">
                <a class="thumbnail fancybox-button zoomer" data-rel="fancybox-button" title="http://www.alaroyeonline.com/" href="http://www.alaroyeonline.com/" target="_blank">
                    <div class="overlay-zoom">
                        <img src="assets/img/news/2.png" alt="" />
                        <div class="zoom-icon"></div>
                    </div>
                </a>
            </li>

             <li class="span3">
                <a class="thumbnail fancybox-button zoomer" data-rel="fancybox-button" title="http://www.punchng.com/" href="http://www.punchng.com/" target="_blank">
                    <div class="overlay-zoom">
                        <img src="assets/img/news/3.png" alt="" />
                        <div class="zoom-icon"></div>
                    </div>
                </a>
            </li>

            <li class="span3">
                <a class="thumbnail fancybox-button zoomer" data-rel="fancybox-button" title="http://www.vanguardngr.com/" href="http://www.vanguardngr.com/" target="_blank">
                    <div class="overlay-zoom">
                        <img src="assets/img/news/4.png" alt="" />
                        <div class="zoom-icon"></div>
                    </div>
                </a>
            </li>


        </ul><!--/thumbnails-->

    </div><!--/row-fluid-->
</div><!--/container-->
<!--=== End Content Part ===-->

</div><!--/container-->
<!--=== End Content Part ===-->
@stop
