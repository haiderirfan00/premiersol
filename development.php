<?php
if (isset($_POST['contact_btn'])) {
    $name = $_POST['user_name'];
    $compname = $_POST['user_comanyname'];
    $email = $_POST['user_email'];
    $subject = $_POST['user_subject'];
    $msg = $_POST['user_msg'];
    $to = "haiderrirfann@gmail.com";
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
    <link rel="stylesheet" href="/CSS/development.css">
    <link rel="shortcut icon" href="/IMAGES/Logo Short.png">
    <title>Web Development</title>
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

    <!-- SECTION 1 -->

    <section class="section-1">
        <h5 class="i">i</h5>
        <div class="sub-section-1">
            <div class="textarea-sec-1">
                <h2>Scale up your <br> Business with <br> <span>Future Ready <br> Web Apps</span> </h2>
                <p>"Web Designing at it's best"</p>
                <a href="#contact"><button class="contact-btn-sec-1">
                        Develop A Custom Web App <i class="fa-solid fa-arrow-right"></i></button></a>
            </div>
            <div class="imagebox-sec-1">
                <img src="/IMAGES/web-development-sec-1.avif" alt="">
            </div>
        </div>
    </section>

    <!-- SECTION 2 -->

    <section class="section-2">
        <div class="sub-section-2">
            <div class="textarea-sec-2">
                <h2>Welcome</h2>
                <p>We help you go beyond your current application landscape and embrace a dynamic,
                    fast-paced approach to IT. By offering a full suite of web application development,
                    modernization and management services, we can help you through each stage of your
                    application lifecycle. We harness the power of modern technologies to build custom
                    and platform-based web applications for companies to digitalize their internal operations,
                    and customer-facing services. Our web applications are highly adaptable, enabling the
                    best user experience regardless of the size of their screen. </p>
                <a href="#contact"><button class="contact-btn-sec-2">
                        We are Ready <i class="fa-solid fa-arrow-right"></i></button></a>
            </div>
            <div class="imagebox-sec-2">
                <img src="/IMAGES/web-development-sec-2.jpg" alt="">
            </div>
        </div>
    </section>

    <!-- SECTION 3 -->

    <section class="section-3">
        <h5 class="i">i</h5>
        <h4>OUR SERVICES</h4>
        <h2>What We <span>Offer</span> </h2>
        <div class="services-1">
            <div class="design sr">
                <i class="fa-sharp fa-regular fa-object-group"></i>
                <h3>UX/UI <br> Design</h3>
            </div>
            <div class="front-end sr">
                <i class="fa-solid fa-code"></i>
                <h3>Front-End Development</h3>
            </div>
            <div class="back-end sr">
                <i class="fa-solid fa-database"></i>
                <h3>Back-End Development</h3>
            </div>
        </div>
        <div class="services-2">
            <div class="full-stack sr">
                <i class="fa-solid fa-shield-halved"></i>
                <h3>Full-Stack Development</h3>
            </div>
            <div class="web-mantain sr">
                <i class="fa-sharp fa-solid fa-chart-simple"></i>
                <h3>Web App Maintenance</h3>
            </div>
            <div class="contact-us-sec-3 sr">
                <h2>Ready To Get Started ?</h2>
                <a href="#contact"><button class="contact-btn-sec-3">
                        Get Started <i class="fa-solid fa-arrow-right"></i></button></a>
            </div>
        </div>
    </section>

    <!-- SECTION 4 -->

    <section class="section-4">
        <h5 class="i">i</h5>
        <h4>OUR EXPERTISE</h4>
        <h2>Technologies</h2>
        <div class="sub-section-4">
            <div class="wrap">
                <div class="bar">
                    <h3>HTML <abbr>90%</abbr></h3>
                    <div class="thumb"><span></span></div>
                </div>

                <div class="bar">
                    <h3>CSS <abbr>85%</abbr></h3>
                    <div class="thumb"><span></span></div>
                </div>

                <div class="bar">
                    <h3>JavaScript <abbr>75%</abbr></h3>
                    <div class="thumb"><span></span></div>
                </div>

                <div class="bar">
                    <h3>Node js <abbr>70%</abbr></h3>
                    <div class="thumb"><span></span></div>
                </div>

                <div class="bar">
                    <h3>Express js <abbr>85%</abbr></h3>
                    <div class="thumb"><span></span></div>
                </div>

                <div class="bar">
                    <h3>Mongo db<abbr>90%</abbr></h3>
                    <div class="thumb"><span></span></div>
                </div>

                <div class="bar">
                    <h3>Php/Larvel<abbr>40%</abbr></h3>
                    <div class="thumb"><span></span></div>
                </div>

                <div class="bar">
                    <h3>React js <abbr>65%</abbr></h3>
                    <div class="thumb"><span></span></div>
                </div>

                <div class="bar">
                    <h3>Gsap <abbr>90%</abbr></h3>
                    <div class="thumb"><span></span></div>
                </div>

            </div>
        </div>
    </section>

    <!-- SECTION 5 -->

    <section class="section-5" id="contact">
        <h5 class="i">i</h5>
        <strong>
            <?php if (!empty($msg1)) {
                echo $msg1;
            } ?>
        </strong>
        <h4>CONTACT US</h4>
        <h2>Let's <span>Talk</span></h2>
        <form action="">
            <input type="text" placeholder="your name" name="user_name" required class="name">
            <input type="email" placeholder="your email" name="user_email" required class="email">
            <input type="number" placeholder="your number" name="user_number" required class="number">
            <textarea name="" id="" cols="30" rows="10" placeholder="your message" name="user_msg" required
                class="message"></textarea>
            <button name="contact_btn" class="summbit-btn">
                Summbit
            </button>
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



    <!-- SCRIPT -->

    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.4/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.4/ScrollTrigger.min.js"></script>

    <script>

        gsap.registerPlugin(ScrollTrigger);

        gsap.from(".section-1 ", {
            scrollTrigger: ".section-1",
            toggleActions: "restart",
            opacity: 0,
            ease: Power2.easeInOut,
            duration: 2,
            stagger: 1
        });
        gsap.from(".textarea-sec-2 ", {
            scrollTrigger: ".textarea-sec-2",
            opacity: 0,
            x: -100,
            ease: Power2.easeInOut,
            duration: 2,
            stagger: 1
        });
        gsap.from(".imagebox-sec-2 ", {
            scrollTrigger: ".imagebox-sec-2",
            opacity: 0,
            y: +100,
            ease: Power2.easeInOut,
            duration: 2,
            stagger: 1
        });
        gsap.from(".services-1", {
            scrollTrigger: ".services-1",
            opacity: 0,
            x: -100,
            ease: Power2.easeInOut,
            duration: 2,
            stagger: 0.1,
            delay: "2s",
        });
        gsap.from(".services-2", {
            scrollTrigger: ".services-1",
            opacity: 0,
            x: +100,
            ease: Power2.easeInOut,
            duration: 2,
            stagger: 0.1,
            delay: "2s",
        });

        gsap.from(".bar abbr", {
            scrollTrigger: ".bar",
            left: 0,
            ease: Power2.easeInOut,
            duration: 2,
            stagger: 0.1
        });
        gsap.from(".bar span", {
            scrollTrigger: ".bar",
            toggleActions: "restart pause",
            width: "0px",
            ease: Power2.easeInOut,
            duration: 2,
            stagger: 0.1
        });


    </script>

</body>

</html>