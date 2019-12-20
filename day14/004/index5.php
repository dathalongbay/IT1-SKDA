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
    /**
     * khi khai báo giá trị mặc định cho tham số thì khi
     * gọi hàm nếu không truyền biến thì hàm sẽ lấy giá trị mặc định ra để tính toán
     * còn nếu truyền thì nó lấy giá trị được truyền cho
     */
    function tinhdientichhinhtron($bankinh = 1) {

        // $bankinh sẽ là tham số sủa hàm
        $dientich = $bankinh*$bankinh*3.14;
        return $dientich;
    }


    $r = 15;
    $ketqua2 = tinhdientichhinhtron();
    echo "<br> S của hình tròn là : " . $ketqua2;

    $ketqua3 = tinhdientichhinhtron($r);
    echo "<br> S của hình tròn là : " . $ketqua3;


    ?>

</body>
</html>