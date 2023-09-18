
<?php

include 'header.php';

if(isset($_POST['user'])){  
   
$uname =   mysqli_real_escape_string($con, $_REQUEST['username']);
$password =   mysqli_real_escape_string($con, $_REQUEST['pass']);
$role =   mysqli_real_escape_string($con, $_REQUEST['roll']);

$sql  = "INSERT INTO users (user_name ,password ,role_id_FK) VALUES ('$uname ' ,'$password' ,'$role ')";

    if(mysqli_query($con, $sql)){
        echo "<script>alert('inserted');window.location.href='show_user.php' </script>"  ; 
      
    }
    else{
        echo "<script>alert('error');</script>"  ; 
    
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
                                  <input type="text" name="username" class="form-control">
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Password</label>
                              <div class="col-sm-10">
                                  <input type="password"  name="pass" class="form-control">
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
    echo "<option class='col-sm-2 col-sm-2 control-label' value='$data[Id] '>$data[role_name] </option>\n";
 }
?>
   
</select>

                            </div>
                         
                          
                         
                         
   

                          <button type="submit" name="user">Add Users</button>
                         
                              </form>   
                  </div>
          		</div><!-- col-lg-12-->      	
          	</div><!-- /row -->
</section>
</section>
<?php

include 'footer.php';
?>