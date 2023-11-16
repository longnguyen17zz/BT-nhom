<?php
if (!isset($_SESSION['email'])) {
    echo "
    <header>
    <div id='navbar'>
        <!--Navbar-->
        <div class='container'>                   
            <nav class='navbar navbar-expand-lg navbar-light flex-nav '>                      
                <a class='logo-navbar' href='";echo HEADER_PATH; echo "index.php'>
                    <img class='nav_logo-img' src='";echo ASSETS_PATH; echo "/assets/Main_logo.png' class='logo' alt=''>
                </a>
                <label for='mobile-search-checkbox' class='header__mobile-search hide-on-pc hide-on-tablet'>
                    <i class='fa-solid fa-eject fa-rotate-180 header__search-icon'></i>
                </label>

                <label for='nav-mobile-input' class='nav__bars-btn hide-on-pc'>
                    <i class='fa-solid fa-bars'></i>
                </label>

                <!-- <label for='mobile-toggle-checkbox' class='navbar-toggler hide-on-tablet' type='button' data-bs-toggle='collapse' data-bs-target='#collapseExample' aria-controls='navbarSupportedContent' aria-expanded='false' aria-label='Toggle navigation'>
                    <span class='navbar-toggler-icon'></span>
                </label> -->
                <input type='checkbox' hidden name='' id='nav-mobile-input' class='nav__input'>

                <label for='nav-mobile-input' class='nav__overlay'></label>

                <nav class='nav__mobile'>
                    <label for='nav-mobile-input' class='c'>
                        <i class='fa-solid fa-xmark'></i>
                    </label>
                    <ul class='navbar-nav-mobile'>
                        <li class='nav-item first-item'>
                            <a href='";echo HEADER_PATH; echo "index.php' class='nav-link'>Trang chủ</a>
                        </li>
                        <li class='nav-item'>
                            <a href='";echo HEADER_PATH; echo "shop.php' class='nav-link '>Hệ Thống Cửa hàng</a>
                        </li>
                        <li class='nav-item'>
                            <a href='";echo HEADER_PATH; echo "warranty.php' class='nav-link '>Bảo hành</a>
                        </li>
                        <hr>
                        <li class='nav-item hide-on-pc hide-on-tablet'>
                            <a href='../login-register/login.php'>Đăng nhập</a>
                        </li>
                        <li class='nav-item hide-on-pc hide-on-tablet'>
                            <a href='../login-register/register.php'>Đăng kí</a>
                        </li>

                    </ul>
                </nav>

                <input type='checkbox' hidden id='mobile-search-checkbox' class='header__search-checkbox'>
                        <form class='form-inline my-2 my-lg-0 header__search' action='search_product.php'>
                            <input class='form-control' id='header__search-input' type='text'
                                placeholder='Nhập để tìm kiếm sản phẩm' aria-label='Search' name='product_name'>
                            <button type='submit' class='header__search-btn' name='search_product'>
                                <i class='fa-solid fa-magnifying-glass header__search-btn-icon'></i>
                            </button>
                        </form>

                        <div class='header__navbar-action'>
                            <div class='dropdown hide-on-mobile'>
                                <i class='fa-solid fa-user cart-item' data-bs-toggle='dropdown'
                                    aria-expanded='false'></i>
                                <ul class='dropdown-menu' aria-labelledby='dropdownMenuButton'>
                                    <li><a class='dropdown-item' href='../login-register/login.php'>Đăng nhập</a>
                                    </li>
                                    <li><a class='dropdown-item' href='../login-register/register.php'>Đăng ký</a>
                                    </li>
                                </ul>
                            </div>
                            <div class='cart-btn'>
                                <a href='#!'>
                                    <i class='fa-solid fa-cart-shopping cart-item '></i>
                                </a>
                                <span class='header__cart-notice'>
                                    0
                                </span>
                                <div class='cart-preview'>
                                    <div>
                                        <img src='../assets/empty.webp' style='width:100%;height:100px;' alt=''>
                                    </div>
                                    <div>
                                        <p class='cart-message'>Chưa Có Sản Phẩm</p>
                                    </div> 
                                </div>
                            </div>
                        </div>

                <div class='collapse navbar-collapse ' id='collapseExample'>
                    <ul class='navbar-nav'>
                        <li class='nav-item'>
                            <a href='";echo HEADER_PATH; echo "index.php' class='nav-link'>Trang chủ</a>
                        </li>
                        <li class='nav-item'>
                            <a href='";echo HEADER_PATH; echo "shop.php' class='nav-link '>Hệ Thống Cửa hàng</a>
                        </li>
                        <li class='nav-item'>
                            <a href='";echo HEADER_PATH; echo "warranty.php' class='nav-link '>Bảo hành</a>
                        </li>
                        <li class='nav-item contact'>
                            <span class='nav-link'>Liên hệ</span>
                            <ul>
                                <li>Chăm sóc khách hàng: 18006789</li><hr>
                                <li>Tư vấn mua hàng: 18006898</li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
        <!--End Navbar-->
    </div>
    
</header>
            ";
} else {
    echo "
    <header>
    <div id='navbar'>
        <!--Navbar-->
        <div class='container'>                   
            <nav class='navbar navbar-expand-lg navbar-light flex-nav '>                      
                <a class='logo-navbar' href='";echo HEADER_PATH; echo "index.php'>
                    <img class='nav_logo-img' src='";echo ASSETS_PATH; echo "/assets/Main_logo.png' class='logo' alt=''>
                </a>
                <label for='mobile-search-checkbox' class='header__mobile-search hide-on-pc hide-on-tablet'>
                    <i class='fa-solid fa-eject fa-rotate-180 header__search-icon'></i>
                </label>

                <label for='nav-mobile-input' class='nav__bars-btn hide-on-pc'>
                    <i class='fa-solid fa-bars'></i>
                </label>

                <!-- <label for='mobile-toggle-checkbox' class='navbar-toggler hide-on-tablet' type='button' data-bs-toggle='collapse' data-bs-target='#collapseExample' aria-controls='navbarSupportedContent' aria-expanded='false' aria-label='Toggle navigation'>
                    <span class='navbar-toggler-icon'></span>
                </label> -->
                <input type='checkbox' hidden name='' id='nav-mobile-input' class='nav__input'>

                <label for='nav-mobile-input' class='nav__overlay'></label>

                <nav class='nav__mobile'>
                    <label for='nav-mobile-input' class='c'>
                        <i class='fa-solid fa-xmark'></i>
                    </label>
                    <ul class='navbar-nav-mobile'>
                        <li class='nav-item first-item'>
                            <a href='";echo HEADER_PATH; echo "index.php' class='nav-link'>Trang chủ</a>
                        </li>
                        <li class='nav-item'>
                            <a href='";echo HEADER_PATH; echo "shop-login.php' class='nav-link '>Hệ Thống Cửa hàng</a>
                        </li>
                        <li class='nav-item'>
                            <a href='";echo HEADER_PATH; echo "warranty-login.php' class='nav-link '>Bảo hành</a>
                        </li>
                        <hr>
                        <li><a class='dropdown-item' href='";echo USER_PATH; echo "info.php'>Thông tin cá nhân</a></li>
                        <li><a class='dropdown-item' href='";echo USER_PATH; echo "orders.php'>Đơn hàng</a></li>
                        <li><a class='dropdown-item' href='";echo LOGOUT_PATH; echo "login-register/logout.php'>Đăng xuất</a></li>

                    </ul>
                </nav>

                <input type='checkbox' hidden id='mobile-search-checkbox' class='header__search-checkbox'>
                        <form class='form-inline my-2 my-lg-0 header__search' action='search_product.php'>
                            <input class='form-control' id='header__search-input' type='text'
                                placeholder='Nhập để tìm kiếm sản phẩm' aria-label='Search' name='product_name'>
                            <button type='submit' class='header__search-btn' name='search_product'>
                                <i class='fa-solid fa-magnifying-glass header__search-btn-icon'></i>
                            </button>
                        </form>

                        <div class='header__navbar-action'>
                            <div class='dropdown hide-on-mobile'>
                                <i class='fa-solid fa-user cart-item' data-bs-toggle='dropdown'
                                    aria-expanded='false'></i>
                                <ul class='dropdown-menu' aria-labelledby='dropdownMenuButton'>
                                    <li><a class='dropdown-item' href='";echo USER_PATH; echo "info.php'>Thông tin cá nhân</a></li>
                                    <li><a class='dropdown-item' href='";echo USER_PATH; echo "orders.php'>Đơn hàng</a></li>
                                    <li><a class='dropdown-item' href='";echo LOGOUT_PATH; echo "login-register/logout.php'>Đăng xuất</a></li>
                                </ul>
                            </div>
                            <div class='cart-btn'>
                                <a href='#!'>
                                    <i class='fa-solid fa-cart-shopping cart-item '></i>
                                </a>
                                <span class='header__cart-notice'>
                                ";
                                    echo cart_item();
                                    echo "
                                </span>
                                <div class='cart-preview'>
                                ";
                                    echo cart_preview();
                                    echo "
                                    <a href='";echo CART_PATH; echo "product/list_product.php'>
                                        <button class='header_cart_view_all'>Xem tất cả</button>
                                    </a>
                                </div>
                            </div>
                        </div>

                <div class='collapse navbar-collapse ' id='collapseExample'>
                    <ul class='navbar-nav'>
                        <li class='nav-item'>
                            <a href='";echo HEADER_PATH; echo "index.php' class='nav-link'>Trang chủ</a>
                        </li>
                        <li class='nav-item'>
                            <a href='";echo HEADER_PATH; echo "shop-login.php' class='nav-link '>Hệ Thống Cửa hàng</a>
                        </li>
                        <li class='nav-item'>
                            <a href='";echo HEADER_PATH; echo "warranty-login.php' class='nav-link '>Bảo hành</a>
                        </li>
                        <li class='nav-item contact'>
                            <span class='nav-link'>Liên hệ</span>
                            <ul>
                                <li>Chăm sóc khách hàng: 18006789</li><hr>
                                <li>Tư vấn mua hàng: 18006898</li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
        <!--End Navbar-->
    </div>
    
</header>
            ";
}

?>