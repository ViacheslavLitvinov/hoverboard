<?php
  session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>FAQ</title>
<link rel="shortcut icon" type="image/png" href="Favicon/favicon.ico"/>
  <link rel="stylesheet" href="http://s3.amazonaws.com/codecademy-content/courses/ltp/css/bootstrap.css">
    <link rel="stylesheet" href="main.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <link href='https://fonts.googleapis.com/css?family=Orbitron:400,700' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Merriweather:400,700' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Slabo+27px' rel='stylesheet' type='text/css'>
</head>

<body>
	<script src="//cdnjs.cloudflare.com/ajax/libs/minicart/3.0.6/minicart.min.js"></script>
	<script>
	    paypal.minicart.reset();
	</script>
<div class="header">
  <h1 style="font-size: 180px;" class="font_0"><span style="font-size:180px;">  <span style="font-family:avenida-w01,avenida-w02,fantasy;"><span style="font-weight:bold;">FAQ's</span></span></span></h1>
 
  </div>
    <div class="nav">
      <div class="container">
        <ul class="pull-left">
          <li><a href="index.php">Home</a></li>
          <li><a href="shop.php">Shop</a></li>
          <li>
          	<form action="https://www.sandbox.paypal.com/cgi-bin/webscr" method="post" class="last">
                    <input type="hidden" name="business" value="example@minicartjs.com" />
                    <input type="hidden" name="cmd" value="_cart" />
                    <input type="hidden" name="display" value="1" />
                    <input type="submit" name="submit" value="cart" class="button" />
            </form>
      	  </li>

        </ul>
        <ul class="pull-right">
          <li><a href="accessories.php">Accessories</a></li>
          <li><a href="AboutUs.php">About Us</a></li>
          <?php
            if (isset($_SESSION['username'])) {
              echo "<li class ='english'>" . 
                    "<form action='action.php?q=logout' method='POST' class='logOutForm' style='display: inline'>" . 
                    "<a class='logOut'>" . 
                    "log out" . 
                    "</a>" . 
                    "</form>" . 
                    "</li>";
              echo "<script>" . 
                    "document.getElementsByClassName('logOut')[0].addEventListener('click', function() {
                      document.getElementsByClassName('logOutForm')[0].submit();
                    });" . 
                    "</script>";
            }
            else {
              echo "<li class ='english'>" . 
                    "<a href='login.php'>" . 
                    "log in" . 
                    "</a>" . 
                    "</li>";
            }
          ?>
        </ul>
      </div>
    </div>
    <div class="faq">
    <h4>What is your returns policy?</h4> 
	<p>Due to the nature of hoveways, we can only accept returns if the board is in its original condition and box.
	We cannot accept returns on boards once they are used, unless there is a fault.</p>
 
	<h4>Do you refund?</h4>
	<p>We do refund but only but only 14 days after you have recieved the item, and if the item is returned in it's original condition and packaging.</p>
    <h4>Do you ship internationally?</h4> 
	<p>Due to carrier rules, we currently only ship to the Thailand. We are looking at ways around this, so watch this space!</p>
 
	<h4>How long does shipping take?</h4> 
	<p>We find that orders are dispacthed within 3 business days. Generally, we expect delivery 5-7 days thereafter.</p>
 
	<h4>Will I be charged for taxes?</h4>
	<p>No, the taxes are included in your overall cost.</p>
 
	<h4>Can I track my order?</h4>
	<p>Yes, we will send you the details via email; depending on how we ship to you, we may only provide a tracking number once landed in the Thialand.</p>
    </div>
    <div class="footer">
<footer class="footer-distributed">
      <div class="footer-left">
        <p class="footer-links">
                <ul style="list-style: none;">
          <li><a href="disclaimer.php">Disclaimer</a></li>
          <li><a href="faq.php">FAQ's</a></li>
          <li><a href="feedback_form.php">Give us your Feedback</a></li>
        </ul>
                </p>
        <p class="footer-company-name">SwagForLife &copy; 2015</p>
      </div>
      <div class="footer-center">
        <div>
          <i class="fa fa-map-marker"> </i>
          <p><a href="location.html"><span>Stamford International University</span> Bangkok, Thailand</a></p>
        </div>
        <div>
          <i class="fa fa-phone"></i>
          <p>+66 2 769 4000</p>
        </div>
        <div>
          <i class="fa fa-envelope"></i>
          <p><a href="mailto:mubariz.ahmad@students.stamford.edu">support@company.com</a></p>
        </div>
      </div>
      <div class="footer-right">
        <p class="footer-company-about">
          <span>About the company</span>
          SwagForLife is company that focuses on todays youth and tries to provide them every possible swag they can get.
        </p>
        <div class="footer-icons">
          <a href="https://www.facebook.com/" target="_blank"><i class="fa fa-facebook"></i></a>
          <a href="https://twitter.com/?lang=en" target="_blank"><i class="fa fa-twitter"></i></a>
          <a href="https://instagram.com/" target="_blank"><i class="fa fa-instagram"></i></a>
          <a href="https://plus.google.com/" target="_blank"><i class="fa fa-google-plus"></i></a>
        </div>
      </div>
    </footer>
		</footer>
  <iframe src="http://snapwidget.com/sc/?u=bmV4Ym9hcmRzfGlufDE1MHwzfDN8fHllc3wyMHxub25lfG9uU3RhcnR8eWVzfG5v&ve=050915" title="Instagram Widget" class="snapwidget-widget" allowTransparency="true" frameborder="0" scrolling="no" style="border:none; overflow:hidden; width:1480px; height:150px"></iframe>
  <script>
	    paypal.minicart.render();
	</script>
</body>
</html>
