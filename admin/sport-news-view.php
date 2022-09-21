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
                <h5 class="m-0">List Post</h5>
              </div>
              <div class="card-body">
                  <table id="TableView" class="table table-bordered table-striped dataTable dtr-inline" role="grid" aria-describedby="example1_info">
                    <thead>
                      <tr>
                        <th>News Title</th>
                        <th>News Type</th>
                        <th>News Categories</th>
                        <th>News Post Date</th>
                        <th>News Thumbnail</th>
                        <th>News Banner</th>
                        <th>News Descriptions</th>
                        <th colspan="2">Actions</th>
                      </tr>
                     
                    </thead>
                    <tbody>
                      <?php
                          $con->set_charset("utf8");
                          $sql_select = "SELECT * FROM `tbl_social_news` WHERE news_type='SPORT' ORDER BY ID DESC";
                          $result_select = $con->query($sql_select);
                          while($row = mysqli_fetch_assoc($result_select)){
                            echo '
                            <tr>
                              <td style="overflow: hidden;
                                      width:112px;
                                      height:75px;    
                                      line-hight: 40px;
                                      text-overflow: ellipsis;
                                      display: -webkit-box;
                                      -webkit-line-clamp: 2; /* number of lines to show */
                                      -webkit-box-orient: vertical;">
                              '.$row['title'].'</td>
                              <td>'.$row['news_type'].'</td>
                              <td>'.$row['category'].'</td>
                              <td>'.$row['date'].'</td>
                              <td><img src="../article/assets/image/'.$row['thumbnail'].'" width="70px"></td>
                              <td><img src="../article/assets/image/'.$row['banner'].'" width="150px"></td>
                              <td style="overflow: hidden;
                                      width:150px;
                                      height:75px;
                                      line-hight: 45px;
                                      text-overflow: ellipsis;
                                      display: -webkit-box;
                                      -webkit-line-clamp: 2; /* number of lines to show */
                                      -webkit-box-orient: vertical;">
                                      '.$row['description'].'</td>
                              <td>
                                <a href="sport-news-update.php?id='.$row['id'].'" class="btn btn-success">Edit</a> 
                                <form action="" method="post" style="float:left; margin-right:5px">
                                    <input type="hidden" name="id" value="'.$row['id'].'">
                                    <input type="submit" value="remove" class="btn btn-danger" name="remove_social_news">
                                </form>
                              </td>
                            </tr>
                            ';
                          }
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


