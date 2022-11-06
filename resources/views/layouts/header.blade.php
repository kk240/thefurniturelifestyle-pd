<header class="main-header">
    	<!-- Header Top -->
    	<div class="header-top">
        	<div class="auto-container">
            	<div class="row clearfix">
                    
                    <!--Top Left-->
                    <div class="top-left pull-left">
                    	<div class="dropdown lang-dropdown">
                        	<button  class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown"><img src="{{ asset(env('ADD_PUBLIC').'/images/icons/flog.png')}}" alt="" /> &nbsp; English <!--<span class="fa fa-angle-down"></span>--></button>
                            <!-- <ul class="dropdown-menu">
                                <li><a href="#">French</a></li>
                                <li><a href="#">Espanish</a></li>
                                <li><a href="#">Chinese</a></li>
                            </ul> -->
                        </div>
                    </div>
                    
                    <!--Top Right-->
                    <div class="top-right pull-right">
                    
                    	<!--social-icon-->
                        <div class="social-icon">
                        	<a href="#"><span class="fa fa-facebook"></span></a>
                            <a href="#"><span class="fa fa-twitter"></span></a>
                            <a href="#"><span class="fa fa-dribbble"></span></a>
                            <a href="#"><span class="fa fa-linkedin"></span></a>
                        </div>
                        
                    	<ul>
                        	<li><span class="fa fa-envelope-o"></span>thefurniturelifestyle@gmail.com</li>
                            <li><span class="fa fa-phone"></span><a href="tel:7875303545"> +91 787-530-3545</a></li>
                            <li><span class="fa fa-clock-o"></span>Mon - Sat : 9:00 -18:00</li>
                        </ul>
                        
                        
                    </div>
                    
                </div>
                
            </div>
        </div><!-- Header Top End -->
        
        
        <!-- Main Box -->
    	<div class="main-box">
        	<div class="auto-container">
            	<div class="outer-container clearfix">
                    <!--Logo Box-->
                    <div class="logo-box">
                        <div class="logo"><a href="{{route('home')}}"><!--<img src="{{ asset(env('ADD_PUBLIC').'/images/logo.png')}}" alt=""> -->
                            <h1 class="company_name">The FurnitureLifestyle</h1>
                        </a></div>
                    </div>
                    
                    <!--Nav Outer-->
                    <div class="nav-outer clearfix">
                        <!-- Main Menu -->
                        <nav class="main-menu">
                            <div class="navbar-header">
                                <!-- Toggle Button -->    	
                                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                </button>
                            </div>
                            
                            <div class="navbar-collapse collapse clearfix">
                                <ul class="navigation clearfix">
                                    <li class="current"><a href="{{route('home')}}">Home</a></li>
                                    <li class=""><a href="{{route('about-us')}}">About Us</a>
                                    	<!-- <ul>
                                            <li><a href="{{route('about-us')}}">About Us</a></li>
                                            <li><a href="{{route('our-team')}}">Our Team</a></li>
                                            <li><a href="team-single.html">Team Single</a></li>
                                        </ul> -->
                                    </li>
                                    <li class="dropdown"><a href="#">Services</a>
                                    	<ul>
                                            <li><a href="{{route('services')}}">Our Services</a></li>
                                            <li><a href="{{route('services')}}">Services Single</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="{{route('project')}}">Projects</a>
                                    </li>
                                    <li><a href="#">Blog</a>
                                    	<!-- <ul>
                                            <li><a href="blog.html">Blog Standard</a></li>
                                            <li><a href="blog-large-image.html">Blog Large Image</a></li>
                                            <li><a href="blog-single.html">Blog Single</a></li>
                                        </ul> -->
                                    </li>
                                    
                                    <!-- <li class="dropdown"><a href="#">Shop</a>
                                        <ul>
                                            <li><a href="shop.html">Shop Products</a></li>
                                            <li><a href="shop-single.html">Shop Single</a></li>
                                            <li><a href="shopping-cart.html">Shopping Cart</a></li>
                                            <li><a href="checkout.html">Checkout</a></li>
                                            <li><a href="register.html">Login / Register</a></li>
                                        </ul>
                                    </li> -->
                                    
                                    <li ><a href="{{route('login')}}">Login</a>
                                    </li>
                                    <li ><a href="{{route('register')}}">Register</a>
                                    </li>
                                    
                                    <li><a href="{{route('contact')}}">Contact</a></li>
                                    
                                 </ul>
                            </div>
                        </nav><!-- Main Menu End-->
                        
                    </div><!--Nav Outer End-->
                    
                    <!-- Hidden Nav Toggler -->
                    <div class="nav-toggler">
                    <button class="hidden-bar-opener"><span class="icon fa fa-bars"></span></button>
                    </div> <!-- / Hidden Nav Toggler
                    
                    Search Btn-->
                    <!-- <a href="shopping-cart.html" class="cart-btn-outer"><div class="icon"><span class="flaticon-shopping-bag"></span><span class="count">2</span></div></a>
                    <div class="header-search-icon search-box-btn"><span class="flaticon-search"></span></div> -->
                    
            	</div>    
            </div>
        </div>
    
    </header>