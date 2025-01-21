<?php
        
session_start();

if (!isset( $_SESSION['name4'])) {

 header('location:Profile.html');
}


$con = mysqli_connect('localhost','root','');
mysqli_select_db($con,'ticketaway');

$currentpassword =$_POST['currentpassword'];
$newpassword =$_POST['newpassword'];
$repeatpassword =$_POST['repeatpassword'];


$s="SELECT * from user where password='$currentpassword'";
                      $result=mysqli_query($con,$s);
                      $num = mysqli_num_rows($result);


              if ($num==1) 
                {
                      if($newpassword==$repeatpassword)
                      {
                      $s="SELECT * from user where password='$newpassword'";
                      $result=mysqli_query($con,$s);
                      $num = mysqli_num_rows($result);


                      if ($num==1) 
                      {
                      echo "password already taken";
                      }


                      else
                      {

                      $update4="UPDATE user SET password ='$newpassword' WHERE user_name = '{$_SESSION['name4']}'";
                      $result=mysqli_query($con,$update4);


                      
                      header('location:Profile.php');

                      }
            
                      }
                }
              else
              { 
                echo "ENTER THE VALIDE CURRENT PASSWORD";
              }
?>