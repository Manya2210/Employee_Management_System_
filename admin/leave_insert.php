<?php 
include "../dbcon.php";
include "../session.php";

$a = $_POST['valid_from'];
$b = $_POST['valid_to'];
$c = $_POST['earning_leave'];
$d = $_POST['medical_leave'];
$e= $_POST['casual_leave'];
$f=$_POST['assigned_to'];
$assign_by=$_SESSION['eid'];

//echo "<pre>";
//print_r($eid);
foreach ($f as $g) {
	$data = "insert into assignleave (valid_from,valid_to,earning_leave,medical_leave,casual_leave,assigned_to,assigned_by) values('$a','$b','$c','$d','$e','$g','$assign_by')";
	mysqli_query($con,$data);
	header('location: show_leave.php');
}


?>