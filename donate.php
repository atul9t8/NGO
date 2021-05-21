<?php
include ("configuration/connection.php");
session_start();
if (!isset($_SESSION['username'])){
    header("Location:login.php");
}

if (isset($_POST['submit'])){
    $type = mysqli_real_escape_string($conn, $_POST['radio']);
    $fname= mysqli_real_escape_string($conn, $_POST['fname']);
    $lname=mysqli_real_escape_string($conn, $_POST['lname']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $amount = mysqli_real_escape_string($conn, $_POST['amount']);

    if ($amount <= 0){
        echo "<script>alert('please enter your amount!')</script>";
    }else{
        $sql = "INSERT INTO donate(method, fname, lname, email, amount) VALUES('$type', '$fname', '$lname', '$email', '$amount')";
        if (mysqli_query($conn, $sql)){
            echo "<script>alert('Thank you very much for your donation.')</script>";

        }else{
            echo "<script>alert('Not Inserted!')</script>";
        }
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
    <title>Document</title>
    <link rel="stylesheet" href="templates/header.css">
    <link rel="stylesheet" href="css/donate.css">
    <link rel="stylesheet" href="templates/footer.css">

</head>
<?php include ('templates/header.php');?>
<div class="main">
    <div class="main-infos">
        <h1>Little Helps That Goes A Long Way</h1>
        <p>Only by helping each other we can build beautiful world. We are working to achieve the goal of better world. We established Live Life on 01 January 2015 with 10/12 people. But now we have a family of more than 400 people. We have done many events, many camps. Everybody helped us & also helps now. We have some dreams. We want to start night school project. We want to give food everyday to whom doesn't have anything to eat. We want to take care more injured animals in our farm. We want to give free education to poor children.
        We already planted many trees. We have a target of planting 50000 trees. We are trying our best to fulfill our all wants. But in this time of increasing prices of every commodities, we are facing many troubles. So, we need help. We need more helps to fulfill our all dreams. Help us to to make better world.</p>
    </div>
    <div class="all-in">
        <div class="infos">
            <div class="donate-img">
                <img src="img/girls1.jpg" alt="donate image">
            </div>
            <form action="" method="post">
                <h3><span class="change-h1"></span></h3>
                <div class="donate-amount" id="donate-amount">
                    <h4>Select Donation Amount As Doller($)</h4>
                    <div class="amount-infos">
                        <p class="para" id="para1" onclick="color1()">15</p>
                        <p class="para" id="para2" onclick="color2()">25</p>
                        <p class="para" id="para3" onclick="color3()">50</p>
                        <p class="para" id="para4" onclick="color4()">100</p>
                        <p class="para" id="para5" onclick="color5()">Custom Amount($)</p>
                        <input id="amount-input" type="text" placeholder="Enter Amount">
                        <p class="para" id="para-btn">Enter Ok</p>
                    </div>

                </div>
                <hr>
                <div class="donate-method">
                    <h4>Select Payment Method</h4>
                    <div class="donate-checkbox">
                        <input name="radio" type="radio" value="Test Donation" required>Test Donation
                        <input name="radio" type="radio" value="Offline Donation">Offline Donation
                        <input name="radio" type="radio" value="Credit Card">Credit Card
                    </div>
                </div>
                <hr>
                <div class="donor-info">
                    <h4>Personal Info</h4>
                    <div class="donor-name">
                        <input id="fname" type="text" placeholder="First Name" name="fname" required>
                        <input type="text" placeholder="Last Name" name="lname" required>
                    </div>
                    <div class="donor-email">
                        <input type="email" placeholder="Enter Your Email" name="email" required>
                    </div>
                </div>
                <div class="last-section">
                    <button class="submit-btn" name="submit" type="submit">Donate</button>
                    <p id="return1">Total Donation($):<span name='total' id="return">0</span></p>
                    <input type="hidden" name="amount" value="" id="amount">
                </div>
            </form>
        </div>
    </div>
</div>

<?php include ("templates/footer.php")?>
<script src="templates/header.js"></script>
<script src="js/donate.js"></script>
</html>

