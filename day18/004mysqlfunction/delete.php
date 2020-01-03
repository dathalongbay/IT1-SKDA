<?php
// Nạp file kết nối cơ sở dữ liệu
include_once "connect.php";

// gọi đến kết nối CSDL thì dùng $connectMysql
if (!isset($_GET["id"]) || ($_GET["id"] < 1)) {
    echo "id sinh viên không hợp lê";
    exit;
}

var_dump($connectMysql);
$sql = "SELECT * FROM sinhvien WHERE id=". (int) $_GET["id"];
$result = mysqli_query($connectMysql, $sql);
$sinhvien = mysqli_fetch_assoc($result);


if (!isset($sinhvien["id"]) || ($sinhvien["id"] < 1)) {
    echo "dữ liệu không hợp lệ";
    exit;
}
echo "<pre>";
print_r($sinhvien);
echo "</pre>";
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>

<div class="container">
    <h1>Xem thông tin trước khi xóa</h1>
    <div class="row">
        <div class="col-md-12">

            <form name="create" action="remove.php" method="post">

                <input type="hidden" name="id" value="<?php echo $sinhvien["id"] ?>" />
                <div class="form-group">
                    <label>Tên sinh viên:</label>
                    <?php echo $sinhvien["ten"] ?>
                </div>
                <div class="form-group">
                    <label>Điểm:</label>
                    <?php echo $sinhvien["diem"] ?>
                </div>
                <div class="form-group">
                    <label>Trường đại học:</label>
                    <?php echo $sinhvien["truong"] ?>
                </div>

                <button type="submit" class="btn btn-primary">Xóa</button>
            </form>

        </div>
    </div>
</div>

</body>
</html>