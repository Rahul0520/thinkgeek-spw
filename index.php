<?php
session_start();
if(isset($_SESSION['username'])){
	header("Location: fandom.php");
}
?>
 <html>
 <head>
<link rel="stylesheet" href="css/head.css">
<link rel="icon" href="res/ThinkGeek-pt.png" sizes="16x16">
<link href="https://fonts.googleapis.com/css?family=Bree+Serif" rel="stylesheet">
<script type="text/javascript" src="scripts/signupForm.js"></script>
<script type="text/javascript" src="scripts/loginForm.js"></script>
<title>ThinkGeek | Join in. Geek out.</title>
</head>
<body>
<h1><center><img src="res/thinkgeek-png.png"></center></h1>

<script type="text/javascript">
function AllowedPassword() {
    var password = document.forms["signupForm"]["password"].value;
	
    if (password == "") {
        alert("Password field is empty!");
        return false;
    }
    if (password.length < 8) {
		alert("Password Length should be greater than 8 characters");
        return false;
    }
    if (!password.match(/[!@#$%^&*()]+/)) {
        alert("Password must contain a special symbol");
        return false;
    }
	else return true;
}
</script>

<!-- LOGIN -->

<div id="login">
<form name="loginForm" method="post" action="log.php" enctype="application/x-www-form-urlencoded">
<table align="left" width="150%">
<tr>
	<td align="center">
		<h2>Login</h2>
	</td>
</tr>
<tr>	
	<td>
		<input type="text" name="username" id="user" placeholder="Email" required>
	</td>	
</tr>
<br>
<tr>	

	<td>
		<input type="password" name="password" id="pass" placeholder="Password" required>
	</td>
</tr>
<tr>
	<td> 	
	<button onclick="window.location.href='forgotpass.php'">Forgot Password ? </button>
	</td>
</tr>
<tr>
	<td>
		<input type="submit" name="login" value="Let me in.." class="click">
	</td>
</tr>
<!--
<tr>
	<td colspan="2" class="signin">
		<input type="image" src="signin_google.png" alt="Login with Google" width="50%" height="50%">

	</td>
</tr>
<tr>
	<td colspan="2" class="signin">
		<input type="image" src="signin_fb.png" alt="Login with FB" width="50%" height="50%">

	</td>
</tr>
//-->
</table>
</form>
</div>


<!-- SIGNUP -->

<form name="signupForm" method="post" action="pro.php" id="signup" enctype="application/x-www-form-urlencoded"  onsubmit="return AllowedPassword() && ValidateFname() && ValidateLname() && ValidateEmail() && ValidateMobile()"> 
<table align="right"> 
<tr>
	<td align="center" colspan="2">
		<h2>New Here? Register with us..</h2>
	</td>
</tr>
<tr>
	<td>
		<input type="text" name="fname"  id = "fname" placeholder="First Name" required>	
	</td>
	<td>
		<input type="text" name="lname" id = "lname" placeholder="Last Name" required>
	</td>
</tr>

<tr>
	<td colspan="2">
		<input type="email" name="email" id ="email" placeholder="Email" required>
	</td>
</tr>
<tr>
	<td colspan="2">
		<input type="text" name="phone" id="phone" placeholder="Contact Number" required>
	</td>
</tr>
<tr>	
	<td colspan="2">
		<input type="password" name="password"  id="pwd" placeholder="Password" required onkeyup="ValidatePasswd(this.value)">
		<span id="password"></span>
        <progress value="0" max="100" id="strength" style="width: 230px"></progress>
	</td>
</tr>
<tr>
<td>
 <div class="dropdown">
            <label>Security Question</label>
        <select type="question" name="question" class="question">
        <option value="What is name of your best friend?">What is name of your best friend?</option>
		<option value="What is your favorite hobby?">What is your favorite hobby?</option>
        <option value="What is your pet name?">What is your pet name?</option>
        </select>
    </div>
</td>
</tr>
<tr>
<td>
<div class="form">
        <input type="text" name="answer" id="answer" placeholder="Type in the answer" autocomplete="off" required />
        <span id="answer"></span>
    </div>
</td>
</tr>
<tr>
<td>
<div class="g-recaptcha" data-sitekey="6LcFZ3sUAAAAAKn5e_K97Vgpi8H8D9J6rtgKd4_z"></div>
<script src='https://www.google.com/recaptcha/api.js'></script>
</td>
</tr>
<tr>
<td colspan="2">
	<input type="submit" name="signup" value="Sign Up" class="click">
</td>
</tr>

</table>
</form>

</body>
</html>