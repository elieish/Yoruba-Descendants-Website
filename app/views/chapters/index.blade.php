@extends('layouts.default')
@section('content')
<!--=== Breadcrumbs ===-->
<div class="breadcrumbs margin-bottom-20">
  <div class="container">
        <h1 class="color-green pull-left">Chapters</h1>
        <ul class="pull-right breadcrumb">
            <li><a href="/">Home</a> <span class="divider">/</span></li>
            <li class="active">Chapters</li>
        </ul>
    </div><!--/container-->
</div><!--/breadcrumbs-->
<!--=== End Breadcrumbs ===-->

<!--=== Content Part ===-->
<div class="container">
  <div class="row-fluid">
      <div class="span9">
        @if(Session::has('message'))
            <div class="alert alert-success">
                {{ Session::get('message') }}
            </div>
        @endif
        @if(Session::has('error'))
            <div class="alert alert-danger">
                {{ Session::get('error') }}
            </div>
        @endif
          <div class="headline"><h3>Our Chapters</h3></div>

            <div class="clients-page margin-bottom-20">
              <a class="img-hover" href="#">
                  <img src="assets/img/flags/southafrica.jpeg" alt="" />
              </a>
                <p>EGBE OMO YORUBA DURBAN IN SOUTH AFRICA</p>
                 <a type="button" class="open-AddBookDialog btn-u" data-toggle="modal" data-target="#myModal" data-id="EGBE OMO YORUBA DURBAN IN SOUTH AFRICA">
                  Contact us
                </a>
                <a type="button">
                  Activities
                </a>
            </div>

            <div class="clients-page margin-bottom-20">
              <a class="img-hover" href="#">
                  <img src="assets/img/flags/southafrica.jpeg" alt="" />
              </a>
                <p>EGBE OMO YORUBA FREE STATE IN SOUTH AFRICA </p>
                 <a type="button" class="open-AddBookDialog btn-u" data-toggle="modal" data-target="#myModal" data-id="EGBE OMO YORUBA FREE STATE IN SOUTH AFRICA">
                  Contact us
                </a>
                 <a type="button">
                  Activities
                </a>
            </div>

            <div class="clients-page margin-bottom-20">
              <a class="img-hover" href="#">
                  <img src="assets/img/flags/southafrica.jpeg" alt="" />
              </a>
                <p>EGBE OMO YORUBA JOHANNESBURG IN SOUTH AFRICA</p>
                 <a type="button" class="open-AddBookDialog btn-u" data-toggle="modal" data-target="#myModal" data-id="EGBE OMO YORUBA JOHANNESBURG IN SOUTH AFRICA">
                  Contact us
                </a>
                 <a type="button">
                  Activities
                </a>
            </div>

            <div class="clients-page margin-bottom-20">
              <a class="img-hover" href="#">
                  <img src="assets/img/flags/southafrica.jpeg" alt="" />
              </a>
                <p>EGBE OMO YORUBA NELSPRUIT,SOUTH AFRICA </p>
                 <a type="button" class="open-AddBookDialog btn-u" data-toggle="modal" data-target="#myModal" data-id="EGBE OMO YORUBA NELSPRUIT,SOUTH AFRICA">
                  Contact us
                </a>
                 <a type="button">
                  Activities
                </a>
            </div>

            <div class="clients-page margin-bottom-20">
              <a class="img-hover" href="#">
                  <img src="assets/img/flags/southafrica.jpeg" alt="" />
              </a>
                <p>EGBE OMO YORUBA ODUA DESCENDANTS CAPETOWN.SOUTH AFRICA</p>
                 <a type="button" class="open-AddBookDialog btn-u" data-toggle="modal" data-target="#myModal" data-id="EGBE OMO YORUBA ODUA DESCENDANTS CAPETOWN.SOUTH AFRICA">
                  Contact us
                </a>
                 <a type="button">
                  Activities
                </a>
            </div>

            <div class="clients-page margin-bottom-20">
              <a class="img-hover" href="#">
                  <img src="assets/img/flags/southafrica.jpeg" alt="" />
              </a>
                <p>EGBE OMO YORUBA PRETORIA,SOUTH AFRICA</p>
                 <a type="button" class="open-AddBookDialog btn-u" data-toggle="modal" data-target="#myModal" data-id="EGBE OMO YORUBA PRETORIA,SOUTH AFRICA">
                  Contact us
                </a>
                 <a type="button">
                  Activities
                </a>
            </div>

            <div class="clients-page margin-bottom-20">
              <a class="img-hover" href="#">
                  <img src="assets/img/flags/southafrica.jpeg" alt="" />
              </a>
                <p>EGBE OMO YORUBA POLOKWANE,SOUTH AFRICA </p>
                 <a type="button" class="open-AddBookDialog btn-u" data-toggle="modal" data-target="#myModal" data-id="EGBE OMO YORUBA POLOKWANE,SOUTH AFRICA">
                  Contact us
                </a>
                 <a type="button">
                  Activities
                </a>
            </div>


            <div class="clients-page margin-bottom-20">
              <a class="img-hover" href="#">
                  <img src="assets/img/flags/southafrica.jpeg" alt="" />
              </a>
                <p>EGBE OMO YORUBA PORT ELIZABETH,SOUTH AFRICA</p>
                 <a type="button" class="open-AddBookDialog btn-u" data-toggle="modal" data-target="#myModal" data-id="EGBE OMO YORUBA PORT ELIZABETH,SOUTH AFRICA">
                  Contact us
                </a>
                 <a type="button">
                  Activities
                </a>
            </div>

            <div class="clients-page margin-bottom-20">
              <a class="img-hover" href="#">
                  <img src="assets/img/flags/southafrica.jpeg" alt="" />
              </a>
                <p>EGBE OMO YORUBA SECUNDA,SOUTH AFRICA</p>
                 <a type="button" class="open-AddBookDialog btn-u" data-toggle="modal" data-target="#myModal" data-id="EGBE OMO YORUBA SECUNDA,SOUTH AFRICA">
                  Contact us
                </a>
                 <a type="button">
                  Activities
                </a>
            </div>

            <div class="clients-page margin-bottom-20">
              <a class="img-hover" href="#">
                  <img src="assets/img/flags/southafrica.jpeg" alt="" />
              </a>
                <p>EGBE OMO YORUBA VAAL-TRIANGLE,SOUTH AFRICA</p>
                 <a type="button" class="open-AddBookDialog btn-u" data-toggle="modal" data-target="#myModal" data-id="EGBE OMO YORUBA VAAL-TRIANGLE,SOUTH AFRICA">
                  Contact us
                </a>
                 <a type="button">
                  Activities
                </a>
            </div>
            <div class="clients-page margin-bottom-20">
              <a class="img-hover" href="#">
                  <img src="assets/img/flags/zimbabwe.jpeg" alt="" />
              </a>
                <p>EGBE OMO YORUBA ZIMBABWE </p>
                 <a type="button" class="open-AddBookDialog btn-u" data-toggle="modal" data-target="#myModal" data-id="EGBE OMO YORUBA ZIMBABWE">
                  Contact us
                </a>
                 <a type="button">
                  Activities
                </a>
            </div>
            <div class="clients-page margin-bottom-20">
              <a class="img-hover" href="#">
                  <img src="assets/img/flags/swaziland.jpeg" alt="" />
              </a>
                <p>NATIONAL ASSOCIATION OF YORUBA DESCENDANTS SWAZILAND</p>
                 <a type="button" class="open-AddBookDialog btn-u" data-toggle="modal" data-target="#myModal" data-id="NATIONAL ASSOCIATION OF YORUBA DESCENDANTS SWAZILAND">
                  Contact us
                </a>
                 <a type="button">
                  Activities
                </a>
            </div>
            <div class="clients-page margin-bottom-20">
              <a class="img-hover" href="#">
                  <img src="assets/img/flags/namibia.png" alt="" />
              </a>
                <p>OODUA PEOPLE OF NAMIBIA OODUA COMMUNITY IN  TRANSKEI</p>
                 <a type="button" class="open-AddBookDialog btn-u" data-toggle="modal" data-target="#myModal" data-id="OODUA PEOPLE OF NAMIBIA OODUA COMMUNITY IN  TRANSKEI">
                  Contact us
                </a>
                 <a type="button">
                  Activities
                </a>
            </div>
            <div class="clients-page margin-bottom-20">
              <a class="img-hover" href="#">
                  <img src="assets/img/flags/lesotho.png" alt="" />
              </a>
                <p>EGBE OMO OODUA LESOTHO</p>
                 <a type="button" class="open-AddBookDialog btn-u" data-toggle="modal" data-target="#myModal" data-id="EGBE OMO OODUA LESOTHO">
                  Contact us
                </a>
                 <a type="button">
                  Activities
                </a>
            </div>
            <div class="clients-page margin-bottom-20">
              <a class="img-hover" href="#">
                  <img src="assets/img/flags/botswana.jpeg" alt="" />

              </a>
                <p> ASSOCIATION OF YORUBA DESCENDANTS IN BOTSWANA</p>
                <a type="button" class="open-AddBookDialog btn-u" data-toggle="modal" data-target="#myModal" data-id="ASSOCIATION OF YORUBA DESCENDANTS IN BOTSWANA">
                  Contact us
                </a>
                 <a type="button">
                  Activities
                </a>
            </div>

      </div><!--/span9-->

      <div class="span3">

          <!-- About Us -->
          <div class="headline"><h3>About Us</h3></div>
            <p class="margin-bottom-30">
                The first obvious answer to this question is the Yoruba are a nationality, numbering about 40 million, the majority of whom live in the South Western part of the state of Nigeria in West Africa.
                <a class="read-more" href="#">Read more</a>
            </p>

          <!-- Contact Us -->
            <div class="who margin-bottom-30">
                <div class="headline"><h3>Contact Us</h3></div>
                <p></p>
                <ul class="unstyled">
                    <li><a href="#"><i class="icon-envelope-alt"></i>info@yorubadescendants.com</a></li>
                    <li><a href="#"><i class="icon-globe"></i>http://www.yorubadescendants.com</a></li>
                </ul>
            </div>
        </div><!--/span3-->
    </div><!--/row-fluid-->
    <!-- Modal -->

</div>
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title" id="myModalLabel"></h4>
        </div>
        <div class="modal-body">
              <form method="post" action="/chapters/submit">
                      {{ Form::hidden('chapter',null,array('id' =>'chapter')) }}
                  <div class="@if ($errors->has('name')) has-error @endif">
                      <label>Name <span class="color-red">*</span></label>
                      {{ Form::text('name',null, array('class' =>'span4','id' =>'name')) }}
                      @if ($errors->has('name')) <p class="help-block color-red">{{ $errors->first('name') }}</p> @endif
                  </div>

                  <div class="@if ($errors->has('email')) has-error @endif">
                     <label>Email <span class="color-red">*</span></label>
                      {{ Form::text('email',null, array('class' =>'span4','id' =>'email')) }}
                      @if ($errors->has('email')) <p class="help-block color-red">{{ $errors->first('email') }}</p> @endif
                  </div>

                  <div class="@if ($errors->has('subject')) has-error @endif">
                     <label>Subject <span class="color-red">*</span></label>
                      {{ Form::text('subject',null, array('class' =>'span4','id' =>'subject')) }}
                      @if ($errors->has('subject')) <p class="help-block color-red">{{ $errors->first('subject') }}</p> @endif
                  </div>

                  <div class="@if ($errors->has('message')) has-error @endif">
                      <label>Message <span class="color-red">*</span></label>
                     {{ Form::textarea('message',null,array('class' =>'span4','id' =>'message','rows=5')) }}
                      @if ($errors->has('message')) <p class="help-block color-red">{{ $errors->first('message') }}</p> @endif
                  </div>
                  <button type="submit" class="btn-u">Send Message</button>

              </form>
        </div>
    </div>

  </div>
</div>

<!--/container-->
<!--=== End Content Part ===-->




@stop

