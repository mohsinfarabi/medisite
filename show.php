<?php
error_reporting(0);
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "medicine";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT * FROM cart";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    
    while($row = $result->fetch_assoc()) {
        echo  " <Strong>Email:</Strong> " . $row["email"]. "<br> " ;
        if(!empty($row["contents"]) ){
			$uns = unserialize($row["contents"]);
			echo "<br><strong>Items:</strong> <pre>";
			print_r($uns);
			echo "</pre>";
		}
    }
} else {
    echo "0 results";
}

$conn->close();
?>