<?php
include 'connection.php';
include 'header.php';
?>
 <section id="main-content">
 
          <section class="wrapper">
          <div class="col-md-12 mt">
	                  	<div class="content-panel">   <h2>Doctors</h2>
	                          <table class="table table-hover">
	                  	  	  <!-- <h4><i class="fa fa-angle-right"></i> Hover Table</h4> -->
	                  	  	  <hr>
	                              <thead>
	                              <tr>
	                                  <th>Id</th>
	                                  <th>Doctor Name</th>
                                      <th>Experience</th>
                                      <th>Contact</th>
                                      <th>User_Id_FK</th>
                                      <th>Category_Id_FK</th>
                                      <th>City_Id_FK</th>
                                       <th>Doctor Image</th>
	                                   <th>Edit</th>
                                      <th>Delete</th>
	                              </tr>
	                              </thead>
	                              <tbody>
                                    <?php
                             $sql = "SELECT * FROM `doctor`";
                             $result = $con->query($sql);

                                    ?>
                                    
<?php
if($result->num_rows > 0) {

    while ($row = $result->fetch_assoc()

    )
    {

        ?>

	                              <tr>

<td><?php echo $row['Id'];?></td>
<td><?php echo $row['doc_name'];?></td>
<td><?php echo $row['experience'];?></td>
<td><?php echo $row['contact'];?></td>
<td><?php echo $row['user_id_FK'];?></td>
<td><?php echo $row['cat_id_FK'];?></td>
<td><?php echo $row['city_id_FK'];?></td>
<td><?php echo $row['doc_img'];?></td>

<td> <a href="#">delete<i class="fa fa-trash-o "></i></a></td>
<td><a href="#">edit<i class="fa fa-pencil"></i></a></td>

	                             
</tr>
<?php

    }
}

?>
	                             
	                              </tbody>
	                          </table>
	                  	  </div><! --/content-panel -->
	                  </div><!-- /col-md-12 -->
				</div><!-- row -->

		</section><! --/wrapper -->
      </section>/MAIN CONTENT -->

      <!--main content end-->
      <!--footer start-->
      <footer class="site-footer">
          <div class="text-center">
              2014 - Alvarez.is
              <a href="basic_table.html#" class="go-top">
                  <i class="fa fa-angle-up"></i>
              </a>
          </div>
      </footer>
      <!--footer end-->
  </section>

    <!-- js placed at the end of the document so the pages load faster -->
    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script class="include" type="text/javascript" src="assets/js/jquery.dcjqaccordion.2.7.js"></script>
    <script src="assets/js/jquery.scrollTo.min.js"></script>
    <script src="assets/js/jquery.nicescroll.js" type="text/javascript"></script>


    <!--common script for all pages-->
    <script src="assets/js/common-scripts.js"></script>

    <!--script for this page-->
    
  <script>
      //custom select box

      $(function(){
          $('select.styled').customSelect();
      });

  </script>

  </body>
</html>