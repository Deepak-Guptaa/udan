<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="taxi.css">
    <script src="https://kit.fontawesome.com/6122ce6209.js" crossorigin="anonymous"></script>
<!-- <link rel="stylesheet" href="css_file/feedback.css"> -->
<style>@import url('https://fonts.googleapis.com/css2?family=Merriweather:wght@300&display=swap');

*{
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
.feedback {
    
    display: flex;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            flex-direction: column; 
            align-items: center;
            flex-wrap: wrap;
}

h1 {
    text-align: center;
}

label {
    display: block;
    margin-bottom: 10px;
}

input[type="text"],
input[type="email"],
textarea {
    width: 100%;
    padding: 10px;
    margin-bottom: 20px;
    border: 1px solid #ccc;
    border-radius: 5px;
}

textarea {
    height: 100px;
}

button {
    background-color: #4CAF50;
    color: white;
    padding: 10px 20px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
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
     <?php (require 'parsal/_nav.php')?>
        <!-- center area  -->
        <div class="feedback">
            <h1>Website Visit and Feedback</h1>
            <form id="feedback-form">
                <label for="name">Name:</label>
                <input type="text" id="name" name="name" required>

                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>

                <label for="website">Visited Website:</label>
                <input type="text" id="website" name="website" required>

                <label for="feedback">Feedback:</label>
                <textarea id="feedback" name="feedback" required></textarea>

                <button type="submit">Submit</button>
            </form>
        </div>
        <footer>
            <div class="footer_">
                <div class="footer-links">
                    <ul>
                        <li><a href="taxindex.php">Home</a></li>
                        <li><a href="about.php">About</a></li>
                        <li><a href="">Services</a></li>
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