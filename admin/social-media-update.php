<?php 
  include('header.php');
  include('sidebar.php');
  $id = $_GET['id'];
  $sql_select = "SELECT * FROM `tbl_social_logo` WHERE id = $id ";
  $result_select = $con->query($sql_select);
  $row = mysqli_fetch_assoc($result_select);
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
                <h5 class="m-0 text-primary">Update Post</h5>
              </div>
              <div class="card-body">
                <form method="post" enctype="multipart/form-data">

                        <div class="card-body">
                            <input type="hidden" value="<?php echo $row['id']; ?>" name="id">
                            <div class="form-group">
                                <label>Post Thumbnail</label> <small class="text-danger">( Recommend image size 35 x 35 pixel )</small>
                                <img src="../article/assets/image/<?php echo $row['thumbnail'] ?>">
                                <div class="input-group">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" name="thumbnail">
                                    <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                                </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Post URL</label>
                                <input type="text" value="<?php echo $row['url']; ?>" name="url" class="form-control" value="" placeholder="News Title">
                            </div>
                        </div>
                    
                    
                    <!-- /.card-body -->
                    <div class="card-footer">
                      <button type="submit" name="update_social_media" class="btn btn-success">Update Post</button>
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
