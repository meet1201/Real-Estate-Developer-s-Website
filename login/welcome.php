<?php

session_start();


if (isset($_SESSION['email']))
{

	?>
	<!DOCTYPE html>
	<html lang="en">
	<head>
	<meta charset="utf-8">
	  <meta name="viewport" content="width=device-width, initial-scale=1">
	  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	 <link rel="stylesheet" href="../css/style.css">
	 <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab&display=swap" rel="stylesheet">
	
	 </head>
	
	<body>
	
	<!-------- navbar------------------>
	<?php include 'loginnav.php'?>
  
  <div class="bg-img">
<br><br><br>
 
<div class="login" style="font-size:30px; color:black;" > 

<a href="admin.php">Customer Inquiries</a>
	<br>
	<a href="logoutsession.php">Logout</a>
</div>
</div>
	
<br>
<footer>
    <div class="flex container">
      <div class="row">
      <div class="footer-about col-lg-4">
        <h5>About Skyland Developers.</h5>
        <p>Skyland developers are on a quest to build a legacy of timeless elegance. Pioneering the skyline of the 
city already, they are steadily conquering the state of Gujarat on the front of luxurious Residential & Commercial Spaces.</p>
      </div>
      
      <div class="footer-quick-links col-lg-4">
        <h5>Quick Links</h5>
        <ul>
          <li><a href="index.php">Home</a></li>
          <li><a href="about.php">About Us</a></li>
          <li><a href="properties.php">Properties</a></li>
          <li><a href="contactus.php">Contact Us</a></li>
        </ul>
      </div>

      <div class="footer-subscribe col-lg-4">
        <h5>Subscribe to our Newsletter</h5>
        <div id="subscribe-container">
          <input type="text" placeholder="Enter Email" />
          <button class="right-rounded">Send</button>
        </div>
        </div>
        </div>
    </div>
<div class="container">
<div class="row">       
<h5 class="follow-us col-lg-12">Follow Us</h5><br>
        
<div class="follow-us-icons">
&emsp;&emsp;&nbsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
<a href=""><i class="fa fa-instagram fa-3x" aria-hidden="true"></i></a>&emsp;
        <a href=""><i class="fa fa-facebook-official fa-3x" aria-hidden="true"></i></a>&emsp;
        <a href=""><i class="fa fa-envelope fa-3x" aria-hidden="true"></i></a>&emsp;
        <a href=""><i class="fa fa-twitter fa-3x" aria-hidden="true"></i></a>&emsp;
        <a href=""><i class="fa fa-google-plus fa-3x" aria-hidden="true"></i></a>
        </div>  
      </div>    
</div>
    <small>
      Copyright &copy; 2020 All rights reserved | Skyland Developers
    </small>
  </footer>



  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script> 
</body>
</html>




<?php
	





}

else
{
	echo "Session is not set";
}
?>
