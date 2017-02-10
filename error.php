<!DOCTYPE HTML>

<html>
	<head>
		<title>Error Page | DJICACTA</title>
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
										

<?php 

$status = $_SERVER['REDIRECT_STATUS']; 
$codes = array( 
        403 => array('403 Forbidden', 'The server has refused to fulfill your request.'), 
        404 => array('404 Not Found', 'The document/file requested was not found.'), 
        405 => array('405 Method Not Allowed', 'The method specified in the Request-Line is not allowed for the specified resource.'), 
        408 => array('408 Request Timeout', 'Your browser failed to sent a request in the time allowed by the server.'), 
        500 => array('500 Internal Server Error', 'The request was unsuccessful due to an unexpected condition encountered by the server.'), 
        502 => array('502 Bad Gateway', 'The server received an invalid response from the upstream server while trying to fulfill the request.'), 
        504 => array('504 Gateway Timeout', 'The upstream server failed to send a request in the time allowed by the server.') 
        ); 
         
$title = $codes[$status][0]; 
$message = $codes[$status][1]; 
if ($title == false || strlen($status) != 3) { 
    $message = 'Page Not Found.'; 
} 

echo '<p><header><h2><center>' . $message . '</center></h2></header></p>';  
       

  
?>


<center><img src="css/images/uc.gif"/></center>
										
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