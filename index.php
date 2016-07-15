<!DOCTYPE HTML>

<?php
	//include 'session_user.php';
	include 'user_connect.php';
	//$name=$_SESSION['screen_name'];
?>

<html>
<head>
<title>Homepage</title>

<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<script src="js/Chart.js"></script>
</head>
<body>
<div class="wrap">
	<div class="grids_of_3">
		<div class="grid1_of_3">
			
		</div>
		<div class="grid1_of_3 left">
			<div class="btn_style bg">
				<h4>login</h4>
			</div>
			<div class="login_form">
				<form action="user_script.php" method="post" name="user_login">
					<span>Enrollment ID</span>
					<input type="text" class="textbox" name="uname" value="Enter your enrollment Id here" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Enter your enrollment Id here';}">
					<span class="top">password</span>
					<input type="password" value="" name="pwd" />
					<div class="buttons">
				<button class="bg1">Sign In</button>
				
			</div>
				</form>
				<ul class="login_b">
					<li><i class="border"></i><p>or</p><i class="border"></i></li><br>
					<div class="buttons">
					<li><button class="bg1"><a href="user_signup.php">Sign Up</a></button></li>
					</div>
				</ul>
			</div>
		</div>
	<div class="clear"></div>
	<div class="copy">
		<p>Footer</a></p>
	</div>
	</div>
</div>
</body>
</html>