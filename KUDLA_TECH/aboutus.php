<?php 
session_start();
if(!isset($_SESSION['uid'])){
    header("location:index.php");
    exit;
}
?>
<?php
include("config.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/aboutus.css">
    <title>AboutUs | Kudla Tech</title>
</head>
<body>
    <header>
        <div class="logo">
            <img src="img/KudlaTech_Logo.png" alt="Logo" width="80px" height="80px">
        </div>
        <nav>
            <ul class="nav-links">
                
                <li><a href="home.php">Home</a></li>
                <li><a href="logout.php">Logout</a></li>
             
            </ul>
        </nav>
    </header>

   
    <div class="about-container">
        <div class="about-image">
            <img src="img/about1.jpg" alt="About Us Image">
        </div>
        <div class="about-content">
            <h1>AboutUs</h1>
            <p>Kudla Tech is a widely recognized online learning platform known for its extensive catalog of courses on diverse subjects. With a global community of instructors,
                 Kudla Tech  offers self-paced learning opportunities, making it accessible to a broad audience. 
                 The platform is known for its affordability and often features sales and promotions. Upon course completion, students receive certificates, and the platform's reach extends worldwide, fostering a diverse and inclusive learning environment.</p>
        </div>
    </div>

  
 
    

</body>
</html>
