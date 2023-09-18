<?php
include 'header.php';
if(isset($_POST['patient'])){  
    $pat =   mysqli_real_escape_string($con, $_REQUEST['pat']);
$blood =   mysqli_real_escape_string($con, $_REQUEST['blood']);
$date =   mysqli_real_escape_string($con, $_REQUEST['date']);
$cont=   mysqli_real_escape_string($con, $_REQUEST['contact']);
$rolp=   mysqli_real_escape_string($con, $_REQUEST['rolp']);

$sql  = "INSERT INTO patient (patient_name ,BloodGroup ,d_o_b ,contact ,user_id_FK) VALUES ('$pat ' ,'$blood' ,'$date','$cont' ,'$rolp' )";


    if(mysqli_query($con, $sql)){
        echo "<script>alert('inserted');window.location.href='show_patient.php' </script>"  ; 
      
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
                  	  <h4 class="mb"> ADD PATIENTS</h4>
                      <form class="form-horizontal style-form" method="post"  action="" >
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label"> Patient Name</label>
                              <div class="col-sm-10">
                                  <input type="text" name="pat" class="form-control">
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Blood Group</label>
                              <div class="col-sm-10">
                                  <input type="text"  name="blood" class="form-control">
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Date of Birth</label>
                              <div class="col-sm-10">
                                  <input class="form-control" name="date" id="" type="date" >
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Contact</label>
                              <div class="col-sm-10">
                                  <input class="form-control"  name="contact" id="" type="type" >
                              </div>
                          </div>
                          <div class="form-group">
                   
                            <label class="col-sm-2 col-sm-2 control-label"> Users</label>
                            

              <div class="col-sm-10"> </select>

              <?php 

 
 $q = "SELECT * FROM users";

 $rows=mysqli_query($con ,$q);

 echo  "<select class='dropdown' name='rolp'>";
 echo "<option value='' disabled selected> Select an option </option>";
 while($data =$rows->fetch_assoc()){
    echo "<option class='col-sm-2 col-sm-2 control-label' value='$data[Id] '>$data[user_name] </option>\n";
 }
?>
   
</select>

                            </div>
                         
                              </div>
                         
   

                          <button type="submit" name="patient">Add patient</button>
                         
                              </form>   
                  </div>
          		</div><!-- col-lg-12-->      	
          	</div><!-- /row -->
</section>
</section>
<?php

include 'footer.php';
?>
