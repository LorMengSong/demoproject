<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<?php
$con = mysqli_connect("localhost", "root", "", "jongdeng_newsdb");
session_start();
if (!$_SESSION['password']) {
    header('location:login.php');
}
// @update_site_logo
function update_site_logo()
{
    global $con;
    if (isset($_POST['update_site_logo'])) {
        $filename = rand(1, 99999) . "-" . $_FILES['site_logo']['name'];
        $pathupload = "../article/assets/image/" . $filename;
        move_uploaded_file($_FILES['site_logo']['tmp_name'], $pathupload);
        $sql_update = "UPDATE `tbl_site_logo` SET `thumbnail`='" . $filename . "'";
        $result_update = $con->query($sql_update);
        if ($result_update == TRUE) {
            echo '
            <script>
                $(document).ready(function() {
                    swal({
                        title: "UPDATE SUCCESSFULLY!",
                        text: "You clicked the button!",
                        icon: "success",
                    });
                });
            </script>
                   
                ';
        }
    }
}
update_site_logo();
// @update_footer_site_logo
function update_footer_site_logo(){
    global $con;
    if(isset($_POST['update_footer_site_logo'])){
        $filename = rand(1, 99999) . "-" . $_FILES['site_logo']['name'];
        $pathupload = "../article/assets/image/" . $filename;
        move_uploaded_file($_FILES['site_logo']['tmp_name'], $pathupload);
        $sql_update = "UPDATE `tbl_footer_site_logo` SET `thumbnail`='" . $filename . "'";
        $result_update = $con->query($sql_update);
        if ($result_update == TRUE) {
            echo '
            <script>
                $(document).ready(function() {
                    swal({
                        title: "UPDATE SUCCESSFULLY!",
                        text: "You clicked the button!",
                        icon: "success",
                    });
                });
            </script>
                   
                ';
        }
    }
}
update_footer_site_logo();
// @add_social_media
function add_social_media(){
    global $con;
    if(isset($_POST['add_social_media'])){
        $filename = rand(1, 99999) . "-" . $_FILES['thumbnail']['name'];
        $pathupload = "../article/assets/image/" . $filename;
        move_uploaded_file($_FILES['thumbnail']['tmp_name'], $pathupload);
        $url = $_POST['url'];
        $sql_insert = "INSERT INTO `tbl_social_logo` (`id`, `thumbnail`, `url`) VALUES (null,'".$filename."','".$url."')";
        $result_insert = $con->query($sql_insert);
        if($result_insert == TRUE){
            echo '
                <script>
                $(document).ready(function() {
                    swal({
                        title: "INSERT SUCCESSFULLY!",
                        text: "You clicked the button!",
                        icon: "success",
                    });
                });
            </script>
            ';
        }
    }
}
add_social_media();
?>
