<?php
$role=$_SESSION['role'];
if ($role=='employee')
{
	header("location:../employee/emp_dashboard.php");
}
?>