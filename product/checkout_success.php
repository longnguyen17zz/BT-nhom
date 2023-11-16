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
        <!--Header-->
        <?php
        include('../layout/header.php');
        ?>
        <div class="progress hide-on-mobile"></div>
        <!--End Header-->
        <div class="container" style='padding-top:150px;'>
            <div class="row" style="justify-content:space-between">
                <div class="col-md-4">
                    <h2 style="text-decoration:underline; padding-bottom:40px;">Thông tin đặt hàng</h1>
                        <form>
                            <div class="row" style="flex-direction: column;">
                                <span style="font-size: 16px;">Họ tên người nhận hàng</span>
                                <input style="height:30px; padding:5px;" type="text" required>
                            </div>
                            <div class="row" style="flex-direction: column;">
                                <span style="font-size: 16px;">Số điện thoại</span>
                                <input style="height:30px; padding:5px;" type="text" required>
                            </div>
                            <div class="row" style="flex-direction: column;">
                                <span style="font-size: 16px;">Địa chỉ nhận hàng</span>
                                <input style="height:70px; padding:5px;" type="text" required>
                            </div>
                            <button class="btn btn-primary" style="margin-top:10px;" type="submit">
                                <span>Thanh toán COD</span>
                            </button>
                        </form>
                        <form action="../function/checkout_function.php" method="POST"
                            enctype="application/x-www-form-urlencoded">
                            <button class="btn btn-primary" style="margin-top:10px;" type="submit" name="payUrl">
                                <span>Thanh toán MOMO</span>
                            </button>
                        </form>
                </div>
                <div class="col-md-8" style="width:60%;">
                    <h2 style="text-decoration:underline;">Giỏ hàng</h1>
                        <table class="table table-bordered">
                            <thead class="text-center">
                                <tr>
                                    <th>Id</th>
                                    <th>Tên sản phẩm</th>
                                    <th>Hình ảnh</th>
                                    <th>Số lượng</th>
                                    <th>Tổng giá</th>
                                    <th>Tùy chọn</th>
                                </tr>
                            </thead>

                            <?php
                            display_product_cart();
                            ?>
                        </table>

                        <!--Subtotal-->
                        <h4 class="px-3">Thành tiền:
                            <strong class="text-info">
                                <?php
                                total_cart_price();
                                ?>
                            </strong>
                        </h4>
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
    <script src="./js/action.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
</body>

</html>