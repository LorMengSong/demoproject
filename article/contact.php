<?php include('header.php'); ?>
    <div class="content contact">
        <section>
            <div class="main-banner">
            <div class="main-slide-banner">
                <?php
                    $sql_select = "SELECT * FROM `tbl_slide` ORDER BY id DESC";
                    $result_select = $con->query($sql_select);
                    while($row = mysqli_fetch_assoc($result_select)){
                        echo '
                        <div>
                            <img src="assets/image/'.$row['thumbnail'].'" alt="">
                        </div>
                        ';
                    }
                
                ?>
                
            </div>
            </div>
        </section>
        <section>
            <div class="container">
                <div class="top-wrap">
                    <h3 class="title">CONTACT US</h3>
                </div>
                <div class="row">
                    <div class="col-4">
                        <div class="wrap-follow">
                            <h4 class="title">FOLLOW US</h4>
                            <ul>
                                <li>
                                   <img src="assets/icon/fb.png" width="40px"> <a href="">Facebook</a>
                                </li>
                                <li>
                                   <img src="assets/icon/yt.png" width="40px"> <a href="">Youtube</a>
                                </li>
                                <li>
                                   <img src="assets/icon/ig.jfif" width="40px"> <a href="">Instagram</a>
                                </li>
                                <li>
                                   <img src="assets/icon/telegram.png" width="40px"> <a href="">Telegram</a>
                                </li>
                                <li>
                                   <img src="assets/icon/gmail-1.png" width="40px"> <a href="">Email</a>
                                </li>
                                <li>
                                   <img src="assets/icon/tiktok.png" width="40px"> <a href="">Tok Tok</a>
                                </li>
                                <li>
                                   <img src="assets/icon/phone.jpg" width="40px"> <a href="">012 333 444 / 010 232 323</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-8">
                        <div class="wrap-contact">
                            <h4 class="title">FEEDBACK TO US</h4>
                            <form action="" method="post">
                                <div class="row">
                                    <div class="col-6">
                                        <div class="label">Username</div>
                                        <input type="text" name="username" class="box" placeholder="Username" required>
                                    </div>
                                    <div class="col-6">
                                        <div class="label">Email</div>
                                        <input type="email" class="box" name="email" placeholder="Email" required>
                                    </div>
                                    <div class="col-6">
                                        <div class="label">Telephone</div>
                                        <input type="tel" class="box" name="telephone" placeholder="Telephone" required minlength="9" maxlength="10">
                                    </div>
                                    <div class="col-6">
                                        <div class="label">Address</div>
                                        <input type="text" class="box" name="address" placeholder="Address" required>
                                    </div>
                                    <div class="col-12">
                                        <div class="label">Message</div>
                                        <textarea cols="30" rows="10" name="message" placeholder="Message Here" required></textarea>
                                    </div>
                                    <div class="col-12">
                                        <div class="wrap-btn">
                                            <button type="submit" name="btn_message"><i class="fab fa-telegram-plane"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
<?php include('footer.php'); ?>
<?php
    // @btn_message
    if(isset($_POST['btn_message'])){
        // set the default timezone to use.
        date_default_timezone_set('Asia/Phnom_Penh');
        $username = $_POST['username'];
        $email = $_POST['email'];
        $phone = $_POST['telephone'];
        $address = $_POST['address'];
        $message = $_POST['message'];
        $date = date("F j, Y, g:i a");      
        $sql_insert = "INSERT INTO `tbl_feedback`(`id`, `name`, `email`, `phone`, `address`, `date`, `message`) 
                                    VALUES (null,'".$username."','".$email."','".$phone."','".$address."','".$date."','".$message."')";
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
?>