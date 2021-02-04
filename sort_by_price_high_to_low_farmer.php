<?php
  include('common/headerf.php');
?>
<style>
.btn-group button {
    color: white; /* White text */
    padding: 10px 24px; /* Some padding */
    cursor: pointer; /* Pointer/hand icon */
    float: left; /* Float the buttons side by side */
}

/* Clear floats (clearfix hack) */
.btn-group:after {
    content: "";
    clear: both;
    display: table;
}

.btn-group button:not(:last-child) {
    border-right: none; /* Prevent double borders */
}

</style>
<div class="container">
<div class="col-md-4"><b><h3 style="color:black"><u>Your uploaded products:</u></h3></b></div>
<div class="col-md-4">
  
</div>
  <div class="btn-group pull-right">
      <a href="farmer_upload_form1.php"><button class="btn btn-success">Upload Product</button></a>
      <a href="farmer_history.php"><button class="btn btn-primary">Your History</button></a>
      <button class="btn btn-info">Sort the displayed items</button>
          <button class="btn btn-info dropdown-toggle" data-toggle="dropdown">
            <span class="caret"></span>
          </button>
            <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu">
              <li><a tabindex="-1" href="sort_by_name_farmer.php">Sort by name</a></li>
              <li><a tabindex="-1" href="sort_by_price_low_to_high_farmer.php">Sort by price Low to High</a></li>
              <li><a tabindex="-1" href="sort_by_price_high_to_low_farmer.php">Sort by price High to Low</a></li>
            </ul>
  </div>
<br><br><br>
<div class="container">
<div class="container-fluid text-center bg-grey">
 <div class="row">
<?php
$con=new mysqli('localhost','root','','e-agri');
$sql=mysqli_query($con,"SELECT * from upload_db where uploaded_by='$user' and exist='1' order by selling_price desc");
$counter=1;
  while($row=mysqli_fetch_array($sql))
  {
    if($counter<=4)
    {
      $counter++;
    ?>
   <div class = "col-sm-6 col-md-3">
      <div class = "thumbnail">
      <?php $product_id=$row['product_id'];?>
        <a href="farmer_description.php?product_id=<?php echo $product_id;?>">
        <img src="photos/<?php echo $row['image'];?>" class="rounded" style="min-height:50px;" width="150" height="150" hspace="30" class="responsive-img"/></a>
        <div class = "caption">
        <strong>Product Name:</strong><?php echo $row['product_name']?><br>
        <strong>Selling Price:</strong><?php echo $row['selling_price']?><br>
        <strong>Validity:</strong><?php echo $row['validity']?><br>
        <a href="delete.php?product_id=<?php echo $row['product_id'];?>"><button class="btn btn-warning">delete product</button></a>
      </div>
    </div>
    </div>
  <?php
    }
    else
    {
      $counter=1;
    ?><br><br>
    <div class = "col-sm-6 col-md-3">
      <div class = "thumbnail">
      <?php $product_id=$row['product_id'];?>
        <a href="farmer_description.php?product_id=<?php echo $product_id;?>">
        <img src="photos/<?php echo $row['image'];?>" class="rounded" style="min-height:50px;" width="150" height="150" hspace="30" class="responsive-img"/></a>
        <div class = "caption">
        <strong>Product Name:</strong><?php echo $row['product_name']?><br>
        <strong>Selling Price:</strong><?php echo $row['selling_price']?><br>
        <strong>Validity:</strong><?php echo $row['validity']?><br>
        <a href="delete.php?product_id=<?php echo $row['product_id'];?>"><button class="btn btn-warning">delete product</button></a>
      </div>
    </div>
    </div>
    <?php
    }
  }
?>
</div>
</div>
</div>
</body>
</html>

  

  