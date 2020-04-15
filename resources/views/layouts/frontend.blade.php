<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
  <meta name="description" content="Owner's corporation management portal">
  <meta name="keywords" content="">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <meta name="user-token" content="{{ auth()->user()->role ?? 'user' }}">
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

  <title>
      {{ config('app.name') }} - @yield('title')
  </title>
    
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="{{asset('css/frontend/bootstrap.min.css')}}">
  <link rel="stylesheet" href="{{asset('css/frontend/jquery-ui.min.css')}}">
  <link rel="stylesheet" href="{{asset('css/frontend/animate.css')}}">
  <link rel="stylesheet" href="{{asset('css/frontend/css-plugin-collections.css')}}">
  <link rel="stylesheet" href="{{asset('css/frontend/menuzord-skins/menuzord-rounded-boxed.css')}}">
  <!-- Main Style File -->
  <link rel="stylesheet" href="{{asset('css/frontend/style-main.css')}}">
  <link rel="stylesheet" href="{{asset('css/frontend/preloader.css')}}">
  <link rel="stylesheet" href="{{asset('css/frontend/custom-bootstrap-margin-padding.css')}}">
  <!-- CSS | Responsive media queries -->
  <link rel="stylesheet" href="{{asset('css/frontend/responsive.css')}}">
  <!-- CSS | Theme Color -->
  <link rel="stylesheet" href="{{asset('css/frontend/colors/theme-skin-green.css')}}">
  <!-- Revolution Slider StyleSheet --> 
  <link rel="stylesheet" href="{{asset('js/frontend/revolution-slider/css/settings.css')}}">
  <link rel="stylesheet" href="{{asset('js/frontend/revolution-slider/css/layers.css')}}">
  <link rel="stylesheet" href="{{asset('js/frontend/revolution-slider/css/settings.css')}}">

  
</head>
<body>

<div class="wrapper">
        
      @yield('content')

</div>
<!-- ./wrapper -->


<!-- jQuery 3 -->
<script src="{{asset('js/frontend/jquery-2.2.4.min.js')}}"></script>
<!-- jQuery UI 1.11.4 -->
<script src="{{asset('js/frontend/jquery-ui.min.js')}}"></script>
<script src="{{asset('js/frontend/bootstrap.min.js')}}"></script>
<script src="{{asset('js/frontend/jquery-plugin-collection.js')}}"></script>
<!-- Revolution Slider -->
<script src="{{asset('js/frontend/revolution-slider/js/jquery.themepunch.tools.min.js')}}"></script>
<script src="{{asset('js/frontend/revolution-slider/js/jquery.themepunch.revolution.min.js')}}"></script>
<!-- Custom JS -->
<script src="{{asset('js/frontend/custom.js')}}"></script>


</body>
</html>
