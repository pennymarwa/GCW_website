<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Home</title>
		<meta charset="utf-8">
		<meta name="format-detection" content="telephone=no">
		<link rel="stylesheet" href="cssgal/stuck.css">
		<link rel="stylesheet" href="cssgal/owl.carousel.css">
		
		<link rel="stylesheet" href="cssgal/touchTouch.css">
		
		<link rel="stylesheet" href="cssgal/style.css">
		<script src="jsgal/jquery.js"></script>
		<script src="jsgal/jquery-migrate-1.1.1.js"></script>
		<script src="jsgal/script.js"></script>
		<script src="jsgal/superfish.js"></script>
		<script src="jsgal/jquery.equalheights.js"></script>
		<script src="jsgal/jquery.mobilemenu.js"></script>
		<script src="jsgal/jquery.easing.1.3.js"></script>
		<script src="jsgal/tmStickUp.js"></script>
		<script src="jsgal/jquery.ui.totop.js"></script>
		<script src="jsgal/touchTouch.jquery.js"></script>
		<script src="jsgal/owl.carousel.js"></script>
		<script src="jsgal/sForm.js"></script>
		<script src="jsgal/camera.js"></script>
		<!--[if (gt IE 9)|!(IE)]><!-->
		<script src="jsgal/jquery.mobile.customized.min.js"></script>
		<!--<![endif]-->
		<script>
		$(document).ready(function(){
			jQuery('#camera_wrap').camera({
				loader: false,
				pagination: false ,
				minHeight: '200',
				thumbnails: false,
				height: '39,0625%',
				caption: true,
				navigation: true,
				fx: 'mosaic'
			});
			var owl = $("#owl");
			owl.owlCarousel({
				items : 7, //10 items above 1000px browser width
				itemsDesktop : [995,5], //5 items between 1000px and 901px
				itemsDesktopSmall : [767, 3], // betweem 900px and 601px
				itemsTablet: [700, 3], //2 items between 600 and 0
				itemsMobile : [479, 2], // itemsMobile disabled - inherit from itemsTablet option
				navigation : true,
			});
			$().UItoTop({ easingType: 'easeOutQuart' });
			$('#stuck_container').tmStickUp({});
			$('.gallery a.gal_item').touchTouch();
		});
		</script>
		<!--[if lt IE 8]>
		<div style=' clear: both; text-align:center; position: relative;'>
			<a href="http://windows.microsoft.com/en-US/internet-explorer/products/ie/home?ocid=ie6_countdown_bannercode">
				<img src="http://storage.ie6countdown.com/assets/100/images/banners/warning_bar_0000_us.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today." />
			</a>
		</div>
		<![endif]-->
		<!--[if lt IE 9]>
		<script src="jsgal/html5shiv.js"></script>
		<link rel="stylesheet" media="screen" href="cssgal/ie.css">
		<![endif]-->
	</head>
	<body class="page1" id="top">
<!--==============================header=================================-->
		<header>
			<div id="stuck_container">
				<div class="container">
					<div class="row">
						<div class="grid_12">
							<h1>
								
							</h1>
							<div class="menu_block">
								<nav class="horizontal-nav full-width horizontalNav-notprocessed">
									
								</nav>
								<div class="clear"></div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</header>
		<div class="main">
			<div class="slider_wrapper"
            align="left">
				
<!--=====================Content======================-->
			<div class="block1">
				<div class="container">
					<div class="row">
						
					</div>
				</div>
			</div>
			<section class="content">
				<div class="container">
					<div class="row">
						<div class="grid_12">
							<h2>Portfolio</h2>
							<div class="gallery">
								<div class="row">
									<div class="grid_4">
										<a href="images/005-150x150.jpg" class="gal_item">
											<img src="images/005-150x150.jpg" width="370" height="352" alt="">
											
											<span class="gal_magnify"></span>
										</a>
									</div>
									<div class="grid_4">
										<a href="images/0035-300x168.jpg" class="gal_item">
											<img src="images/0035-300x168.jpg" width="370" height="352" alt="">
											
											<span class="gal_magnify"></span>
										</a>
									</div>
									<div class="grid_4">
										<a href="images/059-300x168.jpg" class="gal_item">
											<img src="images/059-300x168.jpg" width="370" height="352" alt="">
											
											<span class="gal_magnify"></span>
										</a>
									</div>
									<div class="grid_4">
										<a href="images/023-300x168.jpg" class="gal_item">
											<img src="images/023-300x168.jpg"  width="370" height="352" alt="">
											
											<span class="gal_magnify"></span>
										</a>
									</div>
									<div class="grid_4">
										<a href="images/0101-300x168.jpg" class="gal_item">
											<img src="images/0101-300x168.jpg" width="370" height="352" alt="">
											
											<span class="gal_magnify"></span>
										</a>
									</div>
									<div class="grid_4">
										<a href="images/0281-150x150.jpg" class="gal_item">
											<img src="images/0281-150x150.jpg" width="370" height="352" alt="">
											
											<span class="gal_magnify"></span>
										</a>
									</div>
								</div>
							</div>
						</div>
						<div class="clear"></div>
						
						
						
						<div class="clear"></div>
						
						<div class="clear"></div>
					</div>
				</div>
				
			</section>
<!--==============================Bot_block=================================-->
			
		</div>
<!--==============================footer=================================-->
		
	</body>
</html>