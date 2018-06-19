<?php require_once 'koneksi.php' ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Pembayaran dan beasiswa | Sistem Administrasi</title>
<meta name="keywords" content="curve site, free css templates, slider, CSS, HTML" />
<meta name="description" content="Curve Site - free css template with total 5 pages" />
<link href="templatemo_style.css" rel="stylesheet" type="text/css" />
<link href="css/jquery.ennui.contentslider.css" rel="stylesheet" type="text/css" media="screen,projection" />
<link type="text/css" href="css/jquery-ui-1.8.17.custom.css" rel="stylesheet">
<link type="text/css" href="css/jquery.ui.all.css">
<link type="text/css" href="css/jquery.ui.datepicker.css">
<script type="text/javascript" src="js/jquery-1.7.1.js"></script>
<script type="text/javascript" src="js/jquery.ui.core.js"></script>
<script type="text/javascript" src="js/jquery.ui.datepicker.js"></script>

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
.style7 {font-family: Arial, Helvetica, sans-serif}
-->
</style>
</head>

<script type="text/javascript">
$(function (){
	$("#tanggal1").datepicker({dateFormat:"yy-mm-dd"});
	$("#tanggal2").datepicker({dateFormat:"yy-mm-dd"});
});
</script>

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
          <h1 class="style6"><span class="style7">Pembayaran dan Beasiswa</span></h1>
  	  </div>
   	  <div id="templatemo_content">
    
        
        	<form name="form1" id="form1" method="POST" action="pendaftaran_beasiswa_insert.php">
      	      <p class="style5">Pendaftaran Beasiswa </p>
      	      <p class="style5">&nbsp;</p>
      	      <table width="511" height="273" border="0">
                <tr>
                  <td width="173"><div align="right">No Pendaftaran: </div></td>
                  <td width="328"><input name="no_pendaftaran" type="text" id="no_pendaftaran" size="25" /></td>
                </tr>
				<tr>
                  <td width="173"><div align="right">Npm : </div></td>
                  <td width="328"><input name="npm" type="text" id="npm" size="25" /></td>
                </tr>
                <tr>
                  <td><div align="right">Tanggal : </div></td>
                  <td><input name="tgl_pendaftaran" type="text" id="tanggal1" size="25" /></td>
                </tr>
                <tr>
                  <td><div align="right">No. SK Beasiswa  : </div></td>
                  <td><input name="no_sk_beasiswa" type="text" id="no_sk_beasiswa" size="25" /></td>
                </tr>
                <tr>
                  <td width="173"><div align="right">Jenis Beasiswa  : </div></td>
                  <td width="328"><input name="jenis_beasiswa" type="text" id="jenis_beasiswa" size="25" /></td>
                </tr>
				<tr>
                  <td width="173"><div align="right">Biaya : </div></td>
                  <td width="328"><input name="biaya" type="text" id="biaya" size="25" /></td>
                </tr>
				<tr>
                  <td width="173"><div align="right">Keterangan : </div></td>
                  <td width="328"><input name="keterangan" type="text" id="keterangan" size="25" /></td>
                </tr>
                <tr>
                  <td height="26" colspan="2"><div align="right">
                    <p>&nbsp;                    </p>
                    <p>
                      <input type="submit" name="Submit" value="Simpan" />
                      <input type="reset" name="Reset" value="Batal" />
                      <a href="pendaftaran_beasiswa_view.php">
                      <input type="button" name="kembali" value="Kembali" />
                      </a>
                    </p>
                  </div></td>
                </tr>
              </table>
      	      <p></td>
                </tr>
              </table>
        </p>
       	</form>
   	  </div> <!-- end of templatemo_content -->
    
    <div id="templatemo_sidebar">
    	
        <div id="sidebar_featured_project">
            
            <h3>MENU </h3>
             <p><a href="Pendaftaran_beasiswa.php">Pendaftaran Beasiswa </a></p>
            <p><a href="pendaftaran_beasiswa_view.php">Data Pendaftaran Beasiswa</a></p>
<br>
            <hr>
            <br>
            <h3>MENU PEMBAYARAN </h3>
            <p><a href="Biaya_kuliah.php">Biaya kuliah</a></p>
            <p><a href="Pencatatan_pembayaran.php">Pencatatan pembayaran</a></p>
            <p><a href="Pendaftaran_beasiswa.php">Pendaftaran beasiswa</a></p>

            <p>&nbsp;</p>
          <div class="cleaner"></div>
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
