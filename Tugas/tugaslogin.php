<?php
  session_start(); //berfungsi untuk memulai session
  include "tugasinc.php"; //memanggil dan mengeksekusi file lain

  if (isset($_POST['submit'])) { //pengecekan kondisi saat tombol submit di klik
    $nama = $_POST['nama']; //menyimpan inputan ke variabel
    $email = $_POST['email']; //menyimpan inputan ke variabel
    $password = $_POST['password']; //menyimpan inputan ke variabel

    if ($email == 'ikevin.kkp@gmail.com' AND $password == '12345678') {
    // pengecekan inputan email dan password
      $_SESSION['email'] = $email; //jika benar akan disimpan di var email
      $_SESSION['nama'] = $nama; //jika benar akan disimpan di var email
      header('Location: tugasweb.php'); //dan di redirect ke file lain
    } else {
      header("Location: tugaserror.php");
      //jika salah, akan redirect ke file lain
    }
  }
 ?>

 <!DOCTYPE html>
 <head>
   <title>Halaman Login</title>
 </head>
 <style type="text/css"> /*penggunaan style internal*/
   body{ /*penggunaan style pada tag body*/
     background: grey;
     padding: 200px;
   }
   form{ /*penggunaan style pada tag form*/
     text-align: center;
   }
   legend{ /*penggunaan style pada tag legend*/
     text-align: left;
   }
 </style>
 <body>
   <form method="POST" action="tugaslogin.php"> <!--deklarasi pembuatan form-->
     <fieldset>
       <legend>HALAMAN LOGIN</legend> <!--menulis kalimat-->
     Nama : <input type="text" name="nama"><br><br>
     <!--menulis kalimat dan mebuat kolom inputan-->
     Email : <input type="email" name="email"><br><br>
     <!--menulis kalimat dan mebuat kolom inputan-->
     Password : <input type="password" name="password"><br><br>
     <!--menulis kalimat dan membuat kolom inputan-->
     <input type="submit" name="submit" value="Login">
     <!--membuat kolom inputan-->
     </fieldset>
   </form>
 </body>
 </html>
