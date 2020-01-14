<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php
// Nạp file kết nối cơ sở dữ liệu
include_once "connect.php";

echo "<pre>";
print_r($_POST);
echo "</pre>";


if (isset($_POST["id"]) && ($_POST["id"] > 0)) {
    $id = (int) $_POST["id"];
    $ten = $_POST["ten"];
    $diem = $_POST["diem"];
    $truong = $_POST["truong"];

    $sqlUpdate = "UPDATE sinhvien SET ten = '$ten', diem = $diem, truong = '$truong'
    WHERE id = $id";

    echo "<br> SQL thuần : " . $sqlUpdate;

    // Bước 1 prepate mysql
    $stmt = $connectMysql->prepare($sqlUpdate);

    // Bước 2 thực hiện query
    $stmt->execute();

    echo "<br>" . $stmt->rowCount() . " bản ghi cập nhật thành công";
    echo "<a href='index.php'>Quay về trang chủ</a>";


} else {
    echo "dữ liệu gửi đi không hợp lệ";
    exit;
} ?>
</body>
</html>

