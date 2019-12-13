<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
    <h1>Câu lệnh switch case</h1>

    <pre>
        switch ($Bien) {
            case giá trị 1:
                code to be executed if n=label1;
                break;
            case giá trị 2:
                code to be executed if n=label2;
                break;
            case giá trị 3:
                code to be executed if n=label3;
                break;
            ...
            default:
                code to be executed if n is different from all labels;
        }
    </pre>

    <?php
    echo "<br> Thời khóa biểu";

    $ngay = 5;

    switch ($ngay) {
        case 2:
            echo "<br> 2 Sáng : toán";
            echo "<br> 2 Chiều : lý";
            echo "<br> 2 Tối : văn";
            break;
        case 3:
            echo "<br> 3 Sáng : toán";
            echo "<br> 3 Chiều : anh";
            echo "<br> 3 Tối : sinh";
            break;
        case 4:
            echo "<br> 4 Sáng : toán";
            echo "<br> 4 Chiều : hóa";
            echo "<br> 4 Tối : GDCD";
            break;
        case 5:
            echo "<br> 5 Sáng : toán";
            echo "<br> 5 Chiều : hóa";
            echo "<br> 5 Tối : anh";
            break;
        case 6:
            echo "<br> 6 Sáng : toán";
            echo "<br> 6 Chiều : sử";
            echo "<br> 6 Tối : địa";
            break;
        case 7:
            echo "<br> 7 Sáng : địa";
            echo "<br> 7 Chiều : hóa";
            echo "<br> 7 Tối : sinh";
            break;
        default:
            echo "<br> Sáng nghỉ";
            echo "<br> Chiều nghỉ";
            echo "<br> Tối nghỉ";
            break;
    }

    ?>
</body>
</html>