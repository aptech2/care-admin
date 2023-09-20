
<?php

include 'connection.php'; 

$idd=$_GET['id'];
$a="select * from patient where Id='$idd'";
$b=mysqli_query($con,$a);
$c=mysqli_fetch_assoc($b);


if(isset($_POST['patient'])){
$pat=$_POST['pat'];
$blood=$_POST['blood'];
$date=$_POST['date'];
$contact=$_POST['contact'];
$user_id=$_POST['user_id'];

$q="UPDATE `patient` SET `patient_name`='$pat',`BloodGroup`=
'$blood',`d_o_b`='$date',`contact`='$contact',`user_id_Fk`='$user_id' WHERE  Id='$idd'";
$result = mysqli_query($con,$q);
if($result){
echo "<script>alert('updated');</script>";
echo "<script>window.location.href='show_patient.php';</script>";
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
                                  <input type="text" name="pat" class="form-control"  value="<?php echo $c['patient_name']  ?>"  >
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Blood Group</label>
                              <div class="col-sm-10">
                                  <input type="text"  name="blood" class="form-control"  value="<?php echo $c['BloodGroup']  ?>"  >
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Date of Birth</label>
                              <div class="col-sm-10">
                                  <input class="form-control" name="date" id="" type="date"   value="<?php echo $c['d_o_b']  ?>" >
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Contact</label>
                              <div class="col-sm-10">
                                  <input class="form-control"  name="contact" id="" type="type"  value="<?php echo $c['contact']  ?>"  >
                              </div>
                          </div>
                          <div class="form-group">
                   
                            <label class="col-sm-2 col-sm-2 control-label"> Users</label>
                            

              <div class="col-sm-10"> </select>

              <?php 

 
 $q = "SELECT * FROM users";

 $rows=mysqli_query($con ,$q);

 echo  "<select class='dropdown' name='user_id'>";
 echo "<option value='' disabled selected> Select an option </option>";
 while($data =$rows->fetch_assoc()){
    echo "<option class='col-sm-2 col-sm-2 control-label' value='$data[Id] '"; 
    if($data['Id']==$c['user_id_Fk']){
        echo "selected";
    }
    
   echo ">$data[user_name] </option>\n";
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