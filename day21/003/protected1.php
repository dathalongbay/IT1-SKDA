<?php


class Dienthoaicodien {

    public $ten;
    protected $mausac = "đen";

    protected function goiDien() {
        echo "<br> Gọi điện";
    }

    protected function ngheDien() {
        echo "<br> Nghe điện";
    }
}

class Smartphone extends Dienthoaicodien {


    public function demo() {

    }

    public function guiEmail() {
        echo "<br> guiEmail";
    }

    public function choiGame() {
        echo "<br> choiGame";
    }
}

/**
 * gọi từ object của class con
 * nhưng vẫn là gọi từ bên ngoài class
 */
$samsung = new Smartphone();
$samsung->mausac;
$samsung->goiDien();