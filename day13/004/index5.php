<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
    <pre>
        lặp mảng đa chiều
    </pre>

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

    foreach($vietnam as $key_tp => $tp) {
        echo "<br>" . $key_tp . " " . $tp["ten"];
        foreach($tp["quan"] as $key_quan => $quan) {
            echo "<br>--" . $key_quan . " " . $quan;
        }

    }


    ?>
</body>
</html>