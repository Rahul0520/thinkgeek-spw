<?php

$db=mysqli_connect("localhost","root", "wtfpronoob","online");
error_reporting(E_ERROR | E_PARSE);
if(isset($_POST['submit'])) {

    $email = ($_POST['email']);
    $pass = ($_POST['password']);
    $newpwd = ($_POST['newpwd']);

    $sql = "SELECT email FROM users WHERE email='".$email."'";



        $run = mysqli_query($db, $sql);


        $row = $run->fetch_assoc();
if(mysqli_num_rows($email) == 0){
    if($pass == $newpwd) {
        $pass = md5($pass);
        $sql1 = "UPDATE users SET password='$pass' WHERE email='$email'";
        
        $run1 = mysqli_query($db, $sql1);
        
        echo '<script type="text/javascript">';
echo ' alert("Password update Successful")';
echo '</script>';
	echo '<script type="text/javascript">location.href = "index.php";</script>';
    } else {
        echo "<script>alert('Password update unsuccessful!');</script>";
    }
    } 
    else {
        echo "<script>alert('User doesnot exist!');</script>";
    }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="css/head.css">
<link rel="icon" href="res/ThinkGeek-pt.png" sizes="16x16">
<link href="https://fonts.googleapis.com/css?family=Bree+Serif" rel="stylesheet">
<script type="text/javascript" src="scripts/signupForm.js"></script>
<script type="text/javascript" src="scripts/loginForm.js"></script>
<title>ThinkGeek | Join in. Geek out.</title>
</head>

<body>

<div class="container">

       <div class="row">
            <div class="box">
                <div class="col-lg-12">
                    <hr>
                    <h2 class="intro-text text-center">ThinkGeek
                        <strong>RESET PASSWORD</strong>
                    </h2>
                    <hr>
                </div>

      <form action="resetpwd.php" method="post" class="register-form">
        <div class="form">
        <input type="email" name="email" placeholder="Enter E-mail ID" id="mail" autocomplete="off" required />
        <span id="email"></span>
        </div>
        <div class="form">
        <input type="password" name="password" placeholder="New Password" id="mail" autocomplete="off" required />
        <span id="email"></span>
        </div>
    <div class="form">
        <input type="password" name="newpwd" placeholder="Re-enter New Password" autocomplete="off" required />
        <span id="answer"></span>
    </div>
        <div class="form">
            <input type="hidden" name="_token" class="form-control" value="<?php echo $_session['_token'];?>"/>
        <input type="submit" name="submit" value="submit" class="btn btn-signup" autocomplete="off" />
        </div>
      </form>
    </div>
    </div>
</body>
<footer class="container">
	<div class="row">	
		<p class="col-sm-6">
			&copy; 2020 ThinkGeek | Made with<i style="color: #fd4b4b;">&nbsp; &#9829; &nbsp;</i>in India
		</p>

	</div>
</footer>
</html>