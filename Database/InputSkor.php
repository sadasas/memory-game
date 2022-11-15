<?php

require 'Config.php';
	
	//let data = JSON.parse($_POST);
	//$txtName =data.Name;
	//$txtScore = data.Score; 
 
	//insert
	$sql = "INSERT INTO `topscore` ( `id`,`name`,`score` ) VALUES ('0','aaaa','ggggg')";

	$rs = mysqli_query($mysqli,$sql);

	if($rs)
	{
		echo "score saved";
	}

?>
