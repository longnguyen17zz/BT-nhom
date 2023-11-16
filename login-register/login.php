<?php
session_start();
include('../connect/connect.php');
include('../function/common_function.php');

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/form.css">
    <title>Ecommerce Website</title>
</head>

<body>

    <div class="form-login">
        <form action="" method="POST">
            <h2>Đăng nhập</h2>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="Email">
            </div>
            <div class="form-group input-box">
                <label for="password">Mật khẩu</label>
                <input type="password" class="form-control " id="password" name="password" placeholder="Mật khẩu">
                <i class="fa-solid fa-eye showHidePass"></i>
            </div>
            <div class="form-group form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">Duy trì đăng nhập</label>
            </div>
            <button type="submit" name="login" class="btn btn-primary button-form">Đăng nhập</button>
            <div class="form-action">
                <span>Chưa có tài khoản?</span>
                <a href="register.php">Tạo tài khoản mới</a>
            </div>
            <div class="back-home">
                <div class="line-text">
                    <a href="../layout_user/index.php">
                        <i class="fa-solid fa-house" style="color:#000;"></i>
                    </a>
                </div>
            </div>
        </form>
    </div>

    <?php
    login();
    ?>
    <script src="../js/action.js"></script>
    <script src="./bootstrap/bootstrap.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    
</body>

</html>