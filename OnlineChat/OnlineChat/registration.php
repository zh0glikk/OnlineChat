<?php 

	include 'connection.php';

	$username=$_POST['username'];
	$password=$_POST['password'];
	$photo=$_POST['photo'];


	$query = "SELECT * FROM  sync  WHERE username='$username'";
	$result=$conn->query($query);
	$count=mysqli_num_rows($result);

	if($count==1){
		echo "Choose other login";
	}
	else{
		$sql = "INSERT INTO sync (username,password,photo) VALUES ('$username','$password','$photo')";
		$conn->query($sql);
		echo "You've registered";
	}
	
?>