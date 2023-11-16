<?php
include('../connect/connect.php');
if(isset($_POST['delete'])) {
    global $connect;
    $id = $_POST['product_id'];
    $delete_query = "delete from products where product_id='$id'";
    $result_query = mysqli_query($connect, $delete_query);
    if($result_query){  
        echo "<script>window.location.href='http://localhost/ecommerce/admin/admin.php';</script>";
    }else echo"$id";
}

if(isset($_POST['delete_user'])){
    global $connect;
    $id = $_POST['id'];
    $delete_query = "delete from `users` where id='$id'";
    $result_query = mysqli_query($connect, $delete_query);
    if($result_query){  
        echo "<script>window.location.href='http://localhost/ecommerce/admin/account_mng.php';</script>";
        echo "<script>alert('me')</script>";;
    }else echo"$id";
}

if(isset($_POST['delete_order'])){
    global $connect;
    $id = $_POST['order_id'];
    $delete_query = "delete from `orders` where order_id=$id";
    $result_query = mysqli_query($connect, $delete_query);
    if($result_query){  
        echo "<script>window.location.href='http://localhost/ecommerce/admin/order_mng.php';</script>";
        echo "<script>alert('me')</script>";;
    }else echo"$id";
}

if(isset($_POST["delete_select"])){
    $product_id=$_POST["product"];
    foreach($product_id as $a){
        $sql_delete = "delete from products where product_id = ".$a;
        if(mysqli_query($conn,$sql_delete)){
            header("location: admin.php");
    
        }else {
            echo "Error:".$sql_delete."<br>".mysqli_query($conn,$sql_delete);
        } 
    }
}

?>
