<?php

session_start();
error_reporting(E_ALL ^ E_DEPRECATED ^ E_NOTICE ^ E_STRICT);

$host = "localhost";
$username = "root"; 
$password = "";
$database_Koneksi = "akademik";
$Koneksi = mysql_connect($host,$username,$password) or die ("Gagal terhubung ke server MySQL!");
mysql_select_db($database_Koneksi, $Koneksi) or die ("Gagal memilih database!");

// Set transfer data ke db menggunakan utf8 jika pada db belum di tentukan.
//mysqli_set_charset('utf8');

// Set default timezone +7 (WIB)
date_default_timezone_set('Asia/Jakarta');
require_once 'functions.php';

// Tampilkan messages yang diinginkan ke user.
 $msg_to_user = my_messages_to_user();

 $no = 1;
?>
