<!DOCTYPE html>
<html>
<head>Registration Page</head>
<body>
<h3>Register Online</h3>
		<form action="insertform.php" method="post">
			<p>
				<strong>Full Name</strong><br>
				<input type = "text" name="name" required="required">
			</p>
			<p>
				<strong>Email</strong><br>
				<input type = "text" name="email" required="required">
			</p>
			<p>
				<strong>Password</strong><br>
				<input type = "password" name="pass" required="required">
			</p>
			<p>
				<strong>Phone</strong><br>
				<input type = "text" name="phone" required="required">
			</p>

			
			<p>
				<strong>Address</strong><br>
				<input type = "text" name="address" required="required">

				</select>
			</p>	
			<p>
				<input type="submit" name="register" value="Submit"> <!-- submit is used for button-->
			</p>

		</form>
			<a href="index.html">Go Back</a>

</body>
</html>