<?php
  include('common/header.php');
  ?>

<div id="pricing" class="container-fluid">
  <div class="text-center">
    <h2><b>Login</b></h2>
   <div class="container" class="bg-success">
 <form class="form-horizontal" action="login_f.php" method="POST">
 <fieldset>
 <div class="form-group">
  <label class="col-md-4 control-label" for="name">Email Id</label>  
  <div class="col-md-4">
  <input id="userid" name="emailid" type="text" placeholder="Enter your Email Id" class="form-control input-md" required="">
    
  </div>
</div>
<div class="form-group">
  <label class="col-md-4 control-label" for="password">Password</label>
  <div class="col-md-4">
    <input id="password" name="password" type="password" placeholder="Enter a password" class="form-control input-md" required="">
    </div>
</div>
<div class="checkbox">
      <label><input type="checkbox"> Remember me</label>
    </div>
    <button type="submit" class="btn btn-default">Submit</button>

    </form>
    </div>
    </div>