<?php
    require_once("./config.php");
    session_start();
    $pid = $_GET['id'];
    $did = $_SESSION['id'];
    $query= "SELECT * FROM users WHERE userid='$pid'";
    $res = $con->query($query);
    $row= $res->fetch_array();

    $name= $row['username'];
    if(isset($_POST['submit'])){
        $title = $_POST['title'];
        $prescription = $_POST['prescription'];
        $presid = uniqid($pid,$title);
        $query = "INSERT INTO prescription VALUES('$presid','$did','$pid','$title','$prescription')";
        $result = $con->query($query);
        if($result){
            echo "<h3 style='color:green'>Successfully added</h3>";
            header ("location: ./patientList.php ");
        }
        else{
            echo "<h3 style='color:red'>Oops there was an error!!!!</h3>";
        }
    }
    
?>
<!DOCTYPE html>
<html  >
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="generator" content="Mobirise v5.2.0, mobirise.com">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
    <link rel="shortcut icon" href="assets/images/feminine-128x128.png" type="image/x-icon">
    <meta name="description" content="">
    
    
    <title>Patient Dashboard</title>
    <link rel="stylesheet" href="styles/patientDashboard.css">
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
<body style="background : rgba(0,0,0,0.7);">
  
  <section class="menu cid-s48OLK6784" once="menu" id="menu1-h">
  <nav class="navbar navbar-dropdown navbar-fixed-top navbar-expand-lg">
        <div class="container-fluid">
            <div class="navbar-brand">
                <span class="navbar-logo">
                    <a href="index.php">
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
                        <a class="nav-link link text-black display-4" href="index.php#features1-n">Features</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link link text-black display-4" href="index.php#tabs1-p">AI Tools</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link link text-black display-4" href="signup.php">Dashboard</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link link text-black dropdown-toggle display-4" href="#" data-toggle="dropdown-submenu" aria-expanded="false">Book</a>
                        <div class="dropdown-menu">
                            <a class="text-black dropdown-item display-4" href="labs.html">Lab Appointment</a>
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

<section class="info3 cid-smHa3xqxC6 mbr-parallax-background" id="info3-r" style="margin-top:30px; ">
<div class="mbr-overlay" style="opacity: 0.6; background-color: rgb(255, 177, 138);">
    </div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="card col-12 col-lg-10">
                <div class="card-wrapper">
                    <div class="card-box align-center">
                        <h4 class="card-title mbr-fonts-style align-center mb-4 display-1"><strong style="font-family: 'Dancing Script', cursive;">Doctor Dashboard</strong></h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

   <section id="patient-dashboard" >
            <div class="dashboard-main-card">
                    <div class="dashboard-card-head">
                        Patient History
                    </div>
                    <div id="doctor-details">
                        <div style="display:flex"> 
                            <div style="color:#ff6666;font-weight:500;margin-right:10px">Patient Name: </div>
                            <?php
                           
                          
                             echo "<div>$name</div>";
                            ?>
                        </div>
                        <div style="display:flex">
                            <div style="color:#ff6666;font-weight:500;margin-right:10px">Hospital Name: </div>
                            <div> Ram Narayan Hospital, G.E. Road, Raipur</div>
                        </div>
                    </div>
                    
                        <?php
                        
                        $query = "SELECT * FROM prescription WHERE patientId='$pid'";
            $result = $con->query($query);
            if($result){
                while($row=$result->fetch_array()){
                    $title = $row['title'];
                    $prescription = $row['prescription'];
                    
                    echo "
                    <div class='prescription'>
                    <div>
                    <h2 style='color:#ff6666'>$title</h2>
                    </div>
                    $prescription
                     </div>
                    ";
                }
    
            }
            else{
                echo "nahi aaya";
            }
                        ?>
                </div>
            </div>
   </section>
   <form id="patient-dashboard" style="display:block;" method="post">
            <div class="dashboard-main-card" style="display:block">
                <h2 style="font-weight:800; margin-top:30px;">Add Prescription</h2>
                <input placeholder="Prescription Title" id="prescription-title-input" name="title" />
                <textarea placeholder="Add Prescription" id="prescription-input" type="text" name="prescription" rows="5"></textarea>
                <br/>
                <center><button type="submit" class="btn btn-danger" name="submit">Add Prescription</button></center>
            </div>
   </form>

   
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
</html>