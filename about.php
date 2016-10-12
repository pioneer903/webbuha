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
					<figure class="left"><img src="images/letterA.png" alt=""></figure>
					<h2> Why<span>WebBuha</span>?</h2>
					</br>
										
				</div>
			</div>
		</div>
	</div>
	<div class="body7">
		<div class="main">
			<section id="content">
				
				<div class="wrapper">
					<article class="col2">
					<p class="padding20">&nbsp;&nbsp; WebBuha is a growing company in web design, development, and marketing fields. 
						We use the skills and experience of all our professionals to let you do business the way you want it.
						Our mission is to help you enhance your business
						while spending less money and taking less effort to achieve your satisfaction.
	  				</p>
	  				<p class="padding20">&nbsp;&nbsp;
	  					For additional information, please check out the <a href = "services.php">services</a> 
	  					and <a href = "portfolio.php">portfolio</a> pages! 
	  					If you are still doubt or have any other questions, feel free to <a href = "contact.php">contact</a> us.
	  					 We'll get in touch very soon.  
	  				
	  				</p>
	    

						
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

  
</body>
</html>