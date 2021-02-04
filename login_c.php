<?php
session_start();
$con = mysqli_connect('localhost','root','','e-agri') or die("unable to connect");
{
	$emailid=mysqli_real_escape_string($con,$_POST['emailid']);
	$password=mysqli_real_escape_string($con,$_POST['password']);
	$sql=mysqli_query($con,"SELECT * from register_c where emailid='$emailid' AND password='$password'") or die("query error");
	if(mysqli_num_rows($sql) > 0)
	{
		 $_SESSION['user']=$emailid;
		header('Location:index.php') or die("cannot go at this location ".mysqli_error($conn));;
		exit();
	}
	else
	{
		echo "Please enter correct UserId and Password";
	}
}

?>