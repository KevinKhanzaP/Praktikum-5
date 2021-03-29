<html>
<head>
  <title>Pemrograman PHP dengan array</title>
</head>
<body>
  <?php //tag pembuka php
    $nama[] = "Kevin"; //deklarasi var $nama dengan array
    $nama[] = "Khanza"; //deklarasi var $nama dengan array
    $nama[] = "Pangestu"; //deklarasi var $nama dengan array
    echo $nama[1] . $nama[2] . $nama[0];
    //menuliskan hasil dari var $nama dengan urutan array
    echo "<br>"; //memberi lompat baris
    $jum_array = count($nama); //deklarasi var $jum_array yang menjumlahkan var $nama
    echo "jumlah elemen array = ", $jum_array;
    //menuliskan hasil dari var $jum_array
  ?>
</body>
</html>
