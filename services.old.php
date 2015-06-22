<?php include('includes/title.inc.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>WebBuha<?php  if (isset($title)) {echo "&#8212;{$title}";} ?></title>
<?php include('includes/meta.inc.php'); ?>
<link rel="stylesheet" href="css/reset.css" type="text/css" media="all">
<link rel="stylesheet" href="css/layout.css" type="text/css" media="all">
<link rel="stylesheet" href="css/style.css" type="text/css" media="all">
<script type="text/javascript" src="js/jquery-1.4.2.js" ></script>
<script type="text/javascript" src="js/cufon-yui.js"></script>
<script type="text/javascript" src="js/cufon-replace.js"></script>  
<script type="text/javascript" src="js/Copse_400.font.js"></script>
<script type="text/javascript" src="js/jquery.nivo.slider.pack.js"></script>
<script type="text/javascript" src="js/imagepreloader.js"></script>
<script type="text/javascript">
	preloadImages([
	'images/menu1_active.gif',
	'images/menu2_active.gif',
	'images/menu3_active.gif',
	'images/menu4_active.gif',
	'images/marker_right_active.jpg',
	'images/marker_left_active.jpg',
	'images/menu5_active.gif']);
</script>
<!--[if lt IE 9]>
	<script type="text/javascript" src="http://info.template-help.com/files/ie6_warning/ie6_script_other.js"></script>
	<script type="text/javascript" src="js/html5.js"></script>
<![endif]-->

</head>
<body id="page1">

<!--Google Analytics-->
<?php include_once("analyticstracking.php") ?>

<!-- div body1-->
<?php include('includes/body1.inc.php'); ?>
<!--end body1-->
	
<!-- / header -->

<!-- content -->
	<div class="body5">
		<div class="body6">
			<div class="main">
				<div class="wrapper">
					<figure class="left"><img src="images/letterS.png" alt=""></figure>
					<h2>Best Services for the <span>Best Customers</span>!</h2>
					Your 100% satisfaction is our goal!
				</div>
			</div>
		</div>
	</div>
	
	<div class="body7">
		<div class="main">
			<section id="content">
				
				<div class="wrapper">
					<article class="col2">
<ul class="list2">
    <li> Custom and unique design of personal and business websites.</li>
   	<li>Website promotion</li>
	<li>Constant Web Site Maintenance & Hosting	</li>
	<li>Content Management Systems (CMS)	</li>
	<li>Google Analytics setup and maintenance</li>
	<li>Logo Design </li>
	<li>Search engine optimization</li>
	<li>Pay per click marketing</li>
	<li>Graphic design</li>
	<li>Restaurant Web Design</li>
	<li>Small Business Web Design</li>
	<li>Personal or Business Blog</li>
	<!-- <li><a href="estimates.php">Estimate prices</a></li>	 -->
 </ul> 
     
  <p> To see our work check out <a href="portfolio.php">Portfolio page</a></p>
   
       
       <p>Provide your business description and personal wishes, and we'll do the rest!</p>
       
	    <p> WebBuha provides website marketing. You can also do it yourself. To add website manually to one of the suggested web sites use <a target="_blank" href="http://www.activesearchresults.com/addwebsite.php">Active Search Results Search Engine. </a> 
<br/>
Use form below to Submit your site to 20+ search engines
<script language='javascript' src='http://www.freewebsubmission.com/js/remote-submit.js'></script>
					
Useful links:
<ul class="list2">
        <li ><a target="_blank" href="http://www.submitexpress.com/sitemap-submission.html">Submit your XML Sitemap to Google, Bing and Ask. </a>  </li>
   	<li ><a target="_blank" href="http://markosweb.com/">SmartViper Website Analytics</a>  </li>
        <li ><a target="_blank" href="http://intelseek.com/">Submit Site for FREE on IntelSeek </a>  </li>
        <li ><a target="_blank" href="http://www.tools4google.com/search-google-position/keyword_tracking.php">Search Google™ Position </a>  </li>
        <li ><a target="_blank" href="http://www.prcheckingtool.com/">Page Ranking Checker</a>  </li>
        <li ><a target="_blank" href="http://www.google.com/trends/">Google Trends</a>  </li>
        <li ><a target="_blank" href=""> </a>  </li>
        <li ><a target="_blank" href=""> </a>  </li>

 </ul> 
	
					</article>
					<!-- Right sidebar -->
					<?php include('right_sidebar.inc.php'); ?>
				</div>
				
			</section>
		</div>
	</div>
<!-- / content -->
			<section id="content">
				<!--start wrapper2 -->
				<?php $currentPage = basename($_SERVER['SCRIPT_NAME']); ?>
<div class="wrapper">
					

			

   				
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