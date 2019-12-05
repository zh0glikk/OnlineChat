<?php 
	include 'connection.php';

	$message=$_POST['message'];
	$userName= $_POST['userName'];



	$query = "INSERT INTO  messages(message,name,drowed)  VALUES ('$message','$userName','n')";
	$conn->query($query);
	



	    // echo "<div style=\"margin-left:5%\" class=\"slide-left\">
     //                            <div style=\"color:#34b1eb\">$userName</div>
     //                            <p style=\"color:black\">$message</p>

     //                        </div>
     //                        <hr>";




?>