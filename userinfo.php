<?php

$con = mysqli_connect('localhost','root','');

if($con)
{
echo "Connection Successful";
}
else{
    echo "Connection Unsuccessful";
}

mysqli_select_db($con,'skyland');
$user = $_POST['user'];
$email = $_POST['email'];
$mobile = $_POST['mobile'];
$suggestion = $_POST['suggestion'];



$query = " insert into custdata (user, email, mobile, suggestion) 
values ('$user','$email','$mobile','$suggestion')";


mysqli_query($con,$query);



   



header('location:index.php');

?>