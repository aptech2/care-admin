<?php
include('header.php');

$idd=$_GET['id'];
$q="DELETE FROM `doctor` WHERE   Id='$idd'";
$res=mysqli_query($con,$q);
if($res){
    echo "<script>alert('deleted');</script>";
    echo "<script>window.location.href='show_doctorss.php';</script>";
}
?>
<?php
include('footer.php');


?>