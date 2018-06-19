<?php require_once 'koneksi.php' ?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Sistem Administrasi</title>
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

<div id="Layer1" style="position:absolute; left:200px; top:-3px; width:250px; height:60px; z-index:1;"><a href="Home.php"><img src="Icon/logo.png" width="448" height="127" border="0" /></a></div>
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
      			<li class="logout"><a href="logout.php">LOGOUT</a></li>
            <!--<li><a href="Aset.php"><?php echo $_SESSION['username'] ?></a></li>-->
        </ul> 
    
    </div> <!-- end of templatemo_menu -->
    
    <div id="templatemo_content_wrapper">
    
    	<div id="templatemo_content_header">
          <h1>Home</h1>
  	  </div>
    	<div id="templatemo_content">
    
        
        	<h2 align="justify" class="style4">Selamat datang...</h2>
            <p align="justify">Dalam sistem Akademik STMIK CILEGON, disini kami memberikan pelayanan untuk anda semua untuk dapat mengkases beberapa aplikasi yang telah disediakan oleh kami. Diantaranya ialah ; </p>
            <p align="justify">1. Administrasi Akademik</p>
            <p align="justify">2. Proses perkuliahan</p>
            <p align="justify">3. Pelayanan mahasiswa</p>
            <p align="justify">4. Pembayaran &amp; Beasiswa </p>
            <p align="justify">5. Administrasi kelulusan &amp; Alumni, dan </p>
            <p align="justify">6, Administrasi aset</p>
            <p align="justify">Diantara ke-6 Judul diatas, masih ada lagi beberapa sub sistem didalamnya yang dapat anda gunakan, sebagai salah satu contohnya ialah, Proses Pendaftaran untuk menjadi calon mahasiswa baru STMIK CILEGON. yang terdapat pada aplikasi Administrasi Akademik. Dan lain sebagainya. </p>
            <h2>&nbsp;</h2>
            <h2>&nbsp;</h2>
            <h2>Application product advertising</h2>
            <div class="two_col float_l">

                     <h6>&nbsp;</h6>
                     <p><img src="Icon/Add-Male-User-icon.png" width="256" height="256" /></p>
                     <p align="justify">Daftarkan dirimu segera disini... dengan menjadi salah satu dari kami sebagai calon mahasiswa baru STMIK CILEGON, caranya cukup mudah anda hanya tinggal melakukan registrasi seperti biasa ditambah dengan beberapa persyaratan yang telah ditentukan. </p>
                     <div class="button"><a href="Info.php">Klik disini </a></div>
                 
            </div>
        
            <div class="two_col float_r">
                      <h6>&nbsp;</h6>
                      <p><img src="Icon/Text.png" width="256" height="256" /></p>
                      <p align="justify">Kami memberikan pelayanan kepada anda agar dapat mengikuti ujian / test masuk menjadi mahasiswa kami. bagi yang telah melakukan pendaftaran awal. Caranya cukup mudah, anda diberikan keterangan nantinya jika ingin melakukannya.</p>
                      <div class="button"><a href="Info.php">Klik disini </a></div>
          </div>
            
    	</div> <!-- end of templatemo_content -->
    
    <div id="templatemo_sidebar">
    	
        <div id="news_section">
            
            <h3><img src="Icon/home-icon.png" width="256" height="256" /></h3>
                    
            <div class="news_box"></div>
               
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
