<?php
require 'config.php';

// $count = 0;
// $query = "SELECT * FROM blood";
// $results = mysqli_query($con1, $query);
//   while($row = mysqli_fetch_assoc($results)){
//     if(strtoupper($_GET['bloodGroup'])==substr($row['bloodGroup'],0,2)){
//     echo $_GET['bloodGroup'];
//     echo(substr($row['bloodGroup'],0,2));
//     $count++;
//     }
//   }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Blood Available</title>
    <link rel="stylesheet" href="bootstrap/bootstrap1.css">
    <link rel="stylesheet" href="css/admincss.css">
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
              <div class="navbar-nav">
                <a class="nav-item nav-link" href="deleteRecords.php">Delete Blood Records</a>
                <a class="nav-item nav-link" href="dashboard.php">Add Blood Records</a>
                <a class="nav-item nav-link" href="logout.php">Logout</a>
              </div>
            </div>
            </nav>
    <div class="container-fluid main">
        
        <div class="row">
            <h3>These are the blood bags we are having in our stock.</h3>
         
            <div class="col-sm-12 col-md-4 col-lg-4">

            </div>

            <div class="col-sm-12 col-md-4 col-lg-4">
                    <table class="table display data-table text-nowrap">
                            <thead>
                                <tr>
                                    <th>
                                        <div class="form-check">
                                    </th>
                                    <th>Donor Name</th>
                                    <th>Bag Number</th>
                                    <th>Contact</th>
                                    <th>Dontated On</th>
                                    <th>Age</th>
                                    <th>Gender</th>
                                    <th>Blood Group</th>
                                    <th>HIV - Aids</th>
                                    <th>maleria</th>
                                    <th>typhoid</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php
                                         $query = "SELECT * FROM `blood`";
                                         $res = $con->query($query);
                                         if ($res->num_rows > 0) {
                                             while($row = $res->fetch_assoc()) {
                                                 echo '
                                                 <tr>
                                                 <td>
                                                
                                                 </td>

                                                 <td>'.$row["dName"].'</td>
                                                 <td>'.$row["bagNumber"].'</td>
                                                 <td>'.$row["num"].'</td>
                                                 <td>'.$row["added_on"].'</td>
                                                 <td>'.$row["age"].'</td>
                                                 <td>'.$row["gender"].'</td>
                                                 <td>'.$row["bloodGroup"].'</td>
                                                 <td>'.$row["hiv"].'</td>
                                                 <td>'.$row["maleria"].'</td>
                                                 <td>'.$row["typhoid"].'</td>                                           

                                                 <td>
                                                 </td>
                                             </tr>
                                                 ';
                                                }
                                            }
                                        
                                        ?>
                              
                               
                            </tbody>
                        </table>
            </div>

            <div class="col-sm-12 col-md-4 col-lg-4">
           
            </div>

        </div>

    </div>


<script src="js/jquery.js"></script>
<script src="js/bootstrap.js"></script>
  





</body>
</html>