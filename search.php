<?php
include('common/header_with_linked_pages.php');
$connect=mysqli_connect("localhost","root","","e-agri") or die("cannot connect".mysqli_error($connect));
$name=mysqli_real_escape_string($connect,$_POST['name']);
	?>
  <style type="text/css">
  .thumbnail img{
    width: 250px;
    height: auto;
  }
  </style><br><br>
<div class="container">
<div class="col-md-4" style="color:black"><u><h4>Search results for "<?php echo $name;?>"</h4></div>    </u> 
</div>
 <div class="container">
 <div class="container-fluid text-center bg-grey">
    <div class="row">
<?php
 	$sql=mysqli_query($connect,"SELECT * from upload_db where product_name LIKE '$name%' OR product_name LIKE '%name%' OR product_name LIKE '%$name' AND exist='1' AND quantity>0") or die("cannot do sql".mysqli_error($connect));
 	$counter=1;
 	while($row=mysqli_fetch_array($sql))
 	{
 		if($counter<=4)
 		{
 			$counter++;
 		?>
    <div class = "col-sm-6 col-md-3">
      <div class = "thumbnail">
        <a href="description.php?product_id=<?php echo $row['product_id'];?>">
        <img src="photos/<?php echo $row['image'];?>" class="rounded" style="min-height:50px;" width="150" height="150" hspace="30" class="responsive-img"/></a>
        <div class = "caption">
        <strong>Product Name:</strong><?php echo $row['product_name']?><br>
        <strong>Selling Price:</strong><?php echo $row['selling_price']?><br>
        <strong>Validity:</strong><?php echo $row['selling_price']?><br>
        <a href="login_form_c.php"><button type="submit" class="btn btn-primary">Add to cart</button>
        </div></a>
      </div>
    </div>
	<?php
 		}
 		else
 		{
 			$counter=1;
 		?><br><br><br><br><br><br>
    <br><br><br><br><br><br><br>
 		<div class = "col-sm-6 col-md-3">
      <div class = "thumbnail">
        <a href="description.php?product_id=<?php echo $row['product_id'];?>">
        <img src="photos/<?php echo $row['image'];?>"  class="rounded" style="min-height:50px;" width="150" height="150" hspace="30" class="responsive-img"/></a>
        <div class = "caption">
        <strong>Product Name:</strong><?php echo $row['product_name']?><br>
        <strong>Selling Price:</strong><?php echo $row['selling_price']?><br>
        <strong>Validity:</strong><?php echo $row['selling_price']?><br>
        <a href="login.php"><button type="submit" class="btn btn-primary">Add to cart</button>
        </div></a>
      </div>
    </div>
 		<?php
 		}
 	}
?>
</div>
</div>
</div>
</div>
<br><br><br><br><br><br>
</body>
</html>
       