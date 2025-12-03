<?php
    $chuoijson = '{ "ten": "huynh huyen huong", "lop": "24CDTKW01", "MSSV": "2430140006", "So thich": [ "du lich", "choi game" ] }';
    echo "Mảng JSON ban đầu là: ";
    print_r($chuoijson);

    $mangjson = json_decode($chuoijson);
    echo "<hr> Chuỗi JSON chuyển thành mảng là: ";
    print_r($mangjson);
?>