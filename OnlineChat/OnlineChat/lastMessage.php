<?php 
	session_start();
	include 'connection.php';


	$query = "SELECT * FROM  `messages`  WHERE `drowed` = 'n' ";
	$result=$conn->query($query);
	$count=mysqli_num_rows($result)	;
	$row = mysqli_fetch_assoc($result);

	if($count>=1)
	{
      
      	    echo "<div style=\"margin-left:5%\" class=\"slide-left\">
	                                <div style=\"color:#34b1eb\">";
	                                echo $row['name'];
	                                echo "</div>
	                                <p style=\"color:black\">";
	                                echo $row['message'];
	                                echo "</p>
	                            </div>
	                            <hr>";

	        $queryy="UPDATE `messages` SET `drowed` = 'y' WHERE `drowed` = 'n' ";
			$conn->query($queryy);
}


?>