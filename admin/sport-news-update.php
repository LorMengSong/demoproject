<?php 
  include('header.php');
  include('sidebar.php');
  $con->set_charset("utf8");
  $id = $_GET['id'];
  $sql_select = "SELECT * FROM `tbl_social_news` WHERE id=$id";
  $result_select = $con->query($sql_select);
  $row = mysqli_fetch_assoc($result_select);
  $title = $row['title'];
  $news_type = $row['news_type'];
  $category = $row['category'];
  $description = $row['description'];

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
                <form method="post" enctype="multipart/form-data">
                    <div class="card-body">
                        <div class="form-group">
                            <input type="hidden" name="id" value="<?php echo $id; ?>" id="">
                            <label>News Title</label>
                            <input type="text" name="title" value="<?php echo $title; ?>" class="form-control" placeholder="News Title">
                        </div>
                        <div class="form-group">
                            <label>Post Thumbnail</label> <small class="text-danger">( Recommend image size 255 x 200 pixel )</small>
                            <div class="input-group">
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" name="thumbnail" >
                                <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                            </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Post Banner</label> <small class="text-danger">( Recommend image size 825 x 400 pixel )</small>
                            <div class="input-group">
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" name="banner" >
                                <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                            </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>News Type</label> <small class="text-danger">( National / International News )</small>
                            <select class="form-control" name="post_type">
                                <option value="SPORT" selected>SPORT</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Post Categories</label>
                            <?php
                                if($category == "NATIONAL"){
                                  echo '
                                    <select class="form-control" name="category">
                                        <option value="NATIONAL" selected>National</option>
                                        <option value="INTERNATIONAL">International</option>
                                        <option value="FOOTBALL">Football</option>
                                        <option value="VOLLEYBALL">Volleyball</option>
                                    </select>
                                  
                                   ';
                                }else if($category == "INTERNATIONAL"){
                                  echo '
                                  <select class="form-control" name="category">
                                      <option value="NATIONAL" >National</option>
                                      <option value="INTERNATIONAL" selected>International</option>
                                      <option value="FOOTBALL">Football</option>
                                      <option value="VOLLEYBALL">Volleyball</option>
                                  </select>
                                
                                 ';
                                }else if($category == "FOOTBALL"){
                                  echo '
                                  <select class="form-control" name="category">
                                      <option value="NATIONAL" >National</option>
                                      <option value="INTERNATIONAL">International</option>
                                      <option value="FOOTBALL" selected>Football</option>
                                      <option value="VOLLEYBALL">Volleyball</option>
                                  </select>
                                
                                 ';
                                }else{
                                  echo '
                                  <select class="form-control" name="category">
                                      <option value="NATIONAL" >National</option>
                                      <option value="INTERNATIONAL">International</option>
                                      <option value="FOOTBALL">Football</option>
                                      <option value="VOLLEYBALL" selected>Volleyball</option>
                                  </select>
                                
                                 ';
                                }
                                    
                            ?>
                            
                        </div>
                        <div class="form-group">
                            <label>Post Descriptions</label>
                            <textarea class="form-control" name="description" cols="30" rows="10" placeholder="News Descriptions"><?php  echo $description; ?></textarea>
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
