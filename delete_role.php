<?php
include('header.php');

$idd=$_GET['id'];
$q="update role set status=1 where Id='$idd'";
$res=mysqli_query($con,$q);
if($res){
    echo "<script>alert('deleted');</script>";
    echo "<script>window.location.href='show_roles.php';</script>";
}
?>
<?php
include('footer.php');


?>