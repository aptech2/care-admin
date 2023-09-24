<?php


include 'connection.php';
session_start();


$loginid=$_POST['loginid'];
$loginpass=$_POST['loginpass'];

$sql = "SELECT * FROM users where user_name='$loginid' and password='$loginpass'";
$result = $con->query($sql);

$row = mysqli_fetch_assoc($result);
$count=mysqli_num_rows($result);
$role=$row['role_id_FK'];
if($count==0){
    echo "<script>alert('Log In failed'); window.location.href='login.html';</script>";
  }
else if($role==11){
   
    $_SESSION['loginid']=$loginid;
    $_SESSION['Id']=$row['Id'];
    $_SESSION['Username']=$row['user_name'];
    $_SESSION['Userpass']=$row['password'];

    $_SESSION['role']=$row['role_id_FK'];
    setcookie("user",$loginid);
    echo "<script>alert('admin'); window.location.href='dashboard.php';</script>"; 
}
elseif($role==13){
    $_SESSION['loginid']=$loginid;
    $_SESSION['Id']=$row['Id'];
    $_SESSION['Username']=$row['user_name'];
    $_SESSION['Userpass']=$row['password'];
    $_SESSION['role']=$row['role_id_FK'];
    setcookie("user",$loginid);
    echo "<script>alert('doctor'); window.location.href='gallery.html';</script>"; 
}
else{
     $_SESSION['loginid']=$loginid;
    $_SESSION['Id']=$row['Id'];
    $_SESSION['Username']=$row['user_name'];   
     $_SESSION['Userpass']=$row['password'];
    $_SESSION['role']=$row['role_id_FK'];
    setcookie("user",$loginid);
    echo "<script>alert('user'); window.location.href='general.html';</script>"; 
}
?>