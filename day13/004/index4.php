<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
    <pre>
        lặp mảng kết hợp
    </pre>

    <?php
    $tiente = ["a" => "USD","b" => "AUD","c" => "EURO","d" => "HKD"];

    // chỉ có thể dùng vòng lặp for để lặp mảng chỉ số

    foreach ($tiente as $key_tiente => $val_tiente) {
        echo "<br>" . $key_tiente . " => " . $val_tiente;
    }


    ?>
</body>
</html>