<?php
include "connection.php";

$cat =   mysqli_real_escape_string($con, $_REQUEST['cat']);

$sql  = "INSERT INTO category (cat_name) VALUES ('$cat')";

if(mysqli_query($con, $sql)){
    echo "reccords add sucessfuly .\n \n"  ; 
    // \n \n this are built in function  use for  line change
}
else{
    echo  "ERROR :could not able to excute the query";

}