<?php
  session_start();
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

  <head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Home Page</title>
  <link rel="shortcut icon" type="image/png" href="Favicon/favicon.ico"/>
    <link href="http://s3.amazonaws.com/codecademy-content/courses/ltp/css/shift.css" rel="stylesheet">
    <link rel="stylesheet" href="http://s3.amazonaws.com/codecademy-content/courses/ltp/css/bootstrap.css">
    <link rel="stylesheet"  type="text/css" href="main.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <link href='https://fonts.googleapis.com/css?family=Orbitron:400,700' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Merriweather:400,700' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <script type="text/javascript" src="https://code.jquery.com/jquery-2.2.0.min.js"></script>
    <script src="js/jquery.easydropdown.js"></script>
    <link href='https://fonts.googleapis.com/css?family=Merriweather:400,700' rel='stylesheet' type='text/css'>
    <script src="https://www.google.com/jsapi?key=YOUR_GOOGLE_KEY"></script>
    <script src="js/language.js"></script>

  </head>
   
  <body>
    <script src="//cdnjs.cloudflare.com/ajax/libs/minicart/3.0.6/minicart.min.js"></script>
    
 <div class="header">
  <h1 style="font-size: 180px;" class="font_0"><span style="font-size:180px;" >  <span style="font-family:avenida-w01,avenida-w02,fantasy;"><span style="font-weight:bold;" class="english">Hove Way</span></span></span></h1>
   <h1 style="font-size: 180px;" class="font_0"><span style="font-size:180px;">  <span style="font-family:avenida-w01,avenida-w02,fantasy;"><span style="font-weight:bold;" class="spanish">
Hove Camino</span></span></span></h1>
    <h1 style="font-size: 180px;" class="font_0"><span style="font-size:180px;">  <span style="font-family:avenida-w01,avenida-w02,fantasy;"><span style="font-weight:bold;" class="urdu">ھوو راہ</span></span></span></h1>
 
 
 
  </div>
    <div class="nav">


 <div class="box1">
            


      <div   class="language">

        <select id="select">
          <option id="english" value="english">English</option>
          <option id="spanish" value="spanish">Spanish</option>
          <option id="urdu" value="urdu">Urdu</option>
        </select>
      </div>


            
            </div>

    <div class="navigation">
      <div class="container">
        <ul class="pull-left">
          <li class ="english"><a href="index.php">Home</a></li>
          <li class ="spanish"><a href="index.php">
Casa</a></li>
          <li class ="urdu"><a href="index.php"> گھر</a></li>
          <li class ="english"><a href="shop.php">Shop</a></li>
          <li class ="spanish"><a href="shop.php">Tienda</a></li>
          <li class ="urdu"><a href="shop.php">خریدیں</a></li>
          <li class ="english">
            <form action="https://www.sandbox.paypal.com/cgi-bin/webscr" method="post" class="last">
                    <input type="hidden" name="business" value="example@minicartjs.com" />
                    <input type="hidden" name="cmd" value="_cart" />
                    <input type="hidden" name="display" value="1" />
                    <input type="submit" name="submit" value="cart" class="button" />
            </form>
          </li>
          <li class ="spanish">
            <form action="https://www.sandbox.paypal.com/cgi-bin/webscr" method="post" class="last">
                    <input type="hidden" name="business" value="example@minicartjs.com" />
                    <input type="hidden" name="cmd" value="_cart" />
                    <input type="hidden" name="display" value="1" />
                    <input type="submit" name="submit" value="Carro" class="button" />
            </form>
          </li>
          <li class ="urdu">
            <form action="https://www.sandbox.paypal.com/cgi-bin/webscr" method="post" class="last">
                    <input type="hidden" name="business" value="example@minicartjs.com" />
                    <input type="hidden" name="cmd" value="_cart" />
                    <input type="hidden" name="display" value="1" />
                    <input type="submit" name="submit" value="Carro" class="button" />
            </form>
          </li>
        </ul>
        <ul class="pull-right">
          <li class= "english"><a href="accessories.php">Accessories</a></li>
          <li class ="spanish"><a href="accessories.php">
Accesorios</a></li>
          <li class ="urdu"><a href="accessories.php">لوازمات</a></li>
          <li class ="english"><a href="AboutUs.php">About Us</a></li>
          <li class ="spanish"><a href="AboutUs.php">Sobre nosotros</a></li>
          <li class ="urdu"><a href="AboutUs.php">ہمارے متعلق</a></li>

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

              echo "<li class ='spanish'>" . 
                    "<form action='action.php?q=logout' method='POST' class='logOutForm' style='display: inline'>" . 
                    "<a class='logOut'>" . 
                    "Iniciar sesión" . 
                    "</a>" . 
                    "</form>" . 
                    "</li>";
              echo "<script>" . 
                    "document.getElementsByClassName('logOut')[1].addEventListener('click', function() {
                      document.getElementsByClassName('logOutForm')[1].submit();
                    });" . 
                    "</script>";

              echo "<li class ='urdu'>" . 
                    "<form action='action.php?q=logout' method='POST' class='logOutForm' style='display: inline'>" . 
                    "<a class='logOut'>" . 
                    "لاگ ان" . 
                    "</a>" . 
                    "</form>" . 
                    "</li>";
              echo "<script>" . 
                    "document.getElementsByClassName('logOut')[2].addEventListener('click', function() {
                      document.getElementsByClassName('logOutForm')[2].submit();
                    });" . 
                    "</script>";

              
            }
            else {
              echo "<li class ='english'>" . 
                    "<a href='login.php'>" . 
                    "log in" . 
                    "</a>" . 
                    "</li>";
              echo "<li class ='spanish'>" . 
                    "<a href='login.php'>" . 
                    "Iniciar sesión" . 
                    "</a>" . 
                    "</li>";
              echo "<li class ='urdu'>" . 
                    "<a href='login.php'>" . 
                    "اگ ان" . 
                    "</a>" . 
                    "</li>";
            }
          ?>
       </ul>
     </div>

   </div>
<div id="languageBlock">
    <div class="jumbotron">
      <div class="container">
        <h1 class ="english">Its Rollin Time.</h1>
        <h1 class ="spanish">Su tiempo de laminación</h1>
        <h1 class ="urdu">اس کے رولنگ کا وقت</h1>
        <p class="english">The best self balancing scooters.</p>
        <p class="spanish">Los mejores scooters autobalanceo.</p>
        <p class="urdu">بہترین خود توازن سکوٹر</p>
        <h4 align="center" class="english">"Nothing is impossible, its just a matter of figuring out how".</h4>
         <h4 align="center" class="spanish">"Nada es imposible , es sólo una cuestión de averiguar cómo
ow".</h4>
          <h4 align="center" class="urdu">"کچھ بھی نہیں ، اس کے صرف باہر کس طرح تلاش کرنے کی بات ناممکن ہے
".</h4>
      </div>
    </div> 
  </div>
 </div>   
   <div class="video">
   <video controls width="800" height="400" >
        <source src="nex.mp4"type"video/mp4">
        <source src="assign/nex.ogg" type="video/ogg">
        Your browser does not support video tag.
        </video>s
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
    <iframe src="http://snapwidget.com/sc/?u=bmV4Ym9hcmRzfGlufDE1MHwzfDN8fHllc3wyMHxub25lfG9uU3RhcnR8eWVzfG5v&ve=050915" title="Instagram Widget" class="snapwidget-widget" allowTransparency="true" frameborder="0" scrolling="no" style="border:none; overflow:hidden; width:1480px; height:150px"></iframe>  
  <script>
      paypal.minicart.render();
  </script> 
  </body>
</html>
