<?php 
session_start();
include "dbcon.php";

$fname = $_POST['fname'];
$password = $_POST['password'];


$data ="select * from ems where fname='$fname' and password='$password'";
$result = mysqli_query($con,$data);
$value = mysqli_num_rows($result);
$user = mysqli_fetch_array($result);

if($value==1){
    $session_id=session_id();
    $_SESSION['auth']=$session_id;
    $_SESSION['eid']=$user['id'];
    $_SESSION['name']=$user['fname'];
    $_SESSION['role']=$user['role'];
    

	$role = $user['role'];
	//echo $role;
	//die;
	if($role=='admin')
	{
	
		header('location: admin/dashboard.php');
	}
	
	elseif($role=='employee'){
     
		header('location: employee/emp_dashboard.php');
	}
}
else{
	$_SESSION['error'] = "wrong email or password";
	header('location: index.php');
	echo "Login failed";

}




?>


