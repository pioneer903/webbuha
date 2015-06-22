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
		<nav class=" clearfix sticky" >
			
			<ul class=""  style="">
				<li><a href="portfolio.php" <?php if ($currentPage == 'portfolio.php') {echo 'class="active"'; } ?> accesskey="2" title="portfolio">Portfolio</a></li>
				<li><img src="images/blue_dot.png" alt="blue dot" class="blue_dot"/></li>
				<li><a href="about.php"  <?php if ($currentPage == 'about.php') {echo 'class="active"'; } ?> accesskey="3" title="About">About</a></li>
				<li><a href="index.php" class="logoNav"  title="Home" > <img  src="images/logo.png" class="" alt="MOS Creative Logo" title="Home"/><span>Home</span></a>	</li>
				<li><a href="contact.php"  <?php if ($currentPage == 'contact.php') {echo 'class="active"'; } ?> accesskey="4" title="Contact">Contact</a></li>
				<li><img src="images/blue_dot.png" alt="blue dot" class="blue_dot"/></li>
				<li><a href="http://blog.moscreative.com/"  <?php if ($currentPage == 'blog.php') {echo 'class="active"'; } ?> accesskey="5" title="Blog">Blog</a></li>	
			</ul>
			<a href="#" id="pull"><img id="logo_button" src="images/mos_logo_light.png"  alt="logo" /> Menu</a>
	    </nav>
<!--
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
			</div>
		</div>  	  
-->
