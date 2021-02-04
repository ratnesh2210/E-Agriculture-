<?php
  include('common/header_with_linked_pages.php');
?><br><br><br>
<!DOCTYPE html>
<html>
<head>
	<title>customer login</title>
</head>
<body>
<div class="text-center">
    <h2><b>Customer Login</b></h2>
   <div class="container" class="bg-success">
 <form class="form-horizontal" action="login_c.php" method="POST">
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
    <button type="submit" class="btn btn-success">Submit</button>
    </form>
    <a href="sign_up_c.php">Or Sign Up ->></a>
    </div>
    </div>
</body>
</html>