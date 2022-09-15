<?php 
  include('header.php');
  include('sidebar.php');
  $id = $_GET['id'];
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
                <h5 class="m-0">Remove Post</h5>
              </div>
                <div class="card-body">
                <form method="post" enctype="multipart/form-data">
                    
                    <div class="card-body">
                        <input type="hidden" value="<?php echo $id; ?>" name="id">
                    <span>Are you sure to remove post id = <?php echo $id; ?></span>
                    </div>
                   
                
                    <!-- /.card-body -->
                    <div class="card-footer">
                      <button type="submit" name="remove_social_media" class="btn btn-danger">Remove Post</button>
                      <a href="social-media-view.php" class="btn btn-primary">Back to view Post</a>
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
<!-- ./wrapper -->


