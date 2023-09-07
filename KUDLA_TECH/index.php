<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/index.css">
    <title>Login | Kudla Tech</title>
</head>
<body>
    <header>
        <div class="logo">
            <img src="img/KudlaTech_Logo.png" alt="Logo" width="80px" height="80px">
        </div>
        <nav>
            <ul class="nav-links">
                
                <li><a href="signup.php">Signup</a></li>
             
            </ul>
        </nav>
    </header>

    <div class="form-container">
        <h1 style="text-align: center; padding-bottom: 50px;">Login</h1>
        <form action="" method="post">
            <input type="text" id="uname" name="uname" placeholder="Username" required>
            <input type="password" id="password" name="password" placeholder="Password" required>
            
            <input type="submit" name="submit"  value="submit"/>
        </form>
    </div>
    

    <footer>
        <ul class="footer-icons">
            <li><a href="index.php"><img src="img/facebook.png" alt="Icon 1"></a></li>
            <li><a href="index.php"><img src="img/instagram.png" alt="Icon 2"></a></li>
            <li><a href="index.php"><img src="img/linkedin.png" alt="Icon 3"></a></li>
        </ul>
    </footer>
</body>
</html>


<?php 
if(isset($_POST['submit'])){
    include("config.php");

    $uname=$_POST["uname"];
    $password=$_POST["password"];



    $sql = "SELECT * FROM user WHERE uname='$uname'";
    $result = mysqli_query($conn, $sql);


    if (mysqli_num_rows($result) == 1){

        $s = "SELECT * FROM user WHERE uname='$uname' AND password='$password'";
        $res = mysqli_query($conn, $s);
    
        if($r=mysqli_fetch_array($res)) {
            session_start();
            $_SESSION['uid']=$r['uid'];
            ?>
            <script>
            window.location='home.php';
            </script>
            <?php
        }
        else{
        ?>
        <script>
        alert("Invalid username or password.");
        window.location='index.php';
        </script>
        <?php
                                        
        }

    }
    else{
        ?>
        <script>
               alert("Username does not exist..! Please signup");
               window.location='signup.php';
           </script>
        <?php
        
    }
}

  
?>