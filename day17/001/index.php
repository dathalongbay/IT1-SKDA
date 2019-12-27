<?php
// Nạp file kết nối cơ sở dữ liệu
include_once "connect.php";

// gọi đến kết nối CSDL thì dùng $connectMysql

var_dump($connectMysql);
$sql = "SELECT * FROM sinhvien";
$stmt = $connectMysql->prepare($sql);
$stmt->execute();

$data = $stmt->fetchAll();

echo "<pre>";
print_r($data);
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

        <h1>Quản lý sinh viên</h1>

        <div class="row" style="margin-bottom: 20px">
            <div class="col-md-12">
                <a href="create.php" class="btn btn-primary">Thêm sinh viên</a>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <table class="table">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>Tên sinh viên</th>
                        <th>Điểm</th>
                        <th>Trường đại học</th>
                        <th>Hành động</th>
                    </tr>
                    </thead>
                    <tbody>


                    <?php foreach($data as $i => $sinhvien) : ?>
                    <tr>
                        <td><?php echo $sinhvien["id"] ?></td>
                        <td><?php echo $sinhvien["ten"] ?></td>
                        <td><?php echo $sinhvien["diem"] ?></td>
                        <td><?php echo $sinhvien["truong"] ?></td>
                        <td>
                            <a href="view.php" class="btn btn-success">Xem chi tiết</a>
                            <a href="edit.php" class="btn btn-warning">Sửa</a>
                            <a href="delete.php" class="btn btn-danger">Xóa</a>
                        </td>
                    </tr>
                    <?php endforeach; ?>







                    </tbody>
                </table>
            </div>
        </div>
    </div>

</body>
</html>