<?php 
include('dbcon.php');
if (isset($_POST['submit'])){
$id=$_POST['id'];
$firstname=$_POST['firstname'];
$lastname=$_POST['lastname'];
$gender=$_POST['gender'];
$address=$_POST['address'];
$contact=$_POST['contact'];
$year_level=$_POST['year_level'];
$status=$_POST['status'];
$user_mem=$_POST['username'];
$pass_mem=$_POST['password'];
$member_type=$_POST['member_type'];
mysqli_query($link,"update member set firstname='$firstname',lastname='$lastname',gender='$gender',address = '$address',contact = '$contact',year_level = '$year_level',status = '$status',username = '$username',password='$password' where member_id='$id'")or die(mysqli_error($link));
								
								
header('location:member.php');
}
?>	