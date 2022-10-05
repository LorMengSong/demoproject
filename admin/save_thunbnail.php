<?php
    
    $filename = rand(1,9999)."-".$_FILES['thumbnail_profile']['name'];
    $pathupload = '../article/assets/image/'.$filename;
    move_uploaded_file($_FILES['thumbnail_profile']['tmp_name'],$pathupload);
    echo $filename;
    
?>