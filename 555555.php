<?php require_once('../Connections/Koneksi.php'); ?>
<?php
function GetSQLValueString($theValue, $theType, $theDefinedValue = "", $theNotDefinedValue = "") 
{
  $theValue = (!get_magic_quotes_gpc()) ? addslashes($theValue) : $theValue;

  switch ($theType) {
    case "text":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;    
    case "long":
    case "int":
      $theValue = ($theValue != "") ? intval($theValue) : "NULL";
      break;
    case "double":
      $theValue = ($theValue != "") ? "'" . doubleval($theValue) . "'" : "NULL";
      break;
    case "date":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;
    case "defined":
      $theValue = ($theValue != "") ? $theDefinedValue : $theNotDefinedValue;
      break;
  }
  return $theValue;
}

$editFormAction = $_SERVER['PHP_SELF'];
if (isset($_SERVER['QUERY_STRING'])) {
  $editFormAction .= "?" . htmlentities($_SERVER['QUERY_STRING']);
}

if ((isset($_POST["MM_insert"])) && ($_POST["MM_insert"] == "form1")) {
  $insertSQL = sprintf("INSERT INTO pendaftaran_beasiswa (No_Pendaftaran, NPM, Tgl_Pendaftaran, No_SK_Beasiswa, Jenis_beasiswa, Biaya, Keterangan) VALUES (%s, %s, %s, %s, %s, %s, %s)",
                       GetSQLValueString($_POST['No_Pendaftaran'], "text"),
                       GetSQLValueString($_POST['NPM'], "int"),
                       GetSQLValueString($_POST['Tgl_pendaftaran'], "text"),
                       GetSQLValueString($_POST['No_sk_beasiswa'], "int"),
                       GetSQLValueString($_POST['Jenis_beasiswa'], "text"),
                       GetSQLValueString($_POST['Biaya'], "text"),
                       GetSQLValueString($_POST['Keterangan'], "text"));

  mysql_select_db($database_Koneksi, $Koneksi);
  $Result1 = mysql_query($insertSQL, $Koneksi) or die(mysql_error());

  $insertGoTo = "Laporan pendaftaran beasiswa.php";
  if (isset($_SERVER['QUERY_STRING'])) {
    $insertGoTo .= (strpos($insertGoTo, '?')) ? "&" : "?";
    $insertGoTo .= $_SERVER['QUERY_STRING'];
  }
  header(sprintf("Location: %s", $insertGoTo));
}
?>
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
.style5 {font-size: 25px}
.style6 {font-family: Arial, Helvetica, sans-serif}
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
            <li><a href="Pelayanan.php">Pelayanan</a></li>
            <li><a href="Pembayaran.php">Pembayaran</a></li>
			<li><a href="Kelulusan.php">Kelulusan</a></li>
			<li><a href="Aset.php">Aset</a></li>
        </ul> 
    
    </div> <!-- end of templatemo_menu -->
    
    <div id="templatemo_content_wrapper">
    
    	<div id="templatemo_content_header">
          <h1 class="style6">Pembayaran dan Beasiswa</h1>
  	  </div>
<div id="templatemo_content">
    
        
        	<form name="form1" id="form1" method="POST" action="<?php echo $editFormAction; ?>">
      	      <p align="center" class="style5">	Pendaftaran Beasiswa </p>
      	      <p align="center">&nbsp;</p>
      	      <table width="511" height="393" border="0">
                <tr>
                  <td width="173"><div align="right">No Pendaftaran : </div></td>
                  <td width="328"><input name="No_Pendaftaran" type="text" id="No_Pendaftaran" size="50" /></td>
                </tr>
                <tr>
                  <td><div align="right">Npm  : </div></td>
                  <td><input name="NPM" type="text" id="NPM" size="50" /></td>
                </tr>
                <tr>
                  <td><div align="right">Tanggal : </div></td>
                  <td><input name="Tgl_pendaftaran" type="text" id="Tgl_pendaftaran" size="50" /></td>
                </tr>
                <tr>
                  <td><div align="right">No Sk beasiswa :</div></td>
                  <td><input name="No_sk_beasiswa" type="text" id="No_sk_beasiswa" size="50" /></td>
                </tr>
                <tr>
                  <td><div align="right">Jenis beasiswa : </div></td>
                  <td><input name="Jenis_beasiswa" type="text" id="Jenis_beasiswa" size="50" /></td>
                </tr>
                <tr>
                  <td><div align="right">Biaya : </div></td>
                  <td><input name="Biaya" type="text" id="Biaya" size="50" /></td>
                </tr>
                <tr>
                  <td><div align="right">Keterangan : </div></td>
                <td><input name="Keterangan" type="text" id="Keterangan" size="50" /></td>
                </tr>
                <tr>
                  <td height="57" colspan="2"><div align="right">
                    <p>&nbsp;                    </p>
                    <p>
                      <input type="submit" name="Submit" value="OK" />
                      <input type="reset" name="Reset" value="Cancel" />
                    </p>
                  </div></td>
                </tr>
              </table>
        <p>&nbsp;</p>
   	    <input type="hidden" name="MM_insert" value="form1">
   	  </form>
        	<!-- end of templatemo_content -->
    </div> <div id="templatemo_sidebar">
    	
        <div id="sidebar_featured_project">
            
            <h3>Rules Choice </h3>
            <p><a href="Pendaftaran beasiswa.php">Pendaftaran beasiswa</a></p>
            <p><a href="pencatatan pembayaran.php">Pencatatan pembayaran</a></p>
            <p><a href="Biaya kuliah.php">Biaya kuliah</a></p>
            <p></p>
          <div class="cleaner"></div>
            
        </div>
        
        <div class="cleaner"></div>
    </div> <!-- end of sidebar -->
            
            <div class="cleaner"></div>
  </div> <!-- end of templatemo_content_wrapper -->
    
    <div id="templatemo_footer">

        Copyright © 2012 - Created by : Aldi Budiman </div> <!-- end of templatemo_footer -->

</div> <span class="style3">
<!-- end of wrapper -->

</span>
</body>
</html>
