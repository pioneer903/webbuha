<?php include('includes/title.inc.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>WebBuha<?php  if (isset($title)) {echo "&#8212;{$title}";} ?></title>
<?php include('includes/meta.inc.php'); ?>
<!--Google Analytics-->
<?php include_once("analyticstracking.php") ?>
<?php include_once("analyticstracking.php") ?>
<?php include_once("includes/stylesheets.php"); ?>
<?php include_once("includes/scripts.php"); ?>

</head>
<body id="page1">


<!-- div body1-->
<?php include('includes/body1.inc.php'); ?>
<!--end body1-->
	<div class="body3">
		<div class="body4">
			<div class="main">
				<div class="slogan">
					<div id="slider">
						<img src="images/text1.jpg" alt="">	
						<img src="images/text2.jpg" alt="">	
						<img src="images/text3.jpg" alt="">				
						<img src="images/text4.jpg" alt="">	
					</div>
				</div>
			</div>
		</div>
	</div>
<!-- / header -->

<!-- content -->
	<div class="body5">
		<div class="body6">
			<div class="main">
				<div class="wrapper">
					<figure class="left"><img src="images/letterw.png" alt=""></figure>
					<h2>Welcome to <span>WebBuha</span>!</h2>
					Are you looking to promote your business? Do you want to let the world know about you?</br>
					Congradulations! You've made the best choice where to start with!
				</div>
			</div>
		</div>
	</div>
	<div class="body7">
		<div class="main">
			<section id="content">
				<!--start wrapper 1 with three pads-->
				<?php include('includes/wrapper1.php'); ?>
				<!--end wrapper 1 with three pads-->
				
				<!--start wrapper2 -->
				<?php //include('includes/wrapper2.php'); ?>
				<!--end wrapper2 -->
				
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