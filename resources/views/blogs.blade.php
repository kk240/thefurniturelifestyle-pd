@extends('layouts.app')

@section('content')
 
    <!--Page Title-->
    <section class="page-title" style="background-image:url({{ asset(env('ADD_PUBLIC').'images/background/bg-page-title-1.jpg') }});">
        <div class="auto-container">
            <h1>Blogs</h1>
        </div>
    </section>
    
    <!--Page Info-->
    <section class="page-info">
        <div class="auto-container clearfix">
            <div class="pull-left"><h2>Blogs</h2></div>
            <div class="pull-right">
                <ul class="bread-crumb clearfix">
                    <li><a href="/">Home</a></li>
                    <li>Blogs</li>
                </ul>
            </div>
        </div>
    </section>
    
    <section class="page-info">
        <div class="auto-container clearfix">
            @foreach ($blogs as $blog)
            {{-- <ul>
                <li>
                    <a href="#">{{$blog->title}}</a>   
                </li>
            </ul> --}}
            <div class="default-services-block col-md-4 col-sm-6 col-xs-12">
                <div class="inner-box">
                    <figure class="image-box"><img src="{{ asset(env('ADD_PUBLIC').'images/resource/service-image-1.jpg')}}" alt=""><a href="{{ route('blog.display', ['id' => $blog->id]) }}" class="overlay-box"><span class="fa fa-link"></span></a></figure>
                    <div class="lower-content">
                        <div class="transparen-icon"><span class="flaticon-improvement"></span></div>
                        <h3><a href="{{ route('blog.display', ['id' => $blog->id]) }}">{{$blog->heading}}</a></h3>
                        <div class="text">{{$blog->title}}</div>
                        <div class="link-box"><a href="{{ route('blog.display', ['id' => $blog->id]) }}" class="theme-btn read-more">Read More</a></div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </section>
 

@endsection

@section('scripts')
<script src="{{ asset(env('ADD_PUBLIC').'js/mixitup.js')}}"></script>
<script src="{{ asset(env('ADD_PUBLIC').'js/script.js')}}"></script>
@endsection