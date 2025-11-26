<?php
   $so1 = array(10, 20, 30, 40);
   print_r($so1);
   echo " <br> Xuất phần tử đầu tiên: " . $so1[0];

   $so1[0] = 70;
   echo "<br>";
   print_r($so1);
   echo " <br> Cập nhật lại phần tử đầu tiên: " . $so1[0];
   echo "<hr>";


   $english1 = array("a" => "1", "b" => "2", "c" => "3");
   print_r($english1);
   echo " <br> Xuất phần tử đầu tiên: " . $english1["a"];
   $english1["a"] = 70;
   echo "<br>";
   print_r($english1);
   echo " <br> Cập nhật lại phần tử đầu tiên: " . $english1["a"];


   echo "<hr>";
   $matran1 = array(
      array(1,2),
      array(3,4)
   );
   print_r($matran1);
   echo " <br>Lấy ma trận: " . $matran1[0][0];

?>