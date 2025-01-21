<?php
        
session_start();

if (!isset( $_SESSION['name4'])) {

 header('location:Profile.html');
}


$con = mysqli_connect('localhost','root','');
mysqli_select_db($con,'ticketaway');

$phone =$_POST['phone'];

$s="SELECT * from user where user_mobile='$phone'";
$result=mysqli_query($con,$s);
$num = mysqli_num_rows($result);
if 
	($num==1) {
echo "phone already taken";
}else{

$update2="UPDATE user SET user_mobile ='$phone' WHERE user_name = '{$_SESSION['name4']}'";
$result=mysqli_query($con,$update2);

header('location:Profile.php');

}

?>