<?php
$conn = new mysqli("db", "root", "root");
if ($conn->connect_error)
    die("Connection failed: " . $conn->connect_error);
echo "Connected successfully";
?>