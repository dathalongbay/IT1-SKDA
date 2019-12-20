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
        Bản chất dữ liệu submit từ form có method="get" sẽ gửi dữ liệu
        lên trên URl sau đó thì $_GET sẽ lấy dữ liệu từ trên URL xuống

        => $_GET lấy được dữ liệu từ 2 cách
        cách 1 từ form có method="get"
        cách 2 lấy trực tiếp từ url và không form nào tham giá vào quá trình này cả

        ví dụ :
        index3.php
        thêm query string vào sau file index3.php này
        => index3.php?controller=product&action=edit&id=8&return=abc.php
    </pre>

    <?php
    echo "<pre>";
    print_r($_GET);
    echo "</pre>";
    ?>

</body>
</html>