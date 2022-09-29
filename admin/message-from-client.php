<?php
include('header.php');
include('sidebar.php');
?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h4 class="m-0">MESSAGES FROM USERS</h4>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->

  <!-- Main content -->
  <div class="content">
    <div class="container-fluid">
      <div class="row">
        <!-- /.col-md-6 -->
        <div class="col-lg-12">

          <div class="card card-primary card-outline">
            <div class="card-header">
              <h5 class="m-0">List Post</h5>
            </div>
            <div class="card-body">
              <table id="TableView" class="table table-bordered table-striped dataTable dtr-inline" role="grid" aria-describedby="example1_info">
                <thead>
                  <tr>
                    <td>Username</td>
                    <th>Email</th>
                    <th>Date</th>
                    <th>Phone</th>
                    <th>Address</th>
                    <th>Message</th>
                    <th colspan="2">Actions</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                    $sql_select = "SELECT * FROM `tbl_feedback` ORDER BY id DESC LIMIT 10";
                    $result_select = $con->query($sql_select);
                    while ($row = mysqli_fetch_assoc($result_select))
                    echo '
                    <tr>
                      <td>
                        '.$row['name'].'
                      </td>
                      <td>
                        '.$row['email'].'
                      </td>
                      <td>'.$row['date'].'</td>
                      <td>
                        '.$row['phone'].'
                      </td>
                      <td>
                        '.$row['address'].'
                      </td>
                      <td>
                        '.$row['message'].'
                      </td>
                      <td>
                          <form action="" method="post">
                            <input type="hidden" name="id" value="'.$row['id'].'">
                            <input type="submit" value="REMOVE" class="btn btn-danger" name="remove_message_from_client">
                          </form>
                        
                      </td>
                    </tr>
                    
                    ';
                  ?>
                  
               
                </tbody>
              </table>
            </div>
          </div>
        </div>
        <!-- /.col-md-6 -->
      </div>
      <!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->
<?php include('footer.php'); ?>
<!-- ./wrapper -->