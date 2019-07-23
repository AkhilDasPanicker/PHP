<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "employee";


// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
} 

$a_id=$_GET['id'];

$sql = "DELETE FROM student WHERE id = '$a_id'" ;

if ($conn->query($sql) === TRUE) {
echo "Record deleted successfully";
} else {
echo "Error deleting record: " . $conn->error;
}

$conn->close();
header("location: index.php");

?>