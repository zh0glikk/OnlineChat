<?php 
	include 'connection.php';

	$message=$_POST['message'];
	$userName= $_POST['userName'];


	$sql="SELECT * FROM sync WHERE username='$userName'";
	$result=$conn->query($sql);
	$row = mysqli_fetch_assoc($result);
	$photo=$row['photo'];



	$query = "INSERT INTO  messages(message,name,drowed,photo)  VALUES ('$message','$userName','n','$photo')";
	$conn->query($query);
	



	    // echo "<div style=\"margin-left:5%\" class=\"slide-left\">
     //                            <div style=\"color:#34b1eb\">$userName</div>
     //                            <p style=\"color:black\">$message</p>

     //                        </div>
     //                        <hr>";




?>