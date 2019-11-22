<?php 

$dbServername = "localhost";
	$dbUsername = "root";
	$dbPassword = "root";
	$dbName = "students"; 

	$conn = new mysqli($dbServername,$dbUsername,$dbPassword,$dbName); 


		$username=$_POST['username'];
		$password=$_POST['password'];

		// $sql_select="SELECT username FROM `sync` WHERE username=$username";
		// $result=$conn->query($sql_select);

			$sql = "INSERT INTO sync (username,password) VALUES ('$username','$password')";
			$conn->query($sql);
	

		  

		
		

	

	


?>