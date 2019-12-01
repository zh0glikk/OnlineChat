<?php
		session_start();
		include 'connection.php';

		$userName= $_POST['userName'];
		$isOnline=$_POST['online'];


		$sql_Online="UPDATE sync SET active='$isOnline' WHERE username='$userName'";
		$conn->query($sql_Online);

		echo $username;
		
		session_unset();  // clear variables
		session_destroy(); 

?>