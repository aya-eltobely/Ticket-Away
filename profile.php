<?php 

session_start();

if (!isset( $_SESSION['name1'],
  $_SESSION['name4'],
        $_SESSION['email1'],
        $_SESSION['phone1'],
        $_SESSION['psw1'])) {

  header('location:Profile.html');
}

 ?>

 <!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <link rel = "icon" href =  "images/train-ticket-icon-cartoon-style-vector-24754004.jpg"  type = "image/x-icon"> 
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
      integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2"
      crossorigin="anonymous"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css"
    />
    <!--font wesome-->
    <link rel="stylesheet" href="css/styleProfile.css" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link
      href="https://fonts.googleapis.com/css2?family=Mulish:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Poppins:ital,wght@0,100;0,200;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
      rel="stylesheet"
    />

    <!-- font-family: 'Mulish', sans-serif;
        font-family: 'Poppins', sans-serif; -->
  </head>
  <body>
    <!-- navbar  -->

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

    <!--profile-->

    <section class="profile container-fluid clear-fix ">
      <!-- aside1 -->

      <aside class="aside-profile float-left col-lg-3 col-md-3 col-12">
        <div class="row d-block">
          <div class="aside-menu">
            <a data-connect="personal-detailss">
              <i class="fas fa-user-edit"></i>
              <span>Personal Details</span>
            </a>
          </div>

          <hr />

          <div class="aside-menu">
            <a data-connect="securityy">
              <i class="fas fa-lock"></i>
              <span>Security</span>
            </a>
          </div>

          <hr />

          <div class="aside-menu">
            <a data-connect="payment-detail">
              <i class="fas fa-credit-card"></i>
              <span>Payment Details</span>
            </a>
          </div>
        </div>
      </aside>

      <!--aside2-->

      <section class="aside2-profile float-left col-lg-7 col-md-7 col-12">
        <div class="personal-detailss row m-auto hh">
          <div class="aside2-personal-info">
            <h4>Personal Details</h4>
            <p>
              <span style="color: #ffc107">View </span>Or<span
                style="color: #ffc107"
              >
                Update</span
              >
              your info and find out how it's used.
            </p>
          </div>

          <hr />

          <!--Name-->

          <div class="name-info clear-fix">
            <form action="update_name.php" target="_self" method="post" autocomplete="off">
              <div class="float-left as2-div-d-inline">
                <h6>Name <span class="span-click">
                  <?php

                                    

                                    $con = mysqli_connect('localhost','root','');
                                    mysqli_select_db($con,'ticketaway');


                                    $s="SELECT * from user WHERE user_name = '{$_SESSION['name4']}' ";
                                    $result=mysqli_query($con,$s);

                                    while ( $row = mysqli_fetch_assoc($result)) {
                                    echo "{$row['user_name']}<br>";
                                         };

                                  ?> 
                  
                </span></h6>
              </div>
              <div class="name-info-update part-hide">
                <div class="input-name">
                  <input type="text" placeholder="First Name" name="namef" required />
                  <input type="text" placeholder="Middle Name" name="namem" required />
                  <input type="text" placeholder="Last Name" name="namel" required />
                </div>
              </div>
              <div class="float-right">
                <button type="reset" class="cancle-btn">Cancle</button>
                <button class="save-btn" value="nm-save">Save</button>
                <a href="#" class="edit-a">Edit</a>
              </div>
            </form>
          </div>
          <hr class="hrr" />

          <!--Phone num-->

          <div class="phonenum-info clear-fix">
            <form action="update_phone.php" target="_self" method="post" autocomplete="off">
              <div class="float-left as2-div-d-inline">
                <h6>
                  Phone <span class="span-click">
                   <?php

                                    

                                    $con = mysqli_connect('localhost','root','');
                                    mysqli_select_db($con,'ticketaway');


                                    $s="SELECT * from user WHERE user_name = '{$_SESSION['name4']}' ";
                                    $result=mysqli_query($con,$s);

                                    while ( $row = mysqli_fetch_assoc($result)) {
                                    echo "{$row['user_mobile']}<br>";
                                         };

                                  ?> 
                      
                    </span>
                </h6>
              </div>
              <div class="phonenum-info-update part-hide">
                <div class="input-name">
                  <input
                    type="text"
                    placeholder="Phone Number"
                    data-mask="0000000000"
                    name="phone"
                    required
                  />
                </div>
              </div>
              <div class="float-right">
                <button type="reset" class="cancle-btn">Cancle</button>
                <button class="save-btn" value="ph-save">Save</button>
                <a href="#" class="edit-a">Edit</a>
              </div>
            </form>
          </div>
          <hr class="hrr" />

          <!--email-->

          <div class="email-info clear-fix">
            <form action="update_email.php" target="_self" method="post" autocomplete="off">
              <div class="float-left as2-div-d-inline">
                <h6>Email <span class="span-click">
                  <?php

                                    

                                    $con = mysqli_connect('localhost','root','');
                                    mysqli_select_db($con,'ticketaway');


                                    $s="SELECT * from user WHERE user_name = '{$_SESSION['name4']}' ";
                                    $result=mysqli_query($con,$s);

                                    while ( $row = mysqli_fetch_assoc($result)) {
                                    echo "{$row['user_email']}<br>";
                                         };

                                  ?> 
                    
                  </span></h6>
              </div>
              <div class="email-info-update part-hide">
                <div class="input-name">
                  <input type="email" placeholder="Email" name="email" required />
                </div>
              </div>
              <div class="float-right">
                <button type="reset" class="cancle-btn">Cancle</button>
                <button class="save-btn" value="em-save">Save</button>
                <a href="#" class="edit-a">Edit</a>
              </div>
            </form>
          </div>
          <hr class="hrr" />
        </div>

        <!--security-->

        <div class="securityy row m-auto hh">
          <div class="aside2-personal-info">
            <h4>Security</h4>
            <p>
              <span style="color: #ffc107">Adjust </span>your security settings.
            </p>
          </div>

          <hr />

          <!--password-->

          <div class="password-info clear-fix">
            <form action="update_password.php" target="_self" method="post" autocomplete="off">
              <div class="float-left as2-div-d-inline">
                <h6>
                  Password
                  <span class="span-click">
                     <label>  <input type="password"  value="
                    <?php

                                    

                                    $con = mysqli_connect('localhost','root','');
                                    mysqli_select_db($con,'ticketaway');


                                    $s="SELECT * from user WHERE user_name = '{$_SESSION['name4']}' ";
                                    $result=mysqli_query($con,$s);
                                  

                                    while ( $row = mysqli_fetch_assoc($result)) {
                                     echo "{$row['password']}<br>";
                                         };

                                  ?> 

                                  "

                                </label>
                      
                    </span>
                </h6>
              </div>
              <div class="password-info-update part-hide">
                <div class="input-name">
                  <input type="password" placeholder="current Password" name="currentpassword" required >
                  <p style="position: relative">
                    <input  type="password" placeholder="New Password" class="psw1" name="newpassword" required >
                    <span class="validation"
                      >Passwords must Be over 6 characters</span
                    >
                  </p>
                  <input type="password" placeholder="Confirm New Password" class="psw1-repeat" name="repeatpassword" required >
                  <span class="validation validat2"
                    >must confirm your password</span
                  >
                </div>
              </div>
              <div class="float-right">
                <button type="reset" class="cancle-btn">Cancle</button>
                <button class="save-btn" value="pa-save">Save</button>
                <a href="#" class="edit-a">Edit</a>
              </div>
            </form>
          </div>
          <hr class="hrr" />

          <!--Delete mssg-->

          <div class="deletacc-info clear-fix">
            <form action="delete_account.php" target="_self" method="post" autocomplete="off">
              <div class="float-left as2-div-d-inline">
                <h6>
                  Delete account
                  <span class="span-click"
                    >Permanently delete your account</span
                  >
                </h6>
              </div>
              
              <div class="float-right">
                <button type="reset" class="cancle-btn">Cancle</button>
                <button class="save-btn" value="del-save">Save</button>
                <a href="#" class="edit-a">Edit</a>
              </div>
            </form>
          </div>
          <hr class="hrr" />
        </div>

        <!--payment details-->

        <div class="payment-detail row m-auto hh">
          <div class="aside2-personal-info">
            <h4>Payment Details</h4>
            <p>
              Securely <span style="color: #ffc107">add </span>or
              <span style="color: #ffc107">remove</span> payment methods to make
              it easier when you book.
            </p>
          </div>

          <hr />

          <!--Payment card-->

          <div class="Payment-card clear-fix">
            <form action="update_payment_info.php" target="_self" method="post" autocomplete="off">
              <div class="float-left as2-div-d-inline">
                <h6>
                  Payment cards
                  <span class="span-click"><?php

                                    

                                    $con = mysqli_connect('localhost','root','');
                                    mysqli_select_db($con,'ticketaway');


                                    $s="SELECT * from paymentinfo WHERE user_name = '{$_SESSION['name4']}' ";
                                    $result=mysqli_query($con,$s);

                                    while ( $row = mysqli_fetch_assoc($result)) {
                                    echo "{$row['cardHolderName']}<br>";
                                    
                                         };

                                  ?> </span>
                                  <span class="span-click"><?php

                                    

                                    $con = mysqli_connect('localhost','root','');
                                    mysqli_select_db($con,'ticketaway');


                                    $s="SELECT * from paymentinfo WHERE user_name = '{$_SESSION['name4']}' ";
                                    $result=mysqli_query($con,$s);

                                    while ( $row = mysqli_fetch_assoc($result)) {
                                    
                                    echo "{$row['cardNumber']}<br>";
                                    
                                         };

                                  ?> </span>
                                  <span class="span-click"><?php

                                    

                                    $con = mysqli_connect('localhost','root','');
                                    mysqli_select_db($con,'ticketaway');


                                    $s="SELECT * from paymentinfo WHERE user_name = '{$_SESSION['name4']}' ";
                                    $result=mysqli_query($con,$s);

                                    while ( $row = mysqli_fetch_assoc($result)) {
                                    
                                    echo "{$row['expiryDate']}<br>";
                                   
                                         };

                                  ?> </span>
                                  <span class="span-click"><?php

                                    

                                    $con = mysqli_connect('localhost','root','');
                                    mysqli_select_db($con,'ticketaway');


                                    $s="SELECT * from paymentinfo WHERE user_name = '{$_SESSION['name4']}' ";
                                    $result=mysqli_query($con,$s);

                                    while ( $row = mysqli_fetch_assoc($result)) {
                                    
                                    echo "{$row['cvc']}<br>";
                                         };

                                  ?> </span>
                </h6>
              </div>
              <div class="payment-info-update part-hide">
                <div class="input-name">
                  <input type="text" name="name" placeholder="Name" required />
                  <input
                    type="text"
                    name="cardnumber"
                    placeholder="Card Number"
                    data-mask="0000 0000 0000 0000"
                    required
                  />
                  <input
                    type="text"
                    name="expirydate"
                    placeholder="MM / YY"
                    data-mask="00 / 00"
                    required
                  />
                  <input
                    type="text"
                    name="cvc"
                    placeholder="CVC"
                    data-mask="000"
                    required
                  />
                  
                </div>
              </div>
              <div class="float-right">
                <button type="reset" class="cancle-btn">Cancle</button>
                <button class="save-btn" value="ca-save">Save</button>
                <a href="#" class="edit-a">Edit</a>
              </div>
            </form>
          </div>
          <hr class="hrr" />
        </div>
      </section>
    </section>
    <br />

    <div class="clear"></div>
    <!---------------Footer---------->
    <container class="py5">
      <footer class="footer py-4 text-center">
        <p>Copy Right 2021 © By Team All Rights Reserved</p>
      </footer>
    </container>

    <script
      src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
      integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
      crossorigin="anonymous"
    ></script>
    <script src="js/jquery-3.5.0.min.js"></script>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js"
      integrity="sha512-pHVGpX7F/27yZ0ISY+VVjyULApbDlD0/X0rgGbTqCE7WFW5MezNTWG/dnhtbBuICzsd0WQPgpE4REBLv+UqChw=="
      crossorigin="anonymous"
    ></script>
    <!-- for expiry date , cvc , zip -->
    <script src="js/mainProfile.js"></script>
  </body>
</html>

