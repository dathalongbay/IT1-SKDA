<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<h1>Các kiểu dữ liệu trong PHP : mảng</h1>

<pre>
    Mảng trong PHP là kiểu dữ liệu chứa được nhiều giá trị
    Các kiểu int, float , boolean , null chỉ chứa 1 giá trị duy nhất
    Mảng gồm nhiều gồm phần tử
    Và mỗi tủ được tạo thành bởi 2 yếu tố là key và value
    key của mảng chỉ số bắt đầu từ 0 chứ ko phải là 1
    Các phần tử trong mảng được phân tách bởi dấu ,
</pre>

    <?php
    $tensinhvien = ["nguyên văn huấn", "lê thúy hằng", "phan anh tuấn"];

    $diemsinhvien = [5.7,8.9,3.1];

    $gioitinh = [true, false, true];

    $tuoisinhvien = [21,19,18];

    $honhop = ["php", "java", 15, true, 9.8];

    // chú ý là không thể nào dùng lệnh echo để in ra 1 mảng
    echo "<br> thử in ra mảng bằng lệnh echo : " . $tensinhvien;

    // Muốn xem cấu trúc và giá trị của 1 mảng thì dùng lệnh sau :
    echo "<br> mảng tên sinh viên";
    echo "<pre>";
    print_r($tensinhvien);
    echo "</pre>";


    echo "<br> mảng tuổi sinh viên";
    echo "<pre>";
    print_r($tuoisinhvien);
    echo "</pre>";

    echo "<br> mảng giới tính";
    echo "<pre>";
    print_r($gioitinh);
    echo "</pre>";
    var_dump($gioitinh);

    echo "<br> mảng điểm";
    echo "<pre>";
    print_r($diemsinhvien);
    echo "</pre>";

    echo "<br> mảng hỗn hợp";
    echo "<pre>";
    print_r($honhop);
    echo "</pre>";



    ?>
</body>
</html>