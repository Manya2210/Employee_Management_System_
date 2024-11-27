<?php 
include "../dbcon.php";
include "../session.php";

$a = $_POST['leave_from'];
$b = $_POST['leave_to'];
$c = $_POST['earning_leave'];
$d = $_POST['medical_leave'];
$e= $_POST['casual_leave'];
$status="pending";
$f=$_SESSION['eid'];

//echo "<pre>";
//print_r($eid);

	$data = "insert into apply_leave (leave_from,leave_to,earning_leave,medical_leave,casual_leave,apply_by,status) values('$a','$b','$c','$d','$e','$f','$status')";
	mysqli_query($con,$data);
	header('location:leave.php');


?>