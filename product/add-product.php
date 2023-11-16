<?php
include('../connect/connect.php');
if (isset($_POST['add-product']) && isset($_POST['product-quantity'])) {
    global $connect;
    $id = $_POST['product_id'];
    $quantity = $_POST['product-quantity'];
    $insert_query = "INSERT INTO `cart` (quantity, product_id)
    VALUES ($quantity, $id)
    ON DUPLICATE KEY
    UPDATE quantity = quantity + VALUES(quantity);";
    $select_query = "select count (*) from `cart` where product_id = '$id'";
    if ($quantity === '0') {
        echo "<script>alert('dit me may')</script>";
        echo "<script>window.open('product_detail.php?product_id=$id','_self')</script>";
    } else {
        $result_query = mysqli_query($connect, $insert_query);
    }
    echo "<script>alert('Added item to cart!')</script>";
    echo "<script>window.open('../index.php','_self')</script>";
}
?>