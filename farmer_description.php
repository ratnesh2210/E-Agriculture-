<?php
include('common/headerf.php');
  $product_id=$_GET['product_id'];
  $con=new mysqli('localhost','root','','e-agri');
  $sql=mysqli_query($con,"SELECT * from upload_db where product_id='$product_id'");
  $row=mysqli_fetch_array($sql) or die("cannot select".mysqli_error($con));
?>
<!DOCTYPE html>
<html>
<head>
	<title>description of product</title>
</head>
<body>
<div class="col-md-12">
	<div class="col-md-3" class="container-fluid text-center bg-grey">
		<br><br><br>
		<img src="photos/<?php echo $row['image'];?>"  class="rounded" style="min-height:50px;" width="200" height="250" hspace="30" class="responsive-img"/>
	</div>

	<div class="container" class="bg-success">
	
	<div class="col-md-9">
		<p align="center" style="color: red">
    		<font size="5">
        		****You can Edit your product Information**** 
    		</font>
		</p>
		<form class="form-horizontal" action="update_product_info.php?product_id=<?php echo $product_id;?>" method="post" enctype="multipart/form-data">
		<br>
		<fieldset>
		<div class="form-group">
  			<label class="col-md-4 control-label" for="pname">Product Name</label>  
  		<div class="col-md-4">
  		<input id="product_name" name="product_name" type="text" placeholder="Enter a name of your product" value="<?php echo $row['product_name'];?>" class="form-control input-md" required="">
  		</div>
		</div>
		
		<div class="form-group">
  		<label class="col-md-4 control-label" for="sp">Selling Price</label>  
  		<div class="col-md-4">
  		<input id="selling_price" name="selling_price" type="text" value="<?php echo $row['selling_price'];?>" class="form-control input-md" required="">
  		</div>
		</div>

		<div class="form-group">
  		<label class="col-md-4 control-label" for="area">Area</label>  
  		<div class="col-md-4">
  		<input id="area" name="area" type="text" value="<?php echo $row['area'];?>" class="form-control input-md" required="">
  		</div>
		</div>

		<div class="form-group">
  		<label class="col-md-4 control-label" for="sku">SKU</label>  
  		<div class="col-md-4">
  		<input id="sku" name="sku" type="text" value="<?php echo $row['sku'];?>" class="form-control input-md" required="">
  		</div>
		</div>
		
		<div class="form-group">
  		<label class="col-md-4 control-label" for="quantity">Quantity</label>  
  		<div class="col-md-4">
  		<input id="quantity" name="quantity" type="text" value="<?php echo $row['quantity'];?>" class="form-control input-md" required="">
  		</div>
		</div>

		<div class="form-group">
  		<label class="col-md-4 control-label" for="validity">Validity of product</label>  
  		<div class="col-md-4">
  		<input id="validity" name="validity" type="date" value="<?php echo $row['validity'];?>" class="form-control input-md" required="">
  		</div>
		</div>

		<div class="form-group">
  		<label class="col-md-4 control-label" for="submit"></label>
  		<div class="col-md-4">
    	<button id="submit" type="submit" name="submit" class="btn btn-info">Update Information</button>
  		</div>
		</div>
		
		<fieldset>
		</form>
	</div>
	</div>
</div>
</body>
</html>
