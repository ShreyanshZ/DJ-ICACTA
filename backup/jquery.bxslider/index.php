<!DOCTYPE HTML>

<html>
	<head>
		<title>Home | DJICACTA</title>
<link rel="shortcut icon" href="css/images/favi.png">
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="ICACTA stands for the International Conference on Advanced Computing Technologies and Applications; organized by SVKM's Dwarkadas J. Sanghvi College of Engineering, Mumbai, India. It will be conducted on the 26th and 27th of March 2015." />
		<meta name="keywords" content="icacta ,djicacta ,organized in 2015 ,International Conference ,Advanced Computing Technology ,DJ Sanghvi ,conferences ,technical paper presentation" />
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
		<link rel="stylesheet" href="coin/coin-slider-styles.css" />
		
<script type="text/javascript" src="coin/coin-slider.min.js"></script>
		
		<style>
		.imgs{
height:260px;
margin:0 0 3%;
width:100%;
background:white;
overflow:hidden;
}

#games > img{width:100%;max-height:100%;margin:auto;}

#imgs{padding:10px !important;
margin: 0 0 3% !important;
}		
		</style>
		
		<script>$(document).ready(function() 
{
	$('#games').coinslider({width: 860, hoverPause: true , links: false});
});
</script>
		
		
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
									<section id="imgs">
										
										<div class="imgs">
				
				
				<div id="games">
		
			<img src="djimg/4_3.jpg" alt="ELSEVIER" />

				<img src="djimg/4_1.jpg" alt="DJ Sanghvi College of Engineering" />
			
				<img src="djimg/6_1.jpg" alt="DJ Sanghvi College of Engineering" />
				
								
				
				<img src="djimg/5.jpg" alt="DJ Sanghvi College of Engineering" />				
				
				
				
				
			
				</div>
				
				</div>
										
									</section>
								
									<section>
										
										<p>SVKM's Dwarkadas J. Sanghvi College of Engineering is organizing International Conference on Advanced Computing Applications and Technologies (ICACTA)  on the 26th and 27th of March 2015.</p>


<p>The primary objective of ICACTA 2015 is to provide a platform for researchers, academicians and industry professionals from all over the world to present their research in the area of computing technologies. It calls for technical papers related to the fields of Information Technology and Computer Science. The conference aims to help technocrats and academicians to gain useful insights into the next generation of computing and provide its participants an excellent opportunity to collaborate and exchange new ideas which will aid in their research work.</p>

<p>The conference focuses on recent computing technologies like Soft Computing, Ubiquitous and High Performance Computing, Network Computing, and Computing Applications.</p>
										
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