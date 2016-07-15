<?php

include 'session_user.php';
include 'user_connect.php';
$name=$_SESSION['screen_name'];
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
		  <li><a href="change_pwd_user.php">Change Password</a></li>
          <li><a href="logout_user.php">..Logout..</a></li>
        </ul>
      </nav>
    </div>
  </div>
</header>
<section id="intro">
 <div id="intro-slider" class="flexslider">
<?php

$result=mysqli_query($con,"SELECT * FROM studentinfo WHERE EnrollNo='$name' LIMIT 1;");

while($row = $result->fetch_assoc()) {
?>
<div class="login_form" align="center">
<?php
echo '<form action="edit_user_profile2.php" method="post">';
echo '<table>';   
echo '<tr><td width="50%" align="left"><span>Enrollment Number</span></td>
					<td width="50%" align="left"><input type="text" name="fname" value='.$name.'></td></tr><br />';
echo '<tr> <td width="50%" align="left"><span>First Name</span></td>
					<td width="50%" align="left"><input type="text" name="fname" value='.$row['FName'].'></td></tr><br />'; 
echo '<tr> <td width="50%" align="left"><span>Last Name</span></td>
					<td width="50%" align="left"><input type="text" name="fname" value='.$row['LName'].'></td></tr><br />'; 
echo '<tr><td width="50%" align="left"><span>Email ID</span></td>
					<td width="50%" align="left"><input type="email" name="mail" value='.$row['EmailID'].'></td></tr><br />';
echo '<tr><td width="50%" align="left"><span>Mobile No.</span></td>
					<td width="50%" align="left"><input type="tel" name="pn" value='.$row['MobileNo'].'></td></tr><br />';
echo '<tr><td width="50%" align="left"><span>Address 1</span></td>
					<td width="50%" align="left"><input type="text" name="add1" value='.$row['Address1'].'></td></tr><br />';
echo '<tr><td width="50%" align="left"><span>Address 2</span></td>
					<td width="50%" align="left"><input type="text" name="add2" value='.$row['Address2'].'></td></tr><br />';
echo '<tr><td width="50%" align="left"><span>City</span></td>
					<td width="50%" align="left"><input type="text" name="ci" value='.$row['City'].'></td></tr><br />';
echo '<tr><td width="50%" align="left"><span>State</span></td>
					<td width="50%" align="left"><input type="text" name="st" value='.$row['State'].'></td></tr><br />';
echo '<tr><td width="50%" align="left"><span>PinCode</span></td>
					<td width="50%" align="left"><input type="number" name="pc" value='.$row['PinCode'].'></td></tr><br />';
echo '</table>';
echo '<br><br><input type="submit" value="Save Changes">';
echo '</form>';
?>
</div>
<?php
echo '</div>';
echo '<br /><br />';
 } 
 ?>
            
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