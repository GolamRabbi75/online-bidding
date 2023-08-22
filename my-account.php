<?php
   include 'includes/header.php';
    if (!isset($_SESSION['customer'])){
        header('Location:login.php');
        
    }
       $id = $_SESSION['customer']['id'];

    

    $sql = "SELECT * FROM customers where id='$id'";
    
    $row = $db->query($sql);
    $data = $row->fetch_assoc();

?>
<link rel="stylesheet" type="text/css" href="bootstrap/css/4.0.0.bootstrap.min.css">
<script src="bootstrap/js/3.2.1jquery.min.js"></script>
<script src="bootstrap/js/4.0.0.bootstrap.min.js"></script>
<!--<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>-->
<!------ Include the above in your HEAD tag ---------->

<head>
  <title></title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
  <!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <!-<script src="bootstrap/js/3.3.1.jquery.min.js"></script>-->
  
  <!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>-->
    <style>
        .pay_btn .label-success{
            cursor: pointer;
        }
    </style>
</head>


<hr>
<div class="container bootstrap snippet">
    <div class="row">
      <div class="col-sm-10"><h1>User Profile</h1></div>
      
    </div>
    <div class="row">
      <div class="col-sm-3"><!--left col-->
         
          <ul class="list-group">
            <li class="list-group-item text-muted">Activity <i class="fa fa-dashboard fa-1x"></i></li>
            <li class="list-group-item text-right"><span class="pull-left"><strong>Profile</strong></span></li>
            <li class="list-group-item text-right"><span class="pull-left"><strong>Activity</strong></span> </li>
            <li class="list-group-item text-right"><span class="pull-left"><strong>Bids</strong></span></li>
            <li class="list-group-item text-right"><span class="pull-left"><strong>Won List</strong></span> </li>
          </ul> 
               
         
          
        </div><!--/col-3-->
      <div class="col-sm-9">
            <ul class="nav nav-tabs">
                <li class="active"><a data-toggle="tab" href="#home">Home</a></li>
                <!--<li><a data-toggle="tab" href="#messages">Edit Profile</a></li>-->
                <li><a data-toggle="tab" href="#myBid">My Bid</a></li>
                <li><a href="logout.php">Logout</a></li>
              </ul>
              
          <div class="tab-content">
            <div class="tab-pane active" id="home">
               <div class="box-body no-padding">
                    <table class="table table-condensed">
                      <thead>
                        <tr>
                            
                            <th>Name</th>
                            <th>Email</th>
                            <th>Address</th>
                            <th>Number</th>
                            
                            <th>Password</th>
                            
                            
                        </tr>
                      </thead>
                        <tbody>
                      
                             <tr>
                            
                            <td><?= $data['name'] ?></td>
                            <td><?= $data['email'] ?></td>
                            <td><?= $data['address'] ?></td>
                            <td><?= $data['number'] ?></td>
                            
                            <td><?= $data['password'] ?></td>
                            
                            
                        </tr>
                       
                        </tbody></table>
                </div>
  
              
             </div>

             <div class="tab-pane" id="myBid">
                <table class="table">
                  <tr>
                    <th>Name</th>
                    <th>Price</th>
                    <th>Payment</th>
                    <th>Action</th>
                  </tr>
                
                <?php
                  $query = "SELECT bids.id, bids.product_id, MAX(bids.price) as price, products.id as pid, products.product_name, products.status as status FROM bids 
                            JOIN products ON bids.product_id=products.id WHERE bids.customer_id='$id' GROUP BY product_id ";


                  $row = $db->query($query);

                  while ($bid = $row->fetch_assoc()) {
                      $payment_details = $db->query("SELECT * FROM payment_details WHERE bid_id = '$bid[id]'")->fetch_assoc();
                    ?>
                      <tr>
                        <td><?= $bid['product_name']; ?></td>
                        <td><?= $bid['price']; ?></td>
                        <td>
                            <?php
                                if ($payment_details) {
                                ?>
                                    <label class="label label-success">Paid</label>
                                <?php
                                } else {
                                ?>
                                    <label class="label label-danger">Unpaid</label>
                                <?php
                                }
                            ?>
                        </td>
                        <td>
                          <?php
                          $product_id = $bid['pid'];
                          $sql = "SELECT * FROM bids WHERE product_id = '$product_id' ORDER BY id DESC LIMIT 1";
                           $max_bid =  $db->query($sql)->fetch_assoc();
                            if ($bid['status'] == 1) {
                            ?>
                             <label class="label label-primary">Pending</label> 
                           <?php } ?>
                            <?PHP
// echo  $bid['price'] . $max_bid['price'];

                              if ($bid['status'] == 2  && $bid['price'] >= $max_bid['price']) {
                              ?>
                               <label  class="label label-success">WON</label>
                                  <?php
                                  if (!$payment_details) {
                                      ?>
                                      <a href="money.php?bid=<?php echo $bid['id']?>" class="pay_btn"><label class="label label-success">Pay</label></a>
                                      <?php
                                  }
                                  ?>

                           <?php } ?>

                            <?php
                             if ($bid['status'] == 2 && $bid['price'] < $max_bid['price']) {
                              ?>
                               <label class="label label-danger">CLOSED</label> 
                           <?php } ?>

                           <!--<?php 
                              if ($bid['status'] == 1 ) {
                                echo 'pending';
                              } else if ($bid['status'] == 2){
                                $product_id = $bid['product_id'];
                                  $sql = "SELECT * FROM bids WHERE product_id = '$product_id' ORDER BY id DESC LIMIT 1";
                                  $max_bid =  $db->query($sql)->fetch_assoc();
                                  if ($max_bid['customer_id'] == $id) {
                                    echo 'won';
                                  } else {
                                    echo 'closed';
                                  }
                              }
                            ?>-->


                        </td>
                      </tr>
                    <?php
                  }

                ?>
                </table>
              </div><!--/tab-pane-->
          </div><!--/tab-content-->

        </div><!--/col-9-->
    </div><!--/row-->
  </div><!--/row-->


    

<?php include 'includes/footer.php'?>
