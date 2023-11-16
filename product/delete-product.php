<?php
include('../connect/connect.php');
if(isset($_POST['remove-cart'])) {
    global $connect;
    $id = $_POST['product_id'];
    $delete_query = "delete from cart where product_id='$id'";
    $result_query = mysqli_query($connect, $delete_query);
    if($result_query){  
        echo "<script>window.location.href='http://localhost/ecommerce/product/list_product.php';</script>";
    }else echo"$id";
}


// if(isset($_POST['delete_select'])){
//     global $connect;
//     $id_product = $_POST['product'];
//     foreach($id_product as $a){   
//         $sql_delete = "delete from cart where product_id = ".$a;
//         $result_delete = mysqli_query($connect, $sql_delete);
//         if($result_delete){
//             echo "<script>window.location.href='http://localhost/ecommerce/product/list_product.php';</script>";
//         }else {
//             echo "Error:".$sql_delete."<br>".mysqli_query($connect,$sql_delete);
//         } 
//     }
// } 
// ?>