<?php
include('common/sesion.php');
$con=new mysqli("localhost","root","","e-agri") or die("cannot connect".mysqli_error($con));

$bank_name=mysqli_real_escape_string($con,$_POST['bank_name']);
$name_on_card=mysqli_real_escape_string($con,$_POST['name_on_card']);
$exp_date=mysqli_real_escape_string($con,$_POST['date']);
$card_number=mysqli_real_escape_string($con,$_POST['card_number']);
$cvc=mysqli_real_escape_string($con,$_POST['cvc']);
		
	$sql=mysqli_query($con,"INSERT into payment(customer_id,bank_name,Name_on_card,expiry_date,card_number,cvc_no) values('$user','$bank_name','$name_on_card','$exp_date','$card_number','$cvc')") or die("cannot enter in payment".mysqli_error($con));
	

		$sql1=mysqli_query($con,"SELECT * from cart where status='Not Purchased' AND customer_id='$user'") or die("cannot do sql1".mysqli_error($con));
		while($row1=mysqli_fetch_array($sql1))
		{
			$sql2=mysqli_query($con,"UPDATE cart set status='Purchased' where customer_id='$user'") or die("cannot do sql2".mysqli_error($con));
		}

		$sql3=mysqli_query($con,"SELECT * from cart where customer_id='$user' AND status='Purchased'") or die("cannot do sql3".mysqli_error($con));
		while($row=mysqli_fetch_array($sql3))
		{
			$total_price=$row['total_price'];
			$quantity_purchased=$row['quantity'];
			$product_id=$row['product_id'];


			$sql4=mysqli_query($con,"SELECT * from upload_db where product_id='$product_id'") or die("cannot do sql4".mysqli_error($con));
			$row2=mysqli_fetch_array($sql4);
			$uploaded_by=$row2['uploaded_by'];
			$product_name=$row2['product_name'];
			
			$quantity=$row2['quantity'];		
			$quantity_remain=$quantity-$quantity_purchased;
			$latest_updated=date('Y-m-d H:i:s');
							

			$sql5=mysqli_query($con,"SELECT ammount from register_c where emailid='$user'") or die("cannot do sql5".mysqli_error($con));
			$amount=mysqli_fetch_row($sql5);
			$balance=$amount[0]-$total_price;
							

			$sql6=mysqli_query($con,"UPDATE register_c set ammount='$balance' where emailid='$user' ") or die("cannot do sql6".mysqli_error($con));
							

			$sql7=mysqli_query($con,"SELECT account from register_f where emailid='$uploaded_by'") or die("cannot do sql7".mysqli_error($con));
			$ammount=mysqli_fetch_row($sql7);
			$ammount=$ammount[0]+$total_price;
							
							

			$sql8=mysqli_query($con,"UPDATE register_f set account='$ammount' where emailid='$uploaded_by'") or die("cannot do sql8".mysqli_error($con));
							


			$sql9=mysqli_query($con,"INSERT INTO farmer_history(product_id,product_name,farmer_email,latest_updated,history,quantity_purchased,purchased_by_customer,balance) values('$product_id','$product_name','$uploaded_by','$latest_updated','Amount added $price, since product = $product_name with product_id=$product_id,quantity purchased=$quantity_purchased purchased by customer=$user and hence amount added=$total_price','$quantity_purchased','$user','$ammount')") or die("cannot do sql9".mysqli_error($con));
							


			$sql10=mysqli_query($con,"UPDATE upload_db set quantity='$quantity_remain' where product_id='$product_id'") or die("cannot do sql10".mysqli_error($con));


			$sql11=mysqli_query($con,"INSERT INTO customer_history(customer_id,latest_updated,history,amount_deducted,account_balance) values('$user','$latest_updated','Purchased product=$product_name , quantity purchased=$quantity_purchased for price=$total_price','$total_price','$balance')") or die("cannot do sql11".mysqli_error($con));
		}
		
		header('location:delivery_details.php') or die("cannot go at location".mysqli_error($con));
		exit();
?>