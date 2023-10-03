<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <script src="https://kit.fontawesome.com/6122ce6209.js" crossorigin="anonymous"></script>

  <!-- <link rel="stylesheet" href="css_file/about.css"> -->
  <style>
     
@import url('https://fonts.googleapis.com/css2?family=Merriweather:wght@300&display=swap');

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

/* CSS for the heading */
.aboutbg {
    background-image: url('about-image/bg.jpeg');
    background-repeat: no-repeat;
    background-size: cover;
    /* height:200px; */
    height: 60vh;
}

.aboutbg h1 {
    /* margin: auto; */
    display: flex;
    justify-content: center;
    position: absolute;
    margin-top: 1rem;
    margin-left: 40%;
    font-size: 28px;
    color: #c38383;

    /* margin-bottom: 20px; */
}

/* CSS for the content */
p {
    line-height: 1.5;
    margin-bottom: 10px;
}

/* CSS for the features section */
.features {
    display: flex;
    justify-content: space-evenly;
    flex-wrap: wrap;
    margin-top: 30px;
}

.feature {
    width: 80%;
    text-align: center;
}

.feature img {
    width: 40%;
    height: 60%;
    margin-bottom: 10px;
    border: none;
    border-radius: 15%;
}

.feature h3 {
    font-size: 20px;
    margin-bottom: 10px;
}

/* CSS for the contact details */
.contact-info {
    margin-top: 30px;
}

.contact-info h2 {
    font-size: 20px;
    margin-bottom: 10px;
}

/* CSS for the transparency section */
.transparency {
    margin-top: 30px;
    text-align: center;
    height: 30vh;
}

.transparency h2 {
    font-size: 20px;
    margin-bottom: 10px;
}

.transparency p {
    margin-bottom: 5px;
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
}
   </style>
</head>

<body>
    <div class="container">
      <!-- header section with php  -->
     <!--  -->
     <?php (require 'parsal/_nav.php')?>

<!--  -->
     <div class="main_center">
        <!-- center area  -->
        <div class="aboutbg">
            <h1>about company</h1>
        </div>
        <div class="features">
            <stong>about Company, your trusted partner for reliable and convenient transportation services</stong>
            <div class="feature">
                <img src="about-image/af.jpeg" alt="24/7 Support">
                <h3>24/7 Support</h3>
                <p>We're available round the clock to assist you with any inquiries or concerns you may have.</p>
            </div>
            <div class="feature">
                <img src="about-image/dr.avif" alt="Experienced Drivers">
                <h3>Experienced Drivers</h3>
                <p>Our professional drivers have years of experience and will ensure a safe and comfortable journey.</p>
            </div>
            <div class="feature">
                <img src="about-image/af.jpeg" alt="Affordable Rates">
                <h3>Affordable Rates</h3>
                <p>We offer competitive and transparent pricing to provide value for your money.</p>
            </div>
        </div>
        <div class="transparency">
            <h2>Transparency</h2>
            <p>At New Company Taxi Booking, we believe in transparency throughout our operations:</p>
            <ul>
                <li>Clear pricing with no hidden fees or surcharges</li>
                <li>Real-time tracking to know the exact status and location of your ride</li>
                <li>Instant fare estimates before booking</li>
                <li>Driver ratings and reviews to ensure quality service</li>
                <li>Secure payment options with detailed receipts</li>
            </ul>
        </div>
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