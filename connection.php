<?php
$username ="root";
$servername ="localhost";
$password ="";
$dbname  ="care";



$con =new  mysqli($servername, $username , $password ,$dbname);
if(!$con){
    echo  "connection failer";
}




?>