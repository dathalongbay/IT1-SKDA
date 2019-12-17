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

    // kiểm tra có phải mảng hay ko
    var_dump(is_array($tiente));
    var_dump(is_array($a));

    ?>
</body>
</html>