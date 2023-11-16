<?php
session_start();
include('../function/common_function.php');
include('../connect/connect.php');
global $connect;
if (!isset($_SESSION['role'])) {
    header('Location: http://localhost/ecommerce/layout_user/index.php');
    exit();
}
if ($_SESSION['role'] === 'user') {
    echo '<script>alert("You must be admin to access this page")</script>';
    header('Location: http://localhost/ecommerce/layout_user/homepage.php');
    exit();
}

function orders_pagination()
{
    global $connect;
    $results_per_page = 4;
    $query = "Select * from `orders`";
    $result = mysqli_query($connect, $query);
    $number_of_result = mysqli_num_rows($result);
    //determine the total number of pages available  
    $number_of_page = ceil($number_of_result / $results_per_page);
    //determine which page number visitor is currently on  
    if (!isset($_GET['page'])) {
        $page = 1;
    } else {
        $page = $_GET['page'];
    }
    $page_first_result = ($page - 1) * $results_per_page;

    //retrieve the selected results from database   
    $query = "SELECT *FROM orders LIMIT " . $page_first_result . ',' . $results_per_page;
    $result_query = mysqli_query($connect, $query);


    //display the retrieved result on the webpage  
    while ($row = mysqli_fetch_assoc($result_query)) {
        $order_id = $row['order_id'];
        $name_orders = $row['name_orders'];
        $phone_orders = $row['phone_orders'];
        $address_orders = $row['address_orders'];
        $email = $row['email'];
        $order_date = $row['order_date'];
        $status = $row['order_status'];
        
        echo "<tr>
                <th scope='row'>$order_id</th>
                <td>$name_orders</td>
                <td>$email</td>
                <td>$phone_orders</td>
                <td>$address_orders</td>
                <td>$order_date </td>
                <td>$status</td>
                <td>
                    <div style='display:flex;gap:5px;'>
                        <form method='POST' action='delete.php'>           
                            <input type='hidden' name ='order_id' value='$order_id'>  
                            <button type='submit' name='delete_order' class='btn' style='background:#FFA500;'>Xóa</button>
                        </form>
                    </div>
                </td>

                </tr>";
    }
}

function display_orders_number()
{
    global $connect;
    $results_per_page = 4;
    $query = "Select * from `orders`";
    $result = mysqli_query($connect, $query);
    $number_of_result = mysqli_num_rows($result); //7
    // Determine the total number of pages available  
    $number_of_page = ceil($number_of_result / $results_per_page); //2
    // Determine which page number visitor is currently on  
    if (!isset($_GET['page'])) {
        $current_page = 1;
    } else {
        $current_page = intval($_GET['page']);
    }
    $page_first_result = ($current_page - 1) * $results_per_page;
    // Retrieve the selected results from the database   
    $query = "SELECT * FROM orders LIMIT " . $page_first_result . ',' . $results_per_page;
    $result = mysqli_query($connect, $query);
    $current_page_class = 'pagination-item--active';
    for ($page = 1; $page <= $number_of_page; $page++) {
        $class = ($page === $current_page) ? $current_page_class : '';
        echo '
            <div style="display: flex;" class="' . $class . '">
                <a class="pagination-item__link" href="order_mng.php?page=' . $page . '">' . $page . '</a>
            </div>
        ';
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
                            <a href="#!" class="active" >Quản lý đơn hàng</a>
                        </li>
                        <li class="list_category--item">
                            <i class="fa-solid fa-cart-shopping"></i>
                            <a href="account_mng.php" style="color:#fff;">Quản lý tài khoản</a>
                        </li>
                        <li class="list_category--item">
                            <i class="fa-solid fa-cart-shopping"></i>
                            <a href="information.php" style="color:#fff;">Thông tin cá nhân</a>
                        </li>

                    </ul>
                </div>
                <div class="management-detail col-md-10">
                    <h2>Quản lý đơn hàng</h2>
                    <hr>

                    <div class="mt-3">
                        <table class="table align-middle">
                            <thead>
                                <tr>
                                    <th class="text-center" scope="col">Mã đơn hàng</th>
                                    <th class="text-center"scope="col">Tên người dùng</th>
                                    <th class="text-center" scope="col">Email</th>
                                    <th class="text-center" scope="col">Số điện thoại</th>
                                    <th class="text-center" scope="col">Địa chỉ</th>
                                    <th class="text-center" scope="col">Ngày đặt</th>
                                    <th class="text-center" scope="col">Trạng thái</th>
                                    <th class="text-center" scope="col">Chức năng</th>

                                </tr>
                            </thead>
                            <tbody>
                                <?php orders_pagination(); ?>
                            </tbody>
                        </table>
                        <ul class='pagination home-product__pagination'>
                            <li class='pagination-item '>
                                <a href='' class='pagination-item__link'>
                                    <i class='pagination-item__icon'><i class="fa-solid fa-chevron-left"></i></i>
                                </a>
                            </li>

                            <?php
                            display_orders_number();
                            ?>

                            <li class='pagination-item'>
                                <a href='' class='pagination-item__link'>
                                    <i class='pagination-item__icon pagination-item__link'><i
                                            class="fa-solid fa-chevron-right"></i></i>
                                </a>
                            </li>
                        </ul>
                        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog"
                            aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        ...
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary"
                                            data-dismiss="modal">Close</button>
                                        <button type="button" class="btn btn-primary">Save changes</button>
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