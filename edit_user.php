
<?php

include 'header.php'; 

$idd=$_GET['id'];
$a="select * from users where Id='$idd'";
$b=mysqli_query($con,$a);
$c=mysqli_fetch_assoc($b);


if(isset($_POST['sub'])){
$n=$_POST['username'];
$pas=$_POST['pass'];
$role_id_FK=$_POST['roll'];
$q="UPDATE users SET user_name='$n', password = '$pas' , role_id_FK='$role_id_FK' where Id='$idd'";
$result = mysqli_query($con,$q);
if($result){
echo "<script>alert('updated');</script>";
echo "<script>window.location.href='show_user.php';</script>";
}

}

?>
<section id="main-content">
          <section class="wrapper">
<!-- BASIC FORM ELELEMNTS -->
<div class="row mt">
          		<div class="col-lg-12">
                  <div class="form-panel">
                  	  <h4 class="mb"> ADD Users</h4>
                      <form class="form-horizontal style-form" method="post" action="">
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">User Name</label>
                              <div class="col-sm-10">
                                  <input type="text" name="username" class="form-control" value="<?php echo $c['user_name']  ?>">
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Password</label>
                              <div class="col-sm-10">
                                  <input type="password"  name="pass" class="form-control" value="<?php echo $c['password']  ?>">
                              </div>
                          </div>

                          <div class="form-group">
                   
                   <label class="col-sm-2 col-sm-2 control-label"> Role </label>
                   
                   <?php 
 
 $q = "SELECT * FROM role";

 $rows=mysqli_query($con ,$q);

 echo  "<select class='dropdown' name='roll'>";
 echo "<option value='' disabled selected> Select an option </option>";
 while($data =$rows->fetch_assoc()){
    echo "<option class='col-sm-2 col-sm-2 control-label' value='$data[Id] '"; 
    if($data['Id']==$c['role_id_FK']){
        echo "selected";
    }
    
   echo ">$data[role_name] </option>\n";
 }
?>
   
</select>

                            </div>
                         
                          
                         
                         
   

                          <button type="submit" name="sub">Add Users</button>
                         
                              </form>   
                  </div>
          		</div><!-- col-lg-12-->      	
          	</div><!-- /row -->
</section>
</section>
<?php
include 'footer.php';
?>