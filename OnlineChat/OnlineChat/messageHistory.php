<?php 
	session_start();
	include 'connection.php';

		$query = "SELECT * FROM  messages";
		$result=$conn->query($query);
		$var="xxxxxx";






		// while($row = mysqli_fetch_assoc($result)){
                        

  //                          echo "<div style=\"margin-left:5%\" >
  //                               <span style=\"color:#34b1eb\">$row['username']</span>
  //                               <p style=\"color:black\">$row['message']</p>
  //                           </div>
  //                           <hr>";

  //                   }

		

?>