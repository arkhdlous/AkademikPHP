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
  $insertSQL = sprintf("INSERT INTO cuti (No_Cuti, Tgl_Cuti, NPM, Nama, TTL, Prodi, Semester, Biaya_studi, Alamat, No_Telphon, Tahun_Akadmik) VALUES (%s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s)",
                       GetSQLValueString($_POST['No_cuti'], "text"),
                       GetSQLValueString($_POST['Tgl_cuti'], "text"),
                       GetSQLValueString($_POST['NPM'], "text"),
                       GetSQLValueString($_POST['Nama'], "text"),
                       GetSQLValueString($_POST['TTL'], "text"),
                       GetSQLValueString($_POST['Prodi'], "text"),
                       GetSQLValueString($_POST['Semester'], "text"),
                       GetSQLValueString($_POST['Biaya_studi'], "text"),
                       GetSQLValueString($_POST['Alamat'], "text"),
                       GetSQLValueString($_POST['No_Telphon'], "text"),
                       GetSQLValueString($_POST['Tahun_Akadmik'], "text"));

  mysql_select_db($database_Koneksi, $Koneksi);
  $Result1 = mysql_query($insertSQL, $Koneksi) or die(mysql_error());

  $insertGoTo = "Laporan cuti.php";
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
      	      <p class="style5">Pengajuan Cuti </p>
      	      <p>&nbsp;</p>
      <table width="538" height="403" border="0">
    <tr>
                  <td width="214"><div align="right">No Cuti: </div></td>
                  <td width="314"><input name="No_cuti" type="text" id="No_cuti" size="50" /></td>
          </tr>
                <tr>
                  <td><div align="right">Tanggal Cuti  : </div></td>
                  <td><input name="Tgl_cuti" type="text" id="Tgl_cuti" size="50" /></td>
                </tr>
                <tr>
                  <td><div align="right"> NPM : </div></td>
                  <td><input name="NPM" type="text" id="NPM" size="50" /></td>
                </tr>
                <tr>
                  <td><div align="right">Nama Mahasiswa  : </div></td>
                  <td><input name="Nama" type="text" id="Nama" size="50" /></td>
                </tr>
                <tr>
                  <td><div align="right">Tempat / Tanggal lahir  : </div></td>
                  <td><input name="TTL" type="text" id="TTL" size="50" /></td>
                </tr>
                <tr>
                  <td><div align="right">Program studi  : </div></td>
                  <td><select name="Prodi" id="Prodi">
                    <option>Teknik Informatika (S1)</option>
                    <option>Manajemen Informatika (D3)</option>
                    <option>Komputer Grafis (D1)</option>
                    <option>Komputer Programmer (D1)</option>
                    <option>Komputer Akuntansi (D1)</option>
                  </select></td>
                </tr>
                <tr>
                  <td><div align="right">Semester : </div></td>
                  <td><input name="Semester" type="text" id="Semester" size="15" />
                  * Tulis dengan angka </td>
                </tr>
                <tr>
                  <td><div align="right">Biaya kuliah  : </div></td>
                <td><input name="Biaya_studi" type="text" id="Biaya_studi" size="50" /></td>
                </tr>
                <tr>
                  <td><div align="right">Alamat : </div></td>
                <td rowspan="2"><textarea name="Alamat" cols="39" rows="7" id="Alamat"></textarea></td>
                </tr>
                <tr>
                  <td height="49"><div align="right"></div></td>
                </tr>
                <tr>
                  <td><div align="right">No. Telphon : </div></td>
                <td><input name="No_Telphon" type="text" id="No_Telphon" size="50" /></td>
                </tr>
                <tr>
                  <td><div align="right">Tahun Akademik : </div></td>
                <td><input name="Tahun_Akadmik" type="text" id="Tahun_Akadmik" size="50" /></td>
                </tr>
                <tr>
                  <td colspan="2"><div align="right">
                    <p>&nbsp;                    </p>
                    <p>
                      <input type="submit" name="Submit" value="Daftar" />
                      <input type="reset" name="Reset" value="Cancel" />
                    </p>
                  </div></td>
                </tr>
          </table>
        <input type="hidden" name="MM_insert" value="form1">
       	</form>
   	  </div> <!-- end of templatemo_content -->
    
    <div id="templatemo_sidebar">
    	
        <div id="sidebar_featured_project">
            
            <h3>Rules Choice </h3>
            <p><a href="Cuti.php">Ambil Cuti</a></p>
            <p><a href="laporan cuti.php">Laporan Cuti</a></p>
            <BR>
            <hr>
            <BR>  
            <h3>MENU AKADEMIK </h3>
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
