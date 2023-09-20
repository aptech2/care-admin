<?php
include('header.php');

$idd=$_GET['id'];
$q="DELETE FROM `appoinment` WHERE   Id='$idd'";
$res=mysqli_query($con,$q);
if($res){
    echo "<script>alert('deleted');</script>";
    echo "<script>window.location.href='show_appoint.php';</script>";
}
?>
<?php
include('footer.php');


?>