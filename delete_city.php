<?php
include('header.php');

$idd=$_GET['id'];
$q="DELETE FROM `cities` WHERE   Id='$idd'";
$res=mysqli_query($con,$q);
if($res){
    echo "<script>alert('deleted');</script>";
    echo "<script>window.location.href='show_city.php';</script>";
}
?>
<?php
include('footer.php');


?>