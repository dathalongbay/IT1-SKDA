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
        IP máy của bạn : localhost ( trên máy chủ thật : 192.168.2.1)
        Post máy của bạn : 3306
        Username mysql : root
        Password : (rỗng không có gì)
    </pre>

    <?php
    // IP máy chủ mysql
    $servername = "localhost";
    // Username mysql
    $username = "root";
    // Password
    $password = "";
    // Tên cơ sở dữ liệu
    $dbname = "23thang12";

    // Cú pháp kết nối đến csdl mysql từ php bằng cách pdo
    try {
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        // set the PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        echo "Kết nối đến CSDL thành công";
    }
    catch(PDOException $e)
    {
        echo "Kết nối đến CSDL thất bại : " . $e->getMessage();
        die();
    }

    ?>

</body>
</html>