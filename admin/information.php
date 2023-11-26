<?php
session_start();
include('../function/common_function.php');
if (!isset($_SESSION['role'])) {
    header('Location: http://localhost/ecommerce/layout_user/index.php');
    exit();
}
if ($_SESSION['role'] === 'user') {
    echo '<script>alert("You must be admin to access this page")</script>';
    header('Location: http://localhost/ecommerce/layout_user/homepage.php');
    exit();
}

if (isset($_SESSION['id'])) { //kiem tra id cua nguoi dung ton tai
    $select_query = "Select * from `users`";
    $result_query = mysqli_query($connect, $select_query);
    if ($result_query) {
        $id = $_SESSION['id'];
        $name = $_SESSION['name'];
        $phone = $_SESSION['phone'];
        $address = $_SESSION['address'];
        $createdAt = $_SESSION['createdAt'];
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
    <link rel="stylesheet" href="../css/grid.css">
    <link rel="stylesheet" href="../css/styles.css">
    <link rel="stylesheet" href="../css/admin.css">
    <title>Ecommerce Website</title>
</head>

<body>
    <main>
        <!--Header-->
        <header>
            <nav class="navbar navbar-expand-lg navbar-light bg-light" id="admin-header">
                <div class="container">
                    <div class="navbar_header">
                        <div class="navbar-brand">
                            <a href="../homepage.php">
                                <img src="../assets/Main_logo.png" class="logo" alt="">
                            </a>
                            <span>Trang quản trị</span>
                        </div>
                        <div class="admin">
                            <div class="admin-area">
                                <i class="fa-solid fa-user"></i>
                                <?php echo 'Xin chào ' . $_SESSION['name'] ?>
                            </div>
                            <div class="logout-area">
                                <i class="fa-solid fa-right-from-bracket"></i>
                                <a href="../login-register/login.php">
                                    <span>Đăng xuất</span>
                                </a>
                            </div>
                        </div>

                    </div>
                </div>

            </nav>
        </header>
        <!--End Header-->
        <!--Main Layout -->
        <div class="main-layout">
            <div class="row">
                <div class="management-category col-md-2">
                    <ul class="list_category">
                        <li class="list_category--item">
                            <i class="fa-solid fa-cart-shopping"></i>
                            <a href="admin.php" style="color:#fff;">Quản lý sản phẩm</a>
                        </li>
                        <li class="list_category--item">
                            <i class="fa-solid fa-cart-shopping"></i>
                            <a href="contact_mng.php" style="color:#fff;">Quản lý liên hệ</a>
                        </li>
                        <li class="list_category--item">
                            <i class="fa-solid fa-cart-shopping"></i>
                            <a href="order_mng.php" style="color:#fff;">Quản lý đơn hàng</a>
                        </li>
                        <li class="list_category--item">
                            <i class="fa-solid fa-cart-shopping"></i>
                            <a href="account_mng.php" style="color:#fff;">Quản lý tài khoản</a>
                        </li>
                        <li class="list_category--item">
                            <i class="fa-solid fa-cart-shopping"></i>
                            <a href="#!" class="active">Thông tin cá nhân</a>
                        </li>

                    </ul>
                </div>
                <div class="management-detail col-md-10">
                    <h2>Thông tin admin</h2>
                    <hr>

                    <div class="mt-3">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">Id</th>
                                    <th scope="col">Tên người dùng</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Điện thoại</th>
                                    <th scope="col">Địa chỉ</th>
                                    <th scope="col">Tạo mới lúc</th>
                                    <th scope="col">Chức năng</th>

                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">
                                        <?php echo $_SESSION['id']; ?>
                                    </th>
                                    <td>
                                        <?php echo $_SESSION['name']; ?>
                                    </td>
                                    <td>
                                        <?php echo $_SESSION['email']; ?>
                                    </td>
                                    <td>
                                        <?php echo $_SESSION['phone']; ?>
                                    </td>
                                    <td>
                                        <?php echo $_SESSION['address']; ?>
                                    </td>
                                    <td>
                                        <?php echo $_SESSION['createdAt']; ?>
                                    </td>
                                    <td>
                                        <button type="button" class="btn btn-primary">Sửa</button>
                                        <button type="button" class="btn btn-danger">Xóa</button>
                                    </td>

                                </tr>
                            </tbody>
                        </table>
                        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                            aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Thêm sản phẩm</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body" style="height:70%">
                                        <form action="" method="POST" enctype="multipart/form-data">
                                            <div class="form-outline mb-4">
                                                <!--Id-->
                                                <label for="product_id" class="form-label">Mã sản phẩm</label>
                                                <input type="text" name="product_id" id="product_id"
                                                    class="form-control " placeholder="Nhập mã sản phẩm"
                                                    autocomplete="off" required="required">
                                                <!--Title-->
                                                <label for="product_title" class="form-label">Tên sản phẩm</label>
                                                <input type="text" name="product_title" id="product_title"
                                                    class="form-control " placeholder="Nhập tên sản phẩm"
                                                    autocomplete="off" required="required">
                                                <!--Price-->
                                                <label for="product_price" class="form-label">Giá tiền</label>
                                                <input type="text" name="product_price" id="product_price"
                                                    class="form-control " placeholder="Nhập giá sản phẩm"
                                                    autocomplete="off" required="required">

                                                <!--Description-->
                                                <label for="product_description" class="form-label">Mô tả chi
                                                    tiết</label>
                                                <input type="text" name="product_description" id="product_description"
                                                    class="form-control " placeholder="Nhập mô tả" autocomplete="off"
                                                    required="required">
                                                <label for="product_image" class="form-label">Ảnh</label>
                                                <input type="text" name="product_image" id="product_image"
                                                    class="form-control " autocomplete="off" required="required">
                                                <div class="d-flex justify-content-end mt-3 gap-2">
                                                    <button type="button" class="btn btn-secondary"
                                                        data-bs-dismiss="modal">Đóng</button>
                                                    <button type="submit" name="insert_product"
                                                        class="btn btn-primary">Lưu
                                                        sản phẩm
                                                    </button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--End Main Layout -->
    </main>
    <script src="../bootstrap/bootstrap.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>
</body>

</html>