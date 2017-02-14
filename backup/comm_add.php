<!DOCTYPE HTML>

<html>
	<head>
		<title>Articles | DJICACTA</title>
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
											$db=mysql_connect('mysql6.000webhost.com','a7392212_admin','Admin@123');
							//$db=mysql_connect('localhost','root','');

	if(!$db)
	{
		die("not connected :".mysql_error());
	}

	//$select=mysql_select_db('blog');
	$select=mysql_select_db('a7392212_blog');

	if(!$select)
	{
		die("Not selected :".mysql_error());
	}

		  	
		  		$id=$_GET["input"];  

		  		
		  		$name=$_POST['name'];
		  		

		  		$email_id=$_POST['email_id'];
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
 		$query3="insert into comments(b_id,name,email_user,comment) values('$id','$name','$email_id','$message')";
		$result3=mysql_query($query3);
			    echo "Comment Added";
			}

			else
			{
				echo "Incorrect Email-id";
			}		


	  	

	
?>
								<FORM><INPUT style="background:#063d8e; color:white; border:none; width:6em; cursor:pointer;" Type="button" VALUE="Back" onClick="location.href='articles.php?input=<?php echo"$id" ?>'"></FORM>	
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