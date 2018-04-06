<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>
<title>Ability Bootstarp Website Template | About :: w3layouts</title>
<!-- Custom Theme files -->
<link href="cssgal/style.css" rel='stylesheet' type='text/css' />
<!-- Custom Theme files -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--webfont-->
<link href='http://fonts.googleapis.com/css?family=Lato:100,200,300,400,500,600,700,800,900' rel='stylesheet' type='text/css'>
<!----font-Awesome----->
<link rel="stylesheet" href="fonts/cssgal/font-awesome.min.css">
<!----font-Awesome----->
<!------ light-box-script ----->
<script src="jsgal/jquery.chocolat.js"></script>
<link rel="stylesheet" href="cssgal/chocolat.css" type="text/css" media="screen" charset="utf-8" />
<script type="text/javascript" charset="utf-8">
	$(function() {
		$('.about-grid a').Chocolat({linkImages:false});
	});
</script>
<!------ light-box-script ----->
</head>
<body>
   
        <!--script-->
		<script>
			$(document).ready(function(){
				$(".top-nav li a").click(function(){
					$(this).parent().addClass("active");
					$(this).parent().siblings().removeClass("active");
				});
			});
		</script>
			<!-- script-for sticky-nav -->
		<script>
		$(document).ready(function() {
			 var navoffeset=$(".header-home").offset().top;
			 $(window).scroll(function(){
				var scrollpos=$(window).scrollTop(); 
				if(scrollpos >=navoffeset){
					$(".header-home").addClass("fixed");
				}else{
					$(".header-home").removeClass("fixed");
				}
			 });
			 
		});
		</script>
		<!-- /script-for sticky-nav -->
	<!--//header-->
	
	<div class="gridd_3">
		<div class="container"> 
			<h3>Gallery</h3>
		  <div class="about-grids">
						<div class="col-sm-3 about-grid">
							<a href="imagesgal/059-300x168.jpg" title="name" rel="title2">
						    <div class="view view-first">
                              <img src="imagesgal/059-300x168.jpg" width="265" height="300"  class="img-responsive" alt=""/>
                              <div class="mask">
                                <div class="info"><img src="imagesgal/magnify-alt.png" alt=""></div>
		                      </div>
                             </div>
							</a>
							
						</div>
						<div class="col-sm-3 about-grid">
							<a href="imagesgal/023-300x168.jpg" title="name" rel="title2">
						    <div class="view view-first">
                              <img src="imagesgal/023-300x168.jpg" width="265" height="300"  class="img-responsive" alt=""/>
                              <div class="mask">
                                <div class="info"><img src="imagesgal/magnify-alt.png" alt=""></div>
		                      </div>
                             </div>
							</a>
							
						</div>
						<div class="col-sm-3 about-grid">
							<a href="imagesgal/019-300x168.jpg" title="name" rel="title2">
						    <div class="view view-first">
                              <img src="imagesgal/019-300x168.jpg" class="img-responsive" width="265" height="300" alt=""/>
                              <div class="mask">
                                <div class="info"><img src="imagesgal/magnify-alt.png" alt=""></div>
		                      </div>
                             </div>
							</a>
							
						</div>
						<div class="col-sm-3 about-grid">
							<a href="imagesgal/015-300x168.jpg" title="name" rel="title2">
						    <div class="view view-first">
                              <img src="imagesgal/015-300x168.jpg" width="265" height="300"  class="img-responsive" alt=""/>
                              <div class="mask">
                                <div class="info"><img src="imagesgal/magnify-alt.png" alt=""></div>
		                      </div>
                             </div>
							</a>
							
						</div>
				        <div class="clearfix"> </div>
	      </div>
	   </div>
	</div>
	
   
	
</body>
</html>		