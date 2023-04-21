@extends('layouts.app')

@section('content')

<section class="page-title" style="background-image:url(images/background/bg-page-title-1.jpg);">
        <div class="auto-container">
            <h1>Contact Us</h1>
        </div>
    </section>
    
    <!--Page Info-->
    <section class="page-info">
        <div class="auto-container clearfix">
            <div class="pull-left"><h2>Contact Us</h2></div>
            <div class="pull-right">
                <ul class="bread-crumb clearfix">
                    <li><a href="index-2.html">Home</a></li>
                    <li>Contact Us</li>
                </ul>
            </div>
        </div>
    </section>
    
    <!--Contact Section-->
    <section class="contact-section">
    	<div class="auto-container">
        	<div class="row clearfix">
                
                <!--Form Column -->
            	<div class="column form-column col-lg-6 col-md-12 col-sm-12 col-xs-12">
                	<div class="sec-title medium"><h2>Send Message Us</h2></div>
                    @if (Session::has('message_sent'))
                    <div class="alert alert-success" role="alert">
                    {{Session::get('message_sent')}}
                    </div>
                    @endif
                	<!--form-box-->
                    <div class="form-box default-form" >
                        <div class="contact-form default-form">
                            <form method="post" action="{{route('contact.send')}}" id="contact-form">
                                @csrf
                                <div class="row clearfix">
                                
                                    <div class="form-group col-md-6 col-sm-6 col-xs-12">
                                        <select name="subject">
                                            <option>Subject</option>
                                            <option>Wooden Flooring</option>
                                            <option>Metal Flooring</option>
                                            <option>Concrete Flooring</option>
                                        </select>
                                    </div>
                                
                                    <div class="form-group col-md-6 col-sm-6 col-xs-12">
                                        <input type="text" name="name" value="" placeholder="Your Name *" required>
                                    </div>
        
                                    <div class="form-group col-md-6 col-sm-6 col-xs-12">
                                        <input type="email" name="email" value="" placeholder="Your Mail *" required>
                                    </div>
                                    
                                    <div class="form-group col-md-6 col-sm-6 col-xs-12">
                                        <input type="text" name="phone" value="" placeholder="Phone Number">
                                    </div>
                                    
                                    <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                        <textarea name="msg" placeholder="Message *"></textarea>
                                    </div>
                                    <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                        <button type="submit" class="theme-btn btn-style-two">Get Quote</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                
                <!--Column-->
                <div class="column info-column col-lg-6 col-md-6 col-sm-12 col-xs-12">
                	<div class="sec-title medium"><h2>Contact Details</h2></div>
                    <div class="desc-text">There are many variations off +1800 854 5864 available, but the majority have ut suffered alterattions in some forms by injected humour looks events slightly seds believable ut  seds do eiusmod tempor incididunt labore.</div>
                	<div class="info-style-one">
                        <ul>
                            <li><div class="icon-box"><span class="flaticon-international-delivery"></span></div><h4>Address :</h4><div class="text">Dangat Estate, Warje, Pune <br>Pune 411058, Maharashtra.</div></li>
                            <li><div class="icon-box"><span class="flaticon-envelope"></span></div><h4>Mail to us:</h4><div class="text">thefurniturelifestyle@gmail.com</div></li>
                            <li><div class="icon-box"><span class="flaticon-phone-call"></span></div><h4>Call us:</h4><div class="text"> +91 7875303545</div></li>
                        </ul>
                    </div>
                </div>
                
            </div>    
       	</div>
   	</section>
    
@endsection