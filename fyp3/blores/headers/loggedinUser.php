<?php
    require 'config.php';
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <link rel="icon" href="images/brand-logo.png" type="image" sizes="16x16">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="container-fluid main">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="brand-logo" href="dashboard.php"><img src="images/brand-logo.png" alt=""></a>
            <div class="heading">
                <h1>BLORES</h1>
            </div>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
              <div class="navbar-nav">
                <a class="nav-item nav-link" href="dashboard.php">Home</a>
                <a class="nav-item nav-link" href="about.php">About Us</a>
                <a class="nav-item nav-link" href="#">Contact</a>
                <a class="nav-item nav-link" href="#">Settings</a>
                <a class="nav-item nav-link" href="emergencyNumbers.html">Emergency Numbers</a>
                <a class="nav-item nav-link" href="previousReservation.php">Previous Reservations</a>
                <a class="nav-item nav-link" href="timeCounter.php">Time Counter</a>
                <a class="nav-item nav-link" href="logout.php">Logout</a>
              </div>
            </div>
          </nav>