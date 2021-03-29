<html>
<head>
  <title>Konversi Tipe</title>
</head>
<body>
  <?php //tag pembuka php
    $a = 300.4; //deklarasi var $nilai_1
    echo $a; //menuliskan isi var $a
    echo "<br>"; //memberi lompat baris
    echo "Tipe Double : ", doubleval($a), "<br>"; //mengkonversi var $a menjadi tipe double
    echo "Tipe Integer : ", intval($a), "<br>"; //mengkonversi var $a menjadi tipe integer
    echo "Tipe String : ", strval($a); //mengkonversi var $a menjadi tipe string
  ?>
</body>
</html>
