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

<div id="Layer1" class="style1" style="position:absolute; left:31px; top:3px; width:337px; height:65px; z-index:1"><a href="Home.php"><img src="Icon/logo.png" width="448" height="127" border="0" /></a></div>
<div class="style3" id="templatemo_wrapper">
	
    <div id="templatemo_header">
        
  </div> <!-- end of templatemo_header -->
    
    <div id="templatemo_menu">
    
        <ul>
            <li><a href="Akademik.php">Akademik</a></li>
            <li><a href="Perkuliahan.php">Perkuliahan</a></li>
            <li><a href="pelayanan_mahasiswa_info.php">Pelayanan</a></li>
            <li><a href="Pembayaran.php">Pembayaran</a></li>
			<li><a href="Kelulusan.php">Kelulusan</a></li>
			<li><a href="Aset.php">Aset</a></li>
        </ul> 
    
    </div> <!-- end of templatemo_menu -->
    
    <div id="templatemo_content_wrapper">
    
    	<div id="templatemo_content_header">
          <h1 class="style6">Administrasi Aset</h1>
  	  </div>
   	  <div id="templatemo_content">
      
      <?php
	  
include "koneksi.php";
$Nomor_Aset = $_GET['nomor_aset'];
$perintah_sql = "select * from aset_pemeliharaan where Nomor_Aset=$Nomor_Aset";
mysql_select_db($nama_db, $koneksi) or die("Gagal memilih database!");
$hasil_query = mysql_query($perintah_sql, $koneksi) or die ("Gagal memproses query!");
$row=mysql_fetch_array($hasil_query);

   $NOMOR_ASET = $row['nomor_aset'];
   $NIK = $row['nik'];
   $KELUHAN = $row['keluhan'];
   $STATUS_ASET = $row['status_aset'];
   $BIAYA_PERBAIKAN = $row['biaya_perbaikan'];
   $PETUGAS_PERBAIKAN = $row['petugas_perbaikan'];

?>
    
        
        	<form name="form2" id="form2" method="POST" action="aset_pemeliharaan_update.php">
      	      <p class="style5">Pemeliharaan Aset </p>
      	      <p>&nbsp;</p>
      	      <table width="511" height="327" border="0">
                <tr>
                  <td width="183"><div align="right">Nomor_Aset : </div></td>
                  <td width="318"><input name="nomor_aset" type="text" id="nomor_aset" size="25" value="<?php echo "$Nomor_Aset"; ?>" disabled="disabled"/></td>
                  <input type="hidden" name="nomor_aset" value="<?php echo "$Nomor_Aset"; ?>">
                </tr>
                <tr>
                  <td><div align="right">NIK : </div></td>
                  <td><input name="nik" type="text" id="nik" size="40" value="<?php echo "$NIK";?>" /></td>
                </tr>
				<tr>
                  <td><div align="right">KELUHAN : </div></td>
                  <td><textarea name="keluhan" cols="45" rows="6" id="keluhan"></textarea></td>
                </tr>
                <tr>
                  <td><div align="right">STATUS_ASET : </div></td>
                  <td><select name="status_aset" id="status_aset" />
                  <option value=0 selected="selected">--- Pilih Status ---</option>
                    <option>Baik</option>
                    <option>Rusak</option>
					<option>Hilang</option>
					<option>Dijual</option>
					<option>Dalam Perbaikan</option>
                  </select></td>
                </tr>
                <tr>
                  <td><div align="right">B_PERBAIKAN : </div></td>
                  <td><input name="biaya_perbaikan" type="text" id="biaya_perbaikan" size="40" value="<?php echo "$BIAYA_PERBAIKAN";?>"  /></td>
                </tr>
                 <tr>
                  <td><div align="right">P_PERBAIKAN : </div></td>
                  <td><input name="petugas_perbaikan" type="text" id="petugas_perbaikan" size="40" value="<?php echo "$PETUGAS_PERBAIKAN";?>"  /></td>
                </tr>
                <tr>
                  <td height="11" colspan="2"><div align="right">
                    <p>&nbsp;                    </p>
                    <p>
                      <input type="submit" name="Submit" value="Simpan" />
                      <input type="reset" name="Reset" value="Batal" />
                      <a href="aset_pemeliharaan_view.php"><input type="button" name="Kembali" value="Kembali" /></a>
                    </p>
                  </div></td>
                </tr>
              </table>
       	</form>
   	  </div> <!-- end of templatemo_content -->
    
    <div id="templatemo_sidebar">
    	
        <div id="sidebar_featured_project">
            
            <h3>MENU</h3>
            <p><a href="aset_pemeliharaan_tambah.php">Pemeliharaan Aset </a></p>
            <p><a href="aset_pemeliharaan_view.php">Data Pemeliharaan </a></p>
            <h3>
              <!-- end of sidebar -->
              
            </h3>
      </div>
        
      </div> <div class="cleaner"></div>
  </div> <!-- end of templatemo_content_wrapper -->
    
    <div id="templatemo_footer">

        Copyright © 2012 - Created by : Manajemen Informatika STMIK Cilegon </div> <!-- end of templatemo_footer -->

</div> <span class="style3">
<!-- end of wrapper -->

</span>
</body>
</html>
