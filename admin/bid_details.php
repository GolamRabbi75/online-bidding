<?php
$page_header = "Bid Details";
include 'includes/header.php';

    $sql = "SELECT bids.*, products.* FROM bids JOIN products ON bids.product_id=products.id GROUP BY bids.product_id ORDER BY bids.id";
    $row = $db->query($sql);

?>
    <div class="box box-success">
        <div class="box-body">
            <form action="bid_search.php" method="get">
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>From Date</label>
                            <input class="form-control datepicker" name="from_date" type="text" autocomplete="off" placeholder="From Date">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>To Date</label>
                            <input class="form-control datepicker" type="text" autocomplete="off" name="to_date" placeholder="To Date">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <br>
                            <button type="submit" name="bid_search" class="btn btn-primary">Search</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <div class="box box-danger">
                <div class="box-header">
                    <h3 class="box-title">Bid Details</h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <table id="bidDetails" class="table table-condensed">
                        <thead>
                            <tr>
                                <th>#</th>
                                <!--<th>Product image</th>-->
                                <th>Product name</th>
                                <th>Starting Price</th>
                                <th>Bid Price</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php
                        $i = 1;
                            while ($data = $row->fetch_assoc()){
                            ?>
                                <tr>
                                    <td><?php echo $i++ ?></td>
                                    <!--<td><img src="<?= unserialize($data['images'])[0] ?>" height="50" width="50"></td>-->
                                    <td><?php echo $data['product_name'] ?></td>
                                    <td><?php echo $data['starting_price'] ?></td>
                                    <td><?php echo $data['price'] ?></td>
                                    <td><?php
                                        if ($data['status'] == 2) {
                                            echo "<span class='label label-danger'>Closed</span>";
                                        } else if ($data['status'] == 1) {
                                            echo "<span class='label label-success'>Remaining</span>";
                                        } else {
                                           echo "<span class='label label-warning'>Not Start</span>";
                                        }
                                    ?></td>
                                </tr>
                            <?php
                        ?>
                            
                        <?php } ?>
                        </tbody></table>
                </div>
                <!-- /.box-body -->
            </div>
        </div>

    </div>

<?php include 'includes/footer.php'?>
