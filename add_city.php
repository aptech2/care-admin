<?php
include 'header.php';
if(isset($_POST['city'])){  
    $city =   mysqli_real_escape_string($con, $_REQUEST['city']);
    $sql  = "INSERT INTO cities ( city_name) VALUE ('$city')";
    


    if(mysqli_query($con, $sql)){
        echo "<script>alert('inserted');window.location.href='show_city.php' </script>"  ; 
      
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
                  	  <h4 class="mb"> ADD CITIES</h4>
                      <form class="form-horizontal style-form" method="post" action="">
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Cities Name</label>
                              <div class="col-sm-10">
                                  <input type="text" name="city" class="form-control">
                              </div>
                          </div>
                        
                          
                          
                         
                         
   

                          <button type="submit" name="city">Add Cities</button>
                         
                              </form>   
                  </div>
          		</div><!-- col-lg-12-->      	
          	</div><!-- /row -->
</section>
</section>
<?php

include 'footer.php';
?>