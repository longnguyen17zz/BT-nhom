<?php
/**sd forEach xoa nhieu pt trong mang */
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

//100:Laptop
//200:PC
//300:Màn hình, 400: Tai nghe, 500:Ghế, 600:Chuột, 700:Bàn phím
function product_pagination()
{
    global $connect;
    $results_per_page = 4;
    $query = "Select * from `products`";
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
    $query = "SELECT *FROM products LIMIT " . $page_first_result . ',' . $results_per_page;
    $result = mysqli_query($connect, $query);

    //display the retrieved result on the webpage  
    while ($row = mysqli_fetch_assoc($result)) {
        $product_id = $row['product_id'];
        $product_title = $row['product_title'];
        $product_price = $row['product_price'];
        $product_description = $row['product_description'];
        $formatted_price = number_format($product_price, 0, ',', '.') . 'đ';
        $products_image = $row['products_image'];
        $product_brand = $row['product_brand'];
        $image_url = $row['products_image'];
        echo "<tr>
            <th scope='row' style='width: 120px;'>
                <img src='../admin/uploads/$image_url' style='width:100px;height:100px;' alt=''>
            </th>
            <td>$product_title</td>
            <td>
               $product_price 
            </td>
            <td>$product_brand</td>
            <td>$product_description</td>
            <td>
                <div style='display:flex; gap:5px;'>
                    <a href='update.php?updateId=$product_id'><button type='button' class='btn btn-primary' name='update-modal' data-bs-toggle='modal'
                    data-bs-target='#updateModal'>Sửa</button> </a>
                    <form action='delete.php' method='post'>
                        <input type='hidden' name ='product_id' value='$product_id'>             
                        <button type='submit' name='delete' class='btn' style='background:#FFA500;'>Xóa</button>
                        <input style='margin-left:10px;' type='checkbox' name='product[]' value='".$product_id."' class='form-check-input'>
                    </form> 
                </div>
            </td>

        </tr>";
    }
}


if (isset($_POST['insert_product'])) {
    $product_id = $_POST['product_id'];
    $product_title = $_POST['product_title'];
    $product_price = $_POST['product_price'];
    $product_description = $_POST['product_description'];
    $product_discount = $_POST['product_discount'];
    $product_brand = $_POST['product_brand'];
    //Image path
    $img_name = $_FILES['product_image']['name'];
    $img_size = $_FILES['product_image']['size'];
    $tmp_name = $_FILES['product_image']['tmp_name'];
    $error = $_FILES['product_image']['error'];
    // if ($error === 0) {
    //     if ($img_size > 1125000) {
    //         $em = "Sorry, your file is too large.";
    //         header("Location: index.php?error=$em");
    //     } else {
           

    //     }
    // } else {
    //     $em = "unknown error occurred!";
    //     header("Location: index.php?error=$em");
    // }
    $img_ex = pathinfo($img_name, PATHINFO_EXTENSION);
    $img_ex_lc = strtolower($img_ex);
    $allowed_exs = array("jpg", "jpeg", "png");
    $new_img_name = uniqid("IMG-", true) . '.' . $img_ex_lc;
    $img_upload_path = 'uploads/' . $new_img_name;
    move_uploaded_file($tmp_name, $img_upload_path);
    // $sql = "INSERT INTO images(image_url) 
    //             VALUES('$new_img_name')";
    if ($product_title == '' or $product_description == '' or $product_price == '') {
        echo "<script>alert('Vui lòng nhập hết các thông tin bỏ xót!')</script>";
    }
    $insert_query = "insert into `products` (product_title,product_id,product_price,product_description,products_image,product_discount,product_brand)
     values ('$product_title','$product_id','$product_price','$product_description','$new_img_name','$product_discount','$product_brand')";
    $check_query = "select * from `products` where product_id = '$product_id'";
    $result_check = mysqli_query($connect, $check_query);
    if (mysqli_num_rows($result_check) > 0) {
        echo "<script>alert('Sản phẩm đã tồn tại trong cơ sở dữ liệu!')</script>";
        echo "<script>window.location.href='http://localhost/ecommerce/admin/admin.php';</script>";
    } else {
        $result_query = mysqli_query($connect, $insert_query);
    }

}

function select_product()
{
    global $connect;
    if (!isset($_GET['product_id'])) {
        $select_query = "select * from `products`";
        $result = mysqli_query($connect, $select_query);
        if ($result) {
            while ($row = mysqli_fetch_assoc($result)) {
                if ($result) {
                    $product_id = $row['product_id'];
                    $product_title = $row['product_title'];
                    $product_price = $row['product_price'];
                    $product_description = $row['product_description'];
                    $products_image = $row['products_image'];
                    $product_brand = $row['product_brand'];
                }
                echo "<tr>
            <th scope='row' style='width: 120px;'>
                <img src='../assets/$products_image' style='width:100px;height:100px;' alt=''>
            </th>
            <td>$product_title</td>
            <td>
               $product_price 
            </td>
            <td>$product_brand</td>
            <td>$product_description</td>
            <td>
                <div style='display:flex; gap:5px;'>
                    <a href='update.php?updateId=$product_id'><button type='button' class='btn btn-primary' name='update-modal' data-bs-toggle='modal'
                    data-bs-target='#updateModal'>Sửa</button> </a>
                    <form action='delete.php' method='post'>
                        <input type='hidden' name ='product_id' value='$product_id'>             
                        <button type='submit' name='delete' class='btn' style='background:#FFA500;'>Xóa</button>
                    </form> 
                </div>
            </td>

        </tr>";
            }
        }
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
                            <a href="#!" class="active">Quản lý sản phẩm</a>
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
                            <a href="information.php" style="color:#fff;">Thông tin cá nhân</a>
                        </li>

                    </ul>
                </div>
                <div class="management-detail col-md-10">
                    <div id="toastBox"></div>
                    <h2>Quản lý sản phẩm</h2>
                    <hr>
                    <div>
                        <div class="dropdown">
                            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                Sắp xếp theo
                            </button>
                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                <li><a class="dropdown-item" href="#">Action</a></li>
                                <li><a class="dropdown-item" href="#">Another action</a></li>
                                <li><a class="dropdown-item" href="#">Something else here</a></li>
                            </ul>
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                data-bs-target="#exampleModal">Thêm mới</button>
                            <input type="submit" class="btn btn-warning" name="delete_select" value="Xóa chọn"></input>
                        </div>

                    </div>

                    <div class="mt-3">
                        <table class="table align-middle">
                            <thead>
                                <tr>
                                    <th class="text-center" scope="col">Ảnh</th>
                                    <th class="text-center" scope="col">Tên sản phẩm</th>
                                    <th class="text-center" scope="col">Giá tiền</th>
                                    <th class="text-center" scope="col">Hãng</th>
                                    <th class="text-center" scope="col">Chi tiết</th>
                                    <th class="text-center" scope="col">Hành động</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php product_pagination(); ?>
                            </tbody>
                        </table>
                        <ul class='pagination home-product__pagination'>
                            <li class='pagination-item '>
                                <a href='' class='pagination-item__link'>
                                    <i class='pagination-item__icon'><i class="fa-solid fa-chevron-left"></i></i>
                                </a>
                            </li>

                            <?php
                            display_product_number();
                            ?>

                            <li class='pagination-item'>
                                <a href='' class='pagination-item__link'>
                                    <i class='pagination-item__icon pagination-item__link'><i
                                            class="fa-solid fa-chevron-right"></i></i>
                                </a>
                            </li>
                        </ul>
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
                                                <!--Discount-->
                                                <label for="product_discount" class="form-label">Giá khuyến mãi</label>
                                                <input type="text" name="product_discount" id="product_discount"
                                                    class="form-control " placeholder="Nhập mã sản phẩm"
                                                    autocomplete="off" required="required">
                                                <!--Brand-->
                                                <label for="product_brand" class="form-label">Hãng</label>
                                                <input type="text" name="product_brand" id="product_brand"
                                                    class="form-control " placeholder="Nhập mã sản phẩm"
                                                    autocomplete="off" required="required">
                                                <!--Description-->
                                                <label for="product_description" class="form-label">Mô tả chi
                                                    tiết</label>
                                                <input type="text" name="product_description" id="product_description"
                                                    class="form-control " placeholder="Nhập mô tả" autocomplete="off"
                                                    required="required">
                                                <label for="product_image" class="form-label">Ảnh</label>
                                                <input type="file" name="product_image" id="product_image"
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
    <script>
        let toastBox = document.getElementById('toastBox');
        function showToast() {
            let toast = document.createElement('div');
            toast.classList.add('toast');
            toast.innerHTML = 'Thêm mới thành công';
            toastBox.appendChild(toast);
            setTimeout(() => {
                toast.remove();
            }, 2000)
        }
        <?php
        if ($result_query) {
            echo "showToast();";
        }
        ?>

    </script>
    <script src="./bootstrap/bootstrap.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>
</body>

</html>