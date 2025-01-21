<?php
           
session_start();

if (isset($_POST['name2'])) {

$name2 =$_POST['name2'];
$ssn2 =$_POST['id2'];
$phone2 =$_POST['phone2'];
$source2 =$_POST['st12'];
$destination2 =$_POST['st22'];
$date2 =$_POST['date2'];
$months_num2 =$_POST['months2'];
$passenger_num2 =$_POST['tickets2'];
//$paymentMode2 =$_POST['gender2'];
$cardHolderName2 =$_POST['nameP2'];
$cardNumber2 =$_POST['cardnum2'];
$expiryDate2 =$_POST['expiryDate2'];
$cvc2 =$_POST['cvc2'];


	$_SESSION['name2']  = $name2;
    $_SESSION['id2'] = $ssn2;
    $_SESSION['phone2'] = $phone2;
    $_SESSION['st12']  = $source2;
    $_SESSION['st22'] = $destination2;
    $_SESSION['date2'] = $date2;
    $_SESSION['months2']  = $months_num2;
    $_SESSION['tickets2'] = $passenger_num2;
   // $_SESSION['gender2'] = $paymentMode2;
    $_SESSION['nameP2']  = $cardHolderName2;
    $_SESSION['cardnum2'] = $cardNumber2;
    $_SESSION['expiryDate2'] = $expiryDate2;
    $_SESSION['cvc2']  = $cvc2;




$con = mysqli_connect('localhost','root','');
mysqli_select_db($con,'ticketaway');

        
$s="SELECT * from bank where cardHolderName='$cardHolderName2'&& cardNumber='$cardNumber2'";
$result=mysqli_query($con,$s);
$num = mysqli_num_rows($result);
if ($num==1) {

    if ($months_num2=='one month')
    
    {
      $total='50';
      $ticketPrice=$total*$passenger_num2;
    }

    elseif ($months_num2=='3 months') 

    {
        $total='120';
      $ticketPrice=$total*$passenger_num2;
    }

    elseif ($months_num2=='6 months') 

    {
        $total='180';
      $ticketPrice=$total*$passenger_num2;
    }

    else 

    {
        $total='240';
      $ticketPrice=$total*$passenger_num2;
    }



                                    

                                    $con = mysqli_connect('localhost','root','');
                                    mysqli_select_db($con,'ticketaway');


                                    $s="SELECT * from bank WHERE cardHolderName = '$cardHolderName2' ";
                                    $result=mysqli_query($con,$s);

                                    while ( $row = mysqli_fetch_assoc($result)) {
                                    $balance= "{$row['balance']}<br>";
                                
                                         }



   if ($ticketPrice<=$balance&& '0' <= $balance)  

    {
     
     $newBalance=$balance - $ticketPrice;

     $_SESSION['price1']  = $ticketPrice;

     $update1="UPDATE bank SET balance ='$newBalance' WHERE cardHolderName = '$cardHolderName2'";
     $result=mysqli_query($con,$update1);


     $reg="INSERT into month_booking(name,ssn,phone,source,destination,day_date,passenger_num,months_num) 
                                    values('$name2',$ssn2,'$phone2','$source2','$destination2','$date2','$passenger_num2','$months_num2')";
    
    mysqli_query($con,$reg);

      $reg2="INSERT into paymentinfo(cardHolderName,cardNumber,expiryDate,cvc,user_name) 
                        values('$cardHolderName2','$cardNumber2','$expiryDate2','$cvc2','{$_SESSION['name4']}')";
  
  mysqli_query($con,$reg2);



    header('location:ticketInfo_month.php');

    }

    else 

    {
        echo "you donet have enough money";
    } 
    
}

else

{
    
    // echo "enter valid number";
   header('location:monthBooking.html');

}
   
}


?>