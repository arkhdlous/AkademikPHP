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
            <li><a href="logout.php"><?php echo $_SESSION['username'] ?></a></li>
        </ul> 
    
    </div> <!-- end of templatemo_menu -->
    
    <div id="templatemo_content_wrapper">
    
    	<div id="templatemo_content_header">
          <h1 class="style6">Administrasi Aset</h1>
  	  </div>
   	  <div id="templatemo_content">
    
        
        	<form name="form4" id="form4" method="POST" action="aset_penyimpanan_insert.php">
      	      <p class="style5">Penyimpanan Aset </p>
      	      <p>&nbsp;</p>
      	      <table width="511" height="222" border="0">
                <tr>
                  <td width="178" height="24"><div align="right">NOMOR_ASET : </div></td>
                  <td width="323"><input name="nomor_aset" type="text" id="nomor_aset" size="25" /></td>
                </tr>
                <tr>
                  <td height="32"><div align="right">
                    <p>NAMA_ASET :</p>
                    </div></td>
                  <td><input name="nama_aset" type="text" id="nama_aset" size="25" /></td>
                </tr>
                <tr>
                  <td><div align="right"> JENIS_BARANG: </div></td>
                  <td><select name="jenis_barang" id="jenis_barang">
                  <option value=0 selected="selected">--- Pilih Jenis ---</option>
                    <option>Furniture</option>
                    <option>Elektronik</option>
                    <option>ATK</option>
                  </select></td>
                </tr>
                <tr>
                  <td><div align="right">STATUS_ASET : </div></td>
                  <td><select name="status_aset" id="status_aset">
                  <option value=0 selected="selected">--- Pilih Status ---</option>
                    <option>Baik</option>
                    <option>Rusak</option>
					<option>Hilang</option>
					<option>Dijual</option>
					<option>Dalam Perbaikan</option>
                  </select></td>
                </tr>
                <tr>
                  <td><div align="right">SATUAN : </div></td>
                  <td><input name="satuan" type="text" id="satuan" size="14" /></td>
                </tr>
                <tr>
                  <td height="66" colspan="2"><div align="right">
                    <p>&nbsp;                    </p>
                    <p>
                      <input type="submit" name="Submit" value="Simpan" />
                      <input type="reset" name="Reset" value="Batal" />
                    </p>
                  </div></td>
                </tr>
              </table>
       	</form>
   	  </div> <!-- end of templatemo_content -->
    
    <div id="templatemo_sidebar">
    	
        <div id="sidebar_featured_project">
            
            <h3>MENU</h3>
            <p><a href="aset_penyimpanan_tambah.php">Penyimpanan Aset </a></p>
            <p><a href="aset_penyimpanan_view.php">Data Penyimpanan Aset </a></p>
            <p><a href="laporan_aset_penyimpanan_pdf.php">Laporan Penyimpanan Aset</a> </p>
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
