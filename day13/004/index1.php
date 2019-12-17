<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
    <pre>
        lặp mảng
    </pre>

    <?php
    $tiente = ["USD", "AUD", "EURO", "HKD"];
    // đếm số phần tử trong 1 mảng
    echo "<br> dem count() " . count($tiente);

    for ($i = 0; $i < count($tiente); $i++) {
        echo "<br>" . $i . " => " . $tiente[$i];
    }
    ?>
</body>
</html>