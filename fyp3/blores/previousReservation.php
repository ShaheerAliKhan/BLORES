<?php
require ('headers/loggedinUser.php');
?>
<head><title>Previous Reservations | BLORES</title></head>
        <div class="container userDashboard">
            <div class="row">

                <div class="col-12 dashboardParagraph">
                
                 <h1>RESERVATIONS</h1>
                </div>
            </div>
        </div>

        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12 col-md-4 col-lg-4">

                </div>

                <div class="col-sm-12 col-md-4 col-lg-4 reservation">
                   <p>
                   <?php
                        $email = $_SESSION['email'];
                        $query = mysqli_query($con1,"SELECT `date`, 
                            `bloodGroup`,`bankName` FROM `request` where `email` = '".$email."' ");
                        
                    
                        $i=1;
                        while($data = mysqli_fetch_assoc($query)){  
                           
                            echo $i.". "."Reserved"." ".$data['bloodGroup']." "."at" ;
                            echo " ";
                            echo $data['date'];
                            echo " ";
                            echo "From ".$data['bankName'] ;
                            echo "<br>"; 
                            $i++;
                        }

                    
                    ?>
                     </p>      
                </div>
                <div class="col-sm-12 col-md-4 col-lg-4">
                </div>
            </div>
        </div>
    </div>
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.js"></script>
</body>
</html>


