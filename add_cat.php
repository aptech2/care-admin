<?php

include 'header.php';
if(isset($_POST['sub'])){  
$cat =   mysqli_real_escape_string($con, $_REQUEST['cat']);

$sql  = "INSERT INTO category (cat_name) VALUES ('$cat')";

if(mysqli_query($con, $sql)){
    echo "<script>alert('inserted');window.location.href='show_category.php' </script>"  ; 
  
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
                  	  <h4 class="mb"> CATEGORIES</h4>
                      <form class="form-horizontal style-form"  action="" method="post">
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