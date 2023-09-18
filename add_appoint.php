
<?php
include 'header.php';
if(isset($_POST['appoinment'])){  
    $date =   mysqli_real_escape_string($con, $_REQUEST['date']);
    $time =   mysqli_real_escape_string($con, $_REQUEST['time']);
    $status =   mysqli_real_escape_string($con, $_REQUEST['status']);
    $message =   mysqli_real_escape_string($con, $_REQUEST['message']);
    $rolus =   mysqli_real_escape_string($con, $_REQUEST['rolus']);
    $roldo =   mysqli_real_escape_string($con, $_REQUEST['roldo']);
    
    
    $sql  = "INSERT INTO appoinment (date ,time ,status,message,user_id_FK,doc_id_FK) VALUES ('$date ' ,'$time' ,'$status','$message','$rolus','$roldo')";
    
if(mysqli_query($con, $sql)){
    echo "<script>alert('inserted');window.location.href='show_appoint.php' </script>"  ; 
  
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
                  	  <h4 class="mb"> ADD APPOINTMENTS</h4>
                      <form class="form-horizontal style-form" method="post"  action="" >
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label"> Date</label>
                              <div class="col-sm-10">
                                  <input type="date" name="date" class="form-control">
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Time</label>
                              <div class="col-sm-10">
                                  <input type="time"  name="time" class="form-control">
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Status</label>
                              <div class="col-sm-10">
                                  <input class="form-control" name="status" id="" type="text" >
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Message</label>
                              <div class="col-sm-10">
                                  <input class="form-control"  name="message" id="" type="type" >
                              </div>
                          </div>
                          <div class="form-group">
                   
                            <label class="col-sm-2 col-sm-2 control-label">Patient Name</label>
                            

              <div class="col-sm-10"> </select>

              <?php 

 
$q = "SELECT * FROM users where role_id_FK = 15";

$rows=mysqli_query($con ,$q);

echo  "<select class='dropdown' name='rolus'>";
echo "<option value='' disabled selected> Select an option </option>";
while($data =$rows->fetch_assoc()){
   echo "<option class='col-sm-2 col-sm-2 control-label' value='$data[Id] '>$data[user_name] </option>\n";
}
?>
   
</select>

                            </div>
                         
                              </div>
                              <div class="form-group">
                   
                   <label class="col-sm-2 col-sm-2 control-label">Doctors Name </label>
    
     <?php 

$q = "SELECT * FROM doctor";

$rows=mysqli_query($con ,$q);

echo  "<select class='dropdown' name='roldo'>";
echo "<option value='' disabled selected> Select an option </option>";
while($data =$rows->fetch_assoc()){
echo "<option class='col-sm-2 col-sm-2 control-label' value='$data[Id] '>$data[doc_name] </option>\n";
}
?>

</select>
</div>
                         
   

                          <button type="submit" name="appoinment">Add Appoinments</button>
                         
                              </form>   
                  </div>
          		</div><!-- col-lg-12-->      	
          	</div><!-- /row -->
</section>
</section>
<?php

include 'footer.php';
?>
