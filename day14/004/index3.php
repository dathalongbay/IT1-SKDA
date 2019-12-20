<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <pre>
        lệnh return trong function
        lệnh return nó sẽ trả vê 1 biến và kết thúc hàm tạo thời điểm đó
        nếu có câu lệnh viết sau return thì cũng không chạy
        bởi vị lệnh return là lệnh cuối cùng trong hàm được chạy
    </pre>

    <?php
    function tinhdientichhinhtron($bankinh) {

        // $bankinh sẽ là tham số sủa hàm
        $dientich = $bankinh*$bankinh*3.14;
        return $dientich;
    }

    // gọi hàm
    $ketqua1 = tinhdientichhinhtron(5);
    echo "<br> S của hình tròn là : " . $ketqua1;

    // gọi hàm
    $r = 15;
    $ketqua2 = tinhdientichhinhtron($r);
    echo "<br> S của hình tròn là : " . $ketqua2;


    ?>

</body>
</html>