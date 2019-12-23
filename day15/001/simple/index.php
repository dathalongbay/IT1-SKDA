<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <style type="text/css">
        header, footer {
            background-color: greenyellow;
            height: 200px;
        }

        .navigation-main {
            background-color: orange;
        }

        .sidebar {
            height: 500px;
            background-color: violet;
        }

        .main-content {
            height: 500px;
            background-color: #7dffff;
        }
    </style>
</head>
<body>

<div class="page-wrap">

    <?php include_once "header.php"; ?>

    <?php include_once "menu.php"; ?>

    <div class="container">
        <div class="row">
            <?php include_once "sidebar.php"; ?>
            <?php include_once "maincontent.php"; ?>

        </div>
    </div>

    <?php include_once "footer.php"; ?>
</div>



</body>
</html>