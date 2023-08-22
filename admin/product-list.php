<?php
$page_header = "Product List ";
include 'includes/header.php';


    $sql = "SELECT * FROM products";
    $row = $db->query($sql);
?>

    <div class="row" >
        
            <div class="col-md-12">
                <div class="box">
                <div class="box-header">
                    <h3 class="box-title"></h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body ">
                     <table id="productList" class="table table-condensed">
                        <thead>
                            <tr>
                                <th width="5%">#</th>
                                <th width="10%">Product Name</th>
                                <th width="10%">Category ID</th>
                                <th width="25%">Description</th>
                                <th width="10%">Image</th>
                                <th width="10%">Starting Price</th>
                                <th width="10%">Starting Time</th>
                                <th width="10%">Ending Time</th>                    
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php
                            while ($data = $row->fetch_assoc()){
                        ?>
                             <tr>
                           <td><?= $data['id'] ?></td>
                            <td><?= $data['product_name'] ?></td>
                            <td><?= $data['category_id'] ?></td>
                            <td><?= $data['description'] ?></td>
                            <td><img src="<?= unserialize($data['images'])[0] ?>" height="50" width="50"></td>
                            <td><?= $data['starting_price'] ?></td>
                            <td><?= $data['starting_time'] ?></td>
                            <td><?= $data['ending_time'] ?></td>
                           
                            <td><span class="badge bg-red"></span></td>
                            <td class="text-center">
                                <a href="product-edit.php?edit=<?= $data['id']?>"><i class="fa fa-edit" style="font-size: 24px" ></i></a>
                                <a href="product-delete.php?del=<?= $data['id']?>"><i class="fa fa-trash"style="font-size: 24px"></i></a>
                            </td>
                        </tr>
                        <?php } ?>
                        </tbody>
                    </table>
               
                <!-- /.box-body -->
                 <!-- /.box-body -->
            
            </div>
        </div>
            </div>

    </div>


<?php include 'includes/footer.php'?>
