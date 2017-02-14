<!DOCTYPE HTML>

<html>
	<head>
		<title>Contact Us | DJICACTA</title>
<link rel="shortcut icon" href="css/images/favi.png">
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<script src="js/jquery.min.js"></script>
		<script src="js/config.js"></script>
		<script src="js/skel.min.js"></script>
		<script src="js/skel-panels.min.js"></script><script src="js/endless_scroll_min.js" type="text/javascript"></script>
		<noscript>
			<link rel="stylesheet" href="css/skel-noscript.css" />
			<link rel="stylesheet" href="css/style.css" />
			<link rel="stylesheet" href="css/style-desktop.css" />
		</noscript>
		<!--[if lte IE 9]><link rel="stylesheet" href="css/ie9.css" /><![endif]-->
		<!--[if lte IE 8]><script src="js/html5shiv.js"></script><![endif]-->
		<style>
		.head{
		font-weight: 900;
		}
		</style>
	</head>
	<body class="subpage"><?php include_once("analyticstracking.php") ?>

		<!-- Header -->
			<div id="header-wrapper">
				<header id="header" class="container">
					<div class="row">
						<div class="12u">
<!-- Banner -->
								<?php include('banr.php');?>
							<!-- Logo -->
								<h1><a href="index.php" id="logo">DJICACTA</a></h1>
							
							<!-- Nav -->
								<nav id="nav">
								<?php 
									require('navbar.php');
								?>	
								
	
								</nav>

						</div>
					</div>
				</header>
			</div>

		<!-- Content -->
			<div id="content-wrapper">
				<div id="content">
					<div class="container">
						<div class="row">
							<div class="3u">
								
								<?php 
									require('leftcolumn.php');
								?>	

							</div>
							<div class="9u skel-cell-mainContent">
							<?php 
									include('marquee.php');
								?>		
								<!-- Main Content -->
									<section>
										<header>
											<h2><center>Contact Us</h2></center>
											
										</header>
										
										
										<div id="card">
										
											<div class="left">
												<h3>Address</h3>																				
											</div>
											<div class="right">
											
											<span class="head">Dwarkadas J. Sanghvi College of Engineering</span><br>
											Plot No.U-15, J.V.P.D. Scheme,<br>
											Bhaktivedanta Swami Marg,<br>
											Vile Parle (West),<br>
											Mumbai-400 056.
											
											</div>
										
										</div>
										<br>
										
										<div id="card">
										
											<div class="left">
												<h3>Telephone</h3>																				
											</div>
											<div class="right">
											<ul>
												<li>+9122-42335000 </li>
												<li>+9122-26107010 </li>
												<li>+9122-26107461</li>
											</ul>
											</div>
										
										</div>
										<br>


<div id="card">
										
											<div class="left">
												<h3>Mobile</h3>																				
											</div>
											<div class="right">
											<ul>
												<li><span class="head">Prof. Aruna Gawade :</span> +91 8879731734</li>
												<li><span class="head">Prof. Pranjali Thakre :</span> +91 8879731761</li>
												
											</ul>
											</div>
										
										</div>
										<br>
										
										<div id="card">
										
											<div class="left">
												<h3>Fax</h3>														
											</div>
											<div class="right">
											<ul>
												<li>26194988</li>
											</ul>
											</div>
										
										</div>
										<br>
										<header>
											<h2><center>General Queries</h2></center>
											
										</header>
										
										<div id="card">
										
											<div class="left">
												<h3>Program Chair</h3>																				
											</div>
											<div class="right">
											
												<span class="head">Dr. Abhijit R. Joshi</span><br>
												Program Chair,<br>
												ICACTA 2015.<br>
												Tel: +9122 - 26181358<br>
												Email id: <a href="mailto:abhijit.joshi@djsce.ac.in">abhijit.joshi@djsce.ac.in</a>
											
											</div>
										
										</div>
										<br>
										
										<div id="card">
										
											<div class="left">
												<h3>Program Co-Chair</h3>																				
											</div>
											<div class="right">
											
												<span class="head">Dr. N. M. Shekokar</span><br>
												Program Co-Chair,<br>
												ICACTA 2015.<br>
											        Email id:<a href="mailto:narendra.shekokar@djsce.ac.in"> narendra.shekokar@djsce.ac.in</a>
											
											</div>
										
										</div>
										<br>
										
										<div id="card">
										
											<div class="left">
												<h3>Organizing Chair</h3>																				
											</div>
											<div class="right">
											
												<span class="head">Prof. Meera Narvekar</span><br>
												Organizing Chair,<br>
												ICACTA 2015.<br>
												Email id:<a href="mailto:meera.narvekar@djsce.ac.in"> meera.narvekar@djsce.ac.in </a>
											
											</div>
										
										</div>
										<br>
										<div id="card">
										
											<div class="left">
												<h3>Technical Chair</h3>																				
											</div>
											<div class="right">
											
												<span class="head">Prof. Neepa Shah</span><br>
												Technical Chair,<br>
												ICACTA 2015.<br>
												Email id:<a href="mailto:neepa.shah@djsce.ac.in"> neepa.shah@djsce.ac.in</a>
											
											</div>
										
										</div>
										<br>
										
									</section>
									<section>
									
									<header>
											<h2><center>Mail Us</center></h2>
										</header>
<?php

if (!isset($_POST["send"]))
 	 {
		  ?>
		  <form method="post" action="mail.php">
		  <div id="card">
			<div class="left">Name:</div>
			<div class="right"><input type="text" name="name"  required></div>
		  </div>

		<div id="card">
			<div class="left">Email id:</div>
			<div class="right"><input type="text" name="email_id"  required></div>
		  </div>
		  
		  <div id="card">
			<div class="left">Subject:</div>
			<div class="right"><input type="text" name="subject" required></div>
		  </div>
		  
		  <div id="card">
			<div class="left"> Message:</div>
			<div class="right"><textarea  name="message" placeholder="Describe your query here..."  required></textarea></div>
		  </div>
  			
			<br><br>
			<center>
		  <input style="background:#063d8e; color:white; border:none; width:6em; cursor:pointer;" type="submit" name="send" value="Send"></center>
		  </form>
		  <?php 
	  }
?>
									
									</section>

							</div>
						</div>
					</div>
				</div>
			</div>

		<!-- Footer -->
			

		<!-- Copyright -->
			<div id="copyright">
				&copy; DJICACTA. All rights reserved. | Queries: <a href="mailto:info@djicacta.org">info@djicacta.org</a>
			</div>

	</body>
</html>