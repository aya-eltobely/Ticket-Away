<?php
       
session_start();

if (!isset( $_SESSION['name4'])) {

 header('location:Profile.html');
}

$con = mysqli_connect('localhost','root','');
mysqli_select_db($con,'ticketaway');

$name =$_POST['name'];
$cardnumber =$_POST['cardnumber'];
$expirydate =$_POST['expirydate'];
$cvc =$_POST['cvc'];

$s="SELECT * from user where user_email='$email'";
$result=mysqli_query($con,$s);
$num = mysqli_num_rows($result);
if 
	($num==1) {
echo "details already taken";
}else{

$update3="UPDATE paymentinfo SET cardHolderName ='$name' WHERE user_name = '{$_SESSION['name4']}'";
$result=mysqli_query($con,$update3);

$update3="UPDATE paymentinfo SET cardNumber ='$cardnumber' WHERE user_name = '{$_SESSION['name4']}'";
$result=mysqli_query($con,$update3);

$update3="UPDATE paymentinfo SET expiryDate ='$expirydate' WHERE user_name = '{$_SESSION['name4']}'";
$result=mysqli_query($con,$update3);

$update3="UPDATE paymentinfo SET cvc ='$cvc' WHERE user_name = '{$_SESSION['name4']}'";
$result=mysqli_query($con,$update3);

header('location:Profile.php');

}

?>