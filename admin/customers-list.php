<?php
$page_header = "Customers List ";
include 'includes/header.php';

    $sql = "SELECT * FROM customers";
    $row = $db->query($sql);
?>

    <div class="row ">
        <div class="col-md-12">
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title"></h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body no-padding">
                    <table class="table table-condensed">
                        <tbody><tr>
                            <th width="10%">#</th>
                            <th width="10%">Name</th>
                            <th width="10%">Address</th>
                            <th width="10%">Phone</th>
                            <th width="10%">Status</th>
                            <th width="15%">Email</th>
                            
                            <th width="1%"></th>
                        </tr>
                        <?php
                            while ($data = $row->fetch_assoc()){
                        ?>
                             <tr>
                            <td><?= $data['id'] ?></td>
                            <td><?= $data['name'] ?></td>
                            <td><?= $data['address'] ?></td>
                            <td><?= $data['number'] ?></td>
                                 <td>
                                     <?php
                                        if ($data['status'] == 1){
                                            echo 'Active';
                                        }elseif ($data['status'] == 0){
                                            echo 'Inactive';
                                        }
                                     ?>
                                 </td>
                            <td><?= $data['email'] ?></td>
                            <td><span class="badge bg-red"></span></td>
                            <td>
                                <a href="customers-edit.php?edit=<?= $data['id']?>"><i class="fa fa-edit" style="font-size: 24px"></i></a>
                                <a href="customers-delete.php?del=<?= $data['id']?>"><i class="fa fa-trash"style="font-size: 24px"></i></a>
                               
                            </td>
                        </tr>
                        <?php } ?>
                        </tbody></table>
                </div>
                <!-- /.box-body -->
            </div>
        </div>

    </div>

<?php include 'includes/footer.php'?>
