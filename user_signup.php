<!DOCTYPE HTML>
<html>
<head>
<title>Sign Up : USER</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,700' rel='stylesheet' type='text/css'>
<link href="css/style1.css" rel="stylesheet" type="text/css" media="all" />
<script src="js/Chart.js"></script>
<script type="text/javascript">
function validateform(frm)
{
	if(document.frm.pwd.value.length<8)
	{
		alert('Password too short. Enter atleast 8 characters');
		frm.pwd.focus();
		return false;
	}
	
	if(frm.uname.value == "")
	{
		alert('Username required');
		frm.uname.focus();
		return false;
	}
	if(frm.pwd.value == "")
	{
		alert('Password required');
		frm.pwd.focus();
		return false;
	}
	if(frm.pwd.value != frm.pwd1.value)
	{
		alert('Both passwords should be same');
		frm.pwd1.focus();
		return false;
	}
	if(frm.fname.value == "")
	{
		alert('First name required');
		frm.fname.focus();
		return false;
	}
	if(frm.lname.value == "")
	{
		alert('Last name');
		frm.lname.focus();
		return false;
	}
	if(frm.mail.value == "")
	{
		alert('Email ID required');
		frm.mail.focus();
		return false;
	}
	if(document.frm.pnum.value.length != 10)
	{
		alert('Invalid phone number');
		frm.pnum.focus();
		return false;
	}
	if(frm.bdate.value == "")
	{
		alert('DOB required');
		frm.bdate.focus();
		return false;
	}
	if(frm.pnum.value == "")
	{
		alert('Phone number required');
		frm.pnum.focus();
		return false;
	}
	if(frm.add1.value == "")
	{
		alert('Address line 1 required');
		frm.add1.focus();
		return false;
	}
	if(frm.city1.value == "")
	{
		alert('City required');
		frm.city1.focus();
		return false;
	}
	if(frm.state1.value == "")
	{
		alert('State required');
		frm.state1.focus();
		return false;
	}
	if(frm.pcode.value == "")
	{
		alert('Pin code required');
		frm.pcode.focus();
		return false;
	}
	if(document.frm.pcode.value.length<6 || document.frm.pcode.value.length>6)
	{
		alert('Invalid pin code');
		frm.pcode.focus();
		return false;
	}
	
	
	return true;
}
</script>
</head>
<body>
<div class="wrap">
	<div class="grids_of_3">
		<div class="grid1_of_3 left">
			<div class="btn_style bg">
				<h4><u><b>REGISTRATION FORM</u></b></h4>
			</div>
			<div class="login_form">
				<form name="frm" action="user_signup_script.php" method="POST" onsubmit="return validateform(frm);">
				<table>
					<tr> <td width="50%" align="left"><span>First Name</span></td>
					<td width="50%" align="left"><input type="text" class="textbox" name="fname"/></td></tr>

					<tr> <td width="50%" align="left"><span>Last Name</span></td>
					<td width="50%" align="left"><input type="text" class="textbox" name="lname"/></td></tr>

					<tr> <td width="50%" align="left"><span>Password</span></td>
					<td width="50%" align="left"><input type="password" class="password" name="pwd"/></td></tr>

					<tr> <td width="50%" align="left"><span>Confirm Password</span></td>
					<td width="50%" align="left"><input type="password" class="password" name="pwd1"/></td></tr>
					
					<tr> <td width="50%" align="left"><span>Enrolment</span></td>
                    <td width="50%" align="left"><input type="number" class="number" value='' name="uname"/></td></tr>	

					<tr> <td width="50%" align="left"><span>Branch</span></td>
					<td width="50%" align="left">

						<select name="branch" />
        		<option value="CSE">Computer Science and Engineering</option>
        		<option value="ECE">Electronics and Communications Engineering</option>
        		<option value="MECH">Mechanical Engineering</option>
        		<option value="CHE">Chemical Engineering</option>
        		<option value="CE">Civil Engineering</option> 
        
       </select>

					</td></tr>

					<tr> <td width="50%" align="left"><span>Semester</span></td>
					<td width="50%" align="left">

						<select name="sem" />
        		<option value="1">1</option>
        		<option value="2">2</option>
        		<option value="3">3</option>
        		<option value="4">4</option>
        		<option value="5">5</option> 
        		<option value="6">6</option>
        		<option value="7">7</option>
        		<option value="8">8</option> 
        
       </select>

					</td></tr>

					<tr> <td width="50%" align="left"><span>DOB</span></td>
					<td width="50%" align="left"><input type="Date" class="Date" value='' name="bdate"/></td></tr>

					<tr> <td width="50%" align="left"><span>Email Id</span></td>
					<td width="50%" align="left"><input type="email" class="Email" value='' name="mail"/></td></tr>

					<tr> <td width="50%" align="left"><span>Mobile No.</span></td>
					<td width="50%" align="left"><input type="number" class="number" value='' name="pnum" /></td></tr>

					<tr> <td width="50%" align="left"><span>Address1</span></td>
					<td width="50%" align="left"><input type="text" class="textbox" value='' name="add1"/></td></tr>

					<tr> <td width="50%" align="left"><span>Address2</span></td>
					<td width="50%" align="left"><input type="text" class="textbox" value='' name="add2"/></td></tr>

					<tr> <td width="50%" align="left"><span>City</span></td>
					<td width="50%" align="left"><input type="text" class="textbox" value='' name="city1"/></td></tr>

					<tr> <td width="50%" align="left"><span>State</span></td>
					<td width="50%" align="left">

						<select name="state1" />
        		<option value="Andaman-Nicobar">Andaman-Nicobar</option>
        		<option value="Andhra-Pradesh">Andhra-Pradesh</option>
        		<option value="Arunachal-Pradesh">Arunachal-Pradesh</option>
        		<option value="Assam">Assam</option><option value="Bihar">Bihar</option>
        		<option value="Chandigarh">Chandigarh</option> 
        		<option value="Chattisgarh">Chattisgarh</option>
        		<option value="Dadra-Nagar Haveli">Dadra-Nagar Haveli</option>
        		<option value="Daman-Diu">Daman Diu</option> <option value="Delhi">Delhi</option><option value="Goa">Goa</option><option value="Gujarat">Gujarat</option> 
               <option value="Haryana">Haryana</option>
               <option value="Himachal-Pradesh">Himachal-Pradesh</option>
               <option value="J&K">J&amp;K</option>
               <option value="Jharkhand">Jharkhand</option> 
               <option value="Karnataka">Karnataka</option>
               <option value="Kerala">Kerala</option>
               <option value="Lakshadweep">Lakshadweep</option>
               <option value="Madhya-Pradesh">Madhya-Pradesh</option>
               <option value="Maharashtra">Maharashtra</option>
               <option value="Manipur">Manipur</option>
               <option value="Meghalaya">Meghalaya</option>
               <option value="Mizoram">Mizoram</option>
               <option value="Nagaland">Nagaland</option>
               <option value="Odisha">Odisha</option>
               <option value="Puducherry">Puducherry</option>
               <option value="Punjab">Punjab</option>
               <option value="Rajasthan">Rajasthan</option>
               <option value="Sikkim">Sikkim</option>
               <option value="Tamil-Nadu">Tamil-Nadu</option>
               <option value="Tripura">Tripura</option>
               <option value="Uttar-Pradesh">Uttar-Pradesh</option>
               <option value="Uttrakhand">Uttrakhand</option>
               <option value="West-Bengal">West-Bengal</option>
        
       </select>

					</td></tr>

					<tr> <td width="50%" align="left"><span>Pincode</span></td>
					<td width="50%" align="left"><input type="number" class="number" value='' name="pcode"/></td></tr>

					</table>
					<div class="btn_style bg1">
				       <h4><button type="submit">Submit</h4>
			        </div>
				</form>
			</div>
		</div>
		<div class="clear"></div>
	<div class="clear"></div>
	</div>
</div>
</body>
</html>