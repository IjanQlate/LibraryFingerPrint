<?php 
include('dbcon.php');
if (isset($_POST['submit'])){
$firstname=$_POST['firstname'];
$lastname=$_POST['lastname'];
$gender=$_POST['gender'];
$address=$_POST['address'];
$contact=$_POST['contact'];
$year_level=$_POST['year_level'];
$status="Active";
$username=$_POST['username'];
$password=$_POST['password'];
$member_type = $_POST['member_type'];

								
mysqli_query($link,"insert into member(firstname,lastname,gender,address,contact,year_level,status,username,password, member_type) values('$firstname','$lastname','$gender','$address','$contact','$year_level','$status','$username','$password', '$member_type')")or die(mysqli_error($link));

 
header('location:success.php');
}
?>	