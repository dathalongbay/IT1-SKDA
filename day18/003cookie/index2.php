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
        Hủy cookie vẫn dùng hàm setcookie()
        nhưng mà đặt thời gian sống cho cookie là 1 khoảng thời gian đã trôi qua
    </pre>

    <?php
    setcookie("userphone", "", time() - (86400), "/" );

    // truy cập vào cookie
    echo "<pre>";
    print_r($_COOKIE);
    echo "</pre>";

    echo "<br>" . $_COOKIE["userphone"];
    ?>

</body>
</html>