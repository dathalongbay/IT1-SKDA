<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
    <pre>
        Thay đổi giá trị của các phần tử trong mảng chỉ số
    </pre>

    <?php
    $sinhViens = ["Nguyen A", "Nguyên B", "Nguyen C"];


    echo "<pre>";
    print_r($sinhViens);
    echo "</pre>";

    // in được ra các giá trị của các phần tử
    // thông qua chỉ số key của mảng
    echo "<br>" . $sinhViens[0];
    echo "<br>" . $sinhViens[1];
    echo "<br>" . $sinhViens[2];

    // thay đổi
    $sinhViens[0] = "ABC";
    $sinhViens[1] = "DEF";
    $sinhViens[2] = "YZB";

    echo "<br> in ra cấu trúc của mảng sau khi thay đổi";
    echo "<pre>";
    print_r($sinhViens);
    echo "</pre>";

    ?>
</body>
</html>