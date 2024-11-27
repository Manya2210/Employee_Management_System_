<?php 
include "../dbcon.php";

$fname = $_POST['fname'];
$lname = $_POST['lname'];
$email = $_POST['email'];
$password = $_POST['password'];
$age = $_POST['age'];
$phone = $_POST['phone'];
$gender = $_POST['gender'];
$department = $_POST['department'];
$role = $_POST['role'];

echo $data = "insert into ems(fname,lname,email,password,age,phone,gender,department,role) values('$fname','$lname','$email','$password','$age','$phone','$gender','$department','$role')";

mysqli_query($con,$data);
header('location: dashboard.php');




?>