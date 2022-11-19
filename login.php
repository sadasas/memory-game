<!DOCTYPE html>
<html>

<head>
	<link rel="stylesheet" href="css/login.css">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Login</title>
</head>

<body>
	<fieldset>
		<legend>Login Form</legend>
		<form name="frmContact" method="post" action="./API/InputUsername.php">
			<p>
				<label for="Name">Name </label>
				<input type="text" name="txtName" id="txtName">
			</p>

			<p>
				<label for="Password">Password </label>
				<input type="password" name="txtPassword" id="txtPassword">
			</p>
			<input type="submit" name="Submit" id="Submit" value="Submit">

		</form>
		<button onclick="Register()">Register</button>
	</fieldset>
</body>

<script src="scripts/popupalert.js?n=1"></script>

</html>
