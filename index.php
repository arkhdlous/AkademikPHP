<?php require_once('Koneksi.php'); ?>
<?php
//$error = array();

$q = mysql_query('SELECT * FROM user WHERE username = "'.mysql_real_escape_string($_POST['username']).'"');
$user = mysql_fetch_array($q);

if($_SESSION['uid']) 
{
  die('Anda sudah Login. . . ');
}
else
{
    // Setelah user memasukkan username, cek apakah username yang dimasukkan terdaftar di dalam tabel users.
    if(isset($_POST['login']) == 'go')
    {
    // Jika tidak ada, tampilkan pesan error.
      if(!$_POST['username'])
      {
        $error['username'] = '<i style="color:red"> Harap isi kolom Username </i>';
      }
      if(!$_POST['password'])
      {
        $error['password'] = '<i style="color:red"> Harap isi kolom Password </i>';
      }
      if($_POST['username'] && $_POST['password'])
      {         
        // Check apakah password yang dimasukkan sesuai dengan password user di dalam tabel users.
        if($_POST['username'] == $user['username'] && sha1($_POST['password']) == $user['password'])
        {
          
          // Jika ada, set sesi berdasarkan user id (di dalam contoh adalah uid) dan username.
          $_SESSION['uid'] = $user['uid'];
          $_SESSION['username'] = $user['username'];
              
          // Redirect ke index
          header('Location: home.php');         
        }
        else
        {
          // Jika tidak sesuai, tampilkan pesan error
          $error['xxx'] = '<i style="color:red"> Username atau Password yang anda maksud tidak ada di sistem </i>';
        }
      
      }
    }
}

?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<title>SISTEM ADMINISTRASI</title>
<style type="text/css">
<!--
body {
	background-color: #CCCCCC;
}
.style8 {font-family: "Century Gothic"; font-size: 17px; }
-->
</style>
</head>

<body>

<div align="center">
  <p>&nbsp;</p>
  <form name="form1" method="POST" action="">
  <input type="hidden" name="login" value="go">
    <p><img src="Icon/Login.png" width="448" height="286"></p>
    <table width="343" border="0">
      <tr>
        <td><div align="right" class="style8">User ID : </div></td>
        <td><input name="username" type="text" id="username" size="30"></td>
        <?php echo $error['username'] ?>
      </tr>
      <tr>
        <td><div align="right" class="style8">Password : </div></td>
        <td><input name="password" type="password" id="password" size="30"></td>
        <?php echo $error['password'] ?>
      </tr>
      <tr>
        <td colspan="2">          <p align="center">
            <input type="submit" name="login" value="Masuk">
            <input type="reset" name="Reset" value="Cancel">
        </p></td>
        <?php echo $error['xxx'] ?>
      </tr>
    </table>
    <p>&nbsp;</p>
    <input type="hidden" name="MM_insert" value="form1">
  </form>
  <p>&nbsp;</p>
</div>
</body>
</html>
