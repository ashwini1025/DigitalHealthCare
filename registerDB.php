<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "medi";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "INSERT INTO logindb (name,pass)
VALUES ('$_POST[name]','$_POST[pass]')";

if ($conn->query($sql) === TRUE) {
    echo "You are signed in";
    header("location:index.html");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>