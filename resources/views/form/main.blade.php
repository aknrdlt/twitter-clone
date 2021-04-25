<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <title>Project</title>
</head>
<body>
    <style>
      body {
        margin: 0;
        font-family: Arial, Helvetica, sans-serif;
      }

      .topnav {
        overflow: hidden;
        background-color: #333;
        padding-right: 150px;
      }

      .topnav a:last-child{
        right: 150px;
        position: absolute;
      }

      .topnav a {
        float: left;
        margin-right: 30px;
        color: #f2f2f2;
        text-align: center;
        padding: 14px 16px;
        text-decoration: none;
        font-size: 17px;
      }

      .topnav a:hover {
        background-color: #ddd;
        color: black;
      }

      
      .topnav> * {
        color: black;
      }

      .topnav a.active {
        background-color: #4CAF50;
        color: white;
      }
      .post{
        display: flex;
        background-color:#C7CBCE;
        padding: 15px;
        margin-top:10px;
        border-radius: 10px
      }
    
      .info{
        margin-left:20px;
        background-color:#E7E7E9;
        padding-left: 5px;
        width: 600px;
        border-radius: 10px;
        position: relative;
      }
      .author{
        position: absolute;
        bottom: 0;
        right: 15px;
      }
      .inputs{
        margin-top: 70px;
      }
      select{
        margin-top: 10px;
        max-width:50px;
        margin-left: 10px;  
        height: 30px;
        color: black;
        position: absolute;
        right: 170px;
        font-size: 20px;
      }

      option{
        color: black;
        font-size: 10px;
      }
    </style>
    <div class="container">
      <header class="header">             
        <div class="topnav">
          <a class="active" href="/index">{{ __('lang.home')}}</a>
          <a href="/upload">{{ __('lang.add')}}</a>
          <a href="/news">{{ __('lang.others')}}</a>
          <a href="{{ __('lang.set_lang')}}">{{ __('lang.set_lang')}}</a>
        </div>
      </header>
      <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('lang.login') }}</a>
                                </li>
                            @endif
                            
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('lang.register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('lang.logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
        @yield('upload')
    </div>
</body>
</html>