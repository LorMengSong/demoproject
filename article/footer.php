<footer>
    <div class="previous">
        <a href=""><i class="fas fa-chevron-circle-left"></i> Previous</a>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-3">
                <div class="logo">
                    <a href="">
                        <?php
                             $sql_select = "SELECT * FROM `tbl_footer_site_logo`";
                             $result_select = $con->query($sql_select);
                             $row = mysqli_fetch_array($result_select);
                             echo '
                                <img src="assets/image/'.$row[1].'">
                             ';
                        ?>
                        
                    </a>
                </div>
            </div>
            <div class="col-3">
                <div class="about-us">
                    <h5 class="title">About US</h5>
                    <p>One of the most important elements in a website footer is contact information. If people like what they see on the page</p>
                </div>
            </div>
            <div class="col-3">
                <div class="address">
                    <h5 class="title">Address</h5>
                    <p># 488 BC Eo, St. Moev Seng Toung, Sangkat Toek la ork I, Khan Toul kork, Phnom Penh</p>
                </div>
            </div>
            <div class="col-3">
                <div class="follow">
                    <h5 class="title">Follow Us</h5>
                    <?php
                        $sql_select = "SELECT * FROM `tbl_social_logo` LIMIT 4";
                        $result_select = $con->query($sql_select);
                        while($row = mysqli_fetch_array($result_select)){
                            echo '
                                <a href="'.$row['url'].'" target="_blank">
                                    <img src="assets/image/'.$row['thumbnail'].'" alt="" style="border-radius: 50%;">
                                </a>
                            ';
                        }
                    ?>
                    
                    
                </div>
            </div>
        </div>
    </div>
</footer>    

    </main>
</body>
<!-- @slick slider -->
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
<!-- @theme js -->
<script src="assets/script/theme.js"></script>
<!-- @funcy box -->
<script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.umd.js"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
