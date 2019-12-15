
<?php
    require 'config.php';
    require ('headers/loggedinUser.php');
    $email = $_SESSION['email'];

    // $query = "SELECT MAX(id) FROM request WHERE email = '$email"; 
    // $execute=mysqli_query($con,$query);
    // $gettingID=mysqli_fetch_assoc($execute);
    // echo($gettingID);


    // $sql="SELECT MAX(id) from `request` where `email`='$email'";
    // $query1=mysqli_query($con,$sql);
    // $data1=mysqli_fetch_assoc($query1);
    //print_r($data1);
    // $jani=pos($data1);
    // $sub=-1;
    // $newID = $jani-$sub;
 //echo($newID);


    // $query = "SELECT bloodGroup FROM request where id = '$newID'";
    // $sql = mysqli_query($con,$query);
    // $bg = mysqli_fetch_assoc($sql);
    // $newBG1 = pos($bg);
    // $newBG = $newBG1;
     
    if(isset($_GET['req'])){
      // $quantity = $_GET['q'];
      //$email = $_SESSION['email'];
      $type = $_GET['type'];;
      $name = $_SESSION['bank'];
           $date = date('Y-M-d H:i:s');
      $query1 = "INSERT INTO `request`( `date`,`email`,`bloodGroup`, `bankName`) VALUES
      ('$date','$email','$type','$name')" or die(mysql_error());

      if(mysqli_query($con1,$query1))
      {
        // echo "Successful";
        header('location:timeCounter.php');
     
      $subject = "HTML email";
      $message = "
          <html>
          <head>
          <title>HTML email</title>
          </head>
          <body> 
          
          
          
          </body>
          </html>";
      
      $headers  = 'MIME-Version: 1.0' . "\r\n";
      $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
      
      $to = 's.zaib356@gmail.com';
      
      // if(mail($to,"Subject", $message,$headers)){
      //     // echo 'Success';
      // }else{
      //     // echo 'Fail';
      // }

      }else
      {
      // echo "Not Working";
      echo "Error: " . $sql . "<br>" . $con1->error;

      }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Reservation Complete | BLORES</title>
</head>
<body>
<div class="timeCounterHeading">
    <div class="spacer"></div>
    <h1>Your Reservation Has Completed!</h1>
    <p>Kindly collect the blood bag from the selected blood bank in time. Time remaining: </p>
</div>
<div class="container">
    <div class="row">
          <div class="col-md-4"></div>
        <div class="col-md-6">
            <div class="spacer"></div>
              <div class="timeCounter">
                      <h3 id="demo"></h3>
                      
              </div>
        </div>
    </div>
</div>

<div id="timer">

<?php
  $date = date('Y-m-d H:i:s');
  $date1 = strtotime("2019-10-29 00:58:39");  
  $date2 = strtotime($date);  
  $diff = abs($date2 - $date1);  
  
  $years = floor($diff / (365*60*60*24));  
  $months = floor(($diff - $years * 365*60*60*24) / (30*60*60*24));  
  $days = floor(($diff - $years * 365*60*60*24 - $months*30*60*60*24)/ (60*60*24)); 
  $hours = floor(($diff - $years * 365*60*60*24 - $months*30*60*60*24 - $days*60*60*24) / (60*60));  
  $minutes = floor(($diff - $years * 365*60*60*24 - $months*30*60*60*24 - $days*60*60*24 - $hours*60*60)/ 60);  
  $seconds = floor(($diff - $years * 365*60*60*24 - $months*30*60*60*24 - $days*60*60*24 - $hours*60*60 - $minutes*60));  
    
  printf(" %d hours, ". "%d minutes, %d seconds", $hours, $minutes, $seconds); 
  // printf("%d years, %d months, %d days, %d hours, ". "%d minutes, %d seconds", $years, $months, $days, $hours, $minutes, $seconds); 
?>  



</div>

<script src="js/jquery.js"></script>
<script src="js/bootstrap.js"></script>
<script>
    setInterval(function() {

    $("#timer").load(location.href + " #timer");

  }, 1000);

</script>





</body>
</html>