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
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" />
  <title>Project</title>
</head>
<body>
    <style>
      body {
        margin: 0;
        font-family: Arial, Helvetica, sans-serif;
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
      /* .comments{
        width: 230px;
        margin-left: 20px;
        background-color:#E7E7E9;
        border-radius: 10px;
      } */
      .author{
        position: absolute;
        bottom: 0;
        right: 15px;
      }
      .inputs{
        margin-top: 70px;
      }
      .fa-heart {
        color: red;
        cursor: pointer;  
      }
    </style>
    <div class="container">
      <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <ul style="margin-right: 500px;" class="nav">
                  <li class="nav-item">
                    <a class="nav-link active"  href="{{url('/index')}}" >{{ __('lang.home')}}</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="{{url('/upload')}}" >{{ __('lang.add')}}</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="{{url('/news')}}" >{{ __('lang.others')}}</a>
                  </li>
                </ul> 
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                      <!--  -->
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ url('/login' ) }}">{{ __('lang.login') }}</a>
                                </li>
                            @endif
                            
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ url('/register' ) }}">{{ __('lang.register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>  
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ url('/logout' ) }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('lang.logout') }}
                                    </a>
                                    <form id="logout-form" action="{{ url('/logout' ) }}" method="POST" class="d-none">
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
        @yield('comments')
        @yield('upload')
    </div>
      <script>                
        $(document).ready(function(){
          $("#heart").click(function(){
            if($("#heart").hasClass("liked")){
              $("#heart").html('<i class="fas fa-heart fa-lg" aria-hidden="true"></i>');
              $("#heart").removeClass("liked");
            }else{
              $("#heart").html('<i class="far fa-heart fa-lg" aria-hidden="true"></i>');
              $("#heart").addClass("liked");
            }
          });
        });
      </script>
</body>
</html>