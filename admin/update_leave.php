<?php
include "../dbcon.php";

if(isset($_POST['approved']))
{
	echo $status="approved";
	echo $comment=$_POST['comment'];
	echo $aid = $_GET['a'];
	$data="update apply_leave set status='$status',comment='$comment' where a_id=$aid";
	mysqli_query($con,$data);
	header('location: show_leave.php');
}
if(isset($_POST['rejected']))
{
	$status="rejected";
	$comment=$_POST['comment'];
	$a_id=$_POST['a_id'];
	$data="update apply_leave set status='$status',comment='$comment' where a_id=$a_id";
	mysqli_query($con,$data);
	header('location: show_leave.php');
}
// ?>