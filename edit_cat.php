<?php

include 'header.php';


$idd=$_GET['id'];
$a="select * from category where Id='$idd'";
$b=mysqli_query($con,$a);
$c=mysqli_fetch_assoc($b);


if(isset($_POST['sub'])){
$n=$_POST['cat'];
$q="UPDATE category SET cat_name='$n' where Id='$idd'";
$result = mysqli_query($con,$q);
if($result){
echo "<script>alert('updated');</script>";
echo "<script>window.location.href='show_category.php';</script>";
}

}
?>



 
 <section id="main-content">
          <section class="wrapper">
<!-- BASIC FORM ELELEMNTS -->
<div class="row mt">
          		<div class="col-lg-12">
                  <div class="form-panel">
                  	  <h4 class="mb"> Edit CATEGORIES</h4>
                      <form class="form-horizontal style-form"  action="" method="post">
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Categories</label>
                              <div class="col-sm-10">
                                  <input type="text" name="cat" class="form-control" value="<?php echo $c['cat_name']?>">
                              </div>
                          </div>
                        
                          
                          
                         
                         
   

                          <button type= "submit" name="sub">Add Categories</button>
                         
                              </form>   
                  </div>
          		</div><!-- col-lg-12-->      	
          	</div><!-- /row -->
</section>
</section>
<?php

include 'footer.php';
?>