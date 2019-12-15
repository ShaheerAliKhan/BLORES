<?php
    require 'config.php';
    require ('headers/loggedinUser.php');
?>  <head><title>Dashboard | BLORES</title></head>
        <div class="container userDashboard">
            <div class="row">

                <div class="col-12 dashboardParagraph">
                
                    <p>Welcome! <b> <?php echo $_SESSION['email'] ?></b> There is a search bar below from where you can search the
                        required blood group. 
                        
                        <br>
                        <br> After searching, BLORES will respond you with
                        the name of blood banks that are having your required blood group. Please
                        remember that if you are going to reserve the blood, you must have to collect
                        it from the respective blood bank otherwise the blood bank has all the rights
                        to cancel your reservation. You have to provide donor(s) to the blood bank
                        so that you may recieve the blood.

                    
                        <br>
                        <br>
                        Kindly note that BLORES is not responsible for false collection of blood!
                        Please check your bag VERY CAREFULLY while collecting the blood bag.
                    </p>
                </div>
            </div>
        </div>

        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12 col-md-4 col-lg-4 searching">

                </div>

                <div class="col-sm-12 col-md-4 col-lg-4">
                        <form  method="GET" action='datafetch.php'>
                            <div class="searchBar">
                            
                                <input name="bloodGroup" id="bloodGroup" class="searchBarBox" placeholder="Search ...">

                                <input type="hidden" id="action" value="addbloodGroup">
                            <button name="submit" id="addbloodGroup" class="searchBtn">Go</button>

                            </div>
                            
                        </form>
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

<script>
    $('#addbloodGroup').click(function(){
        var bloodGroup = $('#bloodGroup').val();
         document.wtite(bloodGroup);

    //      var action = $('#action').val();

    //    $.ajax({
    //        type: "POST",
    //        data: {bloodGroup:bloodGroup,action:action},
    // })
        
    }) 

</script>

<?php
//if(isset($_POST['action']))
//{
 

  //  if($_POST['action']=="addbloodGroup")
   // {
        
    //        $sql = "insert into request (bloodGroup) VALUES ('".$_POST['bloodGroup']."')";

    //    $result = mysqli_query($con,$sql);

        
        
        

 //   }

//}
//?>