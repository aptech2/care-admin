<?php

include 'connection.php';
$usersign=$_POST['usersign'];
$userpass=$_POST['userpass'];

$sql="INSERT INTO `users`( `user_name`, `password` , `role_id_FK`) VALUES ('$usersign','$userpass', where id=15)";
if(mysqli_query($con, $sql)){
    echo "<script>alert('inserted');window.location.href='show_appoint.php' </script>"  ; 
  
}
else{
    echo "<script>alert('error');</script>"  ; 
}
?>
<?php

include 'footer.php';
?>