<?php
include('../connect/connect.php');
include('../function/common_function.php');
register();
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
    <form class="form-login" action="" method="POST" enctype="multipart/form-data">
        <h2>Đăng ký</h2>
        <div class="form-group input-box">
            <label for="exampleInputEmail1">Email</label>
            <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Email">
            <p class="error">Nhập đúng định dạng email</p>
        </div>
        <div class="form-group input-box">
            <label for="password">Mật khẩu</label>
            <input type="password" minlength="6"   class="form-control " id="password" name="password" placeholder="Mật khẩu">
            <p class="error">Nhập ít nhất 6 ký tự</p>
            <i class="fa-solid fa-eye showHidePass"></i>
            
        </div>
        <!-- <div class="form-group">
            <label for="exampleInputPassword1">Xác nhận mật khẩu</label>
            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Xác nhận mật khẩu">
        </div> -->
        <!-- <div class="form-group">
            <label for="address">Address</label>
            <input type="text" class="form-control" id="address" name="address"  placeholder="Địa chỉ">
        </div>
        <div class="form-group">
            <label for="phone">Số điện thoại</label>
            <input type="text" class="form-control" id="phone" name="phone" placeholder="Số điện thoại">
        </div> -->
        <button type="submit" name="insert-user" class="btn btn-primary button-form">Đăng ký</button>
        <div class="form-action">
            <span>Đã có tài khoản?</span>
            <a href="./login.php">Đăng nhập</a>
        </div>
    </form>

    <script src="../js/action.js"></script>
    <script src="../bootstrap/bootstrap.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>