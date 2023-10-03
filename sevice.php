<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="taxi.css">
    <script src="https://kit.fontawesome.com/6122ce6209.js" crossorigin="anonymous"></script>

    <!-- <link rel="stylesheet" href="css_file/service.css" -->
    <style>@import url('https://fonts.googleapis.com/css2?family=Merriweather:wght@300&display=swap');

* {
    margin: 0;
    padding: 0;
    font-family: 'Merriweather', serif;
}

.head {
    position: -webkit-sticky;
    position: sticky;
    top: 0;
    z-index: 1;

}

.navlink {
    display: flex;
    justify-content: space-evenly;
    flex-wrap: wrap;
    align-items: center;
    list-style: none;
    background-color: rgb(142, 177, 243);
    background-size: auto;

    /* width: 100vw; */

}

.navlink li a {
    text-decoration: none;
}

.logo {
    border: 2px solid;
    border-radius: 8px;
}

.btn {
    /* font-size: 1.5rem; */
    /* background-color: darkgray; */
    /* color: aliceblue; */
    border: none;
}

/* center area  */
.booking_service {
    background-color: #333;
    color: #fff;
    padding: 10px;
    text-align: center;
}

header h1 {
    margin: 0;
}

.main-section {
    display: flex;
    flex-direction: column;
    flex-wrap: wrap;
    justify-content: space-evenly;
    align-items: center;
}

/* .content-section {
    background-color: #f2f2f2;
    padding: 20px;
    margin-bottom: 30px;
} */

.content-section h2 {
    font-size: 24px;
    margin-bottom: 10px;
}

.content-section p {
    margin-bottom: 20px;
}

.content-section ul {
    list-style-type: disc;
    padding-left: 20px;
    margin-bottom: 20px;
}

.content-section ol {
    list-style-type: decimal;
    padding-left: 20px;
    margin-bottom: 20px;
}

.content-section li {
    margin-bottom: 5px;
}

.content-image {
    max-width: 100%;
    height: auto;
    margin-bottom: 20px;
}

/* footer are  */
.footer_ {
    max-width: 1200px;
    margin: 0 auto;
    padding: 20px;
}

footer {
    background-color: #333;
    color: #fff;
    padding: 20px;
    text-align: center;
}

.footer-links ul {
    list-style: none;
    display: flex;
    justify-content: center;
    margin-bottom: 10px;
}

.footer-links ul li {
    margin: 0 10px;
}

.footer-links ul li a {
    color: #fff;
    text-decoration: none;
}

.footer-contact h4,
.footer-social h4 {
    color: #fff;
    margin-bottom: 10px;
}

.footer-info p {
    font-size: 12px;
}

.footer-social ul {
    list-style: none;
    display: flex;
    justify-content: center;
    margin-top: 10px;
}

.footer-social ul li {
    margin: 0 10px;
}

.footer-social ul li a {
    display: inline-block;
    width: 30px;
    height: 30px;
}</style>
</head>

<body>
    <div class="container">
        <!-- header section with php  -->
    <?php (require 'parsal/_nav.php')?>
   
        <!-- center area  -->
        <div class="booking_service">
            <h1>Taxi Booking Service</h1>
        </div>
        <div class="main-section">
            <section class="content-section">
                <h2>About Us</h2>
                <p>Welcome to our taxi booking service!<br/> We provide reliable and convenient transportation solutions to
                    help<br/>
                    you reach your destination comfortably and on time. <br/>Our fleet of well-maintained vehicles and
                    professional <br/>drivers are ready to serve you 24/7.</p>
                <img src="image/ser2.jpg" alt="Taxi" class="content-image">
            </section>

            <section class="content-section">
                <h2>Why Choose Us?</h2>
                <ul>
                    <li>Convenient online booking system</li>
                    <li>Fast and reliable pickups</li>
                    <li>Experienced and professional drivers</li>
                    <li>Flexible payment options</li>
                    <li>Safe and comfortable vehicles</li>
                    <li>24/7 customer support</li>
                </ul>
                <img src="image/ser2.jpg" alt="Drivers" class="content-image">
            </section>

            <section class="content-section">
                <h2>How to Book a Taxi</h2>
                <ol>
                    <li>Visit our website or download our mobile app</li>
                    <li>Select your pickup location and destination</li>
                    <li>Choose the type of vehicle you require</li>
                    <li>Specify any additional preferences or requirements</li>
                    <li>Review the estimated fare and confirm your booking</li>
                    <li>Receive confirmation and driver details via email or SMS</li>
                    <li>Enjoy a comfortable ride to your destination</li>
                    <li>Make a payment through our secure payment gateway</li>
                    <li>Leave a rating and feedback for the driver</li>
                </ol>
                <img src="image/ser1.jpg" alt="Booking" class="content-image">
            </section>

            <section class="content-section">
                <h2>Contact Us</h2>
                <p>If you have any questions, feedback, or need assistance with your taxi booking, our customer support
                    team<br/>
                    is available 24/7. You can reach us through the following channels:</p>
                <ul>
                    <li>Phone: +1-7389152954</li>
                    <li>Email: dg476504@gmail.com</li>
                    <li>Live Chat: Available on our website</li>
                </ul>
            </section>
        </div>
        <footer>
            <div class="footer_">
                <div class="footer-links">
                    <ul>
                        <li><a href="#">Home</a></li>
                        <li><a href="#">About</a></li>
                        <li><a href="#">Services</a></li>
                        <li><a href="#">Contact</a></li>
                    </ul>
                </div>
                <div class="footer-contact">
                    <h4>Contact Us</h4>
                    <p>rewa mcu campus</p>
                    <p>Phone: 738915954</p>
                    <p>Email: dg476504@gmail.com</p>
                </div>
                <div class="footer-social">
                    <h4>Follow Us</h4>
                    <ul>
                        <li><a href="#"><i class="fa-brands fa-facebook" style="color: #2e71e5;"></i></a></li>
                        <li><a href="#"><i class="fa-brands fa-twitter" style="color: #7f2afe;"></i></a></li>
                        <li><a href="#"><i class="fa-brands fa-instagram" style="color: #e42165;"></i></a></li>
                    </ul>
                </div>
            </div>
            <div class="footer-info">
                <p>&copy; 2023 Your Taxi Booking Website. All rights reserved. </p>
                <p> design & develop by Mr.Dk gupta.</p>
            </div>
        </footer>
    </div>
</body>

</html>