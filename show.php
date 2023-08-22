<?php
    include 'includes/header.php';

    if (isset($_GET['id'])){
        $id = $_GET['id'];
        $sql = "SELECT * FROM products WHERE `id` = '$id'";
        $data = $db->query($sql)->fetch_assoc();
        if ($data == false){
            die('404');
        }
    }
?>

<style>
   
.newarrival{
	background: green;
	width: 50px;
	color: white;
	font-size: 12px;
	font-weight: bold;
}
.col-md-7 h2{
	color: #555;
}
    .w-100 {
    width: 92%!important;
    height: 334px;
}
.price{
	color: #FE980F;
	font-size: 22px;
	font-weight: bold;
	padding-top: 5px;
}
.show-area{
	margin-top: 100px;
}
.show-btn{
	font-size: 15px;
	font-weight: bold;
	padding: 1.375rem 3.75rem;
	background: green;
	color: white;
}
.description{
	font-size: 20px;
	
}
.time{
	font-size: 20px;
}

</style>
	<div class="container show-area">
		<div class="row">
			<div class="col-md-5">
				<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
				  <div class="carousel-inner">
                      <?php
                        $images = unserialize($data['images']);

                        foreach ($images as $key => $value){
                      ?>
                        <div class="carousel-item <?php if ($key == 0){ echo 'active'; } ?>">
                          <img src="admin/<?= $value ?>" class="d-block w-100" alt="...">
                        </div>

                      <?php } ?>
				  </div>
				  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
				    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
				    <span class="sr-only">Previous</span>
				  </a>
				  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
				    <span class="carousel-control-next-icon" aria-hidden="true"></span>
				    <span class="sr-only">Next</span>
				  </a>
				</div>
			</div>
			<div class="col-md-7">
				<p class="newarrival text-center">NEW</p>
				<h2>Name: <?= $data['product_name']?></h2>
				<p class="description">Description: <?= $data['description']?></p>
				<p class="countDownTime" style="font-size: 22px;"></p>
                 <p class="expire_time" data-ending_time="<?= $data['ending_time']; ?>" data-starting_time="<?= $data['starting_time']; ?>"></p>
                        
				<p class="price">BDT <?= $data['starting_price']?></p>
				<a href="bid.php?id=<?= $data['id']?>" class="show-btn">Get Started</a>
				
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
                        $(_self).siblings('.btn').attr('href', '#').removeClass('btn-success').addClass('btn-danger').removeClass('btn-success').addClass('btn-warning');
                    } else {
                         $(_self).siblings('.countDownTime').html(days + 'd ' + hours + ' : ' + minutes + ' : ' + seconds );
                    }
                   

                 }, 1000);
            });
        });
    </script>
		
	</div>







<?php include "includes/footer.php";?>


