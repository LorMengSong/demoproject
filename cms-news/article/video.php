<?php include('header.php'); ?>
    <div class="content home">
        <section>
            <div class="main-banner">
                <div class="thumbnail"><img src="https://via.placeholder.com/1440x500" alt=""></div>
            </div>
        </section>
        <section>
            <div class="container">
                <div class="top-wrap">
                    <h3 class="title">VIDEO</h3>
                </div>
                <div class="bottom-wrap">
                    <div class="row">
                        <?php for($i=1; $i<=8; $i++) { ?>
                        <div class="col-3">
                            <figure>
                                <a data-fancybox="video-gallery" data-src="https://www.youtube.com/watch?v=kbCYLDAgGmU&list=RDkbCYLDAgGmU&start_radio=1">
                                    <i class="far fa-play-circle"></i>
                                    <div class="thumbnail">
                                        <img src="https://via.placeholder.com/255x200" alt="">
                                    </div>
                                    <div class="detail">
                                        <h4 class="title">Messi ​បំបែក​កំណត់​ត្រា​របស់​ Pele បាត់​ក្រោយ​ស៊ុត Hat-trick​ មុន​នេះ​</h4>
                                    </div>
                                </a> 
                            </figure>
                        </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </section>
    </div>
<?php include('footer.php'); ?>