@extends('layouts.app');
@section('content')
   
<section class="page-title" style="background-image:url({{ asset(env('ADD_PUBLIC').'images/background/bg-page-title-1.jpg')}});">
    <div class="auto-container">
        <h1>Blogs</h1>
    </div>
</section>

<!--Page Info-->
<section class="page-info">
    <div class="auto-container clearfix">
        <div class="pull-left"><h2>Blog</h2></div>
        <div class="pull-right">
            <ul class="bread-crumb clearfix">
                <li><a href="{{route('home')}}">Home</a></li>
                <li>blog</li>
            </ul>
        </div>
    </div>
</section>

<section class="blog-section">
<div class="auto-container">
            
    <div class="row clearfix">
        

        <!--Service Block-->
        @foreach ($blogs as $blog)
            <div class="default-services-block col-md-4 col-sm-6 col-xs-12">
                <div class="inner-box">
                    <figure class="image-box"><img src="{{ asset(env('ADD_PUBLIC').'images/resource/blog-image-1.jpg')}}" alt=""><a href="service-single.html" class="overlay-box"><span class="fa fa-link"></span></a></figure>
                    <div class="lower-content">
                        <div class="transparen-icon"><span class="flaticon-improvement"></span></div>
                        <h3><a href="/listings/{{$blog['id']}}">{{$blog['title']}}</a></h3>
                        <div class="text">How this mistaken idea pleasure and praising pain was born and will gives you a completed expound rem eum fugiat voluptas.</div>
                        <div class="link-box"><a href="/listings/{{$blog['id']}}" class="theme-btn read-more">Read More</a></div>
                    </div>
                </div>
            </div>
        @endforeach
        
   
        
    
    </div>


</div>
</section>
@endsection