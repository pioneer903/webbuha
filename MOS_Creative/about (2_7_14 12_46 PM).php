<?php include('includes/title.inc.php'); ?>
<?php include('includes/head.php'); ?>
	<!-- jQuery and CSS for BXslider -->
	<script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
	<script src="js/jquery.bxslider.min.js"></script>		
	<script src="plugins/jquery.easing.1.3.js"></script>
	<script src="plugins/jquery.fitvids.js"></script>	
	<link rel="stylesheet" type="text/css" href="styles/jquery.bxslider.css" />

	<!-- for CaptionHover Effect -->

	<link rel="stylesheet" type="text/css" href="styles/component.css" />
	<script src="js/modernizr.custom.js"></script>

	<style >
   		.da-slide h2{
			color:#0b3050;
		}
		.da-slide .da-link{
			color:#0b3050;
		}
		.arrow{
			border-left: 7px solid #0b3050;
		}
	</style>
	
</head>
<body>
	<div id="wrapper" style="min-height:100%; position:relative;">
		<?php include('includes/diamonds.php');?>
		<header>
			<div class="row">
				<?php include('includes/navigation.php'); ?>
				<?php include('includes/about-slider.php');?>
			</div>		
		</header>
	
	<div class="shadow bg_image " style="margin-bottom:40px;">
		<div class="row">
			<h2 class="c2" style="color:#213446;" >About</h2>
		</div>
		<div class="row">
			<img src="images/whiteboard.png" class=" shadow"  style=" width:100%"/>
		</div>	
		<div class="row middleTitle" >
			<div class="sides" style=""></div>
			<div class="center">Our Services</div>
			<div class="sides"></div>
		</div><!-- #middleTitle -->	
			
			<div id="services">
				<div class="service">
					<img src="images/services_branding.png"/>
					<h3>Branding</h3>
					<p>Lorem ipsum dolor sit amet, consecte tuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. 
						enim ad minim veniam. nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. 
					</p>
				</div>
				<div class="service">
					<img src="images/services_websites.png"/>
					<h3>Web &amp; Mobile</h3>
					<p>Lorem ipsum dolor sit amet, consecte tuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. 
						enim ad minim veniam. nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. 
					</p>
	
				</div>
				<div class="service">
					<img src="images/services_printDesign.png"/>
					<h3>Graphic Design</h3>
					<p>Lorem ipsum dolor sit amet, consecte tuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. 
						enim ad minim veniam. nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. 
					</p>
	
				</div>
				<div class="service">
					<img src="images/services_video.png"/>
					<h3>Video, Animation &amp; Photography</h3>
					<p>Lorem ipsum dolor sit amet, consecte tuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. 
						enim ad minim veniam. nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. 
					</p>
	
				</div>
				<div class="service">
					<img src="images/services_seo.png"/>
					<h3>SEO, SEM &amp; Social</h3>
					<p>Lorem ipsum dolor sit amet, consecte tuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. 
						enim ad minim veniam. nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. 
					</p>
	
				</div>
				<div class="service">
					<img src="images/services_marketingStrategy.png"/>
					<h3>Marketing Strategy</h3>
					<p>Lorem ipsum dolor sit amet, consecte tuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. 
						enim ad minim veniam. nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. 
					</p>
				</div>
			</div><!-- #service -->
			
		</div><!-- #proces -->
	
	
	
	
	<?php include('includes/footer.php');?>
	
