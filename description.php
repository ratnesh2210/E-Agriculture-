<?php
  $product_id=$_GET['product_id'];
  include('common/header_with_linked_pages.php.php');
  $con=new mysqli('localhost','root','','e-agri');
  $sql=mysqli_query($con,"SELECT * from upload_db where product_id='$product_id'");
  $row=mysqli_fetch_array($sql) or die("cannot select".mysqli_error($con));
?>
<!DOCTYPE html>
<html>
<head>
	<title>description of product</title>
</head>
<body><br><br><br><br>
<div class="col-md-12">
	<div class="col-md-5">
		<br><br>
		<img src="photos/<?php echo $row['image'];?>"  class="rounded" style="min-height:50px;" width="200" height="250" hspace="30" class="responsive-img"/>
	</div>
	<div>
		<br>
		<p><b>Product Name</b> 	 : <?php echo $row['product_name'];?></p>
		<p><b>Selling Price</b>  : <?php echo $row['selling_price'];?></p>
		<p><b>Area</b>			 : <?php echo $row['area'];?></p>
		<p><b>Product SKU</b>			 : <?php echo $row['sku'];?></p>
		<p><b>Quantity</b>			 : <?php echo $row['quantity'];?></p>
		<a href="login_form_c.php"><button type="submit" class="btn btn-primary">Add to cart</button></a>
	</div>
</div>
</body>
</html>
