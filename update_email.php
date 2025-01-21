<?php
       
session_start();

if (!isset( $_SESSION['name4'])) {

 header('location:Profile.html');
}

$con = mysqli_connect('localhost','root','');
mysqli_select_db($con,'ticketaway');

$email =$_POST['email'];

$s="SELECT * from user where user_email='$email'";
$result=mysqli_query($con,$s);
$num = mysqli_num_rows($result);
if 
	($num==1) {
echo "email already taken";
}else{

$update3="UPDATE user SET user_email ='$email' WHERE user_name = '{$_SESSION['name4']}'";
$result=mysqli_query($con,$update3);

header('location:Profile.php');

}

?>