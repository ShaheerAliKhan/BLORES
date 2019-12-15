<?php

	$request_method = $_SERVER['REQUEST_METHOD'];
	$response = array();

switch ($request_method) {
	case 'GET':
		response(doGET());
		break;	
}

function doGET() {
    if (@$_GET['cnic']){
        @$cnic = $_GET['cnic'];
        $where = "WHERE `cnic`=" .$cnic; 

   }
    
    else{
        $id = 0;
        $where = "";
    }  

    $con = mysqli_connect('localhost','root','','osmblood') or die(mysql_error());

    $query = mysqli_query($con,"SELECT hiv,maleria,typhoid,added_on FROM `blood` ".$where);
    while($data = mysqli_fetch_assoc($query)){
        $response[] = $data;
    }
    

    return @$response;
}

//output

function response ($response) {
echo json_encode($response);
}
?>