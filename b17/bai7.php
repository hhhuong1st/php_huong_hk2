<?php
class sinhvien {
    var $masv;
    var $hoten;
    var $lop;
    var $diemmon1;
    var $diemmon2;
    var $diemmon3;
    
    public function __construct($masv, $hoten, $lop, $diemmon1, $diemmon2, $diemmon3){
        $this->masv = $masv;
        $this->hoten  = $hoten;
        $this->lop  = $lop;
        $this->diemmon1  = $diemmon1;
        $this->diemmon2  = $diemmon2;
        $this->diemmon3  = $diemmon3;
    }

    function lay_all(){
        echo "<hr>Thông tin:<br>";
        echo "Mã sinh viên: " . $this->masv . "<br>";
        echo "Họ tên: " . $this->hoten . "<br>";
        echo "Lớp: " . $this->lop . "<br>";
        echo "Điểm môn 1: " . $this->diemmon1 . "<br>";
        echo "Điểm môn 2: " . $this->diemmon2 . "<br>";
        echo "Điểm môn 3: " . $this->diemmon3 . "<br>";
    }

    function diemcaonhat(){
        $diemcaonhat = max($this->diemmon1, $this->diemmon2, $this->diemmon3);
        echo "Điểm cao nhất là: " . $diemcaonhat . "<br>";
    }
}

$sinhvien = new sinhvien("2430140006", "Huỳnh Huyền Hương", "24CDTKW01", 5, 6,8);

// gọi
$sinhvien->lay_all();
$sinhvien->diemcaonhat();
?>
