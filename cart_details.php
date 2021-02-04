<?php
include('common/headerc.php');
$con=new mysqli('localhost','root','','e-agri') or die("cannot connect".mysqli_error($con));
?>

<div class="container">
<?php 

$sql1=mysqli_query($con,"SELECT count(*) from cart where customer_id='$user' AND status='Not Purchased'");
$row=mysqli_fetch_row($sql1);
$total=$row[0];
if($total>0)
{
	?>
<div class="col-md-12">
	<div class="col-md-4">
		<h3 style="color: black">***Your selected products***</h3>
	</div>
	<div class="col-md-4">
	</div>
	<div class="col-md-4">
	<a href="checkout.php"><button type="submit" name="submit" class="btn btn-success pull-right">Proceed for Payment</button></a>
	</div>
</div>
	<h3 class="pull-right" style="color: red"><u>Your Total Amount=Rs.
	<?php 
			$sql=mysqli_query($con,"SELECT sum(total_price) from cart where customer_id='$user' AND status='Not Purchased'") or die("cannot select total price".mysqli_error($con));
			$total=mysqli_fetch_row($sql);
			echo $total[0];
	?></u>
	</h3>
	<br><br><br><br>
	<div class=""><hr style="color: green">
	<div class="col-md-12">
	<?php
		$sql=mysqli_query($con,"SELECT * from cart where customer_id='$user' and status='Not Purchased'");
		while($row=mysqli_fetch_array($sql))
		{
			$product_id=$row['product_id'];
			$quantity=$row['quantity'];
			$total_price=$row['total_price'];
			$sql1=mysqli_query($con,"SELECT * from upload_db where product_id='$product_id'");
			while($row1=mysqli_fetch_array($sql1))
			{
			?>
					<div class="col-md-3">
						<img src="photos/<?php echo $row1['image'];?>" class="rounded" style="min-height:50px;" width="150" height="150" hspace="30" class="responsive-img"/></a>
					</div>
					<div class="col-md-3">
						<strong style="color: black">Product Name:</strong><b><?php echo $row1['product_name']?><br>
        				<strong style="color: black">Selling Price:</strong><b><?php echo $row1['selling_price']?><br>
        				<strong style="color: black">Validity:</strong><b><?php echo $row1['validity']?><br>
  						<label style="color: black">Add Quantity Below
  						 <form class="form-horizontal" action="add_quantity.php" method="POST">
 						 <fieldset>
  							<input name="quantity" type="number" value="<?php echo $quantity;?>" class="form-control input-md" required="">
  							<input name="product_id" type="hidden" value="<?php echo $product_id;?>" class="form-control input-md" required="">
 						   <a href="add_quantity.php"><button type="submit" class="btn btn-primary" value="submit">save</button></a>
 						 </fieldset>
 						 </form>
					</div>
					<div class="col-md-3">
						<strong style="color: black"><u>Selling price * Quantity = <?php echo $total_price;?></u></strong>
					</div>
					<div class="col-md-1">
						 <a href="remove.php?product_id=<?php echo $product_id;?>"><button type="submit" class="btn btn-warning" value="submit">Remove product</button></a>
					</div>
       		<?php
       		}
       		?><br><br><br><br><br><br><br><hr style="color: green"><br>
       		<?php
		}

	?>
	</div>
	</div>
<?php
}
else 
{
	?>
	<div class="col-md-10">
		<h3 style="color: black">**Your selected products will be displayed here**</h3>
	</div>
<?php
}
?>

</div>
</body>
</html>