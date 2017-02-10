<!DOCTYPE HTML>

<html>
	<head>
		<title>Home | DJICACTA</title>
		<link rel="shortcut icon" href="css/images/favi.png">
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<script src="js/jquery.min.js"></script>
		<script src="js/config.js"></script>
		<script src="js/skel.min.js"></script>
		<script src="js/skel-panels.min.js"></script>
                <script src="js/endless_scroll_min.js" type="text/javascript"></script>
		<noscript>
			<link rel="stylesheet" href="css/skel-noscript.css" />
			<link rel="stylesheet" href="css/style.css" />
			<link rel="stylesheet" href="css/style-desktop.css" />
			
		</noscript>
		<!--[if lte IE 9]><link rel="stylesheet" href="css/ie9.css" /><![endif]-->
		<!--[if lte IE 8]><script src="js/html5shiv.js"></script><![endif]-->
	
		<link rel="stylesheet" href="js/jquery.bxslider.css" />
		<script type="text/javascript" src="js/jquery.bxslider.js"></script>
		
		<style>
		.imgs{
		width:100%;
		background:white;
		overflow:hidden;
		}

		#imgs{
		padding:10px !important;
		margin: 0 0 3% !important;
		}		
		</style>
		
		<script>

		$(document).ready(function(){
    
$('.bxslider').bxSlider({
	auto: true,
  mode: 'vertical',
  controls: false,
  speed: 900,
  pager: false,
  slideMargin: 5
});
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
				
				
				<ul class="bxslider">
				<li><img src="djimg/img2.jpg"  /></li>
				<li><img src="djimg/img1.jpg"  /></li>
				<li><img src="djimg/img3.jpg"  /></li>
				<li><img src="djimg/img4.jpg"  /></li>
				<li><img src="djimg/img5.jpg"  /></li>
				<li><img src="djimg/img6.jpg"  /></li>
				<li><img src="djimg/img7.jpg"  /></li>
										
				</ul>
				
				</div>
										
									</section>
								
									<section>
										
										<p>SVKM's Dwarkadas J. Sanghvi College of Engineering is organizing International Conference on Advanced Computing Technologies and Applications  (ICACTA)  on the 26th and 27th of March 2015.</p>


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