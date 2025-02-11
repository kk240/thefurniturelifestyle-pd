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
                        <div class="logo">
                            <a href="{{route('home')}}">
                               <img src="{{ asset(env('ADD_PUBLIC').'/images/logo.png')}}" width="200" height="50" alt=""> 
                            {{-- <h1 class="company_name text-sm text-lg">The FurnitureLifestyle</h1> --}}
                           
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
                                    <li class=""><a href="{{route('about-us')}}">About</a>
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
                                    <li><a href="{{route('blogs')}}">Blog</a>
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

                                    <li><a href="{{route('contact')}}">Contact</a></li>
                                    
                                    @auth
                                    @if( Auth::user()->role->id == 1)
                                    <li><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
                                    @elseif(Auth::user()->role->id == 2)
                                    <li><a href="{{ route('user.dashboard') }}">Dashboard</a></li>
                                    @else {{null}};
                                    @endif 
                                    @endauth

                                    @guest   
                                    <li ><a href="{{route('login')}}">Login</a></li>
                                
                                    @if (Route::has('register'))
                                    <li ><a href="{{route('register')}}">Register</a></li> 
                                    @endif  
                                    @else
                                    <li class="dropdown"><a href="#">{{ Auth::user()->name }}</a>
                                        <ul>
                                            <li><a href="#">profile</a></li>
                                        <li>
                                            
                                       

                                                <a  href="{{ route('logout') }}"
                                                   onclick="event.preventDefault();
                                                                 document.getElementById('logout-form').submit();">
                                                    {{ __('Logout') }}
                                                </a>
            
                                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                                    @csrf
                                                    </form>
                                                     </li>  

                                            
                                                </ul>
                                                </li>
                                
                               
                                             @endguest    

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