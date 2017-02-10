<!DOCTYPE HTML>

<html>
	<head>
		<title>Write Article | DJICACTA</title>
		<link rel="shortcut icon" href="css/images/favi.png">
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<script src="js/jquery.min.js"></script>
		<script src="js/config.js"></script>
		<script src="js/skel.min.js"></script>
		<link rel="stylesheet" type="text/css" href="jquery.cleditor.css" />
  <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
  <script type="text/javascript" src="jquery.cleditor.min.js"></script> 		
		<noscript>
			<link rel="stylesheet" href="css/skel-noscript.css" />
			<link rel="stylesheet" href="css/style.css" />
			<link rel="stylesheet" href="css/style-desktop.css" />
			<link rel="stylesheet" href="css/card.css" />
		</noscript>
		<script type="text/javascript">
			$(document).ready(function () { $("#input").cleditor(); });
		</script>
		<link rel="stylesheet" type="text/css" href="jquery.cleditor.css" />
		<!--[if lte IE 9]><link rel="stylesheet" href="css/ie9.css" /><![endif]-->
		<!--[if lte IE 8]><script src="js/html5shiv.js"></script><![endif]-->
	</head>
	<body class="subpage"><?php include_once("analyticstracking.php") ?>

		<!-- Header -->
			<div id="header-wrapper">
				<header id="header" class="container">
					<div class="row">
						<div class="12u">
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
								
								<!-- Main Content -->

									<section>
										<header>
											<h2><center>Write Your Article Here</center></h2>
											<textarea id="input" name="input"></textarea>
										</header>
									</section>
									<section>
										
									<?php
	
										if (!isset($_POST["send"]))
										{
									?>
										<form method="post" action="edit.php" enctype="multipart/form-data">
												
											<div id="card">
												<div class="left"><label for="file">Header Image(opt.):&nbsp;</label></div>
											<div class="right"><input type="file" name="file" id="file"></div>
											</div>	

											<div id="card">
												<div class="left">Title:</div>
												<div class="right"><input type="text" name="title"  required></div>
											</div>
											
											<div id="card">
												<div class="left">Preview:</div>
												<div class="right"><textarea  name="preview" placeholder="Write Short Description here..."  required></textarea></div>
											</div>
											
				  
											<div id="card">
												<div class="left">Article:</div>
												<div class="right"><textarea  name="article" placeholder="Write Your Article here..."  required></textarea></div>
											</div>
  			
											<br><br>
											<center>
												<input style="background:#063d8e; color:white; border:none; width:6em; cursor:pointer;" type="submit" name="Add" value="Add">
											</center>
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