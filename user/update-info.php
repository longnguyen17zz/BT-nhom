<?php
session_start();
include('../connect/connect.php');
include('../function/common_function.php');
define('ASSETS_PATH','..');
define('HEADER_PATH','../layout_user');
define('FOOTER_PATH', '../footer_info');
define('USER_PATH', '');
define('LOGOUT_PATH', '../');
define('CART_PATH', '../');

if (isset($_POST['update-info'])) {
    $email_name = $_SESSION['email'];
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    $role = $_POST['role'];
    $query = "update `users` set name ='$name', phone ='$phone', address= '$address',role='$role'
    where email = '$email_name'";
    $result = mysqli_query($connect, $query);
    if ($result) {
        // Cập nhật thông tin trong phiên
        $_SESSION['name'] = $name;
        $_SESSION['phone'] = $phone;
        $_SESSION['address'] = $address;
        $_SESSION['role'] = $role;

        echo "<script>window.location.href='http://localhost/ecommerce/user/info.php';</script>";
        exit(); // Kết thúc kịch bản
    } else {
        echo "Có lỗi xảy ra khi cập nhật thông tin.";
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
    <link rel="stylesheet" href="../css/styles.css">
    <link rel="stylesheet" href="../css/grid.css">
    <title>Ecommerce Website</title>
</head>

<body>
    <main>
        <!--Header-->
        <?php 
            include("../layout/contact_on_mobile.php");
            include('../layout/header.php')
        ?>

        <div class="info">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 avatar-user">
                        <img src="../assets/user/user.png" alt="">
                    </div>
                    <div class="col-md-8 info-user">
                        <div class="info-div">
                            <form action="" method="POST" enctype="multipart/form-data">
                                <div class="update-form">
                                    <label for="name">Họ tên</label>
                                    <input type="text" id="name" name="name">
                                </div>
                                <div class="update-form">
                                    <label for="phone">Số điện thoại</label>
                                    <input type="text" id="phone" name="phone">
                                </div>
                                <div class="update-form">
                                    <label for="address">Địa chỉ</label>
                                    <input type="text" id="address" name="address">
                                </div>
                                <!-- <div class="update-form">
                                    <label for="role">Quyền truy cập</label>
                                    <select name="role">
                                        <option value="admin">admin</option>
                                        <option value="user">user</option>
                                    </select>
                                </div> -->
                                <button type="submit" class="update-button" name="update-info">Cập nhật</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!--Footer-->
        <?php include('../layout/footer.php'); ?>
        <!--End Footer-->
    </main>
    <script src="./bootstrap/bootstrap.js"></script>
    <script src="./js/action.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>