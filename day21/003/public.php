<?php


class Dienthoaicodien {

    public $ten;
    public $mausac = "đen";

    public function goiDien() {
        echo "<br> Gọi điện";
    }

    public function ngheDien() {
        echo "<br> Nghe điện";
    }
}

class Smartphone extends Dienthoaicodien {


    public function guiEmail() {
        echo "<br> guiEmail";
    }

    public function choiGame() {
        echo "<br> choiGame";
    }
}

$samsung = new Smartphone();
echo "<br> màu của ss : " . $samsung->mausac;
echo "<br> " . $samsung->goiDien();
echo "<br> " . $samsung->ngheDien();
echo "<br> " . $samsung->guiEmail();