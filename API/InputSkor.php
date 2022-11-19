<?php

	require 'Config.php';
	
	$json =  file_get_contents('php://input');
	$data = json_decode($json,true);
	$txtName =$data["username"];
	$txtMove =$data["move"];
	$txtTime =$data["times"];

	//insert
	$sql = "INSERT INTO `topscore` ( `id`,`name`,`move`,`time` ) VALUES ('0','$txtName','$txtMove','$txtTime')";

	$rs = mysqli_query($mysqli,$sql);

	if($rs)
	{
		echo "score saved";
	}
	else
	{
		echo "failed";
	}

?>
