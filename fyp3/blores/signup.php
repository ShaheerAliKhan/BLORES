<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign Up | BLORES</title>
    <link rel="icon" href="images/brand-logo.png" type="image" sizes="16x16">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="container-fluid main">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="brand-logo" href="index.html"><img src="images/brand-logo.png" alt=""></a>
            <div class="heading">
                <h1>BLORES</h1>
            </div>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
              <div class="navbar-nav">
                <a class="nav-item nav-link" href="#">Home</a>
                <a class="nav-item nav-link" href="#">About Us</a>
                <a class="nav-item nav-link" href="#">Contact</a>
              </div>
            </div>
          </nav>

        <div class="container colomns">
            <div class="row">
                <div class="col-sm-12 col-md-4 col-lg-4">

                </div>

                <div class="col-sm-12 col-md-4 col-lg-4">
                    <div class="midColomn">
                            <p class="midHeading">
                                    Welcome to BLORES!<br>Please Sign Up To Proceed
                            </p>
                    </div>

                    <div class="form">
                        <form method="post">
                            <div class="inputs">
                                <input name="name" class="username commonInput" type="text" placeholder="Username">
                                <input name="email" class="username commonInput" type="text" placeholder="Email">
                                <input name="password" class="password commonInput" type="password" placeholder="Password">
                                <input name="repeatPassword" class="password commonInput" type="password" placeholder="Re-enter Password">
                                <input name="contactNumber" class="password commonInput" type="text" placeholder="Contact Number">
                                <input name="cnic" class="password commonInput" type="text" placeholder="National Identity Card Number">
                            </div>
                            <div class="buttons">
                                <button type="submit" name="submit" class="loginButton">SIGN UP TO CONTINUE</button>
                                <p>Already have an account? <a href="index.php">Sign In!</a></p>
                            </div>
                        </form>
                    </div>
                    
                </div>

                <div class="col-sm-12 col-md-4 col-lg-4">

                </div>


            </div>
        </div>





    </div>





    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.js"></script>
</body>
</html>


<?php 

$con = mysqli_connect("localhost","root","","blood_bank") or die("error in connecting");


if(isset($_POST['submit']))
{

$sql = "INSERT INTO `users`(`name`, `password`, `contactNumber`,`cnic`,`email`) VALUES ('".$_POST['name']."','".$_POST['password']."','".$_POST['contactNumber']."','".$_POST['cnic']."','".$_POST['email']."')";

$query = mysqli_query($con,$sql);
$_SESSION['email']=$_POST['email'];
$_SESSION['cnic']=$_POST['cnic'];
header('location:dashboard.php');
}
?>