<?php
session_start();
include('../connect/connect.php');
include('../function/common_function.php');
define('ASSETS_PATH', '..');
define('HEADER_PATH', '../layout_user/');
define('FOOTER_PATH', '../footer_info');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../bootstrap/bootstrap.css">
    <link rel="stylesheet" href="../css/grid.css">
    <link rel="stylesheet" href="../css/styles.css">
    <title>Ecommerce Website</title>
</head>

<body>
    <main>
        <?php
        include('../layout/contact_on_mobile.php');
        ?>
        <!--Header-->
        <?php include('../layout/header.php'); ?>
        <div class=" mx-auto warranty" style="width:80vw;padding-top:120px; display:block;">
            <h2 class="heading-warranty" >Chính sách bảo hành</h2>
            <p class="text-center">Chính sách bảo hành tại Tech Shop</p>
            <p class="text-center">*Lưu ý: Các thiết bị bảo hành phải trong thời gian bảo hành và còn nguyên tem của
                Tech Shop.</p>
            <div class="main-warranty">
                <p class="text-justify">Đầu tiên, xin chân thành cảm ơn Quý khách đã tin tưởng và lựa chọn mua sắm tại
                    FPTShop.</p>
                <p class="text-justify">Với phương châm “Quyền lợi của Khách hàng là quan trọng nhất”, tất cả các sản
                    phẩm mua tại Hệ thống Tech Shop toàn quốc đều được áp dụng chính sách bảo hành theo đúng quy định
                    của Hãng.</p>
                <p class="text-justify">ĐẶC BIỆT, đối với sản phẩm là Điện thoại di động, Máy tính bảng, Laptop khách
                    hàng được hưởng chính sách riêng của Tech Shop:</p>
                <strong>“MIỄN PHÍ 1 ĐỔI 1 NẾU CÓ LỖI PHẦN CỨNG TRONG VÒNG 30 NGÀY ĐẦU TIÊN MUA HÀNG”.</strong>
            </div>
            <div>
                <strong>Quý khách vui lòng lưu ý 1 số nội dung sau:</strong>
                <ol>
                    <li>Chương trình bảo hành bắt đầu có hiệu lực từ thời điểm Tech Shop xuất hóa đơn cho Quý khách.
                    </li>
                    <li>Với mỗi dòng sản phẩm khác nhau sẽ có chính sách bảo hành khác nhau tùy theo chính sách của
                        Hãng/Nhà cung cấp.</li>
                    <li>Để tìm hiểu thông tin chi tiết về chính sách bảo hành cho sản phẩm cụ thể, xin liên hệ bộ phận
                        Chăm sóc Khách hàng của Tech Shop:<strong>1800 6996</strong></li>
                </ol>
            </div>
            <div>
                <strong>Các trường hợp nằm ngoài chính sách bảo hành:</strong>
                <p>Những trường hợp dưới đây sẽ không nằm trong chính sách bảo hành miễn phí của Nhà sản xuất:</p>
                <ul>
                    <li style="list-style: disc;">Sản phẩm hết hạn bảo hành.</li>
                    <li style="list-style: disc;">Sản phẩm đã bị thay đổi, sửa chữa không thuộc các Trung Tâm Bảo Hành
                        Ủy Quyền của Hãng.</li>
                    <li style="list-style: disc;">Sản phẩm lắp đặt, bảo trì, sử dụng không đúng theo hướng dẫn của Nhà
                        sản xuất gây ra hư hỏng.</li>
                    <li style="list-style: disc;">Sản phẩm trong tình trạng bị khóa tài khoản cá nhân như: Tài khoản
                        khóa máy/màn hình, khóa tài khoản trực tuyến Gmail, iCloud...</li>
                    <li style="list-style: disc;">Khách hàng sử dụng phần mềm, ứng dụng không chính Hãng, không bản
                        quyền.</li>
                    <li style="list-style: disc;">Màn hình có bốn (04) điểm chết trở xuống.</li>
                </ul>
            </div>
            <div>
                <strong>Ngoài ra, cơ chế bảo hành cũng không có hiệu lực đối với các lỗi thường thấy nhưng không đến từ
                    nhà sản xuất như:</strong>
                <p>Những trường hợp dưới đây sẽ không nằm trong chính sách bảo hành miễn phí của Nhà sản xuất:</p>
                <ul>
                    <li style="list-style: disc;">Sản phẩm lỗi do ngấm nước, chất lỏng và bụi bẩn. Quy định này áp dụng
                        cho cả những thiết bị đạt chứng nhận chống bụi/chống nước cao nhất là IP68..</li>
                    <li style="list-style: disc;">Sản phẩm bị biến dạng, nứt vỡ, cấn móp, trầy xước nặng do tác động
                        nhiệt, tác động bên ngoài.</li>
                    <li style="list-style: disc;">Sản phẩm có vết mốc, rỉ sét hoặc bị ăn mòn, oxy hóa bởi hóa chất.</li>
                    <li style="list-style: disc;">Sản phẩm bị hư hại do thiên tai, hỏa hoạn, lụt lội, sét đánh, côn
                        trùng, động vật vào.</li>
                </ul>
            </div>
            <div>
                <strong>Một số lưu ý trước khi bảo hành</strong>
                <ul>
                    <li style="list-style: disc;">Trong quá trình thực hiện dịch vụ bảo hành, các nội dung lưu trữ trên
                        sản phẩm của Quý khách sẽ bị xóa và định dạng lại. Do đó, Quý khách vui lòng tự sao lưu toàn bộ
                        dữ liệu trong sản phẩm, đồng thời gỡ bỏ tất cả các thông tin cá nhân mà Quý khách muốn bảo mật.
                        Tech Shop không chịu trách nhiệm đối với bất kỳ mất mát nào liên quan tới các chương trình phần
                        mềm, dữ liệu hoặc thông tin nào khác lưu trữ trên sản phẩm bảo hành.</li>
                    <li style="list-style: disc;">Vui lòng tắt tất cả các mật khẩu bảo vệ, Tech Shop sẽ từ chối tiếp
                        nhận bảo hành nếu thiết bị của bạn bị khóa bởi bất cứ phương pháp nào.</li>
                </ul>
            </div>
            <p>Khách hàng có thể bảo hành máy tại các cửa hàng Tech Shop trên toàn quốc cũng như trung tâm bảo hành
                chính
                hãng sản phẩm</p>
            <!-- <div style="display:flex;flex-wrap:wrap;gap:20px;"> -->
            <div class="container" style="margin-bottom: 20px;">
                <div class="row">
                    <div class="col-4">
                        <div style="background:#ccc;padding:15px;">
                            <a href="#!">
                                <img src="../assets/baohanh/apple.png" alt="" style="display:block;margin:0 auto;">
                            </a>
                        </div>
                    </div>
                    <div class="col-4">
                        <div style="background:#ccc;padding:27px;">
                            <a href="#!">
                                <img src="../assets/baohanh/samsung.png" alt="" class="samsung"
                                    style="display:block;margin:0 auto;">
                            </a>
                        </div>
                    </div>
                    <div class="col-4">
                        <div style="background:#ccc;padding:20px;">
                            <a href="#!" style="background:#ccc;">
                                <img src="../assets/baohanh/dell.png" alt="" class="dell"
                                    style="display:block;margin:0 auto;">
                            </a>
                        </div>
                    </div>
                    <div class="col-4">
                        <div style="background:#ccc;padding:25px;margin-top:20px;">
                            <a href="#!" style="background:#ccc;">
                                <img src="../assets/baohanh/oppo.png" alt="" class="oppo"
                                    style="display:block;margin:0 auto;">
                            </a>
                        </div>
                    </div>
                    <div class="col-4">
                        <div style="background:#ccc;padding:22px;margin-top:20px;">
                            <a href="#!" style="background:#ccc;">
                                <img src="../assets/baohanh/acer.png" alt="" class="acer"
                                    style="display:block;margin:0 auto;">
                            </a>
                        </div>
                    </div>
                    <div class="col-4">
                        <div style="background:#ccc;padding:23px;margin-top:20px;">
                            <a href="#!" style="background:#ccc;">
                                <img src="../assets/baohanh/lenovo.png" class="lenovo" alt=""
                                    style="display:block;margin:0 auto;">
                            </a>
                        </div>
                    </div>

                </div>
            </div>

            <p>Thời gian tiếp nhận bảo hành sản phẩm từ 8h30 tới 12h00 và từ 13h30 tới 17h30 tất cả các ngày trong tuần
                (Trừ ngày nghỉ Tết Nguyên Đán).</p>
            <strong>Điện thoại liên hệ: 0347196217.</strong>
        </div>

        <!--Footer-->
        <?php
        include('../layout/footer.php');

        ?>
        <!--End Footer-->
    </main>
    <script src="../bootstrap/bootstrap.js"></script>
    <script src="../js/action.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>
</body>

</html>