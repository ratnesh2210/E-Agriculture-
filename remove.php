<?php
$con=new mysqli('localhost','root','','e-agri') or die("cannot connect".mysqli_error($con));
$product_id=$_GET['product_id'];
$sql=mysqli_query($con,"DELETE from cart where product_id='$product_id'") or die("cannot delete".mysqli_error($sql));
if($sql==TRUE)
{
	header('location:cart_details.php');
	exit();
}
else
{
	echo "cannot go at location".mysqli_error($con);
}
?>