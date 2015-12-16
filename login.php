<?php
session_start();
$username = "root";
$password = "";
$hostname = "localhost";

$dbhandle = mysql_connect("$hostname", "$username", "$password") or die("Could not connect");
$selected = mysql_select_db("medicine",$dbhandle);

$myusername = $_POST ['userid'];
$mypassword = $_POST ['userpass'] ;

$myusername =stripslashes($myusername);
$mypassword = stripslashes($mypassword);

$query = "SELECT * FROM customer WHERE email = '$myusername' AND pass = '$mypassword'";
$result = mysql_query($query) or die("Invalid Query". mysql_error());

$count = mysql_num_rows($result);

if ($count == 1){
	$_SESSION["user"]= $myusername;
	header("Location: home.php");

}
else{
	echo "<p style='color:red; font-size:35px;'>"."Wrong User ID/Password"."</p>";
}

?>