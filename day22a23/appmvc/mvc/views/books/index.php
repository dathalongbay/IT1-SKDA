<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

    <title>Document</title>
</head>
<body>

<?php echo $a ?>
    <div class="container">
        <h2>Liệt kê sách</h2>
        <p><a class="btn btn-info" href="<?php echo BASE_URL."/index.php?controller=book&action=create"?>">Thêm mới</a> </p>
        <table class="table">
            <thead>
            <tr>
                <th>Id</th>
                <th>Tên</th>
                <th>Giá</th>
                <th>Hành động</th>
            </tr>
            </thead>
            <tbody>

            <?php foreach($books as $bookItem) { ?>
                <tr>
                    <td><?php echo $bookItem['id'] ?></td>
                    <td><?php echo $bookItem['product_name'] ?></td>
                    <td><?php echo $bookItem['product_price'] ?></td>
                    <td>
                        <a href="<?php echo BASE_URL."/index.php?controller=book&action=edit&id=".$bookItem['id'] ?>" class="btn btn-warning">Sửa</a>
                        <a href="<?php echo BASE_URL."/index.php?controller=book&action=delete&id=".$bookItem['id'] ?>" class="btn btn-danger">Xóa</a>
                    </td>
                </tr>
            <?php } ?>
            </tbody>
        </table>
    </div>
</body>
</html>