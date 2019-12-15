<?php
    session_start();    
?>
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
                                    Welcome to BLORES!<br>Report
                            </p>

                            <div class='report'>
                            
                                <pre id='report'>
                                   
                                </pre>
                            </div>
                    </div>
                </div>

                <div class="col-sm-12 col-md-4 col-lg-4">

                </div>


            </div>
        </div>





    </div>





    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.js"></script>
    <script>
        var cnic = "<?php echo $_SESSION['cnic'];?>";

        fetch(`http://localhost/fyp2/Owais/reportAPI.php?cnic=${cnic}`)
            .then((res) =>
                res.json()
            )
            .then((resp) => {
                // console.log(resp);
            a= resp.map((item) => {
			    // console.log(item);

                   $('#report').append(  
                    `
                    <p><b>Date : ${item.added_on}</b></p>
                    <p><b>HIV : ${item.hiv}</b></p>
                    <p><b>MALARIA : ${item.maleria}</b></p>
                    <p><b>TYPHOID : ${item.typhoid}</b></p>
                    `
                    );
                
            })
            })
    
    
    
    </script>
</body>
</html>
                        
