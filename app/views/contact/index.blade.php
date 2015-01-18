@extends('layouts.default')
@section('content')

<!--=== Breadcrumbs ===-->
<div class="breadcrumbs margin-bottom-40">
    <div class="container">
        <h1 class="color-green pull-left">Our Contacts</h1>
        <ul class="pull-right breadcrumb">
            <li><a href="index.html">Home</a> <span class="divider">/</span></li>
            <li class="active">Contact</li>
        </ul>
    </div><!--/container-->
</div><!--/breadcrumbs-->
<!--=== End Breadcrumbs ===-->

<!--=== Content Part ===-->
<div class="container">
   @if(Session::has('error'))
        <div class="alert alert-danger">
            {{ Session::get('error') }}
        </div>
    @endif

    @if(Session::has('message'))
        <div class="alert alert-success">
            {{ Session::get('message') }}
        </div>
    @endif
    <div class="row-fluid">
        <div class="span9">
            <div id="map" class="map map-box map-box-space margin-bottom-40">
            </div><!---/map-->

            <form method="post" action="/contact/submit">

                <div class="@if ($errors->has('name')) has-error @endif">
                    <label>Name <span class="color-red">*</span></label>
                    {{ Form::text('name',null, array('class' =>'span7','id' =>'name')) }}
                    @if ($errors->has('name')) <p class="help-block color-red">{{ $errors->first('name') }}</p> @endif
                </div>

                <div class="@if ($errors->has('email')) has-error @endif">
                   <label>Email <span class="color-red">*</span></label>
                    {{ Form::text('email',null, array('class' =>'span7','id' =>'email')) }}
                    @if ($errors->has('email')) <p class="help-block color-red">{{ $errors->first('email') }}</p> @endif
                </div>

                <div class="@if ($errors->has('message')) has-error @endif">
                    <label>Message <span class="color-red">*</span></label>
                    {{ Form::textarea('message',null,array('class' =>'span7','id' =>'message')) }}
                    @if ($errors->has('message')) <p class="help-block color-red">{{ $errors->first('message') }}</p> @endif
                </div>

                <p><button type="submit" class="btn-u">Send Message</button></p>
            </form>
        </div><!--/span9-->

        <div class="span3">
            <!-- Contacts -->
            <div class="headline"><h3>Contacts</h3></div>
            <ul class="unstyled who margin-bottom-20">
                <li><a href="#"><i class="icon-home"></i>Durban, KZN SA</a></li>
                <li><a href="#"><i class="icon-envelope-alt"></i>info@yorubadescendants.com</a></li>
                <li><a href="#"><i class="icon-phone-sign"></i>+(27) 00 000 0000</a></li>
                <li><a href="#"><i class="icon-globe"></i>http://www.yorubadescendants.com</a></li>
            </ul>
        </div><!--/span3-->
    </div><!--/row-fluid-->

</div><!--/container-->
<!--=== End Content Part ===-->
@stop
