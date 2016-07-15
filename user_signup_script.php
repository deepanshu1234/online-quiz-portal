<?php
include 'user_connect.php';

if(!$con) {
	die('Connection failed: ' . $link->error());     
	}
$f=$_POST['fname'];
$l=$_POST['lname'];
$u=$_POST['uname'];
$m=$_POST['mail'];
$p=$_POST['pwd'];
$br=$_POST['branch'];
$sem=$_POST['sem'];
$b=$_POST['bdate'];
$pn=$_POST['pnum'];
$a1=$_POST['add1'];
$a2=$_POST['add2'];
$c=$_POST['city1'];
$s=$_POST['state1'];
$pc=$_POST['pcode'];
if($_SERVER['REQUEST_METHOD']=='POST') 
{
	$query2=mysqli_query($con,"INSERT INTO studentinfo(`SrNo`, `FName`, `LName`, `EnrollNo`, `Branch`, `Semester`, `DOB`, `EmailID`, `MobileNo`, `Address1`, `Address2`, `City`, `State`, `PinCode`) VALUES (null, '$f','$l', '$u', '$br', '$sem', '$b','$m','$pn','$a1','$a2','$c','$s','$pc');");
	$query1=mysqli_query($con,"INSERT INTO studentlogin(`SrNo`, `Enroll_No`, `Password`) VALUES (null,'$u','$p');");
	
	if($query1 && $query2)
	{
		echo "SignUp Successful";
		header('Location: index.php');
	}
	else
	{
		echo 'Failed';
	}
}
else
{
	echo "Failed1";
}


?>