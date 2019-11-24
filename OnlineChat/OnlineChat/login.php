<?php
	session_start();
	include 'connection.php';

	ini_set('display_errors', 1);
	error_reporting(E_ALL);

	$username=$_POST['username'];
	$password=$_POST['password'];



	$query = "SELECT * FROM  sync  WHERE username='$username' and password='$password'";
	$result=$conn->query($query);
	$count=mysql_num_rows($result);

	if($count == 1)
	{
		$_SESSION['username']=$username;
	}



	if(isset($_SESSION['username'])){
		$username=$_SESSION['username'];
		
	}


?>