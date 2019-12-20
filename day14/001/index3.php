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
    https://news.zing.vn/5-cong-thuc-don-gian-do-chi-so-bmi-post669580.html
    BMI = ( cân nặng ) / chiều cao * chiều cao ;
    chú ý cân nặng tính KG
    chiều cao tính mét
    ví dụ 1 người cao 1 mét 7 và năng 56 cận
    nhập chiều cao 1.7 và cân nặng 56

    Kết quả sau khi nhập xong và ấn nút tính BMI
    in ra 2 thông số
    phân loại ( gầy , bình thường , béo ... )
    nguy cơ phát triển bệnh ( thấp , trung bình , cao ... )
</pre>


<?php

echo "<pre>";
print_r($_POST);
echo "</pre>";

$cannang = $chieucao = "";
if (isset($_POST["cannang"]) && isset($_POST["chieucao"])) {
    $cannang = $_POST["cannang"];
    $chieucao = $_POST["chieucao"];
    $bmi = $cannang/($chieucao*$chieucao);
    if ($bmi > 0) {
        if ($bmi < 18.5) {
            echo "<br> Phân loại : Gầy";
            echo "<br> Nguy cơ : Thấp";
        } elseif ($bmi >= 18.5 && $bmi <= 24.9) {
            echo "<br> Phân loại : Bình thường";
            echo "<br> Nguy cơ : trung bình";
        } elseif ($bmi >= 25 && $bmi <= 29.9) {
            echo "<br> Phân loại : Hơi béo";
            echo "<br> Nguy cơ : cao";
        } elseif ($bmi >= 30 && $bmi <= 34.9) {
            echo "<br> Phân loại : béo phì độ 1";
            echo "<br> Nguy cơ : cao";
        } elseif ($bmi >= 35 && $bmi <= 39.9) {
            echo "<br> Phân loại : béo phì độ 2";
            echo "<br> Nguy cơ : rất cao";
        } else {
            echo "<br> Phân loại : béo phì độ 3";
            echo "<br> Nguy cơ : nguy hiểm";
        }

    } else {
        echo "<br> Chỉ số BMI bị âm không hợp lệ";
    }
}
?>

<div class="page-wrap">
    <form name="demo" action="" method="post">
        <p>
            <label>Cân nặng ( kilogam )</label>
            <input type="text" name="cannang" value="<?php echo $cannang ?>" placeholder="Nhập cân nặng">
        </p>
        <p>
            <label>Chiều cao ( tính bằng mét ) </label>
            <input type="text" name="chieucao" value="<?php echo $chieucao ?>" placeholder="Nhập chiều cao">
        </p>
        <p>
            <input type="submit" name="submit" value="tính BMI">
        </p>
    </form>
</div>
</body>
</html>