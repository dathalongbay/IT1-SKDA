<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
    <h1>
        Các hàm xử lý chuôi trong PHP
    </h1>

    <pre>
        Nhớ hàm : var_dump(Biến);
        Hàm in ra kiểu dữ liệu của biến và giá trị của biến
        Hàm này sử dụng để debug gỡ lỗi
    </pre>

    <?php
    $demo = "Ha noi la thu đo của viet nam";
    // đếm số ký tự trong chuỗi
    echo "<br> strlen() : " . strlen($demo);
    // đếm số chữ trong chuỗi
    echo "<br> str_word_count() : " . str_word_count($demo);
    // strpos
    /**
     * strpos(tham số 1, tham số 2)
     * tham số 1 là chuỗi mẹ
     * tham số 2 là chuỗi con cần tìm trong chuỗi mẹ
     * nếu tìm thấy trả về vị trí xuất hiên của chuỗi con trong chuỗi mẹ
     * nếu ko tìm thầy thì trả về false
     */
    echo "<br> strpos() : " . strpos($demo, "viet nam");
    $hanquoc = strpos($demo, "han quoc");
    echo "<br>";
    echo "<br> strpos() : " . var_dump($hanquoc);
    /**
     * str_replace(tham số 1 , tham số 2 , tham số 3)
     * tham số 1 : chuỗi cần thay thế
     * tham số 2 : chuỗi thay thế
     * tham số 3 : chuỗi mẹ
     */
    echo "<br> str_replace() " . str_replace("Ha noi", "thanh pho ha noi", $demo);



    ?>

</body>
</html>