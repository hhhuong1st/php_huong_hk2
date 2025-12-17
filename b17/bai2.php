<?php
    class Hocsinh {
        // Khai báo các thuộc tính
        var $ten;
        var $tuoi;
        var $diem;
        
        // Phương thức khởi tạo
        public function __construct($ten, $tuoi,$diem){
            $this -> ten = $ten;
            $this -> tuoi = $tuoi;
            $this -> diem = $diem;
        }

        // Khai báo phương thức
        function ThongtinHS (){
            echo "<hr>Tên học sinh: " . $this-> ten;
            echo "<br>Tuổi học sinh: " . $this-> tuoi;
            echo "<br>Điểm học sinh: " . $this-> diem;
        }
    }
    // Tạo đối tượng 
    $A = new Hocsinh("Nguyễn Văn A", 20,9.5);
    $B = new Hocsinh("Nguyễn Văn B", 19,9.5);
    // Gọi
    $A -> ThongtinHS();
    $B -> ThongtinHS();
?>