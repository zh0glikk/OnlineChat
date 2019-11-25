<?php
	session_start();
	include 'connection.php';

	ini_set('display_errors', 1);
	error_reporting(E_ALL);

	$username=$_POST['username'];
	$password=$_POST['password'];



	$query = "SELECT * FROM  sync  WHERE username='$username' and password='$password'";
	$result=$conn->query($query);
	$count=mysqli_num_rows($result);

	if($count == 1)
	{
		$_SESSION['username']=$username;
		echo $username;
	}
	else{
		echo "Fail";
	}




?>