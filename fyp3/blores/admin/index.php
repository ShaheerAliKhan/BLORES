<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ADMIN</title>
    <link rel="icon" href="../images/brand-logo.png" type="image" sizes="16x16">
    <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    <div class="container-fluid main">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="brand-logo" href="index.html"><img src="../images/brand-logo.png" alt=""></a>
            <div class="heading">
                <h1>BLORES</h1>
            </div>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
              <div class="navbar-nav">
                <!-- NAV ITEMS -->
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
                                <input name="username" class="username commonInput" type="text" placeholder="Admin Username">
                                <input name="password" class="password commonInput" type="password" placeholder="Admin Password">
                            </div>
                            <div class="buttons">
                                <button name="submit" class="loginButton">LOGIN TO CONTINUE</button>
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
    session_start();
    require '../config.php';
    if(isset($_POST['submit'])){
            extract($_POST);
          
      $query="SELECT * FROM admin where username='".$username."' and password='".$password."'  " or die(mysql_error());

      $execute=mysqli_query($con,$query);
      $row=mysqli_fetch_array($execute);
   
             if ($row == true) {
                 header('Location:dashboard.php');
               }
                
                else {
                    echo "<script>alert('Invalid Username or pasword')</script>";
                }
            }  
   
?>