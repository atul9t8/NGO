<?php
include("configuration/connection.php");
session_start();

if(isset($_POST['submit'])){
    $email=$_POST['email'];
    $pass=$_POST['pass'];

    $sql="SELECT * FROM signup WHERE email='$email' ";
    $q=mysqli_query($conn, $sql);
    $result=mysqli_fetch_assoc($q);
    $rows=mysqli_num_rows($q);

    if($rows){
        $_SESSION['username']=$result['username'];
        $_SESSION['role']=$result['role'];
        $_SESSION['status']=$result['status'];

        if (md5($pass)== $result['password']){
            if ($result['role'] == 'user'){
                if ($result['status'] == 1){
                    echo "<script> window.location.href='home.php'</script>";
                }elseif ($result['status'] == 0){
                    echo "<script>alert('Wait for admin approval. Try again after 1-2 hour please!')</script>";
                }
            }elseif ($result['role'] == 'admin'){
                echo "<script> window.location.href='home.php'</script>";
            }
        }else{
            echo "<script>alert('incorrect password!')</script>";
        }
    }else{
        echo "<script>alert('No account with this email exists!')</script>";
    }
}
?>


<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>LogIn</title>
    <link rel="stylesheet" href="css/signup.css">
</head>
<body>
<div class="main">
    <div class="header">
        <h4>LIVE LIFE</h4>
    </div>
    <div class="form-div">
        <form action="" method="post">
            <div class="img"><img  src="img/yellow-old.jpg" alt=""></div>
            <div class="inputs">
                <div class="input-details">
                    <p class="user-info">Email</p>
                    <input type="email" name="email" placeholder="Enter Your Email" required><br><br>
                    <p class="user-info">Password</p>
                    <input type="password" name="pass" placeholder="Enter Password" required><br><br>
                    <button type="submit" name="submit">LOGIN</button>
                    <p class="account">Didn't have an account? <a class="link" href="signup.php">Signup here</a></p>
                </div>
            </div>
        </form>
    </div>
</div>
</body>
</html>

