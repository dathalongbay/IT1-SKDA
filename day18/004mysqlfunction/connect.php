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


// kết nối OOP
// Create connection
$connectMysql = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$connectMysql) {
    die("Kết nối thất bại : " .  mysqli_connect_error());
}

/**
 * if (5) {}
 * if (true) {}
 * if (1) {}
 * if (0) { ko chạy vào bên trong }
 * if (null) { ko chạy vào bên trong }
 * if (false) { ko chạy vào bên trong }
 */
