<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>SOM Blood Bank | Admin Login</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/bb-style.css">
</head>
<body>
    
<div class="container-fluid main">
    <div class="spacer"></div>
    <h3 style="text-align: center">Welcome To SOM Blood Bank Admin Panel</h3>

   <div class="row">
    <div class="col-sm-12 col-md-4 col-lg-4">

    </div>

    <div class="col-sm-12 col-md-4 col-lg-4">
        <div class="spacer"></div>


        <form class="loginForm" action="Controllers/loginController.php" method="POST">
            <div class="spacer"></div>
            <p style="text-align: center">Please Login To Proceed</p>
            <input class="commonInput" type="text" name="username" placeholder="Enter ADMIN Username">
            <div class="spacer2"></div>
            <input class="commonInput" type="password" name="password" placeholder="Enter Password">
            <div class="spacer1"></div>
            <div class="buttons">
                <button name="submit" class="btn loginButton">Login</button>
                <button class="btn loginButton">Back to website</button>
            </div>
        </form>


    </div>

    <div class="col-sm-12 col-md-4 col-lg-4">

    </div>
   </div>
</div>




    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.js"></script>
</body>
</html>