<?php
include('connection.php');

$idd=$_GET['id'];
$q="update cities set statuse=1 where Id='$idd'";
//"DELETE FROM `cities` WHERE   Id='$idd'";
//
$res=mysqli_query($con,$q);
if($res){
    echo "<script>alert('deleted');</script>";
    echo "<script>window.location.href='show_city.php';</script>";
}
?>
<?php
include('footer.php');


?>