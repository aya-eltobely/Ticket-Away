<?php

session_start();
$name4='';
$pass4='';

if (isset($_POST['name4'])) { 



$name4 =$_POST['name4'];
$pass4 =$_POST['psw4'];
	
}

echo $name4;
echo $pass4;



echo $_SESSION['name4'];
echo $_SESSION['psw4'];


?>