<?php


class Oto {

    /**
     * khai báo thuộc tính cho class
     * @var
     */
    public $nhasanxuat;

    public $model;

    public $ten;

    public $gia;

    public $mausac;


    /**
     * khai báo các phương thức
     */
    public function __construct($nsx, $model, $t, $g, $m) {
        // in ra hằng số __METHOD__ để biết được mình đang gọi vào method nào
        echo "<br>" . __METHOD__;

        // truyền giá trị từ tham số trong method cho các thuộc tính của class
        // để truy cập đến chính bản thân class này thì dùng từ khóa $this
        $this->nhasanxuat = $nsx;

        $this->model = $model;

        $this->ten = $t;

        $this->gia = $g;

        $this->mausac = $m;

    }


    /**
     * Xuất thông tin của xe
     */
    public function xuatThongTin() {
        // in ra hằng số __METHOD__ để biết được mình đang gọi vào method nào
        echo "<br>" . __METHOD__;

        echo "<br> Thông tin của xe";
        echo "<br>nhà sản xuất " . $this->nhasanxuat;
        echo "<br>model " . $this->model;
        echo "<br>ten " . $this->ten;
        echo "<br>gia " . $this->gia;
        echo "<br>mau sắc " . $this->mausac;
    }

}

/**
 * Khởi tạo object từ class
 */
$fordEcoport = new Oto("Ford", "Eco", "Sport", 550000000, "đỏ");


echo "<br> Sau khi khởi tạo object";
/**
 * truy cập method từ bên ngoài class
 */

$fordEcoport->xuatThongTin();

/**
 * truy cập vào các thuộc tính của class từ bên ngoài class
 */
echo "<br> gọi thuộc tính bên ngoài class";
echo "<br>" . $fordEcoport->ten;
echo "<br>" . $fordEcoport->gia;

