<?php 
    include_once 'includes/header.php';
?>
<?php include_once 'includes/loader.php'?>

<section class="hero" id="contact" style="border:none">
    <div class="container-fluid">   
        <?php include_once 'includes/navbar.php'?>
        <div class="row" id="fcontact"> 
            <div class="col-sm-6" id="mapareaS">
                <div class="box" style="height:400px;border:1px solid var(--main-neon-green);">
                    <iframe style="width:100%;height:100%;" src="https://maps.google.com/maps?q=university%20of%20san%20francisco&t=&z=13&ie=UTF8&iwloc=&output=embed"></iframe>
                </div>
                <h5 class="title pink"><span class="neongreen">#</span>Address:</h5>
                <p class="lead main-white">5th D Main Rd, HRBR Layout 2nd Block, HRBR Layout, Kalyan Nagar, Bengaluru, Karnataka 560043</p>
                <h5 class="title pink"><span class="neongreen">#</span>Contact Info:</h5>
                <p class="lead main-white">9003238152, 9500016260</p>
                <h5 class="title pink"><span class="neongreen">#</span>Mail us at</h5>
                <p class="lead main-white"><i class="fa fa-envelope" aria-hidden="true"></i> sidshady.ronaldo@gmail.com</p>
            </div>
            <div class="col-sm-6" id="contactform">
                <h3 class="title pink"><span class="neongreen">#</span>Drop us a message</h3>
                <form>
                    <div class="form-group">
                        <label class="main-white" for="name">Name:</label>
                        <input type="text" class="form-control rounded-0"> 
                    </div>
                    <div class="form-group">
                        <label class="main-white" for="email">Email:</label>
                        <input type="text" class="form-control rounded-0">
                    </div>
                    <div class="form-group">
                        <label class="main-white" for="phone">Phone Number:</label>
                        <input type="text" class="form-control rounded-0">
                    </div>
                    <div class="form-group">
                        <label class="main-white" for="message">Message</label>
                        <textarea name="" id="" cols="30" rows="10" class="form-control rounded-0"></textarea>
                    </div>
                    <div class="form-group d-flex justify-content-center">
                        <button type="submit" class="btn">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
<?php include_once 'includes/footer.php'?>
