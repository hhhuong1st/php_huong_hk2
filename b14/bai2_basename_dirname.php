<?php
    $dd = "C:/xampp/htdocs/php_huong/b14/vd1.txt";
    $tentt = basename($dd);
    echo "Tên tập tin có phần mở rộng là: $tentt";

    $tentt1 = basename($dd, ".txt");
    echo "<br> Tên tập tin không có phần mở rộng là: $tentt1";


    // Đường dẫn thư mục
    $dd1 = dirname($dd);
    echo "<br> Đường dẫn thư mục là là: $dd1";
?>