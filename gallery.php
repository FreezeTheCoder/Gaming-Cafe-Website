<?php 
    include_once 'includes/header.php';
?>
<?php include_once 'includes/loader.php'?>

<section class="hero" id="about" style="border:none">
    <div class="container-fluid">
        <?php include_once 'includes/navbar.php'?>
        <!--  -->
        <h1 class="title pink"><span class="neongreen">#</span>Le Galleria</h1>
    </div>
    <div id="carousel" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100" src="static/images/gal1.jpg" alt="">
                <div class="carousel-caption">
                    <!-- <h3 class="title amber">Immerse into the world of Gaming.</h3>
                    <h4 class="lead">Get hooked on to games you haven't heard of before.</h4> -->
                    <hr class="halfhr">
                    <a href="#" class="amber">Check out our Collection</a>
                    <hr class="halfhr">
                </div>
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="static/images/gal2.jpg" alt="">
                <div class="carousel-caption">
                    <hr class="halfhr">
                    <a href="#" class="amber">Check out our Artwork</a>
                    <hr class="halfhr">
                </div>
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="static/images/gal3.jpg" alt="Third slide">
                <div class="carousel-caption" id="caption3">
                    <hr class="halfhr">
                    <a href="#" class="amber">Check out our Specs</a>
                    <hr class="halfhr">   
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#carousel" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carousel" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
        </div>
</section>
<?php include_once 'includes/footer.php'?>


