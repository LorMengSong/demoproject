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
          <h4 class="m-0">VIDEO</h4>
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
                    <td>id</td>
                    <td>Title</td>
                    <th>Image</th>
                    <th>URL</th>
                    <th colspan="2">Actions</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                  $sql_select = "SELECT * FROM `tbl_video` ORDER BY id DESC LIMIT 10";
                  $result_select = $con->query($sql_select);
                  while ($row = mysqli_fetch_assoc($result_select))
                    echo '
                    <tr>
                      <td>' . $row['id'] . '</td>
                      <td>
                        ' . $row['title'] . '
                      </td>
                      <td>
                        <img src="../article/assets/image/' . $row['thumbnail'] . '" alt="'.$row['thumbnail'].'" width="70px">
                      </td>
                      <td>' . $row['url'] . '</td>
                      
                      <td>
                          <input type="button" id="remove" value="REMOVE" class="btn btn-danger" name="delete" style="margin-bottom: 5px;">
                          <input type="button" id="edit" data-bs-toggle="modal" data-bs-target="#exampleModal"  value="UPDATE" class="btn btn-primary" name="update">
                      </td>
                    </tr>
                    
                    ';
                  ?>


                </tbody>
              </table>
            </div>
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">UPDATE VIDEO</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body">
                    <form action="" method="post">
                        <div class="form-group">
                          <label for="" class="form-label">Title</label>
                          <input type="text" name="" id="title" class="form-control">
                        </div>
                        <div class="form-group">
                          <input type="file" id="thunbnail" class="form-control"  name="thumbnail_profile" >
                          <label for="exampleInputFile">Choose file</label>
                        </div>
                        <div class="form-group">
                          <label for="" class="form-label">URL</label>
                          <input type="text" name="" id="url" class="form-control">
                        </div>
                    </form>
                  </div>
                  <input type="hidden" name="" id="image">
                  <input type="hidden" name="" id="id">
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" id="save_change" class="btn btn-primary">Save changes</button>
                  </div>
                </div>
              </div>
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
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<!-- ./wrapper -->
<script>
  $(document).ready(function() {
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
    //edit data
    $("body").on("click","#edit",function(){
        var id = $(this).parents("tr").find("td:eq(0)").text();
        var title = $(this).parents("tr").find("td:eq(1)").text();
        var thumbnail = $(this).parents("tr").find("td:eq(2) img").attr("alt");
        var url = $(this).parents("tr").find("td:eq(3)").text();
        $("#id").val(id);
        $("#title").val(title);
        $("#image").val(thumbnail);
        $("#url").val(url);
    });
    // @save_change
    $("#save_change").click(function(){
        const id = $("#id").val();
        const title = $("#title").val();
        const image = $("#image").val();
        const  url = $("#url").val();
        // alert(title);
        $.ajax({
          url:"update_data.php",
          method:"POST",
          data:{
            id:id,
            title:title,
            image:image,
            url:url
          },
          cache:false,
          success:function(){
            swal({
            title: "UPATE SUCCESSFULLY!",
            text: "You clicked the button!",
            icon: "success",
          });
          }
        });
    });
    // @remove-data
    $("body").on("click", "#remove", function() {
      var id = $(this).parents("tr").find("td:eq(0)").text();
      $.ajax({
        url: "delete_data.php",
        method: "POST",
        data: {
          id: id
        },
        cache: false,
        success: function() {
          swal({
            title: "DELETE SUCCESSFULLY!",
            text: "You clicked the button!",
            icon: "success",
          });
        }
      });
    });
  });
</script>