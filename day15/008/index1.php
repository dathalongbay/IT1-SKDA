<?php


class Sinhvien {

    /**
     * khai báo các thuộc tính đối tượng sinh viên
     */
    public $ten;
    public $tuoi;
    public $quequan;
    public $truonghoc;

    // gán giá trị mặc định cho thuộc tính
    public $diem = 0;
    public $xeploai;
    public $gioitinh;

    /**
     * tạo phương thức
     * phương thức khởi tạo ( constructor ) trong class
     * constructor được tự động gọi ngay khi sử dụng từ khóa new
     * để khởi tạo đối tượng từ class
     */
    public function __construct($ten, $tuoi, $quequan, $truonghoc, $diem, $gioitinh)
    {
        echo "<br> phương thức constructor khởi tạo";
        /**
         * lấy giá trị từ các tham số
         * gán cho các thuộc tính
         * trong class khi mà muốn gọi đến chính nó
         * thì ta sử dụng từ khóa $this
         */
        $this->ten = $ten;
        $this->tuoi = $tuoi;
        $this->quequan = $quequan;
        $this->truonghoc = $truonghoc;
        $this->diem = $diem;
        $this->gioitinh = $gioitinh;

        $this->xeploai = $this->tinhdiemxeploai();
    }


    /**
     * phương thức thông thường
     */
    public function tinhdiemxeploai() {
        if ($this->diem > 7) {
            $xeploai = "khá";
        }
        elseif ($this->diem > 5) {
            $xeploai = "trung bình";
        }
        else {
            $xeploai = "học lại";
        }

        return $xeploai;
    }

    public function docThongTin() {
        echo "<br>" . __METHOD__;
        echo "<br> tên sinh viên là : " . $this->ten;
        echo "<br> tuổi sinh viên là : " . $this->tuoi;
        echo "<br> giới tính sinh viên là : " . $this->gioitinh;
        echo "<br> điểm sinh viên là : " . $this->diem;
        echo "<br> xếp loại sinh viên là : " . $this->xeploai;
    }


}

/**
 * Khởi tạo đối tượng
 * đối tượng là 1 cái cụ thể
 * class là lớp chung chung
 */
$nam = new SinhVien("nguyễn văn nam", 21, "hà nội", "đại học CN", 8, "nam");

echo "<pre>";
print_r($nam);
echo "</pre>";

/**
 * gọi các thuộc tính bên ngoài class
 */
echo "<br> Tên : " . $nam->ten;

/**
 * gọi các method bên ngoài class
 */
$nam->docThongTin();