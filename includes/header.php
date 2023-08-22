<?php
    include 'config/db.php';
    date_default_timezone_set('asia/dhaka');
    $currentURL = "http";
    if(isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on') 
    {
        $currentURL .= "s";
    }
    $currentURL .= "://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
    if ($currentURL != "http://localhost/online-bidding/login.php") 
    {
        session_start();
    }
?>
<!DOCTYPE html>
<html>
<head>
    <title>Online Bidding</title>
    <title>Home page</title>
    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="bootstrap/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="bootstrap/css/owl.carousel.min.css">

    <link rel="stylesheet" type="text/css" href="includes/header.css">
    <!--<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">-->
    <link rel="stylesheet" type="text/css" href="includes/log.css">


    <!--<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" ></script>-->
<!--    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>-->
    <link rel="stylesheet" type="text/css" href="includes/style.css">
    <script src="bootstrap/js/3.3.1.slim.min.js"></script>
    <script src="bootstrap/js/popper.min.js"></script>
    <link rel="stylesheet" type="text/css" href="bootstrap/css/4.3.1.bootstrap.min.css">

    <script src="bootstrap/js/jquery-3.4.1.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <script src="bootstrap/js/main.js"></script>
    <script src="bootstrap/js/owl.carousel.min.js"></script>

</head>
<body>
<section class="header-top-area">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <a href=""><i class="fa fa-envelope"></i>OnlineBidding@gmail.com</a><span class="seperator">|</span>
                <a href=""><i class="fa fa-phone"></i>Feel Free To Contact Us</a><span class="seperator">|</span>
                <a href=""><i class="fa fa-clock-o"></i>24 hours</a>

            </div>
            <div class="col-md-6 text-center">
                <div class="search-box">
                    <form action="search.php" method="get">
                          <input type="text" name="search_word" placeholder="Search here">
                         
                          <button type="submit"><i class="fa fa-search"></i></button>
                          
                      </form> 
                </div>
            </div>
        </div>

    </div>
</section>
<section class="mainmenu-area">
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <div class="logo">
                    <h2>Online Bidding</h2>
                </div>
            </div>
            <div class="col-md-9">
                <div class="menu">
                    <ul>
                        <li><a href="index.php">Home</a></li>
                        <li><a href="gallery.php">Gallery Bidding</a></li>
                        <?php 
                            $run = $db->query("SELECT * FROM categories ORDER BY name ASC");
                            if($run->num_rows > 0) {
                                ?>
                                    <li><a href="#">Categories</a>
                                        <ul>
                                            <?php 
                                                while($category = $run->fetch_assoc()) {
                                                    ?>
                                                        <li><a href="product_category.php?category_id=<?= $category['id']; ?>"><?= $category['name']; ?></a></li>
                                                    <?php
                                                }
                                            ?>
                                        </ul>
                                    </li>
                                <?php
                            }

                        ?>

                        <?php
                            if (!isset($_SESSION['customer'])){

                            ?>
                            <li><a href="login.php">LogIn</a></li>
                            <li><a href="register.php">Register</a></li>

                        <?php 

                            }
                        ?>

                        <li><a href="about-us.php">About Us</a></li>
                        <!--<?php
                        if (isset($_SESSION['customer'])){
                            ?>
                            <a href="my-account.php"><?= $_SESSION['customer']['name']  ?></a>
                        <?php } ?>-->
                    </ul>

                    <?php
                        if (isset($_SESSION['customer'])) {
                            ?>
                            <div class="user">
                                <img src="images/images.png"  style="height: 30px;">
                                <a href="my-account.php"><?= $_SESSION['customer']['name']  ?></a>
                            </div>
                            <?php
                        }

                     ?>

                </div>
            </div>
        </div>

    </div>
</section>