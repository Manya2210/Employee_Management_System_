<?php 
session_start();
include "../dbcon.php";

$reply_by = $_SESSION['name'];
$task = $_POST['task'];
$reply = $_POST['reply'];
$tid = $_POST['t_id'];

echo $data = "insert into replytask(task,reply,t_id,reply_by) values('$task','$reply','$tid','$reply_by')";
$result = mysqli_query($con,$data);
header('location: emp_task.php');


?>