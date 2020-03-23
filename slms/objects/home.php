<?php
// error_reporting(0);
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


// Total Book
$sqlfirst = "SELECT COUNT(id) as TOTALFIRST FROM `book`";
$result = $conn->query($sqlfirst);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $totalfirst = $row['TOTALFIRST'];
} else {
    $totalfirst = 0;
}

// Total Loan
$sqlsecond = "SELECT COUNT(id) as TOTALSECOND FROM `loan`";
$result = $conn->query($sqlsecond);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $totalsecond = $row['TOTALSECOND'];
} else {
    $totalsecond = 0;
}

// Pending Return
$sqlthird = "SELECT COUNT(id) as TOTALTHIRD FROM `loan` WHERE statusloan = 'Pending'";
$result = $conn->query($sqlthird);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $totalthird = $row['TOTALTHIRD'];
} else {
    $totalthird = 0;
}

// Total Member
$sqlfourth = "SELECT COUNT(id) as TOTALFOURTH FROM `user`";
$result = $conn->query($sqlfourth);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $totalfourth = $row['TOTALFOURTH'];
} else {
    $totalfourth = 0;
}


echo json_encode(array("status"=>"success","TotalBook"=>$totalfirst,"TotalLoan"=>$totalsecond,"TotalPendingReturn"=>$totalthird,"TotalMembers"=>$totalfourth));




?>