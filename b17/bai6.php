<?php
class sinhvien {
    var $masv;
    var $hoten;
    var $lop;
    var $diemmon1;
    var $diemmon2;
    
    public function __construct($masv, $hoten, $lop, $diemmon1, $diemmon2){
        $this->masv = $masv;
        $this->hoten  = $hoten;
        $this->lop  = $lop;
        $this->diemmon1  = $diemmon1;
        $this->diemmon2  = $diemmon2;
    }

    function lay_all(){
        echo "<hr>Thông tin:<br>";
        echo "Mã sinh viên: " . $this->masv . "<br>";
        echo "Họ tên: " . $this->hoten . "<br>";
        echo "Lớp: " . $this->lop . "<br>";
        echo "Điểm môn 1: " . $this->diemmon1 . "<br>";
        echo "Điểm môn 2: " . $this->diemmon2 . "<br>";
    }

    function tinh_diemtb(){

        $diemTB = ($this->diemmon1 + $this->diemmon2) / 2;
        echo "<hr>Điểm trung bình:<br>";
        echo "Điểm môn 1: " . $this->diemmon1 . "<br>";
        echo "Điểm môn 2: " . $this->diemmon2 . "<br>";
        echo "Điểm TB: " . $diemTB . " ";


        if ($diemTB < 5){
        echo "Không đạt <br> Xếp loại: Yếu ";
        }
        elseif ($diemTB <= 5 && $diemTB < 7){
            echo "Đạt <br> Xếp loại: Trung bình";
        }
        elseif ($diemTB <= 7 && $diemTB < 8){
            echo "Đạt <br> Xếp loại: Khá";
        }
        else{
            echo "Đạt <br> Xếp loại: Giỏi";
        }
        }
}

$sinhvien = new sinhvien("2430140006", "Huỳnh Huyền Hương", "24CDTKW01", 5, 6);

// gọi
$sinhvien->lay_all();
$sinhvien->tinh_diemtb();
?>
