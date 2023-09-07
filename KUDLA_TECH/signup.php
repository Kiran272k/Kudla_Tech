
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/index.css">

    <title>Signup | Kudla Tech</title>
</head>
<body>
    <header>
        <div class="logo">
            <img src="img/KudlaTech_Logo.png" alt="Logo" width="80px" height="80px">
        </div>
        <nav>
            <ul class="nav-links">
                <li><a href="index.php">Login</a></li>
            </ul>
        </nav>
    </header>

    <div class="form-container">
        <h1 style="text-align: center; padding-bottom: 50px;">Signup</h1>
        <form action="" method="POST" onsubmit="return validateEmail();">
            <input type="text" id="uname" name="uname" placeholder="Username" required>

            <input type="text" id="contact" name="contact" placeholder="Contact" required>
            <span id="errMobile" style="color: red;"></span>

            <input type="email" id="email" name="email" placeholder="Email" required>
            <span id="errEmail" style="color: red;"></span>

            <input type="password" id="password" name="password" placeholder="Password"  onkeyup='check();' required>
            <input type="password" id="cpassword" name="cpassword" placeholder="Confirm Password" onkeyup='check();' required>
            <span id='message'></span><br/>
        
            <input type="submit" name="submit" onclick="validateEmail()" id="myBtn" value="submit" disabled=""/>
        </form>
    </div>
    

    <footer>
        <ul class="footer-icons">
            <li><a href="signup.php"><img src="img/facebook.png" alt="Icon 1"></a></li>
            <li><a href="signup.php"><img src="img/instagram.png" alt="Icon 2"></a></li>
            <li><a href="signup.php"><img src="img/linkedin.png" alt="Icon 3"></a></li>
        </ul>
    </footer>

</body>
<script src="js/email.js"></script>
<script type="text/javascript">

    var check = function() {
  if (document.getElementById('password').value ==
    document.getElementById('cpassword').value) {
    document.getElementById('message').style.color = 'green';
    document.getElementById('message').innerHTML = 'Password matching';
    document.getElementById("myBtn").disabled = false;

  } else {
    document.getElementById('message').style.color = 'red';
    document.getElementById('message').innerHTML = 'Password not matching';
    document.getElementById("myBtn").disabled = true;
  }
}



</script>
</html>





<?php
    if(isset($_POST['submit'])){
        include("config.php");

        $uname=$_POST["uname"];
        $contact=$_POST["contact"];
        $email=$_POST["email"];
        $password=$_POST["password"];
        $cpassword=$_POST["cpassword"];


        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            exit; 
        }

        if (!ctype_digit($contact)) {
            exit; 
        }

        if (strlen($password) < 4) {     
            exit; 
        }

    $exist1="SELECT * FROM `user` WHERE uname='$uname'";
    $result1=mysqli_query($conn,$exist1);
    $num1=mysqli_num_rows($result1);


    $exist2="SELECT * FROM `user` WHERE email='$email'";
    $result2=mysqli_query($conn,$exist2);
    $num2=mysqli_num_rows($result2);

    $exist3="SELECT * FROM `user` WHERE uname='$uname' and  email='$email'";
    $result3=mysqli_query($conn,$exist3);
    $num3=mysqli_num_rows($result3);

    if($num3>0){
        ?>
        <script>
               alert("Username and Email  already exists..!");
               window.location='signup.php';
           </script>
        <?php
    }

     elseif($num1>0){
         ?>
         <script>
                alert("Username already exists..!");
                window.location='signup.php';
            </script>
         <?php
     }

     elseif($num2>0){
        ?>
        <script>
               alert("Email already exists..!");
               window.location='signup.php';
           </script>
        <?php
    }

   
     else{

        $sql="INSERT INTO `user`(`uname`, `contact`, `email`, `password`, `cpassword`) VALUES ('$uname','$contact','$email','$password','$cpassword')";
        $result=mysqli_query($conn,$sql);

        if($result){
            ?>
            <script>
                alert("Your account is created and you can login....!");
                    window.location='index.php';
                </script>
                <?php 
        }else{
            ?>
             <script>
                 alert("Error....!");
                     window.location='signup.php';
                 </script>
            <?php
         }
        
     }

}
    
?>