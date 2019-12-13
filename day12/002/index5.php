<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
    <h1>Vòng lặp for PHP</h1>

    <?php
    $i = 2;
    for ($i; $i <= 20; $i = $i + 2) {
        echo "<br>cách 1 : " . $i;
    }

    $i = 2;
    for ($i; $i <= 20; $i++) {
        if ( $i%2 == 0) {
            echo "<br>cách 2 : " . $i;
        }

    }
    ?>
</body>
</html>