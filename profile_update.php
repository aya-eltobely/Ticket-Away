
<?php
/*
  session_start();

  $con = mysqli_connect('localhost','root','');
  mysqli_select_db($con,'ticketaway');


  $s="SELECT * from user WHERE user_name = '{$_SESSION['name1']}' ";
  $result=mysqli_query($con,$s);

  while ( $row = mysqli_fetch_assoc($result)) {
  echo "{$row['user_name']}<br>";
       };

*/

                


        
session_start();

if (!isset( $_SESSION['name4'],
        $_SESSION['psw4'])) {

 header('location:Profile.html');
}



$con = mysqli_connect('localhost','root','');
mysqli_select_db($con,'ticketaway');



$namef =$_POST['namef'];
$namem =$_POST['namem'];
$namel =$_POST['namel'];
$email =$_POST['email'];
$phone =$_POST['phone'];
$password =$_POST['password'];

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

$update2="UPDATE user SET user_mobile ='$phone' WHERE user_name = '{$_SESSION['name4']}'";
$result=mysqli_query($con,$update2);

$update3="UPDATE user SET user_email ='$email' WHERE user_name = '{$_SESSION['name4']}'";
$result=mysqli_query($con,$update3);

$update4="UPDATE user SET password ='$password' WHERE user_name = '{$_SESSION['name4']}'";
$result=mysqli_query($con,$update4);



$_SESSION['name4']=$fullName;
//header('location:Profile.php');

}



?>