<?php 
include('common/header_with_linked_pages.php');
?>
<!DOCTYPE html>
<html>
<head>
	<title>services</title>
</head>
<body>
<div id="contact" class="container-fluid">
  <h2 class="text-center">CONTACT</h2>
  <div class="row">
    <div class="col-sm-5">
      <p>Contact us and we'll get back to you within 24 hours.</p>
      <p><span class="glyphicon glyphicon-map-marker"></span> Mumbai, INDIA</p>
      <p><span class="glyphicon glyphicon-phone"></span> +00 1515151515</p>
      <p><span class="glyphicon glyphicon-envelope"></span> e_agricommercial@gmail.com</p>
    </div>
    <form action="contact.php" method="POST">
    <div class="col-sm-7">
      <div class="row">
        <div class="col-sm-6 form-group">
          <input class="form-control" id="name" name="name" placeholder="Name" type="text" required>
        </div>
        <div class="col-sm-6 form-group">
          <input class="form-control" id="email" name="email" placeholder="Email" type="email" required>
        </div>
      </div>
      <textarea class="form-control" id="comments" name="comments" placeholder="Comment" rows="5"></textarea><br>
      <div class="row">
        <div class="col-sm-12 form-group">
          <button class="btn btn-default pull-right" type="submit">Send</button>
        </div>
      </div>
    </div>
    </form>
  </div>
</div>


<footer class="container-fluid text-center">
  <a href="firstpage.php" title="To Top">
    <span class="glyphicon glyphicon-chevron-up"></span>
  </a>
  <p align="right">COPYRIGHT 2017 @E-AGRI Thakur College</p>
</footer>
</body>
</html>