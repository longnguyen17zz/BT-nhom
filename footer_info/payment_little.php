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
    <link rel="stylesheet" href="../css/grid.css">
    <title>Ecommerce Website</title>
</head>

<body>
    <main>
        <?php
        include('../layout/contact_on_mobile.php');
        ?>
        <!--Header-->
        <?php 
        include('../layout/header.php');
        ?>
        <!-- Payment_little -->
        <div class="payment_little" style="margin: 100px auto; width:80vw;">
            <div class="bread-crumb">
                <ul class="bread-crumb-item">
                    <li>
                        <a href="../layout_user/index.php">Trang chủ</a>
                        <span>&nbsp;/&nbsp;</span>
                    </li>
                    <li>
                        <span>HƯỚNG DẪN TRẢ GÓP</span>
                        <span>&nbsp;/&nbsp;</span>
                    </li>
                </ul>
            </div>
            <div class="header_payment_little">
                <h1>HƯỚNG DẪN TRẢ GÓP</h1>
            </div>
            <div class="container">
                <p>Đối với các quý khách hàng muốn mua sản phẩm của Tech Shop theo hình thức trả góp, Tech Shop có chính sách quẹt thẻ trực tiếp tại showroom để tiến hành trả góp. Vì vậy, Quý Khách cần lưu ý các thông tin sau khi trả góp.</p>
            </div>
            <h3>Trả góp qua thẻ tín dụng MPOS</h3>
            <p><b>1. Áp dụng</b></p>
            <p>Khách hàng có nhu cầu mua sản phẩm tại Tech Shop và trả góp qua thẻ tín dụng với giá trị đơn hàng từ 3.000.000 vnđ trở lên (sau khi trừ các khuyến mại). Khách hàng vẫn nhận đủ các chương trình khuyến mãi mà Tech Shop đang áp dụng đối với từng sản phẩm.</p>
            <p><b>2.Điều kiện</b></p>
            <ul class="payment_little-item">
                <li>Khách hàng cần chuẩn bị CMND/CCCD + thẻ tín dụng (cả 2 đều phải chính chủ).</li>
                <li>Hạn mức thẻ tín dụng cần phải lớn hơn tổng số tiền của đơn hàng và phí chuyển đổi trả góp (tùy theo kỳ hạn và ngân hàng phát hành thẻ theo bảng bên dưới).</li>
                <li>Khách hàng có thể chọn trả góp toàn bộ giá trị đơn hàng hoặc trả góp một phần giá trị đơn hàng.</li>
                <li>Đối với một số sản phẩm, khách hàng phải tiến hành đặt cọc theo quy định của Tech Shop.</li>
            </ul>
            <p><b>3.Hình thức đăng kí</b></p>
            <p>Cách 1: Đăng ký tại Showroom Tech Shop</p>
            <p>Khách hàng tới Showroom Tech Shop để được tư vấn sản phẩm, thực hiện thanh toán trả góp tại Showroom và nhận sản phẩm.</p>
            <p>Cách 2: Đăng ký thông qua Hotline</p>
            <p>Khách hàng liên hệ Tech Shop qua Hotline để được tư vấn sản phẩm, đặt hàng, nhận sản phẩm và thực hiện thanh toán trả góp tại nhà.</p>
        </div>
        <!-- End payment_little -->
        <!--Footer-->
        <?php include('../layout/footer.php'); ?>
        <!--End Footer-->
    </main>
    <script src="./bootstrap/bootstrap.js"></script>
    <script src="./js/action.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>
</body>

</html>