<?php require_once 'koneksi.php' ?>
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
          <h1>Pembayaran &amp; Beasiswa </h1>
  	  </div>
   	  <div id="templatemo_content">
    
        
        	<h2 align="justify" class="style4">Selamat datang...</h2>
        <p align="justify">Sistem Administrasi STMIK CILEGON merupakan Sistem yang bertujuan untuk 


membantu, melayani, dan mengarahkan serta mengatur semua kegiatan dalam bidang akademik

(Perkuliahan). Disini telah tersedia pelayanan untuk anda agar dapat melakukan beberapa seperti : </p>
        <ul>
          <li>Administrasi Akademik</li>
          <li>Administrasi Proses Perkuliahan</li>
          <li>Administrasi Pelayanan Mahasiswa</li>
          <li>Pembayaran &amp; Beasiswa </li>
          <li>Administrasi Kelulusan &amp; Alumni </li>
          <li>Administrasi Aset</li>
        </ul>
        <p align="justify">&nbsp;</p>
            <h2>&nbsp;</h2>
            <h2>&nbsp;</h2>
          <h2>&nbsp;</h2>
      </div> <!-- end of templatemo_content -->
    
    <div id="templatemo_sidebar">
    	
        <div id="sidebar_featured_project">
            
            <h3>MENU PEMBAYARAN </h3>
            <p><a href="Biaya_kuliah.php">Biaya kuliah</a></p>
            <p><a href="Pencatatan_pembayaran.php">Pencatatan pembayaran</a></p>
            <p><a href="Pendaftaran_beasiswa.php">Pendaftaran beasiswa</a></p>

            <p>&nbsp;</p>
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
