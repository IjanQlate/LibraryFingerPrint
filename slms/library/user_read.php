<?php
// required headers
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
 
// include database and object files
include_once '../config/database.php';
include_once '../objects/user.php';

// instantiate database and product object
$database = new Database();
$db = $database->getConnection();
 
// initialize object
$user = new User($db);
 
// read products will be here
// query products
$stmt = $user->read();
$num = $stmt->rowCount();

// check if more than 0 record found
if($num>0){

    // products array
    $user_arr=array();
    $user_arr["user"]=array();

    // retrieve our table contents
    // fetch() is faster than fetchAll()
    $i = 1;
    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)){


    	extract($row);
        $list_user = array(
            "id" => $id,
            "no" => $i,
            "username" => $username,
            "fingerprintid" => $fingerprintid,
            "fullname" => $fullname,
            "identitycard" => $identitycard,
            "gender" => $gender,
            "title" => $title,
            "privilege" => $privilege,
            "status" => $status,
            "createdon" => $createdon,
            "createdby" => $createdby
        );

    	array_push($user_arr["user"], $list_user);

    	$i++;

    }

    // set response code - 200 OK
    http_response_code(200);
 
    // show products data in json format
    echo json_encode($user_arr, JSON_PRETTY_PRINT);

} 
// no user found will be here
else{
 
    // set response code - 404 Not found
    // http_response_code(404);
 
    // tell the user no products found
    echo json_encode(
        array("message" => "User Data Not Available")
    );
}





// Password Hash
// $options = [
//     'cost' => 12,
// ];

// echo $hash = password_hash("iqbal", PASSWORD_BCRYPT, $options);


// if (password_verify('rasmuslerdorf', $hash)) {
//     echo 'Password is valid!';
// } else {
//     echo 'Invalid password.';
// }


?>