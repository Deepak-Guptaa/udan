

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="taxi.css">
    <script src="https://kit.fontawesome.com/6122ce6209.js" crossorigin="anonymous"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCQQaZfEPyYAAm2CBNgWhByma2UYP4s-Iw&callback=initMap"
        async defer></script>

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

        /* map are  */
        #map {
            height: 400px;
            width: 100%;
        }

        /* center area  */
        .main {
            display: flex;
            /* justify-content: space-around; */
            width: 100%;
            margin-top: 1rem;
        }

        .box {

            display: flex;
            justify-content: space-evenly;
            border: 2px solid;
            width: 40%;
            align-items: center;

        }

        .rate {

            gap: 5px;
        }
        .right{
            margin-left: 2rem;
        }.rate{
            padding: 1rem;
        }
.bike{
    width: 100px;
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
        <header class="head">

            <div class="navbar">
                <ul class="navlink">
                    <li class="logo"><img src="image/taxi-car-1.jpg" alt="" width="100px"></li>

                    <li><a href="/taxiindex.html">HOME</a></li>
                    <li><a href="/about.html">ABOUT AS</a></li>
                    <li><a href="/vlog.html">VLOG</a></li>
                    <li><a href="/join as.html">JOIN AS driver</a></li>
                    <li><a href="/sevice.html">SERVICE</a></li>
                    <!-- <li><a href="#">SECURITY</a></li> -->
                    <li><a href="/feedback.html">FEEDBACK</a></li>
                    <!-- <li> <a href="#"></a></li> -->
                    <!-- <li> <a href="#"></a></li> -->
                </ul>
            </div>
        </header>
        <!-- center area  -->
        <div id="map">

        </div>
        <div class="main">
            <div class="box">
                <div class="img">
                    <img src="about-image/car1.png" alt="">
                </div>
                <div class="rate">
                    <div>udaan <i class="fa-solid fa-user"></i>1
                    </div>
                    <p>
                        <br>
                        Affordable, compact rides
                    </p>
                   
    
                </div>
                <div class="right"><del>500</del>399&nbsp;<i class="fa-solid fa-greater-than"></i>
                </div>
    
            </div>
    
        </div>
        <div class="main">
            <div class="box">
                <div class="img">
                    <img src="about-image/short.png" alt="" class="">
                </div>
                <div class="rate">
                    
                
                    <div>udaan<i class="fa-solid fa-user"></i>1
                    </div>
                    <p>2 mins away•1:36 PM dropoff
                        <br>
                        Affordable, compact rides
                    </p>
                   
    
                </div>
                <div class="right"> <i class="fa-solid fa-greater-than"></i>
                </div>
    
            </div>
    
        </div>
        <div class="main">
            <div class="box">
                <div class="img">
                    <img src="about-image/short1.png" class="bike">
                </div>
                <div class="rate">
                    <div>udaan <i class="fa-solid fa-user"></i>1
                    </div>
                    <p>2 mins away•1:36 PM dropoff
                        <br>
                        Affordable, compact rides
                    </p>
                   
    
                </div>
                <div class="right"><?php (require 'parsal/price.php')?><i class="fa-solid fa-greater-than"></i>
                </div>
    
            </div>
            <div class="form_start">

                <form class="main_form" action=taxiindex.php>
                    <!-- <div class="input-icon">
                        <i class="fas fa-user"></i>
                        <input type="text" id="name" name="name" placeholder="Name" required>
                    </div>

                    <div class="input-icon">
                        <i class="fas fa-phone"></i>
                        <input type="tel" id="number" name="number" placeholder="Phone Number" required>
                    </div> -->

                    <div class="input-icon">
                        <i class="fas fa-map-marker-alt"></i>
                        <input type="text" id="pickup" name="pickup" placeholder="Pickup Location" required>
                    </div>

                    <div class="input-icon">
                        <i class="fas fa-map-marker-alt"></i>
                        <input type="text" id="destination" name="destination" placeholder="Destination" required>
                    </div>

                    <!-- <div class="input-icon">
                        <i class="far fa-calendar-alt"></i>
                        <input type="date" id="date" name="date" required>
                    </div>
                    <div class="input-icon">
                        <input type="time">
                    </div> -->

                   <input type="submit" name="submit" value="submit" class="">
                </form>
            </div>
        </div>
    </div>

        </div>
    <!-- footer area  -->
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
<script>
    function initMap() {
        // Define the coordinates for the center of the map
        var centerCoordinates = { lat: 40.7128, lng: -74.0060 };

        // Create a new map object
        var map = new google.maps.Map(document.getElementById('map'), {
            center: centerCoordinates,
            zoom: 12 // Adjust the zoom level (1 to 20)
        });

        // Add a marker to the map
        var marker = new google.maps.Marker({
            position: centerCoordinates,
            map: map,
            title: 'Hello World!'
        });
    }
</script>

</html>