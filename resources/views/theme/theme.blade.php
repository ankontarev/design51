<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>@yield('title')</title>
    <meta name="description" content="@yield('description')">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Favicon -->
    <link rel="icon" href="{{asset('/assets/favicon/s2-favicon.png')}}" type="image/png">

    <!-- Bootstrap CSS -->
    <link href="{{asset('/css/app.css')}}" rel="stylesheet">
    <link href="{{asset('/css/custom.css')}}" rel="stylesheet">

    @yield('css')
</head>
@if(Session::has('cookiesetting'))
  @if ($message = Session::get('cookiesetting'))
    @if($message['marketing'] == 1 )
<!-- Google Analytics CODE HERE -->
<!-- end Google Analytics -->
    @endif
  @endif
@endif
<body>
@yield('content')
    <!-- jQuery -->
    <script src="{{asset('/js/app.js')}}"></script>

@if(Session::has('cookiesetting'))
  @if ($message = Session::get('cookiesetting'))
    @if($message['marketing'] == 1 )
<!-- Facebook Pixel Code HERE -->
<!-- End Facebook Pixel Code -->
    @endif
  @endif
@endif

@yield('js')
</body>
</html>