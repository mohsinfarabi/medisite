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
				<strong>Dose</strong><br>
				<input type = "text" name="dose" required="required">
			</p>

			
			
			<p>
				<input type="submit" name="submit" value="Submit"> <!-- submit is used for button-->
			</p>

		</form>
			
			<a href="admin.php">Go Back</a> <br>
<?php 
error_reporting(0);
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
$quantity=$_POST['quantity'];
$price=$_POST['price'];
$company=$_POST['company'];
$dose=$_POST['dose'];
$sql= "INSERT INTO products (name,quantity,price,company,dose) VALUES ('$name','$quantity','$price','$company',$dose)";
mysql_query($sql,$con);
mysql_close($con);
echo "Entry Successful!!!";
}
?>

</body>
</html>