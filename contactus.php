<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
 <link rel="stylesheet" href="css/style.css">
 <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab&display=swap" rel="stylesheet"></head>

<body>

<!-------- navbar------------------>
<?php include 'menu.php'?>
<!----------------------navbar end------------>
<div class="jumbotron">
  <h1><i class="fa fa-info-circle fa-lg" aria-hidden="true"></i>  Contact Us </h1>
  <p>&emsp;&emsp;&emsp;For Inquiries register here!</p>
</div>

<!----------------contactus------------------->
<section id="contact">
  <div class="container">
    <div class="well well-sm">
      <h5 style="color:black;"><i class="fa fa-building" aria-hidden="true"></i> Head Office-<b>Ahmedabad</b>:</h5><h6>Skyland Developers, Sindhu Bhavan Road, Ahmedabad-380054</h6>
      <br><h5 style="color:black;"><i class="fa fa-building" aria-hidden="true"></i> Branch Office-<b>Surat</b>:</h5><h6>Skyland Developers, JP Marg, Rajkot-380054</h6>
   
    </div>
    <br>
	
	<div class="row">
	  <div class="col-md-7">
    <div class="mapouter"><div class="gmap_canvas"><iframe width="100%" height="315" id="gmap_canvas" src="https://maps.google.com/maps?q=Sindhu%20Bhavan%20road&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe></div></div>
          </div>

      <div class="col-md-5">
          <h4><strong>Get in Touch <i class="fa fa-address-card fa-lg" aria-hidden="true"></i></strong></h4>
        <form action="userinfo.php" method="post">
          <div class="form-group">
            <input type="text" class="form-control" name="user" value="" placeholder="Name">
          </div>
          <div class="form-group">
            <input type="email" class="form-control" name="email" value="" placeholder="E-mail">
          </div>
          <div class="form-group">
            <input type="tel" class="form-control" name="mobile" value="" placeholder="Phone">
          </div>
          <div class="form-group">
            <textarea class="form-control" name="suggestion" rows="3" placeholder="Message"></textarea>
          </div>
          <button class="btn btn-dark" type="submit" name="button">
              <i class="fa fa-paper-plane-o" aria-hidden="true"></i> Submit
          </button>
        </form>
      </div>
    </div>
  </div>
</section>
<br>
<br>



<!-------------------- footer---------------------->
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
