<?php
  if (empty($_POST['nama'])) { //membuat seleksi kondisi yang memanggil hasil file lain
    header("Location:kosong.php"); //redirect ke file lain jika memenuhi kondisi
  } else {
    echo "<center>Nama : ".$_POST['nama']."</center><br>";
    //menulis hasil inputan jika memenuhi kondisi
  }
?>
