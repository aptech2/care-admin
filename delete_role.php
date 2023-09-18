<?php
include('header.php');

$idd=$_GET['id'];
$q="Delete from role where ID='$idd'";
$res=mysqli_query($con,$q);
if($res){
    echo "<script>alert('updated');</script>";
    echo "<script>window.location.href='Show_Roles.php';</script>";
}
?>
<?php
include('footer.php');


?>