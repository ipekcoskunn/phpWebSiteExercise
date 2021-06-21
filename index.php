<?php  ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css"/>
    <title>PHP Dynamic Web Site</title>
</head>
<body>
    <section class="main">
        <nav>
            <a href="#" class="logo">
                <img src="images/logo1.png">
            </a>
            <ul class="menu">
                <li><a href="#" class="active">Home</a></li>
                <li><a href="#">Features</a></li>
                <li><a href="#">About</a></li>
                <li><a href="#">Contact</a></li>
            </ul>
        </nav>
        <div class="main-heading">
            <h1>Create Prespectives With Virtual Reality</h1>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed necessitatibus in autem tempora, optio harum qui? Ipsam, soluta, ullam perferendis, iusto incidunt reiciendis maxime ad facere corporis excepturi eligendi labore.</p>
            <a class="main-btn" href="#">Contact</a>
        </div>
    </section>
    <section class="features">
        <div class="feature-container">
            <div class="feature-box">
                <div class="f-img">
                    <img src="images/info-icon1.png">
                </div>
                <div class="f-text">
                    <h4>Web Development</h4>
                    <p>Lorem ipsum dolor sit.</p>
                    <a href="#" class="main-btn">Check</a>
                </div>
            </div>
            <div class="feature-box">
                <div class="f-img">
                    <img src="images/info-icon2.png">
                </div>
                <div class="f-text">
                    <h4>Software Development</h4>
                    <p>Lorem ipsum dolor sit.</p>
                    <a href="#" class="main-btn">Check</a>
                </div>
            </div>
            <div class="feature-box">
                <div class="f-img">
                    <img src="images/info-icon3.png">
                </div>
                <div class="f-text">
                    <h4>App Development</h4>
                    <p>Lorem ipsum dolor sit.</p>
                    <a href="#" class="main-btn">Check</a>
                </div>
            </div>
        </div>
    </section>
    <section class="about">
        <div class="about-img">
            <img src="images/about.png">
        </div>
        <div class="about-text">
            <h2>Start Tracking Your Statistics</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed itaque nihil aliquam odit animi deleniti rerum repudiandae? Doloremque deserunt doloribus exercitationem a dolorum! Nesciunt ut eveniet incidunt enim asperiores itaque.</p>
            <button class="main-btn">Read More</button>
        </div>
    </section>
    <section class="contact">
        <div class="contact-heading">
            <h1>Contact Us</h1>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
        </div>
        <form action="userinformation.php" method="post">
            <input type="text" name="user" placeholder="Your Full Name">
            <input type="email" name="email" placeholder="Your E-Mail">
            <textarea name="message" placeholder="Type Your Message Here......"></textarea>
            <button class="main-btn contact-btn" type="submit">Continue</button>
        </form>
    </section>
</body>
</html> 
