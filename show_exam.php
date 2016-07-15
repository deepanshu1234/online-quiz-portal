<?php

include 'session_user.php';
include 'user_connect.php';
$name = $_SESSION['screen_name'];
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
          <li><a href="user_main.php">Home</a></li>
          <li><a href="show_exam.php">Exam</a></li>
          <li><a href="result.php">Result</a></li>
          <li><a href="register_subject.php">Course Registration</a></li>
          <li><a href="edit_user_profile1.php">Profile</a></li>
          <li><a href="change_pwd_user.php">Change Password</a></li>
          <li><a href="logout_user.php">Logout</a></li>
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

              <table width="297" border="dashed" align="center" bgcolor="#D6D6D6" frame="box">
<tbody>



             <?php

                $result=mysqli_query($con,"SELECT * FROM studentcourse, courses WHERE studentcourse.StudentID='$name' AND studentcourse.Appeared=0 AND studentcourse.SubjectID = courses.SubjectID;");
                $number=mysqli_num_rows($result);

                if($number == 0)
                {
                  echo "No exams pending.";
                }
                else
                  {
                    while($row=mysqli_fetch_array($result))
                    {
                        echo '<tr><td><a href="give_exam.php?rn='.$row['SubjectID'].'">'.$row['Name_S'].'</a></td></tr>';


                    }
                  }

              ?>

              </tbody>
</table>
            
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
  </div>
</footer>
<script src="js/jquery-1.10.2.min.js"></script>
<script src="js/jquery.flexslider.js"></script>
<script src="js/init.js"></script>
<script src="js/smoothscrolling.js"></script>
</body>
</html>