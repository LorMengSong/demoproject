<?php
    $con = mysqli_connect("localhost", "root", "", "jongdeng_newsdb");
    $id = $_POST['id'];
    $sql_delete = "DELETE FROM `tbl_video` WHERE id=$id";
    $result_delete = $con->query($sql_delete);

?>