<?php include("inc/header.php");?>
			
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
												<input class="btn btn-action" type="submit" value="Send message"><br><br><br>
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
										<td><a href="https://youtube.com/channel/UCi7lF_oTI7HGwxTkC-qgdvQ" target="_blank"><i class="fa fa-youtube fa-5x" style="color: #bb0000;"></i></a></td>
										<td><a href="https://facebook.com/learn4lifeschools" target="_blank"><i class="fa fa-facebook fa-5x" style="color: #3b5998;"></i></a></td>
									</tr>
								</table>
							</p>
						</p>
					</div>
				</div>
			
			</div> <!-- /row  -->
<?php include("inc/footer.php"); ?>