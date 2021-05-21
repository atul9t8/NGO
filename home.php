<?php

include ("configuration/connection.php");
session_start();
if (!isset($_SESSION['username'])){
    header("Location:login.php");
}

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="templates/header.css">
    <link rel="stylesheet" href="templates/footer.css">
    <link rel="stylesheet" href="css/home.css">
    <title>Live Life</title>
</head>
<?php include ("templates/header.php");?>

<div class="container" id="home">
    <div class="cmain">
        <div class="cmain-infos">
            <h1>Help Us To Help <br> To <span>live life</span></h1>
            <p>We are LIVE LIFE. We help helpless. We make food distribution events often. We try to help injured animals also. We already did many camping. We planted more than 5000 trees. Recently we started a small farm where we take care our injured animals, cultivate vegetables. Also here we created some employments for local women.
            We also planned to start free education here. But we need more help to keep continue helping people, helping animals.</p>
            <?php if($_SESSION['role']=='user'):  ?>
            <a href="donate.php"><button>Donate</button></a>
            <?php endif; ?>
        </div>
    </div>
</div>
<div class="about" id="about">
    <div class="about-infos">
        <div class="aih1">
            <h1>Our Mission & Vision</h1>
        </div>
        <p>LIVE LIFE is a non-profitable social foundation run by some volunteer where most of them are students. This is a non political organization. We do many events. Also successfully did some campaign. Such as Blood Donation Camp, Free Study Material distribution, Free Medical Camp etc. There are also many
        doctors, teachers, businessmen joined with us. We believe that good works doesn't stop for anyone & it should keep going. Keep us in your prayer.</p>
        <div class="about-btn">
            <a href="about.php"><button>Our Activities</button></a>
            <button onclick="location.href='about.php'">Our Projects</button>
        </div>
    </div>
    <div class="about-img">
        <img src="img/boy.jpg" alt="">
    </div>

</div>
<div class="blogs" id="blogs">
    <h1>Our Writings</h1>
    <p class="bp">Some of our volunteers have extremely good skill of writing. So, they read some blogs about our events that we did and post that in our wall. If you want you can take a look on some of our blogs. We assure you that it will not be the waste of time. </p>
    <div class="blogs-section">
        <div class="blog1" id="blogs-info">
            <div class="blog-img">
                <img src="img/cloths.jpg" alt="">
            </div>
            <p class="date">25 December 2020</p>
            <h3>Free cloths Distribution</h3>
            <p>On 25 December 2020 we arranged a free winter cloths distribution camp near Mirsarai railway station. We were able to give cloths to many children and adults.</p>
        </div>
        <div class="blog2" id="blogs-info">
            <div class="blog-img">
                <img src="img/medical.jpg" alt="">
            </div>
            <p class="date">06 August 2020</p>
            <h3>Free Medical Camp</h3>
            <p>We arranged a free medical camp at South Durgapur in Mirsarai on 05 August 2020. We are very proud that we could give medical help to almost 350 people.</p>
        </div>
        <div class="blog3" id="blogs-info">
            <div class="blog-img">
                <img src="img/food.jpg" alt="">
            </div>
            <p class="date">01 May 2020</p>
            <h3>Free Food Distribution</h3>
            <p>A free food distribution event arranged on 01 May 2020, during corona pandemic at Bortakia, Sufia Road and Bariyarhat & gave food to almost 1500 people.</p>
        </div>
    </div>
</div>
<div class="volunteer" id="volunteer">
    <div class="volunteer-img">
        <img src="img/v1.jpg" alt="">
    </div>
    <div class="volunteer-info">
        <h1>Want To Be A <span>Volunteer?</span></h1>
        <p>We are a family of almost 60 people. Who are very helpful to everyone. They are teachers, they are doctors, they are brothers, they are story tellers & overall they are good human. We can not come here without their help. But now we need more help. We need more brother. If you want to be a part of our family, if you
            want to do something good for all then our all doors are opened for you. Come on, Let's Hug!</p>
        <button>Become A Volunteer</button>
    </div>
</div>

<div class="management" id="management">
    <h1>Managerial Board</h1>
    <p class="mp">Our organization is a non-profitable organization. We started from nothing but now we have a large family with bog heart. There are some great person in our organization who worked hard to make it in this position besides their daily job. Our honourable founder Mr. Alex D'Costa is a software engineer by profession but a full time social worker by passion. We also have management head, events manager, head of volunteer and many more. Let's meet with some of our honourable
    management board members.</p>
    <div class="mall-infos">
        <div class="management-infos">
            <div class="mimg">
                <img src="img/f.jpg" alt="">
            </div>
            <h3>Mr. Alex D'Costa</h3>
            <p>Founder & CEO</p>
        </div>
        <div class="management-infos">
            <div class="mimg">
                <img src="img/mh.jpg" alt="">
            </div>
            <h3>Mrs. Eliana Ramez</h3>
            <p>Management Head</p>
        </div>
        <div class="management-infos">
            <div class="mimg">
                <img src="img/pm.jpg" alt="">
            </div>
            <h3>Mr. Mark Camelia</h3>
            <p>Events Manager</p>
        </div>
        <div class="management-infos">
            <div class="mimg">
                <img src="img/v.jpg" alt="">
            </div>
            <h3>Mr. Rudro Chowdhury</h3>
            <p>Head Of volunteer</p>
        </div>
    </div>

</div>

<?php include ("templates/footer.php");?>

<script src="templates/header.js"></script>
</html>

