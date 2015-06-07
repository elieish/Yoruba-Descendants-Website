@extends('layouts.default')
@section('content')
<br>
<div class="container">
<!-- Carousel -->
<div class="row-fluid">
        <div class="span4">
            <div id="myCarousel" class="carousel slide">
                <div class="carousel-inner">

                  <div class="item">
                    <img src="assets/img/carousel/2.jpg" alt="" />
                    <div class="carousel-caption">
                      <p></p>
                    </div>
                  </div>

                   <div class="item">
                    <img src="assets/img/carousel/6.png" alt="" />
                    <div class="carousel-caption">
                      <p></p>
                    </div>
                  </div>
                   <div class="item">
                    <img src="assets/img/carousel/5.jpg" alt="" />
                    <div class="carousel-caption">
                      <p></p>
                    </div>
                  </div>
                </div>
                  <div class="carousel-arrow">
                    <a class="left carousel-control" href="#myCarousel" data-slide="prev"><i class="icon-angle-left"></i></a>
                    <a class="right carousel-control" href="#myCarousel" data-slide="next"><i class="icon-angle-right"></i></a>
                </div>
            </div>
    </div>

        <div class="span4">
            <iframe width="350" height="315" src="//www.youtube.com/embed/sRgwsxul4Zk" frameborder="0" allowfullscreen></iframe>
        </div>

        <div class="span4">
            <iframe width="350" height="315" src="//www.youtube.com/embed/KnGPtahOlx0" frameborder="0" allowfullscreen></iframe>
        </div>
</div>
</div>

<!--/Carousel -->
<div class="container">
    <!-- Information Blokcs -->
    <div class="row-fluid margin-bottom-20">
        <!-- Who We Are -->
        <div class="span7">
            <div class="headline"><h3>Ekaabo Welcome</h3></div>
             <p><img class="pull-left lft-img-margin img-width-200" src="assets/img/people/4.jpg" alt="" />

            <blockquote class="hero-unify">
                <p>We, the Yorubas in the Southern Africa, desiring to trust and create a common fellowship,
                firmily and solemnly<br> resolve to:</p><br>
                <ul class="">
                    <li><i class=""></i>To unite our strength and efforts in promoting the unity of all Yoruba organizations</li>
                    <li><i class=""></i>To coordinate and intensify our cooperation</li>
                    <li><i class=""></i>To achieve better dialogue, understanding and unity of purpose</li>
                    <li><i class=""></i>To strenghten our collaboration and establish new objectives and priorities for the promotion of our economic,social,cultural,educational and political development</li>
                </ul>
                <p>We hereby constiture National Association of Yoruba Descendants of Southern African(Egbe Omo Yoruba)</p>
            <small>National President<br>
                   Prof . Akin Bomigboye</small>
            </blockquote>
        </div><!--/span8--

        <!-- Latest Shots -->
        <div class="span5">
            <div class="headline"><h3>Upcoming Events</h3></div>
            <div id='calendar'></div>

        </div><!--/span4-->

    </div><!--/row-fluid-->
    <!-- //End Information Blokcs -->
    <div class="row-fluid margin-bottom-20">
        <div class="span7">
            <div class="headline"><h3>Our Constitution</h3></div>
              <a target="_blank" href="assets/img/constitution/constitution.pdf">

                  <div class="text-block btn-u">Click to Download</div>
              </a>
        </div>
        <div class="span5">
          <div class="headline"><h3>Currency Converter</h3></div>
          <div id="currency_widget_holder"></div>
        </div>
    </div>


</div><!--/container-->
@stop
