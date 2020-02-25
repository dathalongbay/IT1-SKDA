<?php


class Dienthoaicodien {

    public $ten;
    private $mausac = "đen";

    private function goiDien() {
        echo "<br> Gọi điện";
    }

    private function ngheDien() {
        echo "<br> Nghe điện";
    }

    public function test() {
        // gọi đến chính private bên trong class
        $this->mausac;
        $this->goiDien();

    }
}

$nokia = new Dienthoaicodien();
$nokia->test();

echo "<br> gọi trực tiếp đến private";

$nokia->mausac;
$nokia->goiDien();