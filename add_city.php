<?php

include 'header.php';
?>
      <section id="main-content">
          <section class="wrapper">
<!-- BASIC FORM ELELEMNTS -->
<div class="row mt">
          		<div class="col-lg-12">
                  <div class="form-panel">
                  	  <h4 class="mb"> ADD CITIES</h4>
                      <form class="form-horizontal style-form" method="post" action="cityin.php">
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Cities Name</label>
                              <div class="col-sm-10">
                                  <input type="text" name="city" class="form-control">
                              </div>
                          </div>
                        
                          
                          
                         
                         
   

                          <button type="submit" name="sub">Add Cities</button>
                         
                              </form>   
                  </div>
          		</div><!-- col-lg-12-->      	
          	</div><!-- /row -->
</section>
</section>
<?php

include 'footer.php';
?>