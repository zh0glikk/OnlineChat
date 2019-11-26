<?php
		include 'connection.php';

		$userName= $_POST['userName'];
		$isOnline=$_POST['online'];


		$sql_Online="UPDATE sync SET active='$isOnline' WHERE username='$userName'";
		$conn->query($sql_Online);

		echo $username;

?>