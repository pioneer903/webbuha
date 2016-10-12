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
<?php include('includes/meta.inc.php'); ?>
<!--Google Analytics-->
<?php include_once("analyticstracking.php") ?>

<?php include_once("includes/stylesheets.php"); ?>
<?php include_once("includes/scripts.php"); ?>

</head>
<body id="page5">
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
					<h2>Your message has been sent.  <span>Thanks!</span>!</h2>
					
	  			
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
						 <p style="margin-left:40px;"> Back to <a href="http://www.webbuha.com/">Home Page</a></p>
	   


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