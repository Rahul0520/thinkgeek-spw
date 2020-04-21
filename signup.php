<?php
	include("csrf.php");
	$db=mysqli_connect("localhost","root", "wtfpronoob","login");
	if(isset($_POST['signup'])) {
		$sql = "Insert into users(fname,lname,phone,email,password,question,answer) values ('$fname','$lname','$phone','$email','$password','$question','$answer')";
		$stmt = $mysqli->prepare($sql);
		$fname = ($_POST['fname']);
		$lname = ($_POST['lname']);
		$password = ($_POST['password']);
		$email = ($_POST['email']);
		$phone = ($_POST['phone']);
		$question = ($_POST['question']);
        $answer = ($_POST['answer']);
		$sql;
		$password=md5($password);
		
if (!$db) {
    die("Connection failed: " . mysqli_connect_error());
}

if (mysqli_query($db, $stmt)) {
    echo "New record created successfully";
    echo "$phone";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

	}
?>
		