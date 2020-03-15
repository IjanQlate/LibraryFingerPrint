<?php
// required headers
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: access");
header("Access-Control-Allow-Methods: GET");
header("Access-Control-Allow-Credentials: true");
header('Content-Type: application/json');
 
// include database and object files
include_once '../config/database.php';
include_once '../objects/user.php';
 
// get database connection
$database = new Database();
$db = $database->getConnection();

// initialize object
$user = new User($db);

// set ID property of record to read
$user->id = isset($_GET['id']) ? $_GET['id'] : die();

// read the details of product to be edited
$user->readOne();

if($user->id != null){

    // create array
    $user_arr = array(
        "id" =>  $user->id,
        "username" => $user->username,
        "password" => $user->password,
        "fingerprintid" => $user->fingerprintid,
        "fullname" => $user->fullname,
        "identitycard" => $user->identitycard,
        "gender" => $user->gender,
        "title" => $user->title,
        "privilege" => $user->privilege,
        "status" => $user->status,
        "createdon" => $user->createdon,
        "createdby" => $user->createdby,
    );

    // set response code - 200 OK
    http_response_code(200);
 
    // make it json format
    echo json_encode($user_arr, JSON_PRETTY_PRINT);

}
else{
    // set response code - 404 Not found
    // http_response_code(404);
 
    // tell the user product does not exist
    echo json_encode(array("message" => "No Data User Available"));
}
?>