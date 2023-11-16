
<?php
    $host = 'localhost';
    $username = 'root';
    $password = '';
    $database_name = 'tech-ecommerce';
    
    $connect = mysqli_connect($host, $username, $password, $database_name);
    if(!$connect){
        echo "1";
    }
?> 