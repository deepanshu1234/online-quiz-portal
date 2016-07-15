<?php

include 'session_user.php';
include 'user_connect.php';
$name = $_SESSION['screen_name'];
$code = $_GET['rn'];
echo $code;
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
  <div class="row"><div class="col full"><div class="slider-text">
<?php
  echo '<form name="frm" method="POST" action="end_quiz.php?rn='.$code.'">';
 
      
             

                $QNo = 1;
                $OptNo = 1;

                $r=mysqli_query($con,"UPDATE `studentcourse` SET `Appeared`=1 WHERE StudentID='$name' AND SubjectID='$code';");

                $result=mysqli_query($con,"SELECT * FROM question WHERE Subject_ID='$code' ORDER BY QueNo;");
                $number=mysqli_num_rows($result);
                //echo $number;

                if($number == 0)
                {
                  echo "No questions.";
                }
                else
                  {
                    while($row=mysqli_fetch_array($result))
                    {
                      echo '<br /><br />';
 
                  echo 'Question '.$QNo.' : <br /><br />'.$row['Que'];
                  echo '<br />';
                  echo '<p><input type="radio" name="ans'.$QNo.'" value="'.$row['Op1'].'">'.$row['Op1'].'</p>';
                  echo '<p><input type="radio" name="ans'.$QNo.'" value="'.$row['Op2'].'">'.$row['Op2'].'</p>';
                  echo '<p><input type="radio" name="ans'.$QNo.'" value="'.$row['Op3'].'">'.$row['Op3'].'</p>';
                  echo '<p><input type="radio" name="ans'.$QNo.'" value="'.$row['Op4'].'">'.$row['Op4'].'</p>';


                  $QNo = $QNo + 1;
            


  }
                  }

                  
 echo '<button type="submit" name="Submit">Submit and Finish Test</button>';

echo '</form>';


?>


</div></div></div>


            
         
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