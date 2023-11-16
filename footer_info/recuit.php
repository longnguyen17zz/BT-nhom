<?php
session_start();
include('../connect/connect.php');
include('../function/common_function.php');
define('ASSETS_PATH', '..');
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
    <link rel="stylesheet" href="../css/decor.css">
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
        <!-- Recuit -->
        <div class="recruit_little" style="margin: 100px auto; width:80vw;">
            <div class="bread-crumb">
                <ul class="bread-crumb-item">
                    <li>
                        <a href="../layout_user/index.php">Trang chủ</a>
                        <span>&nbsp;/&nbsp;</span>
                    </li>
                    <li>
                        <span>TUYỂN DỤNG</span>
                        <span>&nbsp;/&nbsp;</span>
                    </li>
                </ul>
            </div>

            <div class="header_recruit">
                <h1>TUYỂN DỤNG</h1>
            </div>
            <div class="container">
                <div class="col-12">
                    <div class="infor">
                        <strong style="font-size: 20px; margin-top:10px;">Nhân Viên Bán Hàng - Laptop</strong>
                        <table class="table align-middle ">
                            <thead>
                            <tr>
                                <th class="text-center">
                                    <i class="fa-solid fa-coins fa-2xl"></i>
                                    <span class="job_content"> Mức lương</span>
                                </th>
                                <th class="text-center">
                                    <i class="fa-solid fa-location-dot fa-2xl"></i>
                                    <span class="job_content"> Địa Điểm</span>
                                </th>
                                <th class="text-center">
                                    <i class="fa-solid fa-business-time fa-2xl"></i>              
                                    <span class="job_content"> Kinh Nghiệm</span>
                                </th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td class="text-center">7-12 triệu</td>
                                <td class="text-center">Hà Nội</td>
                                <td class="text-center">Không yêu cầu kinh nghiệm</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="header_recruit_little">
                        <h3
                            style="border-left: 6px solid #cd1818;font-size: 20px; padding-left: 10px; margin-top: 30px;">
                            CHI TIẾT TUYỂN DỤNG</h3>
                    </div>
                    <div class="detail">
                        <h4>Mô tả công việc</h4>
                        <p>Tư vấn, bán hàng các sản phẩm laptop, bàn phím cơ, ghế công thái học,...theo nhu cầu cho
                            khách đến tham quan, mua sắm tại cửa hàng
                            Trực tiếp giải đáp thắc mắc, hướng dẫn khách hàng sử dụng sản phẩm, dịch vụ
                            Chăm sóc, hỗ trợ khách hàng các vấn đề gặp phải về sản phẩm, dịch vụ sau khi bán
                            Sắp xếp, trưng bày, vệ sinh sản phẩm theo tiêu chuẩn của cửa hàng
                            Đóng gói, lắp đặt, cài đặt, vận chuyển sản phẩm cho khách hàng khi được yêu cầu
                            Các công việc khác được phân công</p>
                        <h4>Yêu cầu ứng viên</h4>

                        <p>- Không yêu cầu kinh nghiệm, sẽ được đào tạo trong quá trình làm việc.</p>
                        <p>- Giới tính Nam, ngoại hình khá ,cao từ 1m65, độ tuổi từ 20-30.</p>
                        <p>- Có kiến thức về Laptop, phần cứng, phần mềm.</p>
                        <p>- Kỹ năng giao tiếp, tư vấn bán hàng, xử lý tình huống.</p>
                        <p>- Chủ động , nhanh nhẹn , chăm chỉ,cầu thị.</p>
                        <p>- Làm việc 6 ngày/tuần.</p>
                        </ul>
                        <h4>Quyền lợi</h4>
                        <p>- Thu nhập tháng: lương cứng + thưởng doanh thu + thường khác. Thu nhập trung bình 7-12
                            triệu, làm tốt</p>
                        <p>- nhận mức cao hơn theo doanh thu không giới hạn.</p>
                        <p>- Thưởng thực hiện tiêu chuẩn, thưởng top sale hàng tháng/quý</p>
                        <p>- Chế độ thưởng quý, thưởng năm hấp hẫn</p>
                        <p>-T hưởng các ngày lễ, Tết</p>
                        <p>- Xét tăng lương định kỳ 2 lần/năm</p>
                        <p>- Tham gia các chương trình du lịch hàng năm với chi phí lớn, các sự kiện hàng tuần/tháng</p>
                        <p>- Được đào tạo kiến thức, kỹ năng để hoàn thiện bản thân và phát triển công việc</p>
                        <p>- Chính sách Ưu đãi giá cho nhân viên khi có nhu cầu mua sản phẩm tại công ty</p>
                        <p>- Làm việc trong môi trường năng động, trẻ trung, chuyên nghiệp</p>

                        <h4>Địa chỉ làm việc</h4>
                        <p>- Mỏ Địa Chất</p>
                    </div>
                </div>
            </div>
        </div>
        </div>
        <!-- End Recuit -->
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