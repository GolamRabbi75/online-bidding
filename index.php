<?php
    session_start();
    include 'config/db.php';
    $close_update = "UPDATE products SET status='2' WHERE ending_time < NOW() AND status != '2'";
   $db->query($close_update);
   $start_update = "UPDATE products SET status='1' WHERE starting_time < NOW() AND status = '0'";
   $db->query($start_update);
   date_default_timezone_set('asia/dhaka');
?>
<!DOCTYPE html>
<html>
<head>
	<title>Home page</title>
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="bootstrap/css/4.3.1.bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="bootstrap/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="bootstrap/css/owl.carousel.min.css">

	<link rel="stylesheet" type="text/css" href="includes/home.css">
    <link rel="stylesheet" type="text/css" href="includes/header.css">
	<!--<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">-->


    <!--<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" ></script>
<!--    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>-->
    <link rel="stylesheet" type="text/css" href="includes/style.css">
    <script src="bootstrap/js/3.3.1.slim.min.js"></script>
    <script src="bootstrap/js/popper.min.js"></script>

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
<section class="slider-area">
	<div class="slider-item owl-carousel">
		<div class="single-slider bg-slider-1">
			<div class="container">
				<div class="row">
					<div class="col-md-6 col-md-offset-5">
						<div class="slider-content">
							<h2></h2>
							<p></p>
							<!--<a href="" class="slider-btn">more reading</a>-->
						</div>
					</div>
					</div>
			</div>
		</div>
			<div class="single-slider bg-slider-2">
				<div class="container">
					<div class="row">
						<div class="col-md-6 col-md-offset-5">
							<div class="slider-content">
								<h2></h2>
								<p></p>
								<!--<a href="" class="slider-btn">more reading</a>-->
							</div>
						</div>
					</div>
				</div>
			</div>
	</div>
	
</section>


    <div class="container selected">
        <div class="row">
            <?php
                $sql = "SELECT * FROM products ORDER BY `id` DESC LIMIT 8";
                $row = $db->query($sql);

               while ($data= $row->fetch_assoc()){

                $current_time = strtotime(date('Y-m-d h:i:s'));
                $start = strtotime($data['starting_time']);
                $end = strtotime($data['ending_time']);

            ?>

            <div class="col-md-3">
                <!--bootstrap card-->
                <div class="card" style="width: 22rem;">
                    <a href="show.php?id=<?= $data['id']?>"><img src="admin/<?= unserialize($data['images'])[0]?>" class="card-img-top" alt="..."></a>
                    <div class="card-body text-center">
                        <h5 class="card-title"><?= $data['product_name']?></h5>
                        <p class="card-text">Price: <?= $data['starting_price']?></p>
                       <p class="countDownTime"></p>
                        <p class="expire_time" data-ending_time="<?= $data['ending_time']; ?>" data-starting_time="<?= $data['starting_time']; ?>"></p>

                        <?php
                            if(($current_time - $start) < 0) {

                                echo '<a href="#" class="btn btn-warning" data-toggle="modal" data-target="#myModal">Bid Not Start</a>';
                            } else if (($end - $current_time) < 0) {
                               echo '<a href="bid.php?id='.$data['id'].'" class="btn btn-danger">Bid Closed</a>';
                            } else {
                                echo '<a href="show.php?id='.$data['id'].'" class="btn btn-success">Bid Here</a>';
                            }
                        ?>
                        <!--<div class="modal" id="closedBidModal">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h3 class="modal-title">Bid Closed</h3>
                                        <button type="button" class="close" data-dismiss="modal" arial-label="Close"><span aria-hidden="true">&times;</span>   
                                        </button>
                                        
                                    </div>
                                    <div class="modal-body">
                                        <p>You can't Bid!!</p>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" style="width: 73px;" class="btn btn-secondary"data-dismiss="modal">Close</button>
                                    </div>
                                </div>
                            </div>
                        </div>-->
                    </div>
                </div>
            </div>
            <?php  } ?>
        </div>
    </div>
    
     <script type="text/javascript">
        $(document).ready(function () {
            $('.expire_time').each(function() {
                var _self = $(this);
                var ending_time = $(this).data('ending_time');
                var starting_time = $(this).data('starting_time');
                var now = new Date().getTime();

                var check_start = new Date(starting_time).getTime();
                var check_end = new Date(ending_time).getTime();
                var target_time = ending_time;

                if (now < check_start) {
                    target_time = starting_time;
                }


                var countDownTime = new Date(target_time).getTime();
                 //var starting_time = $(this).data('starting_time');
                //var inTime = new Date(starting_time).getTime();

                 var x = setInterval(function() {
                    var now = new Date().getTime();
                    var distance = countDownTime - now;
                    //var distance = inTime - now;

                    var days = Math.floor(distance/(1000*60*60*24));
                    var hours = Math.floor((distance % (1000*60*60*24)) / (1000*60*60));
                    var minutes = Math.floor((distance % (1000*60*60)) / (1000*60));
                    var seconds = Math.floor((distance % (1000*60)) / (1000));

                    if (distance < 0) {
                        clearInterval(x);
                         $(_self).siblings('.countDownTime').html('Expired');
                        $(_self).siblings('.btn').removeClass('btn-success').addClass('btn-danger').html('Bid Closed');
                    } else {
                         $(_self).siblings('.countDownTime').html(days + 'd ' + hours + ' : ' + minutes + ' : ' + seconds );
                    }
                   

                 }, 1000);
            });
        });
    </script>
</body>
</html>


<?php include 'includes/footer.php';?>




