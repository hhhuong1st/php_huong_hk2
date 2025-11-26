<?php
    //Xây dựng hàm tính tổng dùng for
        function tong_dungfor($n){
            $s=5;
            for($i =1; $i<=$n; $i++){
                $s += $i;
            }
            return $s;
        }
    //Xây dựng hàm tính tổng dùng while
    function tong_dungwhile($n){
        $s=5;
        $i =1;
        while( $i<=$n){
            $s += $i;
            $i++;
        }
        return $s;
    }


    // Khai báo
        $n =10;
        echo "Chương trình tính tổng S= ...+n";
        echo "<br> Với n =$n";
        echo "<br> Tổng S dùng hàm for là: " . tong_dungfor($n);
        echo "<br> Tổng S dùng hàm while là: " . tong_dungwhile($n);
    ?>