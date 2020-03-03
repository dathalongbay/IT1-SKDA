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
    <h2>Thêm sách</h2>
    <form name="themsach" method="post" action="<?php echo BASE_URL."/index.php?controller=book&action=update" ?>">

        <input type="hidden" name="id" value="<?php echo $book['id'] ?>">

        <div class="form-group">
            <label for="email">Tên sách</label>
            <input type="text" class="form-control" name="product_name" placeholder="" value="<?php echo $book['product_name'] ?>">
        </div>
        <div class="form-group">
            <label for="email">Mô tả</label>
            <input type="text" class="form-control" name="product_desc" placeholder="" value="<?php echo $book['product_desc'] ?>">
        </div>
        <div class="form-group">
            <label for="email">Giá sách</label>
            <input type="text" class="form-control" name="product_price" placeholder="" value="<?php echo $book['product_price'] ?>">
        </div>

        <button type="submit" class="btn btn-primary">Sua sách</button>
    </form>
</div>
</body>
</html>