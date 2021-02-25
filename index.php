<?php
$servername = "10.12.104.73";
$username = "mydb";
$password = "5vihKLtMfqO5HjAB";

#Create connection
$conn = mysqli_connect($servername, $username, $password);

#Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";
?>
