<?php $currentPage = basename($_SERVER['SCRIPT_NAME']); ?>
<div class="body1">
	<div class="body2">
		<div class="main">
<!-- header -->
			<header>
				<div class="wrapper">
					<h1><a href="index.php" id="logo">WebBuha</a></h1>
					<div class="right">
						<nav>
							<ul id="top_nav">
								<li><a href="#">User Area</a></li>
								<li><a href="#">Sitemap</a></li>
							</ul>
							<form id="search" method="post">
								<div>
									<input type="submit" class="submit" value="">
									<input type="text" class="input">
								</div>
							</form>
						</nav>
					</div>
				</div>

				<nav id="menu">
					<ul>
						<li class="nav1"  <?php if ($currentPage == 'index.php') {echo 'id="active"'; } ?> accesskey="1" title="Home"><a href="index.php">Home</a></li>
						<li class="nav4" <?php if ($currentPage == 'portfolio.php') {echo 'id="active"'; } ?> accesskey="2" title="Portfolio"><a href="portfolio.php">Portfolio</a></li>
						<li class="nav3" <?php if ($currentPage == 'services.php') {echo 'id="active"'; } ?> accesskey="3" title="Services"><a href="services.php">Services</a></li>
						<li class="nav2" <?php if ($currentPage == 'about.php') {echo 'id="active"'; } ?> accesskey="4" title="About"><a href="about.php">About</a></li>
						<li class="nav5" <?php if ($currentPage == 'contact.php') {echo 'id="active"'; } ?> accesskey="5" title="Contact"><a href="contact.php">Contact</a></li>
					</ul>
				</nav>
			</header>
			</div>
		</div>
	</div><!--end body1-->
						