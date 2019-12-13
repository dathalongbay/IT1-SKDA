<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
    <h1>Vòng lặp PHP while</h1>

    <?php
    // in ra các số chẵn từ 2 đến 20
    $i = 2;

    while($i <= 20) {
        echo "số " . $i ;
        $i = $i + 2;
    }
    ?>
</body>
</html>