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
    echo "<pre>";
    print_r($tiente);
    echo "</pre>";

    // unset() hủy 1 phần tử
    unset($tiente[1]);


    echo "<pre>";
    print_r($tiente);
    echo "</pre>";
    ?>
</body>
</html>