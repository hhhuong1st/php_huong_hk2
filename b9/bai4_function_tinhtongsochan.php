<?php
    //Xây dựng hàm tính tổng các số chẵn dùng for
        function tongchan_dungfor($n){
            $s=0;
            for($i =1; $i<=$n; $i++){
                if ($i %2 ==0){
                $s += $i;
                }
            }
            return $s;
        }

    //Xây dựng hàm tính giai thừa
        function tonggiaithua_dungfor($n){
            $s=1;
            for($i =1; $i<=$n; $i++){
                $s *= $i;
            }
            return $s;
        }
       

    // Khai báo
        $n =5;
        // echo "Chương trình tính tổng S= 2+4+6...+n";
        echo "<br> Với n =$n";
        echo "<br> Tổng S dùng hàm for là: " . tongchan_dungfor($n);
        echo "<br> Giai thừa của $n là: " . tonggiaithua_dungfor($n);
    ?>