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
  $product_id=$_GET['product_id'];
$conn=new mysqli('localhost','root','','e-agri') or die("cannot connect".mysql_error($conn));
if(isset($_POST['submit']))
{
  $product_name=mysqli_real_escape_string($conn,$_POST['product_name']);
  $area=mysqli_real_escape_string($conn,$_POST['area']);
  $selling_price=mysqli_real_escape_string($conn,$_POST['selling_price']);
  $quantity=mysqli_real_escape_string($conn,$_POST['quantity']);
  $sku=mysqli_real_escape_string($conn,$_POST['sku']);
  $validity=mysqli_real_escape_string($conn,$_POST['validity']);
  $date=date('Y-m-d H:i:s');
    $sql=mysqli_query($conn,"UPDATE upload_db set product_name='$product_name', area='$area', selling_price='$selling_price', sku='$sku' , validity='$validity' where product_id='$product_id'") or die("cannot update".mysqli_error($conn));
    $sql2=mysqli_query($conn,"INSERT into farmer_history(product_id,product_name,farmer_email,latest_updated,history) values('$product_id','$product_name','$user','$date','Updated product information, product_name = $product_name with sku=$sku')") or die("cannot insert into history".mysqli_error($conn));
    if($sql2 === TRUE)
    {
          header('Location:farmer_index.php') or die("cannot go at this location ".mysqli_error($conn));
      exit();
    }
    else
    {
      echo "cannot do sql".mysqli_error($conn); 
    }
}

?>