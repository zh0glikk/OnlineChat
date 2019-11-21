<?php 

$dbServername = "localhost";
	$dbUsername = "root";
	$dbPassword = "root";
	$dbName = "students"; 

	$conn = new mysqli($dbServername,$dbUsername,$dbPassword,$dbName); 

	// if(isset($_POST['username']) && isset($_POST['password'])){
		$username=$_POST['username'];
		$password=$_POST['password'];


		$sql = "INSERT INTO sync (username,password) VALUES ('$username','$password')";  

		
		$conn->query($sql);

	// }

	


?>