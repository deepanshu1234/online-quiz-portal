<?php

include 'session_user.php';
include 'user_connect.php';
$name=$_SESSION['screen_name'];
//echo $name;
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
<script type="text/javascript">
function validateform(frm)
{
  if(frm.oldp.value == "")
  {
    alert('Old Password required');
    frm.oldp.focus();
    return false;
  }
  if(frm.newp.value == "")
  {
    alert('New Password Required');
    frm.uname.focus();
    return false;
  }
  if(frm.newp.value != frm.newp1.value)
  {
    alert('Confirm Password');
    frm.newp1.focus();
    return false;
  }
  return true;
}
  </script>
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
	<div class="slider-text">
  <div class="login_form" align="center">
				<form action="change_pwd_user_script.php" method="post" onsubmit="return validateform(frm);" name="frm">
				<table>
					<tr> <td width="50%" align="left">Enrollment Number</td>
					<td width="50%" align="left"><input name="en" type="text" value="<?php echo $name; ?>"/></td></tr>
					<tr> <td width="50%" align="left">Old Password</td>
					<td width="50%" align="left"><input name="oldp" type="password" value="" /></td></tr>
					<tr> <td width="50%" align="left">New Password</td>
					<td width="50%" align="left"><input name="newp" type="password" value="" /></td></tr>
					<tr> <td width="50%" align="left">Confirm New Password</td>
					<td width="50%" align="left"><input name="newp1" type="password" value="" /></td></tr>
					</table>
<input name="submit" type="submit" value="Change Password" />
<input name="reset" type="reset" value="Clear Password"/>
</form>
        </div>    
		</div>
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