<?php
    $con = mysqli_connect("localhost", "root", "", "jongdeng_newsdb");
    $thubnail = $_POST['thubnail'];
    $title = $_POST['title'];
    $url = $_POST['url'];
    $sql_insert = "INSERT INTO `tbl_video`(`id`, `thumbnail`, `title`, `url`) VALUES (null,'".$thubnail."','".$url."','".$url."')";
    $result_insert = $con->query($sql_insert);
    
?>