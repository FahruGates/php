<?php

 $hari = $_POST['hari'];
 
 if ($hari == "senin") {
      echo "Menggunakan Baju PSAS";
 } else if ($hari == "selasa" || $hari == "rabu") {
      echo "Memakai Baju Kejuruan";
 } else if ($hari == "kamis" || $hari == "jumat") {
      echo "Memakai Baju Batik";
 } else if ($hari == "sabtu" ) {
      echo "Memakai Baju Pramuka atau Psas ";
 } else if ($hari == "minggu"){
      echo "Hari Libur atau Memakai Baju bebas";
 } else {
      echo "Yang ada masukan bukan hari";
 }

?>