<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Dentist Website</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

   <!-- bootstrap cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/4.6.1/css/bootstrap.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">
   <link rel="icon" href="images/favicon.png"/>

</head>
<body>

<!-- header section starts  -->

<header class="header fixed-top">

   <div class="container">

      <div class="row align-items-center justify-content-between">

         <a href="#home" class="logo">dental<span>Clinic.</span></a>

         <nav class="nav">
            <a href="#home">home</a>
            <a href="#about">about</a>
            <a href="#services">services</a>
            <a href="#reviews">reviews</a>
            <a href="#contact">contact</a>
         </nav>

         <a href="#contact" class="link-btn">make appointment</a>

         <div id="menu-btn" class="fas fa-bars"></div>

      </div>

   </div>

</header>

<!-- header section ends -->

<!-- home section starts  -->

<section class="home" id="home">

   <div class="container">

      <div class="row min-vh-100 align-items-center">
         <div class="content text-center text-md-left">
            <h3>Allow us to make your smile brighter.</h3>
            <p>DentalClinic Can Help You Get the Smile You've Always Wanted. We offer cosmetic dentistry, root canal therapy, cavity inspections, and more.</p>
            <a href="#contact" class="link-btn">make appointment</a>
         </div>
      </div>

   </div>

</section>

<!-- home section ends -->

<!-- about section starts  -->

<section class="about" id="about">

   <div class="container">

      <div class="row align-items-center">

         <div class="col-md-6 image">
            <img src="images/about-img.jpg" class="w-100 mb-5 mb-md-0" alt="">
         </div>

         <div class="col-md-6 content">
            <span>about us</span>
            <h3>Genuine Family Healthcare</h3>
            <p>DentalClinic helps you achieve the quintessentially oriented smile you have always craved. Our product gets the job done without making you go through any hassle or discomfort.</p>
            <a href="#contact" class="link-btn">make appointment</a>
         </div>

      </div>

   </div>

</section>

<!-- about section ends -->

<!-- services section starts  -->

<section class="services" id="services">

   <h1 class="heading">our services</h1>

   <div class="box-container container">

      <div class="box">
         <img src="images/icon-1.svg" alt="">
         <h3>Alignment specialist</h3>
      </div>

      <div class="box">
         <img src="images/icon-2.svg" alt="">
         <h3>Cosmetic dentistry</h3>
      </div>

      <div class="box">
         <img src="images/icon-3.svg" alt="">
         <h3>Oral hygiene experts</h3>
      </div>

      <div class="box">
         <img src="images/icon-4.svg" alt="">
         <h3>Root canal specialist</h3>
      </div>

      <div class="box">
         <img src="images/icon-5.svg" alt="">
         <h3>Live dental advisory</h3>
      </div>

      <div class="box">
         <img src="images/icon-6.svg" alt="">
         <h3>Cavity inspection</h3>
      </div>

   </div>

</section>

<!-- services section ends -->

<!-- process section starts  -->

<section class="process">

   <h1 class="heading">work process</h1>

   <div class="box-container container">

      <div class="box">
         <img src="images/process-1.png" alt="">
         <h3>Cosmetic Dentistry</h3>
         <p>Cosmetic dentistry includes teeth whitening, dental implants, dental crowns, and teeth shaping.</p>
      </div>

      <div class="box">
         <img src="images/process-2.png" alt="">
         <h3>Pediatric Dentistry</h3>
         <p>Padiatric dentistry include stainless steel crowns, tooth-colored fillings, dental cleanings, and cavities.</p>
      </div>

      <div class="box">
         <img src="images/process-3.png" alt="">
         <h3>Dental Implants</h3>
         <p>Dental implants are artificial tooth roots that are surgically placed into the jawbone.</p>
      </div>

   </div>

</section>

<!-- process section ends -->

<!-- reviews section starts  -->

<section class="reviews" id="reviews">

   <h1 class="heading"> Our Clients </h1>

   <div class="box-container container">

      <div class="box">
         <img src="images/pic-1.png" alt="">
         <p> I couldn’t believe that it was so afordable compared to the alternatives available in the market.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Alan Harris</h3>
         <span>Manager</span>
      </div>

      <div class="box">
         <img src="images/pic-2.png" alt="">
         <p>Earlier I used to hide my smile and now I can’t stop smiling. Flexalign aligners changed my life &amp; smile completely.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Sophie Johnson</h3>
         <span>Assistant Manager</span>
      </div>

      <div class="box">
         <img src="images/pic-3.png" alt="">
         <p>Great experience with DentalClinic aligners. I would recommend this place for they have the best quality service</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>James Williams</h3>
         <span>CEO</span>
      </div>

   </div>

</section>

<!-- reviews section ends -->

<!-- contact section starts  -->

<section class="contact" id="contact">

   <h1 class="heading">make appointment</h1>

   <form action="" method="post">
      <!--<?php
         if(isset($message)){
            foreach($message as $message){
               echo '<p class="message">'.$message.'</p>';
            }
         }
      ?>-->
      <span>Enter your name :</span>
      <input type="text" name="name" placeholder="Enter your name" class="box" required>
      <span>Enter your email :</span>
      <input type="email" name="email" placeholder="Enter your email" class="box" required>
      <span>Enter your number :</span>
      <input type="number" name="number" placeholder="Enter your number" class="box" required>
      <span>Enter appointment date :</span>
      <input type="datetime-local" name="date" class="box" required>
      <input type="submit"  name="submit" class="link-btn">
   </form>

</section>

<!-- contact section ends -->

<!-- footer section starts  -->

<section class="footer">

   <div class="box-container container">

      <div class="box">
         <i class="fas fa-phone"></i>
         <h3>phone number</h3>
         <p>+91-7234997796</p>

      </div>

      <div class="box">
         <i class="fas fa-map-marker-alt"></i>
         <h3>our address</h3>
         <p>Lucknow, India - 206021</p>
      </div>

      <div class="box">
         <i class="fas fa-clock"></i>
         <h3>opening hours</h3>
         <p>10:00am to 07:00pm</p>
      </div>

      <div class="box">
         <i class="fas fa-envelope"></i>
         <h3>email address</h3>
         <p>admin@gmail.com</p>

      </div>

   </div>

   <div class="credit"> &copy;2023 <?php echo date('Y'); ?> <span>DentalClinic</span> All Reserved Rights </div>

</section>

<!-- footer section ends -->










<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>
<?php

$conn = mysqli_connect('localhost','root','','contact_db') or die('connection failed');

 //Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

if(isset($_POST['submit'])){

   $name = mysqli_real_escape_string($conn, $_POST['name']);
   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $number = $_POST['number'];
   $date = $_POST['date'];

   $insert = mysqli_query($conn, "INSERT INTO `contact_form`(name, email, number, date) VALUES('$name','$email','$number','$date')") or die('query failed');


//Load Composer's autoloader
require 'PHPMailer\Exception.php';
require 'PHPMailer\PHPMailer.php';
require 'PHPMailer\SMTP.php';

//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
    //Server settings
    
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'raodhaval89@gmail.com';                     //SMTP username
    $mail->Password   = 'ahzhlycezgyibrfp';                               //SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
    $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom('raodhaval89@gmail.com', 'DentalClinic');
    $mail->addAddress('dhavalrao17@gmail.com', 'Hamari Website');     //Add a recipient
   
    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'test DentalClinic';
    $mail->Body    = "Sender Name - $name <br> Sender Email - $email <br> Sender Number - $number <br> Appointment Date - $date ";

    $mail->send();
    echo '<script>alert("Appointment has been sent.")</script>';
   }
   catch (Exception $e) {
   echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
   }

}

?>
