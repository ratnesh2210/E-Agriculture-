<?php
	include('common/header.php');
	?>
<div class="container">

<div class="col-md-3"><h3>Results:</h3></div>     
</div><br>

<?php
	$con= new mysqli('localhost','root','','e-agri');
 	$name=mysqli_real_escape_string($con,$_POST['name']);
 	$sql=mysqli_query($con,"SELECT * from upload_db where product_name LIKE '$name%' OR product_name LIKE '%name%' OR product_name LIKE '%$name' AND exist='1' AND quantity>0") or die("cannot do sql".mysqli_error($con));
 	$counter=1;
 	while($row=mysqli_fetch_array($sql))
 	{
 		if($counter<=6)
 		{
 			$counter++;
 		?>
 	
    <div class="container">
    <div class="row">
    <div class="col-md-3 text-center">
    <strong>Product Name:</strong><?php echo $row['product_name']?>
    <br>
    <a href="description.php?product_id=<?php echo $row['id'];?>">
      <img src="photos/<?php echo $row['image'];?>"  width="200" height="200" hspace="30" class="responsive-img" style="border:3px solid #333 ; border-radius:1px"/></a>
      <strong>Price:</strong><?php echo $row['selling_price']?><br>
      <a href="login_form_c.php"><button class="btn btn-success">Add To Cart</a></button>
      </div>
	<?php
 		}
 		else
 		{
 			$counter=1;
 		?>
 		
 		<span>
		<img src="photos/<?php echo $row['image'];?>"  width="150" height="150" hspace="30" class="responsive-img"/> 
		</span>
 		<?php
 		}
 	}
?>
