<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer-master/src/Exception.php';
require 'PHPMailer-master/src/PHPMailer.php';
require 'PHPMailer-master/src/SMTP.php';



$mail = new PHPMailer(true);

function mailer()
{
    $mail = new PHPMailer(true);
    $mail->isHTML(true); // Set email format to HTML
    $mail->Subject = 'Congrats!'; // Tiêu đề
    $mail->Body = 'Đơn hàng được đặt hàng thành công! Shipper sẽ giao đến cho bạn trong ít ngày tới'; // Nội dung
    $mail->send();
    echo 'Message has been sent';
    header('Location: http://localhost/ecommerce/layout_user/index.php');
}

function mailerRegister()
{
    $mail = new PHPMailer(true);
    $mail->isHTML(true); // Set email format to HTML
    $mail->Subject = 'Congrats!'; // Tiêu đề
    $mail->Body = 'Chúc mừng bạn đã đăng ký tài khoản thành công! Vui lòng đăng nhập tại đây'; // Nội dung
    $mail->send();
    echo 'Message has been sent';
    header('Location: http://localhost/ecommerce/login-register/login.php');
}
try {
    //Server settings
    $mail->SMTPDebug = 2;
    $mail->isSMTP(); // Sử dụng SMTP để gửi mail
    $mail->Host = 'smtp.gmail.com'; // Server SMTP của gmail
    $mail->SMTPAuth = true; // Bật xác thực SMTP
    $mail->Username = 'trungnguyenjr123@gmail.com'; // Tài khoản email
    $mail->Password = 'roevkmwfqvghuqxn'; // Mật khẩu ứng dụng ở bước 1 hoặc mật khẩu email ->> App Password
    $mail->SMTPSecure = 'ssl'; // Mã hóa SSL
    $mail->Port = 465; // Cổng kết nối SMTP là 465

    //Recipients
    $mail->setFrom('trungnguyenjr123@gmail.com', 'TrungCR7'); // Địa chỉ email và tên người gửi
    $mail->addAddress('linhdan1999x@gmail.com', 'Nguyen Dang Trung'); // Địa chỉ mail và tên người nhận

    //Content
    // $mail->isHTML(true); // Set email format to HTML
    // $mail->Subject = 'Chúc mừng!'; // Tiêu đề
    // $mail->Body = 'Chúc mừng bạn đã đăng ký tài khoản thành công!'; // Nội dung
    if (isset($_POST['shipCOD'])) {
        ship_cod();
        $mail->isHTML(true); // Set email format to HTML
        $mail->Subject = 'Congrats!'; // Tiêu đề
        $mail->Body = 'Đơn hàng được đặt hàng thành công! Shipper sẽ giao đến cho bạn trong ít ngày tới'; // Nội dung
        $mail->send();
        echo 'Message has been sent';
        header('Location: http://localhost/ecommerce/layout_user/index.php');
    }

    if (isset($_POST['insert-user'])) {
        $mail->isHTML(true); // Set email format to HTML
        $mail->Subject = 'Congrats!'; // Tiêu đề
        $mail->Body = 'Chúc mừng bạn đã đăng ký tài khoản thành công! Vui lòng đăng nhập tại đây'; // Nội dung
        $mail->send();
        echo 'Message has been sent';
        header('Location: http://localhost/ecommerce/login-register/login.php');
    }

} catch (Exception $e) {
    echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
}
?>