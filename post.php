<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Form Input</title>
  </head>
  <body>
    <form method="POST" action="postAct.php"> <!--membuat form-->
      <table width="400" align="center" cellpadding="2" cellspacing="2">
        <!--membuat tabel dengan style inline-->
        <tr>
          <td width="130">Nama</td> <!--membuat tabel data dengan style inline-->
          <td><input type="text" name="nama"></td>
          <!--membuat kolom input nama-->
        </tr>
        <tr>
          <td width="130">Email</td> <!--membuat tabel data dengan style inline-->
          <td><input type="text" name="email"></td>
          <!--membuat kolom input email-->
        </tr>
        <tr>
          <td>
            <input type="submit" name="btnLogin" value="Login">
            <!--membuat button submit-->
            <input type="reset" name="reset" value="Reset">
            <!--membuat button reset-->
          </td>
        </tr>
      </table>
    </form>
  </body>
</html>
