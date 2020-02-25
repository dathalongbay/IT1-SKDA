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


    public function guiEmail() {
        echo "<br> guiEmail";
    }

    public function choiGame() {
        echo "<br> choiGame";
    }
}

$nokia110i = new Dienthoaicodien();
$nokia110i->mausac;
$nokia110i->goiDien();
