<?php
          
session_start();

$con = mysqli_connect('localhost','root','');
mysqli_select_db($con,'ticketaway');


           $delete="DELETE FROM user WHERE user_name = '{$_SESSION['name4']}'";
	mysqli_query($con,$delete);
	
    header('location:Profile.php');              

?>