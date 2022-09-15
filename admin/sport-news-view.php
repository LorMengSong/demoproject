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
                      <tr>
                        <td>Messi vs Ronaldo</td>
                        <td>External</td>
                        <td>Football</td>
                        <td>12-May-2021</td>
                        <td><img src="https://via.placeholder.com/70x70"></td>
                        <td><img src="https://via.placeholder.com/150x70"></td>
                        <td>Messi vs Ronaldo ............................................</td>
                        <td>
                          <a href="sport-news-update.php" class="btn btn-success">Edit</a> <a href="" class="btn btn-danger">Remove</a>
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


