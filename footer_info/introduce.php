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
        <!-- Introduce -->
        <div class="introduce">
            <div class="select">
                <div class="bread-crumb">
                    <ul class="bread-crumb-item">
                        <li>
                            <a href="../layout_user/index.php">Trang chủ</a>
                            <span>&nbsp;/&nbsp;</span>
                        </li>
                        <li>
                            <span>GIỚI THIỆU</span>
                            <span>&nbsp;/&nbsp;</span>
                        </li>
                    </ul>
                </div>
            </div>
            <p class="intro">Giới thiệu</p>
            <h1 class="intro-impor">Công ty TNHH Công Nghệ Tech_U</h1>
            <div class="intro">
                <div class="title">
                    <p class="title-item">Tên quốc tế :</p>
                    <p class="title-item">Mã số thuế :</p>
                    <p class="title-item">Địa chỉ :</p>
                </div>
                <div class="content">
                    <p class="content-item"> TECH_U TECHNOLOGY COMPANY LIMITED</p>
                    <p class="content-item"> 0315782009</p>
                    <p class="content-item"> 18 Phố Viên – Phường Đức Thắng – quận Bắc Từ Liêm – Hà Nội</p>
                </div>
            </div>
            <p class="intro-item">GIỚI THIỆU VỀ TECH_U</p>
            <p class="intro-item">TECH_U được thành lập và phát triển từ năm 2023 chủ yếu mảng PC Gaming và Designer...
                Sau một thời gian hoạt động nhờ đuợc sự tin tưởng và ủng hộ của quý khách hàng và tâm huyết của đội ngũ
                TECH_U nên nay đã thành một trong những shop máy tính lớn và uy tín bật nhất VN.</p>
            <p class="intro-item">TECH_U được sinh ra với sứ mệnh mang lại những sản phẩm tốt giá thành hợp lý nhất để
                phục vụ cho cộng đồng game thủ cũng như cộng đồng sử dụng thiết bị liên quan đến máy tinh nói chung.</p>
            <p class="intro-item">Với tiêu chỉ có thêm 1 khách hàng là có thêm 1000 khách hàng nên TECH_U luôn tậm tâm
                phục vụ và mang lại sự hài lòng cho khách hàng !!!</p>
            <p class="intro-item">Hiện TECH_U đã là đại lý xuất sắc và là đối tác chiến lược của các hãng lớn như :
                <strong>ASUS, MSI, GIGABYTE, COOLER MASTER, VIEWSONIC, LG, ADATA XPG, DELL, NZXT , ID-COOLING,CORSAIR,
                    KINGSTON, CRUCIAL, GSKILL, DELL, SAMSUNG, INTEL, AMD....</strong></p>
        </div>

        <!-- End introduce -->
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