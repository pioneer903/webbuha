<?php include('includes/title.inc.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>WebBuha<?php  if (isset($title)) {echo "&#8212;{$title}";} ?></title>
	<?php include('includes/meta.inc.php'); ?>
	<?php include_once("analyticstracking.php") ?>
	<?php include_once("includes/stylesheets.php"); ?>
	<?php include_once("includes/scripts.php"); ?>
	
	<style type="text/css">

		table.packages {
			width:100%;
		}
		table.packages th,
		table.packages td{
			background: white;
		}
		table.packages thead th{
			background: #00264b;
			color: white;
		}

		tbody th small{
			font-weight: normal;
			font-size: 0.9em;
		}

		table.packages tr.prices th{
			font-size: 2.5em;
			line-height: 0.7em;
			clear: both;
			background: #006abb;
		}
		table.packages tr.prices th small{
			font-size: 0.4em;
			font-weight: normal;
		}

		table.packages tbody tr:nth-child(even) th,
		table.packages tr:nth-child(even) td{
			background: #E8E8E8;
		}
		table.packages th, 
		table.packages td{
			width: 15%;
			border:1px solid gray;
			padding: 15px;
			text-align: center;
			vertical-align: middle;
		}
		table.packages thead tr:first-child>th:first-child, 
		table.packages thead tr:nth-child(2)>th:first-child {
			background: transparent;
			border: none;
			color: black;
		  font-size: 1.7em;
		  width: 26%;
		}
		table.packages thead tr:last-child>th{
			background: transparent;
			color: #006abb;
			border-top: none;
			padding: 0px 5px 15px;	
			border-left: none;
		}
		table.packages thead tr:last-child td{
			background: transparent;
		}


		/* Prices for Specific services */
		table.estimates {
			width: 100%
		}
		table.estimates tr{
			border-bottom:1px dotted gray;

		}
		.estimates td{
			padding:10px;
			margin:10px;
		}

		.text-center{
			text-align: center;
		}
		.col-md-6{
			width:46%;
			float: left;
			padding-right:10px;
		}

</style>

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
							<li><strong><a href="#packages" title="Website Maintanance Packages">Website Maintanance Packages (pricing)</a></strong></li>
							<li>Custom and unique design of personal and business websites.</li>
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
						</ul> 


						<!-- <h2>Prices for specific services</h2>
						<table class="estimates" cellspacing="0" cellpadding="0">
						  <col width="297">
						  <col width="65">
						  <tr>
						    <td width="297">Insert/Replace an image</td>
						    <td align="right" width="65">$10 </td>
					      </tr>
						  <tr>
						    <td>Design a new page</td>
						    <td align="right">$100 </td>
					      </tr>
					      <tr>
						    <td>Code a new page from design</td>
						    <td align="right">$100 </td>
					      </tr>
					      <tr>
						    <td>Add a page to existing site </td>
						    <td align="right">$100 </td>
					      </tr>
						  <tr>
						    <td>Insert/Replace a link</td>
						    <td align="right">$10 </td>
					      </tr>
						  <tr>
						    <td>Setup keyword monitoring tools and   ability to change them</td>
						    <td align="right">$50 </td>
					      </tr>
					      <tr>
						    <td>Logo design</td>
						    <td align="right">$100 </td>
					      </tr>
					      <tr>
						    <td>Business Card design</td>
						    <td align="right">$60 </td>
					      </tr>

					     <tr>
						    <td>Video. Starting at</td>
						    <td align="right">$100 </td>
					     </tr>
						</table> -->
					</article>
						<!-- Right sidebar -->
						<?php include('right_sidebar.inc.php'); ?>

				</div>

				<h2 class="">Useful links</h2>
				<div class="col-md-6">
					<ul class="list2">
							<li><a target="_blank" href="http://www.submitexpress.com/sitemap-submission.html">Submit Sitemap to Google, Bing and Ask. </a></li>
							<li><a target="_blank" href="http://markosweb.com/">SmartViper Website Analytics</a></li>
							<li><a target="_blank" href="http://intelseek.com/">Submit Site for FREE on IntelSeek </a></li>
							<li><a target="_blank" href="http://www.tools4google.com/search-google-position/keyword_tracking.php">Search Google™ Position </a></li>
							
						</ul> 
				</div>
				<div class="col-md-6">
					<ul class="list2">
						<li><a target="_blank" href="http://www.prcheckingtool.com/">Page Ranking Checker</a></li>
						<li><a target="_blank" href="http://www.activesearchresults.com/addwebsite.php">Active Search Results Search Engine</a></li>
						<li><a href="http://www.freewebsubmission.com/" title="Free Web Submission">Free Web Submission</a></li>
						<li><a target="_blank" href="http://www.google.com/trends/">Google Trends</a></li>
					</ul> 
				</div>
						
			</section>
		</div>
		<!-- /.main -->
	</div>
	<!-- /.body7 -->


	<a name="packages" title="Website Maintanance Packages"></a>
	<div class="body7" >
		<div class="main">
			<section id="content">
				
				<div class="wrapper">
					<article class="col12">
						<h2 style="text-align:center; color:black"> Website Hosting &amp; Maintanance Packages</h2>
						<br>
						<table class="packages" border="1">
							<thead>
								<tr class="package_names">
									<th>Compare Packages</th>
									<th>Hosting only</th>	
									<th>Basic</th>
									<th>Advanced</th>
									<th>Professional</th>
									<th>E-Business</th>
								</tr>
								<tr class="prices">
									<th></th>
									<th>$12 <br><small>per month</small></th>
									<th>$20 <br><small>per month</small></th>
									<th>$30 <br><small>per month</small></th>
									<th>$50 <br><small>per month</small></th>
									<th>$80 <br><small>per month</small></th>
								</tr>
								<tr>
									<th>Package Features</th>
									<td colspan="5" rowspan="" headers=""></td>
								</tr>
							</thead>
							<tbody>
								<tr>
									<th>Backup <br>
										<small>Keep your website files and database safely backed up to multiple storage locations.
										Prevent any possible failures caused by hackers, hardware, or weather.
										Easy and fast website recovery.
									</small> <br>
									<small>
										<a target="_blank" href="http://www.leahkalamakis.com/dont-make-this-big-mistake-backup-buddy-tutorial/" title="Why do I need this?">Why do I need this?</a>
									</small>
									</th>
									<td></td>
									<td>Quarterly</td>
									<td>Monthly</td>
									<td>Daily</td>
									<td>Hourly</td>
								</tr>
								<tr>
									<th>Website update <br>
										<small>Keep the system, themes, plugins files and databases up to date with the most recent version releases and security patches.</small> <br>
										<small><a target="_blank" href="http://optimwise.com/why-update-wordpress-and-plugins/" title="Why do I need this?">Why do I need this?</a></small>
									</th>
									<td></td>
									<td>Quarterly</td>
									<td>Monthly</td>
									<td>Daily</td>
									<td>Hourly</td>
								</tr>
								<tr>
									<th>Malware Scan &amp; Removal <br>
										<small>Level1 = Admin Login Reports <br>
										Level2 = Premium Features**</small>
									</th>
									<td></td>
									<td>Quarterly</td>
									<td>Monthly, Level1</td>
									<td>Daily, Level1</td>
									<td>Daily, Level1, Lelvel2</td>
								</tr>
								<tr>
									<th>Website uptime monitor <br>
										<small>Customer receives reports</small>
									</th>
									<td></td>
									<td>Every 6 hours</td>
									<td>Every 1 hour</td>
									<td>Every 30 minutes</td>
									<td>Every 5 minutes</td>
								</tr>
								<tr>
									<th>Development work or Email support
									</th>
									<td>$40/hour (15 minutes increments)</td>
									<td>1 hour</td>
									<td>1 hour</td>
									<td>2 hours</td>
									<td>2 hours</td>
								</tr>
								<tr>
									<th>Hosting <br>
										<small>Fast reliable hosting</small></th>
									<td>1 Website</td>
									<td>1 Website</td>
									<td>1-3 Websites</td>
									<td>Up to 10 Websites</td>
									<td>Unlimited Websites</td>
								</tr>
							</tbody>
						</table>	
						<br>
						<p> <strong>** Premium features for Malware and Virus scan and removal </strong> <br>
							Upgrading to the premium version gives you two factor authentication (sign-in via cellphone) 
							and country blocking which are both effective methods to block attacks. 
							A Premium license also includes remote scanning with each scan of your site, 
							which can detect several additional website infections. 
							Premium members can also schedule when website scans occur and can scan more than once per day. 
						</p>

					</article>
				</div>
				<a href="/payments.php">Payments</a>
			</section>
		</div>
		<!-- /.main -->
	</div>
	<!-- /.body7 -->

<?php include('includes/footer.inc.php'); ?>
<!-- / footer -->
</body>
</html>