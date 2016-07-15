<?php
include 'session_user.php';
include 'user_connect.php';


if(!$con) {
	die('Connection failed: ' . $link->error());     
	}

$u=$_SESSION['screen_name'];
$m=$_POST['mail'];
$pnum=$_POST['pn'];
$a1=$_POST['add1'];
$a2=$_POST['add2'];
$c=$_POST['ci'];
$s=$_POST['st'];
$p=$_POST['pc'];
if($_SERVER['REQUEST_METHOD']=='POST') 
{
$query1=mysqli_query($con,"UPDATE studentinfo SET EmailID='$m',MobileNo='$pnum',Address1='$a1',Address2='$a2',City='$c',State='$s',PinCode='$p' WHERE EnrollNo='$u';");
if(!$query1 )
echo "Changes unsuccessful. Try again.";
else
//echo "Sign Up successful. Remember your credentials for future use.";
header('Location: user_main.php');
}
else
{
	echo "Fill up all the entries please.";
}

?>