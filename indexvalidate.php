<?php
include("csrf.php");
if (isset($_POST['operation'])) {

    $username = "root";
    $password = "wtfpronoob";
    $hostname = "localhost";

    $dbhandle = mysqli_connect($hostname, $username, $password) or die("Could not connect to DB");
    $selected = mysqli_select_db($dbhandle, "online");

        $email = $_POST['email'];
        $pass = $_POST['pass'];
        
        $sql = "SELECT password from login where email='".$email."'";
        $run = mysqli_query($dbhandle, $sql);
        $row = $run->fetch_assoc();

        if($email == $sql) {
            if (isset($_POST['remember'])) {
            setcookie('email', $email, time()+60*60*7);
            setcookie('pass', $pass, time()+60*60*7);
        }
        session_start();
        $_SESSION['email'] = $email;
        header("location: view_cart.php");   
    }


        if (password_verify($pass,$row["password"])) {

            $_SESSION['email'] = $email;
            header("location: view_cart.php"); 
        }
        else{

        header("location: index.php?error=1");
            }    
      }else {
        header("location: index.php");
      } 
?>