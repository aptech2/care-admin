<?php
include('header.php');

                    $idd=$_GET['id'];
                    $a="select * from cities where Id='$idd'";
                    $b=mysqli_query($con,$a);
                    $c=mysqli_fetch_assoc($b);
                 
                    
if(isset($_POST['sub'])){
$n=$_POST['city'];
$q="UPDATE cities SET city_name='$n' where ID='$idd'";
$result = mysqli_query($con,$q);
if($result){
  echo "<script>alert('updated');</script>";
echo "<script>window.location.href='show_city.php';</script>";
}

}
?>

<section id="main-content">
          <section class="wrapper">
<!-- BASIC FORM ELELEMNTS -->
<div class="row mt">
          		<div class="col-lg-12">
                  <div class="form-panel">
                  	  <h4 class="mb"> EDIT CITIES</h4>
                      <form class="form-horizontal style-form" method="post" action="">
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Cities Name</label>
                              <div class="col-sm-10">
                                  <input type="text" name="city" class="form-control" value="<?php echo $c['city_name']?>">
                              </div>
                          </div>
                        
                          
                          
                         
                         
   

                          <button type="submit" name="sub">EDIT Cities</button>
                         
                              </form>   
                  </div>
          		</div><!-- col-lg-12-->      	
          	</div><!-- /row -->
</section>
</section>
<?php

include('footer.php');


?>