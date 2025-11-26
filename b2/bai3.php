<?php
    //Hằng
    define("luong", 500000);
    $snlv = 10;
    $thanhtien = luong * $snlv;
    echo "Lương 1 ngày là: " . luong;
    echo "<br>Số ngày làm việc: $snlv";
    echo "<br>Tổng tiền là: $thanhtien";

    //const
    const tienluong = 500000;
    $songay = 10;
    $tongtien = tienluong * $songay;
    echo "<hr>Lương 1 ngày là: ".tienluong;
    echo "<br>Số ngày làm việc: $songay";
    echo "<br>Tổng tiền nhận là: $tongtien";


?>