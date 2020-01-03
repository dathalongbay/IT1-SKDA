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

    <pre>
        Thời gian trong PHP
        đọc thêm tại :
        https://toidicode.com/xu-ly-ngay-thang-trong-php-73.html
        https://www.w3schools.com/php/php_date.asp

        Có 2 loại thời gian trong PHP
        - Loại 1 là định dạng thời gian mà con người có thể đọc
        ví dụ : 15:00:01 23-12-2009
        Loại 1 chỉ ý nghĩa hiển thị và không thể tính toán
        - Loại 2 là định dạng thời gian Unix có dạng
        49959555005 ( bản chất thời gian thứ 2 là mili giây
        tính từ 1-1-1970 cho đến bây giờ )
        Loại thứ 2 là loại có tác dụng tính toán
    </pre>

    <?php
    // in ra thời gian hiện tại loại 1
    echo "<br> loại 1 : " . date("H:i:s d-m-Y");
    // in ra thời gian hiện tại loại 2
    echo "<br> loại 2 : " . time();
    ?>

</body>
</html>