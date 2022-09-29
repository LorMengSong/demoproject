   <!-- @header -->
  <?php include('header.php'); ?>


   <!-- @detail news -->
    <div class="content news-detail">
        <section>
            <div class="container">
                <div class="bottom-wrap">
                    <div class="row">
                        <?php
                            $id = $_GET['id'];
                            $con->set_charset("utf8");
                            $sql_select = "SELECT * FROM `tbl_social_news` WHERE id=$id";
                            $result_select = $con->query($sql_select);
                            $row = mysqli_fetch_assoc($result_select);
                            echo '
                            <div class="col-9">
                            <div class="main-news">
                                <div class="thumbnail">
                                <img src="assets/image/'.$row['banner'].'"> 
                                </div>
                                <div class="detail">
                                    <h4 class="title">'.$row['title'].'</h4>
                                    <div class="border"></div>
                                    <div class="date"><i class="far fa-clock"></i>'.$row['date'].'</div>
                                    <div class="border"></div>
                                    <div class="description"> 
                                        '.$row['description'].'
                                    </div>
                                </div>
                            </div>
                            </div>
                            ';
                        ?>
                       
                        <div class="col-3">
                            <div class="relate-news">
                                <h4 class="main-title">Related News</h4>
                                <div class="row">
                                    <?php
                                        $con->set_charset("utf8");
                                        $sql_select = "SELECT * FROM `tbl_social_news` ORDER BY id DESC LIMIT 2";
                                        $result_select = $con->query($sql_select);
                                        while($row = mysqli_fetch_assoc($result_select)){
                                            echo '
                                            <div class="col-12">
                                            <figure>
                                                <a href="news-detail.php?id='.$row['id'].'" target="_blank">
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
                    </div>
                </div>
            </div>
        </section>
    </div>


    <!-- @footer -->
<?php include('footer.php'); ?>