<!DOCTYPE html>
<html>
<head>Registration Page</head>
<body>
<h3>Register Online</h3>
		<form action="insertform.php" method="post">
			
				<strong>Full Name</strong><br>
				<input type = "text" name="name" required="required">
			<br>
			
				<strong>Email</strong><br>
				<input type = "text" name="email" required="required">
			<br>
			
				<strong>Password</strong><br>
				<input type = "password" name="pass" required="required">
			<br>
			
				<strong>Phone</strong><br>
				<input type = "text" name="phone" required="required">
			<br>

			
			
				<strong>Address</strong><br>
				<input type = "text" name="address" required="required">
				<br>
			
				
			
				<input type="submit" name="submit" value="Submit"> <!-- submit is used for button-->
			</br>

		</form>
			<a href="index.php">Go Back</a>
<?php 
if (isset($_POST['submit']))
{
  
    $server="localhost"; 
    $user="root"; 
    $pass=""; 
    $db="medicine"; 
      
    // connect to mysql 
      
    mysql_connect($server, $user, $pass) or die("Sorry, can't connect to the mysql."); 
    $con=mysql_connect($server, $user, $pass);  
    // select the db 
      
    mysql_select_db($db) or die("Sorry, can't select the database."); 
$name=$_POST['name'];
$email=$_POST['email'];
$pass=$_POST['pass'];
$phone=$_POST['phone'];
$address=$_POST['address'];
$sql= "INSERT INTO customer (name,email,pass,phone,address) VALUES ('$name','$email','$pass','$phone','$address')";
mysql_query($sql,$con);
mysql_close($con);
}
?>
</body>
</html>