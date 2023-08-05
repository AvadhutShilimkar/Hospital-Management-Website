<?php 
session_start();

	include("connection.php");
	include("functions.php");

	$user_data = check_login($con);

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hospital Management System</title>

    <!-- custom css file link  -->
    <link rel="stylesheet" href="style.css">

</head>
<body>
    
<!-- header section starts  -->

<header class="header">
    
    <a href="" class="logo"></i> medcare </a>
	
    <nav class="navbar">
        <a href="#home">home</a>
        <a href="#services">services</a>
        <a href="#about">about</a>
        <a href="#doctors">doctors</a>
        <a href="book.html">book</a>
        <a href="fetch/appointments.php">Appointments</a>
        <a href="contact.html">contact us</a>
        <a href="logout.php">Logout</a>
    </nav>
</header>
<!-- header section ends -->

<!-- home section starts  -->
<section class="home" id="home">

    <div class="image">
        <img src="image/home-img.svg" alt="">
    </div>

    <div class="content">
        <h3>stay safe, stay healthy</h3>
        <p>A family of hospitals for your.<br>Advanced Medicine, Trusted Care.</p>
    </div>

</section>
<!-- home section ends -->

<!-- icons section starts  -->
<section class="icons-container">

    <div class="icons">
        <h3>140+</h3>
        <p>doctors at work</p>
    </div>

    <div class="icons">
        <h3>1040+</h3>
        <p>satisfied patients</p>
    </div>

    <div class="icons">
        <h3>500+</h3>
        <p>bed facility</p>
    </div>

    <div class="icons">
        <h3>80+</h3>
        <p>available hospitals</p>
    </div>

</section>
<!-- icons section ends -->

<!-- services section starts  -->
<section class="services" id="services">

    <h1 class="heading"> our <span>services</span> </h1>

    <div class="box-container">

        <div class="box">
            <h3>free checkups</h3>
            <p>We provide weekly/monthly free checkups for our patients.</p>
        </div>

        <div class="box">
            <h3>24/7 ambulance</h3>
            <p>We provide 24/7 free ambulance facility.You can contact us anytime.</p>
        </div>

        <div class="box">
            <h3>expert doctors</h3>
            <p>We have doctors with all experties.</p>
        </div>

        <div class="box">
            <h3>medicines</h3>
            <p>W'll provide you the medicines also with checkups.</p>
        </div>

        <div class="box">
            <h3>bed facility</h3>
            <p>We have a good bed facilities and hospitalities.</p>
        </div>

        <div class="box">
            <h3>total care</h3>
            <p>We take total care of our patients.We have a good staff for your service.</p>
        </div>

    </div>
</section>
<!-- services section ends -->

<!-- about section starts  -->
<section class="about" id="about">

    <h1 class="heading"> <span>about</span> us </h1>

    <div class="row">

        <div class="image">
            <img src="image/about-img.svg" alt="">
        </div>

        <div class="content">
            <h3>we take care of your healthy life</h3>
            <p>Patients are registered at the reception and are seen on first come, first serve basis, however out of turn consultation may be provided in case of emergency and senior citizen. Patients have the right to consult any doctor. In OPD, clinical consultation is provided to patients which includes history taking, clinical examination, diagnosis and providing prescription to patients besides advising laboratory tests in some cases. OPD has a waiting hall with chairs, a TV, public utilities like drinking water and toilets. Sub waiting areas are available in front of individual consultation rooms. Wheel chairs, trolleys and attendants are there to help very sick patients.</p>
        </div>

    </div>

</section>
<!-- about section ends -->

<!-- doctors section starts  -->
<section class="doctors" id="doctors">

    <h1 class="heading"> our <span>doctors</span> </h1>

    <div class="box-container">

        <div class="box">
            <img src="image/doc-1.jpg" alt="">
            <h3>john deo</h3>
            <span>expert doctor</span>
        </div>

        <div class="box">
            <img src="image/doc-2.jpg" alt="">
            <h3>john deo</h3>
            <span>expert doctor</span>
        </div>

        <div class="box">
            <img src="image/doc-3.jpg" alt="">
            <h3>john deo</h3>
            <span>expert doctor</span>
        </div>

        <div class="box">
            <img src="image/doc-4.jpg" alt="">
            <h3>john deo</h3>
            <span>expert doctor</span>
        </div>

        <div class="box">
            <img src="image/doc-5.jpg" alt="">
            <h3>john deo</h3>
            <span>expert doctor</span>
        </div>

        <div class="box">
            <img src="image/doc-6.jpg" alt="">
            <h3>john deo</h3>
            <span>expert doctor</span>
        </div>

    </div>

</section>
<!-- doctors section ends -->

<!-- footer section starts  -->

<section class="footer">
    <div> created by web designer | © all rights reserved </div>
</section>

<!-- footer section ends -->


<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>





<!-- <!DOCTYPE html>
<html>
<head>
	<title>My website</title>
</head>
<body>

	<a href="logout.php">Logout</a>
	<h1>This is the index page</h1>

	<br>
	Hello, <?php echo $user_data['user_name']; ?>

</body>
</html> -->