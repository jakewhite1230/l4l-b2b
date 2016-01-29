<!DOCTYPE html>
<html lang="en">
<head>
	
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
	
	<meta charset="utf-8">
	<meta name="viewport"    content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author"      content="Sergey Pozhilov (GetTemplate.com)">
	
	<title>Learn4Life Concept Charter Schools</title>

	<!--link rel="shortcut icon" href="assets/images/gt_favicon.png"-->
	
	<link rel="stylesheet" media="screen" href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,700">
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/font-awesome.min.css">

	<!-- Custom styles for our template -->
	<link rel="stylesheet" href="assets/css/bootstrap-theme.css" media="screen" >
	<link rel="stylesheet" href="assets/css/main.css">

	<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
	<script src="assets/js/html5shiv.js"></script>
	<script src="assets/js/respond.min.js"></script>
	<![endif]-->
</head>

<body class="home">

	<div class="signup">
		<div class="container">
			<div class="form-group">
				<div class="col-md-5 col-sm-6">
					<b>STAY CONNECTED</b> |
					<font size="1">Sign up to receive important updates, event invitations
					and action alerts. We honor your privacy and we'll never share your email with
					anyone else.</font>
				</div>
				<div class="col-md-4 col-sm-6">
					<input type="email" class="form-control" id="email" placeholder="Enter your email">
				</div>	
				<div class="col-md-3 col-sm-6">
					<button type="button" style="height: 35px;" class="btn btn-danger">Sign Up</button>
				</div>
			</div>
		</div>
	</div>

	<!-- Fixed navbar -->
	<div class="navbar navbar-inverse headroom" > <!-- navbar-fixed-top -->
		<div class="container">
			<div class="navbar-header">
				<!-- Button for smallest screens -->
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"><span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
				<a class="navbar-brand" href="index.html"><img src="assets/images/roseLogo2.png" width="200"></a>
			</div>
			
			<!-------------------------------------
			MAIN NAVIGATION
			-------------------------------------->
			
			<div class="navbar-collapse collapse">
				<ul class="nav navbar-nav pull-right">
					<li><a href="challenge.html">Our Challenge</a></li>
					<li><a href="approach.html">Our Approach</a></li>
					<li><a href="centers.html">Our Resource Centers</a></li>
					<li><a href="impact.html">Our Impact</a></li>
					<li><a href="stories.html">Student Stories</a></li>
					<li><a href="news.html">News</a></li>
				</ul>
			</div>
		</div>
	</div> 
	<!-- /.navbar -->

	<!-- Header >
	<header id="head">
		<div class="container">
			<div class="row">
				<h3>OUR PERSONALIZED SYSTEM OF EDUCATION IS BEING</h3>
				<div class="h-caption">THREATENED</div>
				<!--p class="tagline">PROGRESSUS: free business bootstrap template by <a href="http://www.gettemplate.com/?utm_source=progressus&amp;utm_medium=template&amp;utm_campaign=progressus">GetTemplate</a></p-->
				<!--p><a class="btn btn-default btn-lg" role="button">MORE INFO</a> <a href="join-form.php" target="_new" class="btn btn-action btn-lg" role="button">JOIN THE FIGHT!</a></p>
			</div>
		</div>
	</header>
	<!-- /Header -->

	<!-- Intro >
	<div class="container text-center">
		<br> <br>
		<h2 class="thin">Retaining Our System of Education</h2>
		<p class="text-muted">
			The R.O.S.E. Foundation provides support for charter schools and small school <br> districts to defend against legal challenges that could threaten our education systyem.
		</p>
	</div>
	<!-- /Intro-->
		
	<!-- Highlights - jumbotron -->
	<!--div class="jumbotron top-space"-->
		<div class="container">
			
			<!--h3 class="text-center thin">Reasons to use this template</h3-->
			
			<div class="row">
				<div class="col-md-6 col-sm-6 highlight">
					<h4><B>CONTACT US</B></h4>
					<div class="h-body">
						<p>
							Call: 661-272-1225 | Visit: <a href="http://learn4life.org" target="_blank">http://learn4life.org</a>
						</p>
						
						<p>
							<br>SEND US A MESSAGE
							
							<article class="col-sm-12 maincontent">
								
								<p>			
									<!-- PHP CODE GOES HERE -->
									
									<!-- Contact Form Submission Alert -->
									<?php include('inc/contactForm.php'); ?>
									<?php if (isset($success)){ ?>
									<div class="alert alert-success alert-dismissible emailStatus" role="alert">
									<!--button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button-->
									<div class="container"><strong>Thank you!</strong> We will get back to you shortly.</div>
									</div>
														
									<?php }; ?>
													
									<?php if (isset($error_message)){ ?>
															
									<div class="alert alert-danger alert-dismissible emailStatus" role="alert">
									<!--button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button-->
									<div class="container"><strong>ERROR:</strong> <?php echo $error_message; ?>.</div>
									</div>
													
									<?php }; ?>
														
									<!-- /. Contact Form Submission Alert -->
									
								</p>
								<br>
									<form method="POST" action="contact.php">
										<div class="row">
											<div class="col-sm-12">
												<input class="form-control" type="text" placeholder="Name" name="name"><p>
											</div>
											<div class="col-sm-12">
												<input class="form-control" type="text" placeholder="Email" name="email"><p>
											</div>
											<div class="col-sm-12">
												<input class="form-control" type="text" placeholder="Phone" name="phone"><p>
											</div>
											<div class="col-sm-12">
												<input class="form-control" type="text" placeholder="Message" name="date"><p>
											</div>
										</div><p>
										
										<br>
										<div class="row">
											<div class="col-sm-6">
												<!--label class="checkbox"><input type="checkbox"> Sign up for newsletter</label-->
											</div>
											<div class="col-sm-6 text-right">
												<input class="btn btn-action" type="submit" value="Send message">
											</div>
										</div>
									</form>

							</article>
							
						</p>
					</div>
				</div>
				<div class="col-md-6 col-sm-6 highlight">
					<div class="h-body">
						<p>
							<h4><B>CONNECT WITH LEARN4LIFE</B></h4><br>
							<p>
								<table cellpadding="15">
									<tr>
										<td><a href="#"><i class="fa fa-twitter fa-5x" style="color: #00aced;"></i></a></td>
										<td><a href="#"><i class="fa fa-instagram fa-5x" style="color: #125688;"></i></a></td>
										<td><a href="#"><i class="fa fa-facebook fa-5x" style="color: #3b5998;"></i></a></td>
									</tr>
									<tr>
										<td><a href="#"><i class="fa fa-youtube fa-5x" style="color: #bb0000;"></i></a></td>
										<td><a href="#"><i class="fa fa-google fa-5x" style="color: #dd4b39;"></i></a></td>
										<td><a href="#"><i class="fa fa-linkedin fa-5x" style="color: #007bb5;"></i></a></td>
									</tr>
								</table>
							</p>
						</p>
					</div>
				</div>
			
			</div> <!-- /row  -->
		</div>
	
	
	<!-- Social links. @TODO: replace by link/instructions in template -->
	<!--section id="social">
		<div class="container">
			<div class="wrapper clearfix">
				<!-- AddThis Button BEGIN -->
				<div class="addthis_toolbox addthis_default_style">
				<a class="addthis_button_facebook_like" fb:like:layout="button_count"></a>
				<a class="addthis_button_tweet"></a>
				<a class="addthis_button_linkedin_counter"></a>
				<a class="addthis_button_google_plusone" g:plusone:size="medium"></a>
				</div>
				<!-- AddThis Button END >
			</div>
		</div>
	</section-->
	<!-- /social links -->


	<footer id="footer" class="top-space">

		<div class="footer1">
			<div class="container">
				<div class="row">
					
					<div class="col-md-4 widget">
						<h3 class="widget-title">Contact</h3>
						<div class="widget-body">
							<p><a href="tel:6612721225">661-272-1225</a><br>
								<a href="mailto:info@learnfourlife.com">info@learnfourlife.com</a><br>
								<br>
								
							</p>	
						</div>
					</div>

					<div class="col-md-4 widget">
						<h3 class="widget-title">Follow Us</h3>
						<div class="widget-body">
							<p class="follow-me-icons">
								<a href="#"><i class="fa fa-twitter fa-2"></i></a>
								<a href="#"><i class="fa fa-instagram fa-2"></i></a>
								<a href="#"><i class="fa fa-facebook fa-2"></i></a>
								<a href="#"><i class="fa fa-youtube fa-2"></i></a>
								<a href="#"><i class="fa fa-google fa-2"></i></a>
							</p>	
						</div>
					</div>

					<div class="col-md-4 widget">
						<h3 class="widget-title">Our Mission</h3>
						<div class="widget-body">
							<p>
								At Learn4Life we continually seek to meet the highest standards. 
								We only employ teachers that offer the highest quality of education standards available. 
								Also, every one of our teachers holds credentials from the California Department of Education.
							</p>
						</div>
					</div>

				</div> <!-- /row of widgets -->
			</div>
		</div>

		<div class="footer2">
			<div class="container">
				<div class="row">
					
					<div class="col-md-6 widget">
						<div class="widget-body">
							<p class="simplenav">
							<a href="#">Contact Us </a> | 
								<a href="#"> Terms of Use </a> | 
								<a href="#"> Privacy Policy </a>  
							</p>
						</div>
					</div>

					<div class="col-md-6 widget">
						<div class="widget-body">
							<p class="text-right">
								&copy; 2015 Learn4Life. All rights reserved.
							</p>
						</div>
					</div>

				</div> <!-- /row of widgets -->
			</div>
		</div>

	</footer>	
		




	<!-- JavaScript libs are placed at the end of the document so the pages load faster -->
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
	<script src="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
	<script src="assets/js/headroom.min.js"></script>
	<script src="assets/js/jQuery.headroom.min.js"></script>
	<script src="assets/js/template.js"></script>
</body>
</html>