<?php
  include('common/sesion.php');
  include('common/header1.php');
?>

<!DOCTYPE html>
<html>
<head>
  <title>farmer upload form</title>
</head>
<body  class="container" class="bg-success">
<br><br><br>
<p align="center">
    <font size="5">
        Please enter your product details <br><br>
    </font>
</p>
<form class="form-horizontal" action="farmer_upload_form.php" method="POST" enctype="multipart/form-data">
<fieldset>

<div class="form-group">
  <label class="col-md-4 control-label" for="pname">Product Name</label>  
  <div class="col-md-4">
  <input id="product_name" name="product_name" type="text" placeholder="Enter a name of your product" class="form-control input-md" required="">
    
  </div>
</div>
<div class="form-group">
  <label class="col-md-4 control-label" for="sku">Area</label>  
  <div class="col-md-4">
  <input id="area" name="area" type="text" placeholder="Area" class="form-control input-md" required="">
    
  </div>
</div>

<div class="form-group">
  <label class="col-md-4 control-label" for="sp">Selling Price</label>  
  <div class="col-md-4">
  <input id="selling_price" name="selling_price" type="text" placeholder="Enter selling price" class="form-control input-md" required="">
    
  </div>
</div>
<div class="form-group">
  <label class="col-md-4 control-label" for="sku">SKU</label>  
  <div class="col-md-4">
  <input id="sku" name="sku" type="text" placeholder="Enter stock keeping unit number" class="form-control input-md" required="">
    
  </div>
</div>

<div class="form-group">
  <label class="col-md-4 control-label" for="quantity">Quantity</label>  
  <div class="col-md-4">
  <input id="quantity" name="quantity" type="text" placeholder="Enter Quantity" class="form-control input-md" required="">
    
  </div>
</div>
<div class="form-group">
  <label class="col-md-4 control-label" for="image">Select Image</label>  
  <div class="col-md-4">
  <input name="image" type="file" required="">
    
  </div>
</div>

<div class="form-group">
  <label class="col-md-4 control-label" for="submit"></label>
  <div class="col-md-4">
    <button id="submit" type="submit" name="submit" class="btn btn-success">Submit</button>
  </div>
</div>
</fieldset>
</form>
</body>
