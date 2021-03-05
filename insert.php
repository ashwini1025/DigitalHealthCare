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

$sql = "INSERT INTO previous (Patients_name,age,problem,date)
VALUES ('$_POST[Patient_name]','$_POST[age]','$_POST[problem]', '$_POST[date]' )";

if ($conn->query($sql) === TRUE) {
    echo "You are signed in";
    header("location:userdata.php");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>