<?php
session_start();
  if(isset($_SESSION['user']))
  {
    $user=$_SESSION['user'];
  }
  else
  {
    $user="";
  }
$con=mysqli_connect("localhost","root","","e-agri") or die("cannot connect".mysqli_error($connect));
$product_id=$_GET['product_id'];
$sql1=mysqli_query($con,"SELECT selling_price from upload_db where product_id='$product_id'");
$price=mysqli_fetch_row($sql1);
$sql=mysqli_query($con,"INSERT INTO cart(customer_id,product_id,status,quantity,price,total_price) values('$user','$product_id','Not Purchased','1','$price[0]','$price[0]')") or die("Product already entered".mysqli_error($con));
$sql1=mysqli_query($con,"SELECT product_name from upload_db where product_id='$product_id'");
$row=mysqli_fetch_array($sql1);
$product_name=$row['product_name'];
if($sql==TRUE)
{
	header('location:customer_search1.php');
}
else
{

}
?>