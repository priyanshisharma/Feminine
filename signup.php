<!DOCTYPE html>
<html  >
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="generator" content="Mobirise v5.2.0, mobirise.com">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
    <link rel="shortcut icon" href="assets/images/feminine-128x128.png" type="image/x-icon">
    <meta name="description" content="">
    
    
    <title>Signup</title>
    <link rel="stylesheet" href="styles/login.css">
    <link rel="stylesheet" href="assets/web/assets/mobirise-icons2/mobirise2.css">
    <link rel="stylesheet" href="assets/tether/tether.min.css">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-grid.min.css">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-reboot.min.css">
    <link rel="stylesheet" href="assets/dropdown/css/style.css">
    <link rel="stylesheet" href="assets/socicon/css/styles.css">
    <link rel="stylesheet" href="assets/theme/css/style.css">
    <link rel="preload" as="style" href="assets/mobirise/css/mbr-additional.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/mobirise/css/mbr-additional.css" type="text/css">
 </head>
 <?php
  
  session_start();
  if(isset($_POST['doctor'])){
    
    require_once('./config.php');
    $email=$_POST['email'];
    $u_name= $_POST['u_name'];
    $pass= $_POST['pass'];
    $uid= uniqid($u_name);
    $occupation= "doctor";
    $securepass= crypt($pass,$u_name);
    $sql= "INSERT INTO `feminine`.`users` (`userid`, `username`, `password`, `email`, `occupation`) VALUES ('$uid', '$u_name', '$securepass', '$email', '$occupation');";
    if($con->query($sql) == true){
      echo "<br><br><br><h3 style='margin-left:400px;margin-top:20px;color:green' >You have successfully registered<a href='login.php'>Go back to Login Page</a></h3>";
      
  }
  else{
     echo "ERROR: $con->error";
  }
  $con->close();

  }

  if(isset($_POST['patient'])){
    require_once('./config.php');
    $email=$_POST['email'];
    $u_name= $_POST['u_name'];
    $pass= $_POST['pass'];
    $uid= uniqid($u_name);
    $occupation= "patient";
    $securepass= crypt($pass,$u_name);
    $sql= "INSERT INTO `feminine`.`users` (`userid`, `username`, `password`, `email`, `occupation`) VALUES ('$uid', '$u_name', '$securepass', '$email', '$occupation');";
    if($con->query($sql) == true){
      echo "<br><br><br><h3 style='margin-left:400px;margin-top:20px;color:green' >You have successfully registered<a href='login.php'>Go back to Login Page</a></h3>";
      
  }
  else{
     echo "ERROR: $con->error";
  }
  $con->close();

  }
?>
<body>
  
  <section class="menu cid-s48OLK6784" once="menu" id="menu1-h">
    
  <nav class="navbar navbar-dropdown navbar-fixed-top navbar-expand-lg">
        <div class="container-fluid">
            <div class="navbar-brand">
                <span class="navbar-logo">
                    <a href="index.html">
                        <img src="assets/images/feminine-1-335x335.png" alt="login" style="height: 5rem;">
                    </a>
                </span>
            </div>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <div class="hamburger">
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav nav-dropdown" data-app-modern-menu="true">
                    <li class="nav-item">
                        <a class="nav-link link text-black display-4" href="index.html#features1-n">Features</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link link text-black display-4" href="index.html#tabs1-p">AI Tools</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link link text-black display-4" href="signup.php">Dashboard</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link link text-black dropdown-toggle display-4" href="#" data-toggle="dropdown-submenu" aria-expanded="false">Book</a>
                        <div class="dropdown-menu">
                            <a class="text-black dropdown-item display-4" href="">Lab Appointment</a>
                            <a class="text-black dropdown-item display-4" href="consult-doc.html">Expert Consultancy</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link link text-black display-4" href="Tracker.php">Period Tracker</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
   </section>


   <section class="image1 login-section" id="image1-m" style="padding:0px 10%;">
    <div class="container login">
            <div class="col-12 col-lg-6">
                <img src="assets/images/login.jpg" alt="log-in">
            </div>
            <div class="col-12 col-lg-6" >
                <div class="text-wrapper align-items-right" >
                    <h3 class="mbr-section-title mbr-fonts-style  display-5">
                        <strong style="font-family: 'Dancing Script', cursive; ">Sign Up</strong>
                    </h3>
                <div>
                        <form method="post" id="signupForm">
                            <div class="form-floating form-field-login">
                                <label for="name">Name</label>
                                <input type="name" class="form-control" id="u_name" placeholder="Name" name="u_name">
                            </div>
                            <div class="form-floating form-field-login">
                                <label for="email">Email Address</label>
                                <input type="email" class="form-control" id="email" placeholder="Email Address" name="email">
                            </div>
                            <div class="form-floating form-field-login">
                                <label for="password">Password</label>
                                <input type="password" class="form-control" id="password" placeholder="Password" name="password">
                            </div>
                            <button type="submit" class="btn btn-danger" name="patient" id="patient">Sign Up As Patient</button>
                            OR
                            <button type="submit" class="btn btn-danger" name="doctor" id="doctor">Sign Up As Doctor</button>
                            <div class="form-floating form-field-login" style="text-align:center; margin:15px;">
                                <a href="login.php">Already a member? Click here to Login.</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
    </div>
   </section>

   
   <section class="footer3 cid-s48P1Icc8J" once="footers" id="footer3-i"><div class="container">
        <div class="media-container-row align-center mbr-white">
            
            <div class="row social-row">
                <div class="social-list align-right pb-2">
                    <div class="soc-item">
                        <a href="https://twitter.com/mobirise" target="_blank">
                            <span class="mbr-iconfont mbr-iconfont-social socicon-github socicon"></span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="row row-copirayt">
                <p class="mbr-text mb-0 mbr-fonts-style mbr-white align-center display-7">Made by Team HackDivas&nbsp;</p>
            </div>
        </div>
    </div>
</section>

<a href="https://mobirise.site/e" "></a>
<script src="assets/web/assets/jquery/jquery.min.js"></script>
<script src="assets/popper/popper.min.js"></script>
<script src="assets/tether/tether.min.js"></script>
<script src="assets/bootstrap/js/bootstrap.min.js"></script>
<script src="assets/smoothscroll/smooth-scroll.js"></script>
<script src="assets/parallax/jarallax.min.js"></script>
<script src="assets/mbr-tabs/mbr-tabs.js"></script>
<script src="assets/dropdown/js/nav-dropdown.js"></script>
<script src="assets/dropdown/js/navbar-dropdown.js"></script>
<script src="assets/touchswipe/jquery.touch-swipe.min.js"></script>
<script src="assets/theme/js/script.js"></script>  
  
  
</body>
<!-- <script>
    $("#signupForm").submit(function(e){
        e.preventDefault();
        console.log("aaya");
    })
</script> -->
</html>