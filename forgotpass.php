<?php
include("csrf.php");
	$db=mysqli_connect("localhost","root", "wtfpronoob","online");
	if (isset($_POST['submit'])) {

        $email = ($_POST['email']);
        $question = ($_POST['question']);
        $answer = ($_POST['answer']);

        $sql = "SELECT question, answer FROM users WHERE email='".$email."'";
        $run = mysqli_query($db, $sql);
        $row = $run->fetch_assoc();
        if($question == $row["question"] && $answer == $row['answer']) {
        header("location: resetpwd.php");   
    } else {
        echo "<script>alert('Wrong Answer!!');</script>";
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
                        <strong>SECURITY PAGE</strong>
                    </h2>
                    <hr>
                </div>

      <form action="forgotpass.php" method="post" class="register-form" enctype="application/x-www-form-urlencoded">
        <div class="form">
        <input type="email" name="email" placeholder="Type in the email id" id="mail" autocomplete="off" required />
        <span id="email"></span>
        </div>
         <center><div class="dropdown">
            <label>Security Question</label>
        <select type="question" name="question" class="question">
        <option value="What is name of your best friend?">What is name of your best friend?</option>
        <option value="What is your pet name?">What is your pet name?</option>
        <option value="What is your favorite hobby?">What is your favorite hobby?</option>
        </select>
    </div></center>
    <div class="form">
        <input type="text" name="answer" placeholder="Type in the answer" autocomplete="off" required />
        <span id="answer"></span>
    </div>
	<div class="form">
            <input type="hidden" name="_token" class="form-control" value="<?php echo $_session['_token'];?>"/>
        <input type="submit" name="submit" value="submit" class="btn btn-signup" autocomplete="off" />
        </div>
      </form>
    </div>
    </div>
<footer class="container">
	<div class="row">	
		<p class="col-sm-6">
			&copy; 2020 ThinkGeek | Made with<i style="color: #fd4b4b;">&nbsp; &#9829; &nbsp;</i>in India
		</p>

	</div>
</footer>
</body>
</html>