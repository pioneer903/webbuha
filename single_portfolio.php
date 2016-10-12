<?php include('includes/title.inc.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>WebBuha<?php  if (isset($title)) {echo "&#8212;{$title}";} ?></title>
<meta charset="utf-8">
<?php include('includes/meta.inc.php'); ?>
<!--Google Analytics-->
<?php include_once("analyticstracking.php") ?>

<?php include_once("includes/stylesheets.php"); ?>
<?php include_once("includes/scripts.php"); ?>	
	<!-- Scripts -->
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.1/jquery.min.js"></script>
	<script type="text/javascript" src="js/jquery.roundabout-1.0.min.js"></script> 
	<script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
	<script type="text/javascript" src="js/jquery.roundabout-shapes-1.1.js"></script>
	<script type="text/javascript">			
		$(document).ready(function() { //Start up our Project Preview Carosuel
			$('ul#folio_scroller').roundabout({
				easing: 'easeOutInCirc',
				shape: 'waterWheel',
				duration: 600
			});
		});
	</script>  
	<!--[if IE 6]>
	<script src="js/DD_belatedPNG_0.0.8a-min.js"></script>
	<script>
	  /* EXAMPLE */
	  DD_belatedPNG.fix('.button');
	  
	  /* string argument can be any CSS selector */
	  /* .png_bg example is unnecessary */
	  /* change it to what suits you! */
	</script>
	<![endif]-->

</head>
<body id="page1">
<!-- div body1-->
<?php include('includes/body1.inc.php'); ?>
<!--end body1-->
	
<!-- / header -->

<!-- content -->
	<div class="body5">
		<div class="body6">
			<div class="main">
				<div class="wrapper">
					<figure class="left"><img src="images/letterP.png" alt=""></figure>
					<h2>Welcome to <span>Web Portfolio</span>!</h2>
					Collection of our work
				</div>
			</div>
		</div>
	</div>
	<div class="body7">
		<div class="main">
			<section id="content">
				<!--start wrapper2 -->
				<?php $currentPage = basename($_SERVER['SCRIPT_NAME']); ?>
	
<div class="wrapper">
	<div id="wrapper" class="container_12 clearfix">

		
		<div class=" grid_12 clearfix">&nbsp;</div>
						
			<?php 
				$page = $_GET['page'];
				if ($page)
					{
						if($page=='file_get_contents') $path = "filesystem/".$page.".php";
							else
						$path = "portfolio/portfolio_".$page.".php";
						
						if (file_exists($path))
							{
								include($path);
							}
						else
							{
								echo "Sorry, that page does not exist.";
							}
					}
					else include("includes/home.php");
			
?>	
	
	</div>
			</section>
		</div>
	</div>
			<!-- / content -->
	<!-- footer -->
		<?php include('includes/footer.inc.php'); ?>
	<!-- / footer -->
	</div>
</div>
<script type="text/javascript"> Cufon.now(); </script>
<script type="text/javascript">
	$(window).load(function() {
	$('#slider').nivoSlider({
        effect:'sliceDown', //Specify sets like: 'fold,fade,sliceDown, sliceDownLeft, sliceUp, sliceUpLeft, sliceUpDown, sliceUpDownLeft'    
        slices:20,
        animSpeed:300,
        pauseTime:3000,
        startSlide:0, //Set starting Slide (0 index)
        directionNav:true, //Next & Prev
        directionNavHide:false, //Only show on hover
        controlNav:false, //1,2,3...
        controlNavThumbs:false, //Use thumbnails for Control Nav
        controlNavThumbsFromRel:false, //Use image rel for thumbs
        controlNavThumbsSearch: '.jpg', //Replace this with...
        controlNavThumbsReplace: '_thumb.jpg', //...this in thumb Image src
        keyboardNav:true, //Use left & right arrows
        pauseOnHover:true, //Stop animation while hovering
        manualAdvance:false, //Force manual transitions
        captionOpacity:1, //Universal caption opacity
        beforeChange: function(){},
        afterChange: function(){},
        slideshowEnd: function(){} //Triggers after all slides have been shown
    });
    });
</script>
</body>
</html>