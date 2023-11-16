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
        <!-- Payment -->
        <div class="content_payment">
            <div class="payment">
                <div class="bread-crumb">
                    <ul class="bread-crumb-item">
                        <li>
                            <a href="../layout_user/index.php">Trang chủ</a>
                            <span>&nbsp;/&nbsp;</span>
                        </li>
                        <li>
                            <span>PHƯƠNG THỨC THANH TOÁN</span>
                            <span>&nbsp;/&nbsp;</span>
                        </li>
                    </ul>
                </div>
        
                <div class="header_pay">
                    <h1>PHƯƠNG THỨC THANH TOÁN</h1>
                </div>
                
                <div class="content_pay">
                    <p class="content_pay-item"><strong>-Phương thức thanh toán 1 : Thanh toán trực tiếp tại Shop</strong></p>
                    <p class="content_pay-item">+Quý khách ở Hà Nội đến xem, nghe tư vấn,  mua hàng và trả tiền trực tiếp tại TECH_U .</p>
                    <p class="content_pay-item"><strong>Quý khách ở Hà Nội đến xem, nghe tư vấn,  mua hàng và trả tiền trực tiếp tại TECH_U .</strong></p>
                    <p class="content_pay-item">+ Dành cho khách đặt mua online - Các tỉnh, ngoại thành Hà Nội.</p>
                    <p class="content_pay-item">+ Quý khách đến bất kì ngân hàng nào ở Việt Nam để chuyển tiền theo thông tin bên dưới (Quý khách nên chọn các chi nhánh của Ngân hàng cùng hệ thống để không mất phí chuyển khoản để đơn hàng được giải quyết nhanh nhất có thể trễ).</p>
                    <ul>
                        <li>Ngân hàng : Techcombank - Ngân hàng TMCP Kỹ thương Việt Nam </li>
                    </ul>
                    <p class="content_pay-item">+ Tên chủ tài khoản : CÔNG TY TNHH CÔNG NGHỆ TECH_U</p>
                    <p class="content_pay-item">+ Số TK: 112002777103</p>
                    <ul>
                        <li>
                            <strong>LƯU Ý:</strong>
                            <p>+ Khi chuyển tiền , quý khách vui lòng ghi rõ tên và lí do chuyển tiền . VD : Nguyễn A chuyển tiền mua máy tính.</p>
                            <p>+ Khi chuyển tiền xong, quý khách vui lòng thông báo cho chúng tôi tên hoặc số tài khoản đã chuyển và địa chỉ nhận hàng để chúng tôi tiến hành kiểm tra tiền và chuyển hàng cho quý khách. Hàng hóa chuyển phát theo phương thức chuyển phát nhanh hoặc chậm theo yêu cầu. Nếu ở những tỉnh thành lớn, quý khách có thể thanh toán phí vận chuyển trực tiếp với nhân viên chuyển phát. Còn ở những tỉnh thành khác quý khách vui lòng thanh toán luôn phần phí vận chuyển khi chuyển tiền mua hàng.</p>
        
                        </li>
                    </ul>
                    <p class="content_pay-item"><b>CHÍNH SÁCH VẬN CHUYỂN - GIAO NHẬN:</b></p>
                    <p class="content_pay-item"><b>1- Phạm vi áp dụng:</b></p>
                    <p class="content_pay-item">Cty giao hàng đến tất cả các khách hàng trong nước khi khách có nhu cầu mua hàng.</p>
                    <p class="content_pay-item"><b>2. Hình thức áp dụng:</b></p>
                    <p class="content_pay-item"><b>a. Giao hàng miễn phí.</b></p>
                    <ul>
                        <li>Cty áp dụng chính sách giao hàng miễn phí nội thành cho tất cả các khách hàng mua hàng mua Gaming Gear trị giá từ 1tr đồng, ghế gaming, Gaming PC...</li>
                        <li>Áp dụng đối với các đơn hàng có giá trị cao, các sản phẩm áp dụng chính sách giao hàng tận nơi miễn phí</li>
                        <li>Sự thỏa thuận giữa công ty và khách hàng.</li>
                    </ul>
                    <p class="content_pay-item"><b>b. Giao hàng có tính phí.</b></p>
                    <ul>
                        <li>Áp dụng cho các đơn hàng không thỏa chính sách giao hàng miễn phí.</li>
                        <li>Đối với các đơn hàng nội thành TP Hà Nội: cty tính phí giao hàng là 5000vnđ/1km và trừ đi 5km đầu nếu đơn hàng trị giá thanh toán trên 500.00vnđ</li>
                        <li>Khách hàng ngoại thành TP Hà Nội: cty tính phí 5000đ/1km.</li>
                    </ul>
                    <ul>
                        <li>Khách có nhu cầu cần gấp sản phẩm thì TECH_U vẫn có gói giao hàng trong vòng 30p từ lúc chốt đơn hàng</li>
                    </ul>
                    <p class="content_pay-item"><b>3. Thời gian giao nhận hàng hóa.</b></p>
                    <p class="content_pay-item">Sau khi đã chốt đơn hàng theo thỏa thuận, thường thì đơn hàng sẽ được gởi đi trong 12h làm việc.</p>
                    <p class="content_pay-item"><b>4. Đóng gói hàng hóa.</b></p>
                    <p class="content_pay-item">Hàng hóa phải được đóng gói cẩn thận, tránh hỏng hóc khi giao nhận.</p>
                    <p class="content_pay-item">Mọi hỏng hóc nếu có phải được giải quyết trên cơ sở thương lượng, thỏa thuận giữa các bên liên quan nhằm đảm bào quyền lợi cho khách hàng</p>
                </div>
           </div>
        </div>

        <!-- End payment -->
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