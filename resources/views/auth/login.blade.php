@extends('layouts.app')

@section('content')
  <!-- Hidden Navigation Bar -->

    
    
    <!--Page Title-->
    <section class="page-title" style="background-image:url(images/background/bg-page-title-1.jpg);">
        <div class="auto-container">
            <h1>Login</h1>
        </div>
    </section>
    
    <!--Page Info-->
    <section class="page-info">
        <div class="auto-container clearfix">
            <div class="pull-left"><h2>Login</h2></div>
            <div class="pull-right">
                <ul class="bread-crumb clearfix">
                    <li><a href="index-2.html">Home</a></li>
                    <li><a href="shop.html">Shop</a></li>
                    <li>Login</li>
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
                        <h2>Login Now</h2>
                    </div>
                    
                    <!--Login Form-->
                    <div class="styled-form login-form">
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
                                    <button type="button" class="theme-btn btn-style-two">login</button>
                                </div>
                                <!-- <div class="form-group social-links-two pull-right">
                                    Or login with <a href="#" class="img-circle facebook"><span class="fa fa-facebook-f"></span></a> <a href="#" class="img-circle twitter"><span class="fa fa-twitter"></span></a> <a href="#" class="img-circle google-plus"><span class="fa fa-google-plus"></span></a>
                                </div> -->
                            </div>
                            
                            <div class="clearfix">
                                <div class="pull-left">
                                    <input type="checkbox" id="remember-me"><label for="remember-me">&nbsp; Remember Me</label>
                                </div>
                                <div class="pull-right">
                                    <a href="#" class="forgot">Forgot Password?</a>
                                </div>
                            </div>
                            
                        </form>
                    </div>
                    
                </div>
                
            </div>
        </div>
    </section>
      
    
    
@endsection
