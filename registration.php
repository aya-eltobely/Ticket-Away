
<?php
           
session_start();

$con = mysqli_connect('localhost','root','');
mysqli_select_db($con,'ticketaway');

if (isset($_POST['name1'])) {

$name1 =$_POST['name1'];
$email1 =$_POST['email1'];
$pass1 =$_POST['psw1'];
$repeatpassword1 =$_POST['pswrepeat1'];
$phone1 =$_POST['phone1'];
$ssn1 =$_POST['nationalId1'];

$s="SELECT * from user where user_name='$name1'";
$result=mysqli_query($con,$s);
$num = mysqli_num_rows($result);
if 
	($num==1) {
echo "username already taken";
}else{

if($pass==$repeatpassword)
           {

           	$reg="INSERT into user(user_name,user_email,password,user_mobile,ssn) values('$name1','$email1','$pass1','$phone1','$ssn1')";
			mysqli_query($con,$reg);



      $_SESSION['name1']  = $name1;
      $_SESSION['email1'] = $email1;
      $_SESSION['phone1'] = $phone1;
      $_SESSION['psw1']   = $pass1;
      $_SESSION['nationalId1']   = $ssn1;
      

	echo "registration sucessful";
            
            header('location:login.html');
           }
           else{
	echo " Password Not Matched ";

			header('location:registration.html');
           }}

}


?>