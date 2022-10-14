
<?php  

session_start();

if (isset($_SESSION['email'])) {
  ?>
        <!DOCTYPE html>
        <html lang="en">
        <head>
        <meta charset="utf-8">
          <meta name="viewport" content="width=device-width, initial-scale=1">
          <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <link rel="stylesheet" href="../css/style.css">
        <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab&display=swap" rel="stylesheet">
          <script src="javascript1.js"></script>
          
          <style type="text/css">
          
          table{
              border:2px solid black;
              background-color: lightgrey;
              margin-left:auto;
              margin-right:auto;
          }
          th{
              border-bottom:3px solid #000;
              background-color: orange;
          }
          tr{
              border:3px solid #000;
            
              
          }
          td{
              border-bottom: 3px solid #000;
          }
          tr:nth-child(even) {background-color: #f2f2f2;}
          </style>
          </head>

        <body>

        <!-------- navbar------------------>
        <?php include "loginnav.php"?>
        <!--database-->
        <div class="jumbotron text-center bg-grey">
          <h2>Customer Inquiries</h2>
          
        </div>
        <?php

        $con = mysqli_connect('localhost','root','');
        mysqli_select_db($con,'skyland');
        $sqlget = "SELECT * FROM custdata";
        $sqldata = mysqli_query($con,$sqlget);

        // echo "<table>";
        // echo "<tr><th>Id</th><th>Name</th><th>Email</th><th>Mobile</th><th>Query</th>";
        echo "<table border='2' align='center' width='800px'>

        <tr align='center'>
        <th>Id.</th>
        <th>Name</th>
        <th>Email</th>
        <th>Mobile</th>
        <th>Comment</th>
        </tr>";

        while ($row = mysqli_fetch_array($sqldata, MYSQLI_ASSOC)){
            // echo "<tr><td>";
            // echo "{$row['id']}";
            // echo "<td><td>";
            // echo "{$row['user']}";
            // echo "<td><td>";
            // echo "${row['email']}";
            // echo "<td><td>";
            // echo "${row['mobile']}";
            // echo "<td><td>";
            // echo "${row['suggestion']}";
            echo "<tr align='center'>
          <td>".$row['id']."</td>
          <td>".$row['user']."</td>
            <td>".$row['email']."</td>
            <td>".$row['mobile']."</td>
            <td>".$row['suggestion']."</td>
          </tr>";


        }

        echo "</table>";

        ?>
        <br>
        <div  style="text-align:center; font-size:30px; border:3px solid black; margin:0 550px 0 550px;">
        <a href="logoutsession.php" style="color:red;">Logout</a>
        </div>




        <br><br><br><br><br><br>

        <!--footer-->
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
?>