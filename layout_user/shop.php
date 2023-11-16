<?php
session_start();
include('../connect/connect.php');
include('../function/common_function.php');
define('ASSETS_PATH', '..');
define('HEADER_PATH', '../layout_user/');
define('FOOTER_PATH', '../footer_info');
if(isset($_POST['txt_submit'])){
    $name = $_POST['txt_name'];
    $email = $_POST['txt_email'];
    $phone = $_POST['txt_phone'];
    $comment = $_POST['txt_comment'];
    $insert_query = "insert into `contact` (name,email,phone,content) values('$name', '$email', '$phone', '$comment')";
    $result_query = mysqli_query($connect,$insert_query);
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
    <link rel="stylesheet" href="../css/grid.css">
    <title>Ecommerce Website</title>
</head>

<body>
    <main>
        <?php
        include('../layout/contact_on_mobile.php');
        ?>
        <!--Header-->
        <?php include('../layout/header.php'); ?>

        <!-- Shop -->
        <div class="container">
            <div class="shop">
                <div class="head-shop">
                    <div class="shop_sub-items" style="padding-top:20px;">
                        <h2 class="heading-shop">Cửa hàng Tech Shop - Chi nhánh HN</h2>
                        <div class="shop_sub-icon">
                            <i class="fa-solid fa-location-dot icon_ad"></i>
                            <p class="icon_content">Địa chỉ:</p>
                            <p class="icon_content-sub">18 Phố Viên – Phường Đức Thắng – quận Bắc Từ Liêm – Hà Nội</p>
                        </div>
                        <div class="shop_sub-icon">
                            <i class="fa-solid fa-mobile-screen-button icon_phone"></i>
                            <p class="icon_content">Số điện thoại:</p>
                            <p class="icon_content-sub icon-co">0393285491</p>
                        </div>
                        <div class="shop_sub-icon">
                            <i class="fa-solid fa-envelope icon_mail"></i>
                            <p class="icon_content">Email:</p>
                            <p class="icon_content-sub icon-co">techshop@gmail.com</p>
                        </div>
                    </div>
                </div>
                <div class="contact">
                    <div class="contact_sub">
                        <h3 class="contact_sub-item">LIÊN HỆ VỚI CHÚNG TÔI</h3>
                    </div>
                    <form class="contact_content" action="" method="POST">
                        <input type="text" class="form-control contact_content-item " name="txt_name" id="txt_name"
                            placeholder="Họ Tên*" required>

                        <input type="email" class="form-control contact_content-item" name="txt_email" id="txt_mail"
                            placeholder="Email*" required>


                        <input type="text" class="form-control contact_content-item" name="txt_phone" id="txt_phone"
                            placeholder="Số Điện Thoại*" required>


                        <textarea class="form-control contact_content-item" name="txt_comment" id="txt_comment"
                            placeholder="Nhập Nội Dung*" cols="30" rows="10" required></textarea>
                        <div class="send">
                            <button class="button-form-shop btn btn-warning contact_content-item" type="submit" name='txt_submit'>
                                GỬI LIÊN HỆ CỦA BẠN
                            </button>
                        </div>
                    </form>
                </div>

            </div>
        </div>

        <!-- End shop -->


        <!--Footer-->
        <?php
        include('../layout/footer.php');
        ?>
        <!--End Footer-->
    </main>
    <script src="../bootstrap/bootstrap.js"></script>
    <script src="../js/action.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>
</body>

</html>