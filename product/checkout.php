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

if (isset($_POST['ship_cod'])) {
    global $connect;
    $email = $_SESSION['email'];
    $cart_query = "select * from `cart` where email = '$email'";
    $order_status = 'Đang xử lý';
    $user_id = $_SESSION['id'];
    $name_orders = $_POST['name_orders'];
    $phone_orders = $_POST['phone_orders'];
    $address_orders = $_POST['address_orders'];
    $total_cart_query = "select sum(quantity) as sumquantity FROM cart WHERE email = '$email'";
    $total_cart_result = mysqli_query($connect, $total_cart_query);
    if ($total_cart_result) {
        $row = mysqli_fetch_assoc($total_cart_result);
        $total_cart = $row['sumquantity'];
        $insert_query = "insert into `orders` (user_id,total_products,order_status,name_orders,phone_orders,address_orders,email) values 
        ($user_id, $total_cart , '$order_status','$name_orders','$phone_orders','$address_orders','$email')";
        $result = mysqli_query($connect, $insert_query);
        if ($result) {
            $truncate_cart = "delete from cart where email ='$email'";
            $truncate_query = mysqli_query($connect, $truncate_cart);
            
            if ($truncate_query) {
                echo "<script>alert('Order success')</script>";
            } else {
                echo "<script>alert('Error truncating cart')</script>";
            }
        } else {
            echo "<script>alert('Error inserting order')</script>";
        }

    }

}


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
        ?>
        <!--End Header-->
        <div class="container" style='padding-top:150px;'>
            <div class="row" style="justify-content:space-between">
                <div class="col-md-4">
                    <h2 style="text-decoration:underline; padding-bottom:40px;">Thông tin đặt hàng</h1>
                        <form action='' method='POST' enctype="multipart/form-data">
                            <div class="row" style="flex-direction: column;">
                                <span style="font-size: 16px;">Họ tên người nhận hàng</span>
                                <input name="name_orders" style="height:30px; padding:5px;"
                                    value="<?php echo $_SESSION['name']; ?>" type="text" required>
                            </div>
                            <div class="row" style="flex-direction: column;">
                                <span style="font-size: 16px;">Số điện thoại</span>
                                <input name="phone_orders" style="height:30px; padding:5px;"
                                    value="<?php echo $_SESSION['phone']; ?>" type="text" required>
                            </div>
                            <div class="row" style="flex-direction: column;">
                                <span style="font-size: 16px;">Địa chỉ nhận hàng</span>
                                <input name="address_orders" style="height:70px; padding:5px;" type="text" required>
                            </div>
                            <button class="btn btn-primary" style="margin-top:10px;" type="submit" name='ship_cod'>
                                <span>Thanh toán COD</span>
                            </button>
                        </form>
                        <form action="../function/checkout_function.php" method="POST"
                            enctype="application/x-www-form-urlencoded">
                            <input type="hidden" name="cart-total-price" value="<?php
                            total_cart_price();
                            ?>">
                            <button class="btn btn-primary"
                                style="margin-top:10px; margin-bottom:20px; display:flex; gap:1px; align-items:center;" type="submit"
                                name="payUrl">
                                <img style="width:30px; height:30px;" src="../assets/momo.png" alt="">
                                <span>Thanh toán MOMO</span>
                            </button>
                        </form>
                </div>
                <div class="col-md-8 hide-on-mobile" style="width:60%;">
                    <h2 style="text-decoration:underline;">Giỏ hàng</h2>
                        <table class="table table-bordered align-middle">
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