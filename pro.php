<?php
	include("csrf.php");
	$db=mysqli_connect("localhost","root", "wtfpronoob","online");
	if(isset($_POST['signup'])) {

		$fname = ($_POST['fname']);
		$lname = ($_POST['lname']);
		$password = ($_POST['password']);
		$email = ($_POST['email']);
		$phone = ($_POST['phone']);
		$question = ($_POST['question']);
        $answer = ($_POST['answer']);
		$password=md5($password);
		
if (!$db) {
    die("Connection failed: " . mysqli_connect_error());
}
$sql = "Insert into users(fname,lname,phone,email,password,question,answer) values ('$fname','$lname','$phone','$email','$password','$question','$answer')";

if (mysqli_query($db, $sql)) 
{
	echo '<script type="text/javascript">alert("You have succesfully registered, Now you can try to login");</script>';
	echo '<script type="text/javascript"> window.location = "http://localhost/website2/index.php"</script>';
} 
else 
{
	echo '<script type="text/javascript">prompt("Error Occured");</script>';
	header("Location:http://localhost/website2/index.php");

    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

	}
?>
		