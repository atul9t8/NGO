<?php
include("configuration/connection.php");
session_start();

if (!isset($_SESSION["username"])){
    echo "<script>location.href='login.php'</script>";
}

$id=$_GET['id'];

$sql= "SELECT * FROM signup WHERE id ='$id'";
$query=mysqli_query($conn, $sql);
$result=mysqli_fetch_assoc($query);

$deletedEmail=$result['email'];

if(isset($_POST['approve'])){
    $sql1="UPDATE signup SET status=1 WHERE id='$id' ";
    $q=mysqli_query($conn, $sql1);
    if($q){
       header("Location:request.php");
    }else{
        echo"<script>alert('Not Update')</script>";
    }
}
if(isset($_POST['delete'])){
    $sql2="INSERT INTO deletedemail(email) VALUE ('$deletedEmail')";
    $q2=mysqli_query($conn, $sql2);


    $sql3="DELETE FROM signup WHERE id='$id' ";
    $q3=mysqli_query($conn, $sql3);
    if($q3){
       header("Location:request.php");
    }else{
        echo"<script>alert('Not Update')</script>";
    }
}



mysqli_free_result($query);
mysqli_close($conn);

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ACTIONS</title>
    <link rel="stylesheet" href="templates/header.css">
    <link rel="stylesheet" href="css/action.css">
</head>
<body>
<div class="navbar">
    <div class="logo"><a href="">live life</a></div>
    <a id="toggle" href="#"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32"><defs><style>.cls-1{fill:none;}</style></defs><title/><g data-name="Layer 2" id="Layer_2"><path d="M16,7a2,2,0,1,1,2-2A2,2,0,0,1,16,7Zm0-2h0Zm0,0h0Zm0,0h0Zm0,0h0Zm0,0h0Zm0,0h0Zm0,0h0Zm0,0h0Z"/><path d="M16,18a2,2,0,1,1,2-2A2,2,0,0,1,16,18Zm0-2h0Zm0,0h0Zm0,0h0Zm0,0h0Zm0,0h0Zm0,0h0Zm0,0h0Zm0,0h0Z"/><path d="M16,29a2,2,0,1,1,2-2A2,2,0,0,1,16,29Zm0-2h0Zm0,0h0Zm0,0h0Zm0,0h0Zm0,0h0Zm0,0h0Zm0,0h0Zm0,0h0Z"/></g><g id="frame"><rect class="cls-1" height="32" width="32"/></g></svg></a>
    <div class="nav-links">
        <ul>
            <a href="home.php"><li>home</li></a>
            <li><a href="about.php">about</a></li>
            <li id="upcoming">Upcoming Events
                <ul>
                    <li><a href="#">Blanket Distribution</a></li>
                    <li><a href="#">Tree Plantation</a></li>
                    <li><a href="#">Food distribution</a></li>
                </ul>
            </li>
            <li><a href="#footer">contact</a></li>
            <li><a href="logout.php">Logout</a></li>
            <li style="color:red;" ><a class="request-number" href="#">Requests</a> (<span><?php echo $_SESSION["rows"] ?></span>)</li>
        </ul>
    </div>
</div>

<div class="req-main">
        <h1>Login Request</h1>
    <div class="req-info">
    <div class="userinfo">
        <p class="username">USERNAME:<span> <?php echo htmlspecialchars($result['username'])?></span> </p>
        <p class="email"> EMAIL:<span> <?php echo htmlspecialchars($result['email'])?></span></p>
    </div>
    <form class="rbtn" method="post">
        <button type="submit" name="approve" class="approve-btn" id="btn">Approve Request</button>
        <button type="submit" name="delete" class="delete-btn" id="btn" >Delete Request</button>
    </form>
    </div>
    
</div>
</body>

<script src="templates/header.js"></script>
</html>