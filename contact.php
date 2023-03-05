<?php
if (isset($_POST['contact_btn'])) {
    $name = $_POST['user_name'];
    $compname = $_POST['user_comanyname'];
    $email = $_POST['user_email'];
    $subject = $_POST['user_subject'];
    $msg = $_POST['user_msg'];
    $to = "info@premier-solution.net";
    $header = "from:$email";
    if (mail($to, $subject, $msg, $header)) {
        $msg1 = "Message submitted
    successfully";
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/fontawesome-free-6.3.0-web/fontawesome-free-6.3.0-web/css/all.css">
    <link href="https://fonts.googleapis.com/css2?family=Golos+Text&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/CSS/contact.css">
    <link rel="shortcut icon" href="/IMAGES/Logo Short.png">
    <title>Contact us</title>
</head>

<body>

    <!-- NAVBAR -->

    <nav class="navbar">

        <input type="checkbox" id="check">
        <div class="btn-one">
            <label for="check">
                <i class="fas fa-bars"></i>
            </label>
        </div>
        <a href="/HTML/index.html"><img src="/IMAGES/logo.png" alt=""></a>
        <div class="sidebar_menu">


            <div class="menu">
                <div class="btn-two">
                    <label for="check">
                        <i class=" fa fa-times"></i>
                    </label>
                </div>
                <ul>
                    <li><a href="/HTML/index.html">Home</a></li>
                    <li><a href="/HTML/about.html">About us</a></li>
                    <li> <a href="/HTML/services.html">Services</a> </li>
                    <li><a href="/HTML/products.html">Products</a></li>
                    <li><a href="/HTML/contact.php">Contact us</a></li>
                </ul>

    </nav>


    <div class="title-section">
        <h5 class="i">i</h5>
        <div class="sub-title">
            <a href="/HTML/index.html"> Home </a> > <a href="/HTML/contact.php"> Contact us </a>
        </div>
        <div class="main-title">
            <h2>Contact Us</h2>
        </div>
    </div>

    <section class="section-1">
        <div class="Map">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3401.3147718500977!2d74.31694271433935!3d31.5155135545368!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x391904875fde077f%3A0x29c066d0789bd545!2s70%2C%20New%20Garden%20Town%20Ahmed%20Block%20Muslim%20Town%2C%20Lahore%2C%20Punjab%2054000%2C%20Pakistan!5e0!3m2!1sen!2s!4v1673697284355!5m2!1sen!2s"
                width="100%" height="300" style="border:0;" allowfullscreen="yes" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </section>

    <section class="section-2">
        <h5 class="i">i</h5>
        <div class="heading">
            <p>Let's <strong>TALK</strong></p>
        </div>

        <strong>
            <?php if (!empty($msg1)) {
                echo $msg1;
            } ?>
        </strong>

        <form method="post" class="contact-form">
            <input type="text" placeholder="  Full Name" name="user_name" required>

            <input type="text" placeholder="  Company Name" name="user_comanyname" required> <br>

            <input type="number" placeholder="  Phone *" name="user_number" required>

            <input type="email" placeholder="  Email" name="user_email" required> <br>

            <input type="text" placeholder="  Inquiry Subject" name="user_subject" required> <br>

            <textarea name="" cols="90" rows="10" placeholder="  Your Inqiury" name="user_msg"></textarea> <br>
            <button class="send-btn" name="contact_btn" required>Summbit</button>
        </form>

    </section>

    <!-- FOOTER -->

    <footer class="footer">
        <div class="footer-flex">
            <ul class="services-foot">
                <h4>Services</h4>
                <li><a href="/HTML/networking.html"> Networking</a></li>
                <li><a href="/HTML/networking.html"> Power Solutions</a></li>
                <li><a href="/HTML/development.php"> Web Development</a></li>
                <li><a href="/HTML/networking.html"> Solutions</a></li>
                <li><a href="/HTML/networking.html"> Security</a></li>
                <li><a href="/HTML/networking.html"> Fiber Optic</a></li>
            </ul>

            <ul class="quick-links-foot">
                <h4>Quick links</h4>
                <li><a href="/HTML/index.html">Home</a></li>
                <li><a href="/HTML/about.html">About us</a></li>
                <li> <a href="/HTML/services.html">Services</a> </li>
                <li><a href="/HTML/products.html">Products</a></li>
                <li><a href="/HTML/contact.php">Contact us</a></li>
            </ul>

            <div class="social-links">
                <h4>Social Links</h4>
                <p><a href="#"><i class="fab fa-facebook-f"></i></a><br>
                    <a href="#"><i class="fab fa-twitter"></i></a><br>
                    <a href="#"><i class="fab fa-instagram"></i></a><br>
                    <a href="#"><i class="fa-brands fa-linkedin-in"></i></a>
                </p>
            </div>

            <div class="contact-us-foot">
                <h4>Contact info</h4>
                <p class="address">70-D, New Muslim Town, Lahore, Pakistan</p>
                <br>
                <p class="phone-number">
                    <br>Mob: <a href="tel:+92-321-4776985">+92-321-4776985</a>
                </p>
                <br>
                <p class="email-foot"><a href="mailto:info@premier-solution.net">info@premier-solution.net</a>
                </p>
            </div>

            <div class="Map-foot">
                <h4>Reach us</h4>
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3401.3147718500977!2d74.31694271433935!3d31.5155135545368!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x391904875fde077f%3A0x29c066d0789bd545!2s70%2C%20New%20Garden%20Town%20Ahmed%20Block%20Muslim%20Town%2C%20Lahore%2C%20Punjab%2054000%2C%20Pakistan!5e0!3m2!1sen!2s!4v1673697284355!5m2!1sen!2s"
                    width="250" height="250" style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>


        </div>
        <hr class="hr-foot">
        <p class="rights">Premier Solutions 2023 © ALL RIGHTS RESERVED. </p>

    </footer>
</body>

</html>