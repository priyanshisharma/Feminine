<!DOCTYPE html>
<html lang="en">
<head>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="generator" content="Mobirise v5.2.0, mobirise.com">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
    <link rel="shortcut icon" href="assets/images/feminine-128x128.png" type="image/x-icon">
    <meta name="description" content="">
    
    
    <title>Patient List</title>
    <link rel="stylesheet" href="styles/patientList.css">
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
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Patient List</title>
</head>
<body>
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
   <div id="patient-list-wrapper">
    <div id="patient-list-wrapper-img">
        <img src="assets/images/doctorlist.png"/>
    </div>
    <div id="patient-list-lists">
    <table>
        <!-- <thead>
            <tr>Patient Name</tr>
            <tr>Hospital</tr>
            <tr></tr>
        </thead> -->
        <?php
            // session_start();
            echo "<br>";
            require_once("./config.php");
            $occ = "patient";
            $query = "SELECT * FROM users WHERE occupation='$occ'";
            $result = $con->query($query);
            if($result){
                while($row=$result->fetch_array()){
                    $name = $row['username'];
                    $id = $row['userid'];
                    $hospital ="Ram Narayan Hospital, G.E. Road, Raipur";
                    echo "
                    <center><div class='patient-list-item'>
                             <center><div>
                             <a href='./doctorDashboard.php?id=".$row['userid']."'><h2 style='text-transform:uppercase; color:#ff6666'>$name</h2></a>
                            </div>
                            </center>
                            <center><div>$hospital</div></center>
                            
                       
                        </div></center>
                    ";
                }
    
            }
            else{
                echo "nahi aaya";
            }
        ?>
        </table>
        </div>
    </div>
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