<?php 
	session_start();
	include 'connection.php';

	$idmax="SELECT * FROM messages ORDER BY id DESC LIMIT 1";
	$resultt=$conn->query($idmax);
	$roww = mysqli_fetch_assoc($resultt);

      		if($_SESSION['id']<$roww['id'])
      		{
      			$_SESSION['id']=$roww['id'];
		      	    echo "<div style=\"margin-left:5%;font-family: Verdana; height: 14%;\" class=\"slide-left\">";
		      	    						echo "<img style=\"float:left; width:10%;margin-left:-3%\" src=\"".$roww['photo']."\">";
			                                echo "<span style=\"color:#34b1eb;margin-left:3%\">";
			                                echo $roww['name'];
			                                echo "</span>
			                                <p></p><span style=\"color:black;margin-left:3%\">";
			                                echo $roww['message'];
			                                echo "</span>
			                            </div>
			                            <hr>";

		        $queryy="UPDATE `messages` SET `drowed` = 'y' WHERE `drowed` = 'n' ";
				$conn->query($queryy);
			}

			else{
				echo "Fail";
			}


?>