<?php 
	include 'connection.php';

	$message=$_POST['message'];
	$userName= $_POST['userName'];



	$query = "INSERT INTO  messages(message,name)  VALUES ('$message','$userName')";
	$conn->query($query);
	


?>