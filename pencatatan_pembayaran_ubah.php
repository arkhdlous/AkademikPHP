<?php require_once 'koneksi.php' ?> 
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Pengadaan Aset | Aplikasi Akademik</title>
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
-->
</style>
</head>
<script type="text/javascript">
$(function (){
  $("#tanggal1").datepicker({dateFormat:"yy-mm-dd"});
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
          <h1 class="style6">Administrasi Aset</h1>
  	  </div>
   	  <div id="templatemo_content">
      
      <?php
	  
include "koneksi.php";
$Npm = $_GET['npm'];
$perintah_sql = "select * from pencatatan_pembayaran where NPM=$Npm";
mysql_select_db($database_Koneksi, $Koneksi) or die("Gagal memilih database!");
$hasil_query = mysql_query($perintah_sql, $Koneksi) or die ("Gagal memproses query!");
$row=mysql_fetch_array($hasil_query);

   $npm = $row['NPM'];
   $no_kwitansi = $row['No_Kwitansi'];
   $tgl_pembayaran = $row['Tgl_Pembayaran'];
   $no_tagihan= $row['No_Tagihan'];
   $jumlah_bayaran= $row['Jumlah_bayaran'];

?>
    
        
        	<form name="form101" id="form101" method="POST" action="pencatatan_pembayaran_update.php">
      	      <p class="style5">Pencatatan Pembayaran Beasiswa</p>
      	      <p>&nbsp;</p>
      	      <table width="511" height="344" border="0">
                <tr>
                  <td width="183"><div align="right">NPM : </div></td>
                  <td width="318"><input name="npm" type="text" id="npm" size="25" value="<?php echo "$Npm"; ?>" disabled="disabled"/></td>
                  <input type="hidden" name="npm" value="<?php echo "$Npm"; ?>">
                </tr>
                <tr>
                  <td><div align="right">No Kwitansi: </div></td>
                  <td><input name="no_kwitansi" type="text" id="no_kwitansi" size="40" value="<?php echo "$no_kwitansi";?>" /></td>
                </tr>
				<tr>
                  <td><div align="right">Tanggal Pembayaran : </div></td>
                  <td><input name="tgl_pembayaran" type="text" id="tanggal1" size="40" value="<?php echo "$tgl_pembayaran";?>" /></td>
                </tr>
				<tr>
                  <td><div align="right">NO Tagihan : </div></td>
                  <td><input name="no_tagihan" type="varchar" id="no_tagihan" size="25" value="<?php echo "$no_tagihan";?>"  /></td>
                </tr>
                <tr>
                  <td><div align="right">Jumlah Bayaran : </div></td>
                  <td><input name="jumlah_bayaran" type="text" id="jumlah_bayaran" size="20" value="<?php echo "$jumlah_bayaran";?>" /> </td>
                </tr>
                <tr>
                  <td height="66" colspan="2"><div align="right">
                    <p>&nbsp;                    </p>
                    <p>
                      <input type="submit" name="Submit" value="Simpan" />
                      <input type="reset" name="Reset" value="Batal" />
                      <a href="pencatatan_pembayaran_view.php"><input type="button" name="Kembali" value="Kembali" /></a>
                    </p>
                  </div></td>
                </tr>
              </table>
       	</form>
   	  </div> <!-- end of templatemo_content -->
    
    <div id="templatemo_sidebar">
    	
        <div id="sidebar_featured_project">
            
            <h3>MENU</h3>
             <p><a href="Pencatatan_pembayaran.php">Pencatatan pembayaran beasiswa </a></p>
            <p><a href="pencatatan_pembayaran_view.php">Data Pencatatan Pembayaran Beasiswa</a></p>
            
            <br>
            <hr>
            <br>
            <h3>MENU PEMBAYARAN </h3>
            <p><a href="Biaya_kuliah.php">Biaya kuliah</a></p>
            <p><a href="Pencatatan_pembayaran.php">Pencatatan pembayaran</a></p>
            <p><a href="Pendaftaran_beasiswa.php">Pendaftaran beasiswa</a></p>
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
