<?php $currentPage = basename($_SERVER['SCRIPT_NAME']); ?>
<script>
		$(function() {
			var pull 		= $('#pull');
				menu 		= $('nav ul');
				menuHeight	= menu.height();

			$(pull).on('click', function(e) {
				e.preventDefault();
				menu.slideToggle();
			});

			$(window).resize(function(){
        		var w = $(window).width();
        		if(w > 320 && menu.is(':hidden')) {
        			menu.removeAttr('style');
        		}
        		
    		});
		});
	</script>


	<!-- Navigation. -->
		<nav class="inside_shadow clearfix sticky" style="" >

			<ul class="clearfix">
			<li>			<a href="index.php"> <img id="navLogo" src="images/logo.png" class="" alt="MOS Creative Logo" title="Home" style="width:70%;"/></a></li>
			<li><a href="index.php">Home</a></li>
			<li><a href="portfolio.php">Portfolio</a></li>
			<li><a href="about.php">About</a></li>
			<li><a href="contact.php">Contact</a></li>
			<li><a href="http://blog.moscreative.com/">Blog</a></li>	
<!--
				<a href="index.php"><li  <?php if ($currentPage == 'index.php') {echo 'id="activeHome"'; } ?> accesskey="1" title="Home">HOME</li></a>
				<a href="portfolio.php"><li  <?php if ($currentPage == 'portfolio.php') {echo 'id="active"'; } ?> accesskey="2" title="portfolio">portfolio</li></a>
				<a href="about.php"><li  <?php if ($currentPage == 'about.php') {echo 'id="active"'; } ?> accesskey="3" title="About">ABOUT</li></a>
				<a href="contact.php"><li  <?php if ($currentPage == 'contact.php') {echo 'id="active"'; } ?> accesskey="4" title="Contact">CONTACT</li></a>
				<a href="http://blog.moscreative.com/"><li  <?php if ($currentPage == 'blog.php') {echo 'id="active"'; } ?> accesskey="5" title="Blog">BLOG</li></a>
-->
			</ul>
			<a href="#" id="pull"><img id="navlogo" src="images/mos_logo_light.png" class="logo" alt="logo" /> Menu</a>
	    </nav>
		<div class="c2">
			<div id="mainNav" >
				<div id="logo" class="logo"><a href="index.php"><img src="images/logo.png" alt="logo" title="Home"/></a></div>
				<ul id="mainNavList">
					<a href="index.php"><li  <?php if ($currentPage == 'index.php') {echo 'id="activeHome"'; } ?> accesskey="1" title="Home">HOME</li></a>
					<a href="portfolio.php"><li  <?php if ($currentPage == 'portfolio.php') {echo 'id="active"'; } ?> accesskey="2" title="Portfolio">PORTFOLIO</li></a>
					<a href="about.php"><li  <?php if ($currentPage == 'about.php') {echo 'id="active"'; } ?> accesskey="3" title="About">ABOUT</li></a>
					<a href="contact.php"><li  <?php if ($currentPage == 'contact.php') {echo 'id="active"'; } ?> accesskey="4" title="Contact">CONTACT</li></a>
					<a href="http://blog.moscreative.com/"><li  <?php if ($currentPage == 'blog.php') {echo 'id="active"'; } ?> accesskey="5" title="Blog">BLOG</li></a>
				</ul>
			</div><!-- #mainNav -->
		</div>  	  
