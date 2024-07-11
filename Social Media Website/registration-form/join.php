<?php
$servername = "localhost"; 
$username = "root"; 
$password = "";
$database = "quincydb"; 

$conn = mysqli_connect($servername, $username, $password, $database);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];

$sql = "INSERT INTO userdetails (username,email, password) VALUES ('$username', '$email', '$password')";

if (mysqli_query($conn, $sql)) {
    header("Location: ../index.html");
} 
else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

mysqli_close($conn);
?>