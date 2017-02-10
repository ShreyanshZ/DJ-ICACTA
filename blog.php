<!DOCTYPE HTML>

<html>
	<head>
		<title>Blog | DJICACTA</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<script src="js/jquery.min.js"></script>
		<script src="js/config.js"></script>
		<script src="js/skel.min.js"></script>
		<link rel="stylesheet" href="css/blog.css" />
		<script src="js/skel-panels.min.js"></script><script src="js/endless_scroll_min.js" type="text/javascript"></script>
		<noscript>
			<link rel="stylesheet" href="css/skel-noscript.css" />
			<link rel="stylesheet" href="css/style.css" />
			<link rel="stylesheet" href="css/style-desktop.css" />
			<link rel="stylesheet" href="css/card.css" />
		</noscript>
		
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
							<?php 
									include('marquee.php');
								?>		
								<!-- Main Content -->
									<section>
									
									<header>
											<h2><center>Articles</center></h2>
									</header>
									
									<?php
			
										$db=mysql_connect('mysql6.000webhost.com','a7392212_admin','Admin@123');
										if(!$db)
										{
											die("not connected".mysql_error());
										}
										$select=mysql_select_db('a7392212_blog');
										if(!$select)
										{
											die("Not selected".mysql_error());
										}

										$query="select * from blog order by date DESC";
										if($query_run=mysql_query($query))
										{
											while($query_row=mysql_fetch_assoc($query_run))
											{
												$link='<a href="articles.php?input=';
												$title=$query_row['blog_title'];
												$id=$query_row['blog_id'];
												$desc=$query_row['blog_desc'];
												$link=$link.$id.'">';
												echo $link ;
												echo '<div id="article"><div id="title">'.$title.'</div><div id="description">'.$desc.'</div></div></a>';
											}

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