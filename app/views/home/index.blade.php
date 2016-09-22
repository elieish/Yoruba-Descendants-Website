@extends('layouts.default')
@section('content')
<br>
<div class="container">
<!-- Carousel -->
<div class="row-fluid">
      <div class="span12">
            <div id="myCarousel" class="carousel slide">
                <div class="carousel-inner">
        
                  <div class="item active">
                    <img src="assets/img/welcome.jpg" alt="" />
                    <div class="carousel-caption">
                      <p></p>
                    </div>
                  </div>
                     
                </div>
               
          </div>
      </div>

      <!--   <div class="span4">
          <iframe width="350" height="315" src="//www.youtube.com/embed/sRgwsxul4Zk" frameborder="0" allowfullscreen></iframe>
      </div>
      
      <div class="span4">
          <iframe width="350" height="315" src="//www.youtube.com/embed/KnGPtahOlx0" frameborder="0" allowfullscreen></iframe>
      </div> -->
</div>
</div>
<br><br><br><br><br><br><br><br><br>



<!--/Carousel -->
<div class="container">
    <!-- Information Blokcs -->
    <div class="row-fluid margin-bottom-20">
      

        <!-- Latest Shots -->
        <div class="span12">
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
