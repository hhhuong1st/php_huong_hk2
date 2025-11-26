<?php
    $s1 = "LAP trinh pHp";
    echo "Chuỗi 1 là: " .$s1;
    echo "<br> Viết mỗi kí tự đầu thành chữ hoa là: " . ucwords($s1);
    echo "<br> Viết hoa đầu mỗi từ chuỗi 1: " . ucwords(strtolower($s1));
?>


<?php
    $s1 = "Huong";
    echo "<hr>Chuỗi 1 là: " .$s1;
    echo "<br> Chuỗi 1 lặp lại 3 lần là: " . str_repeat($s1, 3);
?>


<?php
    $s1 = " LAP trinh pHp";
    echo "<hr>Chuỗi 1 là: " .$s1;
    echo "<br> Chuỗi 1 đảo ngược là: " . strrev($s1);
?>