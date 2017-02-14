<!DOCTYPE HTML>

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
	$id=$_GET["input"];
	$query="select * from blog where blog_id=$id";
	$result=mysql_query($query);
	$row=mysql_fetch_array($result);
	$url="http://djicacta.org/articles.php?input=$id";
?>

<html>
	<head>
		<title><?php echo $row['blog_title'].' | DJICACTA'; ?></title>
		<link rel="shortcut icon" href="css/images/favi.png">
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<meta property="og:site_name" content="DJICACTA"/>
		<meta property="og:url" content="<?php echo $url; ?>"/>
		<meta property="og:title" content="<?php echo $row['blog_title'].' | DJICACTA'; ?> "/>
		<meta property="og:image" content="http://djicacta.org/css/images/log.png"/>
		<meta property="og:description" content="<?php echo $row['blog_desc']; ?>"/>
		<script src="js/jquery.min.js"></script>
		<script src="js/config.js"></script>
		<script src="js/skel.min.js"></script>
		<script src="js/skel-panels.min.js"></script><script src="js/endless_scroll_min.js" type="text/javascript"></script>
		<style type="text/css">
			#share-buttons img {
			width: 35px;
			padding: 5px;
			border: 0;
			box-shadow: 0;
			display: inline;
		}	
 	#content section p #user{ }

		#content section p #cmt{ font-size:14px; }

		#content section #head_img{height:auto !important; width:100% !important;display:inline;}
</style>
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
	<div id="fb-root"></div>
	<script>
		(function(d, s, id) {
			var js, fjs = d.getElementsByTagName(s)[0];
			if (d.getElementById(id)) return;
			js = d.createElement(s); js.id = id;
			js.src = "//connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v2.0";
			fjs.parentNode.insertBefore(js, fjs);
			}	
		(document, 'script', 'facebook-jssdk'));
	</script>

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
											<h2><center><?php 
											$imgname=$row['img_name'];
											echo $row['blog_title']; ?></center></h2>
										</header>
									<?php if(strlen($imgname) > 0){ ?>
									<img id="head_img" src="<?php echo $imgname; ?>" />
									<br/>
                                                                        <span style="color: #4f6e97 !imporatnt;font-size: 1.05em !important; ">
									<?php
										}
										echo $row['article'];
										
									?>
                                                                        </span>
									<center>
									<div id="share-buttons">
 
									<!-- Facebook -->
									<a href="http://www.facebook.com/sharer.php?u=<?php echo $url; ?>" target="_blank"><img src="http://djicacta.org/images/facebook.png" alt="Facebook" /></a>
 
									<!-- Twitter -->
									<a href="http://twitter.com/share?url=<?php echo $url; ?>&text=<?php echo $row['blog_title'].' | DJICACTA'; ?>" target="_blank"><img src="http://djicacta.org/images/twitter.png" alt="Twitter" /></a>
 
									<!-- Google+ -->
									<a href="https://plus.google.com/share?url=<?php echo $url; ?>" target="_blank"><img src="http://djicacta.org/images/google.png" alt="Google" /></a>
 
									<!-- LinkedIn -->
									<a href="http://www.linkedin.com/shareArticle?mini=true&url=<?php echo $url; ?>" target="_blank"><img src="http://djicacta.org/images/linkedin.png" alt="LinkedIn" /></a>
 
									<!-- Email -->
									<a href="mailto:?Subject=Simple Share Buttons&Body=I%20saw%20this%20and%20thought%20of%20you!%20 <?php echo $url; ?>"><img src="http://djicacta.org/images/email.png" alt="Email" /></a>
									
									</div>
									</center>
									</section>
									
									<section>
										<header>
											<h2>Comments</h2>
 										</header>
 										<?php

 										$query2 = "select * from comments where b_id =$id  order by c_id DESC";
 										$result2 = mysql_query($query2);

 				if($result2)
 					{
 					while($row2=mysql_fetch_assoc($result2))
 						{	
 							$uname = $row2['name'];
 						$user = $row2['email_user'];
 						$cmnt = $row2['comment'];
 						echo '<p style = "font-size:15px; color:#000; margin:0;margin-top:10px;" id = "user">'.$uname.'('.$user.'):&nbsp;</p>
 						
 						<p id = "cmt" style = "font-size:17px;margin:0;margin-top:-5px;padding:0 5px;;background:#F0F5FA">'.$cmnt.'
 						</p>';
 						}
 					}
 										?>
<br/>

<form method="post" action="<?php echo"comm_add.php?input=$id" ?>">
<h4>Submit your comment:</h4>
		  <div id="card">
			<div class="left">Name:</div>
			<div class="right"><input type="text" name="name" required></div>
		  </div>

		<div id="card">
			<div class="left">Email id:</div>
			<div class="right"><input type="text" name="email_id"  required></div>
		  </div>
		  
			  
		  <div id="card">
			<div class="left"> Comment:</div>
			<div class="right"><textarea  name="message" placeholder="Write your comment here..."  required></textarea></div>
		  </div>
  			
			<br><br>
			<center>
		  <input style="background:#063d8e; color:white; border:none; width:6em; cursor:pointer;" type="submit" name="send" value="Submit"></center>
		  </form>
 									

		  	

		   

		  


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