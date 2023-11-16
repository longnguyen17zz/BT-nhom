<?php
$host = 'localhost';
$username = 'root';
$password = '';
$database_name = 'tech-ecommerce';

$connect = mysqli_connect($host, $username, $password, $database_name);

//getting products
function getProduct()
{
    global $connect;
    if (!isset($_GET['product_id'])) {
        //mặc định các biến khai báo trong hàm k thể truy cập được , đánh dấu $connect là global cho phép trong hàm có thể truy cập dc
        $select_query = "Select * from `products` order by rand() LIMIT 0,100";
        $result_query = mysqli_query($connect, $select_query);
        while ($row = mysqli_fetch_assoc($result_query)) {
            $product_id = $row['product_id'];
            $product_title = $row['product_title'];
            $product_price = $row['product_price'];
            $product_description = $row['product_description'];
            $formatted_price = number_format($product_price, 0, ',', '.') . 'đ';
            $products_image = $row['products_image'];
            echo "  
            <div class='col-lg-3 col-6'>
            <a href='product_detail.php?product_id=$product_id' class='home-product-item'>
                <img src='./assets/$products_image' alt='' class='home-product-item__img'>
                <h4 class='home-product-item__name'>
                    $product_title
                </h4>
                <p class='home-product-item__price-current'>
                    $formatted_price
                </p>
                <div class='home-product-action'>
                    <span style='display:block;margin:0 auto;'>Xem</span>
                </div>
            </a>
        </div>";
        }
    }
}

function newProduct()
{
    global $connect;
    if (!isset($_GET['product_id'])) {
        //mặc định các biến khai báo trong hàm k thể truy cập được , đánh dấu $connect là global cho phép trong hàm có thể truy cập dc
        $select_query = "select * from `products` order by createdAt desc";
        $result_query = mysqli_query($connect, $select_query);
        while ($row = mysqli_fetch_assoc($result_query)) {
            $product_id = $row['product_id'];
            $product_title = $row['product_title'];
            $product_price = $row['product_price'];
            $product_description = $row['product_description'];
            $formatted_price = number_format($product_price, 0, ',', '.') . 'đ';
            $products_image = $row['products_image'];
            echo "  
            <div class='col-lg-3 col-6'>
            <a href='product_detail.php?product_id=$product_id' class='home-product-item'>
                <img src='./assets/$products_image' alt='' class='home-product-item__img'>
                <h4 class='home-product-item__name'>
                    $product_title
                </h4>
                <p class='home-product-item__price-current'>
                    $formatted_price
                </p>
                <div class='home-product-action'>
                    <span style='display:block;margin:0 auto;'>Xem</span>
                </div>
            </a>
        </div>";
        }
    }
}


function search_product()
{
    global $connect;
    if (!isset($_POST['search_product'])) {
        $product_search_name = $_GET['product_name'];
        $results_per_page = 8; //4
        $select_query = "Select * from `products` where product_title like '%$product_search_name%'";
        $result_query = mysqli_query($connect, $select_query);
        $num_of_rows = mysqli_num_rows($result_query);
        $number_of_page = ceil($num_of_rows / $results_per_page); //2
        if (!isset($_GET['page'])) {
            $page = 1;
        } else {
            $page = $_GET['page'];
        }
        $page_first_result = ($page - 1) * $results_per_page;
        $query = "SELECT *FROM products where product_title like '%$product_search_name%' LIMIT " . $page_first_result . ',' . $results_per_page;
        $result = mysqli_query($connect, $query);
        if ($num_of_rows === 0) {
            echo "<h2 class='text-center text-danger'>Không có sản phẩm này</h2>";
        }
        while ($row = mysqli_fetch_assoc($result)) {
            $product_id = $row['product_id'];
            $product_title = $row['product_title'];
            $product_price = $row['product_price'];
            $product_description = $row['product_description'];
            $formatted_price = number_format($product_price, 0, ',', '.') . 'đ';
            $products_image = $row['products_image'];
            echo "  <div class='col-lg-3 col-6'>
            <a href='product_detail.php?product_id=$product_id' class='home-product-item'>
                <img src='../admin/uploads/$products_image' alt='' class='home-product-item__img'>
                <h4 class='home-product-item__name'>
                    $product_title
                </h4>
                <p class='home-product-item__price-current'>
                    $formatted_price
                </p>
                <div class='home-product-action'>
                    <span style='display:block;margin:0 auto;'>Xem</span>
                </div>
            </a>
        </div>";
        }
    }
}

//view details
function view_details()
{
    global $connect;
    if (isset($_GET['product_id'])) {
        $detail_product_id = $_GET['product_id'];
        //mặc định các biến khai báo trong hàm k thể truy cập được , đánh dấu $connect là global cho phép trong hàm có thể truy cập dc
        $select_query = "Select * from `products` where product_id = '$detail_product_id'";
        $result_query = mysqli_query($connect, $select_query);
        while ($row = mysqli_fetch_assoc($result_query)) {
            $product_id = $row['product_id'];
            $product_title = $row['product_title'];
            $product_price = $row['product_price'];
            $product_discount = $row['product_discount'];
            $formatted_discount = number_format($product_discount, 0, ',', '.') . 'đ';
            $formatted_price = number_format($product_price, 0, ',', '.') . 'đ';
            $products_image = $row['products_image'];
            $percent = ($product_discount / $product_price) * 100;
            $percent = round(100 - $percent);

            echo "
                <div class='col-md-6 col-12'>
                    <img src='../admin/uploads/$products_image' data-aos='fade-right' alt='' class='image_product'>
                </div>
                <div class='col-md-6 col-12' style='margin-top:40px; padding-left:30px;' data-aos='fade-left'>
                    <h2>$product_title</h2>
                    <div class='evaluate'>
                        <h3>Xem đánh giá</h3>
                        <span>
                            <i class='fa-regular fa-star'></i>
                            <i class='fa-regular fa-star'></i>
                            <i class='fa-regular fa-star'></i>
                            <i class='fa-regular fa-star'></i>
                            <i class='fa-regular fa-star'></i>
                        </span>
                    </div>
                    <div class='prices-box'>Giá bán: 
                    <span style='text-decoration:line-through; color:#DD0000;'>$formatted_price</span>
                    <span>$formatted_discount</span>
                    <span style='color:#DD0000;'>( - $percent% )</span>
                    </div>
                    
                    <form action='' method='POST' style='margin-top:20px;'>
                        <div class='amount'>
                        <p style='font-weight: bold'>Số lượng:</p>
                        <div class='incre-decrese-button'>
                            <input type='hidden' value='$product_id' name='product_id'/>
                            <button
                            type='button'
                                id='decrease-quantity'
                            value='Decrease Value'
                            onclick='decreaseValue()'
                            >
                                -   
                            </button>

                            <input
                            style='width: 30px; text-align: center; padding: 0; margin: 0;'
                            type='text'
                            name='product-quantity'
                            id='product-quantity'
                            value='1'
                            required
                            />
                            
                            <button
                                type='button'
                                id='increase-quantity'
                                value='Increase Value'
                                onclick='increaseValue()'
                            >
                                +
                            </button>
                        </div>
                  </div>
                  <button class='home-product-action btn btn-primary' name='add-product'>
                      <i class='fa-solid fa-cart-shopping'></i>
                      Thêm
                  </button>
                    </form>
                    <div class='product_gift'>
                        <div class='box-header'>
                            <div class='icon'>
                                <i class='fa-solid fa-gift'></i>
                            </div>
                            <h3>Quà tặng khuyến mãi</h3>
                        </div>
                        <div class='product_gift_content'>
                            <div class='product_gift_content_item'>
                                <ul class='gift_item'>
                                    <li>Móc khóa tự chọn</li>
                                    <li>Cặp đựng laptop</li>
                                    <li>Áo khoác</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            
            ";
        }
    }
}

function filter_product()
{
    global $connect;
    $results_per_page = 8;
    $query = "select * from `products` where product_id like 'NT%'";
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
    $query = "select * from `products` where product_id like 'NT%' LIMIT " . $page_first_result . ',' . $results_per_page;
    $result = mysqli_query($connect, $query);

    //display the retrieved result on the webpage  
    while ($row = mysqli_fetch_assoc($result)) {
        $product_id = $row['product_id'];
        $product_title = $row['product_title'];
        $product_price = $row['product_price'];
        $product_discount = $row['product_discount'];
        $product_description = $row['product_description'];
        $formatted_price = number_format($product_price, 0, ',', '.') . 'đ';
        $formatted_discount = number_format($product_discount, 0, ',', '.') . 'đ';
        $products_image = $row['products_image'];
        echo "  
            <div class='col-lg-3 col-6'>
            <a href='product_detail.php?product_id=$product_id' class='home-product-item'>
                <img src='./assets/$products_image' alt='' class='home-product-item__img'>
                <h4 class='home-product-item__name'>
                    $product_title
                </h4>
                <p class='home-product-item__price-current'>
                    $formatted_discount
                </p>
                <div class='home-product-action'>
                    <span style='display:block;margin:0 auto;'>Xem</span>
                </div>
            </a>
        </div>";
    }

}

function display_list_number()
{
    global $connect;
    $results_per_page = 8;
    $query = "SELECT * FROM `products`";
    $result = mysqli_query($connect, $query);
    $number_of_result = mysqli_num_rows($result);
    // Determine the total number of pages available  
    $number_of_page = ceil($number_of_result / $results_per_page);
    // Determine which page number visitor is currently on  
    if (!isset($_GET['page'])) {
        $current_page = 1;
    } else {
        $current_page = intval($_GET['page']);
    }
    $page_first_result = ($current_page - 1) * $results_per_page;
    // Retrieve the selected results from the database   
    $query = "SELECT * FROM products LIMIT " . $page_first_result . ',' . $results_per_page;
    $result = mysqli_query($connect, $query);
    $current_page_class = 'pagination-item--active';
    for ($page = 1; $page <= $number_of_page; $page++) {
        $class = ($page === $current_page) ? $current_page_class : '';
        if (!isset($_SESSION['email'])) {
            echo '
            <div class="' . $class . '">
                <a class="pagination-item__link" href="index.php?page=' . $page . '">' . $page . '</a>
            </div>
        ';
        } else {
            echo '
            <div class="' . $class . '">
                <a class="pagination-item__link" href="homepage.php?page=' . $page . '">' . $page . '</a>
            </div>
        ';
        }
    }
}
function page_pagination()
{
    global $connect;
    $results_per_page = 8;
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
    $query = "SELECT *FROM products order by rand() LIMIT " . $page_first_result . ',' . $results_per_page;
    $result = mysqli_query($connect, $query);

    //display the retrieved result on the webpage  
    while ($row = mysqli_fetch_assoc($result)) {
        $product_id = $row['product_id'];
        $product_title = $row['product_title'];
        $product_price = $row['product_price'];
        $product_discount = $row['product_discount'];
        $product_description = $row['product_description'];
        $formatted_price = number_format($product_price, 0, ',', '.') . 'đ';
        $formatted_discount = number_format($product_discount, 0, ',', '.') . 'đ';
        $products_image = $row['products_image'];
        echo "  
            <div class='col-lg-3 col-6'>
            <a href='product_detail.php?product_id=$product_id' class='home-product-item'>
                <img src='../admin/uploads/$products_image' alt='' class='home-product-item__img'>
                <h4 class='home-product-item__name'>
                    $product_title
                </h4>
                <p class='home-product-item__price-current'>
                    $formatted_discount
                </p>
                <div class='home-product-action'>
                    <span style='display:block;margin:0 auto;'>Xem</span>
                </div>
            </a>
        </div>";
    }
}

function display_product_number()
{
    global $connect;
    $results_per_page = 4;
    $query = "SELECT * FROM `products`";
    $result = mysqli_query($connect, $query);
    $number_of_result = mysqli_num_rows($result);
    // Determine the total number of pages available  
    $number_of_page = ceil($number_of_result / $results_per_page);
  

    // Determine which page number visitor is currently on  
    if (!isset($_GET['page'])) {
        $current_page = 1;
    } else {
        $current_page = intval($_GET['page']);
    }
    $page_first_result = ($current_page - 1) * $results_per_page;
    // Retrieve the selected results from the database   
    $query = "SELECT * FROM products LIMIT " . $page_first_result . ',' . $results_per_page;
    $result = mysqli_query($connect, $query);
    $current_page_class = 'pagination-item--active';
    for ($page = 1; $page <= $number_of_page; $page++) {
        $class = ($page === $current_page) ? $current_page_class : '';
        echo '
            <div style="display: flex;" class="' . $class . '">
                <a class="pagination-item__link" href="admin.php?page=' . $page . '">' . $page . '</a>
            </div>
        ';
    }
}


function cart_item()
{
    global $connect;
    //$ip = getIpAddress()
    $select_query = "Select count(*) as cart_count from `cart` where email = '".$_SESSION['email']."'";
    $result_query = mysqli_query($connect, $select_query);
    if ($result_query) {
        $row = mysqli_fetch_assoc($result_query);
        $cart_count = $row['cart_count'];
        echo $cart_count;
    } else {
        echo "Catch an error: " . mysqli_error($connect);
    }
}

function display_product_cart()
{
    global $connect;
    $select_query = "SELECT p.product_id, p.products_image,p.product_title,
    SUM(cd.quantity) AS total_quantity,
    (p.product_discount * SUM(cd.quantity)) AS total_price
    FROM products p
    JOIN cart cd ON p.product_id = cd.product_id
    WHERE cd.email = '".$_SESSION['email']."'
    GROUP BY p.product_id,p.products_image, p.product_title, p.product_discount;";
    $result_query = mysqli_query($connect, $select_query);
    while ($row = mysqli_fetch_assoc($result_query)) {
        $product_title = $row['product_title'];
        // $product_total_price = $row['total_price'];
        $product_discount = $row['total_price'];
        $formatted_total_discount= number_format($product_discount , 0, ',', '.') . 'đ';
        // $formatted_total_price = number_format($product_total_price, 0, ',', '.') . 'đ';
        $product_id = $row['product_id'];
        $products_img = $row['products_image'];
        $product_total_quantity = $row['total_quantity'];
        echo "
                        <tbody class=''>
                            <tr style='font-size:16px;'>
                                <td class='text-center' style='width:100px;font-size:16px;'>$product_id</td>
                                <td class='text-center' style='width:300px;font-size:16px;'>$product_title</td>
                                <td class='text-center' style='width:150px;'>
                                    <img style='width:100px;height:100px;' src='../admin/uploads/$products_img'>
                                </td>
                                <td class='text-center'>$product_total_quantity </td>
                                <td class='text-center'>$formatted_total_discount</td>
                                <td class='text-center'>
                                    <div class='click_btn' style='display:flex;gap:25px;justify-content:center;'>
                                        <a href='../layout_user/product_detail.php?product_id=$product_id'>                                 
                                        <button name='update-product'  type='submit' style='padding: 5px 20px;background-color:#e14e4e;color:#fff;border:none;outline:none;border-radius:3px;'    
                                        value='Update'>Mua thêm</button>
                                        </a>
                                        <form action='delete-product.php' method='POST' >
                                            <input type='hidden' name ='product_id' value='$product_id'> 
                                            <button type='submit' style='padding: 5px 20px;background-color:#e14e4e;color:#fff;border:none;outline:none;border-radius:3px;'
                                            name='remove-cart'>Xóa
                                            </button>
                                        </form>
                                        <form class='' action='delete-product.php' method='POST'>
                                            <input type='submit' class='btn btn-warning delete-select' style='width: 100px;margin-bottom:10px;' name='delete_select' value='Xóa chọn'></input>
                                            <input type='checkbox' name ='product[]' style='margin-left:20px;border: 2px solid #000;' value='".$product_id."' class='form-check-input'>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
        ";

    }
}

function display_product_cart_mobile()
{
    global $connect;
    $select_query = "SELECT p.product_id, p.products_image,p.product_title,
    SUM(cd.quantity) AS total_quantity,
    (p.product_discount * SUM(cd.quantity)) AS total_price
    FROM products p
    JOIN cart cd ON p.product_id = cd.product_id
    WHERE cd.email = '".$_SESSION['email']."'
    GROUP BY p.product_id,p.products_image, p.product_title, p.product_discount;
";
    $result_query = mysqli_query($connect, $select_query);
    
    while ($row = mysqli_fetch_assoc($result_query)) {
        $product_title = $row['product_title'];
        // $product_total_price = $row['total_price'];
        $product_discount = $row['total_price'];
        $formatted_total_discount= number_format($product_discount , 0, ',', '.') . 'đ';
        // $formatted_total_price = number_format($product_total_price, 0, ',', '.') . 'đ';
        $product_id = $row['product_id'];
       
        $products_img = $row['products_image'];
        $product_total_quantity = $row['total_quantity'];
        echo "<div class='info_order' style='margin-top:100px; display:flex; gap: 20px;'>
                <img style='height:200px; width:200px;'src='../admin/uploads/$products_img'>
                <div class='info-order' style='margin-top:20px;'>
                    <p style='font-weight: 500;'>$product_title</p>
                    <p>Số lượng sản phẩm : $product_total_quantity</p>
                    <p>Tổng tiền: $formatted_total_discount</p>
                </div>
            </div>
            <div class='button_order' style='display:flex; gap:50px; margin-top: 20px;'>
                <a href='../layout_user/product_detail.php?product_id=$product_id'>                                 
                    <button name='update-product'  type='submit' style='padding: 5px 20px;background-color:#e14e4e;color:#fff;border:none;outline:none;border-radius: 3px;'    
                    value='Update'>Mua thêm</button>
                </a>
                <form method='POST' action='delete-product.php'>
                    <input type='hidden' name ='product_id' value='$product_id'> 
                    <button type='submit' style='padding: 5px 20px;background-color:#e14e4e;color:#fff;border:none;outline:none;border-radius:3px;'
                    name='remove-cart'>Xóa</button>
                </form>
            </div>
            ";
    }
    

}

function total_cart_price()
{
    global $connect;
    // /The INNER JOIN keyword selects records that have matching values in both tables.
    //=> now we are using INNER JOIN related
    $select_query = "  
    SELECT
    SUM(p.product_discount*cd.quantity) AS grand_total
    FROM
    cart cd 
    JOIN
    products p ON cd.product_id = p.product_id
    WHERE cd.email = '".$_SESSION['email']."' ;";
    $result_query = mysqli_query($connect, $select_query);
    if ($result_query) {
        $row = mysqli_fetch_assoc($result_query);
        $cart_total = $row['grand_total'];
        $formatted_price = number_format($cart_total, 0, ',', '.') . 'đ';
        echo $formatted_price;
    }
}



function cart_preview()
{
    global $connect;
    $count = 'select count(*) as cart_count from `cart` where email = "'.$_SESSION['email'].'"';
    $count_result = mysqli_query($connect, $count);
    $count_row = mysqli_fetch_assoc($count_result);
    $cart_count = $count_row['cart_count'];
    if ($cart_count > 0) {
        //mặc định các biến khai báo trong hàm k thể truy cập được , đánh dấu $connect là global cho phép trong hàm có thể truy cập dc
        $select_query = "SELECT *
        FROM products
        JOIN cart ON products.product_id = cart.product_id
        WHERE email = '".$_SESSION['email']."'";
        $result_query = mysqli_query($connect, $select_query);

        echo '<h4 class="cart-heading">Sản phẩm đã thêm</h4>';
        while ($row = mysqli_fetch_assoc($result_query)) {
            $product_id = $row['product_id'];
            $product_title = $row['product_title'];
            $product_price = $row['product_price'];
            $product_description = $row['product_description'];
            $formatted_price = number_format($product_price, 0, ',', '.') . 'đ';
            $product_discount = $row['product_discount'];
            $formatted_discount = number_format($product_discount, 0, ',', '.') . 'đ';
            $products_image = $row['products_image'];
            $quantity = $row['quantity'];
            echo "  
                 <div class='cart-preview-item'>
                     <img src='";
            echo ASSETS_PATH;
            echo "/assets/$products_image' class='cart-preview-image' alt=''>
                     <span class='cart-preview-title'>$product_title</span>
                     <div style='display: flex;gap:5px;'>
                         <span>$formatted_discount</span>
                         <span>x$quantity</span>
                    </div>
                </div>";

        }
    } else {
        echo "  
            <div>
            <img src='";
        echo ASSETS_PATH;
        echo "/assets/empty.webp' style='width:100%;height:150px;' alt=''>
        </div>
        <div>
            <p style='text-align:center;'>Chưa Có Sản Phẩm</p>
        </div>";
    }
}
function login()
{
    // session_start();
    global $connect;
    if (isset($_POST['login'])) {
        $email = $_POST['email'];
        $password = $_POST['password'];

        $select = mysqli_query($connect, "select * from `users` where email='$email'");
        $row = mysqli_fetch_assoc($select);
        if (is_array($row)) {
            $_SESSION['id'] = $row['id'];
            $_SESSION['email'] = $row['email'];
            $_SESSION['createdAt'] = $row['createdAt'];
            $_SESSION['password'] = $row['password'];
            $_SESSION['role'] = $row['role'];
            $_SESSION['name'] = $row['name'];
            $_SESSION['address'] = $row['address'];
            $_SESSION['phone'] = $row['phone'];
            if (isset($_SESSION['email']) && password_verify($password,$row["password"])) {
                switch($_SESSION['role']){
                    case "admin":
                        echo "<script>alert('Đăng nhập thành công')</script>";
                        echo "<script>window.location.href='http://localhost/ecommerce/admin/admin.php';</script>";
                        exit;
                    case "user":
                        echo "<script>alert('Đăng nhập thành công')</script>";
                        header('Location: http://localhost/ecommerce/layout_user/homepage.php');
                        exit;
                }
            } else {
                echo "<script type='text/javascript'>alert('Invalid email or password')</script>";
            }
        }
    }
}

function register()
{

    global $connect;
    if (isset($_POST['insert-user'])) {
        $email = $_POST['email'];
        $password = $_POST['password'];

        $hashed_password = password_hash($password,PASSWORD_DEFAULT);

        $check_query = "select * from `users` where email='$email'";
        $check_result = mysqli_query($connect, $check_query);
        if (mysqli_num_rows($check_result) > 0) {
            echo "<script>alert('Email đã tồn tại trong cơ sở dữ liệu. Vui lòng chọn email khác.')</script>";
            echo "<script>window.location.href='http://localhost/ecommerce/login-register/register.php';</script>";
            exit();
        } else {
            $insert_query = "insert into `users`(email,password,role) VALUES ('$email','$hashed_password','user')";
            $result_query = mysqli_query($connect, $insert_query);
            if ($result_query) {
                echo "<script>alert('Tạo mới người dùng thành công !')</script>";
                echo "<script>window.location.href='http://localhost/ecommerce/login-register/login.php';</script>";
                exit();
            } else {
                echo "<script>alert('Đã xảy ra lỗi khi đăng ký!')</script>";
                echo "<script>window.location.href='http://localhost/ecommerce/login-register/login.php';</script>";
                exit();
            }
        }

    }
}

