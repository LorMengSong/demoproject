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
            <h4 class="m-0">SOCIAL MEDIA</h4>
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
                        <th>Thumbnail</th>
                        <th>URL</th>
                        <th colspan="2">Actions</th>
                      </tr>
                    </thead>
                    <tbody>
                    
                        <tr>
                          <td>
                            <img src="assets/image/266-facebook.jpg">
                          </td>
                          <td>
                              www.facebook.com
                          </td>
                          <td>
                            <a href="social-media-update.php" class="btn btn-success">Edit</a> <a href="social-media-delete.php" class="btn btn-danger">Remove</a>
                          </td>
                        </tr>
                    
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


