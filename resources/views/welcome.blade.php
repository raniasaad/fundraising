<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Fundraising</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
		.navbar-static-top{margin-bottom: 0px!important;}
		.navbar {margin-bottom: 0px!important;}
		.navbar-default{margin-bottom: 0px!important;}
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
	@extends('layouts.app')
	@section('content')
    <body>
    <div class="row" style="margin-right:0px;">
<img src="../../../fundraising/public/img/background.jpg"></img>      
	  <!-- <div class="flex-center position-ref full-height">
           @if (Route::has('login'))
                <div class="top-right links">
                    @if (Auth::check()) 
                        <a href="{{ url('/home') }}">Home</a>
                   @else 
                        <a href="{{ url('/login') }}">Login</a>
                        <a href="{{ url('/register') }}">Register</a>
                    @endif 
                </div>
             @endif 

            <div class="content" >
                

                
            </div>
        </div>-->
		</div>
    </body>
	@endsection
</html>
