@extends('layouts.app')

@section('content')
 
    <!--Page Title-->
    <section class="page-title" style="background-image:url({{ asset(env('ADD_PUBLIC').'images/background/bg-page-title-1.jpg') }});">
        <div class="auto-container">
            <h1>Our Projects</h1>
        </div>
    </section>
    
    <!--Page Info-->
    <section class="page-info">
        <div class="auto-container clearfix">
            <div class="pull-left"><h2>Projects With Text</h2></div>
            <div class="pull-right">
                <ul class="bread-crumb clearfix">
                    <li><a href="/">Home</a></li>
                    <li><a href="/">Pages</a></li>
                    <li>Projects</li>
                </ul>
            </div>
        </div>
    </section>
    
    
    <!--Gallery Section-->
    <section class="gallery-section portfolio-with-caption">
         <div class="auto-container">   
            <!--Mixituo Gallery-->
            <div class="mixitup-gallery">
                <!--Filter-->
                <div class="filters text-center">
                	<div class="icon-box"><span class="fa fa-picture-o"></span></div>
                
                    <ul class="filter-tabs filter-btns clearfix">
                        <li class="active filter" data-role="button" data-filter="all">All Projects</li>          
                        <li class="filter" data-role="button" data-filter=".painting">Painting</li>
                        <li class="filter" data-role="button" data-filter=".flooring">Flooring</li>
                        <li class="filter" data-role="button" data-filter=".tile-marble">Tile &amp; Marble</li>
                        <li class="filter" data-role="button" data-filter=".furniture">Furniture</li>
                        <li class="filter" data-role="button" data-filter=".lighting">Lighting</li>
                    </ul>
                </div>
                
                
                <div class="filter-list row clearfix">
                    
                    <!--Default Portfolio Item-->
                    <div class="col-md-4 col-sm-6 col-xs-12 default-portfolio-item mix mix_all all furniture">
                        <div class="inner-box">
                            <figure class="image-box">
                            	<img src="{{ asset(env('ADD_PUBLIC').'images/gallery/26.jpg')}}" alt="">
                            	<!--Overlay Box-->
                                <div class="overlay-one">
                                    <div class="overlay-inner">
                                        <div class="content">
                                            <a href="portfolio-single-two.html" class="proj-link"><span class="fa fa-link"></span></a>
                                        </div>
                                    </div>
                                </div>
                            </figure>
                            
                            <!--Caption Box-->
                            <div class="caption-box-two">
                                <h3><a href="portfolio-single-two.html">Living Room</a></h3>
                                <div class="cat-links"><a href="#">Tile &amp; Marble</a> , <a href="#">Furniture</a></div>
                            </div>
                        </div>
                    </div>
                    
                    <!--Default Portfolio Item-->
                    <div class="col-md-4 col-sm-6 col-xs-12 default-portfolio-item mix mix_all all flooring lighting">
                        <div class="inner-box">
                            <figure class="image-box">
                            	<img src="{{ asset(env('ADD_PUBLIC').'images/gallery/27.jpg')}}" alt="">
                            	<!--Overlay Box-->
                                <div class="overlay-one">
                                    <div class="overlay-inner">
                                        <div class="content">
                                            <a href="portfolio-single-two.html" class="proj-link"><span class="fa fa-link"></span></a>
                                        </div>
                                    </div>
                                </div>
                            </figure>
                            
                            <!--Caption Box-->
                            <div class="caption-box-two">
                                <h3><a href="portfolio-single-two.html">Bed Room</a></h3>
                                <div class="cat-links"><a href="#">Lighting</a> , <a href="#">Furniture</a></div>
                            </div>
                        </div>
                    </div>
                    
                    <!--Default Portfolio Item-->
                    <div class="col-md-4 col-sm-6 col-xs-12 default-portfolio-item mix mix_all all tile-marble furniture flooring">
                        <div class="inner-box">
                            <figure class="image-box">
                            	<img src="{{ asset(env('ADD_PUBLIC').'images/gallery/28.jpg')}}" alt="">
                            	<!--Overlay Box-->
                                <div class="overlay-one">
                                    <div class="overlay-inner">
                                        <div class="content">
                                            <a href="portfolio-single-two.html" class="proj-link"><span class="fa fa-link"></span></a>
                                        </div>
                                    </div>
                                </div>
                            </figure>
                            
                            <!--Caption Box-->
                            <div class="caption-box-two">
                                <h3><a href="portfolio-single-two.html">Study Room</a></h3>
                                <div class="cat-links"><a href="#">Tile &amp; Marble</a> , <a href="#">Painting</a></div>
                            </div>
                        </div>
                    </div>
                    
                    <!--Default Portfolio Item-->
                    <div class="col-md-4 col-sm-6 col-xs-12 default-portfolio-item mix mix_all all painting lighting tile-marble">
                        <div class="inner-box">
                            <figure class="image-box">
                            	<img src="{{ asset(env('ADD_PUBLIC').'images/gallery/29.jpg')}}" alt="">
                            	<!--Overlay Box-->
                                <div class="overlay-one">
                                    <div class="overlay-inner">
                                        <div class="content">
                                            <a href="portfolio-single-two.html" class="proj-link"><span class="fa fa-link"></span></a>
                                        </div>
                                    </div>
                                </div>
                            </figure>
                            
                            <!--Caption Box-->
                            <div class="caption-box-two">
                                <h3><a href="portfolio-single-two.html">Wooden Sofa</a></h3>
                                <div class="cat-links"><a href="#">Furniture</a></div>
                            </div>
                        </div>
                    </div>
                    
                    <!--Default Portfolio Item-->
                    <div class="col-md-4 col-sm-6 col-xs-12 default-portfolio-item mix mix_all all furniture painting flooring lighting">
                        <div class="inner-box">
                            <figure class="image-box">
                            	<img src="{{ asset(env('ADD_PUBLIC').'images/gallery/30.jpg')}}" alt="">
                            	<!--Overlay Box-->
                                <div class="overlay-one">
                                    <div class="overlay-inner">
                                        <div class="content">
                                            <a href="portfolio-single-two.html" class="proj-link"><span class="fa fa-link"></span></a>
                                        </div>
                                    </div>
                                </div>
                            </figure>
                            
                            <!--Caption Box-->
                            <div class="caption-box-two">
                                <h3><a href="portfolio-single-two.html">Living Room</a></h3>
                                <div class="cat-links"><a href="#">Painting</a> , <a href="#">Furniture</a></div>
                            </div>
                        </div>
                    </div>
                    
                    <!--Default Portfolio Item-->
                    <div class="col-md-4 col-sm-6 col-xs-12 default-portfolio-item mix mix_all all flooring lighting">
                        <div class="inner-box">
                            <figure class="image-box">
                            	<img src="{{ asset(env('ADD_PUBLIC').'images/gallery/31.jpg')}}" alt="">
                            	<!--Overlay Box-->
                                <div class="overlay-one">
                                    <div class="overlay-inner">
                                        <div class="content">
                                            <a href="portfolio-single-two.html" class="proj-link"><span class="fa fa-link"></span></a>
                                        </div>
                                    </div>
                                </div>
                            </figure>
                            
                            <!--Caption Box-->
                            <div class="caption-box-two">
                                <h3><a href="portfolio-single-two.html">Walldesigning</a></h3>
                                <div class="cat-links"><a href="#">Painting</a></div>
                            </div>
                        </div>
                    </div>
                    
                    <!--Default Portfolio Item-->
                    <div class="col-md-4 col-sm-6 col-xs-12 default-portfolio-item mix mix_all all painting lighting">
                        <div class="inner-box">
                            <figure class="image-box">
                            	<img src="{{ asset(env('ADD_PUBLIC').'images/gallery/32.jpg')}}" alt="">
                            	<!--Overlay Box-->
                                <div class="overlay-one">
                                    <div class="overlay-inner">
                                        <div class="content">
                                            <a href="portfolio-single-two.html" class="proj-link"><span class="fa fa-link"></span></a>
                                        </div>
                                    </div>
                                </div>
                            </figure>
                            
                            <!--Caption Box-->
                            <div class="caption-box-two">
                                <h3><a href="portfolio-single-two.html">Interior Curtains</a></h3>
                                <div class="cat-links"><a href="#">Painting</a> , <a href="#">Furniture</a></div>
                            </div>
                        </div>
                    </div>
                    
                    <!--Default Portfolio Item-->
                    <div class="col-md-4 col-sm-6 col-xs-12 default-portfolio-item mix mix_all all tile-marble">
                        <div class="inner-box">
                            <figure class="image-box">
                            	<img src="{{ asset(env('ADD_PUBLIC').'images/gallery/33.jpg')}}" alt="">
                            	<!--Overlay Box-->
                                <div class="overlay-one">
                                    <div class="overlay-inner">
                                        <div class="content">
                                            <a href="portfolio-single-two.html" class="proj-link"><span class="fa fa-link"></span></a>
                                        </div>
                                    </div>
                                </div>
                            </figure>
                            
                            <!--Caption Box-->
                            <div class="caption-box-two">
                                <h3><a href="portfolio-single-two.html">Meeting Hall</a></h3>
                                <div class="cat-links"><a href="#">Painting</a> , <a href="#">Lighting</a></div>
                            </div>
                        </div>
                    </div>
                    
                    <!--Default Portfolio Item-->
                    <div class="col-md-4 col-sm-6 col-xs-12 default-portfolio-item mix mix_all all furniture flooring">
                        <div class="inner-box">
                            <figure class="image-box">
                            	<img src="{{ asset(env('ADD_PUBLIC').'images/gallery/34.jpg')}}" alt="">
                            	<!--Overlay Box-->
                                <div class="overlay-one">
                                    <div class="overlay-inner">
                                        <div class="content">
                                            <a href="portfolio-single-two.html" class="proj-link"><span class="fa fa-link"></span></a>
                                        </div>
                                    </div>
                                </div>
                            </figure>
                            
                            <!--Caption Box-->
                            <div class="caption-box-two">
                                <h3><a href="portfolio-single-two.html">Artificial Grass</a></h3>
                                <div class="cat-links"><a href="#">Flooring</a></div>
                            </div>
                        </div>
                    </div>
                    
                </div>
                
            </div><!--End Mixituo Gallery-->
            
            <!-- Styled Pagination -->
            <div class="styled-pagination padd-top-40 text-center">
                <ul>
                	<li><a class="prev" href="#"><span class="fa fa-angle-left"></span></a></li>
                    <li><a href="#" class="active">1</a></li>
                    <li><a href="#">2</a></li>
                    <li><a href="#">3</a></li>
                    <li><a class="next" href="#"><span class="fa fa-angle-right"></span></a></li>
                </ul>
            </div>
                
        </div>
    </section>

@endsection

@section('scripts')
<script src="{{ asset(env('ADD_PUBLIC').'js/mixitup.js')}}"></script>
<script src="{{ asset(env('ADD_PUBLIC').'js/script.js')}}"></script>
@endsection