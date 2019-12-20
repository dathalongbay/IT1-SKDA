<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <style type="text/css">
        .page-wrap {
            width: 600px;
            margin: 0 auto;
        }
    </style>
</head>
<body>
    <pre>
        $_GET trong PHP
        khi 1 form có method="get" được submit dư liệu nó
        sẽ gửi dữ liệu lên trên URL
        ví dụ như sau : index1.php?tuoi=17&submit=Gửi+dữ+liệu
        ta sẽ dùng biến $_GET để lấy dữ liệu của form này

        phân tích
        http://localhost/itplus/IT1-SKDA/day14/002/index1.php?tuoi=17&submit=Gửi+dữ+liệu
        => giao thức : http hay https
        http giao thức thông thường
        https = http + ssl ( độ bảo mật mạnh )
        localhost/itplus/IT1-SKDA/day14/002 ( domain trên localhost )
        trên môi trường server : tên miền ví dụng zing.vn
        index1.php ( tên file php đang chạy )
        ?tuoi=17&submit=Gửi+dữ+liệu ( query string ) dùng để gửi dữ liệu
        sau ? có nhiều tham số
        tham số 1 ở link bên trên tuoi và có giá trị là 17
        tham số 2 ở link bên trên submit và có giá trị là Gửi+dữ+liệu
        khi query string có nhiều tham số trên url thì cặp tham số này sẽ nối với nhau bằng dấu &

    </pre>

    <?php
    echo "<br> in mảng GET";
    echo "<pre>";
    print_r($_GET);
    echo "</pre>";
    // !empty($_GET) trả về true khi mảng không rỗng
    // empty($_GET) trả về true khi mảng rỗng
    // ! toán tử phủ định ngược lại
    if (!empty($_GET) && isset($_GET["tuoi"])) {
        $tuoi = $_GET["tuoi"];

        if ($tuoi > 18) {
            echo "<div>Bạn đã đủ tuổi trưởng thành</div>";
        } else {
            echo "<div>Bạn chưa đủ tuổi trưởng thành</div>";
        }
    }


    ?>

    <div class="page-wrap">
        <form name="demo" action="" method="get">
            <p>
                <label>Tuổi</label>
                <input type="text" name="tuoi" value="" placeholder="Nhập tuổi của bạn">
            </p>
            <p>
                <input type="submit" name="submit" value="Gửi dữ liệu">
            </p>
        </form>
    </div>

</body>
</html>