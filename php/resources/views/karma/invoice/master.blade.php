<!DOCTYPE html>
<!--[if lt IE 7]>  <html class="ie ie6 lte9 lte8 lte7 no-js"> <![endif]-->
<!--[if IE 7]>     <html class="ie ie7 lte9 lte8 lte7 no-js"> <![endif]-->
<!--[if IE 8]>     <html class="ie ie8 lte9 lte8 no-js">      <![endif]-->
<!--[if IE 9]>     <html class="ie ie9 lte9 no-js">           <![endif]-->
<!--[if gt IE 9]>  <html class="no-js">                       <![endif]-->
<!--[if !IE]><!--> <html class="no-js">                       <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

    <title>Natural Body Care</title>

    <!-- // IOS webapp icons // -->
    
    <meta name="apple-mobile-web-app-title" content="Natural Body Care">
    <link rel="apple-touch-icon-precomposed" sizes="152x152" href="{{ URL::asset('assets/images/mobile/apple-touch-icon-152x152.png') }}" />
	<link rel="apple-touch-icon-precomposed" sizes="144x144" href="{{ URL::asset('assets/images/mobile/apple-touch-icon-144x144.png') }}">
    <link rel="apple-touch-icon-precomposed" sizes="120x120" href="{{ URL::asset('assets/images/mobile/apple-touch-icon-120x120.png') }}" />
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="{{ URL::asset('assets/images/mobile/apple-touch-icon-114x114.png') }}" />
    <link rel="apple-touch-icon-precomposed" sizes="76x76" href="{{ URL::asset('assets/images/mobile/apple-touch-icon-76x76.png') }}" />
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="{{ URL::asset('assets/images/mobile/apple-touch-icon-72x72.png') }}" />
    <link rel="apple-touch-icon-precomposed" href="{{ URL::asset('assets/images/mobile/apple-touch-icon.png') }}" />
    <link rel="shortcut icon" href="{{ URL::asset('assets/images/favicons/favicon.ico') }}" />
    
    <!-- // IOS webapp splash screens // -->
    
    <link rel="apple-touch-startup-image" media="(device-width: 768px) and (device-height: 1024px) and (orientation: portrait) and (-webkit-device-pixel-ratio: 2)"
          href="{{ URL::asset('assets/images/mobile/apple-touch-startup-image-1536x2008.png') }}"/>
    <link rel="apple-touch-startup-image" media="(device-width: 768px) and (device-height: 1024px) and (orientation: landscape) and (-webkit-device-pixel-ratio: 2)"
          href="{{ URL::asset('assets/images/mobile/apple-touch-startup-image-1496x2048.png') }}"/>     
 	<link rel="apple-touch-startup-image" media="(device-width: 768px) and (device-height: 1024px) and (orientation: portrait) and (-webkit-device-pixel-ratio: 1)"
          href="{{ URL::asset('assets/images/mobile/apple-touch-startup-image-768x1004.png') }}"/>
    <link rel="apple-touch-startup-image" media="(device-width: 768px) and (device-height: 1024px) and (orientation: landscape) and (-webkit-device-pixel-ratio: 1)"
          href="{{ URL::asset('assets/images/mobile/apple-touch-startup-image-748x1024.png') }}"/>
    <link rel="apple-touch-startup-image" media="(device-width: 320px) and (device-height: 568px) and (-webkit-device-pixel-ratio: 2)" 
          href="{{ URL::asset('assets/images/mobile/apple-touch-startup-image-640x1096.png') }}"/>    
    <link rel="apple-touch-startup-image" media="(device-width: 320px) and (device-height: 480px) and (-webkit-device-pixel-ratio: 2)"
          href="{{ URL::asset('assets/images/mobile/apple-touch-startup-image-640x920.png') }}"/>    
    <link rel="apple-touch-startup-image" media="(device-width: 320px) and (device-height: 480px) and (-webkit-device-pixel-ratio: 1)"
          href="{{ URL::asset('assets/images/mobile/apple-touch-startup-image-320x460.png') }}"/>    
    
    <!-- // Windows 8 tile // -->
    
    <meta name="application-name" content="Natural Body Care">
    <meta name="msapplication-TileColor" content="#333333" />
	<meta name="msapplication-TileImage" content="images/mobile/windows8-icon.png') }}" />

    <!-- // Handheld devices misc // -->
    
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="HandheldFriendly" content="true"/>   
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" /> 
    
    <!-- // Stylesheets // -->
    
    <link rel="stylesheet" href="{{ URL::asset('assets/bootstrap/core/dist/css/bootstrap.min.css') }}"/>
    <link rel="stylesheet" href="{{ URL::asset('assets/css/bootstrap-custom.css') }}"/>
    <link rel="stylesheet" href="{{ URL::asset('assets/css/bootstrap-extended.css') }}"/>
    <link rel="stylesheet" href="{{ URL::asset('assets/css/login.css') }}"/>
    <link rel="stylesheet" href="{{ URL::asset('assets/css/light-theme.css') }}"/>
    
    <!-- // Helpers // -->
    
    <script src="{{ URL::asset('assets/js/plugins/modernizr.min.js') }}"></script> 
    <script src="{{ URL::asset('assets/js/plugins/mobiledevices.js') }}"></script>
    
    <!-- // jQuery core // -->
    
    <script src="{{ URL::asset('assets/js/libs/jquery-1.11.0.min.js') }}"></script>
    <script src="{{ URL::asset('assets/js/libs/jquery-ui-1.10.4.min.js') }}"></script>
    
    <!-- // Bootstrap // -->
    
    <script src="bootstrap/core/dist/js/bootstrap.min.js') }}"></script>

    <!-- // Custom/premium plugins // -->

    <script src="{{ URL::asset('assets/js/plugins/showpassword.1.0.min.js') }}"></script>
    <script src="{{ URL::asset('assets/js/plugins/nanogress.1.0.min.js') }}"></script>
    <script src="{{ URL::asset('assets/js/plugins/powerwizard.1.0.min.js') }}"></script>
    
    <!-- // Third-party plugins // -->
    
    <script src="{{ URL::asset('assets/js/plugins/jquery.pwstrength.min.js') }}"></script>

    <!-- // Custom //-->
    
    <script src="{{ URL::asset('assets/js/plugins/login.js') }}"></script>     
     
</head>
<body> 
	<div id="container-signup" class="clearfix">    
<!--     	<div id="demo-overview">
        	<a href="index.html">Dashboard</a>
            |
            <a href="reset.html">Reset</a>
            |
            <a href="login.html">Login 1</a>
            |
            <a href="login2.html">Login 2</a>
            |
            <a href="forgot.html">Forgot</a>
        </div>-->
<div class="spacer-40"></div>
            @yield('content')
            
</body>
</html>