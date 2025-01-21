<?php 

session_start();

if (!isset( $_SESSION['name3'],
    $_SESSION['id3'],
    $_SESSION['phone3'],
    $_SESSION['st13'],
    $_SESSION['st23'],
    $_SESSION['date3'],
    $_SESSION['name4'],
   // $_SESSION['months3'],
    $_SESSION['tickets3'],
 //   $_SESSION['gender3'],
    $_SESSION['nameP3'],
    $_SESSION['cardnum3'],
    $_SESSION['expiryDate3'],
    $_SESSION['cvc3']

    )) 
{

	header('location:ticketInfo.html');
}

$name=$_SESSION['name3'];
$ssn=$_SESSION['id3'];
$passenger=$_SESSION['tickets3'];


include('libs/phpqrcode/qrlib.php'); 

if(isset($_POST['submit']) ) {
  $tempDir = 'temp/'; 
  $email = $name;
  $subject = "The ID for the passenger is " .' '.  $ssn;
  $filename = $name;
  $body =  "the number of passengers is = " .' '. $passenger;
  $body .= " the name for the Ticket owner is " .' '. $name;
  $codeContents = 'mailto:'.$email.'?subject='.urlencode($subject).'&body='.urlencode($body); 
  QRcode::png($codeContents, $tempDir.''.$filename.'.png', QR_ECLEVEL_L, 5);
}

 ?>
 <html>

<head>
  <link rel = "icon" href =  "images/train-ticket-icon-cartoon-style-vector-24754004.jpg"  type = "image/x-icon"> 
  <link rel="StyleSheet" href="css/bootstrap.min.css" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="StyleSheet" href="css/ticketInfo.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
</head>


<body>

<!--Navbar-->

 <section class="cover-nav">
    <div class="layer">
      <nav class="navbar navbar-expand-lg navbar-dark bg-transparent">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">
            <img class="logo" src="images/logo.jpeg" />
          </a>

          <button
            class="navbar-toggler"
            type="button"
            data-toggle="collapse"
            data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent"
            aria-expanded="false"
            aria-label="Toggle navigation"
          >
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item active">
                <a class="nav-link" href="index.html">
                  Home <span class="sr-only">(current)</span></a
                >
              </li>
              <li class="nav-item">
                <a class="nav-link" href="about.html">About</a>
              </li>

              <li class="nav-item">
                <a class="nav-link" href="help.html">Help</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="profile.php">Profile</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="login.html">Login</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="registration.html">Sign Up</a>
              </li>
            </ul>

            <div class="btn-group" style="float: right">
              <button
                type="button"
                class="btn btn-dark dropdown-toggle linkin"
                data-toggle="dropdown"
              >
                <span class="spinner-grow text-warning spinner-grow-sm"></span
                >booking
              </button>

              <div class="dropdown-menu">
                <a class="dropdown-item linkin" href="#aday"
                  ><span class="badge badge-dark">day</span> booking</a
                >
                <a class="dropdown-item linkin" href="monthBooking.html"
                  ><span class="badge badge-dark">month</span> booking</a
                >
              </div>
            </div>
          </div>
        </div>
      </nav>
    </div>
</section>

<!--Ticket Information-->
  
  <section class="" class="py-5">
    <div class="container py-5">
      <div id="" class="row ticketInfo py-5">

        <div class="col-lg-4">
          <div class="mb-3 ml-5">
            <h4 class="text-info">Ticket Details</h4>
          </div>
        </div>

        <div id="ticketInformation" class="col-lg-4">
          <!-- <button type="button" class="btn btn-outline-primary" id="payBtn" onclick="add()">Get Your Ticket Information</button> -->
            <div>
              <h4 class="text-info mb-4"><img class="img-fluid ticketImg" src="images/ttt.png" alt="ticket">passenger Details</h4>
                    <div class="info contain ml-5">
                        <div class="info">
                        <p><?php echo $_SESSION['name3']; ?></p>
                        <p>ID: <?php echo $_SESSION['id3']; ?></p>
                        <p>Phone: <?php echo $_SESSION['phone3']; ?></p>
                        </div>
                        <br>
                        <br>
                        <div class="tick">
                        <p class="font-weight-bold text-secondary pb-2"><?php echo $_SESSION['date3']; ?></p>
                        <div class="row px-3">
                            <p class="mr-5">From: <?php echo $_SESSION['st13']; ?></p>
                            <p>To: <?php echo $_SESSION['st23']; ?></p>
                        </div>
                        <p><i class="fa fa-user" aria-hidden="true"></i> <?php echo $_SESSION['tickets3']; ?> passengers</p>
                        <p>Price: <?php echo $_SESSION['price2']; ?></p>
                        </div>
                        <p class="text-success">This Trip Is Operated By: Ticketaway</p>
                    </div>
              
            </div>
          </div>


        <div class="col-lg-4">
          <div class="mb-3 mr-4 ml-5">
            <img class="img-fluid img-thumbnail img-map" src="images/ii1.png" alt="">
          </div>
        </div>


      </div>
    </div>
  </section>


  <!---->

  <section class="" class="">
    <div class="container py-5">
      <div class="row ticketInfo py-5">

        <div class="col-lg-4">
          <div class="ml-5">
            <h4 class="text-info">Payment Details</h4>
          </div>
        </div>


        

        <div id="paymentInformation" class="col-lg-4">
          <button type="button" class="btn btn-outline-primary d-none" id="payBtn" onclick="pppp()">Get Your Payment Information</button>
            <div>
              <h4 class="text-info"><img class="img-fluid ticketImg" src="images/pa2.jpg" alt="ticket">Card Details</h4>
                    <div class="contain ml-5">
                        
                    <p><?php echo $_SESSION['nameP3']; ?></p>
                    <br>
                    <div class="cardInfo">
                    <p>Card Number: <?php echo $_SESSION['cardnum3']; ?></p>
                    <p>MM/YY: <?php echo $_SESSION['expiryDate3']; ?></p>
                    <p>CVC: <?php echo $_SESSION['cvc3']; ?></p>
                    </div>
                    <p class="text-success">This Trip Is Operated By: Ticketaway</p>
                    <br>
                    <br>

                    
                    </div>
              
            </div>
          </div>


        <div class="col-lg-4">
          <div class="mb-3 mr-4 ml-5">
            <img class="img-fluid img-thumbnail img-map" src="images/pa1.png" alt="ticket">
          </div>
        </div>


        
        

      </div>
    </div>
  </section>




   <!-- QR Code -->

   <section class="" class="py-5">
    <div class="container py-5">
      <div id="" class="row ticketInfo py-5">
                <div class="col-lg-4">
          <div class="mb-3 ml-5">
          </div>
        </div>

        <div id="ticketInformation" class="col-lg-4">
          <!-- <button type="button" class="btn btn-outline-primary" id="payBtn" onclick="add()">Get Your Ticket Information</button> -->
            <div>
              <h4 class="text-info mb-4"><img class="img-fluid ticketImg" src="images/tttt.png" alt="ticket"> Your Ticket Here ! </h4>
 

<div >

<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" >
          <div class="form-group" >
            <label>Name</label>
            <input type="text" class="form-control" name="mail"  value="<?php

                                    

                                    $con = mysqli_connect('localhost','root','');
                                    mysqli_select_db($con,'ticketaway');


                                    $s="SELECT * from one_day_booking WHERE name = '{$_SESSION['name3']}' ";
                                    $result=mysqli_query($con,$s);

                                    while ( $row = mysqli_fetch_assoc($result)) {
                                    echo "{$row['name']}";
                                         };

                                  ?>" required />
          </div>
          <div class="form-group" >
            <label>ID</label>
            <input type="text"  name="subject" class="form-control" value="<?php

                                    

                                    $con = mysqli_connect('localhost','root','');
                                    mysqli_select_db($con,'ticketaway');


                                    $s="SELECT * from one_day_booking WHERE name = '{$_SESSION['name3']}' ";
                                    $result=mysqli_query($con,$s);

                                    while ( $row = mysqli_fetch_assoc($result)) {
                                    echo "{$row['ssn']}";
                                         };

                                  ?>" required  />
          </div>
          <div class="form-group" >
            <label>Phone</label>
            <input type="text"  name="msg" class="form-control" value="<?php

                                    

                                    $con = mysqli_connect('localhost','root','');
                                    mysqli_select_db($con,'ticketaway');


                                    $s="SELECT * from one_day_booking WHERE name = '{$_SESSION['name3']}' ";
                                    $result=mysqli_query($con,$s);

                                    while ( $row = mysqli_fetch_assoc($result)) {
                                    echo "{$row['phone']}";
                                         };

                                  ?>" required  />
          </div>
          
          <div class="form-group" >
            <input type="submit" name="submit" class="btn btn-primary submitBtn" style="width:22em; margin:0;" value="Pay and get your Ticket" />
          </div>
        </form>


      <?php
      if(!isset($filename)){
        $filename = "author";
      }
      ?>
      <div class="qr-field">
        <h4 class="text-info mb-4"><img class="img-fluid ticketImg" src="images/ttttt.png"  alt="ticket"> Your Ticket Download It: </h4>
        <center>
          <div class="qrframe" style="border:2px solid black; width:210px; height:210px;">
              <?php echo '<img src="temp/'. @$filename.'.png" style="width:200px; height:200px;"><br>'; ?>
          </div>
          <a class="btn btn-primary submitBtn" style="width:210px; margin:5px 0;" href="download.php?file=<?php echo $filename; ?>.png ">Download It </a>
        </center>
      </div>

  </div>
</div>
</section>

  <!-- Wish -->

<section class="wish">
<div class="row container m-auto py-5">
<div class="col-lg-6">
  <div class="mb-3">
    <img class="img-fluid img-thumbnail img-trip" src="images/trip.PNG" alt="">
  </div>
</div>
<div class="col-lg-6">
  <div>
    <h2 class="mb-4 mt-2 font-weight-bold text-info">Ticketaway</h2>
    <h5 class="text-dark"> Ticketaway wish you a safe and enjoyable journey.</h5>
    <h4 class="text-dark">Here are some tips when you travel...</h4>
    <ul>
        <li>When using Metro, plan ahead and avoid busy times and routes if you can.</li>
        <li>Keep your distance where you can</li>
        <li>Wear a face covering in stations and on trains.</li>
        <li>Wash or sanitise your hands regularly. We have hand sanitiser stands at our busier stations.</li>
        <li>Please keep train windows open to help with ventilation.</li>
    </ul>

  </div>
</div>
</div>
</section>



        


        

      </div>
    </div>
  </section>


  


  <!--Footer-->
  <footer class="footer py-4 text-center">
    <p>
      Copy Right 2021 © By Team All Rights Reserved
    </p>
  </footer>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

 
  <script src="js/ticketInfo.js"></script>
  <script src="js/mainPayment.js"></script>
  
</body>
</html>