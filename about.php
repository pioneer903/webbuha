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
<script src="js/script.js"></script>   
<script> /*
			var accordionDiv = document.getElementById("accordion");
			var h3headers = accordionDiv.getElementsByTagName("h3");
			console.log("H3 Links:" , h3headers.length);
			for (i = 0; i < h3headers.length; i++){
				h3headers[i].style.color = "red";
				//console.log("H3 property:" , h3headers[i].style.color.value);
				}
			
			
			//var ancorTags = accordionDiv.getElementsByTagName("a");
			//ancorTags.setAttribute("", "" )
			//console.log("Links:" , ancorTags.length);
			
			//var ancorTags.innerHTML.style.color = "red";
			*/
</script>
  
</body>
</html>