<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Document</title><link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script> 
</head>
<body>
    

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
                      </form>
                            <label class="col-sm-2 col-sm-2 control-label">  user_id_Fk</label>
                            <input class="form-control" id="" type="type" >

              <div class="col-sm-10"> </select>

              <?php 
include 'connection.php';

 
// $q = "SELECT * FROM patient";

// $rows=mysqli_query($con ,$q);

// echo  "<select class='dropdown' name='roll'>";
// echo "<option value='' disabled selected> Select an option </option>";
// while($data =$rows->fetch_assoc()){
//    echo "<option class='col-sm-2 col-sm-2 control-label' value='$data[Id] '>$data[user_id_Fk] </option>\n";
// }
?>
   
</select>

                            </div>
                           <!--  <div class="dropdown">
  <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
    Dropdown button
  </button>
  <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
    <li><a class="dropdown-item" href="#">Action</a></li>
    <li><a class="dropdown-item" href="#">Another action</a></li>
    <li><a class="dropdown-item" href="#">Something else here</a></li>
  </ul>
</div> -->
                              </div>
                          </div>
                          <div class="form-group">
                          <?php 
include 'connection.php';

 
$q = "SELECT * FROM patient";

$rows=mysqli_query($con ,$q);

echo  "<select class='dropdown' name='roll'>";
echo "<option value='' disabled selected> Select an option </option>";
while($data =$rows->fetch_assoc()){
   echo "<option class='col-sm-2 col-sm-2 control-label' value='$data[Id] '>$data[user_id_Fk] </option>\n";
}
?>
   
</select>
                  </div>
                          </div>
                         
                        
                  </div>
          		</div><!-- col-lg-12-->      	
          	</div><!-- /row -->
</section>
</section>
<?php

include 'footer.php';
?>
</body>
</html>