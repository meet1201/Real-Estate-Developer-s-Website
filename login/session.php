
<?php

		session_start();
		
if (isset($_POST['submit'])) {
	

		$c=mysqli_connect("localhost","root","","skyland");
		$email = $_POST['email'];
		$pass = $_POST['password'];
		$q="SELECT * FROM empform WHERE email = '$email' AND password = '$pass'";
		$res= mysqli_query($c,$q);
		$n = mysqli_num_rows($res);
		if ($n==1) {
			$_SESSION['email']=$email;
			header('Location:welcome.php');
		}
		else {
			
			
			echo '<script language="javascript">alert("Email/Password Incorrect");</script>';
			
			header('Location:login.php');
		}

}
?>
