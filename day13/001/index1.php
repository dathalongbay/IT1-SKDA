<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
    <pre>
        Truy cập vào phần tử của mảng thông qua key ( chỉ số )
        $tenBien[key]
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


    ?>
</body>
</html>