<!DOCTYPE HTML>

<?php


session_start();

$username=$_SESSION['username'];
//echo $username;




?>


<html>
	<head>
		<title>Write Article | DJICACTA</title>
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
								<section>
								<!-- Main Content -->
								<?php		
											$db=mysql_connect('mysql6.000webhost.com','a7392212_admin','Admin@123');
											
											if(!$db)
											{
												die("not connected :".mysql_error());
											}

											$select=mysql_select_db('a7392212_blog');

											if(!$select)
											{
												die("Not selected :".mysql_error());
											}
											else
											{
								$allowedExts = array("gif", "jpeg", "jpg", "png");
								$temp = explode(".", $_FILES["file"]["name"]);
								$extension = end($temp);

	if ((($_FILES["file"]["type"] == "image/gif")
|| ($_FILES["file"]["type"] == "image/jpeg")
|| ($_FILES["file"]["type"] == "image/jpg")
|| ($_FILES["file"]["type"] == "image/pjpeg")
|| ($_FILES["file"]["type"] == "image/x-png")
|| ($_FILES["file"]["type"] == "image/png"))
&& in_array($extension, $allowedExts))
	{
	  if ($_FILES["file"]["error"] > 0) 
	  {
	    echo "Error: " . $_FILES["file"]["error"] . "<br>";
	    $imgadd=0;
	  } 
	  else 
	  {     	    
	    if (file_exists("blog_img/" . $_FILES["file"]["name"])) 
	    {
	      echo $_FILES["file"]["name"] . " already exists, image upload failed. ";
	      $imgadd=0;
	    } 
	    else 
	    {
	      move_uploaded_file($_FILES["file"]["tmp_name"],
	      "blog_img/" . $_FILES["file"]["name"]);
	      $img_name = "blog_img/" . $_FILES["file"]["name"];
	      $imgadd=1;
		}
	  }
	 }
	 else {
	  echo "Invalid file, image upload failed";
	  $imgadd=0;
			}

			if($imgadd == 1){
			$title=$_POST['title'];
			$article=$_POST['article'];
			$preview=$_POST['preview'];
			$query="insert into blog values(default,'$title','$preview','$img_name','$article',default,'$username')";
			$result=mysql_query($query);
			echo '<br/>Article added with Header Image';
			}
			else{
			$img_name = '';
			$title=$_POST['title'];
			$article=$_POST['article']; 
			$preview=$_POST['preview']; 
			$query="insert into blog values(default,'$title','$preview','$img_name','$article',default,'$username')"; 
			$result=mysql_query($query); 
			echo '<br/>Article Added without Header Image';
			}
		}
											session_destroy();

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