<?php

$db=mysql_connect('mysql6.000webhost.com','a7392212_admin','Admin@123');
session_start();
$_SESSION['username']=$_POST['username'];
$username=$_POST['username'];
$password=$_POST['password'];
  

	if(!$db)
	{
		die("not connected :".mysql_error());
	}

	$select=mysql_select_db('a7392212_blog');

	if(!$select)
	{
		die("Not selected :".mysql_error());
	}



	$query="select * from login where username= '$username'";
	$result=mysql_query($query);
	if($result===false)
{
		die(mysql_error());
	}
	
	$row =mysql_fetch_array($result);


	$str1=$row['username'];
	
	$str2=$row['password'];
	
	if(strcmp($username,$str1)==0 && strcmp($password,$str2)==0)
	{
		include "write.php";
	}
	
	else
		echo "false";
	

?>
