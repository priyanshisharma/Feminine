<?php 
$predict="...........<br/>Please fill the form to predict.";
$t=0;$p1=0;
    if(isset($_POST['submit'])){
        $month= $_POST['month'];
        $start= $_POST['start'];
        $s1= strtotime($start);
        $end= $_POST['end'];
        $e1= strtotime($end);
        $diff= $e1-$s1;
        $cycle= floor($diff/86400) ;
        // echo $cycle;
        $today= date('Y-m-d');
        $t= strtotime($today);
        $next= $s1+ 28*86400;
        // $predict="Please fill the form to generate prediction";
        $predict = date('Y-m-d',$next);
        // echo $predict;
        // echo "<h3>$month</h3><br/><h3>$start</h3><br/><h3>$end</h3><br/>";
        $p1= $s1+ 14*86400;
        $diet_str1= "
        1. <p>Increase Anti-flammatary foods like - Fish oils , calcium , Vitamin-D.</p><br/>
        2.<p>Consume more Protein and Restore Iron levels</p><br/>
        3. <p>Take in More Anti-Oxidants helps in maintainence if mentrual cycle.</p><br/>
        4.<p>Increase Food with Carbohydrates like Raisin , sweet potato etc.</p><br/>
        5.<p>Include Sources of Collagen such as Jelly alongside Vitamin C.</p><br/>
        ";
        $diet_str2= "
        1. <p>Consider Taking more carbohydrates to maintain good energy levels while working out.</p><br/>
        2. <p>Increase protein intake because generally breakdown of muscles is increased during this phase.</p></br>
        3.<p>keep yourself Hydrated, Drink enough water</br>
        4.<p>Take diet focusing more on  fibre and consume food which induces melatonin, it helps in getting good Sleep.</p><br/>
        5. <p>Target nutrient rich food and reduce junk and processed food .</p><br/>
        ";
        $work_str1= "
        <p>High intensity strength training</p>
        <p>Intensive cardio workout</p>
        <p>Weight training</p>
        <p>Strength training</p>
        ";
        $work_str2= "
            <p>Endurance training</p><br/>
            <p>low-intensity weight training</p><br/>
            <p>Light strength training</p><br/>
            
        ";
        $diet;$workout;
        if($t>$p1){
            $diet=$diet_str1;
            $workout=$work_str1;
        }
        else{
            $diet=$diet_str2;
            $workout=$work_str2;
        }
        
    }

?>
<html  >
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="generator" content="Mobirise v5.2.0, mobirise.com">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
    <link rel="shortcut icon" href="assets/images/feminine-128x128.png" type="image/x-icon">
    <meta name="description" content="">
    
    
    <title>Period Tracker</title>
    <link rel="stylesheet" href="styles/tracker.css">
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
                        <a class="nav-link link text-black display-4" href="">Dashboard</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link link text-black dropdown-toggle display-4" href="#" data-toggle="dropdown-submenu" aria-expanded="false">Book</a>
                        <div class="dropdown-menu">
                            <a class="text-black dropdown-item display-4" href="">Lab Appointment</a>
                            <a class="text-black dropdown-item display-4" href="">Expert Consultancy</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link link text-black display-4" href="">Period Tracker</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    </section>
<body style="margin-top:10% !important;">
<section class="info3 cid-smHa3xqxC6 mbr-parallax-background" id="info3-r" style="margin-top:30px; ">
<div class="mbr-overlay" style="opacity: 0.6; background-color: rgb(255, 177, 138);">
    </div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="card col-12 col-lg-10">
                <div class="card-wrapper">
                    <div class="card-box align-center">
                        <div id="track-head">
                            <img id="track-page-img" src="assets/images/tracker.png">
                            <h4 class="card-title mbr-fonts-style align-center mb-4 display-1"><strong style="font-family: 'Dancing Script', cursive;">Period Tracker</strong></h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
    <div>
        <form method="post">
        <div id="track-input">
            <h2> Enter your last period details:</h2>
            <div  id="input-box-wrapper" style="">
                <div class="tracker-input-box">
                    <label id="lab">Month</label>
                    <select id="month" name="month">
                        <option value="Jan">January</option>
                        <option value="Feb">February</option>
                        <option value="Mar">March</option>
                        <option value="Apr">April</option>
                        <option value="May">May</option>
                        <option value="Jun">June</option>
                        <option value="Jul">July</option>
                        <option value="Aug">August</option>
                        <option value="Sep">September</option>
                        <option value="Oct">October</option>
                        <option value="Nov">November</option>
                        <option value="Dec">December</option>
                    </select>
                </div>
                <div class="tracker-input-box">
                <label id="lab">Start Date</label>
                    <input type="date" id="month" name="start">
                </div>
                <div class="tracker-input-box">
                <label id="lab">End Date</label>
                    <input type="date" id="month" name="end">
                </div>
            </div>
            <div class="mood-flow" style="">
                <div style="display:flex; align-items:center;">
                    <img src="assets/images/flow.png" id="flow">
                    <h3>Flow:</h3>
                </div>
                <input type="radio" id="low" name="flow" class="flow-type" value="low">
                <label class="flow-label">Low</label><br>
                <input type="radio" id="medium" name="flow" class="flow-type" value="medium">
                <label class="flow-label" >Medium</label><br>
                <input type="radio" id="high" name="flow" class="flow-type" value="high">
                <label class="flow-label" >High</label>
            </div>
            <div class="mood-flow" style="">
                <div style="display:flex; align-items:center;">
                    <img src="assets/images/mood.png" id="mood">
                    <h3>Mood:</h3>
                </div>
                <input type="radio" id="happy" name="mood" class="flow-type" value="happy">
                <label class="flow-label">Happy</label><br>
                <input type="radio" id="happy" name="mood" class="flow-type" value="normal">
                <label class="flow-label">Normal</label><br>
                <input type="radio" id="happy" name="mood" class="flow-type" value="stressed">
                <label class="flow-label">Stressed</label><br>
                <input type="radio" id="sad" name="mood" class="flow-type" value="sad">
                <label class="flow-label" >Sad</label><br>
                <input type="radio" id="anxious" name="mood" class="flow-type" value="anxious">
                <label class="flow-label" >Anxious</label>
            </div>
            <button type="submit" name="submit" action="submit" class="btn btn-danger" id="predict-button"style="">Predict Your Next Period</button>
        </div>
        </form>
        <div id="predict">
            <div style="font-size:1.5rem; text-align:center;">Your next period is predicted to be on <?php echo $predict;?></div>
        </div>
        <div id="suggestion">
            <div id="sug-card">
                <div id="card">
                    <p class="head-card">Dietary Suggestions</p>
                    <p>This is the workout suggestion for you.</p><br/>
                    <?php 
                        if($t==0 && $p1==0)    echo "Please fill the form";
                        else{

                            if($t>$p1){
                                echo "
                                 <p>Consider Taking more carbohydrates to maintain good energy levels while working out.</p><br/>
                                 <p>Increase protein intake because generally breakdown of muscles is increased during this phase.</p></br>
                                <p>keep yourself Hydrated, Drink enough water</br>
                                <p>Take diet focusing more on  fibre and consume food which induces melatonin, it helps in getting good Sleep.</p><br/>
                                 <p>Target nutrient rich food and reduce junk and processed food .</p><br/>
    
                                ";
                            }
                            else{
                                echo "
                                 <p>Increase Anti-flammatary foods like - Fish oils , calcium , Vitamin-D.</p><br/>
                                <p>Consume more Protein and Restore Iron levels</p><br/>
                                 <p>Take in More Anti-Oxidants helps in maintainence if mentrual cycle.</p><br/>
                                <p>Increase Food with Carbohydrates like Raisin , sweet potato etc.</p><br/>
                                <p>Include Sources of Collagen such as Jelly alongside Vitamin C.</p><br/>
                                ";
                            }
                        }
                    ?>
                </div>
                <div id="card">
                    <p class="head-card">Work-out Suggestions</p>
                    <p>This is the workout suggestion for you</p><br/>
                    <?php 
                        if($t==0 &&$p1==0)    echo "Please fill the form";
                        else {

                            if($t>$p1){
                                echo "
                                <p>Endurance training</p><br/>
                                <p>low-intensity weight training</p><br/>
                                <p>Light strength training</p><br/>
                                ";
                            }
                            else{
                                echo "
                                <p>High intensity strength training</p>
                               <p>Intensive cardio workout</p>
                                <p>Weight training</p>
                                <p>Strength training</p>
                                ";
                            }
                        }
                    ?>
                </div>
            </div>
            </div>
    </div>
<section class="footer3 cid-s48P1Icc8J" once="footers" id="footer3-i"><div class="container">
        <div class="media-container-row align-center mbr-white">
            
            <div class="row social-row">
                <div class="social-list align-right pb-2">
                    <div class="soc-item">
                        <a href="https://github.com/priyanshisharma/Feminine" target="_blank">
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
