<?php
include 'header.php';
if(isset($_POST['role'])){  
    $role =   mysqli_real_escape_string($con, $_REQUEST['role']);
    $sql  = "INSERT INTO `role` ( `role_name`) VALUE ('$role')";
    


    if(mysqli_query($con, $sql)){
        echo "<script>alert('inserted');window.location.href='show_roles.php' </script>"  ; 
      
    }
    else{
        echo "<script>alert('error');</script>"  ; 
    
    }
    }
include 'header.php';
?>
      <section id="main-content">
          <section class="wrapper">
<!-- BASIC FORM ELELEMNTS -->
<div class="row mt">
          		<div class="col-lg-12">
                  <div class="form-panel">
                  	  <h4 class="mb"> Roles</h4>
                      <form class="form-horizontal style-form"  action=""  method="post">
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Roles Name</label>
                              <div class="col-sm-10">
                                  <input type="text" name="role" class="form-control">
                              </div>
                          </div>
                        
                          
                          
                         
                         
   

                          <button type="submit" name="role">Add Roles</button>
                         
                              </form>   
                  </div>
          		</div><!-- col-lg-12-->      	
          	</div><!-- /row -->
</section>
</section>
<?php

include 'footer.php';
?>
