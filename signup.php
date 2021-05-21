<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>SignUp</title>
    <link rel="stylesheet" href="css/signup.css">
</head>
<body>
<div class="main">
    <div class="header">
        <h4>LIVE LIFE</h4>
    </div>
    <div class="form-div">
        <form action="" method="post">
            <div class="img"><img  src="img/winter1.jpg" alt=""></div>
            <div class="inputs">
                <div class="input-details">
                    <p class="user-info">Username</p>
                    <input type="text" placeholder="Enter Your Username" name="username" required><br><br>
                    <p class="user-info">Email</p>
                    <input type="email" name="email" placeholder="Enter Your Email" required><br><br>
                    <p class="user-info">Password</p>
                    <input type="password" name="pass" placeholder="Enter Password" required><br><br>
                    <button type="submit" name="submit">SIGNUP</button>
                    <p class="account">Have an account? <a class="link" href="login.php">login here</a></p>
                </div>
            </div>
        </form>
    </div>
</div>

</body>
</html>

<?php
include ("configuration/connection.php");

$error = array();

if(isset ($_POST['submit'])){
    $username=mysqli_real_escape_string($conn,$_POST['username']);
    $email=mysqli_real_escape_string($conn,$_POST['email']);
    $p=$_POST['pass'];

    $sql = "SELECT * FROM signup WHERE username='$username'";
    $q = mysqli_query($conn, $sql);
    if (mysqli_num_rows($q) > 0){
        echo $error['u']="<script>alert('username exists!')</script>";
    }

    $sql1 = "SELECT * FROM signup WHERE email='$email'";
    $q1 = mysqli_query($conn, $sql1);
    if (mysqli_num_rows($q1) > 0){
        echo $error['e']="<script>alert('Email exists!')</script>";
    }

    $sql12 = "SELECT email FROM deletedemail WHERE email='$email' ";
    $q12 = mysqli_query($conn, $sql12);

    if(mysqli_num_rows($q12)){
        echo $error['e']="<script>alert('Signup request with this email deleted once already! Try with another email please.')</script>";
    }

    if (strlen($p) < 6){
        echo $error['p'] = "<script> alert('Password should be at least 6 characters!')</script>";
    }else{
        $pass=mysqli_real_escape_string($conn,md5($p));
    }

    if (count($error)==0){
        $sql2="INSERT INTO signup(username,email,password) VALUES ('$username','$email','$pass')";
        $query=mysqli_query($conn, $sql2);
        if ($query){
            header('Location:login.php');
        }
        else{
            echo "<script>alert('Something went wrong! Try again please.')</script>";
        }
    }
}
?>