<?php 

include 'config.php';

if(isset($_POST['submit']))
{
$added_on = date('Y/m/d h:i');
$sql = "INSERT INTO `blood`(`dName`,`bagNumber`,`num`,`added_on`,`age`,`gender`,`bloodGroup`,`hiv`,`maleria`,`typhoid`) 
VALUES ('".$_POST['dName']."','".$_POST['bagNumber']."','".$_POST['num']."','$added_on','".$_POST['age']."','".$_POST['gender']."','".$_POST['bloodGroup']."','".$_POST['hiv']."','".$_POST['maleria']."','".$_POST['typhoid']."')";

$query = mysqli_query($con,$sql);
	
	echo "<script>
			alert('Blood added')
			</script>";
 ;
	

}

else {
	echo "<script>
			alert('Not added')
			</script>";
}
?>


<!DOCTYPE html>
<html>
<head>
	<title>Add Blood</title>
	<script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="bootstrap/bootstrap1.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	<nav class="navbar-expand-lg navbar-light bg-light sticky-top">
			<button class="navbar-toggler" data-toggle="collapse" data-target="#collapse_target">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="collapse_target">
			<ul class="navbar-nav">
			<a class="navbar-brand"><img src="img/logo.png"></a>
			<span class="navbar-text">OSM Blood Bank</span>
				<li class="nav-item">
					<a class="nav-link" href="dataFetch.php">Records</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="logout.php">Logout</a>
				</li>
				<!-- <li class="nav-item">
					<a class="nav-link" href="#">Contact Us</a>
				</li> -->
			</ul>
		</div>
		</nav>
		<div class="AddBloodSection">
			<h1>Add Blood</h1>
					<div class="AddBloodTextSect">
							<form method="POST" >
								  <div class="Add-Name">
								    <label>Name</label>
								    <input type="text" name="dName" class="form-control">
								  </div>
								  <div class="Add-FName">
								    <label>Bag Number</label>
								    <input type="text" name="bagNumber" class="form-control">
								  </div>
								  <div class="Add-Number">
								    <label>Contact No.</label>
								    <input type="text" name="num" class="form-control">
								  </div>
								  <!-- <div class="Add-Date">
								    <label>Donated Date</label>
								    <input type="text" name="" class="form-control">
								  </div> -->
								  <div class="Add-Age">
								    <label>Age</label>
								    <input type="text" name="age" class="form-control">
								  </div>
								  <div class="Add-Gender">
								  	<label>Gender</label>
								  	<select name="gender" class="form-control">
										<option value="male">Male</option>
										<option value="female">Female</option>
									</select>
								  </div>
								  <div class="Add-BGroup">
								    <label>Blood Group</label>
								    <!-- <input type="text" name="bloodGroup" class="form-control"> -->
									<select name="bloodGroup" class="form-control" placeholder="Enter Blood Group">
										<option value="A+">A+</option>
										<option value="A-">A-</option>
										<option value="B+">B+</option>
										<option value="B-">B-</option>
										<option value="O+">O+</option>
										<option value="O-">O-</option>
										<option value="AB+">AB+</option>
										<option value="AB-">AB-</option>
									</select>
								  </div>

								  <div class="Add-BGroup">
								    <label>User Report</label>
								    <!-- <input type="text" name="bloodGroup" class="form-control"> -->
								    <label>HIV Aids</label>
									<select name="hiv" class="form-control">
										<option value="no">No</option>
										<option value="yes">Yes</option>
									</select>

									<label>Maleria</label>
									<select name="maleria" class="form-control">
										<option value="no">No</option>
										<option value="yes">Yes</option>
									</select>

									<label>Typhoid</label>
									<select name="typhoid" class="form-control">
										<option value="no">No</option>
										<option value="yes">Yes</option>
									</select>
								  </div>
								 
								  <button type="submit" name="submit" class="btn btn-default">Add</button>
							</form>
						</div>

		<div class="LoginImage">
			
			<!-- <img src="img/bloodbank.jpg" class="img-fluid"> -->
			
		</div>
</div>

<script src="js/jquery.js"></script>
<script src="js/bootstrap.js"></script>

<script>
  function setQuantity(bank,type,quantity){

    fetch(`http://localhost:3000/user/update/${type}/${bank}`,
{
    headers: {
      'Content-Type': 'application/json'
    },
    method: "put",
    body: JSON.stringify({count:`${quantity}`})
})
.then(function(res){ 
	// console.log(res) 
})
.catch(function(res){ 
	// console.log(res) 
})

}
</script>


<?php
  $blood = ['A-','A+','AB-','AB+','O-','O+','B+','B-'];
  $quantity = [];
  for ($i=0; $i <count($blood) ; $i++) { 
    
  $query = "SELECT COUNT(*) AS count FROM blood Where bloodGroup ='$blood[$i]' ";

  $results = mysqli_query($con, $query);

  $row = mysqli_fetch_assoc($results);
  array_push($quantity,$row['count']);
?>

<script>
  setQuantity('c','<?php echo $blood[$i]; ?>','<?php echo $row['count']; ?>');  
</script>

<?php
}
?>


</body>
</html>