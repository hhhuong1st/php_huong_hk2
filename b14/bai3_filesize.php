<?php
    $filename = "vd1.txt";
    $sbyte = filesize($filename);
    echo "Số byte của tập tin là: $sbyte";
    $sKB =  round( $sbyte/1024,2);  // $sbyte/1024;
    echo "<br> Số KB của tập tin là: $sKB";


    $sMB =  round( $sbyte/1024/1024,6);
    echo "<br> Số MB của tập tin là: $sMB";

    $sB =  $sbyte*8;
    echo "<br> Số Bit của tập tin là: $sB";
?>