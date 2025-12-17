<?php
class xehoi {
    var $tenxe;
    var $giatien;
    var $hang;
    
    public function __construct($tenxe, $giatien, $hang){
        $this->tenxe = $tenxe;
        $this->giatien  = $giatien;
        $this->hang   = $hang;
    }

    function lay_xehoi(){
        echo "<hr>Thông tin:<br>";
        echo "Tên xe: " . $this->tenxe . "<br>";
        echo "Giá tiền: " . $this->giatien . " VNĐ<br>";
    }

    function lay_xehoi1(){
        echo "<hr>Thông tin:<br>";
        echo "Tên xe: " . $this->tenxe . "<br>";
        echo "Giá tiền: " . $this->giatien . " VNĐ<br>";
        echo "Hãng: " . $this->hang . "<br>";
    }
}

$xehoi = new xehoi("Xe SH 2025", 45.00000, "Honda");
$xehoi1 = new xehoi("Xe SH 2025", 45.000000, "Honda");

// gọi
$xehoi->lay_xehoi();
$xehoi1->lay_xehoi1();
?>
