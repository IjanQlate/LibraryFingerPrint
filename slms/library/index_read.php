<?php
// required headers
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
 
// include database and object files
include_once '../config/database.php';
include_once '../objects/index.php';

// instantiate database and product object
$database = new Database();
$db = $database->getConnection();
// initialize object
$index = new Index($db);

if ($_POST['function'] == 'UserLogin'){

	$index->username = $_POST['Username'];
	$index->password = md5($_POST['password']);
	$index->privilege = $_POST['privilege'];
	$matchuser = $index->read_one();

	if($matchuser){

		echo json_encode(array("Status"=>"Success", "Message"=>"Please proceed with verification FingerPrint", "FingerPrintID"=>$matchuser['fingerprintid']));
	}
	else {
		echo json_encode(array("Status"=>"Failed", "Message"=>"Your account not match in sistem"));
	}

}
else if ($_POST['function'] == 'VerifyFingerPrint'){

	// Call API From FingerPrint
	$index->username = $_POST['Username'];
	$index->password = md5($_POST['password']);
	$index->privilege = $_POST['privilege'];
	$matchuser = $index->read_one();

	if($matchuser['fingerprintid']){

		echo json_encode(array("Status"=>"Success", "FingerID"=>$matchuser['fingerprintid']));
	}
	else {
		echo json_encode(array("Status"=>"Failed", "Message"=>"Your fingerprint id not found, please contact admin to details"));
	}	

}
else if ($_POST['function'] == 'SetSession'){

	session_start();
	// $_SESSION['library_user'] = 

}

?>