<?php
session_start();
?>

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

    <?php
    if (isset($_SESSION["login"])) {
        header("Location: index.php");
        exit;
    }


    if (isset($_POST["username"]) && isset($_POST["password"])) {

        include_once "connect.php";

        $username = $_POST["username"];
        $password = $_POST["password"];


        $sql = "SELECT * FROM users WHERE username = '$username' AND password='$password'";

        $stmt = $conn->prepare($sql);
        $stmt->execute();

        // set the resulting array to associative
        $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);

        $user = $stmt->fetchAll();
        $userLogin = isset($user[0]) ? $user[0] : false;

        echo $sql;


        if ( $userLogin) {
            $_SESSION["login"] = $userLogin["username"];

            header("Location: index.php");
            exit;
        } else {
            echo "<p>Username và password không đúng</p>";
        }
    }
    ?>

    <form name="login" method="post" action="">
        <div>
            <label>Username</label>
            <input type="text" name="username" value="">
        </div>
        <div>
            <label>Password</label>
            <input type="password" name="password" value="">
        </div>
        <div>
            <input type="submit" name="login" value="Đăng nhập">
        </div>

    </form>

</body>
</html>


