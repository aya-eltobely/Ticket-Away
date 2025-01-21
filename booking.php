
<?php




           
session_start();

/*
// one_day_booking
$name =$_POST['name'];
$ssn =$_POST['id'];
$phone =$_POST['phone'];
$source =$_POST['st1'];
$destination =$_POST['st2'];
$date =$_POST['date'];
$passenger_num =$_POST['tickets'];
$payment_mode =$_POST['gender'];
$Card_holder_name =$_POST['nameP'];
$Card_number =$_POST['cardnum'];
$expiry_date =$_POST['expiryDate'];
$cvc =$_POST['cvc'];


  $_SESSION['name']  = $name;
    $_SESSION['id'] = $ssn;
    $_SESSION['phone'] = $phone;
    $_SESSION['st1']  = $source;
    $_SESSION['st2'] = $destination;
    $_SESSION['date'] = $date;
    $_SESSION['tickets'] = $passenger_num;
    $_SESSION['gender'] = $payment_mode;
    $_SESSION['nameP']  = $Card_holder_name;
    $_SESSION['cardnum'] = $Card_number;
    $_SESSION['expiryDate'] = $expiry_date;
    $_SESSION['cvc']  = $cvc;





$con = mysqli_connect('localhost','root','');
mysqli_select_db($con,'ticketaway');

      

      $reg="INSERT into one_day_booking(name,ssn,phone,source,destination,day_date,passenger_num) 
                        values('$name',$ssn,'$phone','$source','$destination','$date','$passenger_num')";
  
  mysqli_query($con,$reg);

*/
	//month_booking
$name =$_POST['name'];
$ssn =$_POST['id'];
$phone =$_POST['phone'];
$source =$_POST['st1'];
$destination =$_POST['st2'];
$date =$_POST['date'];
$months_num =$_POST['months'];
$passenger_num =$_POST['tickets'];
$paymentMode =$_POST['gender'];
$cardHolderName =$_POST['nameP'];
$cardNumber =$_POST['cardnum'];
$expiryDate =$_POST['expiryDate'];
$cvc =$_POST['cvc'];


	  $_SESSION['name']  = $name;
    $_SESSION['id'] = $ssn;
    $_SESSION['phone'] = $phone;
    $_SESSION['st1']  = $source;
    $_SESSION['st2'] = $destination;
    $_SESSION['date'] = $date;
    $_SESSION['months']  = $months_num;
    $_SESSION['tickets'] = $passenger_num;
    $_SESSION['gender'] = $paymentMode;
    $_SESSION['nameP']  = $cardHolderName;
    $_SESSION['cardnum'] = $cardNumber;
    $_SESSION['expiryDate'] = $expiryDate;
    $_SESSION['cvc']  = $cvc;





$con = mysqli_connect('localhost','root','');
mysqli_select_db($con,'ticketaway');

			

			$reg="INSERT into month_booking(name,ssn,phone,source,destination,day_date,passenger_num,months_num) 
           							values('$name',$ssn,'$phone','$source','$destination','$date','$passenger_num','$months_num')";
	
	mysqli_query($con,$reg);


      $reg2="INSERT into payment_info(cardHolderName,cardNumber) 
                        values('$cardHolderName','$cardNumber')";
  
  mysqli_query($con,$reg2);


/*
			$reg="INSERT into one_day_booking(name,ssn,phone,source,destination,day_date,passenger_num,months_num,payment_mode') 
           							values('$name',$ssn,'$phone','$source','$destination','$date','$passenger_num','$months_num','$payment_mode')";
	
	mysqli_query($con,$reg);



			$reg2="INSERT into payment_info(payment_mode,Card_holder_name,Card_number,expiry_date,cvc') 
           							values('$payment_mode','$Card_holder_name','$Card_number','$expiry_date','$cvc')";
	
	mysqli_query($con,$reg2);

	*/
	header('location:ticketInfo.php');

?>