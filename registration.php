<?php>
	$mysqli = new mysqli("localhost", "root", "", "student");

	$errnum= mysqli_connect_errno();
	if ($errnum)
	{
		%errmsg=mysqli_connect_error();

		print "Connect failed. error number= $errnum"
		"<br /> error message = $errmsg";
		exit();

	}
?>


<html>

<head>
	<title>Registration Form</title>

	<style>
		body{
			background: #333;
			font-family:arial;
		}
		form{
			padding:10px;
			margin:0 auto;
			background:#FFFFFF;
			width:500px;
		}

		label{
			font-weight:bold;
			float:left;
			width: 200px;
		}
	</style>

</head>

<body>
	<form>
	<h1>Registration Form</h1>
	<fieldset>
		<legend>Account Information</legend>
		<label>Username: </label> <input type="text" name="uname" /><br />
		<label>Email: </label> <input type="text" name="email" /><br />
		<label>Password: </label> <input type="password" name="pass" /><br />
		<label>Confirm Password: </label> <input type="password" name="cpass" />
	</fieldset>
	<fieldset>
		<legend>User Information</legend>
		<label>First Name: </label> <input type="text" name="fname" /><br />
		<label>Last Name: </label> <input type="text" name="lname" /><br />
		<label>Contact Name: </label> <input type="text" name="contact" /><br />
		<label>Address: </label> <textarea rows="2" cols="20" name="address" ></textarea><br />
		<label>City: </label> <input type="text" name="city" /><br />
		<label>State: </label> <input type="text" name="state" /><br />
		<label>Zip: </label> <input type="text" name="zip" />
	</fieldset>
	<input type="submit" value="Register" onClick="return submit_form();" />
	</form>

	<script type="text/javascript">
		function submit_form(){
			alert("Thank you for your registration...");
		}
	</script>

</body>

</html>