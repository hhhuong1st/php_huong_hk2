<?php
    
    //Xây dựng hàm tính giai thừa
        function tinhgiaithua($n){
            $s=1;
            for($i =1; $i<=$n; $i++){
                $s *= $i;
            }
            return $s;
        }


    //Xây dựng hàm tính tổng giai thừa
        function tonggiaithua($n){
            $s=0;
            $gt = 1;
            for($i =1; $i<=$n; $i++){
                $gt *= $i;
                $s += $gt;
            }
            return $s;
        }

       

    // Khai báo
        $n =5;
        echo "Cho n là: $n";
        echo "<br> Giai thừa của $n là: " . tinhgiaithua($n);
        echo "<br> Tổng giai thừa của $n là: " . tonggiaithua($n);
        

    ?>