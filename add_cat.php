<?php

include 'header.php';
?>
      <section id="main-content">
          <section class="wrapper">
<!-- BASIC FORM ELELEMNTS -->
<div class="row mt">
          		<div class="col-lg-12">
                  <div class="form-panel">
                  	  <h4 class="mb"> CATEGORIES</h4>
                      <form class="form-horizontal style-form"  action="catin.php" method="post">
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Categories</label>
                              <div class="col-sm-10">
                                  <input type="text" name="cat" class="form-control">
                              </div>
                          </div>
                        
                          
                          
                         
                         
   

                          <button type="submit" name="sub">Add Categories</button>
                         
                              </form>   
                  </div>
          		</div><!-- col-lg-12-->      	
          	</div><!-- /row -->
</section>
</section>
<?php

include 'footer.php';
?>