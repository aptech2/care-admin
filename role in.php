<?php
include "connection.php";

$role =   mysqli_real_escape_string($con, $_REQUEST['role']);
$sql  = "INSERT INTO role  ( role_name) VALUES ('$role')";

if(mysqli_query($con, $sql)){
    echo "reccords add sucessfuly .\n \n"  ; 
    // \n \n this are built in function  use for  line change
}
else{
    echo  "ERROR :could not able to excute the query";

}