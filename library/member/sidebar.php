
<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "eb_lms";
    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    } 

    $sql = "UPDATE Counter SET visits = visits+1 WHERE id = 1";
    $conn->query($sql);

    $sql = "SELECT visits FROM Counter WHERE id = 1";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            $visits = $row["visits"];
        }
    } else {
        echo "no results";
    }
    
    $conn->close();
?>

<!doctype html>  
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Visit counter</title>
    </head>
    <body>
        

    </body>






			<div class="life-side-bar">
			<div class="hero-container"></div>
<strong>Library Hours</strong>
<p>Mon - Fri : 8am - 7pm</p>
<p>Sat - Sun : Closed<p>
<p>Public Holidays : Closed</p>
<strong>Contact Number:</strong>
<p>03-9179 56005</p>
<p>Visitors: <?php print $visits; ?></p>
<p></p>


			
</div>

</html>