<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
    <h1>Vòng lặp for PHP lệnh continue</h1>

    <?php
    $i = 2;
    for ($i; $i <= 20; $i = $i + 2) {

        if ($i == 10) {
            continue;
        }
        echo "<br>cách 1 : " . $i;
    }


    ?>
</body>
</html>