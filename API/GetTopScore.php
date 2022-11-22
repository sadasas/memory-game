<?php

require 'Config.php';
$query = "SELECT * FROM topscore";
$result = mysqli_query($mysqli,$query);

if(mysqli_num_rows($result) >0)
{
	while($row= mysqli_fetch_assoc($result)){
		echo "Name: " .$row["name"].  " Move: " .$row["move"]. " Time: " .$row["time"]. "<br>";
	}
}
else{
	echo"failed";
}





