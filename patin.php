<?php
include "connection.php";

$pat =   mysqli_real_escape_string($con, $_REQUEST['pat']);
$blood =   mysqli_real_escape_string($con, $_REQUEST['blood']);
$date =   mysqli_real_escape_string($con, $_REQUEST['date']);
$cont=   mysqli_real_escape_string($con, $_REQUEST['contact']);
$rolp=   mysqli_real_escape_string($con, $_REQUEST['rolp']);

$sql  = "INSERT INTO patient (patient_name ,BloodGroup ,d_o_b ,contact ,user_id_FK) VALUES ('$pat ' ,'$blood' ,'$date','$cont' ,'$rolp' )";

if(mysqli_query($con, $sql)){
    echo "reccords add sucessfuly .\n \n"  ; 
    // \n \n this are built in function  use for  line change
}
else{
    echo  "ERROR :could not able to excute the query";

}