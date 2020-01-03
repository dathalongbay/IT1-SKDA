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
     đặt timezone trong index2
        date_default_timezone_set("múi giờ");
        ví dụ :
        date_default_timezone_set("America/New_York");

        xem timezone tại đây ;
        https://www.php.net/manual/en/timezones.php

    </pre>

    <?php
    date_default_timezone_set("Asia/Ho_Chi_Minh");

    // in ra thời gian hiện tại loại 1
    echo "<br> loại 1 : " . date("H:i:s d-m-Y");
    // in ra thời gian hiện tại loại 2
    echo "<br> loại 2 : " . time();
    ?>

</body>
</html>