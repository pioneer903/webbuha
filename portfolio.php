<?php include('includes/title.inc.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>WebBuha<?php  if (isset($title)) {echo "&#8212;{$title}";} ?></title>
<?php include('includes/meta.inc.php'); ?>
<!--Google Analytics-->
<?php include_once("analyticstracking.php") ?>
<?php include_once("includes/stylesheets.php"); ?>
<?php include_once("includes/scripts.php"); ?>

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
					
			

       
   <section class="group5">
    <div class="grid_9">
				<a class="portfolio_item float alpha"  href="single_portfolio.php?page=MOS_Creative" >
					<span>MOS Creative</span>
					<img class="" src="images/portfolio_images/MOS_Creative_200x135.png"  alt="MOS_Creative"/>
				</a>
				<a class="portfolio_item float " href="single_portfolio.php?page=DH-vision">
					<span>DH-vision</span>
					<img class="" src="images/portfolio_images/DH-vision_200x135.png"  alt="DH-vision"/>
				</a>
				<a class="portfolio_item float omega" href="single_portfolio.php?page=Blue_Chip_Lacrosse">
					<span>Blue Chip Lacrosse</span>
					<img class="" src="images/portfolio_images/Blue_Chip_Lacrosse_200x135.png"  alt="Blue_Chip_Lacrosse"/>
				</a>
				<a class="portfolio_item float alpha"  href="single_portfolio.php?page=Bayside_Skillet" >
					<span>Bayside Skillet</span>
					<img class="" src="images/portfolio_images/Bayside-Skillet-200x135.png"  alt="Bayside-Skillet"/>
				</a>
				<a class="portfolio_item float " href="single_portfolio.php?page=JY_Computer_Services">
					<span>JY Computer Services</span>
					<img class="" src="images/portfolio_images/JY_Computer_Services_200x135.png"  alt="JY_Computer_Services_200x135"/>
				</a>
				<a class="portfolio_item float omega" href="single_portfolio.php?page=Golf1">
					<span>Golf Club v1</span>
					<img class="" src="images/portfolio_images/Golf1_200x135.png"  alt="portfolio_Golf1"/>
				</a>
				<a class="portfolio_item float alpha" href="single_portfolio.php?page=Cheap_Computer_Service">
					<span>Cheap Computer Service</span>
					<img class="" src="images/portfolio_images/Cheap_Computer_Service_200x135.png"  alt="Cheap_Computer_Service"/>
				</a>
				<a class="portfolio_item float " href="single_portfolio.php?page=Oceanic_Taxi">
					<span>Oceanic Taxi</span>
					<img class="" src="images/portfolio_images/Oceanic_Taxi_200x135.png"  alt=""/>
				</a>
				<a class="portfolio_item float omega"  href="single_portfolio.php?page=Yuriy_Buha">
					<span>Yuriy Buha</span>
					<img class="" src="images/portfolio_images/Yuriy_Buha_200x135.png"  alt="Yuriy_Buha"/>
				</a>
				<a class="portfolio_item float alpha" href="single_portfolio.php?page=Express_Computers">
					<span>Express Computers</span>
					<img class="" src="images/portfolio_images/Express_Computers_200x135.png"  alt="Express_Computers"/>
				</a>
				<a class="portfolio_item float " href="single_portfolio.php?page=Sunshine_Crepes">
					<span>Sunshine Crepes</span>
					<img class="" src="images/portfolio_images/Sunshine_Crepes_200x135.png"  alt="Sunshine_Crepes"/>
				</a>
				<a class="portfolio_item float omega" href="single_portfolio.php?page=OC_Yellow_Taxi">
					<span>OC Yellow Taxi</span>
					<img class="" src="images/portfolio_images/OC_Yellow_Taxi_200x135.png"  alt="OC_Yellow_Taxi_200x135"/>
				</a>

                                
				<!--<a class="portfolio_item float omega" href="single_portfolio.php?page=Webbuha">
					<span>WebBuha</span>
					<img class="" src="images/portfolio_images/WebBuha_200x135.png"  alt="Webbuha_200x135"/>
				</a>-->
			</div>


	</section>
					
				</div><!--end wrapper2-->
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