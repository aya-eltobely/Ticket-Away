<?php

session_start();



$con = mysqli_connect('localhost','root','');
mysqli_select_db($con,'ticketaway');

if (isset($_POST['name4'])) {

$name4 =$_POST['name4'];
$pass4 =$_POST['psw4'];
$error = "" ;
$success = "";


$_SESSION['name4']=$name4;
$_SESSION['psw4']=$pass4;


$s="SELECT * from user where user_name='$name4'&& password='$pass4'";
$result=mysqli_query($con,$s);
$num = mysqli_num_rows($result);
if ($num==1) {

	$_SESSION['name4']=$name4;
	$_SESSION['psw4']=$pass4;
	

	header('location:monthBooking.html');

}else{

	$error = " invalid username or password ";
	$success = "" ;
	//header('location:login.html');

}

}

?>
<!DOCTYPE html>
<html>
    <head>
        <title> TICKETAWAY</title>
        <link rel = "icon" href =  "images/train-ticket-icon-cartoon-style-vector-24754004.jpg"  type = "image/x-icon"> 
    <meta name="viewport" content="width=divicee-width;initinal-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel = "icon" href =  "train-ticket-icon-cartoon-style-vector-24754004.jpg"  type = "image/x-icon">   
    <script src='https://kit.fontawesome.com/a076d05399.js'></script>
    <link rel="StyleSheet" href="css/homeStyle.css">
    <link rel="StyleSheet" href="css/bootstrap.min.css" />
    <link rel="StyleSheet" href="css/styles.css" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
    />
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;900&display=swap"
      rel="stylesheet"
    />

    <style>
      .layer
      {
        height: 100%;
        width: 100%;
        background-color: rgba(0, 0, 0, 0.7);
        margin: 0;
        padding: 20px;
      }
      .cover-nav
      {
          
          background-image: url(images/Train+on+Bridge+Hero+Sunset+Teal+Sydney+Metro+6k.jpg);
          width: 100%;
          height: 1000px;
          background-size: cover;
          /* background-repeat: no-repeat;background-size: 100%200%;background-attachment: fixed; */
      }
    </style>

    </head>

    <body>



      <section class="cover-nav">
            
        <div class="layer">
        
          <!---------Login--------->
        
          <div id="id01">

            <form class="modal-content animate form" action="login.php" method="post" style="color: black;">
      
              <!-- <div class="imgcontainer">
            
                <span onclick="document.getElementById('id01').style.display='block'" class="close" title="Close ">&times;</span> -->
            
                <div class="imgcontainer">
            
                  <span onclick="window.history.back()" class="close fa-3x text-danger" title="Close Modal">&times;</span>
                  <img src="images/mo2.gif" alt="Avatar" class="avatar">
                  <p style="font-size: 35px;">welcome back</p>
                  <p class="error" style="color: Red"> <?php echo $error;?> </p>
          
                </div>
  
                <div class="container">
            
                  <label for="uname"><b>Username</b></label>
                  <input type="text" class="loginput" placeholder=" &#128100  Enter Username" name="name4" required>
                  <label for="psw"><b>Password</b></label>
                  <input type="password" class="loginput" placeholder=" &#128272  Enter Password" name="psw4" required><br>
            
                  <div style="width: 100%;">
  
                    <button type="submit" class=" bg-dark buttonlog">Login</button></div>
                    <label>
                      <input type="checkbox" checked="checked" name="remember"> Remember me
                    </label>
  
                  </div>
                  <div class="w3-container container" ><p class="psw"> Need an account?<a class="text-info" href="registration.html"> Signup now!</a></p></div>
                  <div class="container loginContain" style="background-color:#f1f1f1">
              
                    <button type="button"  onclick="window.history.back()" class=" cancelbtn">Cancel</button>            
                    <span class="psw">Forgot <a href="#">password?</a></span>
            
                  </div>
    
                </form>

              </div>

            </div>
          </section>
        <script>
           
            </script>
  
          <script src="js/scriptHome.js" ></script>

    </body>
</html>



