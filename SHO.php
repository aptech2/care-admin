<?php
include('header.php');
?>
      <div class="content-wrapper">
 <section class="content">
          <div class="row">
            <div class="col-xs-12">
<div class="box">
                <div class="box-header">
                  <h3 class="box-title">Hover Data Table</h3>
                </div><!-- /.box-header -->
                <div class="box-body">
                  <table id="example2" class="table table-bordered table-hover">
                    <thead>
                      <tr>
                        <th>ID</th>
                        <th>Role Name</th>
                        <th>Edit</th>
                        <th>Delete</th>
                        
                      </tr>
                    </thead>
                    <tbody>
                      <?php
                      $q="select * from role";
                      $result=mysqli_query($con,$q);
                      while($data=$result->fetch_assoc()){
                      
                      
                      ?>
                      <tr>
                        <td><?php echo $data['Id'] ?></td>
                        <td><?php echo $data['role_name'] ?></td>
                        <td><a href="edit_role.php?id=<?php echo $data['Id'] ?>"><i class="fa fa-pencil-square" aria-hidden="true"></i></a></td>
                        <td><a href="delete_role.php?id=<?php echo $data['Id'] ?>"><i class="fa fa-trash" aria-hidden="true"></i></a> </td>
                       
                      </tr>
                      <?php
                      }
                      ?>
                     
                     
                    </tbody>
                  
                  </table>
                </div><!-- /.box-body -->
              </div><!-- /.box -->
</div>
</div>
</section>
</div>
<?php

include('footer.php');


?>