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
$connectMysql = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($connectMysql->connect_error) {
    die("Kết nối thất bại : " . $connectMysql->connect_error);
}
