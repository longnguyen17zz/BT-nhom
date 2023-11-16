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
        <!-- Ship -->
        <div class="ship">
            <div style="width: 110%;" class="bread-crumb">
                <ul class="bread-crumb-item">
                    <li>
                        <a href="../layout_user/index.php">Trang chủ</a>
                        <span>&nbsp;/&nbsp;</span>
                    </li>
                    <li>
                        <span>CHÍNH SÁCH VẬN CHUYỂN - GIAO NHẬN</span>
                        <span>&nbsp;/&nbsp;</span>
                    </li>
                </ul>
            </div>
            <div class="header_ship">
                <h1>CHÍNH SÁCH VẬN CHUYỂN - GIAO NHẬN</h1>
            </div>
            <div class="content_ship">
                <p class="content_ship-item"><strong>CHÍNH SÁCH VẬN CHUYỂN - GIAO NHẬN:</strong></p>
                <p class="content_ship-item"><b>1- Phạm vi áp dụng:</b></p>
                <p class="content_ship-item">Cty giao hàng đến tất cả các khách hàng trong nước khi khách có nhu cầu mua hàng.</p>
                <p class="content_ship-item"><b>2. Hình thức áp dụng:</b></p>
                <p class="content_ship-item"><b>a. Giao hàng miễn phí.</b></p>
                <p class="content_ship-item">• Lưu ý: Khách hàng phải thanh toán tổng giá trị đơn hàng trước cho TECH_U.</p>
                <ul>
                    <li>Cty áp dụng chính sách giao hàng miễn phí nội thành cho tất cả các khách hàng mua hàng mua Gaming Gear trị giá từ 1tr đồng...trừ các đơn hàng có kích thướt quá size</li>
                    <li>Áp dụng đối với các đơn hàng có giá trị cao, các sản phẩm áp dụng chính sách giao hàng tận nơi miễn phí.</li>
                    <li>Sự thỏa thuận giữa công ty và khách hàng.</li>
                </ul>
                <p class="content_ship-item"><b>b. Giao hàng có tính phí.</b></p>
                <p class="content_ship-item">• Lưu ý: Hình thức giao hàng COD ( thanh toán khi nhận hàng )</p>
                <ul>
                    <li>Áp dụng cho các đơn hàng không thỏa chính sách giao hàng miễn phí.</li>
                    <li>Đối với các đơn hàng nội thành TP Hà Nội: cty tính phí giao hàng là 5000vnđ/1km </li>
                    <li>Khách hàng ngoại thành TP.HN: cty tính phí 5000đ/1km.</li>
                </ul>
                <p class="content_ship-item"><b>c. Giao hàng liền trong vòng 30p ( nội thành HN ).</b></p>
                <ul>
                    <li>Khách có nhu cầu cần gấp sản phẩm thì TECH_U vẫn có gói giao hàng trong vòng 30p từ lúc chốt đơn hàng</li>
                </ul>
                <p class="content_ship-item"><b>3. Thời gian giao nhận hàng hóa.</b></p>
                <p class="content_ship-item">Sau khi đã chốt đơn hàng theo thỏa thuận, thường thì đơn hàng sẽ được gởi đi trong 12h làm việc.</p>
                <p class="content_ship-item"><b>4. Đóng gói hàng hóa.</b></p>
                <p class="content_ship-item">Hàng hóa phải được đóng gói cẩn thận, tránh hỏng hóc khi giao nhận.</p>
                <p class="content_ship-item">Mọi hỏng hóc nếu có phải được giải quyết trên cơ sở thương lượng, thỏa thuận giữa các bên liên quan nhằm đảm bào quyền lợi cho khách hàng</p>
            </div>
        </div>
        <!-- End ship -->
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