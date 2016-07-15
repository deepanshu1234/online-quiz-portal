<?php

include 'session_user.php';
include 'user_connect.php';
$name = $_SESSION['screen_name'];
$r=$_GET['rn'];

              $query2=mysqli_query($con,"SELECT * from studentcourse WHERE StudentID='$name' AND SubjectID='$r'");
              $number = mysqli_num_rows($query2);
              if($number == 0)
              $query1=mysqli_query($con,"INSERT INTO studentcourse(`SrNo`, `StudentID`, `SubjectID`, `Appeared`) VALUES (null, '$name', '$r', 0);");

             header('Location: register_subject.php');