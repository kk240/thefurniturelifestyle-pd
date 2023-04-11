
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">


<head>
<meta charset="utf-8">
<title>The furniture lifestyle - Interior Design and furniture in Pune | Homepage | Best and Affordable Furniture services in Pune </title>
<!-- Stylesheets -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="csrf-token" content="{{ csrf_token() }}">
<title>{{ config('app.name', 'Laravel') }}</title>
<script src="{{ asset(env('ADD_PUBLIC').'/js/app.js') }}" ></script>
<link rel="dns-prefetch" href="//fonts.gstatic.com"> 
<link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
<link href="{{ asset(env('ADD_PUBLIC').'/css/bootstrap.css') }}" rel="stylesheet">
<link href="{{ asset(env('ADD_PUBLIC').'/css/revolution-slider.css') }}" rel="stylesheet">
<link href="{{ asset(env('ADD_PUBLIC').'/css/style.css') }}" rel="stylesheet">
<link rel="shortcut icon" href="{{ asset(env('ADD_PUBLIC').'/images/favicon.ico')}}" type="image/x-icon">
<link rel="icon" href="{{ asset(env('ADD_PUBLIC').'/images/favicon.ico')}}" type="image/x-icon">
<!-- Responsive -->
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
<link href="{{ asset(env('ADD_PUBLIC').'/css/responsive.css') }}" rel="stylesheet">
<!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script><![endif]-->
<!--[if lt IE 9]><script src="js/respond.js"></script><![endif]-->
<style>
.company_name{
    display: inline;
    font-size: 25px;
}
}
</style>
</head>

<body>
    <div id="app">
        @include('layouts.header')
        <main class="py-4">
            @yield('content')
        </main>
        @include('layouts.footer')
  <div class="scroll-to-top scroll-to-target" data-target=".main-header"><span class="fa fa-long-arrow-up"></span></div>


<script src="{{ asset(env('ADD_PUBLIC').'/js/jquery.js')}}"></script> 
<script src="{{ asset(env('ADD_PUBLIC').'/js/bootstrap.min.js')}}"></script>
<script src="{{ asset(env('ADD_PUBLIC').'/js/jquery.mCustomScrollbar.concat.min.js')}}"></script>
<script src="{{ asset(env('ADD_PUBLIC').'/js/revolution.min.js')}}"></script>
<script src="{{ asset(env('ADD_PUBLIC').'/js/jquery.fancybox.pack.js')}}"></script>
<script src="{{ asset(env('ADD_PUBLIC').'/js/jquery.fancybox-media.js')}}"></script>
<script src="{{ asset(env('ADD_PUBLIC').'/js/isotope.js')}}"></script>
<script src="{{ asset(env('ADD_PUBLIC').'/js/owl.js')}}"></script>
<script src="{{ asset(env('ADD_PUBLIC').'/js/wow.js')}}"></script>
<script src="{{ asset(env('ADD_PUBLIC').'/js/script.js')}}"></script>
@yield('scripts')
</body>


</html>