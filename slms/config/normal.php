<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "slms";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die(json_encode(array("status"=>"failed", "message"=>"Connection failed.")));
}
?>