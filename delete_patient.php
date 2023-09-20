<?php
include('header.php');

$idd=$_GET['id'];
$q="DELETE FROM `patient` WHERE   Id='$idd'";
$res=mysqli_query($con,$q);
if($res){
    echo "<script>alert('deleted');</script>";
    echo "<script>window.location.href='show_patient.php';</script>";
}
?>
<?php
include('footer.php');


?>