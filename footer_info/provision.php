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
    <link rel="stylesheet" href="../css/grid.css">
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
        <!-- Provision -->
        
                
        <div class="provision" style="margin: 100px auto; width:80vw;">
            <div class="bread-crumb">
                <ul class="bread-crumb-item">
                    <li>
                        <a href="../layout_user/index.php">Trang chủ</a>
                        <span>&nbsp;/&nbsp;</span>
                    </li>
                    <li>
                        <span>ĐIỀU KHOẢN</span>
                        <span>&nbsp;/&nbsp;</span>
                    </li>
                </ul>
            </div>

            <div class="header_provision">
                <h1>ĐIỀU KHOẢN</h1>
            </div>
            <div class="rule">
                <div class="text-center" style="font-size: 25px;"> <strong>QUY CHẾ HOẠT ĐỘNG WEBSITE CUNG CẤP DỊCH VỤ TECH SHOP</strong></div>
                <strong>I.Nguyên Tắc chung</strong>
                <p>- Website thương mại điện tử Techshop.com.vn do Công ty Cổ Phần Bán lẻ kỹ thuật số TECH SHOP (“Công
                    ty”) thực hiện hoạt động và vận hành. Đối tượng phục vụ là tất cả khách hàng trên 63 tỉnh thành Việt
                    Nam có nhu cầu mua hàng nhưng không có thời gian đến shop hoặc đặt trước để khi đến shop là đảm bảo
                    có hàng.</p>
                <p>- Sản phẩm được kinh doanh tại www.Techshop.com.vn phải đáp ứng đầy đủ các quy định của pháp luật,
                    không bán hàng nhái, hàng không rõ nguồn gốc, hàng xách tay.</p>
                <p> - Hoạt động mua bán tại Techshop.com.vn phải được thực hiện công khai, minh bạch, đảm bảo quyền lợi
                    của người tiêu dùng.</p>
            </div>
            <div class="regulations">
                <strong>II.Quy định chung</strong><br><br>
                <p><strong>Người bán</strong> là Công ty cổ phần bán lẻ kĩ thuật số</p>
                <p><strong>Người mua</strong> là công dân Việt Nam trên khắp 63 tỉnh thành. Người mua có quyền đăng ký
                    tài khoản hoặc không cần đăng ký để thực hiện giao dịch.</p>
                <p><strong>Thành viên</strong> là bao gồm cả người mua và người tham khảo thông tin, thảo luận tại
                    website.</p>
                <p>Nội dung bản Quy chế này tuân thủ theo các quy định hiện hành của Việt Nam. Thành viên khi tham gia
                    website TMĐT FPTshop.com.vn phải tự tìm hiểu trách nhiệm pháp lý của mình đối với luật pháp hiện
                    hành của Việt Nam và cam kết thực hiện đúng những nội dung trong Quy chế này.</p>
            </div>
            <div class="transport">
                <strong>III.Quy trình giao dịch</strong><br><br>
                <strong>Quy trình giao vận chuyển</strong>
                <p>- FPTshop.com.vn thực hiện giao hàng trên toàn quốc. Khi nhận đơn hàng từ người mua và sau khi đã xác
                    nhận thông tin mua hàng qua điện thoại, Tech Shop sẽ tiến hành giao hàng theo yêu cầu của quý khách
                    hàng:</p>
                <p>- Giữ hàng tại các cửa hàng của FPTShop trên toàn quốc và người mua sẽ đến trực tiếp cửa hàng kiểm
                    tra và nhận hàng.</p>
                <p>- Giao hàng tận nơi trên toàn bộ 63 tỉnh thành</p>
                <p>- FPT Shop nhận giao đơn hàng có thời gian hẹn giao tại nhà trước 21h00 đối với Điện thoại, Máy tính
                    bảng và trước 20h00 đối với Máy tính xách tay.</p>
                <p>- Miễn phí giao hàng trong bán kính 20km có đặt shop.</p>
                <p>- Với những đơn hàng giao tại nhà và có giá trị từ 50 triệu đồng trở lên, Quý khách vui lòng thanh
                    toán trước 100% giá trị đơn hàng.</p>
            </div>
            <div class="">
                <strong>IX.Đảm bảo an toàn giao dịch</strong><br><br>
                <p>- Ban quản lý đã sử dụng các dịch vụ để bảo vệ thông tin về nội dung mà người bán đăng sản phẩm trên
                    Tech shop Để đảm bảo các giao dịch được tiến hành thành công, hạn chế tối đa rủi ro có thể phát
                    sinh.</p>
                <p>- Người mua nên cung cấp thông tin đầy đủ (tên, địa chỉ, số điện thoại, email) khi tham gia mua hàng
                    của Tech shop để Tech shop có thể liên hệ nhanh lại với người mua trong trường hợp xảy ra lỗi.</p>
                <p>- Trong trường hợp giao dịch nhận hàng tại nhà của người mua, thì người mua chỉ nên thanh toán sau
                    khi đã kiểm tra hàng hoá chi tiết và hài lòng với sản phẩm.</p>
                <p>- Khi thanh toán trực tuyến bằng thẻ ATM nội địa, Visa, Master người mua nên tự mình thực hiện và
                    không được để lộ thông tin thẻ. FPTshop.com.vn không lưu trữ thông tin thẻ của người mua sau khi
                    thanh toán, mà thông qua hệ thống của ngân hàng liên kết. Nên tuyệt đối bảo mật thông tin thẻ cho
                    khách hàng.</p>
                <p>- Trong trường lỗi xảy ra trong quá trình thanh toán trực tuyến, Công ty bán lẻ kỹ thuật số sẽ là đơn
                    vị giải quyết cho khách hàng trong vòng 1 giờ làm việc từ khi tiếp nhận thông tin từ người thực hiện
                    giao dịch.</p>
            </div>
            <div class="">
                <strong>V.Quyền và trách nhiệm thành viên tham gia Tech shop</strong><br><br>
                <strong> Quyền của Thành viên tham gia Tech shop</strong>
                <p>- Khi đăng ký trở thành thành viên của Tech shop và được Tech shop đồng ý, thành viên sẽ được tham
                    gia thảo luận, đánh giá sản phẩm, mua hàng tại Tech shop .</p>
                <p>- Thành viên có quyền đóng góp ý kiến cho Website TMĐT Tech shop trong quá trình hoạt động. Các kiến
                    nghị được gửi trực tiếp bằng thư, fax hoặc email đến cho Website TMĐT Tech shop</p>
                <strong>Nghĩa vụ của thành viên </strong>
                <p>- Thành viên sẽ tự chịu trách nhiệm về bảo mật và lưu giữ và mọi hoạt động sử dụng dịch vụ dưới tên
                    đăng ký, mật khẩu và hộp thư điện tử của mình.</p>
                <p>- Thành viên cam kết những thông tin cung cấp cho Website TMĐT Tech shop và những thông tin đang tải
                    lên Website TMĐT Tech shop là chính xác.</p>
                <p>- Thành viên cam kết không được thay đổi, chỉnh sửa, sao chép, truyền bá, phân phối, cung cấp và tạo
                    những công cụ tương tự của dịch vụ do Website TMĐT Tech shop cung cấp cho một bên thứ ba nếu không
                    được sự đồng ý của Website TMĐT Tech shop trong Quy định này.</p>
                <p>- Thành viên không được hành động gây mất uy tín của Website TMĐT Tech shop dưới mọi hình thức như
                    gây mất đoàn kết giữa các thành viên bằng cách sử dụng tên đăng ký thứ hai, thông qua một bên thứ ba
                    hoặc tuyên truyền, phổ biến những thông tin không có lợi cho uy tín của Website TMĐT Tech shop.</p>
            </div>
            <div class="">
                <strong>VI.Điều khoản áp dụng</strong><br><br>
                <p>- Mọi tranh chấp phát sinh giữa Website TMĐT FPTshop.com.vn và thành viên sẽ được giải quyết trên cơ
                    sở thương lượng. Trường hợp không đạt được thỏa thuận như mong muốn, một trong hai bên có quyền đưa
                    vụ việc ra Tòa án nhân dân có thẩm quyền tại Thành phố Hồ Chí Minh để giải quyết.</p>
                <p>- Quy chế của Website TMĐT FPTshop.com.vn chính thức có hiệu lực thi hành kể từ ngày ký Quyết định
                    ban hành kèm theo Quy chế này. Website TMĐT FPTshop.com.vn có quyền và có thể thay đổi Quy chế này
                    bằng cách thông báo lên Website TMĐT FPTshop.com.vn cho các thành viên biết. Quy chế sửa đổi có hiệu
                    lực kể từ ngày Quyết định về việc sửa đổi Quy chế có hiệu lực. Việc thành viên tiếp tục sử dụng dịch
                    vụ sau khi Quy chế sửa đổi được công bố và thực thi đồng nghĩa với việc họ đã chấp nhận Quy chế sửa
                    đổi này.</p>
            </div>
        </div>
        <!-- End Provision -->
        <!--Footer-->
        <?php include('../layout/footer.php'); ?>
        <!--End Footer-->
    </main>
    <script src="./bootstrap/bootstrap.js"></script>
    <script src="./js/action.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>
</body>

</html>