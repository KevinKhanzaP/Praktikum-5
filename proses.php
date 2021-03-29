<?php
  include "inc.php"; //memanggil dan mengeksekusi file lain
  echo $angka; //menuliskan var $angka
  echo "<br>"; //memberi lompat barisan
  if ($angka==100) { //deklarasi kondisi
    echo "Memuaskan"; //menuliskan kalimat jika kondisi terpenuhi
  } elseif ($angka<100&&$angka>=85) { //deklarasi kondisi
    echo "Sangat Baik"; //menuliskan kalimat jika kondisi terpenuhi
  } elseif ($angka<85&&$angka>=70) { //deklarasi kondisi
    echo "Baik"; //menuliskan kalimat jika kondisi terpenuhi
  } elseif ($angka<70&&$angka>=55) { //deklarasi kondisi
    echo "Cukup"; //menuliskan kalimat jika kondisi terpenuhi
  } elseif ($angka<55&&$angka>=0) { //deklarasi kondisi
    echo "Kurang"; //menuliskan kalimat jika kondisi terpenuhi
  }
?>
