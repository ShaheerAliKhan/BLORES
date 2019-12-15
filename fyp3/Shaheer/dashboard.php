<?php 

include 'config.php';

if(isset($_POST['submit']))
{
$added_on = date('Y/m/d h:i');
$sql = "INSERT INTO `blood`(`dName`,`bagNumber`,`num`,`added_on`,`age`,`gender`,`bloodGroup`,`hiv`,`maleria`,`typhoid`) 
VALUES ('".$_POST['dName']."','".$_POST['bagNumber']."','".$_POST['num']."','$added_on','".$_POST['age']."','".$_POST['gender']."','".$_POST['bloodGroup']."','".$_POST['hiv']."','".$_POST['maleria']."','".$_POST['typhoid']."')";

$query = mysqli_query($con,$sql);

}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Admin Panel</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/admincss.css">
</head>
<body>

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
	<div class="container-fluid main">
		<div class="row">
			<div class="col-sm-12 col-md-4 ">
			</div>
				<div class="col-sm-12 col-md-4 form">
					<div class="dbform">
						<h1 class="heading">Donor's Information</h1>
						<form class="donorForm" method="POST">
							<input class="dNameInput df" type="name" name="dName" placeholder="Enter Donor's Name">
							<input class="dFNameInput df" type="name" name="bagNumber" placeholder="Enter Bag Number">
							<input class="num df" type="" name="num" placeholder="Enter Donor's Contact Number">
							<!-- <input class="date df" type="" name="date" placeholder="Enter Submission Date, FORMAT: 12122019"> -->
							<input class="age df" type="age" name="age" placeholder="Enter Donor's Age">
							<select class="gender df" type="gender" name="gender" placeholder="Enter Donor's Gender">
								<option value="male">Male</option>
								<option value="female">Female</option>
							</select>
							<label>Enter Blood Group</label>
							<select class="bloodGroup df" type="name" name="bloodGroup"> 
										<option value="A+">A+</option>
										<option value="A-">A-</option>
										<option value="B+">B+</option>
										<option value="B-">B-</option>
										<option value="O+">O+</option>
										<option value="O-">O-</option>
										<option value="AB+">AB+</option>
										<option value="AB-">AB-</option>
							</select>

									<label>HIV Aids</label>
									<select name="hiv" class="df">
										<option value="no">No</option>
										<option value="yes">Yes</option>
									</select>

									<label>Maleria</label>
									<select name="maleria" class="df">
										<option value="no">No</option>
										<option value="yes">Yes</option>
									</select>

									<label>Typhoid</label>
									<select name="typhoid" class="df">
										<option value="no">No</option>
										<option value="yes">Yes</option>
									</select>
							</select>

							<div class="buttons">
								<button class="submitBtn" name="submit">Submit</button>
								<button class="submitBtn" name="">Cancel</button>
							</div>
						</form>
						
					</div>
					
				</div>
			<div class="col-sm-12 col-md-4">
				
			</div>
		</div>		
		
	</div>

	<!-- JS STARTS -->

	<script src="js/jquery.js"></script>
	<script src="js/bootstrap.js"></script>

	<!-- JS ENDS -->
</body>
</html>

