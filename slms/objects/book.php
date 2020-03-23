<?php
date_default_timezone_set("Asia/Kuala_Lumpur");
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

if ($_POST['function'] == "display") {

    // Total Book
    $sqlfirst = "SELECT * FROM `book`";
    $result = $conn->query($sqlfirst);

    if ($result->num_rows > 0) {

        $i = 1;

        while($row = $result->fetch_assoc()) {

            $id = $row['id'];
            $bookname = $row['bookname'];
            $author = $row['author'];
            $serial = $row['serial'];
            $published = $row['published'];
            $racknumber = $row['racknumber'];
            $quantity = $row['quantity'];
            $quantityloan = $row['quantityloan'];
            $statusbook = $row['statusbook'];
            $updateby = $row['updateby'];
            $lastupdate = $row['lastupdate'];


            $post_data[] = array("id"=>$id,"bookname"=>$bookname,"author"=>$author,"serial"=>$serial,"published"=>$published,"racknumber"=>$racknumber,"quantity"=>$quantity,"quantityloan"=>$quantityloan, "statusbook"=>$statusbook, "updateby"=>$updateby, "lastupdate"=>$lastupdate);

            $i++;

        }

        echo $post_data = json_encode(array('book' => $post_data));


    } else {
            echo '{
                "sEcho": 1,
                "iTotalRecords": "0",
                "iTotalDisplayRecords": "0",
                "book": []
            }';
    }

}
else if ($_POST['function'] == "Create") {

    $BookName = $_POST['BookName'];
    $Author = $_POST['Author'];
    $serialnumber = $_POST['serialnumber'];
    $Published = $_POST['Published'];
    $racknumber = $_POST['racknumber'];
    $quantity = $_POST['quantity'];
    $quantityloan = $_POST['quantityloan'];
    $statusbook = $_POST['statusbook'];
    $updateby = $_POST['updateby'];
    $lastupdate = $_POST['lastupdate'];

    $sql = "INSERT INTO book (bookname, author, serial, published, racknumber, quantity, quantityloan, statusbook, updateby, lastupdate)
    VALUES ('$BookName', '$Author', '$serialnumber', '$Published', '$racknumber', '$quantity', '$quantityloan', '$statusbook', '$updateby', '$lastupdate')";

    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();


}
else if ($_POST['function'] == "edit") {

    print_r($_POST);

}
else if ($_POST['function'] == "delete") {

    //print_r($);

}


?>