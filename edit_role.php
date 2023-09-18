<?php
include('header.php');

                    $idd=$_GET['id'];
                    $a="select * from role where ID='$idd'";
                    $b=mysqli_query($con,$a);
                    $c=mysqli_fetch_assoc($b);
                    $role=$c['role_name'];
                    
if(isset($_POST['role'])){
$n=$_POST['role_name'];
$q="update role set  role_name='$role' where ID='$idd'";
$result = mysqli_query($con,$q);
if($result){
  echo "<script>alert('updated');</script>";
  echo "<script>window.location.href='show_role.php';</script>";
}

}
?>

      <div class="content-wrapper">
  <!-- <section class="content">
          <div class="row">
            <div class="col-md-1"></div>
            <div class="col-md-10">
      <div class="box box-danger">
                <div class="box-header">
                  <h3 class="box-title">Edit Role</h3>
                </div>
                <div class="box-body">
                    
                  <!-- Date dd/mm/yyyy -->
                  <!-- <form method="post" action="">

                 
                  <div class="form-group">
                    <label>role</label>
                  
                    <div class="input-group">
                     
                   <input style="width:700px;" type="text" class="form-control" name="Name" value=/>
                  </div><!-- /.form group -->

            <!-- <button type="submit" name="sub">Edit role</button>
            </form>
                </div><!-- /.box-body -->
              </div><!-- /.box -->
</div>
</div>
<div class="col-md-2"></div>
</section>  -->
      <section id="main-content">
          <section class="wrapper">
<!-- BASIC FORM ELELEMNTS -->
<div class="row mt">
          		<div class="col-lg-12">
                  <div class="form-panel">
                  	  <h4 class="mb"> Roles</h4>
                      <form class="form-horizontal style-form"  action="" method="post">
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Roles Name</label>
                              <div class="col-sm-10">
                                  <input type="text" name="role" class="form-control" value="<?php echo $role_name?>">
                              </div>
                          </div>
                        
                          
                          
                         
                         
   

                          <button type="submit" name="role">Add Roles</button>
                         
                              </form>   
                  </div>
          		</div><!-- col-lg-12-->      	
          	</div><!-- /row -->
</section>
</section>
</div>
<?php

include('footer.php');


?>