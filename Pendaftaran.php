<?php require_once('koneksi.php'); ?>
<?php
function GetSQLValueString($theValue, $theType, $theDefinedValue = "", $theNotDefinedValue = "") 
{
  $theValue = (!get_magic_quotes_gpc()) ? addslashes($theValue) : $theValue;

  switch ($theType) {
    case "text":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;    
    case "long":
    case "int":
      $theValue = ($theValue != "") ? intval($theValue) : "NULL";
      break;
    case "double":
      $theValue = ($theValue != "") ? "'" . doubleval($theValue) . "'" : "NULL";
      break;
    case "date":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;
    case "defined":
      $theValue = ($theValue != "") ? $theDefinedValue : $theNotDefinedValue;
      break;
  }
  return $theValue;
}

$editFormAction = $_SERVER['PHP_SELF'];
if (isset($_SERVER['QUERY_STRING'])) {
  $editFormAction .= "?" . htmlentities($_SERVER['QUERY_STRING']);
}

if ((isset($_POST["MM_insert"])) && ($_POST["MM_insert"] == "form1")) {
  $insertSQL = sprintf("INSERT INTO pendaftaran (No_kwitansi, Tgl_daftar, Nama, Alamat, Jenis_kelamin, TTL, Status_awal, Kelas, Prodi) VALUES (%s, %s, %s, %s, %s, %s, %s, %s, %s)",
                       GetSQLValueString($_POST['No_kwitansi'], "text"),
                       GetSQLValueString($_POST['Tgl_daftar'], "text"),
                       GetSQLValueString($_POST['Nama'], "text"),
                       GetSQLValueString($_POST['Alamat'], "text"),
                       GetSQLValueString($_POST['Jenis_kelamin'], "text"),
                       GetSQLValueString($_POST['TTL'], "text"),
                       GetSQLValueString($_POST['Status_awal'], "text"),
                       GetSQLValueString($_POST['kelas'], "text"),
                       GetSQLValueString($_POST['Prodi'], "text"));

  mysql_select_db($database_Koneksi, $Koneksi);
  $Result1 = mysql_query($insertSQL, $Koneksi) or die(mysql_error());

  $insertGoTo = "Laporan pendaftaran.php";
  if (isset($_SERVER['QUERY_STRING'])) {
    $insertGoTo .= (strpos($insertGoTo, '?')) ? "&" : "?";
    $insertGoTo .= $_SERVER['QUERY_STRING'];
  }
  header(sprintf("Location: %s", $insertGoTo));
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>SISTEM ADMINISTRASI</title>
<meta name="keywords" content="curve site, free css templates, slider, CSS, HTML" />
<meta name="description" content="Curve Site - free css template with total 5 pages" />
<link href="templatemo_style.css" rel="stylesheet" type="text/css" />
<link href="css/jquery.ennui.contentslider.css" rel="stylesheet" type="text/css" media="screen,projection" />
<script language="JavaScript" type="text/JavaScript">
<!--
function MM_reloadPage(init) {  //reloads the window if Nav4 resized
  if (init==true) with (navigator) {if ((appName=="Netscape")&&(parseInt(appVersion)==4)) {
    document.MM_pgW=innerWidth; document.MM_pgH=innerHeight; onresize=MM_reloadPage; }}
  else if (innerWidth!=document.MM_pgW || innerHeight!=document.MM_pgH) location.reload();
}
MM_reloadPage(true);
//-->
</script>
<style type="text/css">
<!--
.style1 {
	font-family: "Century Gothic";
	font-size: 45px;
	font-weight: bold;
}
.style3 {font-family: "Century Gothic"}
.style4 {font-size: 24px}
.style5 {font-size: 25px}
-->
</style>
</head>

<body>

<div id="Layer1" class="style1" style="position:absolute; left:200px; top:-3px; width:337px; height:65px; z-index:1;"><a href="Home.php"><img src="Icon/logo.png" width="448" height="127" border="0" /></a></div>
<div class="style3" id="templatemo_wrapper" style="background:#5a5c5e ">
  
    <div id="templatemo_header">
    
        <div class="twitter">
              <a href="#">follow us <br />on Twitter</a>
      </div>
        
  </div> <!-- end of templatemo_header -->
    
    <div id="templatemo_menu">
    
        <ul>
            <li><a href="Akademik.php">Akademik</a></li>
            <li><a href="Perkuliahan.php">Perkuliahan</a></li>
            <li><a href="pelayanan_mahasiswa_info.php">Pelayanan</a></li>
            <li><a href="Pembayaran.php">Pembayaran</a></li>
            <li><a href="Aset.php">Aset</a></li>
            <li><a href="Aset.php"><?php echo $_SESSION['username'] ?></a></li>
        </ul> 
    
    </div> <!-- end of templatemo_menu -->
    
    <div id="templatemo_content_wrapper">
    
    	<div id="templatemo_content_header">
          <h1>Administrasi Akademik</h1>
  	  </div>
   	  <div id="templatemo_content">
    
        
        	<form name="form1" id="form1" method="POST" action="<?php echo $editFormAction; ?>">
      	      <p class="style5">Pendaftaran Calon Mahasiswa baru </p>
      	      <p>&nbsp;</p>
      	      <table width="511" height="393" border="0">
                <tr>
                  <td width="173"><div align="right">No Kwitansi : </div></td>
                  <td width="328"><input name="No_kwitansi" type="text" id="No_kwitansi" size="50" /></td>
                </tr>
                <tr>
                  <td><div align="right">Tanggal daftar : </div></td>
                  <td><input name="Tgl_daftar" type="text" id="Tgl_daftar" size="50" /></td>
                </tr>
                <tr>
                  <td><div align="right">Nama Lengkap : </div></td>
                <td><input name="Nama" type="text" id="Nama" size="50" /></td>
                </tr>
                <tr>
                  <td><div align="right">Alamat Lengkap : </div></td>
                  <td rowspan="2"><textarea name="Alamat" cols="39" rows="7" id="Alamat"></textarea></td>
                </tr>
                <tr>
                  <td><div align="right"></div>                    </td>
                </tr>
                <tr>
                  <td><div align="right">Jenis Kelamin : </div></td>
                  <td><select name="Jenis_kelamin" id="Jenis_kelamin">
                    <option>Laki - Laki</option>
                    <option>Perempuan</option>
                  </select></td>
                </tr>
                <tr>
                  <td><div align="right">Tempat / Tanggal Lahir : </div></td>
                  <td><input name="TTL" type="text" id="TTL" size="50" /></td>
                </tr>
                <tr>
                  <td><div align="right">Status Awal  : </div></td>
                <td><select name="Status_awal" id="Status_awal">
                  <option>Baru</option>
                  <option>Pindahan</option>
                </select></td>
                </tr>
                <tr>
                  <td><div align="right">Kelas : </div></td>
                <td><select name="kelas" id="kelas">
                  <option>Pagi</option>
                  <option>Malam</option>
                                </select></td>
                </tr>
                <tr>
                  <td><div align="right">Program study : </div></td>
                <td><select name="Prodi" id="Prodi">
                  <option>Teknik Informatika (S1)</option>
                  <option>Manajemen Informatika (D3)</option>
                  <option>Komputer Grafis (D1)</option>
                  <option>Komputer Programmer (D1)</option>
                  <option>Komputer Akuntansi (D1)</option>
                </select></td>
                </tr>
                <tr>
                  <td height="57" colspan="2"><div align="right">
                    <p>&nbsp;                    </p>
                    <p>
                      <input type="submit" name="Submit" value="Daftar" />
                      <input type="reset" name="Reset" value="Cancel" />
                    </p>
                  </div></td>
                </tr>
              </table>
        <p>&nbsp;</p>
       	<input type="hidden" name="MM_insert" value="form1">
       	</form>
        	<!-- end of templatemo_content -->
    </div> <div id="templatemo_sidebar">
    	
        <div id="sidebar_featured_project">
            
            <h3>MENU PENDAFTARAAN </h3>
            <p><a href="Pendaftaran.php">Pendaftaran Mahasiswa</a></p>
            <p><a href="Laporan pendaftaran.php">Laporan Pendaftaran</a></p>
            <div class="cleaner"></div>
            <BR>
            <hr>
            <BR>  
            <h3>Rules Choice </h3>
            <p><a href="Pendaftaran.php">Pendaftaran Mahasiswa</a></p>
            <p><a href="Ujian%20masuk.php">Ujian masuk</a></p>
            <p><a href="Heregistrasi%20calon%20mahasiswa.php">Heregistrasi Calon Mahasiswa</a></p>
            <p><a href="Heregistrasi%20mahasiswa%20aktif.php">Heregistrasi  Mahasiswa Aktif</a></p>
            <p><a href="Pindah%20jurusan.php">Pindah jurusan</a></p>
            <p><a href="Pindah%20sekolah.php">Pindah sekolah</a></p>
            <p><a href="Cuti.php">Ambil Cuti </a>   </p>
            <div class="cleaner"></div>
        </div>
        
        <div class="cleaner"></div>
    </div> <!-- end of sidebar -->
            
            <div class="cleaner"></div>
  </div> <!-- end of templatemo_content_wrapper -->
    
    <div id="templatemo_footer">

Copyright © <?php echo date('Y') ?> - Created by : Ni Putu Aliya Ayu </div> <!-- end of templatemo_footer -->
</div> <span class="style3">
<!-- end of wrapper -->

</span>
</body>
</html>
