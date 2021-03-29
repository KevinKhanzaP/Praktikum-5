<html>
<head>
  <title></title>
</head>
<body>
<form method="post" action="hasilkirim.php">
  <!--membuat form yang hasilnya akan diproses di file lain-->
  <table width="400" align="center" cellpadding="2" cellspacing="2">
    <!--membuat tabel-->
    <tr>
      <td width="130">Nama</td> <!--membuat tabel data-->
      <td><input type="text" name="nama"</td> <!--membuat tabel inputan-->
    </tr>
    <tr>
      <td colspan="2" align="center"> <!--membuat tabel data-->
        <input type="submit" name="btnLogin" value="Kirim"> <!--membuat button submit-->
        <input type="reset" name="reset" value="Reset"> <!--membuat button reset-->
      </td>
    </tr>
  </table>
</form>
</body>
</html>
