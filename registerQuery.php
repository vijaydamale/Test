<?php
include("config.php");

if(isset($_POST['submit']))
{

$firstName=$_POST["Name"];
$lastName=$_POST["LastName"];
$emailID=$_POST["Email"];
$password1=$_POST["Password"];
$dob=$_POST["birthday_month"];
$gender=$_POST["radiobutton"];

echo $firstName;
$registerSql = "INSERT INTO customer (first, last,email,pass,dob,gender)
VALUES ('$firstName', '$lastName', '$emailID', '$password1', '$dob','$gender')";
if (mysqli_query($conn, $registerSql)) {
	header('Location:login.php');
    
} else {
    echo "Error: " . "<br>" . mysqli_error($conn);
}
}

?>