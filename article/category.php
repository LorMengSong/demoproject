   <!-- @header -->
<?php include('header.php'); ?>
<?php
    $news_type = $_GET['news_type'];
    $category = $_GET['category'];
    // echo $news_type."-".$category;
?>

    <div class="content home">

      <!-- @slide
        <section>
            <div class="main-banner">
                <div class="thumbnail"><img src="https://via.placeholder.com/1440x500" alt=""></div>
            </div>
        </section> -->

        <!-- @select content -->
        <section>
            <div class="container">
                <div class="top-wrap">
                    <h3 class="title text-center"><?php echo $news_type." AND ".$category; ?></h3>
                </div>
                <div class="bottom-wrap">
                    <div class="row">
                        <?php
                            $con->set_charset('utf8');
                            $sql_select = "SELECT * FROM `tbl_social_news` WHERE news_type='".$news_type."' AND category='".$category."' ORDER BY id DESC LIMIT 20";
                            $result_select = $con->query($sql_select);
                            while($row = mysqli_fetch_assoc($result_select)){
                                echo '
                                <div class="col-3">
                                <figure>
                                    <a href="">
                                        <div class="thumbnail">
                                            <img src="assets/image/'.$row['thumbnail'].'" alt="">
                                        </div>
                                        <div class="detail">
                                            <h4 class="title">'.$row['title'].'</h4>
                                            <div class="border"></div>
                                            <div class="date"><i class="far fa-clock"></i> '.$row['date'].'</div>
                                            <div class="border"></div>
                                            <div class="description">
                                                '.$row['description'].'
                                            </div>
                                        </div>
                                    </a> 
                                </figure>
                                </div>
                                ';
                            }

                        ?>
                       
                    </div>
                </div>
            </div>
        </section>


    </div>


    <!-- @footer -->
<?php include('footer.php'); ?>