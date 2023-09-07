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
    <link rel="stylesheet" href="css/home.css">
    <title>Home | Kudla Tech</title>
</head>
<body>
    <header>
        <div class="logo">
            <img src="img/KudlaTech_Logo.png" alt="Logo" width="80px" height="80px">
        </div>
        <nav>
            <ul class="nav-links">
                
                <li><a href="home.php">Home</a></li>
                <li><a href="aboutus.php">AboutUs</a></li>
                <li><a href="logout.php">Logout</a></li>
             
            </ul>
        </nav>
    </header>

   
    

  
    <div class="bg-image"></div>
    <div class="content">
        <h1>Welcome to Kudla Tech</h1>
        <p>Our online courses are designed to fit in your industry supporting all-round with latest technologies.</p>
        <a href="aboutus.php">Learn More</a>
    </div>
    
</body>
</html>
