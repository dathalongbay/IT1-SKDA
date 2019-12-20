<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <style type="text/css">
        .page-wrap {
            width: 600px;
            margin: 0 auto;
        }
    </style>

</head>
<body>

    <?php

    echo "<pre>";
    print_r($_GET);
    echo "</pre>";
    if (!empty($_GET) && isset($_GET["usd"]) && isset($_GET["tygia"])) {
        $usd = $_GET["usd"];
        $tygia = $_GET["tygia"];
        $vnd = $usd*$tygia;
        echo "<div>Quy đổi : " . $vnd . " VND ";
    }
    ?>

    index2.php?usd=5&tygia=23000&submit=Quy+đổi
    <div class="page-wrap">
        <form name="demo" action="" method="get">
            <p>
                <label>USD</label>
                <input type="text" name="usd" value="" placeholder="Nhập USD">
            </p>
            <p>
                <label>Tỷ giá</label>
                <input type="text" name="tygia" value="" placeholder="Nhập tỷ giá 1 USD = ? VND">
            </p>
            <p>
                <input type="submit" name="submit" value="Quy đổi">
            </p>
        </form>
    </div>

</body>
</html>