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
<?php include('includes/meta.inc.php'); ?>
<!--Google Analytics-->
<?php include_once("analyticstracking.php") ?>

<link rel="stylesheet" href="css/reset.css" type="text/css" media="all">
<link rel="stylesheet" href="css/layout.css" type="text/css" media="all">
<link rel="stylesheet" href="css/style.css" type="text/css" media="all">

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
					<h2>Your Comments Are <span>Highly Appreciated</span>!</h2>
					Any questions, suggestions, or wishes?</br>
					Share your thoughts and dreams with us, we'll help you realize them.				
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

<p>
<form id="ContactForm" method="post" action="">
          
                <div  class="wrapper">
				<strong>Name:</strong>
			<?php
				if (isset($missing) && in_array('name', $missing)) { ?>
				<span class="warning">Please enter your name</span><?php } ?>
				<div class="bg">
                <input name="name" id="name" type="text" class="input" 
                <?php if (isset($missing)) {
					echo 'value="'.htmlentities($_POST['name']).'"';
					} ?>
				/></div>
            </div>
                
           
            <div  class="wrapper">
				<strong>Email:</strong>
			      <?php
				if (isset($missing) && in_array('email', $missing)) { ?>
				<span class="warning">Please enter your email</span><?php } ?>
				</label>
                <div class="bg"><input name="email" id="email" type="text" class="input" 
                <?php if (isset($missing)) {
					echo 'value="'.htmlentities($_POST['email']).'"';
					} ?>
				/></div>
            </div>
            <div  class="textarea_box">
				<strong>Message:</strong>
				<div class="bg"><?php
				if (isset($missing) && in_array('comments', $missing)) { ?>
				<span class="warning">Please enter your comments</span><?php } ?>
				<textarea name="comments" id="comments" cols="40" rows="8"><?php
					if (isset($missing)) {
					echo htmlentities($_POST['comments']);
					} ?></textarea>
				</div>						
			</div>

            
            
            <p>
           <!--<a href="#" class="button" onClick="document.getElementById('ContactForm').submit()"><span><span>Send</span></span></a>
-->
               <a href="#" name="send" id="send" type="submit"class="button">
               <span><span> <input name="send" id="send" type="image" src="images/send.png" style = "width:58px; height:25px; " value="Send message" /></span></span></a>
            </p>
        </form></p>
					<p class="clearfix">&nbsp;</p>
   <!--end contact form-->							</div>	
					<p><a href="tel:3473951551" title="Call 347 395 1551"> (347) 395 - 1551</a></p>	
					
					<a target="_blank" href="https://www.google.com/maps/place/WebBuha/@40.446634,-74.295529,17z/data=!3m1!4b1!4m2!3m1!1s0x89b7fd5b6a3e3abb:0xe54f887e1ef5a0b0">
						<p>22 Westminster blvd <br>
						South Amboy, NJ 08879</p>
					</a>
					</article>
					<!-- Right sidebar -->
					<?php include('right_sidebar.inc.php'); ?>
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
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
 <script>window.jQuery || document.write('<script src="js/jquery-1.7.1.min.js"><\/script>')</script>
</body>
</html>