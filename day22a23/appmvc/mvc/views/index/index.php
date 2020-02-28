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


<div class="container">
    <h2>Trang chủ</h2>
    <p>The .table class adds basic styling (light padding and horizontal dividers) to a table:</p>

    <div class="row">
        <div class="col-sm-4">
            <h1>Quản lý sách</h1>
            <p><a href="<?php echo BASE_URL."index.php?controller=book&action=index" ?>">Quản lý sách</a></p>
        </div>
        <div class="col-sm-4">
            <h1>Quản lý người dùng</h1>
            <p><a href="<?php echo BASE_URL."index.php?controller=user&action=index" ?>">Quản lý sách</a></p>
        </div>
        <div class="col-sm-4">
            <h1>Quản lý khách hàng</h1>
            <p><a href="<?php echo BASE_URL."index.php?controller=customer&action=index" ?>">Quản lý sách</a></p>
        </div>
    </div>
</div>
</body>
</html>