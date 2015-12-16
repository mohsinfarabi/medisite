<!DOCTYPE html>
<html>
<head>Medicine Entry Page</head>
<body>
<h3>Enter Full Details of the Medicine</h3>
		<form action="insertformmedi.php" method="post">
			<p>
				<strong>Name</strong><br>
				<input type = "text" name="name" required="required">
			</p>
			<p>
				<strong>Quantity</strong><br>
				<input type = "text" name="quantity" required="required">
			</p>
			<p>
				<strong>Price</strong><br>
				<input type = "text" name="price" required="required">
			</p>
			<p>
				<strong>Company</strong><br>
				<input type = "text" name="company" required="required">
			</p>

			
			
			<p>
				<input type="submit" name="register" value="Submit"> <!-- submit is used for button-->
			</p>

		</form>
			
			<a href="admin.php">Go Back</a>
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