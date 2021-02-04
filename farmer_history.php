<?php
  include('common/headerf.php');
?>
<div class="row">
      <div class="container" class="bg-success" align="right">
       <form  action="description_from_history.php" method="POST" class="form-inline">
      <input type="text" name="name" class="form-control input-md" size="50" placeholder="Enter product name to see its history" required>
    <button type="submit" name="submit" value="submit" class="btn btn-primary">SEARCH</button>
  </form>
  </div>
 </div>
<div class="col-md-12">
    <div class="col-md-12"> 
    <h3 style="color: red;"><u>****Tracking  your Activity****</u></h3>
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
    $con=new mysqli('localhost','root','','e-agri');
    	$sql=mysqli_query($con,"SELECT * from farmer_history where farmer_email='$user' order by latest_updated desc") or die("cannot select from farmer_history".mysqli_error($con));
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