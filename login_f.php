<?php
session_start();
$con = mysqli_connect('localhost','root','','e-agri') or die("unable to connect" .mysqli_error($con));
{
	$emailid=mysqli_real_escape_string($con,$_POST['emailid']);
	$password=mysqli_real_escape_string($con,$_POST['password']);
	$sql=mysqli_query($con,"SELECT * from register_f where emailid='$emailid' AND password='$password'") or die("query error" .mysqli_error($con));
	if(mysqli_num_rows($sql) > 0)
	{
		$_SESSION['user']=$emailid;
		 		header('Location:farmer_index.php');
		exit();
	}
	else
	{
		echo "Please enter correct UserId and Password";
	}
}

?>