
<?php
    require 'config.php';
    require ('headers/loggedinUser.php');   
    //$id = $_GET['id'];
    $user_id = '1';
    //$quantity = $_GET['q']-1;
    $type = $_GET['type'];
    // echo $type;

    // $query="SELECT * FROM request where blood_id='".$id."' and user_id='".$user_id."' and status = '1'  " or die(mysql_error());
    //     $execute=mysqli_query($con1,$query);
    //     $row=mysqli_fetch_array($execute);
        
   

?>


<head><title>Blood Bank Details | BLORES</title></head>
              <div id="googleMap" style="width:100%;height:400px;"></div>

            <script>
                    function myMap() {
                    var mapProp= {
                      center:new google.maps.LatLng(51.508742,-0.120850),
                      zoom:5,
                    };
                    var map = new google.maps.Map(document.getElementById("googleMap"),mapProp);
                    }
            </script>

            <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCBwbCltPlZjkTO8E-Kkn32sMQB5ADLgK4&callback=myMap"></script>


            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-lg-4"></div>
                    <div class="col-md-4 col-lg-4">
                        <div class="spacer"></div>
                            <div class="bbDetailsButtons">
                              
                                <button onclick="location.href=`timeCounter.php?type=${bloodType}&req=1`" class="loginButton">Reserve Blood</button>
                              
                                
                              <button class="loginButton">Back</button>
                                </div>
                    </div>
                    
                </div>
            </div>
           
</body>
<script>
	var params = new window.URLSearchParams(window.location.search);
  var bloodType = params.get('type');
</script>
<script src="js/jquery.js"></script>
<script src="js/bootstrap.js"></script>
</body>
</html>

