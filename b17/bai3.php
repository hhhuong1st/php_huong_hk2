<?php
class Sach {
    var $tensach;
    var $tacgia;
    var $namxb;
    
    public function __construct($tensach, $tacgia, $namxb){
        $this->tensach = $tensach;
        $this->tacgia  = $tacgia;
        $this->namxb   = $namxb;
    }

    function lay_tensach_tentg(){
        echo "<hr>Thông tin:<br>";
        echo "Tên sách: " . $this->tensach . "<br>";
        echo "Tác giả: " . $this->tacgia . "<br>";
    }

    function lay_tensach_namxb(){
        echo "<hr>Thông tin:<br>";
        echo "Tên sách: " . $this->tensach . "<br>";
        echo "Năm xuất bản: " . $this->namxb . "<br>";
    }
}

$sach1 = new Sach("Truyện Kiều", "Nguyễn Du", 1900);
$sach1->lay_tensach_tentg();
$sach1->lay_tensach_namxb();
?>
