<!DOCTYPE html>
<html>
    <head>
    <meta charset="utf8-8"/>
        <title>@yield('titulo')</title>
        <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
        <link rel="stylesheet" href="{{asset('all.css')}}">
    </head>
    <body>
    <div class="container">
     <div class="row">   
      <div class="col-md-12">         
        @yield('conteudo')     
        </div>
        </div>
        </div>
        
        <script src="{{asset('js/jquery.min.js')}}"></script>
        <script src="{{asset('js/bootstrap.js')}}"></script>
        <script src="{{asset('js/jall.min.js')}}"></script>
    </body>
</html>