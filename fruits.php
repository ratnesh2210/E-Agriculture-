<?php
session_start();
$connect=mysqli_connect("localhost","root","","e-agri") or die("cannot connect".mysqli_error($connect));

if (isset($_POST["add_to_cart"])) 
{
	if (isset($_SESSION["shopping_cart"])) 
		{
			$item_array_id=array_column($_SESSION["shopping_cart"],"item_id");
			if (! in_array($_GET["id"], $item_array_id)	) 
			{
				$count=count($_SESSION["shopping_cart"]);
				$item_array=array(
				'item_id'       =>$_GET["id"],
				'item_name'     =>$_POST["hidden_name"],
				'item_price'    =>$_POST["hidden_price"],
				'item_quantity' =>$_POST["quantity"],

					);

				$_SESSION["shopping_cart"][$count]=$item_array;
			}
			else
			{
				echo '<script>alert("item already added")</script>';
				echo '<script>window.location"fruits.php"</script>';
			}

		}
		else
		{
			$item_array=array(
				'item_id'       =>$_GET["id"],
				'item_name'     =>$_POST["hidden_name"],
				'item_price'    =>$_POST["hidden_price"],
				'item_quantity' =>$_POST["quantity"],
				);
			$_SESSION["shopping_cart"][0]=$item_array;
		}	
}


if(isset($_GET["action"]))
{
	if($_GET["action"] == "delete")
	{
		foreach ($_SESSION["shopping_cart"] as $keys => $values)
		{
			if($values["item_id"] == $_GET["id"])
			{
				unset($_SESSION["shopping_cart"][$keys]);
				echo '<script>alert("item removed")</script>';
				echo '<script>window.location"fruits.php"</script>';

			}
		}
	}
}

?>

<!DOCTYPE html>
<html>
<head>
  <title>FRUITS</title>
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <style>
  .badge-notify{
    background:red;
    position:relative;
    top: -20px;
    right: 10px;
  }
  .my-cart-icon-affix {
    position: fixed;
    z-index: 999;
  }
  </style>
</head>

<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="firstpage.php">E-Agri</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="firstpage.html">Home</a></li>
      <li><a href="vegetables.html">Vegetables</a></li>
      <li><a href="herbs.html">Herbs</a></li>
      <li><a href="cereals&grains.html">Cereals & Grains</a></li>
    </ul>
  </div>
</nav>

<body class="container" >
	<div class="page-header" style="height:70%">
    <h2>Fruits</h2>
  <?php
     $query="SELECT * FROM upload_db";
     $result=mysqli_query($connect,$query);
     if (mysqli_num_rows($result)>0) 
        {
        while ($row=mysqli_fetch_array($result)) 
            {
      ?>	
        <div class="col-md-3 text-center">
        <br>
        <br>
        <form method="POST" action="fruits.php?action=add&id=<?php echo $row["id"];?> ">
        <div style="border:1px solid #333; background-color:#f1f1f1;border-radius:1px; width:90%;height:90%">
        <img src="<?php echo $row["image"];?>" class="img-responsive"/><br>
        <h4 class="text-info"><?php echo $row["product_name"]; ?></h4>
        <h4 class="text-danger">$<?php echo $row["selling_price"]; ?></h4>
        <input type="text" name="quantity" class="form-control" value="1"/>
        <input type="hidden" name="hidden_name" value="<?php echo $row["product_name"];?>"/>
		<input type="hidden" name="hidden_price" value="<?php echo $row["selling_price"];?>"/>
		<input type="submit" name="add_to_cart" style="margin-top:5px" class="btn btn-success" value="Add To Cart"/>
		</div>
        </form>
        	</div>
        	<?php 
        	}
    	}
        	?>
        	<div style="clear:both"></div>
        	<br>
        	<h3>order details</h3>

        	<div class="table-responsive">
        	<table class="table table-bordered">
        	<tr>
        	<th width="40%">Item Name</th>
        	<th width="10%">Quantity</th>
        	<th width="20%">Price</th>
        	<th width="15%">Total</th>
        	<th width="5%">Action</th>
        	</tr>
        	<?php
        		if (!empty($_SESSION["shopping_cart"])) 
        		{
        			$total=0;
        			foreach ($_SESSION["shopping_cart"] as $keys => $values)
        				{
        			?>
        			<tr>
        			<td><?php echo $values["item_name"];?></td>
        			<td><?php echo $values["item_quantity"];?></td>
        			<td> $ <?php echo $values["item_price"];?></td>
        			<td><?php echo number_format($values["item_quantity"] * $values["item_price"], 2) ;?></td>
        			<td><a href="fruits.php?action=delete&id=<?php echo $values["item_id"]?>"><span class="te<xt-danger">Remove</span></a></td>
        			</tr>
        			<?php
        			$total=$total+($values["item_quantity"] * $values["item_price"]);
        			}
        			?>
					<tr>
					<td colspan="3" align="right">Total</td>
					<td align="right">$<?php echo number_format($total,2);?></td>
					</tr>
        		<?php
        		}
        		?>
        		
          			</table>
     			</div>
     		</div>
		</div>
  	</body>
</html>  	  	