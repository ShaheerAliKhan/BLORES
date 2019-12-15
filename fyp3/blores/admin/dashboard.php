<?php
    include '../config.php';
?> 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Welcome To BLORES</title>
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
                <a class="nav-item nav-link" href="#">Reservations</a>
                <a class="nav-item nav-link" href="#">Users</a>
                <a class="nav-item nav-link" href="#">BloodBanks</a>
                <a class="nav-item nav-link" href="../logout.php">Logout</a>
              </div>
            </div>
          </nav>

        <div class="container-fluid colomns">
            <div class="row">
                <div class="col-sm-12 col-md-4 col-lg-4">

                </div>

             <!-- DIV BANA K CONTENT YAHAN DALNA -->
             <div class="col-sm-12 col-md-4 col-lg-4">
                    <div class="midColomn">
                            <p class="midHeading">
                                    Add Blood Bank
                            </p>
                    </div>

                    <div class="form">
                        <form method="POST">
                            <div class="inputs">
                                <input name="url" class="username commonInput" type="text" placeholder="URL of API ...">
                                <input name="email" class="username commonInput" type="text" placeholder="Department Email ...">
                                <input name="branchCode" class="username commonInput" type="text" placeholder="Branch Code ...">
                                <input name="contact" class="username commonInput" type="text" placeholder="Contact Number ...">
                                <input name="address" class="username commonInput" type="text" placeholder="Complete Address ...">
                            </div>
                            <div class="buttons">
                                <button name="submit" class="loginButton">ADD</button>
                           </div>
                        </form>
                    </div>
                    
                </div>
             </div>

                <div class="col-sm-12 col-md-4 col-lg-4">

                </div>


            </div>
        </div>





    </div>
    <script src="../js/jquery.js"></script>
    <script src="../js/bootstrap.js"></script>
</body>
</html>


<?php
    
    if (isset($_POST['submit'])) {
        $query = "INSERT into bloodbanks (`url`,`email`,`branchCode`,`contact`,`address`) VALUES ('".$_POST['url']."','".$_POST['email']."','".$_POST['branchCode']."','".$_POST['contact']."','".$_POST['address']."')";

        $sql = mysqli_query($con,$query);

        echo "<script>alert('Blood Bank added sucessfully')</script>";
    }
?> 