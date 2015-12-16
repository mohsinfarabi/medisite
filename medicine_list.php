<!DOCTYPE html>
<head></head>
<body>
<?php
error_reporting(0);
$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = '';
$conn = mysql_connect($dbhost, $dbuser, $dbpass) or die ('Error connecting to mysql');

$dbname = 'medicine';
mysql_select_db($dbname);

$query = "SELECT * FROM products";
$result = mysql_query($query) 
or die(mysql_error()); 
print "<Strong>Medicine List:</Strong><br>";
print "<br>";
print " 
<table border=\"5\" cellpadding=\"5\" cellspacing=\"0\" style=\"border-collapse: collapse\" bordercolor=\"#808080\" width=\"100&#37;\" id=\"AutoNumber2\" bgcolor=\"#C0C0C0\"><tr> 
<td width=100>Name</td> 
<td width=100>Quantity</td> 
<td width=100>Price</td> 
<td width=100>Company</td>
<td width=100>Dose</td>
</tr>"; 

while($row = mysql_fetch_array($result, MYSQL_ASSOC)) 
{ 
print "<tr>"; 
print "<td>" . $row['name'] . "</td>"; 
print "<td>" . $row['quantity'] . "</td>"; 
print "<td>" . $row['price'] . "</td>";
print "<td>" . $row['company'] . "</td>";
print "<td>" . $row['dose'] . "</td>";
print "</tr>"; 
} 
print "</table>"; 
?>
<br>
<a href = "admin.php">Go to Admin Panel</a>
</body>
</html>