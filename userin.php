<?php
include "connection.php";

$uname =   mysqli_real_escape_string($con, $_REQUEST['username']);
$password =   mysqli_real_escape_string($con, $_REQUEST['pass']);
$role =   mysqli_real_escape_string($con, $_REQUEST['roll']);

$sql  = "INSERT INTO users (user_name ,password ,role_id_FK) VALUES ('$uname ' ,'$password' ,'$role ')";

if(mysqli_query($con, $sql)){
    echo "reccords add sucessfuly .\n \n"  ; 
    // \n \n this are built in function  use for  line change
}
else{
    echo  "ERROR :could not able to excute the query";

}