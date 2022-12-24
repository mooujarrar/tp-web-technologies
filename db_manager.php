<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "uqtr_db";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
function authenticate($fusername, $fpassword, $conn) {
    $sql = "SELECT username, password FROM users WHERE username='$fusername' AND password='$fpassword'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        echo "authentication valid"
    }
    else {
        echo "authentication invalid";
    }
}

echo "Connected successfully";
?>