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
  <?php

$arr = array("", "", "", "", "");
$ans = array(0, 0, 0, 0, 0);
$correct = 0;
$wrong = 0;

for($i=1; $i < 6; $i++)
{
      if (isset($_POST['ans'.$i]))
        $arr[$i] = $_POST['ans'.$i];
      else
        $arr[$i]="";
        
}

echo '<br /><br />';

$result=mysqli_query($con,"SELECT * FROM question WHERE Subject_ID='$code' ORDER BY QueNo;");
                $number=mysqli_num_rows($result);
                //echo $number;

                if($number == 0)
                {
                  echo "Something went wrong. Please contact administrator.";
                }
                else
                  {
                    $i = 1;
                    while($row=mysqli_fetch_array($result))
                    {
                      if( !strcmp($arr[$i], $row['Ans'] ) )
                      {
                        $ans[$i] = 1;
                        $correct++;
                      }
                      else
                      {
                        $ans[$i] = 0;
                        $wrong++;
                      }
                      $i++;
                    }

                    }
                    $i = 1;

echo '<table width="100%" height="66" border="1" cellpadding="0" cellspacing="0" bordercolor="#A6BF79">
      <tr>
        <th bgcolor="#85A157"><span class="style1">Question No.</span></th>
        <th bgcolor="#85A157"><span class="style1">Question</span></th>
        <th bgcolor="#85A157"><span class="style1">Your Answer</span></th>
        <th bgcolor="#85A157"><span class="style1">Correct Answer</span></th>
        <th bgcolor="#85A157"><span class="style1">Correct/Wrong</span></th>
      </tr>';
      $result=mysqli_query($con,"SELECT * FROM question WHERE Subject_ID='$code' ORDER BY QueNo;");
      while($row=mysqli_fetch_array($result))
      {
        echo '<tr align="center"><td>'.$row['QueNo'].'</td><td>'.$row['Que'].'</td><td>'.$arr[$i].'</td><td>'.$row['Ans'].'</td>';
        echo '<td>';
        if($ans[$i] == 1)
        {
          echo 'Correct';
        }
        else
        {
          echo 'Wrong';
        }
        echo '</td>';
        $i++;
      }



echo '</table>';

echo '<br /><br />';
$total = $correct + $wrong;
echo '<br />Total = '.$total;
echo '<br />Correct = '.$correct;
echo '<br />Wrong = '.$wrong;

$perc = $correct / $total * 100;

echo '<br />Percentage Score = '.$perc;


$result=mysqli_query($con,"INSERT INTO `result`(`SrNo`, `Enroll_No`, `Subject_ID`, `Correct`, `Incorrect`) VALUES (null, '$name', '$code', '$correct', '$wrong');");



?>









            
         
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