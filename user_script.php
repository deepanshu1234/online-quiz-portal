<?php

session_start();
include 'user_connect.php';

$u=$_POST['uname'];
$p=$_POST['pwd'];

$result=mysqli_query($con,"SELECT Password FROM studentlogin WHERE Enroll_No='$u'");
$number=mysqli_num_rows($result);
if($number == 0)
{
header('Location: error.php');
}
while($row=mysqli_fetch_array($result))
{
if($p==$row['Password'])
{
$_SESSION['login_user']=1;
$_SESSION['screen_name']=$u;
header('Location: user_main.php');
echo $u;
}
else
{
header('Location: error.php');
}
}

?>