<?php 
    session_start();
    if(isset($_SESSION['email'] )){
        session_destroy();
        exit();
    }
    if(!isset($_SESSION['email'])){
        header('Location: http://localhost/ecommerce/layout_user/index.php');
    }
