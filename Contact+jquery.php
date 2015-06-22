<?php include('includes/title.inc.php'); 
include('includes/corefuncs.php');
if (function_exists('nukeMagicQuotes')) {
  nukeMagicQuotes();
  }
include('includes/process_contact_form.php');?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>WebBuha<?php  if (isset($title)) {echo "&#8212;{$title}";} ?></title>
<meta charset="utf-8">
<link rel="stylesheet" href="css/reset.css" type="text/css" media="all">
<link rel="stylesheet" href="css/layout.css" type="text/css" media="all">
<link rel="stylesheet" href="css/style.css" type="text/css" media="all">
<script type="text/javascript" src="js/jquery-1.4.2.js" ></script>
<script type="text/javascript" src="js/cufon-yui.js"></script>
<script type="text/javascript" src="js/cufon-replace.js"></script>  
<script type="text/javascript" src="js/Copse_400.font.js"></script>
<script type="text/javascript" src="js/imagepreloader.js"></script>
<script type="text/javascript">
	preloadImages([
	'images/menu1_active.gif',
	'images/menu2_active.gif',
	'images/menu3_active.gif',
	'images/menu4_active.gif',
	'images/menu5_active.gif']);
</script>
<!--[if lt IE 9]>
	<script type="text/javascript" src="http://info.template-help.com/files/ie6_warning/ie6_script_other.js"></script>
	<script type="text/javascript" src="js/html5.js"></script>
<![endif]-->
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.0/jquery.min.js"></script>
<script type='text/javascript' src='js/y_script.js'></script>
</head>
<body id="page5">
  <script>$(document).ready(function() {
  alert('Welcome to StarTrackr! Now no longer under police ...');
});
  </script>
  
<!-- div body1-->
<?php include('includes/body1.inc.php'); ?>
<!--end body1-->
	
<!-- / header -->
<!-- content -->
	<div class="body5">
		<div class="body6">
			<div class="main">
				<div class="wrapper">
					<figure class="left"><img src="images/letter5.png" alt=""></figure>
					<h2>Your Comments Are <span>Highly Appreciated</span>!</h2>
					Any questions, suggestions, or wishes?</br>
						Let us know!				
				</div>
			</div>
		</div>
	</div>
	<div class="body7">
		<div class="main">
			<section id="content">
				
				<div class="wrapper">
					<article class="col2">
						<div class="pad1">
							<h2>Contact Form</h2>
							 	 <!--start contact form-->
    <?php 
    if ($_POST && isset($missing)) {
	?>
		<p class="warning">Please complete the missing item(s) indicated.</p>
		<?php
		}
		elseif ($_POST && !$mailSent) {
		?>
		<p class="warning">Sorry, there was a problem sending your message. 
		Please try later.</p>
		<?php
		}
		elseif ($_POST && $mailSent) {
		?>
	<p><strong>Your message has been sent. Thank you for your feedback.
	</strong></p>
<?php } ?>

							
							<form id="ContactForm" method="post">
								<div>
									<div  class="wrapper">
										<strong>Name:</strong>
										<div class="bg"><input type="text" class="input" ></div>
									</div>
									<div  class="wrapper">
										<strong>Email:</strong>
										<div class="bg"><input type="text" class="input" >	</div>							
									</div>
									<div  class="textarea_box">
										<strong>Message:</strong>
										<div class="bg"><textarea name="textarea" cols="1" rows="1"></textarea>		</div>						
									</div>
									<a href="#" class="button" onClick="document.getElementById('ContactForm').submit()"><span><span>Send</span></span></a>
									<a href="#" class="button" onClick="document.getElementById('ContactForm').reset()"><span><span>Clear</span></span></a>
								</div>
							</form>
						</div>	
						
					</article>
					<article class="col1 pad_left1">
						<h2>Advantages</h2>
						<ul class="list2">
							<li><a href="#"><img src="images/icon1.jpg" alt="">Starting up</a></li>
							<li><a href="#"><img src="images/icon2.jpg" alt="">Finance and grants</a></li>
							<li><a href="#"><img src="images/icon3.jpg" alt="">Taxes, returns &amp; payroll</a></li>
							<li><a href="#"><img src="images/icon4.jpg" alt="">Employment &amp; skills</a></li>
							<li class="bg_none"><a href="#"><img src="images/icon5.jpg" alt="">Health, safety, premises</a></li>
						</ul>
						<div class="box1"><div class="box1_bot"><div class="box1_top">
							<div class="pad">
								<h2>Newsletter</h2>
								Sign up for weekly newsletter:
								<form id="sign_up" method="post">
									<div>
										<input type="text" class="input">
										<a href="#" name="send" id="send" type="submit" onClick="document.getElementById('sign_up').submit()">Sign up</a>
									</div>
								</form>
							</div>
						</div></div></div>
					</article>
				</div>
				
			</section>
		</div>
	</div>
<!-- / content -->
<!-- footer -->
	<div class="body8">
	<div class="body9">
		<div class="main">
			<footer>
				<div class="col_1">
					<h3>Social Networks</h3>
					<ul class="list3">
						<li><a href="#">Twitter</a></li>
						<li><a href="#">Facebook</a></li>
						<li><a href="#">Flickr</a></li>
						<li><a href="#">Blogger</a></li>
					</ul>
				</div>
				<div class="col_2 pad_left1">
					<h3>Quick Solutions</h3>
					<div class="wrapper">
						<ul class="list3 col_1">
							<li><a href="#">Management Consulting</a></li>
							<li><a href="#">Policy and Regulatory</a></li>
							<li><a href="#">Market Assessment</a></li>
							<li><a href="#">Program Management</a></li>
						</ul>
						<ul class="list3 col_1 pad_left1">
							<li><a href="#">Regulatory Support</a></li>
							<li><a href="#">Risk Assessment</a></li>
							<li><a href="#">Change Management</a></li>
							<li><a href="#">Info Technology</a></li>
						</ul>
					</div>
				</div>
				<div class="col_3">
					<a href="index.html" id="footer_logo">First</a>
					<p class="center"><a rel="nofollow" href="http://www.templatemonster.com/" target="_blank">Website template</a><br>
							designed by TemplateMonster.com</p>
					<p class="center">
							<a href="http://www.templates.com/product/3d-models/" target="_blank">3D Models</a><br>
							provided by Templates.com</p>
				</div>
			</footer>
		</div>
<!-- / footer -->
	</div>
	</div>
<script type="text/javascript"> Cufon.now(); </script>
</body>
</html>