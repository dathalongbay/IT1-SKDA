<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
    <pre>
        function trong PHP
        hàm ( function ) trong PHP là 1 tập hợp gồm nhiều câu lệnh để thực
        hiện 1 nhiệm vụ nào đó
        mà khi cần ta chỉ cần gọi tên hàm và truyền vào các tham số cần thiết

        cú pháp của hàm như sau :
        function tên_của_hàm (tên_tham_số_1, tên_tham_số_2, tên_tham_số_3 ...) {
           nội dung của hàm
        }
        và khi cần gọi hàm :
        tên_của_hàm(X,Y,Z);
        X => tên_tham_số_1
        Y => tên_tham_số_2
        Z => tên_tham_số_3
    </pre>

    <?php
    function tinhdientichhinhtron($bankinh) {

        // $bankinh sẽ là tham số sủa hàm
        $dientich = $bankinh*$bankinh*3.14;
        echo "<br> S của hình tròn là : " . $dientich;
    }

    // gọi hàm
    tinhdientichhinhtron(5);

    // gọi hàm
    $r = 15;
    tinhdientichhinhtron($r);


    ?>
</body>
</html>