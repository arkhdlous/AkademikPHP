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
  $insertSQL = sprintf("INSERT INTO heregistrasi_calon_mahasiswa (No_kwitansi, Tgl_daftar, Nama, Status_awal, Jenis_kelamin, TTL, Kelas, Prodi, Agama, Status_sipil, Alamat_tinggal, Kota, RT_RW, Kode_pos, Provinsi, No_Telphon, Email, Nama_sekolah, Jurusan, Tahun_lulus, Nilai_kelulusan, Nama_ayah, Pekerjaan_ayah, Nama_ibu, Pekerjaan_ibu, Alamat_tinggal_Ortu, Kota_Ortu, RT_RW_Ortu, Kode_pos_Ortu, Provinsi_Ortu, No_Telphon_Ortu) VALUES (%s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s)",
                       GetSQLValueString($_POST['No_kwitansi'], "text"),
                       GetSQLValueString($_POST['Tgl_daftar'], "text"),
                       GetSQLValueString($_POST['Nama'], "text"),
                       GetSQLValueString($_POST['Status_awal'], "text"),
                       GetSQLValueString($_POST['Jenis_kelamin'], "text"),
                       GetSQLValueString($_POST['TTL'], "text"),
                       GetSQLValueString($_POST['Kelas'], "text"),
                       GetSQLValueString($_POST['Prodi'], "text"),
                       GetSQLValueString($_POST['Agama'], "text"),
                       GetSQLValueString($_POST['Status_sipil'], "text"),
                       GetSQLValueString($_POST['Alamat_tinggal'], "text"),
                       GetSQLValueString($_POST['kota'], "text"),
                       GetSQLValueString($_POST['RT_RW'], "text"),
                       GetSQLValueString($_POST['Kode_pos'], "text"),
                       GetSQLValueString($_POST['Provinsi'], "text"),
                       GetSQLValueString($_POST['No_Telphon'], "text"),
                       GetSQLValueString($_POST['Email'], "text"),
                       GetSQLValueString($_POST['Nama_sekolah'], "text"),
                       GetSQLValueString($_POST['Jurusan'], "text"),
                       GetSQLValueString($_POST['Tahun_lulus'], "text"),
                       GetSQLValueString($_POST['Nilai_kelulusan'], "text"),
                       GetSQLValueString($_POST['Nama_ayah'], "text"),
                       GetSQLValueString($_POST['Pekerjaan_ayah'], "text"),
                       GetSQLValueString($_POST['Nama_Ibu'], "text"),
                       GetSQLValueString($_POST['Pekerjaan_Ibu'], "text"),
                       GetSQLValueString($_POST['Alamat_tinggal_ortu'], "text"),
                       GetSQLValueString($_POST['kota_ortu'], "text"),
                       GetSQLValueString($_POST['RT_RW_Ortu'], "text"),
                       GetSQLValueString($_POST['Kode_pos_ortu'], "text"),
                       GetSQLValueString($_POST['provinsi_ortu'], "text"),
                       GetSQLValueString($_POST['No_telphon_ortu'], "text"));

  mysql_select_db($database_Koneksi, $Koneksi);
  $Result1 = mysql_query($insertSQL, $Koneksi) or die(mysql_error());

  $insertGoTo = "Laporan heregistrasi calon mahasiswa.php";
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
.style5 {font-size: 25px}
.style6 {
	font-size: 18px;
	font-weight: bold;
}
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
   	      <p class="style5">Heregistrasi calon mahasiswa</p>
      	      <p class="style5">&nbsp;</p>
   	      <table width="624" border="0">
            <tr>
                  <td width="117"><div align="right">No Kwitansi : </div></td>
                  <td width="145"><input name="No_kwitansi" type="text" id="No_kwitansi" /></td>
                  <td width="126"><div align="right">Tanggal daftar : </div></td>
                  <td width="152"><input name="Tgl_daftar" type="text" id="Tgl_daftar" /></td>
                </tr>
                <tr>
                  <td><div align="right">Nama lengkap : </div></td>
                  <td><input name="Nama" type="text" id="Nama" /></td>
                  <td><div align="right"></div></td>
                  <td>&nbsp;</td>
                </tr>
                <tr>
                  <td><div align="right">Status awal : </div></td>
                  <td><select name="Status_awal" id="Status_awal">
                    <option>Baru</option>
                    <option>Pindahan</option>
                  </select></td>
                  <td><div align="right"></div></td>
                  <td>&nbsp;</td>
                </tr>
                <tr>
                  <td><div align="right">Jenis kelamin : </div></td>
                  <td><select name="Jenis_kelamin" id="Jenis_kelamin">
                    <option>Pria</option>
                    <option>Wanita</option>
                  </select></td>
                  <td><div align="right"></div></td>
                  <td>&nbsp;</td>
                </tr>
                <tr>
                  <td><div align="right">Tempat/tgl lahir : </div></td>
                  <td colspan="3"><input name="TTL" type="text" id="TTL" size="35" />                    
                  <div align="right"></div></td>
                </tr>
                <tr>
                  <td><div align="right">Kelas : </div></td>
                  <td><select name="Kelas" id="Kelas">
                    <option>Pagi</option>
                    <option>Malam</option>
                  </select></td>
                  <td><div align="right"></div></td>
                  <td>&nbsp;</td>
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
                  <td><div align="right"></div></td>
                  <td>&nbsp;</td>
                </tr>
                <tr>
                  <td><div align="right">Agama : </div></td>
                  <td><input name="Agama" type="text" id="Agama" /></td>
                  <td><div align="right"></div></td>
                  <td>&nbsp;</td>
                </tr>
                <tr>
                  <td><div align="right">Status sipil : </div></td>
                  <td><select name="Status_sipil" id="Status_sipil">
                    <option>Menikah</option>
                    <option>Belum Menikah</option>
                  </select></td>
                  <td><div align="right"></div></td>
                  <td>&nbsp;</td>
                </tr>
                <tr>
                  <td><div align="right">Alamat tinggal : </div></td>
                  <td colspan="3"><input name="Alamat_tinggal" type="text" id="Alamat_tinggal" size="35" />                    
                  <div align="right"></div></td>
                </tr>
                <tr>
                  <td><div align="right">Kota : </div></td>
                  <td><input name="kota" type="text" id="kota" /></td>
                  <td><div align="right">RT / RW : </div></td>
                  <td><input name="RT_RW" type="text" id="RT_RW" /></td>
                </tr>
                <tr>
                  <td><div align="right">Kode pos : </div></td>
                  <td><input name="Kode_pos" type="text" id="Kode_pos" /></td>
                  <td><div align="right">Provinsi : </div></td>
                  <td><input name="Provinsi" type="text" id="Provinsi" /></td>
                </tr>
                <tr>
                  <td><div align="right">No Telphon : </div></td>
                  <td><input name="No_Telphon" type="text" id="No_Telphon" /></td>
                  <td><div align="right">Email : </div></td>
                  <td><input name="Email" type="text" id="Email" /></td>
                </tr>
                <tr>
                  <td><div align="right">Nama sekolah : </div></td>
                  <td><input name="Nama_sekolah" type="text" id="Nama_sekolah" /></td>
                  <td><div align="right"></div></td>
                  <td>&nbsp;</td>
                </tr>
                <tr>
                  <td><div align="right">Jurusan : </div></td>
                  <td><input name="Jurusan" type="text" id="Jurusan" /></td>
                  <td><div align="right"></div></td>
                  <td>&nbsp;</td>
                </tr>
                <tr>
                  <td><div align="right">Tahun lulus : </div></td>
                  <td><input name="Tahun_lulus" type="text" id="Tahun_lulus" /></td>
                  <td><div align="right">Nilai : </div></td>
                  <td><input name="Nilai_kelulusan" type="text" id="Nilai_kelulusan" /></td>
                </tr>
                <tr>
                  <td><div align="right">Nama Ayah : </div></td>
                  <td><input name="Nama_ayah" type="text" id="Nama_ayah" /></td>
                  <td><div align="right">Pekerjaan Ayah : </div></td>
                  <td><input name="Pekerjaan_ayah" type="text" id="Pekerjaan_ayah" /></td>
                </tr>
                <tr>
                  <td><div align="right">Nama Ibu : </div></td>
                  <td><input name="Nama_Ibu" type="text" id="Nama_Ibu" /></td>
                  <td><div align="right">Pekerjaan Ibu : </div></td>
                  <td><input name="Pekerjaan_Ibu" type="text" id="Pekerjaan_Ibu" /></td>
                </tr>
                <tr>
                  <td><div align="right">Alamat tinggal : </div></td>
                  <td colspan="3"><input name="Alamat_tinggal_ortu" type="text" id="Alamat_tinggal_ortu" size="35" />                    
                  <div align="right"></div></td>
                </tr>
                <tr>
                  <td><div align="right">Kota : </div></td>
                  <td><input name="kota_ortu" type="text" id="kota_ortu" /></td>
                  <td><div align="right">RT / RW : </div></td>
                  <td><input name="RT_RW_Ortu" type="text" id="RT_RW_Ortu" /></td>
                </tr>
                <tr>
                  <td><div align="right">Kode pos : </div></td>
                  <td><input name="Kode_pos_ortu" type="text" id="Kode_pos_ortu" /></td>
                  <td><div align="right">Provinsi : </div></td>
                  <td><input name="provinsi_ortu" type="text" id="provinsi_ortu" /></td>
                </tr>
                <tr>
                  <td><div align="right">No Telphon : </div></td>
                  <td><input name="No_telphon_ortu" type="text" id="No_telphon_ortu" /></td>
                  <td>&nbsp;</td>
                  <td>&nbsp;</td>
                </tr>
                <tr>
                  <td colspan="4"><div align="right"></div>                    <div align="right">
                    <p>&nbsp;</p>
                    <p>
                      <input type="submit" name="Submit" value="Daftar" />
                      <input type="submit" name="Submit" value="Cancel" />
                    </p>
                  </div></td>
                </tr>
              </table>
      	      <p class="style6"><!-- end of templatemo_content -->
    </p>
              <input type="hidden" name="MM_insert" value="form1">
       	</form>
   	  </div> <div id="templatemo_sidebar">
    	
        <div id="sidebar_featured_project">
            
            <h3>MENU Heregistrasi Calon Mahasiswa </h3>
            <p><a href="Heregistrasi%20calon%20mahasiswa.php">Heregistrasi Calon Mahasiswa</a></p>
            <p><a href="Laporan heregistrasi calon mahasiswa.php">Laporan Registrasi Calon Mahasiswa</a></p>
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
