<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<?php
    $ngoaite = [];
    $ngoaite["aud"] = ["name" => "AUST.DOLLAR", "mua" => 15657, "ban" => 16050];
    $ngoaite["usd"] = ["name" => "US DOLLAR", "mua" => 20657, "ban" => 23050];
    $ngoaite["cad"] = ["name" => "CANADIAN DOLLAR", "mua" => 345666, "ban" => 1634324];

    echo "<pre>";
    print_r($ngoaite);
    echo "</pre>";
?>

tạo ra 1 bảng html có 4 cột và 4 dòng
các cột Mã | Tên | Mua vào | Bán ra

<div class="page-wrap" style="margin: 0 auto; width: 600px; border: 1px solid grey">

    <table style="width: 100%">
        <thead>
            <tr>
                <td>Mã</td>
                <td>Tên</td>
                <td>Mua</td>
                <td>Bán</td>
            </tr>
        </thead>

        <tbody>

            <?php


            foreach ($ngoaite as $key_ngoaite => $val_ngoaite) {
                echo "<tr>";
                    echo "<td>" . $key_ngoaite . "</td>";
                    echo "<td>" . $val_ngoaite["name"] . "</td>";
                    echo "<td>" . $val_ngoaite["mua"] . "</td>";
                    echo "<td>" . $val_ngoaite["ban"] ."</td>";
                echo "</tr>";
            }
            ?>

        </tbody>
    </table>
</div>


</body>
</html>