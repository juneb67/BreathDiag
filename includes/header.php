<!DOCTYPE html>
<html lang="en">
  
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title><?php echo $title; ?></title>
		<link rel="stylesheet" href="css/bootstrap.css">	
		<link rel="stylesheet" href="css/master.css">
		<link rel="icon" type="image/png" href="images/icon2.png">		
	</head>

	<body>

		<div class="container">
		
			<div class="nav-container">
				<div id="breath-menu" class="navbar navbar-default " role="navigation">
					<div class="img-logo">
						<img src="images/logo.jpg" width="294" height="140">
					</div>
					<div class="container-fluid">
						<div class="navbar-header">
							<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-menubuilder">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
						</div>
						<div class="collapse navbar-collapse navbar-menubuilder">
							<ul class="nav navbar-nav navbar-right">
								<?php
									$page = $_SERVER["PHP_SELF"];
									if ($page === "/index.php") {
										echo '<li class="active">Home</li>';
									} else {
										echo '<li><a href="/" title="Visit Home Page">Home</a></li>';
									}
									if ($page === "/about.php") {
										echo '<li class="active">About Us</li>';
									} else {
										echo '<li><a href="/about" title="Visit About Page">About Us</a></li>';
									}
									if ($page === "/contact.php") {
										echo '<li class="active">Contact Us</a></li>';
									} else {
										//echo '<li><a href="#" title="Visit Contact Page">Contact Us</a></li>';
										
									echo '<li><a href="#" title="Contact Form" data-toggle="modal" data-target="#contactModal">
										Contact Us
									</a></li>';

									}
									if ($page === "/invest.php") {
										echo '<li class="active">Invest</li>';
									} else {
										echo '<li><a href="/invest.php" title="Visit Invest Page">Invest</a></li>';
									}
								?>

							</ul>
						</div>
					</div>
				</div>	
			</div>
			
			<!-- Modal -->
			<div id="contactModal<?php echo $i ?>" class="modal fade" role="dialog">
			  <div class="modal-dialog">
				<!-- Modal content-->
				<div class="modal-content">
				  <div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					<h4 class="modal-title">Contact Us!</h4>
				  </div>
				  <div class="modal-body">
						<p>Please fill out the form below. We will get back to you as soon as possible.</p>
					  <form role="form" id="contact" action="contact.php" method="post">
						
						<div class="form-group">
						  <label for="name">Name:</label>
						  <input type="text" class="form-control" name="name" id="name" placeholder="Enter your name">
						</div>
						
						<div class="form-group">
						  <label for="email">Email:</label>
						  <input type="email" class="form-control" name="email" id="email" placeholder="Enter email" size="35">
						</div>
		  
					  <div class="form-group">
						<label>Comments:</label>
						<textarea name="comments" class="form-control" placeholder="Your comments here.." 
						data-placement="top" data-trigger="manual"></textarea>
					  </div>
          
						<input type="hidden" name="submitted">
						<button type="submit" name="submitted" class="btn btn-default">Send</button>
					  </form>
				  
				  </div>
										
				</div>
			  
			  </div>
			
			</div>
			