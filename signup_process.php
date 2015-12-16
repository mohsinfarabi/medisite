<?php
 $server="localhost"; 
 $user="root"; 
 $pass=""; 
 $db="medicine"; 
      
    // connect to mysql 
      
mysql_connect($server, $user, $pass) or die("Sorry, can't connect to the mysql."); 
      
    // select the db 
      
mysql_select_db($db) or die("Sorry, can't select the database."); 
  
$name=$_POST['name'];
$email=$_POST['email'];
$pass=$_POST['pass'];
$phone=$_POST['phone'];
$address=$_POST['address'];

$q="INSERT INTO  customer(name,email,pass,phone,address) VALUES ('$name','$email','$pass','$phone','$address')";
$r=mysql_query($q);

if($r)
{
	echo "Signup Successful!!";
}
else
{
	echo mysql_error();
}?>