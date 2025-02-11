@extends('layouts.app')

@section('content')

    <!-- Hidden Navigation Bar -->
    <section class="hidden-bar right-align">
        
        <div class="hidden-bar-closer">
            <button class="btn"><i class="fa fa-close"></i></button>
        </div>
        
        <!-- Hidden Bar Wrapper -->
        <div class="hidden-bar-wrapper">
        
            <!-- .logo -->
            <div class="logo text-center">
                <a href="index-2.html"><img src="{{ asset(env('ADD_PUBLIC').'images/logo-2.png') }}" alt=""></a>         
            </div><!-- /.logo -->
            
            <!-- .Side-menu -->
            <div class="side-menu">
            <!-- .navigation -->
                <ul class="navigation">
                    <li class="current"><a href="index-2.html">Home</a></li>
                    <li class="dropdown"><a href="#">About Us</a>
                        <ul>
                            <li><a href="about-us.html">About Us</a></li>
                            <li><a href="our-team.html">Our Team</a></li>
                            <li><a href="team-single.html">Team Single</a></li>
                        </ul>
                    </li>
                    <li class="dropdown"><a href="#">Services</a>
                        <ul class="submenu">
                            <li><a href="services.html">Our Services</a></li>
                            <li><a href="service-single.html">Services Single</a></li>
                        </ul>
                    </li>
                    <li class="dropdown"><a href="#">Projects</a>
                        <ul class="submenu">
                            <li><a href="portfolio-default.html">Projects Standard</a></li>
                            <li><a href="portfolio-fullwidth.html">Projects Fullwidth</a></li>
                            <li><a href="portfolio-with-text.html">Projects With Text</a></li>
                            <li><a href="portfolio-single-one.html">Projects Single 01</a></li>
                            <li><a href="portfolio-single-two.html">Projects Single 02</a></li>
                        </ul>
                    </li>
                    <li class="dropdown"><a href="#">Blog</a>
                        <ul class="submenu">
                            <li><a href="blog.html">Blog Standard</a></li>
                            <li><a href="blog-large-image.html">Blog large Image</a></li>
                            <li><a href="blog-single.html">Blog Single</a></li>
                        </ul>
                    </li>
                    
                    <li class="dropdown"><a href="#">Shop</a>
                        <ul class="submenu">
                            <li><a href="shop.html">Shop Products</a></li>
                            <li><a href="shop-single.html">Shop Single</a></li>
                            <li><a href="shopping-cart.html">Shopping Cart</a></li>
                            <li><a href="checkout.html">Checkout</a></li>
                            <li><a href="register.html">Login / Register</a></li>
                        </ul>
                    </li>
                    
                    <li class="dropdown"><a href="#">Pages</a>
                        <ul class="submenu">
                            <li><a href="about-us.html">About Us</a></li>
                            <li><a href="our-team.html">Our Team</a></li>
                            <li><a href="team-single.html">Team Single</a></li>
                            <li><a href="pricing.html">Pricing Table</a></li>
                            <li><a href="faqs.html">FAQ's</a></li>
                        </ul>
                    </li>
                    
                    <li><a href="contact.html">Contact</a></li>
                </ul>
            </div><!-- /.Side-menu -->
        
            <div class="social-icons">
                <ul>
                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                    <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                </ul>
            </div>
        
        </div><!-- / Hidden Bar Wrapper -->
    </section>
    <!-- / Hidden Bar -->
    
    <!--Main Slider-->
    <section class="main-slider">
        
        <div class="tp-banner-container">
            <div class="tp-banner">
                <ul>
                    
                    <li data-transition="fade" data-slotamount="1" data-masterspeed="1000" data-thumb="images/main-slider/image-1.jpg"  data-saveperformance="off"  data-title="Awesome Title Here">
                    <img src="{{ asset(env('ADD_PUBLIC').'images/main-slider/image-1.jpg')}}"  alt=""  data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat"> 
                    
                    <div class="tp-caption sfl sfb tp-resizeme"
                    data-x="left" data-hoffset="15"
                    data-y="center" data-voffset="-100"
                    data-speed="1500"
                    data-start="0"
                    data-easing="easeOutExpo"
                    data-splitin="none"
                    data-splitout="none"
                    data-elementdelay="0.01"
                    data-endelementdelay="0.3"
                    data-endspeed="1200"
                    data-endeasing="Power4.easeIn"><h2>The Furniture<br> Lifestyle</h2></div>
                    
                    <div class="tp-caption sfl sfb tp-resizeme"
                    data-x="left" data-hoffset="15"
                    data-y="center" data-voffset="40"
                    data-speed="1500"
                    data-start="500"
                    data-easing="easeOutExpo"
                    data-splitin="none"
                    data-splitout="none"
                    data-elementdelay="0.01"
                    data-endelementdelay="0.3"
                    data-endspeed="1200"
                    data-endeasing="Power4.easeIn"><div class="text">The furniture lifestyle brings 20 years of experience<br>right to your home or office.</div></div>
                    
                    <div class="tp-caption sfr sfb tp-resizeme"
                    data-x="left" data-hoffset="15"
                    data-y="center" data-voffset="140"
                    data-speed="1500"
                    data-start="1000"
                    data-easing="easeOutExpo"
                    data-splitin="none"
                    data-splitout="none"
                    data-elementdelay="0.01"
                    data-endelementdelay="0.3"
                    data-endspeed="1200"
                    data-endeasing="Power4.easeIn"><a href="#" class="theme-btn btn-style-one">Our Services</a> &ensp; <a href="#" class="theme-btn btn-style-two">Buy now</a></div>
                    
                    
                    </li>
                    
                    <li data-transition="fade" data-slotamount="1" data-masterspeed="1000" data-thumb="images/main-slider/image-2.jpg"  data-saveperformance="off"  data-title="Awesome Title Here">
                    <img src="{{ asset(env('ADD_PUBLIC').'images/main-slider/image-2.jpg')}}"  alt=""  data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat"> 
                    
                    <div class="tp-caption sfl sfb tp-resizeme"
                    data-x="center" data-hoffset="0"
                    data-y="center" data-voffset="-100"
                    data-speed="1500"
                    data-start="0"
                    data-easing="easeOutExpo"
                    data-splitin="none"
                    data-splitout="none"
                    data-elementdelay="0.01"
                    data-endelementdelay="0.3"
                    data-endspeed="1200"
                    data-endeasing="Power4.easeIn"><h2>Solution For Joy Living</h2></div>
                    
                    <div class="tp-caption sfl sfb tp-resizeme"
                    data-x="center" data-hoffset="0"
                    data-y="center" data-voffset="0"
                    data-speed="1500"
                    data-start="500"
                    data-easing="easeOutExpo"
                    data-splitin="none"
                    data-splitout="none"
                    data-elementdelay="0.01"
                    data-endelementdelay="0.3"
                    data-endspeed="1200"
                    data-endeasing="Power4.easeIn"><div class="text text-center">The furniture lifestyle brings 20 years of experience<br>right to your home or office.</div></div>
                    
                    <div class="tp-caption sfr sfb tp-resizeme"
                    data-x="center" data-hoffset="15"
                    data-y="center" data-voffset="100"
                    data-speed="1500"
                    data-start="1000"
                    data-easing="easeOutExpo"
                    data-splitin="none"
                    data-splitout="none"
                    data-elementdelay="0.01"
                    data-endelementdelay="0.3"
                    data-endspeed="1200"
                    data-endeasing="Power4.easeIn"><a href="#" class="theme-btn btn-style-one">Our Services</a> &ensp; <a href="#" class="theme-btn btn-style-two">Buy now</a></div>
                    
                    
                    </li>
                    
                    <li data-transition="fade" data-slotamount="1" data-masterspeed="1000" data-thumb="images/main-slider/image-3.jpg"  data-saveperformance="off"  data-title="Awesome Title Here">
                    <img src="{{ asset(env('ADD_PUBLIC').'images/main-slider/image-3.jpg')}}"  alt=""  data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat"> 
                    
                    <div class="tp-caption sfl sfb tp-resizeme"
                    data-x="left" data-hoffset="500"
                    data-y="center" data-voffset="-100"
                    data-speed="1500"
                    data-start="0"
                    data-easing="easeOutExpo"
                    data-splitin="none"
                    data-splitout="none"
                    data-elementdelay="0.01"
                    data-endelementdelay="0.3"
                    data-endspeed="1200"
                    data-endeasing="Power4.easeIn"><h2>We Give Life to <br>Your Home</h2></div>
                    
                    <div class="tp-caption sfl sfb tp-resizeme"
                    data-x="left" data-hoffset="500"
                    data-y="center" data-voffset="40"
                    data-speed="1500"
                    data-start="500"
                    data-easing="easeOutExpo"
                    data-splitin="none"
                    data-splitout="none"
                    data-elementdelay="0.01"
                    data-endelementdelay="0.3"
                    data-endspeed="1200"
                    data-endeasing="Power4.easeIn"><div class="text">The furniture lifestyle brings 20 years of experience<br>right to your home or office.</div></div>
                    
                    <div class="tp-caption sfr sfb tp-resizeme"
                    data-x="left" data-hoffset="500"
                    data-y="center" data-voffset="140"
                    data-speed="1500"
                    data-start="1000"
                    data-easing="easeOutExpo"
                    data-splitin="none"
                    data-splitout="none"
                    data-elementdelay="0.01"
                    data-endelementdelay="0.3"
                    data-endspeed="1200"
                    data-endeasing="Power4.easeIn"><a href="#" class="theme-btn btn-style-one">Our Services</a> &ensp; <a href="#" class="theme-btn btn-style-two">Buy now</a></div>
                    
                    
                    </li>
                    
                </ul>
                
                <div class="tp-bannertimer"></div>
            </div>
        </div>
    </section>
    
    <!--welcome-section-->
    <section class="welcome-section">
        <div class="auto-container">
            <div class="row clearfix">
                <!--welcome-column-->
                <div class="col-md-6 col-sm-12 col-xs-12 welcome-column">
                    <!--inner-content-->
                    <div class="inner-content wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                        <h2>Welcome to The furniture lifestyle</h2>
                        <h3>We Have The Right Products to Fit Your Needs and Budget <span>Purchase - The furniture lifestyle.</span></h3>
                        
                        <div class="text">Explain to you how all this mistaken idea of denouncing ut pleasures work
                        praising pain was born and  will give you can complete design account sed
                        the system, and expound the actual teachngs interiors of the great design
                        explorer of the truth, the master-builders design of human happiness one
                        seds rejects, dislikes, or avoids pleasures itself.</div>
                        <figure class="signature">
                            <img src="{{ asset(env('ADD_PUBLIC').'images/icons/signature.png')}}" alt="" />
                        </figure>
                        
                        <!--author-title-->
                        <div class="author-title">
                            <div class="author-info">William Shocks, <span>Founder</span></div>
                            <div class="author-designation">The furniture lifestyle.</div>
                        </div>
                    </div>
                </div>
                
                <!--service-column-->
                <div class="col-md-6 col-sm-12 col-xs-12 service-column">
                    <!--service-block-one-->
                    <div class="service-block-one">
                        <div class="inner-box">
                            <!--icon-block-->
                            <div class="icon-box">
                                <span class="flaticon-avatar-1"></span>
                            </div>
                            <h3>We are Professional</h3>
                            <div class="category"><a href="#">Designers</a></div>
                            <div class="text">How all this mistakens idea of denouncing pleasures and praising pain was born and I will give you a completed by account of the system, and expound.</div>
                        </div>
                    </div>
                    <!--service-block-one-->
                    <div class="service-block-one">
                        <div class="inner-box">
                            <!--icon-block-->
                            <div class="icon-box">
                                <span class="flaticon-correct"></span>
                            </div>
                            <h3>We are Trusted</h3>
                            <div class="category"><a href="#">Team Members</a></div>
                            <div class="text">Idea of denouncing pleasure and praisings pain was born and I will give you a complete account of the system and expound the actual great explorer of the truth.</div>
                        </div>
                    </div>
                    <!--service-block-one-->
                    <div class="service-block-one">
                        <div class="inner-box">
                            <!--icon-block-->
                            <div class="icon-box">
                                <span class="flaticon-compass"></span>
                            </div>
                            <h3>We are Expert</h3>
                            <div class="category"><a href="#">Interiors</a></div>
                            <div class="text">Denouncing pleasures and praisings pain was born work  will give you a complete seds account of the system, and actual master-builder of human happiness.</div>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </section>
    
    
    <!--best-service-section-->
    <section class="best-service-section">
        <div class="auto-container">
            
            <!--sec-title-->
            <div class="sec-title clearfix">
                <h2 class="pull-left">Our Best Services</h2>
                <a class="service-link pull-right" href="#">More Services <span class="fa fa-caret-right"></span></a>
            </div>
            
            <div class="row clearfix">
            
                <!--service-block-two-->
                <div class="service-block-two col-lg-4 col-md-6 col-sm-12 col-xs-12">
                    <!--inner-box-->
                    <div class="inner-box wow fadeIn" data-wow-delay="0ms" data-wow-duration="1500ms">
                        <div class="image-layer" style="background-image:url({{asset(env('ADD_PUBLIC').'images/resource/service-block-two-bg.jpg')}})"></div>
                        <!--icon-box-->
                        <div class="icon-box">
                            <span class="flaticon-improvement"></span>
                        </div>
                        
                        <h3>Texture Painting</h3>
                        <div class="text">How all this mistaken idea pleasure and praising pain was born and will give you a complete expound.</div>
                        <a href="#" class="read-more">Read More</a>
                        
                        <!--bottom-icon-->
                        <div class="bottom-icon">
                            <span class="flaticon-improvement"></span>
                        </div>
                        
                    </div>
                </div>
                
                <div class="service-block-two col-lg-4 col-md-6 col-sm-12 col-xs-12">
                    <!--inner-box-->
                    <div class="inner-box wow fadeIn" data-wow-delay="400ms" data-wow-duration="1500ms">
                        <div class="image-layer" style="background-image:url({{asset(env('ADD_PUBLIC').'images/resource/service-block-two-bg.jpg')}})"></div>
                        <!--icon-box-->
                        <div class="icon-box">
                            <span class="flaticon-parquet"></span>
                        </div>
                        
                        <h3>Wooden Flooring</h3>
                        <div class="text">Explain to you how can mistakens idea off denouncing pleasures and praising give you a complete.</div>
                        <a href="#" class="read-more">Read More</a>
                        
                        <!--bottom-icon-->
                        <div class="bottom-icon">
                            <span class="flaticon-parquet"></span>
                        </div>
                        
                    </div>
                </div>
                
                <div class="service-block-two col-lg-4 col-md-6 col-sm-12 col-xs-12">
                    <!--inner-box-->
                    <div class="inner-box wow fadeIn" data-wow-delay="800ms" data-wow-duration="1500ms">
                        <div class="image-layer" style="background-image:url({{asset(env('ADD_PUBLIC').'images/resource/service-block-two-bg.jpg')}})"></div>
                        <!--icon-box-->
                        <div class="icon-box">
                            <span class="flaticon-window"></span>
                        </div>
                        
                        <h3>Interior Curtains</h3>
                        <div class="text">Denouncing pleasure and praising pain was born and I will give you a complete account the system.</div>
                        <a href="#" class="read-more">Read More</a>
                        
                        <!--bottom-icon-->
                        <div class="bottom-icon">
                            <span class="flaticon-window"></span>
                        </div>
                        
                    </div>
                </div>
                
                <div class="service-block-two col-lg-4 col-md-6 col-sm-12 col-xs-12">
                    <!--inner-box-->
                    <div class="inner-box wow fadeIn" data-wow-delay="0ms" data-wow-duration="1500ms">
                        <div class="image-layer" style="background-image:url({{asset(env('ADD_PUBLIC').'images/resource/service-block-two-bg.jpg')}})"></div>
                        <!--icon-box-->
                        <div class="icon-box">
                            <span class="flaticon-tiles"></span>
                        </div>
                        
                        <h3>Tile & Marble Work</h3>
                        <div class="text">Plesure and praising pain was born and I will give you a complete and expound the actual teachings.</div>
                        <a href="#" class="read-more">Read More</a>
                        
                        <!--bottom-icon-->
                        <div class="bottom-icon">
                            <span class="flaticon-tiles"></span>
                        </div>
                        
                    </div>
                </div>
                
                <div class="service-block-two col-lg-4 col-md-6 col-sm-12 col-xs-12">
                    <!--inner-box-->
                    <div class="inner-box wow fadeIn" data-wow-delay="400ms" data-wow-duration="1500ms">
                        <div class="image-layer" style="background-image:url({{asset(env('ADD_PUBLIC').'images/resource/service-block-two-bg.jpg')}})"></div>
                        <!--icon-box-->
                        <div class="icon-box">
                            <span class="flaticon-two"></span>
                        </div>
                        
                        <h3>Furniture Work</h3>
                        <div class="text">We will give you complete account of the system, and expound the of the great explorer of the truth.</div>
                        <a href="#" class="read-more">Read More</a>
                        
                        <!--bottom-icon-->
                        <div class="bottom-icon">
                            <span class="flaticon-dinner"></span>
                        </div>
                        
                    </div>
                </div>
                
                <div class="service-block-two col-lg-4 col-md-6 col-sm-12 col-xs-12">
                    <!--inner-box-->
                    <div class="inner-box wow fadeIn" data-wow-delay="800ms" data-wow-duration="1500ms">
                        <div class="image-layer" style="background-image:url({{asset(env('ADD_PUBLIC').'images/resource/service-block-two-bg.jpg')}})"></div>
                        <!--icon-box-->
                        <div class="icon-box">
                            <span class="flaticon-bright-lightbulb"></span>
                        </div>
                        
                        <h3>Lighting Works</h3>
                        <div class="text">Expound the actual teachings of explorer of truth masters builder of human happiness.</div>
                        <a href="#" class="read-more">Read More</a>
                        
                        <!--bottom-icon-->
                        <div class="bottom-icon">
                            <span class="flaticon-bright-lightbulb"></span>
                        </div>
                        
                    </div>
                </div>
                
                
            </div>
        </div>
    </section>
    
    
    <!--Gallery Section-->
    <section class="gallery-section">
        <div class="auto-container">
            
            <!--Section Title-->
            <div class="sec-title-four">
                <h2>Recent Projects</h2>
            </div>
            
            <!--Sortable Masonry-->
            <div class="sortable-masonry">
                <!--Filter-->
                <div class="filters text-center">
                <div class="icon-box"><span class="fa fa-picture-o"></span></div>
                
                    <ul class="filter-tabs filter-btns clearfix">
                        <li class="active filter" data-role="button" data-filter=".all">All Projects</li>          
                        <li class="filter" data-role="button" data-filter=".painting">Painting</li>
                        <li class="filter" data-role="button" data-filter=".flooring">Flooring</li>
                        <li class="filter" data-role="button" data-filter=".tile-marble">Tile &amp; Marble</li>
                        <li class="filter" data-role="button" data-filter=".furniture">Furniture</li>
                        <li class="filter" data-role="button" data-filter=".lighting">Lighting</li>
                    </ul>
                </div>
                
                
                <div class="items-container clearfix">
                    
                    <!--Default Portfolio Item-->
                    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 default-portfolio-item masonry-item all tile-marble">
                        <div class="inner-box">
                            <figure class="image-box"><img src="{{ asset(env('ADD_PUBLIC').'images/gallery/1.jpg')}}" alt=""></figure>
                            <!--Overlay Box-->
                            <div class="overlay-one">
                                <div class="overlay-inner">
                                    <div class="content">
                                        <a href="portfolio-single-one.html" class="proj-link"><span class="fa fa-link"></span></a>
                                    </div>
                                </div>
                            </div>
                            <!--Caption Box-->
                            <div class="caption-box-one">
                                <h3><a href="portfolio-single-one.html">Living Room</a></h3>
                                <a href="#" class="cat-link">Painting</a>
                            </div>
                        </div>
                    </div>
                    
                    <!--Default Portfolio Item-->
                    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 default-portfolio-item masonry-item all tile-marble lighting">
                        <div class="inner-box">
                            <figure class="image-box"><img src="{{ asset(env('ADD_PUBLIC').'images/gallery/2.jpg')}}" alt=""></figure>
                            <!--Overlay Box-->
                            <div class="overlay-one">
                                <div class="overlay-inner">
                                    <div class="content">
                                        <a href="portfolio-single-one.html" class="proj-link"><span class="fa fa-link"></span></a>
                                    </div>
                                </div>
                            </div>
                            <!--Caption Box-->
                            <div class="caption-box-one">
                                <h3><a href="portfolio-single-one.html">Living Room</a></h3>
                                <a href="#" class="cat-link">Painting</a>
                            </div>
                        </div>
                    </div>
                    
                    <!--Default Portfolio Item-->
                    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 default-portfolio-item masonry-item all flooring tile-marble furniture lighting">
                        <div class="inner-box">
                            <figure class="image-box"><img src="{{ asset(env('ADD_PUBLIC').'images/gallery/3.jpg')}}" alt=""></figure>
                            <!--Overlay Box-->
                            <div class="overlay-one">
                                <div class="overlay-inner">
                                    <div class="content">
                                        <a href="portfolio-single-one.html" class="proj-link"><span class="fa fa-link"></span></a>
                                    </div>
                                </div>
                            </div>
                            <!--Caption Box-->
                            <div class="caption-box-one">
                                <h3><a href="portfolio-single-one.html">Living Room</a></h3>
                                <a href="#" class="cat-link">Painting</a>
                            </div>
                        </div>
                    </div>
                    
                    <!--Default Portfolio Item-->
                    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 default-portfolio-item masonry-item all painting flooring furniture">
                        <div class="inner-box">
                            <figure class="image-box"><img src="{{ asset(env('ADD_PUBLIC').'images/gallery/4.jpg')}}" alt=""></figure>
                            <!--Overlay Box-->
                            <div class="overlay-one">
                                <div class="overlay-inner">
                                    <div class="content">
                                        <a href="portfolio-single-one.html" class="proj-link"><span class="fa fa-link"></span></a>
                                    </div>
                                </div>
                            </div>
                            <!--Caption Box-->
                            <div class="caption-box-one">
                                <h3><a href="portfolio-single-one.html">Living Room</a></h3>
                                <a href="#" class="cat-link">Painting</a>
                            </div>
                        </div>
                    </div>
                    
                    <!--Default Portfolio Item-->
                    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 default-portfolio-item masonry-item all painting tile-marble furniture lighting">
                        <div class="inner-box">
                            <figure class="image-box"><img src="{{ asset(env('ADD_PUBLIC').'images/gallery/5.jpg')}}" alt=""></figure>
                            <!--Overlay Box-->
                            <div class="overlay-one">
                                <div class="overlay-inner">
                                    <div class="content">
                                        <a href="portfolio-single-one.html" class="proj-link"><span class="fa fa-link"></span></a>
                                    </div>
                                </div>
                            </div>
                            <!--Caption Box-->
                            <div class="caption-box-one">
                                <h3><a href="portfolio-single-one.html">Living Room</a></h3>
                                <a href="#" class="cat-link">Painting</a>
                            </div>
                        </div>
                    </div>
                    
                    <!--Default Portfolio Item-->
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 default-portfolio-item masonry-item all painting flooring tile-marble">
                        <div class="inner-box">
                            <figure class="image-box"><img src="{{ asset(env('ADD_PUBLIC').'images/gallery/7.jpg')}}" alt=""></figure>
                            <!--Overlay Box-->
                            <div class="overlay-one">
                                <div class="overlay-inner">
                                    <div class="content">
                                        <a href="portfolio-single-one.html" class="proj-link"><span class="fa fa-link"></span></a>
                                    </div>
                                </div>
                            </div>
                            <!--Caption Box-->
                            <div class="caption-box-one">
                                <h3><a href="portfolio-single-one.html">Living Room</a></h3>
                                <a href="#" class="cat-link">Painting</a>
                            </div>
                        </div>
                    </div>
                    
                    <!--Default Portfolio Item-->
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 default-portfolio-item masonry-item all flooring furniture lighting">
                        <div class="inner-box">
                            <figure class="image-box"><img src="{{ asset(env('ADD_PUBLIC').'images/gallery/6.jpg')}}" alt=""></figure>
                            <!--Overlay Box-->
                            <div class="overlay-one">
                                <div class="overlay-inner">
                                    <div class="content">
                                        <a href="portfolio-single-one.html" class="proj-link"><span class="fa fa-link"></span></a>
                                    </div>
                                </div>
                            </div>
                            <!--Caption Box-->
                            <div class="caption-box-one">
                                <h3><a href="portfolio-single-one.html">Living Room</a></h3>
                                <a href="#" class="cat-link">Painting</a>
                            </div>
                        </div>
                    </div>
                    
                </div>
                
            </div><!--End Sortable Masonry-->
            
            <div class="text-center padd-top-50"><a class="theme-btn btn-style-two" href="portfolio-standard.html">More Projects</a></div>
        
        </div>    
        
        
    </section>
    
    
    <!--call-to-action-->
    <section class="call-to-action" style="background-image:url(images/background/image-1.jpg')}});">
        <div class="auto-container">
            <div class="row">
                <div class="text">Join with The furniture lifestyle and</div>
                <h2>Now Make Your Home More Lovely!</h2>
                
                <a class="theme-btn btn-style-one" href="#">Contact Us</a>
                <a class="theme-btn btn-style-two" href="#">Shop Now</a>
                
            </div>
        </div>
    </section>
    
    
    <!--default-two-column-->
    <section class="default-two-column">
        <div class="auto-container">
            <div class="row clearfix">
            
                <div class="column spec-column col-md-6 col-sm-12">
                    <!--sec-title-three-->
                    <div class="sec-title-three">
                        <div class="sub-title">The furniture lifestyle</div>
                        <h2>Characteristics</h2>
                    </div>
                    <div class="text">All this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the ut actual teachings of the great explorer of the truth the master-builder of human happiness.</div>
                    <!--specs-->
                    <div class="specs clearfix">
                        <div class="row clearfix">
                            <!--spec-block-->
                            <div class="spec-block col-lg-6 col-md-12 col-sm-12 col-xs-12">
                                <!--spec-block-->
                                <div class="inner-box">
                                    <!--icon-box-->
                                    <div class="icon-box">
                                        <span class="flaticon-improvement"></span>
                                    </div>
                                    <h3>All Types of Color</h3>
                                    <div class="text">According to Interior design pedia, a great way to get our ideas for color palette.</div>
                                </div>
                            </div>
                            
                            <div class="spec-block col-lg-6 col-md-12 col-sm-12 col-xs-12">
                                <!--spec-block-->
                                <div class="inner-box">
                                    <!--icon-box-->
                                    <div class="icon-box">
                                        <span class="flaticon-fabric"></span>
                                    </div>
                                        <h3>Fabrics Pattern</h3>
                                        <div class="text">In addition to beautiful silks & fabrics, you could pattern and textured finishes.</div>
                                </div>
                            </div>
                            
                            <div class="spec-block col-lg-6 col-md-12 col-sm-12 col-xs-12">
                                <!--spec-block-->
                                <div class="inner-box">
                                    <!--icon-box-->
                                    <div class="icon-box">
                                        <span class="flaticon-layers"></span>
                                    </div>
                                        <h3>Concrete Floor</h3>
                                        <div class="text">Polished concrete floor work great in modern design, tiles, marble, and granite.</div>
                                </div>
                            </div>
                            
                            <div class="spec-block col-lg-6 col-md-12 col-sm-12 col-xs-12">
                                <!--spec-block-->
                                <div class="inner-box">
                                    <!--icon-box-->
                                    <div class="icon-box">
                                        <span class="flaticon-dinner"></span>
                                    </div>
                                        <h3>Dark Furnitures</h3>
                                        <div class="text">Dark, solid wooden furniture will realy help to get this one  concept on the right track.</div>
                                 </div>
                            </div>
                            
                        </div>
                    </div>
                 </div>
                 
                <div class="column form-column col-md-6 col-sm-12">
                    <!--sec-title-three-->
                    <div class="sec-title-three">
                        <div class="sub-title">Request for</div>
                        <h2>Free Quotation</h2>
                    </div>
                    @if (Session::has('message_sent'))
                    <div class="alert alert-success" role="alert">
                    {{Session::get('message_sent')}}
                    </div>
                    @endif
                    
                    <!--form-box-->
                    <div class="form-box default-form wow fadeInRight" data-wow-delay="0ms" data-wow-duration="1500ms">
                        <div class="contact-form default-form">
                            <form method="post" action="{{route('contact.send')}}" id="contact-form">
                                @csrf
                                <div class="row clearfix">
                                
                                    <div class="form-group col-md-6 col-sm-6 col-xs-12">
                                        <select name="subject">
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
                                        <textarea name="message" placeholder="Message *"></textarea>
                                    </div>
                                    <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                        <button type="submit" class="theme-btn btn-style-two">Get Quote</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </section>
    
    
    <!--testimonial-style-one-->
    <section class="testimonial-style-one" style="background-image:url(images/background/image-2.jpg')}});">
        <div class="auto-container">
            <div class="row">
                
                <div class="carousel-outer">
                    <div class="icon fa fa-quote-left"></div>
                    <div class="single-item-carousel">

                        <!--Slide Item-->
                        <div class="slide-item">
                            <div class="inner-box">
                                <div class="slide-text">By far the best theme I've ever purchased. They truly understood the look I was going for and completely nailed it! you how all this mistaken idea of denouncing pleasure pain was born and I will give you  I would highly recommend The furniture lifestyle Theme. </div>
                                <!--auther-info-->
                                <div class="auther-info">
                                    <div class="image"><img src="{{ asset(env('ADD_PUBLIC').'images/resource/author-thumb-3.jpg')}}" alt="" /></div>
                                    <div class="auther-name">Jeorge Fernando</div>
                                    <div class="designation">Interior Theme</div>
                                </div>
                            </div>
                        </div>
                        
                        <!--Slide Item-->
                        <div class="slide-item">
                            <div class="inner-box">
                                <div class="slide-text">By far the best theme I've ever purchased. They truly understood the look I was going for and completely nailed it! you how all this mistaken idea of denouncing pleasure pain was born and I will give you  I would highly recommend The furniture lifestyle Theme. </div>
                                <!--auther-info-->
                                <div class="auther-info">
                                    <div class="image"><img src="{{ asset(env('ADD_PUBLIC').'images/resource/author-thumb-3.jpg')}}" alt="" /></div>
                                    <div class="auther-name">Jeorge Fernando</div>
                                    <div class="designation">Interior Theme</div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="slide-item">
                            <div class="inner-box">
                                <div class="slide-text">By far the best theme I've ever purchased. They truly understood the look I was going for and completely nailed it! you how all this mistaken idea of denouncing pleasure pain was born and I will give you  I would highly recommend The furniture lifestyle Theme. </div>
                                <!--auther-info-->
                                <div class="auther-info">
                                    <div class="image"><img src="{{ asset(env('ADD_PUBLIC').'images/resource/author-thumb-3.jpg')}}" alt="" /></div>
                                    <div class="auther-name">Jeorge Fernando</div>
                                    <div class="designation">Interior Theme</div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                
            </div>
        </div>
    </section>
    
    <!--Sponsors Section-->
    <section class="sponsors-section">
        <div class="auto-container">
            <!--Sponsors SLider-->
            <ul class="sponsors-carousel">
                <li><div class="inner-box"><figure class="image-box"><img src="{{ asset(env('ADD_PUBLIC').'images/clients/1.png')}}" alt=""></figure><div class="overlay-box"><div class="overlay-inner"><div class="overlay-content"><span class="count">+5</span><span class="text">Years<br>Experince</span></div></div></div></div></li>
                <li><div class="inner-box"><figure class="image-box"><img src="{{ asset(env('ADD_PUBLIC').'images/clients/2.png')}}" alt=""></figure><div class="overlay-box"><div class="overlay-inner"><div class="overlay-content"><span class="count">+2</span><span class="text">Years<br>Experince</span></div></div></div></div></li>
                <li><div class="inner-box"><figure class="image-box"><img src="{{ asset(env('ADD_PUBLIC').'images/clients/3.png')}}" alt=""></figure><div class="overlay-box"><div class="overlay-inner"><div class="overlay-content"><span class="count">+6</span><span class="text">Years<br>Experince</span></div></div></div></div></li>
                <li><div class="inner-box"><figure class="image-box"><img src="{{ asset(env('ADD_PUBLIC').'images/clients/4.png')}}" alt=""></figure><div class="overlay-box"><div class="overlay-inner"><div class="overlay-content"><span class="count">+3</span><span class="text">Years<br>Experince</span></div></div></div></div></li>
                <li><div class="inner-box"><figure class="image-box"><img src="{{ asset(env('ADD_PUBLIC').'images/clients/5.png')}}" alt=""></figure><div class="overlay-box"><div class="overlay-inner"><div class="overlay-content"><span class="count">+1</span><span class="text">Years<br>Experince</span></div></div></div></div></li>
                <li><div class="inner-box"><figure class="image-box"><img src="{{ asset(env('ADD_PUBLIC').'images/clients/1.png')}}" alt=""></figure><div class="overlay-box"><div class="overlay-inner"><div class="overlay-content"><span class="count">+5</span><span class="text">Years<br>Experince</span></div></div></div></div></li>
                <li><div class="inner-box"><figure class="image-box"><img src="{{ asset(env('ADD_PUBLIC').'images/clients/2.png')}}" alt=""></figure><div class="overlay-box"><div class="overlay-inner"><div class="overlay-content"><span class="count">+2</span><span class="text">Years<br>Experince</span></div></div></div></div></li>
                <li><div class="inner-box"><figure class="image-box"><img src="{{ asset(env('ADD_PUBLIC').'images/clients/3.png')}}" alt=""></figure><div class="overlay-box"><div class="overlay-inner"><div class="overlay-content"><span class="count">+6</span><span class="text">Years<br>Experince</span></div></div></div></div></li>
                <li><div class="inner-box"><figure class="image-box"><img src="{{ asset(env('ADD_PUBLIC').'images/clients/4.png')}}" alt=""></figure><div class="overlay-box"><div class="overlay-inner"><div class="overlay-content"><span class="count">+3</span><span class="text">Years<br>Experince</span></div></div></div></div></li>
                <li><div class="inner-box"><figure class="image-box"><img src="{{ asset(env('ADD_PUBLIC').'images/clients/5.png')}}" alt=""></figure><div class="overlay-box"><div class="overlay-inner"><div class="overlay-content"><span class="count">+1</span><span class="text">Years<br>Experince</span></div></div></div></div></li>
                <li><div class="inner-box"><figure class="image-box"><img src="{{ asset(env('ADD_PUBLIC').'images/clients/1.png')}}" alt=""></figure><div class="overlay-box"><div class="overlay-inner"><div class="overlay-content"><span class="count">+5</span><span class="text">Years<br>Experince</span></div></div></div></div></li>
                <li><div class="inner-box"><figure class="image-box"><img src="{{ asset(env('ADD_PUBLIC').'images/clients/2.png')}}" alt=""></figure><div class="overlay-box"><div class="overlay-inner"><div class="overlay-content"><span class="count">+2</span><span class="text">Years<br>Experince</span></div></div></div></div></li>
                <li><div class="inner-box"><figure class="image-box"><img src="{{ asset(env('ADD_PUBLIC').'images/clients/3.png')}}" alt=""></figure><div class="overlay-box"><div class="overlay-inner"><div class="overlay-content"><span class="count">+6</span><span class="text">Years<br>Experince</span></div></div></div></div></li>
                <li><div class="inner-box"><figure class="image-box"><img src="{{ asset(env('ADD_PUBLIC').'images/clients/4.png')}}" alt=""></figure><div class="overlay-box"><div class="overlay-inner"><div class="overlay-content"><span class="count">+3</span><span class="text">Years<br>Experince</span></div></div></div></div></li>
                <li><div class="inner-box"><figure class="image-box"><img src="{{ asset(env('ADD_PUBLIC').'images/clients/5.png')}}" alt=""></figure><div class="overlay-box"><div class="overlay-inner"><div class="overlay-content"><span class="count">+1</span><span class="text">Years<br>Experince</span></div></div></div></div></li>
            </ul>
        </div>
    </section>
    
    
    <!--News Section-->
    <section class="news-section">
        <div class="auto-container">
        
            <div class="sec-title-four">
                <h2>Recent News</h2>
            </div>
            
            
            <div class="news-carousel two-column-carousel">
                
                <!--News Style One-->
                <div class="news-style-one">
                    <div class="inner-box">
                        <div class="row clearfix">
                            <div class="image-column col-md-5 col-sm-6 col-xs-12">
                                <figure class="image-box"><img src="{{ asset(env('ADD_PUBLIC').'images/resource/blog-image-1.jpg')}}" alt=""><a class="overlay-link" href="blog-single.html"><span class="icon flaticon-plus-1"></span></a></figure>
                            </div>
                            <div class="content-column col-md-7 col-sm-6 col-xs-12">
                                <div class="content">
                                    <h3><a href="blog-single.html">Our First Design For Interior</a></h3>
                                    <ul class="post-meta clearfix">
                                        <li><a href="#"><span class="icon fa fa-clock-o"></span> Oct 03, 2015</a></li>
                                        <li><a href="#"><span class="icon fa fa-tags"></span> Furniture</a></li>
                                    </ul>
                                    <div class="text">How all this mistakens idea off denouncings pleasure and praising pain was born and get will give you a complete account.</div>
                                    <div class="author-info">
                                        <figure class="author-thumb"><img src="{{ asset(env('ADD_PUBLIC').'images/resource/author-thumb-1.jpg')}}" alt=""></figure>
                                        <h4>Mark Nicholes</h4>
                                        <div class="designation">Team Leader</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!--News Style One-->
                <div class="news-style-one">
                    <div class="inner-box">
                        <div class="row clearfix">
                            <div class="image-column col-md-5 col-sm-6 col-xs-12">
                                <figure class="image-box"><img src="{{ asset(env('ADD_PUBLIC').'images/resource/blog-image-2.jpg')}}" alt=""><a class="overlay-link" href="blog-single.html"><span class="icon flaticon-plus-1"></span></a></figure>
                            </div>
                            <div class="content-column col-md-7 col-sm-6 col-xs-12">
                                <div class="content">
                                    <h3><a href="blog-single.html">Using High Quality Paints</a></h3>
                                    <ul class="post-meta clearfix">
                                        <li><a href="#"><span class="icon fa fa-clock-o"></span> Aug 21, 2015</a></li>
                                        <li><a href="#"><span class="icon fa fa-tags"></span> Painting</a></li>
                                    </ul>
                                    <div class="text">Pleasure and praising pain was born and will give you a complete account of the systems, and expound the actual teaching.</div>
                                    <div class="author-info">
                                        <figure class="author-thumb"><img src="{{ asset(env('ADD_PUBLIC').'images/resource/author-thumb-2.jpg')}}" alt=""></figure>
                                        <h4>William Harry</h4>
                                        <div class="designation">Designer</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!--News Style One-->
                <div class="news-style-one">
                    <div class="inner-box">
                        <div class="row clearfix">
                            <div class="image-column col-md-5 col-sm-6 col-xs-12">
                                <figure class="image-box"><img src="{{ asset(env('ADD_PUBLIC').'images/resource/blog-image-1.jpg')}}" alt=""><a class="overlay-link" href="blog-single.html"><span class="icon flaticon-plus-1"></span></a></figure>
                            </div>
                            <div class="content-column col-md-7 col-sm-6 col-xs-12">
                                <div class="content">
                                    <h3><a href="blog-single.html">Our First Design For Interior</a></h3>
                                    <ul class="post-meta clearfix">
                                        <li><a href="#"><span class="icon fa fa-clock-o"></span> Oct 03, 2015</a></li>
                                        <li><a href="#"><span class="icon fa fa-tags"></span> Furniture</a></li>
                                    </ul>
                                    <div class="text">How all this mistakens idea off denouncings pleasure and praising pain was born and get will give you a complete account.</div>
                                    <div class="author-info">
                                        <figure class="author-thumb"><img src="{{ asset(env('ADD_PUBLIC').'images/resource/author-thumb-1.jpg')}}" alt=""></figure>
                                        <h4>Mark Nicholes</h4>
                                        <div class="designation">Team Leader</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!--News Style One-->
                <div class="news-style-one">
                    <div class="inner-box">
                        <div class="row clearfix">
                            <div class="image-column col-md-5 col-sm-6 col-xs-12">
                                <figure class="image-box"><img src="{{ asset(env('ADD_PUBLIC').'images/resource/blog-image-2.jpg')}}" alt=""><a class="overlay-link" href="blog-single.html"><span class="icon flaticon-plus-1"></span></a></figure>
                            </div>
                            <div class="content-column col-md-7 col-sm-6 col-xs-12">
                                <div class="content">
                                    <h3><a href="blog-single.html">Using High Quality Paints</a></h3>
                                    <ul class="post-meta clearfix">
                                        <li><a href="#"><span class="icon fa fa-clock-o"></span> Aug 21, 2015</a></li>
                                        <li><a href="#"><span class="icon fa fa-tags"></span> Painting</a></li>
                                    </ul>
                                    <div class="text">Pleasure and praising pain was born and will give you a complete account of the systems, and expound the actual teaching.</div>
                                    <div class="author-info">
                                        <figure class="author-thumb"><img src="{{ asset(env('ADD_PUBLIC').'images/resource/author-thumb-2.jpg')}}" alt=""></figure>
                                        <h4>William Harry</h4>
                                        <div class="designation">Designer</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!--News Style One-->
                <div class="news-style-one">
                    <div class="inner-box">
                        <div class="row clearfix">
                            <div class="image-column col-md-5 col-sm-6 col-xs-12">
                                <figure class="image-box"><img src="{{ asset(env('ADD_PUBLIC').'images/resource/blog-image-1.jpg')}}" alt=""><a class="overlay-link" href="blog-single.html"><span class="icon flaticon-plus-1"></span></a></figure>
                            </div>
                            <div class="content-column col-md-7 col-sm-6 col-xs-12">
                                <div class="content">
                                    <h3><a href="blog-single.html">Our First Design For Interior</a></h3>
                                    <ul class="post-meta clearfix">
                                        <li><a href="#"><span class="icon fa fa-clock-o"></span> Oct 03, 2015</a></li>
                                        <li><a href="#"><span class="icon fa fa-tags"></span> Furniture</a></li>
                                    </ul>
                                    <div class="text">How all this mistakens idea off denouncings pleasure and praising pain was born and get will give you a complete account.</div>
                                    <div class="author-info">
                                        <figure class="author-thumb"><img src="{{ asset(env('ADD_PUBLIC').'images/resource/author-thumb-1.jpg')}}" alt=""></figure>
                                        <h4>Mark Nicholes</h4>
                                        <div class="designation">Team Leader</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!--News Style One-->
                <div class="news-style-one">
                    <div class="inner-box">
                        <div class="row clearfix">
                            <div class="image-column col-md-5 col-sm-6 col-xs-12">
                                <figure class="image-box"><img src="{{ asset(env('ADD_PUBLIC').'images/resource/blog-image-2.jpg')}}" alt=""><a class="overlay-link" href="blog-single.html"><span class="icon flaticon-plus-1"></span></a></figure>
                            </div>
                            <div class="content-column col-md-7 col-sm-6 col-xs-12">
                                <div class="content">
                                    <h3><a href="blog-single.html">Using High Quality Paints</a></h3>
                                    <ul class="post-meta clearfix">
                                        <li><a href="#"><span class="icon fa fa-clock-o"></span> Aug 21, 2015</a></li>
                                        <li><a href="#"><span class="icon fa fa-tags"></span> Painting</a></li>
                                    </ul>
                                    <div class="text">Pleasure and praising pain was born and will give you a complete account of the systems, and expound the actual teaching.</div>
                                    <div class="author-info">
                                        <figure class="author-thumb"><img src="{{ asset(env('ADD_PUBLIC').'images/resource/author-thumb-2.jpg')}}" alt=""></figure>
                                        <h4>William Harry</h4>
                                        <div class="designation">Designer</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
            
        </div>
    </section>
    
    <!--Newsletter Style One-->
    <section class="newsletter-style-one">
        <div class="auto-container">
            <div class="row clearfix">
                
                <div class="title-column col-lg-4 col-md-12 col-sm-12">
                    <h2>Newsletter Signup</h2>
                    <div class="text">We send you latest news couple a month ( No Spam).</div>
                </div>
                <!--Form Column-->
                <div class="form-column col-lg-8 col-md-12 col-sm-12">
                    <div class="inner-box">
                        <form method="post" action="" >
                            @csrf
                            <div class="row clearfix">
                                <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
                                    <div class="row clearfix">
                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                            <div class="form-group">
                                                <span class="floated-icon fa fa-user"></span>
                                                <input type="text" name="name" value="" placeholder="Your Name" required>
                                            </div>
                                        </div>
                                        
                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                            <div class="form-group">
                                                <span class="floated-icon fa fa-envelope"></span>
                                                <input type="email" name="email" value="" placeholder="Your Email" required>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                                    <button type="submit" class="theme-btn btn-submit">Subscribe</button>
                                </div>
                                
                            </div>
                        </form>
                       

                    </div>
                </div>
                
            </div>
        </div>
    </section>
    <script type="text/javascript">
    $ajaxSetup(
        {
            headers:{
                'X-CSRF_TOKEN': $('meta[name="csrf-token"]').attr('content');
            }
        });
    $(".btn-submit").click( function(e){
        e.preventDefault();
        var email = $("input[name=email]").val();

        $.ajax({
            type:'post',
            url:"{{ route('submit')}}",
            data:{email:email, 
            success: function(data){
                alert(data.success);
            }}
        })
     }
    )
    </script>
@endsection
