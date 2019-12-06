<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>

    <h1>Ký từ escape trong PHP</h1>

    <pre>
        Yêu cầu in ra 1 chuỗi
        "Hà nội" là thủ đô của "Việt nam"

        khi in ra 1 chuỗi trong PHP thì thông thường chuỗi
        đó được bao bọc bởi 1 cặp nháy kép ""

        khi mà chuỗi in ra có chuỗi nháy kép trong chuỗi
        thì php sẽ không phân biệt được đâu là nháy kép chứa chuỗi
        đâu là nháy kép trong chuỗi

        => giải pháp là sử dụng ký hiệu escape chính là dấu xược ngườc
        trước ký tự muốn escape \
    </pre>

    <?php
    echo "\"Hà nội\" là thủ đô của \"Viêt nam\"";
    ?>

</body>
</html>