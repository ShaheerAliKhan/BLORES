<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Welcome To BLORES</title>
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
                <a class="nav-item nav-link" href="emergencyNumbers.html">Emergency Numbers</a>
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
                                    Welcome to BLORES!<br>Please Login To Proceed
                            </p>
                    </div>

                    <div class="form">
                        <form method="POST">
                            <div class="inputs">
                                <input name="email" class="username commonInput" type="text" placeholder="Email">
                                <input name="password" class="password commonInput" type="password" placeholder="Password">
                            </div>
                            <div class="buttons">
                                <button name="submit" class="loginButton">LOGIN TO CONTINUE</button>
                                <p>Don't have account? <a href="signup.php">Sign Up!</a></p>
<!--                                 <p>To register Blood Bank  <a href="bb-registration.html">Click Here</a></p>
 -->                            </div>
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
    session_start();
    require 'config.php';
    $_SESSION['email']=$email;
    if(isset($_POST['submit'])){
            extract($_POST);
          
      $query="SELECT * FROM users where email='".$email."' and password='".$password."'  " or die(mysql_error());

			$execute=mysqli_query($con,$query);
      $row=mysqli_fetch_array($execute);
   
             if ($row == true) {
                $_SESSION['email']=$email;
                $_SESSION['cnic']=$row['cnic'];
                // echo $_SESSION['cnic'];
                // var_dump($row);
                 header('Location:dashboard.php');
               }
                
                else {
                    echo "<script>alert('Invalid Username or pasword')</script>";
                }
            }  
   
?>