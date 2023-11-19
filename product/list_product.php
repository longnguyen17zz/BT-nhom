
<?php
session_start();
include('../connect/connect.php');
include('../function/common_function.php');
define('ASSETS_PATH','..');
define('HEADER_PATH', '../layout_user/');
define('FOOTER_PATH', '../footer_info');
define('USER_PATH', '../user/');
define('LOGOUT_PATH', '../');
define('CART_PATH', '../');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../bootstrap/bootstrap.css">
    <link rel="stylesheet" href="../css/styles.css">
    <link rel="stylesheet" href="../css/animation.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <title>Ecommerce Website</title>
</head>

<body>
    <main>
        <div style="position: absolute;top: 55px;left: 5px;font-size: 25px; z-index:999;" class="button_return hide-on-pc hide-on-tablet">
            <a href="javascript:history.back()"><i style="color:#000;" class="fa-solid fa-arrow-right fa-rotate-180"></i></a>
        </div>
        <!--Header-->
        <?php
            include('../layout/header.php');
            include('../layout/contact_on_mobile.php');
        ?>
        <div class="progress"></div>
        <!--End Header-->
        <div class="layout-main">
            <div class="container hide-on-mobile" style='padding-top:100px;'>
                <div class="row">
                <!-- <form action="delete-product.php" method="POST">
                    <input type="submit" class="btn btn-warning" style="width: 100px;margin-bottom:10px;" name="delete_select" value="Xóa chọn"></input>
                </form> -->
                    <table class="table table-bordered align-middle select-delete">
                        <thead class="text-center">
                            <tr>
                                <th>ID</th>
                                <th>Tên sản phẩm</th>
                                <th>Hình ảnh</th>
                                <th>Số lượng</th>
                                <th>Tổng tiền</th>
                                <th>Tùy chọn</th>
                            </tr>
                        </thead>
                        <?php 
                        display_product_cart();
                        ?>
                    </table>

                    <!--Subtotal-->
                <div class="d-flex" style="margin-top: 50px;">
                    <h4 class="px-3">Thành tiền:<strong class="text-info">
                            <?php
                            total_cart_price();
                            ?>
                        </strong></h4>
                    <a href="../layout_user/index.php">
                        <button class="btn btn-primary" style="margin-right: 10px;">
                            Tiếp tục mua hàng
                        </button>
                    </a>
                    <a href="checkout.php">
                        <button class=" btn btn-secondary">
                            Thanh toán
                        </button>
                    </a>
                </div>
               
                </div>
            </div>
            <div class="list_product-on-mobile hide-on-tablet hide-on-pc">
                <div class="content_impotant ">
                    <div class="container_impotant" style="margin-left:5px; margin-bottom: 30px ;">
                        <?php
                        display_product_cart_mobile()
                        ?>
                    </div>
                        <!--Subtotal-->
                    <div class="d-flex" style="font-size: 20px;">
                        <h4 class="px-3">Thành tiền:<strong class="text-info">
                                <?php
                                total_cart_price();
                                ?>
                            </strong></h4>
                        <a href="../layout_user/index.php">
                            <button class="continue_buy btn btn-primary" style="margin-right: 10px;">
                                Tiếp tục mua hàng
                            </button>
                        </a>
                        <a href="checkout.php">
                            <button class="btn_pay btn btn-secondary">
                                Thanh toán
                            </button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <!--End Layout-->
        <!--Footer-->
        <?php
        include('../layout/footer.php');
        ?>
        <!--End Footer-->
    </main>
    <script src="../js/action.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
</body>

</html>