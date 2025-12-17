<?php
    class Hocsinh {
        // Khai báo các thuộc tính
        var $ten;
        var $tuoi;
        var $diem;
        // Khai báo phương thức
        function Hoc (){
            // Code
        }
        function Thi (){

        }
        function ThongtinHS (){
            echo "Tên học sinh: " . $this-> ten;
            echo "<br>Tuổi học sinh: " . $this-> tuoi;
            echo "<br>Điểm học sinh: " . $this-> diem;
        }

        function ThongtinHS1 (){
            echo "<hr>Tên học sinh: " . $this-> ten;
            echo "<br>Điểm học sinh: " . $this-> diem;
        }
    }
    // Tạo đối tượng 
    $A = new Hocsinh();
    $A -> ten = "Nguyễn Văn A";
    $A -> tuoi = 19;
    $A -> diem = 10;
    // Tạo đối tượng 
    $B = new Hocsinh();
    $B -> ten = "Nguyễn Văn B";
    $B -> tuoi = 19;
    $B -> diem = 10;
    // Gọi
    $A -> ThongtinHS();
    $B -> ThongtinHS1();
    
?>