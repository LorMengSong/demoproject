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
            <h1 class="m-0">VIDEO</h1>
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
                <h5 class="m-0 text-primary">Overview</h5>
              </div>
              <div class="card-body">
                <form method="post" enctype="multipart/form-data">
                    <div class="card-body">
                        <div class="form-group">
                            <label>News Title</label>
                            <input type="text" name="title" id="title" class="form-control" placeholder="News Title">
                        </div>
                        <div class="form-group">
                            <label>Post Thumbnail</label> <small class="text-danger">( Recommend image size 255 x 200 pixel )</small>
                            <div class="input-group">
                            <div class="custom-file">
                                <input type="file" id="thunbnail" class="custom-file-input" name="thumbnail_profile" >
                                <label class="custom-file-label"  for="exampleInputFile">Choose file</label>
                            </div>
                            </div>
                            <input type="hidden" name="" id="image">
                        </div>
                        <div class="form-group">
                            <label>URL LINK</label>
                            <input type="text" name="url" id="url" class="form-control" placeholder="News Title">
                        </div>
                    </div>
                    <!-- /.card-body -->
                    
                    <div class="card-footer">
                      <button type="submit" id="add-video" name="add-video" class="btn btn-primary">Publish Post</button>
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
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<?php include('footer.php'); ?>
<script>
      $(document).ready(function(){
          $("#thunbnail").change(function(){
              var form_data = new FormData();
              var files = $("#thunbnail")[0].files;
              // console.log(files);
              form_data.append('thumbnail_profile',files[0]);
              $.ajax({
                url:"save_thunbnail.php",
                method:"POST",
                data: form_data,
                cache:false,
                contentType:false,
                processData:false,
                success:function(param){
                    // console.log(param);
                    $("#image").val(param);
                }
              });

          });
          $("#add-video").click(function(){
              var title = $("#title").val();
              var thubnail  = $("#image").val();
              var url = $("#url").val();
              $.ajax({
                  url:"insert_data.php",
                  type:"POST",
                  data:{
                    title:title,
                    thubnail:thubnail,
                    url:url
                  },  
                  cache:false,
                  success:function(){
                    swal({
                        title: "INSERT SUCCESSFULLY!",
                        text: "You clicked the button!",
                        icon: "success",
                    });
                  }
              });
          });
      });
</script>