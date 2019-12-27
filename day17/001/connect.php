<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 12/27/2019
 * Time: 6:02 PM
 */

// IP máy chủ mysql
$servername = "localhost";
// Username mysql
$username = "root";
// Password
$password = "";
// Tên cơ sở dữ liệu
$dbname = "quanlysinhvien";

// Cú pháp kết nối đến csdl mysql từ php bằng cách pdo
try {
    $connectMysql = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $connectMysql->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch(PDOException $e)
{
    echo "Kết nối đến CSDL thất bại : " . $e->getMessage();
    die();
}