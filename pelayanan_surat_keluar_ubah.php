<?php require_once 'koneksi.php' ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>SISTEM ADMINISTRASI STMIK CILEGON</title>
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
.style6 {color: #000000}
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
            <li><a href="pelayanan_mahasiswa_info.php">Pelayanan</a></li>
            <li><a href="Pembayaran.php">Pembayaran</a></li>
            <li><a href="Aset.php">Aset</a></li>
            <li><a href="Aset.php"><?php echo $_SESSION['username'] ?></a></li>
        </ul> 
    
    </div> <!-- end of templatemo_menu -->
    
    <div id="templatemo_content_wrapper">
    
    	<div id="templatemo_content_header">
          <h1 class="style6">Administrasi Pelayanan Mahasiswa</h1>
  	  </div>
   	  <div id="templatemo_content">
      
      <?php
	  
include "koneksi.php";
$NO_SURAT = $_GET['NO_SURAT'];
$perintah_sql = "select * from surat_keluar where NO_SURAT=$NO_SURAT";
mysql_select_db($database_Koneksi, $Koneksi) or die("Gagal memilih database!");
$hasil_query = mysql_query($perintah_sql, $Koneksi) or die ("Gagal memproses query!");
$row=mysql_fetch_array($hasil_query);

   $NO_SURATH = $row['No_Surat'];
   $KODE_BAGIAN = $row['Kode_Bagian'];
   $TUJUAN = $row['Tujuan'];
   $TANGGAL_SURAT = $row['Tanggal_surat'];
   $TANGGAL_SURAT_KELUAR = $row['Tanggal_surat_keluar'];
   $ISI_SURAT = $row['Isi_surat'];
   $KETERANGAN= $row['Keterangan'];
  ?>
    
        
        	<form name="form2" id="form2" method="POST" action="pelayanan_surat_keluar_update.php">
      	      <p class="style5">Pelayanan Surat Keluar </p>
      	      <p>&nbsp;</p>
      	      <table width="511" height="443" border="0">
                <tr>
                  <td width="183"><div align="right">No. Surat : </div></td>
                  <td width="318"><input name="nosurat" type="varchar" id="no_surat" size="30" value="<?php echo "$NO_SURAT"; ?>" disabled="disabled"/></td>
                  <input type="hidden" name="no_surath" value="<?php echo "$NO_SURATH"; ?>">
                </tr>
                <tr>
                  <td><div align="right">Kode Bagian : </div></td>
                  <td><input name="kode_bagian" type="varchar" id="kode_bagian" size="30" value="<?php echo "$KODE_BAGIAN";?>" /></td>
                </tr>
                <tr>
                  <td><div align="right">Tujuan : </div></td>
                  <td><input name="tujuan" type="text" id="Tujuan" value="<?php echo "$TUJUAN";?>" /></td>
                </tr>
                <tr>
                  <td><div align="right">Tanggal Surat : </div></td>
                  <td><input name="tanggal_surat" type="varchar" id="Tanggal_surat" size="25" value="<?php echo "$TANGGAL_SURAT";?>"  /></td>
                </tr>
                 <tr>
                  <td><div align="right">Tanggal Surat Keluar : </div></td>
                  <td><input name="tanggal_surat_keluar" type="varchar" id="Tanggal_surat_keluar" size="25" value="<?php echo "$TANGGAL_SURAT_KELUAR";?>"  /></td>
                </tr>
                 <tr>
                  <td><div align="right">Isi Surat : </div></td>
                  <td><textarea name="isi_surat" cols="45" rows="6" id="isi_surat"><?php echo "$ISI_SURAT";?></textarea></td>
                </tr>
                <tr>
                  <td><div align="right">Keterangan : </div></td>
                  <td><select name="keterangan" id="keterangan">
                    <option>-- Pilih Keterangan --</option>
                    <option>Belum Dikirim</option>
                    <option>Sudah Dikirim</option>
                  </select></td>
                </tr>
                <tr>
                  <td height="11" colspan="2"><div align="right">
                    <p>&nbsp;                    </p>
                    <p>
                      <input type="submit" name="Submit" value="Simpan" />
                      <input type="reset" name="Reset" value="Batal" />
                      <a href="pelayanan_surat_keluar_view.php"><input type="button" name="Kembali" value="Kembali" /></a>
                    </p>
                  </div></td>
                </tr>
              </table>
       	</form>
   	  </div> <!-- end of templatemo_content -->
    
    <div id="templatemo_sidebar">
    	
        <div id="sidebar_featured_project">
            
            <h3>MENU</h3>
            <p><a href="pelayanan_surat_keluar_tambah.php">Pelayanan Surat Keluar</a></p>
            <p><a href="pelayanan_surat_keluar_view.php">Data Surat Keluar </a></p>
            <h3>
              <!-- end of sidebar -->
              
            </h3>
      </div>
        
      </div> <div class="cleaner"></div>
  </div> <!-- end of templatemo_content_wrapper -->
    
    <div id="templatemo_footer">

        Copyright © <?php echo date('Y') ?> - Created by : Ni Putu Aliya Ayu </div> <!-- end of templatemo_footer -->

</div> <span class="style3">
<!-- end of wrapper -->

</span>
</body>
</html>
