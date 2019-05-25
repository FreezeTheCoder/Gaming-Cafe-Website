<?php?>

<!DOCTYPE html>

<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">

        <!-- fa / style.css  -->
        <link rel="stylesheet" href="static/css/style.css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
        <!--  -->
        <title>Agame | Home</title>
    </head>
    <body>
        <!-- Loader div based on users internet speed-->
        <?php include_once 'includes/loader.php';?>

        <!-- Header with Navigation bar. -->
        <header class="fullscreen">
            <div class="banner">
                <?php include_once 'includes/nav.php';?>
                <div class="textbox">
                    <h1 class="lead">Welcome to <span class="darkpink big">Agame</span></h1>
                    <h2 class="sublead">The <span class="darkpink">Zen</span> Spot</h2>
                    <a href="#services"><img src="static/images/sd.png" alt="sd" style="max-height:90px;padding:10px"></a>
                </div>
            </div>
        </header>
        <!--  -->

        <!-- Section with tri column dislpay -->
        <section class="fullscreen" id="thewall">
            <h1 class="mainlead pink small"><span class="neongreen">#</span> The Wall</h1>
            <div class="disp flexcontainer-row">
                <div class="flex-col">
                    <div class="imgcard">
                        <div class="img"><img src="static/images/rub.jpg" style="width:100%;" alt=""></div>
                        <div class="textbox">
                            <h4 class="sublead gray underline">Versatile in the language of Gaming</h4>
                            <p class="sublead">We specialize in providing all the latest modern games to you, our loyal customer.</p>
                            <small class="sublead"><a href="about.php">Read More &rarr;</a></small>
                        </div>
                    </div>
                </div>
                <div class="flex-col">
                    <div class="imgcard">
                        <div class="img"><img src="static/images/cont.jpg" style="width:100%;" alt=""></div>
                        <div class="textbox">
                            <h4 class="sublead gray underline">India's first 24*7 Gaming Cafe</h4>
                            <p class="sublead">We are the first outlet in India to be open 24 hours in a day and 7 days in a week.</p>
                            <small class="sublead"><a href="about.php">Read More &rarr;</a></small>
                        </div>
                    </div>
                </div>
                <div class="flex-col">
                    <div class="imgcard">
                        <div class="img"><img src="static/images/keyboardcard.jpg" style="width:100%;" alt=""></div>
                        <div class="textbox">
                            <h4 class="sublead gray underline">Multi Platform Support</h4>
                            <p class="sublead">Offering you the BEST games across all platforms since day 1</p>
                            <small class="sublead"><a href="about.php">Read More &rarr;</a></small>
                        </div>
                    </div>
                </div>
            </div>
            <div class="quotebox">
                <h1 class="mainlead amber">"Incite, Inspire, Influence"</h1>
            </div>
        </section>
        <!--  -->

        <!-- Services Section -->
        <section class="fullscreen" id="services">
            <h1 class="mainlead pink"><span class="neongreen">#</span> Entertainement and Beyond</h1>
            <div class="flexcontainer">
                <div class="col"><i class="fas fa-desktop"></i><h3 class="lead">The Best Systems</h3></div>
                <div class="col"><i class="fas fa-network-wired"></i><h3 class="lead">Constant LAN Parties</h3></div>
                <div class="col"><i class="fas fa-hdd"></i><h3 class="lead">Storge Updated with all the latest games.</h3></div>
                <div class="col"><i class="fas fa-headphones"></i><h3 class="lead">The Best Accessories being used</h3></div>
                <div class="col"><i class="fas fa-business-time"></i><h3 class="lead">India's first 24*7 cafe.</h3></div>
                <div class="col"><i class="fas fa-poll-h"></i><h3 class="lead">Weekly LAN Parties hosted by <span class="neongreen">Agame</span></h3></div>
                <div class="col"><i class="fas fa-city"></i><h3 class="lead">Built in the best part of town by and for Gamers</h3></div>
                <div class="col"><i class="fas fa-globe"></i><h3 class="lead">Unparalleled internet speed</h3></div>
            </div>
        </section>
        <!--  -->

        <!-- //Just a quoteblock im including for a parallax effect -->
        <div class="quoteblock">
            <h1 class="mainlead">"Immersive experience like none other"</h1>
        </div>
        <!--  -->

        <!-- Section for Events -->
        <section class="fullscreen" id="events">
            <h1 class="mainlead pink"><span class="neongreen">#</span>Upcoming Events</h1>
            <div class="flexcontainer">
                <div class="col">
                    <div class="postcontainer"></div>
                    <div class="post"><h3 class="lead white big">Weekly <span class="neongreen">CSGO</span> Scrims</h3><p class="sublead">We host weekly CSGO Crims at <span class="neongreen">Agame</span>. You don't have to be a Global Elite to participate, they're called Scrims for a reason.</p><a href="events.php">&rarr; Learn More</a></div>
                </div>
                <div class="col">
                    <div class="post"><h3 class="lead white big">Inaugral <span class="neongreen">LAN</span> Event</h3><p class="sublead">Think you have <span class="neongreen">what it takes?</span>Feel free to drop by on the first of July.</p><a href="events.php">&rarr; Learn More</a></div>
                    <div class="postcontainer"></div>
                </div>
            </div>
        </section>
        <!--  -->

        <br>
        <hr class="halfhr">
        <br>

        <!-- Footer with quick links and social info -->
       <?php include_once 'includes/footer.php' ?>
        <!--  -->

        <script src="static/js/script.js"></script>
    </body>
</html>