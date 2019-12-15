<?php 
include"config.php";

if(isset($_GET['submit']))
{
	
	$num = $_GET['num'];

	$sql = "DELETE From blood where num = '$num' ";

		$query = mysqli_query($con,$sql);

	
		//$count = mysqli_num_rows($query);
		// echo $count; exit();
		if($query)
		{
			echo "<script>alert('Done')
			'</script>";
			header('location:dataFetch.php');
		}
		else if (!$query) {
			echo "<script>alert('Blood Not Found')</script>";
		}
		else{
			echo "<script>alert('Error')</script>";
		}
		exit();

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Deleting The Records</title>
    <link rel="stylesheet" type="text/css" href="bootstrap/bootstrap1.css">
	  <link rel="stylesheet" type="text/css" href="css/admincss.css">
</head>
<body>

<div class="container-fluid delete">
<nav class="navbar navbar-expand-lg navbar-light bg-light">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
              <div class="navbar-nav">
                <a class="nav-item nav-link" href="dataFetch.php">Records</a>
                <a class="nav-item nav-link" href="logout.php">Logout</a>
              </div>
            </div>
        </nav>
    <div class="row">
        <div class="col-sm-12 col-md-4">

        </div>

        <div class="col-sm-12 col-md-4">
        <form method="GET">
            <div class="deleteForm">
                <input class="df" type="text" name="num" placeholder="Enter Contact Number">
                <button name="submit" class="submitBtn">Submit</button>
            </div>
            
        </form>

        </div>

        <div class="col-sm-12 col-md-4">

        </div>
    </div>
</div>

<script src="js/jquery.js"></script>
<script src="js/bootstrap.js"></script>
</body>
</html>