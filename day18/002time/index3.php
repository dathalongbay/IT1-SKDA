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
        tạo ra 1 thời gian bất kỳ
        sử dụng hàm :
        mktime(hour, minute, second, month, day, year)
        trả về thời gian loại số 2 là thời gian unix tính từ năm 1970
    </pre>

    <?php
    $time1 = mktime(21, 0, 0,1,1,1998);
    echo "<br> in ra mktime() " . $time1;

    // muốn xem thời gian mà mình vừa tạo ra
    // sử dụng hàm date(format, timestamp)
    $hm = date("H:i:s d-m-Y", $time1);
    echo "<br> Chuyển từ thời gian unix thành dạng người đọc được " . $hm;


    // Nếu muốn chuyển ngược lại từ người đọc được về unix time sử dụng hàm strtotime()
    echo "<br> chuyển ngược lại : " . strtotime($hm);

    /**
     * Chú ý đặc biệt :
     * là strtotime() không hoàn hảo chỉ có thể chuyển đổi được từ 1 số định dạng thời gian
     * 21:00:00 1/1/1998 ( H:i:s d/m/Y ) khả năng là ko chuyển được
     * nên chuyển từ định dạng H:i:s d-m-Y
     *
     * Kiểm tra lại xem strtotime() có chuyển đúng ko
     */
    ?>
</body>
</html>