
<?php
include('header.php');

//if (isset($_GET['id'])) {
   // $idd=$_GET['id'];
   // $del=mysqli_query($con,"DELETE FROM `role` WHERE `Id`= '$idd'");}
//else {
   // echo "<script>alert('updated');</script>";
   // echo "<script>window.location.href='Show_roles.php';</script>";}

//$query=mysqli_query($con,$sel);
$id =mysqli_real_escape_string($con, $_REQUEST['id']);
$sql ="DElETE FORM role WHERE 'id' =$id ";

if (mysqli_query($con, $sql)) {
    if($con ->affected_rows>0){
        echo "not found";
    }    
}
else{
    echo "error: deleting records:";
}




?>
<?php
include('footer.php');


?>