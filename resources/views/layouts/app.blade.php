<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
            <title>@yield('pageTitle') - Green Earth </title>
		<meta name="description" content="{{setting('site.description')}}">
		<meta name="author" content="صاحب الموقع">
		
		<!-- Mobile Meta -->
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		
		<!-- Put favicon.ico and apple-touch-icon(s).png in the images folder -->
	    <link rel="shortcut icon" href="images/favicon.ico">
		    	
		<!-- CSS StyleSheets -->
		<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,700,800&amp;amp;subset=latin,latin-ext">
		<link rel="stylesheet" href="/css/font-awesome.min.css">
		<link rel="stylesheet" href="/css/animate.css">
		<link rel="stylesheet" href="/css/prettyPhoto.css">
		<link rel="stylesheet" href="/css/slick.css">
		<link rel="stylesheet" href="/rs-plugin/css/settings.css">
		<link rel="stylesheet" href="/css/style.css">
		<link rel="stylesheet" href="/css/responsive.css">
        <link rel="stylesheet" type="text/css" href="/sliderengine/amazingslider-0.css">
		<!--[if lt IE 9]>
	    	<link rel="stylesheet" href="css/ie.css">
	    	<script type="text/javascript" src="js/html5.js"></script>
	    <![endif]-->

		
		<!-- Skin style (** you can change the link below with the one you need from skins folder in the css folder **) -->
		<link rel="stylesheet" href="/css/skins/default.css">
	
	</head>
	<body>
	    
	    <!-- site preloader start -->
	    <div class="page-loader">
	    	<div class="loader-in"></div>
	    </div>
	    <!-- site preloader end -->
	    
	    <div class="pageWrapper">
		    
			<!-- Header Start -->
			<div id="headWrapper" class="clearfix">
            
            <!-- Content Start -->
			<div id="contentWrapper">
                @yield('content')
            </div>
	       <!-- Content End -->

		    
		    <!-- Back to top Link -->
	    	<div id="to-top" class="main-bg"><span class="fa fa-chevron-up"></span></div>
	    	
	    </div>
	    

	    <!-- Load JS siles -->	
 		<script type="text/javascript" src="/js/jquery.min.js"></script>
		<script type="text/javascript" src="/js/jquery.animateNumber.min.js"></script>
		<script type="text/javascript" src="/js/jquery.prettyPhoto.js"></script>
		
		<!-- Input placeholder plugin -->
		<script type="text/javascript" src="/js/jquery.placeholder.js"></script>
		
		<!-- NiceScroll plugin -->
		<script type="text/javascript" src="/js/jquery.nicescroll.min.js"></script>
		
		<!-- general script file -->
		<script type="text/javascript" src="/js/script.js"></script>
	</body>
</html>