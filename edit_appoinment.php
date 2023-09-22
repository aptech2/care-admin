<?php

include 'header.php'; 

$idd=$_GET['id'];
$a="select * from appoinment where Id='$idd'";
$b=mysqli_query($con,$a);
$c=mysqli_fetch_assoc($b);


if(isset($_POST['appoinment'])){
$date=$_POST['date'];
$time=$_POST['time'];
$status=$_POST['status'];
$message=$_POST['message'];
$rolus=$_POST['rolus'];
$roldo=$_POST['roldo'];
$q="UPDATE `appoinment` SET `doc_id_FK`='$roldo',
`user_id_FK`='$rolus',`date`='$date',`time`='$time',`status`='$status',`message`='$message'  where Id='$idd'";
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
                  	  <h4 class="mb">EDIT APPOINTMENTS</h4>
                      <form class="form-horizontal style-form" method="post"  action="" >
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label"> Date</label>
                              <div class="col-sm-10">
                                  <input type="date" name="date" class="form-control" value="<?php echo $c['date']  ?>" >
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Time</label>
                              <div class="col-sm-10">
                                  <input type="time"  name="time" class="form-control" value="<?php echo $c['time']  ?>" >
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Status</label>
                              <div class="col-sm-10">
                                  <input class="form-control" name="status" id="" type="text" value="<?php echo $c['status']  ?>"  >
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Message</label>
                              <div class="col-sm-10">
                                  <input class="form-control"  name="message" id="" type="type" value="<?php echo $c['message']  ?>"  >
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
   echo "<option class='col-sm-2 col-sm-2 control-label' value='$data[Id]'";
   if($data['Id']==$c['user_id_FK']){
    echo "selected";
}

echo ">$data[user_name] </option>\n";
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
echo "<option class='col-sm-2 col-sm-2 control-label' value='$data[Id]'";
if($data['Id']==$c['doc_id_FK']){
    echo "selected";
}

echo " >$data[doc_name] </option>\n";
}
?>

</select>
</div>
                         
   

                          <button type="submit" name="appoinment">Edit Appoinments</button>
                         
                              </form>   
                  </div>
          		</div><!-- col-lg-12-->      	
          	</div><!-- /row -->
</section>
</section>
<?php

include 'footer.php';
?>
