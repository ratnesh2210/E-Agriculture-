<?php
include('common/headerc.php');
$connect=mysqli_connect("localhost","root","","e-agri") or die("cannot connect".mysqli_error($connect));
$name=$_GET['name'];
  ?>
  <style type="text/css">
  .thumbnail img{
    width: 250px;
    height: auto;
  }
  </style>
<div class="container"><br>
<div class="col-md-4" style="color:black"><u><h4>Search results for: <?php echo '"'.$name.'"';?></h4></div>    </u> 
<div class="btn-group pull-right">
      <button class="btn btn-info">Select Options</button>
          <button class="btn btn-info dropdown-toggle" data-toggle="dropdown">
            <span class="caret"></span>
          </button>
            <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu">
              <li><a tabindex="-1" href="sort_by_name_customer.php?name=<?php echo $name;?>">Sort by name</a></li>
               <li><a tabindex="-1" href="sort_by_price_low_to_high_customer.php?name=<?php echo $name;?>">Sort by price Low to High</a></li>
              <li><a tabindex="-1" href="sort_by_price_high_to_low_customer.php?name=<?php echo $name;?>">Sort by price High to Low</a></li>
              <li><a tabindex="-1" href="customer_history.php">Your History</a></li>
            </ul>
  </div>
  <a class="pull-right" href="cart_details.php"><button class="btn btn-success">Cart</button></a>
</div>
 <div class="container">
 <div class="container-fluid text-center bg-grey">
    <div class="row">
<?php
  $sql=mysqli_query($connect,"SELECT * from upload_db where product_name LIKE '$name%' OR product_name LIKE '%$name%' OR product_name LIKE '%$name' order by selling_price asc") or die("cannot do sql".mysqli_error($connect));
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
        <a href="cart.php?product_id=<?php echo $row['product_id'];?>"><button type="submit" class="btn btn-primary">Add to cart</button></a>
        </div>
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
        <a href="cart.php"><button type="submit" class="btn btn-primary">Add to cart</button>
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
       