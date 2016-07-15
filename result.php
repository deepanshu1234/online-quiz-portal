<?php

include 'session_user.php';
include 'user_connect.php';
$name = $_SESSION['screen_name'];
echo $name;
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
          <li><a href="show_exam.php">..Exam..</a></li>
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

              <?php

echo '<br /><br />';

$result=mysqli_query($con,"SELECT * FROM result, courses WHERE result.Enroll_No='$name' AND result.Subject_ID=courses.SubjectID ORDER BY result.SrNo;");
                $number=mysqli_num_rows($result);
                //echo $number;

                if($number == 0)
                {
                  echo "You haven't appeared for any exams.";
                }
                else
                  {
                    echo '<table width="100%" height="66" border="1" cellpadding="0" cellspacing="0" bordercolor="#A6BF79">
      <tr>
        <th bgcolor="#85A157"><span class="style1">Sr. No.</span></th>
        <th bgcolor="#85A157"><span class="style1">Subject Name</span></th>
        <th bgcolor="#85A157"><span class="style1">Total Questions</span></th>
        <th bgcolor="#85A157"><span class="style1">Correct Answers</span></th>
        <th bgcolor="#85A157"><span class="style1">Wrong Answers</span></th>
        <th bgcolor="#85A157"><span class="style1">Percentage Score</span></th>
      </tr>';

      $i = 1;


                    while($row=mysqli_fetch_array($result))
                    {
                      $total = $row['Correct'] + $row['Incorrect'];
                      $perc = $row['Correct'] / $total * 100;

                      echo $total;
                      echo $perc;
                  
        echo '<tr align="center"><td>'.$i.'</td><td>'.$row['Name_S'].'</td><td>'.$total.'</td><td>'.$row['Correct'].'</td><td>'.$row['Incorrect'].'</td><td>'.$perc.'</td>';
        echo '<tr>';
        $i++;
      }
    }



echo '</table>';



?>
              











            
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