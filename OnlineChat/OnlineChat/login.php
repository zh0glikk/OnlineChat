<?php
	session_start();
	include 'connection.php';

	ini_set('display_errors', 1);
	error_reporting(E_ALL);

	$username=$_POST['username'];
	$password=$_POST['password'];
	$isOnline=$_POST['online'];
	$_SESSION['username'] = $username;






	$query = "SELECT * FROM  sync  WHERE username='$username' and password='$password'";
	$result=$conn->query($query);
	$count=mysqli_num_rows($result);

	if($count == 1)
	{
		$_SESSION['username']=$username;
		$sql_Online="UPDATE sync SET active='$isOnline' WHERE username='$username'";
		$conn->query($sql_Online);
		echo $username;
	}
	else{
		echo "Fail";
	}




?>