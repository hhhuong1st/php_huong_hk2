<?php
    $hv = array("ten" => "huynh huyen huong", "lop" => "24CDTKW01", "MSSV" => "2430140006", 
    "So thich" => array("du lich", "choi game"));
    echo "Mảng ban đầu là: ";
    print_r($hv);

    $json = json_encode($hv, JSON_PRETTY_PRINT);
    echo "<br> Mảng sau khi biến đổi json là: " . $json
?>