<?php  

session_start();

if (isset($_SESSION['email'])) {
	session_destroy();
	?>
<div style="border:15px double black; text-align:center; margin:0 420px 0 420px; padding:50px 0 50px 0; background-color: lightgrey; font-size:30px;">

<p style="color:orange;">Successfully logged Out</p>
<br>
<a href="../index.php">Home</a>
</div>
	
	<?php
}
?>
