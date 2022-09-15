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
            <h1 class="m-0">SPORT NEWS</h1>
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
                <form method="post">
                    <div class="card-body">
                        <div class="form-group">
                            <label>News Title</label>
                            <input type="text" class="form-control" placeholder="News Title">
                        </div>
                        <div class="form-group">
                            <label>Post Date</label>
                            <input type="date" class="form-control" placeholder="News Title">
                        </div>
                        <div class="form-group">
                            <label>Post Thumbnail</label> <small class="text-danger">( Recommend image size 300 x 300 pixel )</small>
                            <div class="input-group">
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" >
                                <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                            </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Post Banner</label> <small class="text-danger">( Recommend image size 700 x 400 pixel )</small>
                            <div class="input-group">
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" >
                                <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                            </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Post Type</label> <small class="text-danger">( Internal / External News )</small>
                            <select class="form-control">
                                <option value="">Internal</option>
                                <option value="">External</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Post Categories</label>
                            <select class="form-control">
                                <option value="">Football</option>
                                <option value="">Volleyball</option>
                                <option value="">Others</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Post Descriptions</label>
                            <textarea class="form-control" cols="30" rows="10" placeholder="News Descriptions"></textarea>
                        </div>
                    </div>
                    <!-- /.card-body -->
    
                    <div class="card-footer">
                      <button type="submit" class="btn btn-success" name="edit_sport_news">Edit Post</button>
                      <a href="sport-news-view.php"" class="btn btn-primary">Back to List View</a>
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
