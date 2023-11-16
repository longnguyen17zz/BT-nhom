<?php
include('../connect/connect.php');
if (isset($_POST['update_product'])) {
    $product_id = $_GET['updateId'];
    $product_title = $_POST['product_title'];
    $product_price = $_POST['product_price'];
    $product_description = $_POST['product_description'];
    $product_image = $_POST['products_image'];
    $update_query = "update `products` set product_title='$product_title',product_id='$product_id',product_price=
        '$product_price',product_description='$product_description', products_image='$product_image'
        where product_id = '$product_id'";
    $result_query = mysqli_query($connect, $update_query);
    if ($result_query) {
        echo "<script>alert('Cập nhật thành công!')</script>";
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

</head>

<body>
    <div>
        <h1 class="text-center">Cập nhật sản phẩm</h1>
        <form action="" method="POST" enctype="multipart/form-data">
            <div class="form-outline mb-4 w-50 m-auto">
                <!--Title-->
                <label for="product_title" class="form-label">Tên sản phẩm</label>
                <input type="text" name="product_title" id="product_title" class="form-control "
                    placeholder="Nhập tên sản phẩm" autocomplete="off" required="required">
                <!--Price-->
                <label for="product_price" class="form-label">Giá</label>
                <input type="text" name="product_price" id="product_price" class="form-control "
                    placeholder="Nhập giá sản phẩm" autocomplete="off" required="required">

                <!--Description-->
                <label for="product_description" class="form-label">Chi tiết sản phẩm</label>
                <input type="text" name="product_description" id="product_description" class="form-control "
                    placeholder="Nhập chi tiết sản phẩm" autocomplete="off" required="required">
                <label for="product_image" class="form-label">Ảnh</label>
                <input type="text" name="products_image" id="products_image" class="form-control "
                    placeholder="Nhập đường dẫn ảnh" autocomplete="off" required="required">

                <div class="form-outline mb-4 w-50 m-auto my-5">
                    <input type="submit" name="update_product" class="btn btn-primary mx-auto d-block "
                        value="Cập nhật">
                </div>
            </div>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"
        integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V"
        crossorigin="anonymous"></script>
</body>

</html>