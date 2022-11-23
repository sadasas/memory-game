<?php

require 'Config.php';

$username = $_POST['txtName'];
$password = $_POST['txtPassword'];

//insert
$sql = "SELECT * FROM  `user` WHERE username='$username' AND password = '$password'";
$rs = mysqli_query($mysqli, $sql);
$check = mysqli_num_rows($rs);

if ($check == '0') {
	$error = 'Your password or username is wrong';
	echo "<script>window.location.replace('../login.php?message=$error');</script>";
	exit();
} else {
	echo "<script>window.location.replace('../game.html?username=$username');</script>";
	echo "user logged";
	exit();
}
