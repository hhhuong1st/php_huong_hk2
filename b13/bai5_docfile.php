<?php
   // Đọc file
    $file = fopen("note.txt","r");
    
    // Đọc file 15 byte
    $nd = fread($file, 20);
    echo " File được đọc 20 byte là: $nd <br>";
?>
<?php
    // Đọc file
    $file = fopen("note.txt","r");

    // Đọc file
    $nd1 = fread($file, filesize("note.txt"));
    echo " File được đọc là: $nd1";
?>