<?php
// IP máy chủ mysql
$servername = "localhost";
// Username mysql
$username = "root";
// Password
$password = "";
// Tên cơ sở dữ liệu
$dbname = "loginapp";

// Cú pháp kết nối đến csdl mysql từ php bằng cách pdo
try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Kết nối đến CSDL thành công";
}
catch(PDOException $e)
{
    echo "Kết nối đến CSDL thất bại : " . $e->getMessage();
    die();
}

?>
