<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
    <pre>
        cách hàm thông dụng của mảng
        count() unset() is_array() empty() implode() explode()
        ...
        serialize() unserialize()
    </pre>


    <?php
    $tiente = ["USD", "AUD", "EURO", "HKD"];
    $a = 5;

    // implode chuyển mảng thành 1 chuỗi
    echo "<br>" . implode(",", $tiente);
    echo "<br>" . implode(" - ", $tiente);
    echo "<br>" . implode(" + ", $tiente);

    // explode chuyển 1 chuỗi thành 1 mảng
    $demo = "Hà nội - Bắc ninh - Bắc giang";
    $demo1 = explode("-", $demo);

    echo "<pre>";
    print_r($demo1);
    echo "</pre>";

    // lưu trữ 1 mảng trong cơ sở dữ liệu
    $tiente1 = serialize($tiente);
    var_dump($tiente1);

    // giải lưu trữ serialize dùng unserialize()
    $tiente2 = unserialize($tiente1);

    echo "<pre>";
    print_r($tiente2);
    echo "</pre>";

    ?>
</body>
</html>