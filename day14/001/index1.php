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
        $_POST trong PHP
        $_POST được sử dụng để lấy dữ liệu từ form submit dữ liệu đi
        và form đó phải có method là post
        Khi action của form = "" có nghĩa là form nó gửi dữ liệu đến đường dẫn
        hiện tại

        Trong form có các input có thuộc tính name
        Khi form submit dữ liệu đi thì thu được 1 mảng bằng $_POST
        và key trong mảng đó chính là giá trị bên trong thuộc tính name của
        các ô input
    </pre>

    <?php
    echo "<br> in mảng POST";
    echo "<pre>";
    print_r($_POST);
    echo "</pre>";
    // !empty($_POST) trả về true khi mảng không rỗng
    // empty($_POST) trả về true khi mảng rỗng
    // ! toán tử phủ định ngược lại
    if (!empty($_POST) && isset($_POST["tuoi"])) {
        $tuoi = $_POST["tuoi"];

        if ($tuoi > 18) {
            echo "<div>Bạn đã đủ tuổi trưởng thành</div>";
        } else {
            echo "<div>Bạn chưa đủ tuổi trưởng thành</div>";
        }
    }


    ?>

    <div class="page-wrap">
        <form name="demo" action="" method="post">
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