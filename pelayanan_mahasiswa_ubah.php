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
$NPM = $_GET['NPM'];
$perintah_sql = "select * from pelayanan_mahasiswa where NPM=$NPM";
mysql_select_db($database_Koneksi, $Koneksi) or die("Gagal memilih database!");
$hasil_query = mysql_query($perintah_sql, $Koneksi) or die ("Gagal memproses query!");
$row=mysql_fetch_array($hasil_query);

   $NPMH = $row['NPM'];
   $NAMA = $row['Nama'];
   $JURUSAN = $row['Jurusan'];
   $KELAS = $row['Kelas'];
   $SEMESTER = $row['Semester'];
   $ALAMAT = $row['Alamat'];
   $NO_TELEPON = $row['No_Telepon'];
   $JENIS_KELAMIN = $row['Jenis_Kelamin'];
   $AGAMA = $row['Agama'];
   $PELAYANAN_YANG_DIMINTA = $row['Pelayanan_yang_diminta'];
   $STATUS = $row['Status'];

?>
    
        
        	<form name="form2" id="form2" method="POST" action="pelayanan_mahasiswa_update.php">
      	      <p class="style5">Pelayanan  Mahasiswa aktif </p>
      	      <p>&nbsp;</p>
      	      <table width="511" height="443" border="0">
                <tr>
                  <td width="183"><div align="right">NPM : </div></td>
                  <td width="318"><input name="npm" type="text" id="npm" size="25" value="<?php echo "$NPM"; ?>" disabled="disabled"/></td>
                  <input type="hidden" name="NPM" value="<?php echo "$NPMH"; ?>">
                </tr>
                <tr>
                  <td><div align="right">Nama Mahasiswa : </div></td>
                  <td><input name="nama" type="text" id="nama" size="40" value="<?php echo "$NAMA";?>" /></td>
                </tr>
                <tr>
                  <td><div align="right"> Jurusan : </div></td>
                  <td><select name="jurusan" id="jurusan"/>
                  <option value=0 selected="selected">--- Pilih Jurusan ---</option>
                    <option>Teknik Informatika (S1)</option>
                    <option>Manajemen Informatika (D3)</option>
                    <option>Komputer Grafis (D1)</option>
                    <option>Komputer Programmer (D1)</option>
                    <option>Komputer Akuntansi (D1)</option>
                  </select></td>
                </tr>
                <tr>
                  <td><div align="right">Kelas : </div></td>
                  <td><select name="kelas" id="kelas" />
                  <option value=0 selected="selected">--- Pilih Kelas ---</option>
                    <option>Pagi</option>
                    <option>Malam</option>
                  </select></td>
                </tr>
                <tr>
                  <td><div align="right">Semester : </div></td>
                  <td><input name="semester" type="text" id="semester" size="10" value="<?php echo "$SEMESTER";?>"  /></td>
                </tr>
                <tr>
                  <td><div align="right">Alamat Lengkap : </div></td>
                  <td rowspan="2"><textarea name="alamat" cols="45" rows="6" id="alamat" value="<?php echo "$ALAMAT";?>" /></textarea></td>
                </tr>
                <tr>
                  <td><div align="right"></div>                    </td>
                </tr>
                <tr>
                  <td><div align="right">No. Telepon : </div></td>
                  <td><input name="notelepon" type="text" id="notelepon" size="50" value="<?php echo "$NO_TELEPON";?>" /></td>
                </tr>
                <tr>
                  <td><div align="right">Jenis Kelamin : </div></td>
                  <td><select name="jeniskelamin" id="jeniskelamin"/>
                    <option value=0  selected="selected">--- Pilih Jenis Kelamin ---</option>
                    <option>Laki - Laki</option>
                    <option>Perempuan</option>
                  </select></td>
                </tr>
                <tr>
                  <td><div align="right">Agama : </div></td>
                <td><select name="agama" id="agama"/>
                <option value=0 selected="selected">--- Pilih Agama ---</option>
                    <option>Islam</option>
                    <option>Kristen Protestan</option>
                    <option>Kristen Katolik</option>
                    <option>Budha</option>
                    <option>Hindu</option>
                    <option>Konghucu</option>
                  </select></td>
                </tr>
                <tr>
                  <td><div align="right">Pelayanan yang diminta: </div></td>
                <td><select name="pelayanan" id="pelayanan">
                  <option value="0">--- Pilih Pelayanan ---</option>
                    <option>Surat Keterangan</option>
                    <option>Surat Kerja Praktek</option>
                    <option>Surat Tugas Mahasiswa</option>
                    <option>KRS</option>
                    <option>KHS</option>
                   
                  </select></td>
                </tr>
                <tr>
                  <td><div align="right">Status:</div></td>
                <td><select name="status" id="status"/>
                  <option value=0  selected="selected">--- Pilih Status Pelayanan ---</option>
                  <option>Sudah Dilayani</option>
                  <option>Belum Dilayani</option>
                </select>
                </td>
                </tr>
                <tr>
                  <td height="11" colspan="2"><div align="right">
                    <p>&nbsp;                    </p>
                    <p>
                      <input type="submit" name="Submit" value="Simpan" />
                      <input type="reset" name="Reset" value="Batal" />
                      <a href="pelayanan_mahasiswa_view.php"><input type="button" name="Kembali" value="Kembali" /></a>
                    </p>
                  </div></td>
                </tr>
              </table>
       	</form>
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
