<?php
  session_start(); //berfungsi untuk memulai session
  if (empty($_SESSION['email'])) { //deklarasi kondisi
    header('Location: tugaslogin.php'); //redirect ke file lain
  }
 ?>

 <!DOCTYPE html>
 <head>
   <title>Halaman Profil Web</title>
   <link rel="stylesheet" href="style.css"> <!--mengambil file css-->
 </head>
 <body>

    <!-- SOURCE CODE DIBAWAH DIAMBIL DARI TUGAS PRAKTIKUM WEB SEBELUMNYA-->

     <div class="header">
       <h1>Selamat Datang</h1>
       <p>Di Website Yang Saya Coding Sendiri :)</p>
     </div>

     <div class="topnav">
       <a href="#a">Home</a>
       <a href="#b">Pendidikan</a>
       <a href="#c">Aktivitas</a>
       <a href="#d">Jadwal Kuliah</a>
       <a href="https://ikevinkkp.wixsite.com/website" style="float:right">Mau Lihat Website Ku Yang Lain ?</a>
     </div>

     <div class="row">
       <div class="leftcolumn">
         <div class="firstcard" id="a">
           <h2>PERKENALAN</h2>
           <h5>Tak Kenal Maka Tak Sayang...</h5>
           <div class="prflimg" id="z">
             <img src="fotoprofil.jpg" alt="fotoprofil" width="100%">
               <div class="boximg">
                 <p><b> Kevin Khanza Pangestu <b></p>
               </div>
           </div>
           <p>Lahir di Surabaya, pada tanggal 25 Juni 2001.</p>
           <p>Bertempat tinggal di Pondok Jati CM-19, Sidoarjo, Jawa timur</p>
         </div>
         <div class="card" id="b">
           <h2>JADWAL KULIAH*</h2>
           <h5>Berikut jadwal kuliah saya :</h5>
           <div class="jdwl">
             <table>
               <tr>
                 <th>Mata Kuliah</th>
                 <th>SKS</th>
                 <th>Waktu</th>
               </tr>
               <tr>
                 <td>Kepemimpinan</td>
                 <td>3</td>
                 <td>Senin, 09.30-12.00</td>
               </tr>
               <tr>
                 <td>Analisis Desain Terstruktur</td>
                 <td>3</td>
                 <td>Senin, 13.00-15.30</td>
               </tr>
               <tr>
                 <td>Bahasa Indonesia</td>
                 <td>3</td>
                 <td>Selasa, 09.30-12.00</td>
               </tr>
               <tr>
                 <td>Administrasi Basis Data</td>
                 <td>3</td>
                 <td>Selasa, 13.00-15.30</td>
               </tr>
               <tr>
                 <td>Kewirausahaan</td>
                 <td>3</td>
                 <td>Rabu, 09.30-12.00</td>
               </tr>
               <tr>
                 <td>Pemrograman Web</td>
                 <td>3</td>
                 <td>Rabu, 13.00-15.30</td>
               </tr>
               <tr>
                 <td>Komputer dan Masyarakat</td>
                 <td>3</td>
                 <td>Kamis, 09.30-12.00</td>
               </tr>
               <tr>
                 <td>Interaksi Manusia Komputer</td>
                 <td>2</td>
                 <td>Kamis, 13.00-15.30</td>
               </tr>
               <tr>
                 <td></td>
                 <td>23</td>
                 <td></td>
               </tr>
             </table>
           </div>
           <h6>*Semester 4</h6>
         </div>
         <div class="card" id="c">
           <h2>PENDIDIKAN</h2>
           <p>- SDI Sabilillah (2008-2014)</p>
           <p>- SMPN 1 Sidoarjo (2014-2017)</p>
           <p>- SMA MUHAMMADIYAH 2 Sidoarjo (2017-2019)</p>
           <p>- UPN 'Veteran' Jawa Timur (2019-Sekarang)</p>
         </div>
         <div class="card" id="d">
           <h2>AKTIVITAS</h2>
           <h5>Berikut aktivitas dalam dunia perkuliahan yang pernah saya ikuti :</h5>
           <p>- Panitia divisi Pubdekdok dalam acara Night Of Friendship, sebagai anggota (2019)</p>
           <p>- Panitia divisi Acara dalam acara pengkaderan DIMENSI (2020), sebagai penanggung jawab, mc, dan moderator</p>
           <p>- Panitia divisi Acara dalam acara pengkaderan PENSI (2021), sebagai anggota, host, dan moderator</p>
         </div>
       </div>

       <div class="rightcolumn">
         <div class="card">
           <h3>Follow My Social Media !</h3>
           <p>Instagram : @cerberusw12</p>
           <p>Line : clashmeok</p>
         </div>

        <!-- SOURCE CODE DIATAS DIAMBIL DARI TUGAS PRAKTIKUM WEB SEBELUMNYA-->

         <div class="card">
           <p>Login sebagai : <?php echo $_SESSION['nama']; ?><p>
            <!--menuliskan kalimat dengan mengambil data dari file lain-->
           <p>Dengan email : <?php echo $_SESSION['email']; ?></p>
            <!--menuliskan kalimat dengan mengambil data dari file lain-->
           <p>Waktu Login : <br><?php echo date("l, d-M-Y / g:i:s a"); ?></p>
            <!--menuliskan kalimat dengan menampilkan waktu serta hari pengaksesan file-->
         </div>
       </div>
     </div>

      <!-- SOURCE CODE DIBAWAH DIAMBIL DARI TUGAS PRAKTIKUM WEB SEBELUMNYA-->

     <div class="footer">
       <h2>Semoga Lulus Pemrograman Web Dengan Nilai 'A' Ya Allah...</h2>
     </div>
 </body>
