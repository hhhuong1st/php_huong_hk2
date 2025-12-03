<?php
    $hv = array("ten" => "huynh huyen huong", "lop" => "24CDTKW01", "MSSV" => "2430140006", 
    "So thich" => array("du lich", "choi game"));
    echo "Mảng ban đầu là: ";
    print_r($hv);

    $json = json_encode($hv, JSON_PRETTY_PRINT);
    echo "<hr> Mảng sau khi chuyển thành chuỗi json là: " . $json;


    // chuyển từ chuỗi json thành mảng
    $mangjson = json_encode($json);
    echo "<hr>Chuyển chuỗi json thành mảng: "; 
    print_r($mangjson);
?>