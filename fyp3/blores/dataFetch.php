
<?php
    require 'config.php';
    require ('headers/loggedinUser.php');

// if(isset($_POST['submit']))
// {
// $sql = "INSERT INTO `request`(`bloodGroup`) VALUES ('".$_POST['bloodGroup']."')";
// $query = mysqli_query($con,$sql);
// echo"success";
// }

// else {
// echo "Not working";

// }

?>


    <head><title>Blood Availablity | BLORES</title></head>





        <div class="container userDashboard">
            <div class="row">

                <div class="col-12 navigationScreen">
                    <div>
                            <h1 class="navScreenHeading">Your Required Blood Is 
                                Available In These Blood Banks</h1>
                                <p>Click on the blood bank name and you will be redirected to
                                    the navigation of that blood bank via Google Maps
                                </p>
                    </div>
                    
                    <div class="bbListings">
                            <table >
							<thead>
									<tr>
                                      <th>Blood Bank</th>
                                      <th>Quantity</th>
                                      
                                    </tr>
							</thead>
							<tbody id='b'>
							</tbody>
                                    
                                  </table>
                    </div>

                </div>
            </div>
        </div>
    </div>

 
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.js"></script>
	<script>
	var params = new window.URLSearchParams(window.location.search);
	var find = params.get('bloodGroup');
	console.log(params.get('bloodGroup'));

    // if(find.slice(0,-1) == "A" ){
    //     find = find.slice(0,-1)+'+';
    //   }else if(find.slice(0,-1) == "B" ){
    //     find = find.slice(0,-1)+'+';
    //   }else if(find.slice(0,-1) == "AB" ){
    //     find = find.slice(0,-1)+'+';
    //   }else if(find.slice(0,-1) == "O" ){
    //     find = find.slice(0,-1)+'+';
    //   }
	
    var api = [<?php                   
                        $query1 = "SELECT `id`, `name`,`url`,`bgname` FROM `bloodbanks`";
                        $sql1 = mysqli_query($con,$query1);
                        while($sql2 = mysqli_fetch_assoc($sql1)) {
                        $urls = $sql2;
                        $url2=$urls['url'];
                        echo "'".$urls['url']."'";
                        echo ",";
                        }
                 ?>]

var bankName = [<?php                   
                        $query2 = "SELECT `id`, `name`,`url`,`bgname` FROM `bloodbanks`";
                        $sql2 = mysqli_query($con,$query2);
                        while($sql3 = mysqli_fetch_assoc($sql2)) {
                        $urls1 = $sql3;
                        $url3=$urls1['name'];
                        echo "'".$urls1['name']."'";
                        echo ",";
                        }

                        $_SESSION['bank']=$urls1['name'];
                 ?>]
    
                //  console.log(bankName[0]);
             
                        
	for(var i= 0 ; i<api.length;i++){
    $temp =`${api[i]}?bloodGroup=${find.toUpperCase()}`;
    // console.log($temp);
    check($temp,i);
	}




	function check(url,i){
        // console.log(url);
		var a;
		fetch(url)
            .then((res) =>
                res.json()
            )
            .then((resp) => {
                // console.log(resp);
            a= resp.map((item) => {
			    console.log(item);

			//    if(find.toUpperCase() == item.bloodGroup){
                if(item.count>0){
                   $('#b').append(  
                    `<tr> 
						<td><a href="bb-details.php?id=${item.id}&q=${item.count}&type=${find}">${bankName[i]}</a></td>
						<td>${item.count} Bag(s)</td>
					<tr>`
                    );
                }
			//    }
                
            })
            })
	}		
</script>
  
</body>
</html>