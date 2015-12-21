<?php include "connect.php" ?>
<?php

// Create connection
$conn = new mysqli("localhost", "root","", "bigshope");

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
} 



//mysql_select_db($mysql_database, $conn) or die("Database Error!!! Try again later");

// Change database to "test"
mysqli_select_db($conn,"bigshope");


// make foo the current db

?>
