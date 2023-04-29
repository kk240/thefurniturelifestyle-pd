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
                    <li><a href="/blogs"> Blogs</a></li>
                    <li>{{$blog->heading}}</li>
                </ul>
            </div>
        </div>
    </section>
    
    <section class="page-info">
        <div class="auto-container clearfix">
            <div class="container">
                <h1>{{ $blog->title }}</h1>
                <h1>{{ $blog->image }}</h1>
                <img src="{{asset('storage/public/'. $blog->image)}}" alt="">
                <p>{{ $blog->textBody }}</p>

            </div>
        </div>
    </section>
 

@endsection

@section('scripts')
<script src="{{ asset(env('ADD_PUBLIC').'js/mixitup.js')}}"></script>
<script src="{{ asset(env('ADD_PUBLIC').'js/script.js')}}"></script>
@endsection