<?php
include('common/headerc.php');
$con=new mysqli("localhost","root","","e-agri") or die("cannot connect".mysqli_error($con));
$sql=mysqli_query($con,"SELECT sum(price) from cart where customer_id='$user' AND status='Not Purchased'") or die("cannot select total price".mysqli_error($con));
$total=mysqli_fetch_row($sql);
?>
<div class="col-md-10">
	<h3 style="color:black">***Making successful payments only through Credit/Debit Card***</h3>
</div><br><br><br>
<form class="form-horizontal" action="payment.php" method="POST" style="color: black">
<div class="col-md-12">

	<div class="form-group">
  		<label class="col-md-4 control-label" for="Bank">Select Bank</label>  
  		<div class="col-md-4">
  		<select name="bank_name">
  			<option value="Bank of Baroda">Bank of Baroda</option>
  			<option value="Bank of India">Bank of India</option>
  			<option value="Bank of Karnataka">Bank of Karnataka</option>
  			<option value="Bank of Maharashtra">Bank of Maharashtra</option>
  			<option value="Bank of Gujrat">Bank of Gujrat</option>
  			<option value="HDFC">HDFC</option>
  			<option value="ICICI">ICICI</option>
  			<option value="Punjab Maharashtra Corporation Bank">Punjab Maharashtra Corporation Bank</option>
  			<option value="Punjab National Bank">Punjab National Bank</option>
  			<option value="State Bank of India">State Bank of India</option>
		</select>
  		</div>
	</div>

	<div class="form-group">
  		<label class="col-md-4 control-label" for="name">Name on Card</label>  
  		<div class="col-md-4">
  		<input name="name_on_card" type="text" placeholder="Enter name displayed on card" class="form-control input-md" required="">
  		</div>
	</div>

	<div class="form-group">
  		<label class="col-md-4 control-label" for="date">Expiry Date</label>  
  		<div class="col-md-4">
  		<input type="date" name="date" placeholder="Enter expiry date" class="form-control input-md" required="">
  		</div>
	</div>

	<div class="form-group">
  		<label class="col-md-4 control-label" for="pin">Enter Card No</label>  
  		<div class="col-md-4">
  		<input name="card_number" type="number" placeholder="Enter 16 digit Card No" class="form-control input-md" required="">
  		</div>
	</div>

	<div class="form-group">
  		<label class="col-md-4 control-label" for="cvc">CVC No.</label>  
  		<div class="col-md-4">
  		<input name="cvc" type="password" placeholder="Three digit number printed back side of your card" class="form-control input-md" required="">
  		</div>
	</div>

	<div class="form-group">
	<label class="col-md-4 control-label" for="cvc"></label>  
  		<div class="col-md-4">
	<button type="submit" class="btn btn-success">Submit</button>
	</div>
	</div>
</div>
</form>
</body>
</html>