<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
    <pre>
        lặp mảng foreach
    </pre>

    <?php
    $tiente = ["USD", "AUD", "EURO", "HKD"];

    // cú pháp rút gọn
    foreach($tiente as $val_tiente) {
        echo "<br>" . $val_tiente;
    }
    ?>
</body>
</html>