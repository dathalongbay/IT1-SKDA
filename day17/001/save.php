<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 12/27/2019
 * Time: 6:03 PM
 */

include_once "connect.php";

// gọi đến kết nối CSDL thì dùng $connectMysql
echo "<pre>";
print_r($_POST);
echo "</pre>";

if (isset($_POST["ten"]) && isset($_POST["diem"]) && isset($_POST["truong"])) {

    $sql = "INSERT sinhvien(ten, diem, truong) VALUES('".$_POST["ten"]."', '".$_POST["diem"]."', '".$_POST["truong"]."')";

    echo $sql;

    $test = $connectMysql->exec($sql);

    var_dump($test);

    // chuyển hướng về trang index.php bằng lệnh header
    header("Location: index.php");
    exit;


} else {
    echo "dữ liệu không hợp lệ";
}