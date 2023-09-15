
<?php
include 'header.php';
if(isset($_POST['doctor'])){  
    $dname =   mysqli_real_escape_string($con, $_REQUEST['dname']);
    $exp =   mysqli_real_escape_string($con, $_REQUEST['exp']);
    $contact=   mysqli_real_escape_string($con, $_REQUEST['contact']);
    $doc_img =   mysqli_real_escape_string($con, $_REQUEST['doc_img']);
    $roluser=   mysqli_real_escape_string($con, $_REQUEST['roluser']);
    $rolcat=   mysqli_real_escape_string($con, $_REQUEST['rolcat']);
    $rolcity=   mysqli_real_escape_string($con, $_REQUEST['rolcity']);

 $image=$_FILES['doc_img']['name'];
 $imgtn=$_FILES['doc_img']['tmp_name'];
 $imgty=$_FILES['doc_img']['type'];
 $imgsi=$_FILES['doc_img']['size'];

 $folder="images/";
//  simplefolername
if($imgty=="image/png" || $imgty=="image/jpg" || $imgty=="image/jpeg" ){
if($imgsi<=10000000){
    $path=$folder.$image;

    $sql  = "INSERT INTO doctor (doc_name,experience,contact,doc_img,user_id_FK,cat_id_FK,city_id_FK)
     VALUES ('$dname','$exp','$contact','$path','$roluser','$rolcat' ,'$rolcity')";
    
    move_uploaded_file($imgtn,$path);


    if(mysqli_query($con, $sql)){
        echo "<script>alert('inserted');</script>"  ; 
      
    }
    else{
        echo "<script>alert('error');</script>"  ; 
    
    }
    }}
    else{
        echo "<script> alert('images  format eror')</script>";
    }}
?>
      <section id="main-content">
          <section class="wrapper">
<!-- BASIC FORM ELELEMNTS -->
<div class="row mt">
          		<div class="col-lg-12">
                  <div class="form-panel">
                  	  <h4 class="mb"> ADD DOCTORS</h4>
                      <form class="form-horizontal style-form" method="post"  enctype="multipart/form-data" action=""   >
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label"> Doctors Name</label>
                              <div class="col-sm-10">
                                  <input type="text" name="dname" class="form-control">
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Experience</label>
                              <div class="col-sm-10">
                                  <input type="type"  name="exp" class="form-control">
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Contact</label>
                              <div class="col-sm-10">
                                  <input class="form-control" name="contact" id="" type="text" >
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Doctor Image</label>
                              <div class="col-sm-10">
                                  <input class="form-control"  name="doc_img" id="" type="file" >
                              </div>
                          </div>
                          <div class="form-group">
                   
                            <label class="col-sm-2 col-sm-2 control-label">User Name</label>
                            

              <div class="col-sm-10"> </select>

              <?php 

 
$q = "SELECT * FROM users where role_id_FK=13";

$rows=mysqli_query($con ,$q);

echo  "<select class='dropdown' name='roluser'>";
echo "<option value='' disabled selected> Select an option </option>";
while($data =$rows->fetch_assoc()){
   echo "<option class='col-sm-2 col-sm-2 control-label' value='$data[Id] '>$data[user_name] </option>\n";
}
?>
   
</select>

                            </div>
                         
                              </div>
                              <div class="form-group">
                   
                   <label class="col-sm-2 col-sm-2 control-label">Category Name </label>
    
     <?php 

$q = "SELECT * FROM category";

$rows=mysqli_query($con ,$q);

echo  "<select class='dropdown' name='rolcat'>";
echo "<option value='' disabled selected> Select an option </option>";
while($data =$rows->fetch_assoc()){
echo "<option class='col-sm-2 col-sm-2 control-label' value='$data[Id] '>$data[cat_name] </option>\n";
}
?>

</select>
</div>
<label class="col-sm-2 col-sm-2 control-label">City Name </label>
    
    <?php 

$q = "SELECT * FROM cities";

$rows=mysqli_query($con ,$q);

echo  "<select class='dropdown' name='rolcity'>";
echo "<option value='' disabled selected> Select an option </option>";
while($data =$rows->fetch_assoc()){
echo "<option class='col-sm-2 col-sm-2 control-label' value='$data[Id] '>$data[city_name] </option>\n";
}
?>

</select>
</div>                
   

                          <button type="submit" name="doctor">Add Doctors</button>
                         
                              </form>   
                  </div>
          		</div><!-- col-lg-12-->      	
          	</div><!-- /row -->
</section>
</section>
<?php

include 'footer.php';
?>