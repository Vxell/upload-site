<?php
$servername = 'localhost';
$username = 'root';
$password = 'root';

$conn = new mysqli($servername, $username, $password,'pdfuploaded');
if($conn->connect_error){
    die("Connection failed: " . $conn->connect_error);
}
?>

