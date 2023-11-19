<?php
session_start();
include('../connect/connect.php');
include('../function/common_function.php');
define('ASSETS_PATH', '..');
define('HEADER_PATH', '../layout_user/');
define('FOOTER_PATH', '../footer_info');
define('USER_PATH', '');
define('LOGOUT_PATH', '../');
define('CART_PATH', '../');
function display_order()
{
    global $connect;
    $email = $_SESSION['email'];    
    $order_query = "select * from orders where email ='$email'";
    $order_result = mysqli_query($connect, $order_query);
    while ($row = mysqli_fetch_array($order_result)) {
        $order_id = $row["order_id"];
        $name_orders = $row["name_orders"];
        $address_orders = $row["address_orders"];
        $total_products = $row["total_products"];
        $order_date = $row["order_date"];
        $order_status = $row["order_status"];
        echo "
            <tbody>
                <tr style='font-size:16px;'>
                    <td class='text-center' style='width:100px;font-size:16px;'>$order_id</td>
                    <td class='text-center' style='width:200px;font-size:16px;'>$name_orders</td>
                    <td class='text-center'>$total_products </td>
                    <td class='text-center'>$order_date</td>
                    <td class='text-center'>$address_orders</td>
                    <td class='text-center'>$order_status</td>
                </tr>
            </tbody>
        ";
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
        include("../layout/contact_on_mobile.php");
        include('../layout/header.php');
        ?>
        <!--End Header-->
        <div class="container" style='padding-top:150px;'>
            <h2 style="text-decoration:underline;">Đơn đặt hàng</h1>
                <table class="table table-bordered align-middle ">
                    <thead class="text-center">
                        <tr>
                            <th class="text-center">Mã đơn hàng</th>
                            <th class="text-center">Người đặt hàng</th>
                            <th class="text-center">Tổng số sản phẩm</th>
                            <th class="text-center">Ngày đặt hàng</th>
                            <th class="text-center">Địa chỉ</th>
                            <th class="text-center">Trạng thái</th>
                        </tr>
                    </thead>
                    <?php
                    display_order();
                    ?>

                </table>

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