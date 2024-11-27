<?php 
include "../dbcon.php";

$task = $_POST['task'];
$assign_by = $_POST['assign_by'];
$eid = $_POST['e_id'];
//echo "<pre>";
//print_r($eid);

foreach ($eid as $e) {
	$data = "insert into task(task,assign_by,e_id) values('$task','$assign_by','$e')";
	mysqli_query($con,$data);
	header('location: show_task.php');
}

?>