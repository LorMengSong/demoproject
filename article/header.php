<?php
    $con = mysqli_connect("localhost", "root", "", "jongdeng_newsdb");
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>JongDeng News</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
        <!-- @style -->
        <link rel="stylesheet" href="assets/css/theme.css">
        <link rel="stylesheet" href="assets/css/home.css">
        <link rel="stylesheet" href="assets/css/news-detail.css">
        <link rel="stylesheet" href="assets/css/contact.css">
        <link rel="stylesheet" href="assets/css/search.css">
        <!-- @google font -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Kantumruy&display=swap" rel="stylesheet">
        <!-- @google font -->
        <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
        <!-- @slick slider -->
        <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
        <!-- @funcy box -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.css" />
    </head>
<body>

    <main>
        <header>
            <div class="header-top">
                <div class="container">
                    <div class="wrap-left">
                    </div>
                    <div class="wrap-right">

                    <!-- @social icon -->
                        <div class="social">
                            <?php
                                $sql_select = "SELECT * FROM `tbl_social_logo` LIMIT 3";
                                $result_select = $con->query($sql_select);
                                while($row = mysqli_fetch_array($result_select)){
                                    echo '
                                        <a href="'.$row[2].'" target="_blank"><img src="assets/image/'.$row['thumbnail'].'"></a>
                                    ';
                                }
                            ?>
                           
                            
                        </div>
                        

                    <!-- @search button -->
                        <div class="search">
                            <form action="search.php" method="get">
                                <input type="text" placeholder="Search here"><button><i class="fas fa-search"></i></button>
                            </form>
                        </div>


                    </div>
                </div>
            </div>

            
            <div class="header-bottom">
                <div class="container">

                <!-- @logo website -->
                    <div class="logo"> 
                        <?php
                            $sql_select = "SELECT * FROM `tbl_site_logo`";
                            $result_select = $con->query($sql_select);
                            $row = mysqli_fetch_array($result_select);
                            echo '
                            <a href="index.php"">
                                <img src="assets/image/'.$row[1].'">
                            </a>
                            ';
                        ?>
                        
                    </div> 

                 <!-- @navigation -->
                    <ul class="main-menu">
                        <li class="nav"><a href="index.php"" class="parent">Home</a></li>

                        <li class="nav main-sport"><a href="javascript:void(0)" class="parent">Sports</a>
                            <ul class="sub-menu-sport">
                                <li><i class="fas fa-angle-double-right"></i> <a href="category.php"> National</a></li>
                                <li><i class="far fa-angle-double-right"></i> <a href="category.php"> International</a></li>
                                <li><i class="far fa-angle-double-right"></i> <a href="category.php"> Football</a></li>
                                <li><i class="far fa-angle-double-right"></i> <a href="category.php"> Volleyball</a></li>
                            </ul>
                        </li>    
                        <li class="nav main-social"><a href="javascript:void(0)" class="parent">Social</a>
                            <ul class="sub-menu-social">
                                <li><i class="far fa-angle-double-right"></i> <a href="category.php"> National</a></li>
                                <li><i class="far fa-angle-double-right"></i> <a href="category.php"> International</a></li>
                            </ul>
                        </li>

                        <li class="nav main-enter"><a href="javascript:void(0)" class="parent">Entertianment</a>
                            <ul class="sub-menu-enter">
                                <li><i class="far fa-angle-double-right"></i> <a href="category.php"> National</a></li>
                                <li><i class="far fa-angle-double-right"></i> <a href="category.php"> International</a></li>
                            </ul>
                        </li>
                        <li calss="nav"><a href="video.php" class="parent">Video</a></li>
                        <li calss="nav"><a href="contact.php" class="parent">Contact</a></li>
                    </ul>


                </div>
            </div>
        </header>