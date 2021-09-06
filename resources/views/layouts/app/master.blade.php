<!DOCTYPE html>
<html lang="en">
   <head>
      <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta name="description" content="Aplikasi Monitoring dan Evaluasi Air Limbah Domestik">
      <meta name="keywords" content="Simspald">
      <meta name="author" content="simspald">
      <link rel="icon" href="{{asset('assets/images/favicon.png')}}" type="image/x-icon">
      <link rel="shortcut icon" href="{{asset('assets/images/favicon.png')}}" type="image/x-icon">
      <title>Simspald - @yield('title')</title>
      @include('layouts.app.css')
      @yield('style')
   </head>
   <body>
      <div class="page-wrapper">
           @yield('content')
      </div>
      @include('layouts.app.script')
   </body>
</html>
