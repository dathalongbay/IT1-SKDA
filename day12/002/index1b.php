<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<h1>Câu lệnh điều kiện trong PHP</h1>

<?php
$tuoi = 21;
if ($tuoi < 6) {
    echo "<br> tuổi mầm non";
} elseif ( $tuoi < 11) {
    echo "<br> tuổi cấp 1";
} elseif ($tuoi < 16) {
    echo "<br> tuổi cấp 2";
} elseif ($tuoi < 19) {
    echo "<br> tuổi cấp 3";
} elseif ($tuoi < 23) {
    echo "<br> tuổi sinh viên";
} else {
    echo "<br> tuổi lao động";
}

?>

</body>
</html>