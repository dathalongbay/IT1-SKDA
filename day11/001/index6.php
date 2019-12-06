<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>

    <?php
    // khi in ra 1 chuỗi thì có thể sử dụng nháy kép hay nháy đơn
    echo "chuỗi 1";
    echo 'chuỗi 2';
    // in ra số thì không cần nháy đơn hay nháy kép
    echo 123;

    echo "<br> thẻ xuống hàng";

    // quy tắc nháy kép chứa nháy đơn và nháy đơn chứa nháy kép

    // in ra 1 chuỗi chào 'hà nội'
    // cách 1 : sử dụng nháy kép chứa nháy đơn thì không cần escape
    echo "chào 'hà nội'";
    // cách 2 sử dụng escape \
    echo 'chào \'hà nội\' ';

    // in ra chuỗi chào "hà nội"
    // cách 1 dùng nháy đơn chứa nháy kép
    echo 'chào "hà nội"';
    // cách 2 sử dụng escape
    echo "chào \"hà nội\"";
    ?>
</body>
</html>