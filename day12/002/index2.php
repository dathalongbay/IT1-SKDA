<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
    <h1>Cú pháp khác của câu lệnh điều kiện</h1>
    <pre>
        if (điều kiện) :
            câu lệnh thực hiện nếu điều kiện đúng
        endif;
    </pre>

    <?php
    $tuoi = 21;
    if ($tuoi > 18) :
        echo "<br> Đủ tuổi trưởng thành";
    endif;
    ?>


</body>
</html>