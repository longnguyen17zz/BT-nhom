<?php
session_start();
include('../connect/connect.php');
include('../function/common_function.php');
if (isset($_SESSION['email'])) {
    header('Location: http://localhost/ecommerce/layout_user/homepage.php');
    exit();
}
define('ASSETS_PATH', '..');
define('HEADER_PATH', '../layout_user/');
define('FOOTER_PATH', '../footer_info');
define('USER_PATH', '../user/');
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
    <link rel="stylesheet" href="../css/animation.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <title>Ecommerce Website</title>
</head>

<body>
    <main>
        <?php
        global $connect;
        $results_per_page = 8;
        $query = "SELECT * FROM `products`";
        $result = mysqli_query($connect, $query);
        $number_of_result = mysqli_num_rows($result);
        // Determine the total number of pages available  
        $number_of_page = ceil($number_of_result / $results_per_page);
        $pageURL = intval($_GET['page']);
        $pageURLNext = ($pageURL <  $number_of_page) ? ($pageURL + 1) : $pageURL;
        $pageURLPrev = ($pageURL > 1) ? ($pageURL -1) : $pageURL;
        ?>
        <?php
        include('../layout/contact_on_mobile.php');
        ?>
        <!--Header-->
        <?php
        include('../layout/header.php');
        ?>
        <!--End Header-->
        <!--Slider-->
        <div class="slider">
            <div id="carouselExample" class="carousel slide container hide-on-mobile">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="../assets/Slide-i5.png" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item ">
                        <img src="../assets/slider-3.jpg" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="../assets/slide-4.jpg" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="../assets/slider_2.jpg" class="d-block w-100" alt="...">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExample"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
        <!--End Slider-->
        <!--Introduction Brand-->
        <div class="intro-brand hide-on-mobile">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <div class="container-brand">
                            <img src="../assets/dell.png" alt="">
                            <div class="container-brand-p">
                                <p>Thương hiệu nổi bật</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="container-brand">
                            <img src="../assets/asus_logo.jpg" alt="">
                            <div class="container-brand-p">
                                <p>Thương hiệu nổi bật</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="container-brand">
                            <img src="../assets/lenovo.png" alt="">
                            <div class="container-brand-p">
                                <p>Thương hiệu nổi bật</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="layout-main">
            <div class="container">
                <div class="row row_1">
                    <div class="col-md-2 category hide-on-mobile">
                        <h4>Danh mục</h4>
                        <ul class="category-title-list">
                            <li class="category-title-item">
                                <i class="fa-solid fa-laptop"></i>
                                <a href="filter_product.php?list=LT" class="category-item-link">Laptop</a>
                            </li>
                            <li class="category-title-item">
                                <i class="fa-solid fa-computer"></i>
                                <a href="filter_product.php?list=PC" class="category-item-link"> PC</a>
                            </li>
                            <li class="category-title-item">
                                <i class="fa-solid fa-tv"></i>
                                <a href="filter_product.php?list=MN" class="category-item-link">Màn hình</a>
                            </li>
                            <li class="category-title-item">
                                <i class="fa-solid fa-computer-mouse"></i>
                                <a href="filter_product.php?list=MS" class="category-item-link" style='margin-left:7px;'>Chuột</a>
                            </li>
                            <li class="category-title-item">
                                <i class="fa-solid fa-keyboard"></i>
                                <a href="filter_product.php?list=KB" class="category-item-link">Bàn phím</a>
                            </li>
                            <li class="category-title-item">
                                <i class="fa-solid fa-headphones"></i>
                                <a href="filter_product.php?list=HP" class="category-item-link">Tai nghe</a>
                            </li>
                        </ul>
                    </div>
                    <nav class="mobile-category hide-on-pc hide-on-tablet">
                        <ul class="mobile-category__list">
                            <li class="mobile-category__item">
                                <a href="filter_product.php?list=LT" class="mobile-category__link button">
                                    Laptop
                                </a>
                            </li>
                            <li class="mobile-category__item">
                                <a href="filter_product.php?list=PC" class="mobile-category__link button">
                                    PC
                                </a>
                            </li>
                            <li class="mobile-category__item">
                                <a href="filter_product.php?list=MN" class="mobile-category__link button">
                                    Màn hình
                                </a>
                            </li>
                            <li class="mobile-category__item">
                                <a href="filter_product.php?list=MS" class="mobile-category__link button">
                                    Chuột
                                </a>
                            </li>
                            <li class="mobile-category__item">
                                <a href="filter_product.php?list=KB" class="mobile-category__link button">
                                    Bàn phím
                                </a>
                            </li>
                            <li class="mobile-category__item">
                                <a href="filter_product.php?list=HP" class="mobile-category__link button">
                                    Bàn ghế gaming
                                </a>
                            </li>
                        </ul>
                    </nav>
                    <div class="col-md-10 product-box">
                        <h4>Danh sách sản phẩm</h4>
                        <div class="product-filter">
                            <span>Sắp xếp</span>
                            <div class="product-filter-btn--active">
                                Phổ biến
                            </div>
                            <div class="select-input">
                                <div class="select-input-block">
                                    <span class="select-input__label">Giá</span>
                                    <i class="fa-solid fa-chevron-down select-input__icon"></i>
                                </div>
                                <ul class="select-input__list">
                                    <li class="select-input__item">
                                        <a href="filter_price.php?price=asc">
                                            <input class="input_css" name="filter_low" type="submit"
                                                value="Tăng dần">
                                        </a>
                                    </li>
                                    <li class="select-input__item">
                                        <a href="filter_price.php?price=desc">
                                            <input class="input_css input_css_border" name="filter_hight" type="submit"
                                                value="Giảm dần">
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <div class="row" data-aos="fade-right" data-aos-duration="500">
                            <?php
                            // filter_product();
                            page_pagination();
                            ?>
                        </div>

                        <ul class='pagination home-product__pagination' style="margin: 30px 20px;">
                            <li class='pagination-item '>
                                <a href='../layout_user/index.php?page=<?php echo $pageURLPrev; ?>' id="prevPage" class='pagination-item__link'>
                                    <i class='pagination-item__icon'><i class="fa-solid fa-chevron-left"></i></i>
                                </a>
                            </li>

                            <?php
                            display_list_number();
                            ?>

                            <li class='pagination-item'>
                                <a href='../layout_user/index.php?page=<?php echo $pageURLNext; ?>' id="nextPage" class='pagination-item__link'>
                                    <i class='pagination-item__icon'><i
                                            class="fa-solid fa-chevron-right"></i></i>
                                </a>
                            </li>
                        </ul>

                    </div>
                </div>
            </div>
        </div>
        <!--End Layout-->
        <!--Footer-->
        <?php
        include('../layout/footer.php');
        ?>
        <!--End Footer-->
    </main>
    <script>
        document.addEventListener("DOMContentLoaded", function () {
            // Lưu vị trí cuộn trang khi tải trang lần đầu tiên
            sessionStorage.setItem("initialScrollPosition", window.scrollY);

            // Kiểm tra nếu có vị trí cuộn đã được lưu, thì thiết lập lại vị trí đó
            const savedScrollPosition = sessionStorage.getItem("savedScrollPosition");
            if (savedScrollPosition) {
                window.scrollTo(0, savedScrollPosition);
            }
        });

        // Lắng nghe sự kiện trước khi tải trang
        window.addEventListener("beforeunload", function () {
            // Lưu vị trí cuộn trang trước khi tải lại trang
            sessionStorage.setItem("savedScrollPosition", window.scrollY);
        });
    </script>

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