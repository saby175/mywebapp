<?php  
$servername = "10.12.104.73";
$username = "mydb";
$password = "2jcWdlb7ShC7XNDi";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
?> 
