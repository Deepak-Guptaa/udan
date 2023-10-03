<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="taxi.css">
    <script src="https://kit.fontawesome.com/6122ce6209.js" crossorigin="anonymous"></script>
<!-- <link rel="stylesheet" href="css_file/vlog.css"> -->
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

  .section  {
    display: flex;
    flex-wrap: wrap;
    align-items: center;
    margin-top: 1rem;
}

.image-section {
    flex: 1;
    padding: 20px;
}

.image-section img {
    max-width: 100%;
    height: auto;
}
.content-section {
    flex: 1;
    padding: 20px;
}

h2 {
    font-size: 24px;
    margin-bottom: 10px;
}

p {
    margin-bottom: 10px;
}

.btn {
    display: inline-block;
    padding: 10px 20px;
    background-color: #333;
    color: #fff;
    text-decoration: none;
}

@media screen and (max-width: 768px) {
    .section {
        flex-direction: column;
    }

    .image-section,
    .content-section {
        flex: auto;
        padding: 20px;
    }
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
       <?php (require 'parsal/_nav.php')?>

    <!-- <header class="head">

<div class="navbar">
    <ul class="navlink">
        <li class="logo"><img src="image/taxi-car-1.jpg" alt="" width="100px"></li>

        <li><a href="/TAXI/taxiindex.html">HOME</a></li>
        <li><a href="/TAXI/about.html">ABOUT AS</a></li>
        <li><a href="/TAXI/vlog.html">VLOG</a></li>
        <li><a href="/TAXI/join as.html">JOIN AS driver</a></li>
        <li><a href="/TAXI/sevice.html">SERVICE</a></li>
        <li><a href="#">SECURITY</a></li>
        <li><a href="/TAXI/feedback.html">FEEDBACK</a></li>
      <li> <a href="#"></a></li> 
      <li> <a href="#"></a></li> 
    </ul>
</div>
</header> -->
        <!-- center area  -->

        <div class="video"><iframe width="100%" height="315" src="https://www.youtube.com/embed/s7Z-JJmO4MU" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay;
             clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe></div>
        <div class="section">

            <div class="content-section">
                <h2>Welcome to Our Taxi Service</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum in dolor mauris. Ut rhoncus
                    tristique enim, vitae euismod lectus fringilla in.</p>
                <p>Nulla facilisi. Sed consequat nibh diam, nec pellentesque est feugiat non. Phasellus lacinia interdum
                    velit vitae congue. Fusce vestibulum elementum diam et consequat.</p>
                <!-- <a href="#" class="btn">Book Now</a> -->
            </div>
            
            <div class="image-section">
                <img src="vlog/v1.jpeg" alt="Taxi Service Image">
            </div>
        </div>
        <div class="section">
            
            
            <div class="image-section">
                <img src="vlog/v2.jpeg" alt="Taxi Service Image">
            </div>
            <div class="content-section">
                <h2>Welcome to Our Taxi Service</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum in dolor mauris. Ut rhoncus
                    tristique enim, vitae euismod lectus fringilla in.</p>
                <p>Nulla facilisi. Sed consequat nibh diam, nec pellentesque est feugiat non. Phasellus lacinia interdum
                    velit vitae congue. Fusce vestibulum elementum diam et consequat.</p>
                <!-- <a href="#" class="btn">Book Now</a> -->
            </div>
        </div>
        <div class="section">

            <div class="content-section">
                <h2>Welcome to Our Taxi Service</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum in dolor mauris. Ut rhoncus
                    tristique enim, vitae euismod lectus fringilla in.</p>
                <p>Nulla facilisi. Sed consequat nibh diam, nec pellentesque est feugiat non. Phasellus lacinia interdum
                    velit vitae congue. Fusce vestibulum elementum diam et consequat.</p>
                <!-- <a href="#" class="btn">Book Now</a> -->
            </div>
            
            <div class="image-section">
                <img src="vlog/v3.jpeg" alt="Taxi Service Image">
            </div>
        </div>
        <div class="section">
            
            <div class="image-section">
                <img src="vlog/v4.jpeg" alt="Taxi Service Image">
            </div>
            <div class="content-section">
                <h2>Welcome to Our Taxi Service</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum in dolor mauris. Ut rhoncus
                    tristique enim, vitae euismod lectus fringilla in.</p>
                <p>Nulla facilisi. Sed consequat nibh diam, nec pellentesque est feugiat non. Phasellus lacinia interdum
                    velit vitae congue. Fusce vestibulum elementum diam et consequat.</p>
                <!-- <a href="#" class="btn">Book Now</a> -->
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
