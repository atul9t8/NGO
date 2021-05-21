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
    <title>Document</title>
    <link rel="stylesheet" href="css/about.css">
    <link rel="stylesheet" href="templates/header.css">
    <link rel="stylesheet" href="templates/footer.css">
</head>
<?php include ("templates/header.php")?>
<div class="main">
        <div class="about-info">
            <h1>Our projects & Events We Did</h1>
            <p>We've the motto of making world better for everyone. We worked hard everyday for making sure of it. We did many events such as free food distribution, free winter cloths distribution, we also successfully did free medical camp. Now we've many projects to start. Let's take a look on our all events and projects.</p>
        </div>

    <div class="events">
        <div class="events-heading">
            <h3>Events We Did</h3>
        </div>
        <div class="single-event">
            <div class="event-infos">
                <h3>Free Food Distribution</h3>
                <p>A free food distribution event was arranged on 01 May 2020, during corona pandemic at Bortakia, Sufia Road and Bariyarhat. That day we realized that many people suffer from starving & on the other side many food
                    are wasted daily. Everyday many food wastes in Almost every restaurant or hotel in our country. People paid for their food bt can't eat that all. At that day we were able to give food to almost 1500 people. And we promised that we didn't waste food. We also requested you not to waste food. Take as much as you can eat.</p>
            </div>
            <div class="event-img">
                <img src="img/food.jpg" alt="">
            </div>
        </div>
        <div class="single-event">
            <div class="event-infos">
                <h3>Blood Donation Camp</h3>
                <p>A blood donation camp was arranged on 01 january 2020 at Bortakia. Our some young volunteer eagerly wanted to make this camp. They was sure that many youth like them will come to give blood willingly. We also believe that young generation is the main power of our country.
                    We were very surprised to see the youth reaction. More than 500 young people gave thr red love at their own will & made our events successful. We are very grateful to all of them who donate their blood. We gave the blood to Chattagram Blood Bank to give whoever need blood with no cost.</p>
            </div>
            <div class="event-img">
                <img src="img/blood.jpg" alt="">
            </div>
        </div>
        <div class="single-event">
            <div class="event-infos">
                <h3>Free Warm Cloths Distribution</h3>
                <p>On 25 December 2020 we arranged a free winter cloths distribution camp near Mirsarai railway station. In winter season many people suffer in cold for lacking of warm cloths. Most of that people live in street or slams. They don't have any specific place to live.
                    So, we decided to do something good for them. And we go our prefixed place to gave warm cloths who need it. We can proudly say that we were able to give almost 600 pieces of cloths to many children and adults. Children were very happy. Their happiness made us very happy.</p>
            </div>
            <div class="event-img">
                <img src="img/winter.jpg" alt="">
            </div>
        </div>
    </div>

    <div class="events" id="projects">
        <div class="events-heading" id="Projects-heading">
            <h3>Projects We Planned</h3>
        </div>
        <div class="single-event single-project">
            <div class="event-img">
                <img src="img/wall.jpg" alt="">
            </div>
            <div class="event-infos">
                <h3>Making 700 Wall Of Humanity</h3>
                <p>In our beautiful country many people lived with only 2 pair of cloths. There are many people who don't have any warm cloths to wear in winter. Such as many rickshaw puller can't wear new cloths within a year. On the other hand there are also many people who changes cloths 2/3 times or more in a month.
                This cloths are ver much likely new. But they don't need that. For that reason we will build 10 to 12 wall of humanity in every district where people can give their unneeded clothes and people who need that cloths can take anytime and without any money as their size. </p>
            </div>
        </div>
        <div class="single-event single-project">
            <div class="event-img">
                <img src="img/school.jpg" alt="">
            </div>
            <div class="event-infos">
                <h3>Starting A Fee Free School</h3>
                <p>A free food distribution event was arranged on 01 May 2020, during corona pandemic at Bortakia, Sufia Road and Bariyarhat. That day we realized that many people suffer from starving & on the other side many food
                    are wasted daily. Everyday many food wastes in Almost every restaurant or hotel in our country. People paid for their food bt can't eat that all. At that day we were able to give food to almost 1500 people. And we promised that we didn't waste food. We also requested you not to waste food. Take as much as you can eat.</p>
            </div>
        </div>
        <div class="single-event single-project">
            <div class="event-img">
                <img src="img/broken-house.jpg" alt="">
            </div>
            <div class="event-infos">
                <h3>Building Houses for Homeless</h3>
                <p>A free food distribution event was arranged on 01 May 2020, during corona pandemic at Bortakia, Sufia Road and Bariyarhat. That day we realized that many people suffer from starving & on the other side many food
                    are wasted daily. Everyday many food wastes in Almost every restaurant or hotel in our country. People paid for their food bt can't eat that all. At that day we were able to give food to almost 1500 people. And we promised that we didn't waste food. We also requested you not to waste food. Take as much as you can eat.</p>
            </div>
        </div>
    </div>


</div>


<?php include ("templates/footer.php")?>
<script src="templates/header.js"></script>
</html>




