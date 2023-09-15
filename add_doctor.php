<?php

include 'header.php';
?>
      <section id="main-content">
          <section class="wrapper">
<!-- BASIC FORM ELELEMNTS -->
<div class="row mt">
          		<div class="col-lg-12">
                  <div class="form-panel">
                  	  <h4 class="mb"><i class="fa fa-angle-right"></i> Form Elements</h4>
                      <form class="form-horizontal style-form" method="get">
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label"> Patient Name</label>
                              <div class="col-sm-10">
                                  <input type="text" class="form-control">
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Blood Group</label>
                              <div class="col-sm-10">
                                  <input type="text" class="form-control">
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Date of Birth</label>
                              <div class="col-sm-10">
                                  <input class="form-control" id="" type="date" >
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Contact</label>
                              <div class="col-sm-10">
                                  <input class="form-control" id="" type="type" >
                              </div>
                          </div>
                          <div class="form-group">
                   
                            <label class="col-sm-2 col-sm-2 control-label">cities</label>
                            

              <div class="col-sm-10"> </select>

              <?php 
include 'connection.php';

 
 $q = "SELECT * FROM cities";

 $rows=mysqli_query($con ,$q);

 echo  "<select class='dropdown' name='roll'>";
 echo "<option value='' disabled selected> Select an option </option>";
 while($data =$rows->fetch_assoc()){
    echo "<option class='col-sm-2 col-sm-2 control-label' value='$data[Id] '>$data[city_name] </option>\n";
 }
?>
   
</select>

                            </div>
                         
                              </div>
                              </div>
                          <div class="form-group">
                   
                            <label class="col-sm-2 col-sm-2 control-label">Categeory</label>
                            

              <div class="col-sm-10"> </select>

              <?php 
include 'connection.php';

 
 $q = "SELECT * FROM category";

 $rows=mysqli_query($con ,$q);

 echo  "<select class='dropdown' name='roll'>";
 echo "<option value='' disabled selected> Select an option </option>";
 while($data =$rows->fetch_assoc()){
    echo "<option class='col-sm-2 col-sm-2 control-label' value='$data[Id] '>$data[cat_name] </option>\n";
 }
?>
   
</select>

                            </div>
                         
                              </div>
                              </div>
                          <div class="form-group">
                   
                            <label class="col-sm-2 col-sm-2 control-label"> User name</label>
                            

              <div class="col-sm-10"> </select>

              <?php 
include 'connection.php';

 
 $q = "SELECT * FROM users where role_id_FK=13";

 $rows=mysqli_query($con ,$q);

 echo  "<select class='dropdown' name='roll'>";
 echo "<option value='' disabled selected> Select an option </option>";
 while($data =$rows->fetch_assoc()){
    echo "<option class='col-sm-2 col-sm-2 control-label' value='$data[Id] '>$data[user_name] </option>\n";
 }
?>
   
</select>

                            </div>
                         
                              </div>
                         
   

                          <button type="submit" name="sub">add patient</button>
                         
                              </form>   
                  </div>
          		</div><!-- col-lg-12-->      	
          	</div><!-- /row -->
</section>
</section>
<?php

include 'footer.php';
?>
