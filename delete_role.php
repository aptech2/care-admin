<?php
include('header.php');

$idd=$_GET['id'];
$q="update role set status=1 where Id='$idd'";
$res=mysqli_query($con,$q);
if($res){
<<<<<<< HEAD
    echo "<script>alert('updated');</script>";
    echo "<script>window.location.href='Show_roles.php';</script>";
=======
    echo "<script>alert('deleted');</script>";
    echo "<script>window.location.href='show_roles.php';</script>";
>>>>>>> f434946fc7d631da0b1101b1e3cbcb5c38ced7ad
}
?>
<?php
include('footer.php');


?>