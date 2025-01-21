<?php
       
session_start();

if (!isset( $_SESSION['name4'])) {

 header('location:Profile.html');
}

$con = mysqli_connect('localhost','root','');
mysqli_select_db($con,'ticketaway');

$namef =$_POST['namef'];
$namem =$_POST['namem'];
$namel =$_POST['namel'];
$fullName = $namef . ' ' . $namem . ' ' . $namel;

$s="SELECT * from user where user_name='$fullName'";
$result=mysqli_query($con,$s);
$num = mysqli_num_rows($result);
if 
	($num==1) {
echo "username already taken";
}else{

$update1="UPDATE user SET user_name ='$fullName' WHERE user_name = '{$_SESSION['name4']}'";
$result=mysqli_query($con,$update1);

$update="UPDATE paymentinfo SET user_name ='$fullName' WHERE user_name = '{$_SESSION['name4']}'";
$result=mysqli_query($con,$update);

$_SESSION['name4']=$fullName;
header('location:Profile.php');

}
?>