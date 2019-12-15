<?php

// require 'config.php';    

$request_method = $_SERVER['REQUEST_METHOD'];
$response = array();

switch ($request_method){
    case "GET":
        response(doGET());
    break;

    case "POST":
        response(doPOST());
    break;

    case "DELETE":
        response(doDELETE());
    break;

    case "PUT":
        response(doPUT());
    break;
}


function doGET() {
    if (@$_GET['id']){
        @$id = $_GET['id'];
        $where = "WHERE `id`=" .$id; 

   }
    
    else{
        $id = 0;
        $where = "";
    }  
    
    $con = mysqli_connect('localhost','root','','sombloodbank') or die(mysql_error());

    // $query = mysqli_query($con,"SELECT * FROM `blood` ".$where);
    // $query_id = mysqli_query($con,"SELECT id FROM `blood` ");
    // if($data =  mysqli_fetch_assoc($query_id)){
    //     $response[] = $data;
    // }
    $query = mysqli_query($con," SELECT COUNT(bloodGroup) as count FROM `blood` WHERE `bloodGroup`= '$id'");

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