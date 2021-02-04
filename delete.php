<?php
$product_id=$_GET['product_id'];
$con=new mysqli('localhost','root','','e-agri');
$date=date("Y-m-d H:i:s");
$sql=mysqli_query($con,"SELECT * from upload_db where product_id='$product_id'");
$row=mysqli_fetch_array($sql);
$email=$row['uploaded_by'];
$product_name=$row['product_name'];
$sql1=mysqli_query($con,"UPDATE upload_db set exist='0' where product_id='$product_id'") or die("".mysqli_error($con));
$sql2=mysqli_query($con,"INSERT into farmer_history(product_id,product_name,farmer_email,latest_updated,history) values('$product_id','$product_name','$email','$date','Deleted product, product name = $product_name  with  product Id = $product_id')") or die("cannot enter into history".mysqli_error($con));
if($sql2==TRUE)
{
	header('Location:farmer_index.php');
	exit();
}
else
{
	echo "cannot delete".mysqli_error($con);
}
?>