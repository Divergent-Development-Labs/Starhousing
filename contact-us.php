<?php include 'admin/db/connection.php'; ?>

<!DOCTYPE html>
<html>

<head>
    <?php include 'head.php'; ?>
</head>

<body data-rsssl=1 class="home page-template page-template-front-page page-template-front-page-php page page-id-15">

    <?php include 'top_bar.php'; ?>

    <section class="cs-cont-map-sec clearfix h-auto">
        <div class="cs-cont-dtls-left" style="background-image: url(admin/assets/images/map-layer-1.jpg);">
            <h2>Contact Us</h2>
            <div class="text-warning">
                <p style="font-weight: bold; font-size: 20px;">Plot Number: 22,</p>
                <p style="font-weight: bold; font-size: 20px;">Lake Area Main Road,</p>
                <p style="font-weight: bold; font-size: 20px;">Uthangudi</p>
                <p style="font-weight: bold; font-size: 20px;">Madurai - 625 107</p>
                <p style="font-weight: bold; font-size: 20px;">Tamil Nadu, India</p>
                <br>
                <span class="mob-link d-block">Phone : <span class="ybtn"><br>
                    <a href="tel:0452-4391555" class="ybtn  text-white">0452-4391555</a><br>
                </span>
                <br>
                <span class="mob-link d-block">Mobile : <span class="ybtn"><br>
                    <a href="tel:+9197877 00111" class="ybtn  text-white">+91-97877 00111</a><br>
                    <a href="tel:+919787773834" class="ybtn  text-white">+91-97877 73834</a></span>
                </span>
                <br><br>
                <span class="mob-link d-block">Email Id : 
                    <span class="ybtn"><a href="mailto:jemibalamkt2010@gmail.com" class="ybtn  text-white">jemibalamkt2010@gmail.com</a></span>
                    <span> | </span>
                    <span class="ybtn"><a href="mailto:starhousingmadurai2012@gmail.com" class="ybtn  text-white">starhousingmadurai2012@gmail.com</a></span>
                    <br>
            </div>
        </div>
        <div class="cs-cont-dtls-right ">
            <div class="card mx-md-3 mt-0 px-4 py-3"  style="background-color: #f2f2f2;">
                <form action="mail.php" method="post">
                    <div class="form-group">
                        <label for="fname">First Name</label>
                        <input class="form-control" type="text" id="form_name" name="form_name" placeholder="Your name.." required>
                    </div>
                    <div class="form-group">
                        <label for="form_subject">Subject</label>
                        <input name="form_subject" id="form_subject" type="text" class="form-control" placeholder="Subject" required>
                    </div>
                    <div class="form-group">
                        <label for="form_mnumber">Mobile Number</label>
                        <input name="form_mnumber" id="form_mnumber" type="text" pattern="[0-9]{10}" maxlength=10 class="form-control" placeholder="Mobile Number (10 digit Number)" required>
                    </div>
                    <div class="form-group">
                        <label for="form_email">Email</label>
                        <input name="form_email" id="form_email" type="email" class="form-control" placeholder="Email">
                    </div>
                    <div class="form-group">
                        <label for="form_message">Message</label>
                        <textarea name="form_message" id="form_message" class="form-control" id="" cols="30" rows="5" placeholder="Write your message here." required></textarea>
                    </div>
                        <input type="submit" value="Send Message" name="submit" class="w-100 btn btn-danger" >
                </form>
            </div>
        </div>
    </section>
    
    <?php include 'footer.php'; ?>

</body>

</html>