<?php 
$con=new mysqli('localhost','root','','e-agri') or die("cannot connect".mysqli_error($con));
$product_id=mysqli_real_escape_string($con,$_POST['product_id']);
$quantity=mysqli_real_escape_string($con,$_POST['quantity']);
$sql1=mysqli_query($con,"SELECT selling_price,quantity from upload_db where product_id='$product_id'") or die("cannot do sql".mysqli_error($con));
$row=mysqli_fetch_array($sql1);
$price=$row['selling_price']*$quantity;
$original_quantity=$row['quantity'];
$quantity_remain=$original_quantity - $quantity;
if($quantity_remain>=0)
{
		$sql=mysqli_query($con,"UPDATE cart set quantity='$quantity', total_price='$price' where product_id='$product_id'") or die("cannot do sql".mysqli_error($con));
		if($sql==TRUE)
		{
			header('location:cart_details.php');
			exit();
		}
		else
		{
		echo "cannot go at location".mysqli_error($con);
		}
}
else
{
	echo "please select less quantity, we don't have that much stock currently".mysqli_error($con);
}
?>