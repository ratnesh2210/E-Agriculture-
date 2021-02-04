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
$conn=new mysqli('localhost','root','','e-agri') or die("cannot connect".mysql_error($conn));
if(isset($_POST['submit']))
{
	$product_name=mysqli_real_escape_string($conn,$_POST['product_name']);
	$area=mysqli_real_escape_string($conn,$_POST['area']);
	$selling_price=mysqli_real_escape_string($conn,$_POST['selling_price']);
	$quantity=mysqli_real_escape_string($conn,$_POST['quantity']);
	$sku=mysqli_real_escape_string($conn,$_POST['sku']);
	if(!empty($_FILES['image']['name']))
	{
		define('',$_SERVER['DOCUMENT_ROOT'].'E-Agri');
		$target='photos/'.basename($_FILES['image']['name']);
		$image=$_FILES['image']['name'];
		move_uploaded_file($_FILES['image']['tmp_name'],$target);
		$sql=mysqli_query($conn,"INSERT INTO upload_db(uploaded_by,product_id,product_name,area,selling_price,quantity,image,sku,exist) values('$user','$product_id','$product_name','$area','$selling_price','$quantity','$image','$sku','1')") or die("cannot connect".mysqli_error($conn));
	
		if($sql === TRUE)
		{
      		header('Location:uploaded.php') or die("cannot go at this location ".mysqli_error($conn));
			exit();
		}
		else
		{
			echo "cannot do sql".mysqli_error($conn); 
		}
	}
	else
	{
		echo "please select an image".mysqli_error($con);
	}
}

?>