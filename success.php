<?php
include 'includes/header.php';

if (!isset($_SESSION['customer'])) {
    header('Location:login.php');
}

$bid_id = $_POST['bid_id'];
$customer_id = $_POST['customer_id'];
$product_id = $_POST['product_id'];
$price = $_POST['price'];
$card_no = $_POST['card_no'];
$name = $_POST['name'];
$expiry_date = $_POST['expiry_date'];
$code = $_POST['code'];
$date_time = date('Y-m-d H:i:s');

//checking if the bid belongs to posted customer or not
$sql = "SELECT * FROM bids WHERE id = '$bid_id'";
$bid = $db->query($sql)->fetch_assoc();
if ($bid['customer_id'] != $customer_id) {
    header('Location:my-account.php');
}

$sql = "INSERT INTO payment_details (bid_id, customer_id, product_id, price, card_no, name, expiry_date, code, date) VALUES ('$bid_id', '$customer_id', '$product_id', '$price', '$card_no', '$name', '$expiry_date', '$code', '$date_time')";
$db->query($sql);
?>

<link rel="stylesheet" type="text/css" href="bootstrap/css/4.0.0.bootstrap.min.css">
<script src="bootstrap/js/3.2.1jquery.min.js"></script>
<script src="bootstrap/js/4.0.0.bootstrap.min.js"></script>

<div class="container money">
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Success!</strong> You've completed the payment process successfully.
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
</div>

