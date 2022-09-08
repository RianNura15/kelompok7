<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8">
      <title>Halaman @yield('title')</title>
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <!--enable mobile device-->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <!--fontawesome css-->
      <link rel="stylesheet" href="{{asset('css/font-awesome.min.css')}}">
      <!--bootstrap css-->
      <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
      <!--animate css-->
      <link rel="stylesheet" href="{{asset('css/animate-wow.css')}}">
      <!--main css-->
      <link rel="stylesheet" href="{{asset('css/style.css')}}">
      <link rel="stylesheet" href="{{asset('css/bootstrap-select.min.css')}}">
      <link rel="stylesheet" href="{{asset('css/slick.min.css')}}">
      <!--responsive css-->
      <link rel="stylesheet" href="{{asset('css/responsive.css')}}">
   </head>
   <body>
      @yield('content')
      <!--main js--> 
      <script src="{{asset('js/jquery-1.12.4.min.js')}}"></script> 
      <!--bootstrap js--> 
      <script src="{{asset('js/bootstrap.min.js')}}"></script> 
      <script src="{{asset('js/bootstrap-select.min.js')}}"></script>
      <script src="{{asset('js/slick.min.js')}}"></script> 
      <script src="{{asset('js/wow.min.js')}}"></script>
      <!--custom js--> 
      <script src="{{asset('js/custom.js')}}"></script>
   </body>
</html>