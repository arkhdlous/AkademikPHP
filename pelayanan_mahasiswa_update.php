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
			<li><a href="Kelulusan.php">Kelulusan</a></li>
			<li><a href="Aset.php">Aset</a></li>
        </ul> 
    
    </div> <!-- end of templatemo_menu -->
    
    <div id="templatemo_content_wrapper">
    
    	<div id="templatemo_content_header">
          <h1 class="style6">Administrasi Pelayanan Mahasiswa</h1>
  	  </div>
   	  <div id="templatemo_content">
      
     <?php
include "koneksi.php";

if($Koneksi){
   $NPMH = $_POST['NPM'];
   $NAMA = $_POST['nama'];
   $JURUSAN = $_POST['jurusan'];
   $KELAS = $_POST['kelas'];
   $SEMESTER = $_POST['semester'];
   $ALAMAT = $_POST['alamat'];
   $NO_TELEPON = $_POST['notelepon'];
   $JENIS_KELAMIN = $_POST['jeniskelamin'];
   $AGAMA = $_POST['agama'];
   $PELAYANAN_YANG_DIMINTA = $_POST['pelayanan'];
   $STATUS = $_POST['status'];
   
   $SQL = "UPDATE pelayanan_mahasiswa SET Nama='$NAMA', Jurusan='$JURUSAN', Kelas='$KELAS', Semester='$SEMESTER', Alamat='$ALAMAT', No_Telphon='$NO_TELEPON', Jenis_kelamin='$JENIS_KELAMIN', Agama='$AGAMA', Pelayanan_yang_diminta='$PELAYANAN_YANG_DIMINTA', Status='$STATUS' WHERE NPM='$NPMH'";
   mysql_query($SQL, $Koneksi) or die ("Proses pembaharuan data GAGAL! <br> [<a href=pelayanan_mahasiswa_view.php>Lihat Data Pelayanan Mahasiswa</a>]");
   
   echo "Siswa dengan NPM = $NPMH Berhasil Diperbaharui!";
   echo "<br>";
   echo "[<a href=pelayanan_mahasiswa_view.php>Lihat Data Siswa</a>]";
}

?>
    
   	  </div> <!-- end of templatemo_content -->
    
    <div id="templatemo_sidebar">
    	
        <div id="sidebar_featured_project">
            
            <h3>MENU</h3>
            <p><a href="pelayanan_mahasiswa_tambah.php">Pelayanan Mahasiswa Aktif </a></p>
            <p><a href="pelayanan_mahasiswa_view.php">Data Pelayanan Mahasiswa </a></p>
            <h3>
              <!-- end of sidebar -->
              
            </h3>
      </div>
        
      </div> <div class="cleaner"></div>
  </div> <!-- end of templatemo_content_wrapper -->
    
    <div id="templatemo_footer">

        Copyright © 2012 - Created by : Aldi Budiman </div> <!-- end of templatemo_footer -->

</div> <span class="style3">
<!-- end of wrapper -->

</span>
</body>
</html>
