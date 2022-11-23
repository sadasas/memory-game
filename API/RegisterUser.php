<?php

require 'Config.php';

$username = $_POST['txtName'];
$password = $_POST['txtPassword'];

if ($username == '') {
	echo "<script>window.location.replace('../register.php');</script>";
	exit();
}
//insert
$sql = "INSERT INTO `user` ( `id`,`username`,`password` ) VALUES ('0','$username','$password')";

$rs = mysqli_query($mysqli, $sql);

if ($rs) {

	echo "<script>window.location.replace('../game.html?username=$username');</script>";
	echo "user saved";
} else {
	echo "failed";
}
?>
