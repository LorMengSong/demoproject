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
// @update_social_media
function update_social_media(){
    global $con;
    if(isset($_POST['update_social_media'])){
        $id = $_POST['id'];
        $filename = rand(1,999999)."-".$_FILES['thumbnail']['name'];
        // echo $filename;
        move_uploaded_file($_FILES['thumbnail']['tmp_name'],"../article/assets/image/".$filename);
        $url = $_POST['url'];
        $sql_update = "UPDATE `tbl_social_logo` SET `thumbnail`='".$filename."',`url`='".$url."' WHERE id=$id ";
        $result_update = $con->query($sql_update);
        if($result_update == TRUE){
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
update_social_media();
// @remove_social_media
function remove_social_media(){
    global $con;
    if(isset($_POST['remove_social_media'])){
        $id = $_POST['id'];
        $sql_delete = "DELETE FROM `tbl_social_logo` WHERE id=$id";
        $result_delete = $con->query($sql_delete);
        if($result_delete == TRUE){
            echo '
            <script>
            $(document).ready(function() {
                swal({
                    title: "DELETE SUCCESSFULLY!",
                    text: "You clicked the button!",
                    icon: "success",
                });
            });
        </script>
            ';
        }
    }
}
remove_social_media();
// @add_slide_banner
function add_slide_banner(){
    global $con;
    if(isset($_POST['add_slide_banner'])){
        $filename = rand(1,999999)."-".$_FILES['slide_banner']['name'];
        echo $filename;
        // echo $filename;
        move_uploaded_file($_FILES['slide_banner']['tmp_name'],"../article/assets/image/".$filename);
        $sql_add = "INSERT INTO `tbl_slide` VALUES (null,'".$filename."')";
        $result_add = $con->query($sql_add);
        if($result_add == TRUE){
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
add_slide_banner();
?>
