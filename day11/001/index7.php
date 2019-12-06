<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
    <h1>Biến PHP</h1>
    <h1> toán tử . là toán tử nối chuỗi </h1>

    <?php
    $x = 5;
    $y = 3;

    echo "<br> Tổng " . ($x + $y);
    echo "<br> Hiệu " . ($x - $y);
    echo "<br> Thương " . ($x / $y);
    echo "<br> Tích " . ($x * $y);
    echo "<br> Phép chia lấy dư " . ($x % $y);

    $ho = "nguyên văn";
    $ten = "an";
    echo "<br>" . $ho . " " . $ten;
    ?>
</body>
</html>