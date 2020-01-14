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

    <?php

    if (isset($_SESSION["login"])) {
        echo "chào " . $_SESSION["login"] . " bạn đã đăng nhập thành công";

        echo "<a href='logout.php'>Đăng xuất</a>";
    } else {
        header("Location: login.php");
        exit;
    }

    ?>

</body>
</html>