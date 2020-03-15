<?php 
include('dbcon.php');
if (isset($_POST['submit'])){
$firstname=$_POST['firstname'];
$lastname=$_POST['lastname'];
$gender=$_POST['gender'];
$address=$_POST['address'];
$contact=$_POST['contact'];
$year_level=$_POST['year_level'];
$status="active";
$username=$_POST['username'];
$password=$_POST['password'];
$user_type = $_POST['user_type'];

								
mysqli_query($link,"insert into member(firstname,lastname,gender,address,contact,year_level,status,username,password) values('$firstname','$lastname','$gender','$address','$contact','$year_level','$status','$username','$password')")or die(mysqli_error($link));
mysqli_query($link,"insert into users (username,password,firstname,lastname,user_type) values('$username','$password','$firstname','$lastname','$user_type')")or die(mysqli_error($link));
 
header('location:member.php');
}
?>	