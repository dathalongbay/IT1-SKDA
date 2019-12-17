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

    // cú pháp đầy đủ của foreach
    foreach($tiente as $key_tiente => $val_tiente) {
        echo "<br>" . $key_tiente . " => " . $val_tiente;
    }
    ?>
</body>
</html>