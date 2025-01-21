<?php
           
session_start();

if (isset($_POST['name3'])) {

$name3 =$_POST['name3'];
$ssn3 =$_POST['id3'];
$phone3 =$_POST['phone3'];
$source3 =$_POST['st13'];
$destination3 =$_POST['st23'];
$date3 =$_POST['date3'];
$passenger_num3 =$_POST['tickets3'];
$paymentMode3 =$_POST['gender3'];
$cardHolderName3 =$_POST['nameP3'];
$cardNumber3 =$_POST['cardnum3'];
$expiryDate3 =$_POST['expiryDate3'];
$cvc3 =$_POST['cvc3'];


    $_SESSION['name3']  = $name3;
    $_SESSION['id3'] = $ssn3;
    $_SESSION['phone3'] = $phone3;
    $_SESSION['st13']  = $source3;
    $_SESSION['st23'] = $destination3;
    $_SESSION['date3'] = $date3;
    $_SESSION['tickets3'] = $passenger_num3;
    $_SESSION['gender3'] = $paymentMode3;
    $_SESSION['nameP3']  = $cardHolderName3;
    $_SESSION['cardnum3'] = $cardNumber3;
    $_SESSION['expiryDate3'] = $expiryDate3;
    $_SESSION['cvc3']  = $cvc3;



$con = mysqli_connect('localhost','root','');
mysqli_select_db($con,'ticketaway');


$s="SELECT * from bank where cardHolderName='$cardHolderName3'&& cardNumber='$cardNumber3'";
$result=mysqli_query($con,$s);
$num = mysqli_num_rows($result);
if ($num==1) {

        $total='5';
      $ticketPrice=$total*$passenger_num3;
    



                                    

                                    $con = mysqli_connect('localhost','root','');
                                    mysqli_select_db($con,'ticketaway');


                                    $s="SELECT * from bank WHERE cardHolderName = '$cardHolderName3' ";
                                    $result=mysqli_query($con,$s);

                                    while ( $row = mysqli_fetch_assoc($result)) {
                                    $balance= "{$row['balance']}<br>";
                                
                                         }



   if ($ticketPrice<=$balance&& '0' <= $balance)  

    {
     
     $newBalance=$balance - $ticketPrice;
     $_SESSION['price2']  = $ticketPrice;

     $update1="UPDATE bank SET balance ='$newBalance' WHERE cardHolderName = '$cardHolderName3'";
     $result=mysqli_query($con,$update1);


     $reg="INSERT into one_day_booking(name,ssn,phone,source,destination,day_date,passenger_num) 
                        values('$name3','$ssn3','$phone3','$source3','$destination3','$date3','$passenger_num3')";
  
  mysqli_query($con,$reg);


      $reg2="INSERT into paymentinfo(cardHolderName,cardNumber,expiryDate,cvc,user_name) 
                        values('$cardHolderName3','$cardNumber3','$expiryDate3','$cvc3','{$_SESSION['name3']}')";
  
  mysqli_query($con,$reg2);

  header('location:ticketInfo_day.php');


    }

    else 

    {
        echo "you donet have enough money";
    } 
    
    
}

else

{
    
    header('location:index.html');

}


}
     

?>