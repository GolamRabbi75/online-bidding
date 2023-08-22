<?php
    $page_header = "Dashboard";
    include 'includes/header.php';
?>



    <!-- Main content -->
       <div class="row">
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-aqua"><i class="ion ion-ios-cart-outline"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Products</span>
              <span class="info-box-number">
                <?php 
                  $run = $db->query("SELECT count(id) as product_number FROM products");
                  $product = $run->fetch_assoc();
                  echo $product['product_number']                  
                ?>
              </span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-red"><i class="ion-flame"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Bids</span>
              <span class="info-box-number">
                <?php 
                  $run = $db->query("SELECT count(id) as bid_number FROM bids");
                  $bid_number = $run->fetch_assoc();
                  echo $bid_number['bid_number']                  
                ?>
              </span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->

        <!-- fix for small devices only -->
        <div class="clearfix visible-sm-block"></div>

        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-green"><i class="ion-eye"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Winner</span>
              <span class="info-box-number">
                <?php 
                  $run = $db->query("SELECT count(id) as winner FROM products WHERE status='2'");
                  $winner = $run->fetch_assoc();
                  echo $winner['winner']                  
                ?>
              </span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-yellow"><i class="ion ion-ios-people-outline"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Members</span>
              <span class="info-box-number"><?php 
                  $run = $db->query("SELECT count(id) as member FROM customers");
                  $members = $run->fetch_assoc();
                  echo $members['member']                  
                ?></span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->

      <div class="row">
        <div class="col-md-6">
          <div class="box box-success">
            <div class="box-header">
              <h3 class="box-title">Product Bidders</h3>
            </div>
            <div class="box-body">
              <table class="table table-bordered">
                <thead>
                  <tr>
                    <th>Products Image</th>
                    <th>Products Name</th>
                    <th>Total Bidder</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                    $sql = "SELECT count(bids.id) as bidder, products.* FROM bids JOIN products ON bids.product_id=products.id GROUP BY bids.product_id ORDER BY products.id DESC";
                    $run = $db->query($sql);
                    if ($run->num_rows > 0) {
                      while($row = $run->fetch_assoc()) {
                        ?>
                          <tr>
                            <td><img src="<?= unserialize($row['images'])[0] ?>" width="50"></td>
                            <td><?php echo $row['product_name'] ?></td>
                            <td><?php echo $row['bidder'] ?></td>
                          </tr>
                        <?php
                      }
                    }
                  ?>
                </tbody>
              </table>
            </div>
            <div class="box-footer"></div>
          </div>
        </div>
      </div>
    



<?php include 'includes/footer.php'?>
