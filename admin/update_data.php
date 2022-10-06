<?php
    $con->set_charset("utf8");
    $con = mysqli_connect("localhost", "root", "", "jongdeng_newsdb");
    $id = $_POST['id'];
    $title = $_POST['title'];
    $image = $_POST['image'];
    $url = $_POST['url'];
    $sql_update = "UPDATE `tbl_video` SET `thumbnail`='".$image."',`title`='".$title."',`url`='".$url."' WHERE id=$id";
    $result_update = $con->query($sql_update);

?>