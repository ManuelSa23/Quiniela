<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title') </title>
    <meta name="csrf-token" content="{{ csrf_token()}}">
    <meta name="routeName" content="{{ Route::currentRouteName()}}">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

    <link rel="stylesheet" href="{{ url('/static/css/admin.css?v='.time())}}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui/dist/fancybox.css"/>  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400&display=swap" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="https://kit.fontawesome.com/ce553650b1.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" 
    integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js" 
    integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-
    ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1t" crossorigin="anonymous">
    <script src="{{ url('/static/libs/ckeditor/ckeditor.js')}}"></script>
    <script src="{{ url('/static/js/admin.js?v='.time())}}"></script>
    <script src="//cdn.ckeditor.com/4.19.1/standard/ckeditor.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.umd.js"></script>

    <script>
     $(document).ready(function(){
        $('[data-toggle="tooltip"]').tooltip()
     });

           
    </script>
</head>
<body>
 <div class="wrapper">
    <div class="col1">@include('admin.sidebar')</div>
    <div class="col2">
        <nav class="navbar navbar-expand-lg shadow">
            <div class="collapse navbar-collapse">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a href="{{url('/admin')}}" class="nav-link"><i class="fa-solid fa-house"></i>Inicio</a>
                    </li>

                </ul>
            </div>
        </nav>

        <div class="page">
            <div class="container-fluid">
                <nav aria-label="breadcrumb shadow">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="{{ url('/admin') }}" style="text-decoration:none"><i class="fa-solid fa-house"></i>Inicio</a>
                        </li>
                        @section('breadcrumb')
                        @show
                    </ol>
                </nav>
            </div>

            @if(Session::has('message'))
            <div class="container-fluid">
               <div class="alert alert-{{ Session::get('typealert') }} mtop16" style="display: block; margin-bottom: 16px;">
                  {{ Session::get('message')}}
                  @if($errors->any())
                  <ul>
                      @foreach($errors->all() as $error)
                          <li>{{ $error }}</li>
                      @endforeach
                  </ul>   
                  @endif
                  <script>
                      $('.alert').slideDown();
                      setTimeout(function(){ $('.alert').slideUp(); },10000);
                  </script>
               </div>
            </div>
              
          @endif
          @section('content')
          @show
        </div>
    </div>
 </div>
</body>
</html>