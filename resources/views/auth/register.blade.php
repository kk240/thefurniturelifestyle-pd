@extends('layouts.app')

@section('content')
  <!-- Hidden Navigation Bar -->

    
    
    <!--Page Title-->
    <section class="page-title" style="background-image:url(images/background/bg-page-title-1.jpg);">
        <div class="auto-container">
            <h1>Register</h1>
        </div>
    </section>
    
    <!--Page Info-->
    <section class="page-info">
        <div class="auto-container clearfix">
            <div class="pull-left"><h2>Register</h2></div>
            <div class="pull-right">
                <ul class="bread-crumb clearfix">
                    <li><a href="index-2.html">Home</a></li>
                    <li><a href="shop.html">Shop</a></li>
                    <li>Register</li>
                </ul>
            </div>
        </div>
    </section>
    
    <!--Register Section-->
    <section class="register-section">
        <div class="auto-container">
            <div class="row clearfix">
                
                <!--Form Column-->
                
                <div class="form-column column col-lg-6 col-md-6 col-sm-12 col-xs-12">
                
                    <div class="sec-title medium">
                        <h2>Register Here</h2>
                    </div>
                    
                    <!--Login Form-->
                    <div class="styled-form register-form">
                        <form method="post" action="#">
                            <div class="form-group">
                                <span class="adon-icon"><span class="fa fa-user"></span></span>
                                <input type="text" name="username" value="" placeholder="Your Name *">
                            </div>
                            <div class="form-group">
                                <span class="adon-icon"><span class="fa fa-envelope-o"></span></span>
                                <input type="email" name="useremil" value="" placeholder="Enter Mail id *">
                            </div>
                            <div class="form-group">
                                <span class="adon-icon"><span class="fa fa-unlock-alt"></span></span>
                                <input type="password" name="userpassword" value="" placeholder="Enter Password">
                            </div>
                            <div class="clearfix">
                                <div class="form-group pull-left">
                                    <button type="button" class="theme-btn btn-style-two">Register</button>
                                </div>
                                <div class="form-group padd-top-10 pull-right">
                                    * You must be a free registered user to submit content. 
                                </div>
                            </div>
                            
                        </form>
                    </div>
                    
                </div>
                    
                </div>
                
            </div>
        </div>
    </section>
@endsection
