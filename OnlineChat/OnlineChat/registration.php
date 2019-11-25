<?php 

	include 'connection.php';

	$username=$_POST['username'];
	$password=$_POST['password'];


	$query = "SELECT * FROM  sync  WHERE username='$username'";
	$result=$conn->query($query);
	$count=mysqli_num_rows($result);

	if($count==1){
		echo "Choose other login";
	}
	else{
		$sql = "INSERT INTO sync (username,password) VALUES ('$username','$password')";
		$conn->query($sql);
		echo "You've registered";
	}
	


	

?>