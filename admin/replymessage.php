<?php 
include "../dbcon.php";

$rid = $_GET['a'];
$admin_reply = $_POST['adminmsg'];

$sql = "select * from replytask where r_id = $rid";
$res = mysqli_query($con,$sql);
$row = mysqli_fetch_array($res);

$task = $row['task'];
$reply = $row['reply'];
$tid = $row['t_id'];
$reply_by = $row['reply_by'];

echo $data = "insert into adminreply(r_id,task,reply,t_id,reply_by,adminmsg) values('$rid','$task','$reply','$tid','$reply_by','$admin_reply')";
$result = mysqli_query($con,$data);
header('location: replytask.php');


?>