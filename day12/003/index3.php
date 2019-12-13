<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
    <h1>Mảng kết hợp</h1>

    <pre>
        Trong 3 php có 3 kiểu mảng
        - kiểu 1 là mảng chỉ số ( mảng có key là các số thì được gọi lả mảng chỉ số )
        - kiểu 2 là mảng kết hợp ( mảng có ít nhất 1 key là 1 chuỗi )
        - kiểu 3 là mảng đa chiều ( mảng lồng mảng )
        có nghĩa mỗi phần tử của mảng lại là 1 mảng
    </pre>

    <?php
    // mảng chỉ số
    $mangchiso = ["tuấn anh", "thúy hằng", "công vinh"];

    echo "<br> mảng chỉ số";
    echo "<pre>";
    print_r($mangchiso);
    echo "</pre>";

    // mảng kết hợp
    $mangkethop = ["ta" => "tuấn anh", "th" => "thúy hằng", "cv" => "công vinh"];

    echo "<br> mảng kết hợp";
    echo "<pre>";
    print_r($mangkethop);
    echo "</pre>";
    ?>

</body>
</html>