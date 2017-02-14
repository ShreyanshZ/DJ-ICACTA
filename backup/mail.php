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
		.name{
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
								
								<!-- Main Content -->
<?php								
											$db=mysql_connect('mysql.hostinger.in','u817899418_admin','Admin@123');

	if(!$db)
	{
		die("not connected :".mysql_error());
	}

	$select=mysql_select_db('u817899418_db');

	if(!$select)
	{
		die("Not selected :".mysql_error());
	}
        $too="djicacta@gmail.com";
	$name=$_POST['name'];
	$email_id=$_POST['email_id'];
	$subject=$_POST['subject'];
    $message=$_POST['message'];        
        

		$str_arr=str_split($email_id);
			$flag=0;
			    for($i=0;$i<strlen($email_id);$i++)
				{
					if($str_arr[$i]=='@')
					{
						for($j=$i;$j<strlen($email_id);$j++)
						{
							if($str_arr[$j]=='.')
							$flag=1;
						}	
					}
				}
			    
	  		if($flag==1)
			{
							
			   mail( "djicacta@gmail.com", "Contact Form on djicacta.org","Name = $name  \r\nEmail = $email_id   \r\nSubject = $subject    \r\nMessage = $message" );

	       $query="insert into mail values('$name','$email_id','$subject','$message')";
		$result=mysql_query($query);
			    echo "Thank You For Contacting Us, We'll Get Back To You Shortly.";
			}

			else
			{
				echo "Error. Please Fill In Correct Email Address.";
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