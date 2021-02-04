<?php
  include('common/header_with_linked_pages.php');
?>
<!DOCTYPE html>
<html>
<head>
	<title>customer login</title>
</head>
<body><br><br>
<div class="container" class="bg-success">
 <h4><center>New user?? Create a new account</center></h4>
 <form class="form-horizontal" action="register_c.php" method="POST">
 <fieldset>
 <div class="form-group">
  <label class="col-md-4 control-label" for="name">User Name</label>  
  <div class="col-md-4">
  <input id="username" name="username" type="text" placeholder="Enter your name" class="form-control input-md" required="">
    
  </div>
</div>

<div class="form-group">
  <label class="col-md-4 control-label" for="dist">Email Id</label>  
  <div class="col-md-4">
  <input id="emailidid" name="emailid" type="text" placeholder="Enter a Email ID" class="form-control input-md" required="">
    
  </div>
</div>


<div class="form-group">
  <label class="col-md-4 control-label" for="password">Password</label>
  <div class="col-md-4">
    <input id="password" name="password" type="password" placeholder="Enter a password" class="form-control input-md" required="">
    
  </div>
</div>



<div class="form-group">
  <label class="col-md-4 control-label" for="contact">Contact Number</label>  
  <div class="col-md-4">
  <input id="contact" name="contact" type="text" placeholder="Enter your contact no." class="form-control input-md" required="">
    
  </div>
</div>

<div class="form-group">
  <label class="col-md-4 control-label" for="signup"></label>
  <div class="col-md-4">
    <button id="signup" type="submit" name="submit" class="btn btn-success">Sign Up</button>
  </div>
</div>
</fieldset>
</form>
</div>
</body>
</html>