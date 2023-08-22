<?php
$page_header = "Product Updation ";
    include '../config/db.php';
    include 'includes/header.php';
    


    if (isset($_GET['edit'])){
        $id =  $_GET['edit'];
        $sql = "SELECT * FROM categories";
        $categories = $db->query($sql);

        $sql = "SELECT * FROM products WHERE id = '$id'";
        $row = $db->query($sql);
        $data = $row->fetch_assoc();
    }

    if (isset($_POST['update'])){
        $product_name = $_POST['product_name'];
        $category_id = $_POST['category'];
        $description = $_POST['description'];
        $starting_price = $_POST['starting_price'];
        $starting_time = $_POST['starting_time'];
        $ending_time = $_POST['ending_time'];
        

        if(isset($_FILES['images']) && $_FILES['images']['error'][0]==0) {
            //upload iamge here
            $target_dir = "images/";

            $count = count($_FILES['images']['name']);

            $img_name = [];

            for ($i= 0 ; $i < $count; $i++){
                $target_file = $target_dir . basename($_FILES["images"]["name"][$i]);
                $img_name[] = $target_file;
                $file_name = $_FILES['images']['tmp_name'][$i];
                move_uploaded_file($file_name, $target_file);
            }

            $images = serialize($img_name);

        } else {

            $images = $_POST['old_image'];

        }

        if (!empty($product_name) && !empty($category_id) && !empty($description) && !empty($images) && !empty($starting_price) && !empty($starting_time) && !empty($ending_time)){


            $sql = "UPDATE products SET `product_name` = '$product_name', `category_id` = '$category_id', `description` = '$description', `images` = '$images', `starting_price` = '$starting_price', `starting_time` = '$starting_time', `ending_time` = '$ending_time' WHERE `id` = '$id'";

            if($db->query($sql)){
                $msg = "Updated Successfully!";
              
            }else{
                echo "Something went wrong!!";
            }
        } else {
            echo "No Field Can be Empty";
        }
    }
?>

<div class="row content">
        <?php if (isset($msg)){ ?>
            <div class="alert alert-success">
                <strong>Info:!</strong> <?= $msg    ?>.
            </div>
        <?php } ?>

        <div class="col-md-12">
            <div class="box box-success">
                <div class="box-header with-border">
                    <h3 class="box-title"></h3>
                </div>
                <!-- /.box-header -->
                <!-- form start -->
                <form role="form" method="POST" action="" enctype="multipart/form-data">
                    <div class="box-body">
                        <div class="form-group">
                            <label for="product_name">Product Name</label>
                            <input type="text" value="<?= $data['product_name'] ?>" name="product_name" class="form-control" id="product_name" placeholder="Enter Name">
                        </div>

                        <div class="form-group">
                            <label for="exampleInputEmail1">Category</label>
                            <select name="category" class="form-control">
                                <option value="" selected>Please select one</option>
                                <?php


                                    while ($category = $categories->fetch_assoc()){
                                ?>
                                    <option value="<?= $category['id']?>" <?php
                                        if($data['category_id'] == $category['id']) {
                                            echo 'selected';
                                        }
                                     ?> > <?= $category['name'] ?></option>
                                <?php } ?>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="exampleInputEmail1">Description</label>
                            <input type="text" value="<?= $data['description'] ?>" name="description" class="form-control" id="description" >
                        </div>

                        <div class="form-group">
                            <label for="exampleInputEmail1">Starting Price</label>
                            <input type="starting_price" value="<?= $data['starting_price']?>" name="starting_price" class="form-control" id="exampleInputEmail1" placeholder="Enter Starting Price">
                           
						</div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Ending Time</label>
                            <input type="datetime" value="<?= $data['starting_time']?>" name="starting_time" class="form-control" id="exampleInputPassword1" placeholder="Enter Ending Time">
                        </div>


                        <div class="form-group">
                            <label for="exampleInputPassword1">Ending Time</label>
                            <input type="datetime" value="<?= $data['ending_time']?>" name="ending_time" class="form-control" id="exampleInputPassword1" placeholder="Enter Ending Time">
                        </div>

                        <div class="form-group">
                            <label for="exampleInputPassword1">Images</label>
                            <input type="hidden" name="old_image" value='<?= $data['images']?>'>
                            <input type="file" name="images[]" class="form-control" id="exampleInputPassword1" placeholder="Enter Ending Time" multiple>
                        </div>
                        
                    </div>
                    <!-- /.box-body -->

                    <div class="box-footer">
                        <button type="submit" name="update" class="btn btn-primary">Update</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

   

    <script type="text/javascript">
        
        // $(document).on('keyup', '#keyword', function() {
        //     var keyword = $(this).val();

        //     $.ajax({
        //         url: 'search.php',
        //         method:'POST',
        //         data: {keyword:keyword},
        //         success: function(result) {
        //             $('#search_list').html(result);
        //         }
        //     });
        // });

        // $(document).on('click', '.search-item', function() {
        //     var keyword = $(this).html();

            
        // })


    </script>
