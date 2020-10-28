<?php include 'admin/db/connection.php'; ?>

<!DOCTYPE html>
<html>

<head>
    <?php include 'head.php'; ?>
</head>

<body data-rsssl=1 class="home page-template page-template-front-page page-template-front-page-php page page-id-15">

    <?php include 'top_bar.php'; ?>

    <section class="cs-cont-map-sec clearfix">
        <div class="cs-cont-dtls-left" style="background-image: url(admin/assets/images/map-layer-1.jpg);">
            <h2>Contact Us</h2>
            <div class="text-warning">
                <p style="font-weight: bold; font-size: 20px;">Plot Number: 22,</p>
                <p style="font-weight: bold; font-size: 20px;">Lake Area Main Road,</p>
                <p style="font-weight: bold; font-size: 20px;">Uthangudi</p>
                <p style="font-weight: bold; font-size: 20px;">Madurai - 625 107</p>
                <p style="font-weight: bold; font-size: 20px;">Tamil Nadu, India</p>
                <br>
                <span class="mob-link d-block">Mobile : <span class="ybtn"><a href="tel:+9197877 00111" class="ybtn  text-white">+91-97877 00111</a><span> | </span><a href="tel:+919787773834" class="ybtn  text-white">+91-97877 73834</a></span></span>
                <span class="mob-link d-block">Email Id : <span class="ybtn"><a href="mailto:Jemibalamkt2010@gmail.com" class="ybtn  text-white">Jemibalamkt2010@gmail.com</a></span><br>
            </div>
        </div>
        <div class="cs-cont-dtls-right h-auto ">
            <div class="card m-auto p-4"  style="background-color: #f2f2f2;">
                <form action="/action_page.php">
                    <div class="form-group">
                        <label for="fname">First Name</label>
                        <input class="form-control" type="text" id="fname" name="firstname" placeholder="Your name..">
                    </div>
                    <div class="form-group">
                        <label for="lname">Last Name</label>
                        <input class="form-control"  type="text" id="lname" name="lastname" placeholder="Your last name..">
                    </div>
                    <div class="form-group">
                        <label for="mnumber">Mobile Number</label>
                        <input class="form-control"  type="number" id="mnumber" name="mnumber" placeholder="Your Mobile Number..">
                    </div>
                    <div class="form-group">
                        <label for="subject">Subject</label>
                        <textarea  class="form-control"  id="subject" name="subject" placeholder="Write something.." style="height:170px"></textarea>
                    </div>
                        <input type="submit" value="Submit" class="w-100 btn btn-danger" >
                </form>
            </div>
        </div>
    </section>
    
    <?php include 'footer.php'; ?>

</body>

</html>