<?php
session_start();
include('../connect/connect.php');
include('../function/common_function.php');
define('ASSETS_PATH','..');
define('HEADER_PATH','../layout_user/');
define('FOOTER_PATH', '../footer_info');
define('USER_PATH', '');
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
        <!--Header-->
        <?php 
            include("../layout/contact_on_mobile.php");
            include('../layout/header.php');
        ?>

        <div class="info">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 avatar-user">
                        <img src="../assets/user/user.png" alt="">
                    </div>
                    <div class="col-md-8 info-user">
                        <div class="info-div">
                            <div class="info-name">
                                <img src="../assets/user/id-card.png" alt="">
                                <h2><?php echo $_SESSION['name'] ?></h2>
                            </div>
                            <div class="info-email">
                                <img src="../assets/user/email.png" alt="">
                                <h2><?php echo $_SESSION['email'] ?></h2>
                            </div>
                            <div class="info-address">
                                <img src="../assets/user/home.png" alt="">
                                <h2><?php echo $_SESSION['address'] ?></h2>
                            </div>
                            <div class="info-phone">
                                <img src="../assets/user/phone-call.png" alt="">
                                <h2><?php echo $_SESSION['phone'] ?></h2>
                            </div>
                            <div class="info-phone">
                                <img src="../assets/user/role.png" alt="">
                                <h2><?php echo 'Role: ' . $_SESSION['role'] ?></h2>
                            </div>
                            <div class="info-status">
                                <img src="../assets/user/status.png" alt="">
                                <h2>Status: Active</h2>
                            </div>
                            <div>
                                <a href="update-info.php">Cập nhật thông tin</a>
                            </div>
                            <div>
                                <a href="../admin/admin.php">Trang quản trị</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!--Footer-->
        <?php 
        include('../layout/footer.php');
        ?>
        <!--End Footer-->
    </main>
    <script src="./bootstrap/bootstrap.js"></script>
    <script src="./js/action.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>