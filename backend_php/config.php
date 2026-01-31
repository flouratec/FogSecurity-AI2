<?php
$conn = new mysqli("localhost","root","","fogsecurity");
if($conn->connect_error){
    die("Database connection failed");
}
?>
