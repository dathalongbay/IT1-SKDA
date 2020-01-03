<?php
session_start();
?>

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
        Học cách hủy tất cả các session đang tồn tại
    </pre>

    <?php
    echo "<pre>";
    print_r($_SESSION);
    echo "</pre>";

    // hủy tất cả session đang tồn tại
    session_unset();

    // destroy the session
    session_destroy();

    var_dump($_SESSION);
    ?>

</body>
</html>