<!-- db connection -->
<?php

$host = "localhost";
$username = "root";
$password = "";
$dbname = 'eversmile';
$con = mysqli_connect($host, $username, $password, $dbname) or die('connection failed');

if(isset($_POST['submit']))
{
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $date = $_POST['date'];
    $insertQyuery = "INSERT INTO `appointments` VALUES (NULL, '$name', '$email', '$phone', '$date')";
    $insert = mysqli_query($con, $insertQyuery);

    if($insert)
    {
        $message = 'Appointment booked successfully';
    }
    else
    {
        $message = 'Failed to book appointment';
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EverSmile</title>
    <!-- font -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
    <!-- bootstrap -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/css/bootstrap.min.css">
    <!-- css links -->
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<!-- header  -->

<header class="header fixed-top">
    <div class="container">
        <div class="d-flex align-items-center justify-content-between">

            <a href="#home" class="logo"><span>E</span>ver<span>S</span>mile</a>

            <nav class="nav">
                <a href="#home">home</a>
                <a href="#about">about</a>
                <a href="#services">services</a>
                <a href="#reviews">reviews</a>
                <a href="#contact">contact</a>
            </nav>
            
            <a href="#contact" class="link-btn">Book Appointment</a>

            <div id="menu-btn" class="fas fa-bars"></div>

        </div>
    </div>
</header>

<!-- home -->

<section class="home" id="home"> 

    <div class="container">
        <div class="row min-vh-100 align-items-center">
            <div class="content text-center text-md-left">
                <h3>Welcome to EverSmile! </h3>
                <p>Your Smile Is Our Priority Say goodbye to dental anxiety and hello to healthier, brighter smiles. </p>
                <a href="#contact" class="link-btn">Book Appointment</a>
            </div>
        </div>
    </div>

</section>

<!-- about -->
<section class="about" id="about">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-6 image">
                <img src="images/about.jpg" class="w-100 mb-5 mb-md-0" alt="">
            </div>
            <div class="col-md-6 content">
                <span>About Us</span>
                <h3>True Healthcare for you</h3>
                <p>Welcome to EverSmile, where your smile is our passion! 
                    We are dedicated to providing exceptional dental care in a comfortable and welcoming environment.</p>
                <a href="#contact" class="link-btn">Book Appointment</a>
            </div>
        </div>
    </div>
</section>

<!-- services -->
<section class="services" id="services">
    <h1 class="heading">Our services</h1>
    <div class="box-container container">
        <div class="box">
            <img src="images/icon1.png" alt="">
            <h3>Preventive Dentistry</h3>
            <p>Regular dental checkups, Professional teeth cleaning (scaling and polishing), Dental sealants, Fluoride treatments and Oral hygiene education</p>
        </div>
        <div class="box">
            <img src="images/icon2.png" alt="">
            <h3>Diagnostic Services</h3>
            <p>Dental X-rays, Oral cancer screening and 3D imaging and digital impressions</p>
        </div>
        <div class="box">
            <img src="images/icon3.png" alt="">
            <h3>Restorative Dentistry</h3>
            <p>Fillings for cavities, Dental crowns, Bridges, Dentures (partial and full), Root canal therapy, Dental implants</p>
        </div>
        <div class="box">
            <img src="images/icon4.png" alt="">
            <h3>Cosmetic Dentistry</h3>
            <p>Teeth whitening, Veneers, Composite bonding and Smile makeovers</p>
        </div>
        <div class="box">
            <img src="images/icon5.png" alt="">
            <h3>Oral Surgery</h3>
            <p>Tooth extractions (including wisdom teeth), Bone grafting and Sinus lifts</p>
        </div>
        <div class="box">
            <img src="images/icon6.png" alt="">
            <h3>Emergency Dental Services</h3>
            <p>Toothache relief, Broken or chipped tooth repair, Abscess treatment and Dental trauma care</p>
        </div>
        <div class="box">
            <img src="images/icon7.png" alt="">
            <h3>Pediatric Dentistry</h3>
            <p>Child-friendly cleanings and exams and Preventive care for kids</p>
        </div>
        <div class="box">
            <img src="images/icon8.png" alt="">
            <h3>Specialized Services</h3>
            <p>TMJ/TMD treatment, Sleep apnea and snoring solutions and Holistic dentistry options</p>
        </div>
    </div>
</section>

<!-- process -->
<section class="process" id="process">
    <h1 class="heading">Work Process</h1>
    <div class="box-container container">
        <div class="box">
            <img src="images/p1.png" alt="">
            <h3>Cosmetic Dentistry</h3>
            <p>Enhancing the appearance of teeth, gums, and smiles through treatments like teeth whitening, veneers, and smile makeovers.</p>
        </div>
        <div class="box">
            <img src="images/p2.png" alt="">
            <h3>Pediatric Dentistry</h3>
            <p>Ppecializes in the oral health care of children, providing preventive and therapeutic treatments in a kid-friendly environment.</p>
        </div>
        <div class="box">
            <img src="images/p3.png" alt="">
            <h3>Dental Implants</h3>
            <p>Durable, natural-looking replacements for missing teeth that are surgically placed into the jawbone to restore function and aesthetics.</p>
        </div>
    </div>
</section>

<!-- reviews -->
<section class="reviews" id="reviews">
    <h1 class="heading">What Our Patients Say</h1>
    <div class="box-container container">
        <div class="box">
            <img src="images/c1.png" alt="">
            <p>Exceptional care, friendly staff, and great results—highly recommend!</p>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <h3>User Name</h3>
            <span>Satisfied Client</span>
        </div>
        <div class="box">
            <img src="images/c2.png" alt="">
            <p>Fantastic service with a professional and caring team—truly the best!</p>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <h3>User Name</h3>
            <span>Satisfied Client</span>
        </div>
        <div class="box">
            <img src="images/c3.png" alt="">
            <p>Outstanding dental care in a welcoming and professional environment!</p>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <h3>User Name</h3>
            <span>Satisfied Client</span>
        </div>
    </div>
</section>

<!-- contact -->
<section class="contact" id="contact">
    <h1 class="heading">Book Appointment</h1>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
        <?php
            if (!empty($message)) {
                echo '<p class="message">' . $message . '</p>';
            }
        ?>
        <span>Name : </span>
        <input type="text" name="name" placeholder="Enter your name" class="box" required>
        <span>Email : </span>
        <input type="email" name="email" placeholder="Enter your email" class="box" required>
        <span>Phone number : </span>
        <input type="phone" name="phone" placeholder="Enter your phone number" class="box" required>
        <span>Appointment date : </span>
        <input type="datetime-local" name="date" class="box" required>
        <input type="submit" value="book appointment" name="submit" class="link-btn">
    </form>
</section>

<!-- footer -->
<div class="box-container container">

    <div class="box">
        <i class="fas fa-phone"></i>
        <h3>Phone number</h3>
        <p>+234-567-891</p>
        <p>+456-789-123</p>
    </div>
    <div class="box">
        <i class="fas fa-map-marker-alt"></i>
        <h3>Address</h3>
        <p>New Damietta, Damietta, Egypt</p>
    </div>
    <div class="box">
        <i class="fas fa-clock"></i>
        <h3>Open</h3>
        <p>10 am to 5 pm</p>
    </div>
    <div class="box">
        <i class="fas fa-envelope"></i>
        <h3>Email</h3>
        <p>eversmile@gmail.com</p>
        <p>eversmileclinic@gmail.com</p>
    </div>

</div>

<!-- js file link -->
<script src="js/script.js"></script>
</body>
</html>