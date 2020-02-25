<?php

class HinhTron {


    const SO_PI = 3.14;

    public $r;

    public function dientich($r) {
        $s = $r*$r*3.14;
        echo "<br> S của hình tròn là " . $s;
        // gọi đến hằng trong class self::
        echo "<br> số pi là : " . self::SO_PI;
    }

}

// bên ngoài class gọi đến hằng số TenClass::TenConst
echo "<br> số pi là : " . HinhTron::SO_PI;
$ht = new HinhTron();
$ht->dientich(15);
