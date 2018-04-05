
<!DOCTYPE html>

<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Slux +</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Free HTML5 Template by FREEHTML5.CO" />
	<meta name="keywords" content="free html5, free template, free bootstrap, html5, css3, mobile first, responsive" />
	<meta name="author" content="FREEHTML5.CO" />

  	<!-- Facebook and Twitter integration -->
	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />

	<!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
	<link rel="shortcut icon" href="favicon.ico">

	
	<!-- Animate.css -->
	<link rel="stylesheet" href="{{asset('css/animate.css')}}">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="{{asset('css/icomoon.css')}}">
	<!-- Simple Line Icons -->
	<link rel="stylesheet" href="{{asset('css/simple-line-icons.css')}}">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">
	<!-- Superfish -->
	<link rel="stylesheet" href="{{asset('css/superfish.css')}}">
	<!-- Flexslider  -->
	<link rel="stylesheet" href="{{asset('css/flexslider.css')}}">

	<link rel="stylesheet" href="{{asset('css/style.css')}}">

	<link rel="stylesheet" href="{{asset('css/styleProcedure.css')}}">
	<link rel="stylesheet" href="{{asset('css/blog-list.css')}}">
	<link rel="stylesheet" href="{{asset('css/recommend-product.css')}}">
	<link rel="stylesheet" href="{{asset('css/view-product-item.css')}}">
	<link href='https://fonts.googleapis.com/css?family=Droid+Serif|Open+Sans:400,700' rel='stylesheet' type='text/css'>

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">

	<!-- <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script> -->
	<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
	<!-- <script src="{{asset('js/carousel.js')}}"></script> -->
	<script src="{{asset('js/modernizr-2.6.2.min.js')}}"></script>
	<script src="{{asset('js/serviceSlux.js')}}"></script>
	<script src="{{asset('js/sidebar.js')}}"></script>
	<!-- <script src="{{asset('js/feedbackSlux.js')}}"></script> -->
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->

	<!-- css view-product-item -->
	<link rel="canonical" href="https://codepen.io/AttilaBre/pen/RKjaeB?depth=everything&order=popularity&page=15&q=product&show_forks=false" />
	<script src="https://use.fontawesome.com/f12e4a6b3c.js"></script>
	<!-- css view-product-item -->
	
	</head>
	<body>
		<div id="fh5co-wrapper">
			<div id="fh5co-page">
				<div id="fh5co-header">
					@include('frontEndUser.layout.header')
				</div>

				<!-- end:fh5co-header -->
				<div id="fh5co-slide-header">
					@yield('slide-header')
				</div>
				
				
				<div class="page-content">
					@yield('services')
				
					@yield('counter')
				
					@yield('procedure')

					@yield('why-choose')
					
					@yield('blog')

					@yield('feedback')

					@yield('blog-content')
					@yield('blog-list')
					@yield('product-list')
					@yield('contact')
					@yield('view-product-item')
					@yield('slux-talk')
		
					@include('frontEndUser.page-content.information')
					
				</div>

				<div class="footer">
					@include('frontEndUser.layout.footer')
				</div>
			</div>
			<!-- END fh5co-page -->

		</div>
		<!-- END fh5co-wrapper -->

		<!-- jQuery -->

		<!-- SwiperEffect Js-->
		<script >var $numberOfBullets = $(".nav-item")
			var $numberOfSlides = $(".slide");

			var counter = 0;

			function checkCounter() {
			  if(counter == 0) {
			    $("#more-up").css({"display":"none"});
			  }else if(counter == 5) {
			    $("#more-down").css({"display":"none"});
			  }else {
			    $("#more-up").css({"display":"block"});
			    $("#more-down").css({"display":"block"});
			  }
			}

			$(document).ready(function () {

			  /// MOVING BIG SLIDES
			  $(".nav-item").click(function () {
			    var indexOfBullet = $(this).index();
			    $("#slides").css({"left": "-500" * indexOfBullet, "transition": "1s" });
			  });

			  /// MOVING SMALL SLIDES
			  $("#more-down").click(function () {
			    $("#nav-images").css({"top": "-100" * ++counter, "transition": "1s"});
			    checkCounter();
			  });
			  $("#more-up").click(function () {
			    $("#nav-images").css({"top": "-100" * --counter, "transition": "1s"});
			    checkCounter();
			  });

			});

			//# sourceURL=pen.js
			</script>
		<script src='https://cdnjs.cloudflare.com/ajax/libs/Swiper/3.3.1/js/swiper.min.js'></script>
		<script type="text/javascript" src="{{asset('js/carousel.js')}}"></script>
		
		<!-- SwiperEffect Js-->

		<script src="{{asset('js/jquery.min.js')}}"></script>
		<!-- jQuery Easing -->
		<script src="{{asset('js/jquery.easing.1.3.js')}}"></script>
		<!-- Bootstrap -->
		<script src="{{asset('js/bootstrap.min.js')}}"></script>
		<!-- Waypoints -->
		<script src="{{asset('js/jquery.waypoints.min.js')}}"></script>
		<!-- Superfish -->
		<script src="{{asset('js/hoverIntent.js')}}"></script>
		<script src="{{asset('js/superfish.js')}}"></script>
		<!-- Flexslider -->
		<script src="{{asset('js/jquery.flexslider-min.js')}}"></script>
		<!-- Stellar -->
		<script src="{{asset('js/jquery.stellar.min.js')}}"></script>
		<!-- Counters -->
		<script src="{{asset('js/jquery.countTo.js')}}"></script>

		<!-- Main JS (Do not remove) -->
		<script src="{{asset('js/main.js')}}"></script>
		<script src="{{asset('js/procedure.js')}}"></script>
	</body>
</html>

