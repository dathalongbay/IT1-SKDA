<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
    <h1>Mảng đa chiều ( mảng lồng mảng )</h1>

    <?php
    $vietnam = [
        "hn" => [
            "ten" => "hà nội",
            "quan" => [
                "hk" => "hoàn kiếm",
                "th" => "tây hồ",
                "cg" => "cầu giấy",
            ]
        ],
        "hcm" => [
            "ten" => "hồ chí minh",
            "quan" => [
                "td" => "thủ đức",
                "1" => "quận 1",
                "7" => "quận 7",
            ]
        ],
        "dn" => [
            "ten" => "đà nẵng",
            "quan" => [
                "st" => "sơn trà",
                "hc" => "hải châu",
                "nhs" => "ngũ hành sơn",
            ]
        ],
    ];

    echo "<pre>";
    print_r($vietnam);
    echo "</pre>";
    ?>

</body>
</html>