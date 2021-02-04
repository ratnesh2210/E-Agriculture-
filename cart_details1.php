<?php
include('common/headerc.php');
?>

<div class="container">
	<h3 style="color: red">***Your selected products***</h3>
	<br>
	<div class=""><hr style="color: green">
	<div class="col-md-12">
	<?php
	$con=mysqli_connect("localhost","root","","e-agri") or die("cannot connect".mysqli_error($con));
		$sql=mysqli_query($con,"SELECT * from cart where customer_id='$user' and status='Not Purchased'");
		while($row=mysqli_fetch_array($sql))
		{
			$product_id=$row['product_id'];
			$sql1=mysqli_query($con,"SELECT * from upload_db where product_id='$product_id'");
			while($row1=mysqli_fetch_array($sql1))
			{
			?>
					<div class="col-md-3">
						<img src="photos/<?php echo $row1['image'];?>" class="rounded" style="min-height:50px;" width="150" height="150" hspace="30" class="responsive-img"/></a>
					</div>
					<div class="col-md-4">
						<strong>Product Name:</strong><?php echo $row1['product_name']?><br>
        				<strong>Selling Price:</strong><?php echo $row1['selling_price']?><br>
        				<strong>Validity:</strong><?php echo $row1['validity']?><br>
        				<div class="form-group">
  						<label>Quantity<input id="quantity" name="quantity" type="number" value="<?php echo $row['quantity'];?>" class="form-control input-md" required=""/></label>
						</div>
					</div>
       		<?php
       		}
       		?><br><br><br><br><br><br><hr style="color: green">
       		<?php
		}

	?>
	<div class="col-md-5">
	<button class="btn btn-success">Total Amount</button>
		
	</div>
	</div>
	</div>
</div>
</body>
</html>