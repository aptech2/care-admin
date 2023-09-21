<?php

include 'header.php';
$idd=$_GET['id'];
$a="select * from doctor where Id='$idd'";
$b=mysqli_query($con,$a);
$c=mysqli_fetch_assoc($b);


if(isset($_POST['sub'])){
$n=$_POST['dname'];
$exp=$_POST['exp'];
$contact=$_POST['contact'];
$doimg=$_POST['doc_img'];
$rolus=$_POST['roluser'];
$rolcat=$_POST['rolcat'];
$rolcity=$_POST['rolcity'];
$q="UPDATE doctor SET doc_name='$n', experience = '$exp' ,contact ='$contact',doc_img ='$doimg'  ,user_id_FK ='$rolus'
 ,cat_id_FK ='$rolcat' city_id_FK ='$rolcity' where Id='$idd'";
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
                  	  <h4 class="mb"> ADD DOCTORS</h4>
                      <form class="form-horizontal style-form" method="post"  enctype="multipart/form-data" action=""   >
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label"> Doctors Name</label>
                              <div class="col-sm-10">
                                  <input type="text" name="dname" class="form-control" value="<?php echo $c['doc_name']?>">>
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Experience</label>
                              <div class="col-sm-10">
                                  <input type="type"  name="exp" class="form-control" value="<?php echo $c['experience']?>">>
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Contact</label>
                              <div class="col-sm-10">
                                  <input class="form-control" name="contact" id="" type="text"value="<?php echo $c['contact']?>">  >
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Doctor Image</label>
                              <div class="col-sm-10">
                                  <input class="form-control"  name="doc_img" id="" type="file" value="<?php echo $c['doc_img']?>"> >
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
   echo "<option class='col-sm-2 col-sm-2 control-label' value='$data[Id]'";
   if($data['Id']==$c['user_id_FK']){
    echo "selected";
}
   
echo" >$data[user_name] </option>\n";
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
echo "<option class='col-sm-2 col-sm-2 control-label' value='$data[Id]'";
if($data['Id']==$c['cat_id_FK']){
    echo "selected";
}
echo ">$data[cat_name] </option>\n";
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
echo "<option class='col-sm-2 col-sm-2 control-label' value='$data[Id] '";
if($data['Id']==$c['city_id_FK']){
    echo "selected";
}
echo ">$data[city_name] </option>\n";
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