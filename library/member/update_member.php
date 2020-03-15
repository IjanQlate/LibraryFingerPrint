<?php 
include('dbcon.php');
if (isset($_POST['submit'])){
$id=$_POST['id'];
$firstname=$_POST['firstname'];
$lastname=$_POST['lastname'];
$gender=$_POST['gender'];
$address=$_POST['address'];
$contact=$_POST['contact'];
$member_type=$_POST['member_type'];
$year_level=$_POST['year_level'];
$username=$_POST['username'];
$password=$_POST['password'];
$status=$_POST['status'];
mysqli_query($link,"update member set firstname='$firstname',lastname='$lastname',gender='$gender',address = '$address',contact = '$contact',year_level = '$year_level',status = '$status',username = '$username',password='$password' where member_id='$id'")or die(mysqli_error($link));
								
								
header('location:member.php');
}
?>	