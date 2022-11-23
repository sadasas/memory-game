<?php

	require 'Config.php';
	
	$json =  file_get_contents('php://input');
	$data = json_decode($json,true);
	$txtName =$data["name"];
	$txtMove =$data["move"];
	$txtTime =$data["time"];

	$query = "SELECT * FROM `topscore`";
	$result = mysqli_query($mysqli,$query);

	if(mysqli_num_rows($result)>10)
	{
		$temData= $data;
		echo $temData["name"];
		while($row = mysqli_fetch_assoc($result))
		{
				if($row["time"] > $temData["time"])
				{
					$temData = $row;
				}
		}
		if($tempData["name"] == $txtName)
		{
			exit();
		}
		else
		{
			$temName = $temData["name"];
			$qd = "DELETE FROM `topscore` WHERE name = '$temName'";
			$rs = mysqli_query($mysqli,$qd);

			//insert 
			$sql = "INSERT INTO `topscore` ( `id`,`name`,`move`,`time` ) VALUES ('0','$txtName','$txtMove','$txtTime')";
			$rs = mysqli_query($mysqli,$sql);

			echo "TopScore updated";

		}
	}
	else
	{
		//select 
		echo $txtName;
		$sn = "SELECT * FROM `topscore` WHERE name = '$txtName'";
		$ss = mysqli_query($mysqli,$sn);
		$row = mysqli_fetch_row($ss);
		if($row>0)
		{
				echo $row[3];
				echo $txtTime;
				if($row[3] > $txtTime)
				{
					$dn = "DELETE FROM `topscore` WHERE name = '$txtName'";
					$ds = mysqli_query($mysqli,$dn);
					$sql = "INSERT INTO `topscore` ( `id`,`name`,`move`,`time` ) VALUES ('0','$txtName','$txtMove','$txtTime')";
					$rs = mysqli_query($mysqli,$sql);
				}
			
		}
		else{
			$sql = "INSERT INTO `topscore` ( `id`,`name`,`move`,`time` ) VALUES ('0','$txtName','$txtMove','$txtTime')";
			$rs = mysqli_query($mysqli,$sql);
		}
	}
	
	$reorder = "SELECT * FROM `topscore` ORDER BY time ASC";
	$ra = mysqli_query($mysqli,$reorder);
	$delete = "DELETE  FROM `topscore`";
	$da = mysqli_query($mysqli,$delete);
	while($row = mysqli_fetch_assoc($ra))
	{
		$tempName = $row["name"];
		$tempMove = $row["move"];
		$tempTime = $row["time"];
		$updateSql = "INSERT INTO `topscore` (`id` ,`name`,`move`,`time`) VALUES ('0', '$tempName','$tempMove','$tempTime')";
		$ua =mysqli_query($mysqli,$updateSql);
	}

	echo "score saved";

?>
