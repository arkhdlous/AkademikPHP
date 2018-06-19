<?php require_once 'koneksi.php' ?>
<script language="JavaScript">
      function konfirmasi(NOMOR_ASET) {
        tanya = confirm('Anda yakin ingin menghapus mahasiswa dengan NOMOR_ASET '+ NOMOR_ASET + '?');
        if (tanya == true) return true;
        else return false;
      }
   </script>
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
.style6 {color: #000000}
.style7 {
	font-size: 24px;
	font-family: "Bookman Old Style";
	font-weight: bold;
	font-style: italic;
}
.style8 {
	font-family: "Century Gothic";
	font-size: 14px;
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
   	    <p class="style7">Data Peminjaman Aset </p>
   	    <p>
    
<?php
include "koneksi.php";

$ambil_barang = "select * from peminjaman_aset";

mysql_select_db($database_Koneksi, $Koneksi) or die("Gagal memilih database!");
$hasil_query = mysql_query($ambil_barang, $Koneksi) or die ("Gagal memproses query!");

$jumlah_data = mysql_num_rows($hasil_query);

echo "<table border=1 width=920 cellpadding=1 cellspacing=1 size=1000>";
echo "<tr bgcolor=#333333 align=center>";
echo "<td><font size=2><b>NOMOR_ASET</font></td>";
echo "<td><font size=2><b>NAMA_ASET</font></td>";
echo "<td><font size=2><b>STATUS_ASET</font></td>";
echo "<td><font size=2><b>NIK</font></td>";
echo "<td><font size=2><b>TANGGAL_PINJAM</font></td>";
echo "<td><font size=2><b>TANGGAL_KEMBALI</font></td>";
echo "<td><font size=2><b>JUMLAH</font></td>";
echo "<td colspan=3><font size=2><b>AKSI</font></td>";
echo "</tr>";

while ($row=mysql_fetch_array($hasil_query))
{
   echo "<tr>";
   echo "<td><font size=2>$row[0]</td>";
   echo "<td><font size=2>$row[1]</td>";
   echo "<td><font size=2>$row[2]</td>";
   echo "<td><font size=2>$row[5]</td>";
   echo "<td><font size=2>$row[3]</td>";
   echo "<td><font size=2>$row[4]</td>";
   echo "<td><font size=2>$row[6]</td>";
   echo "<td><font size=2><a href=\"aset_peminjaman_ubah.php?Nomor_Aset=$row[0]\">Ubah</a></td>";
   echo "<td><font size=2><a href=\"aset_peminjaman_hapus.php?Nomor_Aset=$row[0]\" onclick=\"return konfirmasi('".$row[0]."')\">Hapus</a>";
   echo "</tr>";
}
echo "Jumlah data : $jumlah_data [<a href=aset_peminjaman_tambah.php>Tambah Data</a>]";
echo "</table>";	
?>

   
        <p>&nbsp;</p>
   	    <p>&nbsp;</p>
   	  </div> <!-- end of templatemo_content -->
    
    <div id="templatemo_sidebar">      </div> <div class="cleaner"></div>
  </div> <!-- end of templatemo_content_wrapper -->
    
    <div id="templatemo_footer">

Copyright © <?php echo date('Y') ?> - Created by : Ni Putu Aliya Ayu </div> <!-- end of templatemo_footer -->


</div> <span class="style3">
<!-- end of wrapper -->

</span>
</body>
</html>
