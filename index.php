<?php



?>
<html>
<head>
	<title>Home</title>
</head>
<body>
<a href="index.html" style="float:right">Admin Login</a> <br>	

<h1 align="center" style="color:blue">Welcome To mediSite</h1><br>
<div class="wrapper">
<form method="post" action="login.php">
	<label>Email: <input type="text" name="userid"><br><br></label>
	<label>Password: <input type="password" name="userpass"><br><br></label>
	<label><input type="submit" name="userlogin" value="Login"></label><br><br>
	</form>
	<br>
	Don't Have an Account?? <a href="insertform.php">Sign up</a><br>
</div>
</body>
</html>