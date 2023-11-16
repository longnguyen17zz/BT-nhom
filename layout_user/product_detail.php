<?php
session_start();
include('../connect/connect.php');
include('../function/common_function.php');
define('ASSETS_PATH', '..');
define('HEADER_PATH', '../layout_user/');
define('FOOTER_PATH', '../footer_info');
define('USER_PATH', '../user/');
define('LOGOUT_PATH', '../');
define('CART_PATH', '../');
if (isset($_POST['add-product']) && isset($_POST['product-quantity'])) {
    if (!isset($_SESSION['email'])) {
        echo "<script>window.open('http://localhost/ecommerce/login-register/login.php','_self')</script>";
    } else {
        global $connect;
        $id = $_POST['product_id'];
        $quantity = $_POST['product-quantity'];
        $email = $_SESSION['email'];
        $insert_query = "INSERT INTO `cart` (quantity, product_id,email)
        VALUES ($quantity, '$id','$email')
        ON DUPLICATE KEY
        UPDATE quantity = quantity + VALUES(quantity)";
        $select_query = "select count (*) from `cart` where product_id = '$id'";
        if ($quantity === '0') {
            echo "<script>alert('ERROR')</script>";
            echo "<script>window.open('product_detail.php?product_id=$id','_self')</script>";
        } else {
            $result_query = mysqli_query($connect, $insert_query);
            // echo "<script>alert('Added item to cart!')</script>";
            // echo "<script>window.open('index.php','_self')</script>";
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
    <link rel="stylesheet" href="../bootstrap/bootstrap.css">
    <link rel="stylesheet" href="../css/styles.css">
    <link rel="stylesheet" href="../css/product_detail.css">
    <link rel="stylesheet" href="../css/animation.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
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
        <!--End Header-->
       
        <div class="product_view_detail">
        <div id="toastBox"></div>
            <div class="container">

                <div class="row">
                    <?php
                    view_details();
                    ?>
                </div>
            </div>
        </div>
        
        <!--Footer-->
        <?php
        include('../layout/footer.php');
        ?>
        <!--End Footer-->
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
    <script>
        function increaseValue() {
            var value = parseInt(document.getElementById("product-quantity").value, 10);
            value = isNaN(value) ? 0 : value;
            value++;
            document.getElementById("product-quantity").value = value;
        }

        function decreaseValue() {
            var value = parseInt(document.getElementById("product-quantity").value, 10);
            value = isNaN(value) ? 0 : value;
            value < 1 ? (value = 1) : "";
            value--;
            document.getElementById("product-quantity").value = value;
        }
    </script>
    <script src="../bootstrap/bootstrap.js"></script>
    <script src="../js/action.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
</body>

</html>