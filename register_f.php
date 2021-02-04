<?php
session_start();
$conn=new mysqli('localhost','root','','e-agri') or die("connot connect".mysqli_error($conn));
if(isset($_POST['submit']))
{
	$cust_name=mysqli_real_escape_string($conn,$_POST['name']);
	$emailid=mysqli_real_escape_string($conn,$_POST['emailid']);
	$password=mysqli_real_escape_string($conn,$_POST['password']);
	$contact=mysqli_real_escape_string($conn,$_POST['contact']);
	
	$sql=mysqli_query($conn,"INSERT INTO register_f(name,emailid,password,contact) values('$cust_name','$emailid','$password','$contact')") or die("connot connect".mysqli_error($conn));
	if($sql === TRUE)
	{
		 $_SESSION['user']=$emailid;
      header('Location:farmer_index.php') or die("cannot go at this location ".mysqli_error($conn));
		exit();
	}
	else
	{
			echo "cannot do sql".mysqli_error($conn); 
	}
	
}

?>