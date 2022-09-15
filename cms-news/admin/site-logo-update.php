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
            <h4 class="m-0">WEBSITE LOGO</h4>
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
                <h5 class="m-0 text-primary">Update Post</h5>
              </div>
              <div class="card-body">
                <form method="post" enctype="multipart/form-data">
                    
                        <div class="card-body">
                            <input type="hidden" value="" name="id">
                            <div class="form-group">
                                <label>Post Logo</label> <small class="text-danger">( Recommend image size 180 x 70 pixels. )</small>
                                <img src="https://via.placeholder.com/100x50">                                <div class="input-group">
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" name="site_logo">
                                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                   
                    
                    <!-- /.card-body -->
                    <div class="card-footer">
                      <button type="submit" name="update_site_logo" class="btn btn-success">Update Post</button>
                      <a href="site-logo-view.php" class="btn btn-primary">Back to view Post</a>
                    </div>
                  </form>
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
