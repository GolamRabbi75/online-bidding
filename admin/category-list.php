<?php
$page_header = "Category List ";
include 'includes/header.php';

    $sql = "SELECT * FROM categories";
    $row = $db->query($sql);
?>

    <div class="row">
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
                            <th width="25%">Name</th>
                            <th width= "35%">Description</th>
                            <th width="30%">Action</th>
                        </tr>
                        <?php
                            while ($data = $row->fetch_assoc()){
                        ?>
                             <tr>
                            <td><?= $data['id'] ?></td>
                            <td><?= $data['name'] ?></td>
                            <td><?= $data['description'] ?></td>
                            
                            
                            <td style="">
                                <a href="category-edit.php?edit=<?= $data['id']?>"><i class="fa fa-edit" style="font-size: 24px"></i></a>
                                <a href="category-delete.php?del=<?= $data['id']?>"><i class="fa fa-trash"style="font-size: 24px"></i></a>
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
