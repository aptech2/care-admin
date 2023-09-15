<?php
include "connection.php";

$city =   mysqli_real_escape_string($con, $_REQUEST['city']);
$sql  = "INSERT INTO cities ( city_name) VALUES ('$city')";

if(mysqli_query($con, $sql)){
    echo "reccords add sucessfuly .\n \n"  ; 
    // \n \n this are built in function  use for  line change
}
else{
    echo  "ERROR :could not able to excute the query";

}