<?php

include 'session_user.php';
include 'user_connect.php';

$op=$_POST['oldp'];
$np=$_POST['newp'];
$u=$_SESSION['screen_name'];

$q1=mysqli_query($con,"SELECT * FROM studentlogin where Enroll_No='$u';");
$number=mysqli_num_rows($q1);

if($number == 0)
{
echo "Invalid Username";
}
else
{
while($row=mysqli_fetch_array($q1))
{
if($u==$row['Enroll_No'] && $op==$row['Password'])
{
$q2=mysqli_query($con,"UPDATE studentlogin SET Password='$np' WHERE Enroll_No='$u';");
if($q2)
{
echo "Password Change Successful";
}
else
{
echo "Password Change Unsuccessful";
}
}
else
{
echo "Invalid Login Credentials";
}
}
}
?>

<!DOCTYPE html>
<!--[if lt IE 8 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 8)|!(IE)]><!--><html lang="en"><!--<![endif]-->
<head>
<title>User : Main Page</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link rel="stylesheet" href="css/base.css">
<link rel="stylesheet" href="css/layout.css">
<!--[if lt IE 9]>
<script src="js/html5.js"></script>
<![endif]-->
<link rel="shortcut icon" href="images/favicon.ico">
</head>
<body data-spy="scroll" data-target="#nav-wrap">
<header class="mobile">
  <div class="row">
    <div class="col full">
      
      <nav id="nav-wrap"> <a class="mobile-btn" href="#nav-wrap" title="Show navigation">Show navigation</a> <a class="mobile-btn" href="#" title="Hide navigation">Hide navigation</a>
        <ul id="nav" class="nav">
          <li><a href="#">Welcome, <?php echo $_SESSION['screen_name']; ?> </a></li>
          <li><a href="user_main.php">..Home..</a></li>
          <li><a href="#services">..Exam..</a></li>
          <li><a href="#portfolio">..Result..</a></li>
          <li><a href="edit_user_profile1.php">..Profile..</a></li>
          <li><a href="change_pwd_user.php">..Change Password..</a></li>
          <li><a href="logout_user.php">..Logout..</a></li>
        </ul>
      </nav>
    </div>
  </div>
</header>
<section id="intro">
  <div id="intro-slider" class="flexslider">
    <ul>
      <li>
        <div class="row">
  
            <div class="slider-text">
              <h2>Hello, <span><?php echo $_SESSION['screen_name']; ?></span>. <br />Welcome to online quiz portal of Jaypee University of Engineering & Technology</h2>
            
            </div>
          
        </div>
      </li>
    </ul>
  </div>
</section>

<footer>
  <div class="row">
    <div class="col g-7">
      <ul class="copyright">
        <li>Design by Atharv, Damini, Deepanshu and Dhruvilsinh.</li>
      </ul>
    </div>
    <div class="col g-5 pull-right">
      <ul class="social-links">
        <li><a href="#"><i class="icon-facebook"></i></a></li>
        <li><a href="#"><i class="icon-twitter"></i></a></li>
        <li><a href="#"><i class="icon-google-plus-sign"></i></a></li>
        <li><a href="#"><i class="icon-linkedin"></i></a></li>
        <li><a href="#"><i class="icon-skype"></i></a></li>
        <li><a href="#"><i class="icon-rss-sign"></i></a></li>
      </ul>
    </div>
  </div>
</footer>
<script src="js/jquery-1.10.2.min.js"></script>
<script src="js/jquery.flexslider.js"></script>
<script src="js/init.js"></script>
<script src="js/smoothscrolling.js"></script>
</body>
</html>