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
       cách gán giá trị mặc định cho tham sô khi khai báo hàm
    </pre>

    <?php
    function tinhdientichhinhtron($bankinh) {

        // $bankinh sẽ là tham số sủa hàm
        $dientich = $bankinh*$bankinh*3.14;
        return $dientich;
    }

    /**
     * sẽ gặp lỗi nếu không truyền tham số khi gọi hàm
    Fatal error: Uncaught ArgumentCountError: Too few arguments to function tinhdientichhinhtron(), 0 passed in C:\xampp\htdocs\ITPLUS\IT1-SKDA\day14\004\index4.php on line 25 and exactly 1 expected in C:\xampp\htdocs\ITPLUS\IT1-SKDA\day14\004\index4.php:16 Stack trace: #0 C:\xampp\htdocs\ITPLUS\IT1-SKDA\day14\004\index4.php(25): tinhdientichhinhtron() #1 {main} thrown in C:\xampp\htdocs\ITPLUS\IT1-SKDA\day14\004\index4.php on line 16
     */
    $r = 15;
    $ketqua2 = tinhdientichhinhtron();
    echo "<br> S của hình tròn là : " . $ketqua2;


    ?>

</body>
</html>