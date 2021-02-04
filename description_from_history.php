<?php
  include('common/headerf.php');
  $con=new mysqli('localhost','root','','e-agri');
  $product_name=mysqli_escape_string($con,$_POST['name']);
?>
<div class="col-md-12">
    <div class="col-md-12"> 
    <h3 style="color: red;"><u>****History of "<?php echo $product_name;?>"****</u></h3>
    <table class="table table-hover" style="width:100%">
             <thead>
                <tr>
                <th rowspan="10" colspan="8" style="background-color:#b3ccff;" >Date</th>
                <th rowspan="10" colspan="8" style="background-color:#b3ccff;" >Your Activity</th>
                </tr>
             </thead>
    </div> 
    <div class="col-md-12">
                        <tr>
                            <td rowspan="10" colspan="8">&nbsp;</td>
                            <td rowspan="10" colspan="8">&nbsp;</td>
                        </tr>     
    </div>
    <?php
    	$sql=mysqli_query($con,"SELECT * from farmer_history where farmer_email='$user' AND product_name LIKE '$product_name%' OR product_name LIKE '%product_name%' OR product_name LIKE '%$product_name' order by latest_updated desc") or die("cannot select from farmer_history".mysqli_error($con));
    	while($row=mysqli_fetch_array($sql))
    	{
    	?>
    		<tbody>
               <div class="col-md-12"> 
                    <tr>
                        <td rowspan="10" colspan="8" style="background-color:#f2f2f2;"><?php echo $row['latest_updated']; ?></td>
                        <td rowspan="10" colspan="8" style="background-color:#f2f2f2;"><?php echo $row['history']; ?></td>
                    </tr>
                  </div>
                </tbody>

                <tbody>
                <div class="col-md-12">                    
                        <tr>
                            <td rowspan="10" colspan="8">&nbsp;</td>
                            <td rowspan="10" colspan="8">&nbsp;</td>
                        </tr>                    
                </div>
            </tbody>
        <?php
    	}
    ?>
</table>
</div>
</div>
</body>
</html>