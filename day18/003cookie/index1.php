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
        Khái niệm cookie :
        Cookie thường được sử dụng để nhận diện người dùng
        Cookie là 1 file nhỏ được server nhúng vào trình duyệt của người dùng
        Mỗi khi chính trình duyệt trên máy người dùng gửi yêu cầu đến 1 trang
        trên máy chủ thì trình duyệt gửi kèm cả cookie để nhận diện người dùng
        Cookie được lưu trữ trên trình duyệt của máy khách
        Session được lưu trữ trên server

        tạo cookie :
        setcookie(name, value, expire, path, domain, secure, httponly);

        expire là thời gian sống của cookie
        thông thường time() trả về thời gian hiện tại unix
        + thời gian sống cho cookie
        ví dụ :
        setcookie("userphone", "0981234567", time() + (86400*30), "/" )
    </pre>

    <?php
    setcookie("userphone", "0981234567", time() + (86400*30), "/" );
    
    // truy cập vào cookie
    echo "<pre>";
    print_r($_COOKIE);
    echo "</pre>";

    echo "<br>" . $_COOKIE["userphone"];
    ?>


</body>
</html>