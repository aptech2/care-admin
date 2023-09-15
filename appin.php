<?php
include "connection.php";

$date =   mysqli_real_escape_string($con, $_REQUEST['date']);
$time =   mysqli_real_escape_string($con, $_REQUEST['time']);
$status =   mysqli_real_escape_string($con, $_REQUEST['status']);
$message =   mysqli_real_escape_string($con, $_REQUEST['message']);
$rolus =   mysqli_real_escape_string($con, $_REQUEST['rolus']);
$roldo =   mysqli_real_escape_string($con, $_REQUEST['roldo']);


$sql  = "INSERT INTO appoinment (date ,time ,status,message,user_id_FK,doc_id_FK) VALUES ('$date ' ,'$time' ,'$status','$message','$rolus','$roldo')";

if(mysqli_query($con, $sql)){
    echo "reccords add sucessfuly .\n \n"  ; 
    // \n \n this are built in function  use for  line change
}
else{
    echo  "ERROR :could not able to excute the query";
    
}