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
  $insertSQL = sprintf("INSERT INTO biaya_kuliah (NPM, Semester, Tanggal, No_Tagihan, Jumlah_Tagihan, Potongan, SK_Beasiswa) VALUES (%s, %s, %s, %s, %s, %s, %s)",
                       GetSQLValueString($_POST['NPM'], "int"),
                       GetSQLValueString($_POST['Semester'], "text"),
                       GetSQLValueString($_POST['Tanggal'], "text"),
                       GetSQLValueString($_POST['No_tagihan'], "int"),
                       GetSQLValueString($_POST['Jumlah_tagihan'], "int"),
                       GetSQLValueString($_POST['Potongan'], "int"),
                       GetSQLValueString($_POST['SK_Beasiswa'], "text"));

  mysql_select_db($database_Koneksi, $Koneksi);
  $Result1 = mysql_query($insertSQL, $Koneksi) or die(mysql_error());

  $insertGoTo = "Laporan biaya kuliah.php";
  if (isset($_SERVER['QUERY_STRING'])) {
    $insertGoTo .= (strpos($insertGoTo, '?')) ? "&" : "?";
    $insertGoTo .= $_SERVER['QUERY_STRING'];
  }
  header(sprintf("Location: %s", $insertGoTo));
}

$maxRows_Recordset1 = 10;
$pageNum_Recordset1 = 0;
if (isset($_GET['pageNum_Recordset1'])) {
  $pageNum_Recordset1 = $_GET['pageNum_Recordset1'];
}
$startRow_Recordset1 = $pageNum_Recordset1 * $maxRows_Recordset1;

mysql_select_db($database_Koneksi, $Koneksi);
$query_Recordset1 = "SELECT * FROM biaya_kuliah";
$query_limit_Recordset1 = sprintf("%s LIMIT %d, %d", $query_Recordset1, $startRow_Recordset1, $maxRows_Recordset1);
$Recordset1 = mysql_query($query_limit_Recordset1, $Koneksi) or die(mysql_error());
$row_Recordset1 = mysql_fetch_assoc($Recordset1);

if (isset($_GET['totalRows_Recordset1'])) {
  $totalRows_Recordset1 = $_GET['totalRows_Recordset1'];
} else {
  $all_Recordset1 = mysql_query($query_Recordset1);
  $totalRows_Recordset1 = mysql_num_rows($all_Recordset1);
}
$totalPages_Recordset1 = ceil($totalRows_Recordset1/$maxRows_Recordset1)-1;
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
.style6 {font-family: Arial, Helvetica, sans-serif}
.style7 {
	font-size: 24px;
	font-weight: bold;
	font-style: italic;
	font-family: "Bookman Old Style";
}
.style8 {color: #000000}
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
    
        
        	<!-- end of templatemo_content -->
            <p class="style7">*Laporan biaya kuliah* </p>
            <p>&nbsp;            </p>
            <table width="882" border="1" cellpadding="1" cellspacing="1">
              <tr bgcolor="#FFFFFF">
                <td><div align="center" class="style8">NPM</div></td>
                <td><div align="center" class="style8">Semester</div></td>
                <td><div align="center" class="style8">Tanggal</div></td>
                <td><div align="center" class="style8">No_Tagihan</div></td>
                <td><div align="center" class="style8">Jumlah_Tagihan</div></td>
              </tr>
              <?php do { ?>
              <tr bgcolor="#FFFFFF">
                <td><div align="center" class="style8"><?php echo $row_Recordset1['NPM']; ?></div></td>
                <td><div align="center" class="style8"><?php echo $row_Recordset1['Semester']; ?></div></td>
                <td><div align="center" class="style8"><?php echo $row_Recordset1['Tanggal']; ?></div></td>
                <td><div align="center" class="style8"><?php echo $row_Recordset1['No_Tagihan']; ?></div></td>
                <td><div align="center" class="style8"><?php echo $row_Recordset1['Jumlah_Tagihan']; ?></div></td>
              </tr>
              <?php } while ($row_Recordset1 = mysql_fetch_assoc($Recordset1)); ?>
            </table>
            <p>&nbsp;</p>
            <p>&nbsp;</p>
</div> <div id="templatemo_sidebar">
    	
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
<?php
mysql_free_result($Recordset1);
?>
