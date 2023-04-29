@extends('layouts.app')

@section('content')

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <!--Page Title-->
    <section class="page-title" style="background-image:url({{ asset(env('ADD_PUBLIC').'images/background/bg-page-title-1.jpg') }});">
        <div class="auto-container">
            <h1>Dashboard</h1>
        </div>
    </section>


    <!--Page Info-->
    <section class="page-info">
        <div class="auto-container clearfix">
            <div class="pull-left"><h2>Create new blog</h2></div>
            <div class="pull-right">
               <p>You are logged in as {{ Auth::user()->name}}</p>
            </div>
        </div>
    </section>

    {{-- form to create blog --}}

    <section class="register-section">
        <div class="auto-container">
            <div class="row clearfix">
                
                <!--Form Column-->
                
                <div class="form-column column col-lg-6 col-md-6 col-sm-12 col-xs-12">
                
                    <div class="sec-title medium">
                        <h2>Create your blog here</h2>
                    </div>
                    
                    <!--Login Form-->
                    <div class="styled-form register-form">
                        <form id="blogForm" method="post" action="#" >
                            @csrf
                
                            <div class="form-group row">
                                <label for="title" class="col-md-4 col-form-label text-md-right">{{ __('Title') }}</label>
                
                                <div class="col-md-6">
                                    <input id="title" type="text" class="form-control"  name="title"  required autocomplete="title" autofocus>
                
                                    @error('title')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                
                            <div class="form-group row">
                                <label for="heading" class="col-md-4 col-form-label text-md-right">{{ __('Heading') }}</label>
                
                                <div class="col-md-6">
                                    <input id="heading" type="text" class="form-control"  name="heading"  required autocomplete="heading" autofocus>
                
                                    @error('heading')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>            
                            </div>
                
                            <div class="form-group row">
                                <label for="content" class="col-md-4 col-form-label text-md-right">{{ __('Content') }}</label>
                
                                <div class="col-md-6">
                                    <input id="content" type="text" class="form-control"  name="content"  required autocomplete="content" autofocus>
                
                                    @error('content')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="image" class="col-md-4 col-form-label text-md-right">{{ __('Image') }}</label>
                
                                <div class="col-md-6">
                                    <input  id="formFile" type="file" class="form-control"  name="image"  required autocomplete="image" autofocus>
                
                                    @error('image')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                
                
                
                
                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button id="btnSubmit" type="submit" class="btn btn-primary">
                                        {{ __('Create') }}
                                    </button>
                                </div>
                            </div>
                        </form>
                        <span id="output"></span>
                      
                    </div>
                    
                </div>
                    
                </div>
                
            </div>
        </div>
    </section>

    <script>
        $(document).ready(function (){
            $("#blogForm").submit( function (e){
                e.preventDefault();

                var form = $("#blogForm")[0];
                var data = new FormData(form);
                console.log(data);
                $("#btnSubmit").prop("disabled",true);

                $.ajax({
                    type:"POST",
                    url:"{{ route("addBlog") }}",
                    data:data,
                    processData:false,
                    contentType:false,
                    success: function(data){
                        $('#output').text(data.res);
                        $("#btnSubmit").prop("disabled",false);
                        $("input[type='text']").val('');
                        $("input[type='file']").val('');
                    },
                    error: function(e){
                        console.log(e.responseText);
                        $("#btnSubmit").prop("disabled",false);
                    }
                });
            })
        });
    </script>
   
@endsection
