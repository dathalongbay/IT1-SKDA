<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

    <style type="text/css">
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        p {
            margin: 20px 0;
        }


    </style>
</head>
<body>

    <h1>158 mét khối</h1>
    <pre>
        SQL + Kiểm thử phần mềm
        Viết test case
        đưa ra các trường hợp giả định
        - nhập 1 chuỗi
        - nhập 1 số âm
        - nhập 1 số >= 0 ( case 3 )
            + tiêu thụ = 0 => tiền 0
            + tiêu thụ = 8 mét khối => tiền ?
            + tiêu thụ = 15 mét khối => tiền ?
            + tiêu thụ = 25 mét khối => tiền ?
            + tiêu thụ 72 mết khối => tiền ?
        - không nhập gì cả

        test 8 case

        giả định 158 mét khối ?
        0 - 10 :  10 ( 148 ) * 5000 = 50000
        11 - 20 : 10 ( 138 ) * 8000 = 80000
        21 - 50 : 30 ( 108 ) * 18000 = 540000
        51 -> vô cực : 108 * 23000 = 2484000
        tiền thoát nước ( tổng mét khối tiêu thụ * 2000 ) = 316.000

        tổng tiền : 3.470.000

        tiền thuế GTGT : 10/100 * tổng tiền = 347.000
        => tiền phải thanh toán : 3.817.000

    </pre>

    <?php

    // gán mặc định tiêu thụ nước là 0
    $watercomsume = 0;
    if (isset($_POST["watercomsume"]) && ($_POST["watercomsume"] > 0)) {
        // số mét khối tiêu thụ
        $watercomsume = $_POST["watercomsume"];


    }


    $watersInfo = [
        ["level" => "mức 1", "info" => "1 - 10 m3", "total" => 10,
            "consume" => 0, "price" => 5000, "sum_price" => 0],
        ["level" => "mức 2", "info" => "11 - 20 m3", "total" => 10,
            "consume" => 0, "price" => 8000, "sum_price" => 0],
        ["level" => "mức 3", "info" => "21 - 50 m3", "total" => 30,
            "consume" => 0, "price" => 18000, "sum_price" => 0],
        ["level" => "mức 4", "info" => "51 m3 trở lên", "total" => null,
            "consume" => 0, "price" => 23000, "sum_price" => 0],
    ];
    ?>

    <div id="wrap" style="width: 650px; margin: 0 auto;background: #7dffff; padding: 20px">
        <form name="tinhtien" action="" method="post">
            <p>
                <label>Nhập số mét khối tiêu thụ </label>
                <input type="text" name="watercomsume" value="<?php echo $watercomsume ?>">
            </p>
            <p>
                <input type="submit" name="submit" value="Tính tiền">
            </p>
        </form>



        <table class="table">
            <thead>
            <tr>
                <th>Mức</th>
                <th>Thông tin</th>
                <th>Số mét khối tiêu thụ thực</th>
                <th>Giá tiền 1 mét khối</th>
                <th>Số tiền</th>
            </tr>
            </thead>
            <tbody>



            <?php
            // số mét khối còn lại sau khi trừ đi từng mốc
            $rest = $watercomsume;
            $total1 = 0;
            foreach($watersInfo as $watersInfoKey => $watersInfoVal) {

                if ($watersInfoVal["total"] > 0) {
                    if ($rest > $watersInfoVal["total"]) {
                        $rest = $rest - $watersInfoVal["total"];
                        $watersInfo[$watersInfoKey]["consume"] = $watersInfoVal["total"];
                    } else {
                        $watersInfo[$watersInfoKey]["consume"] = $rest;
                        $rest = 0;
                    }
                } else {
                    $watersInfo[$watersInfoKey]["consume"] = $rest;
                }


                $watersInfo[$watersInfoKey]["sum_price"] = $watersInfo[$watersInfoKey]["consume"]*$watersInfo[$watersInfoKey]["price"];

                $total1 = $total1 + $watersInfo[$watersInfoKey]["sum_price"];
                ?>
                <tr>
                    <td><?php echo $watersInfoVal["level"] ?></td>
                    <td><?php echo $watersInfoVal["info"] ?></td>
                    <td><?php echo $watersInfo[$watersInfoKey]["consume"] ?></td>
                    <td><?php echo $watersInfoVal["price"] ?></td>
                    <td><?php echo $watersInfo[$watersInfoKey]["sum_price"] ?></td>
                </tr>
            <?php } ?>
            </tbody>
        </table>
        <p>Tổng số mét khối tiêu thụ : <?php echo $watercomsume ?></p>
        <p> Tổng tiền nước chưa gồm phí thoát nước và thuế : <?php echo $total1 ?></p>
        <p> Phí thoát nước : <?php $phi=$watercomsume*2000; echo $phi ?></p>
        <p> Tổng tiền nước chứa thuế : <?php $total2 = $phi+$total1; echo $total2 ?></p>
        <p> Thuế GTGT : <?php $thue = (10/100)*$total2; echo $thue ?></p>
        <p> Tổng tiền phải thanh toán : <?php $total3 = $thue+$total2; echo $total3 ?></p>
    </div>


    <?php


    ?>



</body>
</html>