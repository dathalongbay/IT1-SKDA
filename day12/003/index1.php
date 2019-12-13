<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
    <h1>Các kiểu dữ liệu trong PHP</h1>

    <pre>
        Kiểu 1 : kiểu số ví dụ là 1,5,7
        $a = 7;
        Kiểu số 2 : kiểu số thực float
        ví dụ : 3.1 hay 10.5
        $b = 10.5;
        Kiểu 3 là kiểu chuỗi
        chuỗi đặt trong "" hay ''
        Kiểu số 4 là boolean ( true hay false )
        Kiểu số 5 : Kiểu mảng
        Kiểu số 6 : Kiểu null ( không chứa gì )
        Kiểu số 7 : Kiểu đối tượng
        nhớ var_dump() kiểm tra kiểu và giá trị
    </pre>

    <?php
    $a = 7;
    echo "<br>";
    var_dump($a);

    $b = 5.1;
    echo "<br>";
    var_dump($b);

    $c = "php";
    echo "<br>";
    var_dump($c);

    $d = null;
    echo "<br>";
    var_dump($d);

    $e = true;
    $f = false;
    echo "<br>";
    var_dump($e);

    echo "<br>";
    var_dump($f);

    // mảng
    $g = [1,3,5,7,8];
    echo "<br>";
    var_dump($g);

    // đối tượng object
    class SinhVien {

        public $ten;
        public $tuoi;
        public $diem;

    }

    $sv = new SinhVien();
    echo "<br>";
    var_dump($sv);
    ?>
</body>
</html>