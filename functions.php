<?php


function display_page($page){
	@header('Content-type: text/html; charset=UTF-8');
	echo $page;
}


function get_kompetensi($id,$edit=0){
	if(!$id) return;
	$addclause = '';
	if($edit) $addclause = ' AND `kompetensi_kode`!="'.mysql_real_escape_string($edit).'"';
	$q = mysql_query('SELECT * FROM `kompetensi_keahlian` WHERE `kompetensi_kode`="'.mysql_real_escape_string($id).'"'.$addclause);
	$r = mysql_fetch_array($q);
	return $r;
}


function get_user($id=0){
	if(!$id) return;
	$addclause = '';
	if($edit) $addclause = ' AND `user`!="'.mysql_real_escape_string($edit).'"';
	$q = mysql_query('SELECT * FROM `user` WHERE `uid`="'.mysql_real_escape_string($id).'"'.$addclause);
	$r = mysql_fetch_array($q);
	return $r;
}

function get_standar($id,$edit=0){
	if(!$id) return;
	$addclause = '';
	if($edit) $addclause = ' AND `sk_kode`!="'.mysql_real_escape_string($edit).'"';
	$q = mysql_query('SELECT * FROM `standar_kompetensi` WHERE `sk_kode`="'.mysql_real_escape_string($id).'"'.$addclause);
	$r = mysql_fetch_array($q);
	return $r;
}

function get_siswa($id=0){
	if(!$id) return;
	$addclause = '';
	if($edit) $addclause = ' AND `siswa_nisn`!="'.mysql_real_escape_string($edit).'"';
	$q = mysql_query('SELECT * FROM `siswa` WHERE `siswa_nisn`="'.mysql_real_escape_string($id).'"'.$addclause);
	$r = mysql_fetch_array($q);
	return $r;
}

function get_wm($id=0){
	if(!$id) return;
	$addclause = '';
	if($edit) $addclause = ' AND `wali_id`!="'.mysql_real_escape_string($edit).'"';
	$q = mysql_query('SELECT * FROM `wali_murid` WHERE `wali_id`="'.mysql_real_escape_string($id).'"'.$addclause);
	$r = mysql_fetch_array($q);
	return $r;
}




function get_bidang($id,$edit=0){
	if(!$id) return;
	$addclause = '';
	if($edit) $addclause = ' AND `bidang_kode`!="'.mysql_real_escape_string($edit).'"';
	$q = mysql_query('SELECT * FROM `bidang_study` WHERE `bidang_kode`="'.mysql_real_escape_string($id).'"'.$addclause);
	$r = mysql_fetch_array($q);
	return $r;
}



function post_error($msg){
	if(empty($msg)) return;
	$post_error = $error = '';
	foreach($msg as $m){
		$error .= '<li>'.$m.'</li>';
	}
	if($error){
		$post_error = '<div class="post_error">
			<div class="post_error_title">Terjadi kesalahan dalam pengisian form sebagai berikut:</div>
			<ul>'.$error.'</ul>
		</div>';
	}
	return $post_error;
}

function redirect($url){
	if(!headers_sent()){
		header('Location: '.$url);
	}else{
		echo '<script type="text/javascript">';
		echo 'window.location.href="'.$url.'";';
		echo '</script>';
		echo '<noscript>';
		echo '<meta http-equiv="refresh" content="0;url='.$url.'" />';
		echo '</noscript>';
	}
	exit;
}

function display_error($msg=''){
	global $content,$headtags,$head,$footer,$menu;
	require_once 'config.php';
	require_once 'main.php';
	if(!$msg){
		$msgs = '
		<img src="../picture/logo.png" />
		';
	}else{
		$msgs = '<div>'.$msg.'</div>';
	}
	die(
		'
	<html>
	<head>
		'.$head.'
		'.$headtags.'
	</head>
	<body>
		'.$menu.'
	<div class="container">	
			
		<div class="isa_error">
   			<i class="fa fa-times-circle"></i>
				'.$msg.'
			</i>
		</div>

	</div>

		'.$footer.'
			
	</body>
	</html>'
	);
}


function my_messages_to_user(){
	if(!$_COOKIE['my_messages_to_user']) return;
	$msg = htmlspecialchars($_COOKIE['my_messages_to_user']);
	$r = '<div class="header-messages">'.$msg.'</div>';
	setcookie('my_messages_to_user','',-3600);
	unset($_COOKIE['my_messages_to_user']);
	return $r;
}

function set_my_messages_to_user($msg){
	if(!$msg) return;
	$r = setcookie('my_messages_to_user',$msg);
	return $r;
}

function list_bulan(){
	return array(
		1  => 'Januari',
		2  => 'Februari',
		3  => 'Maret',
		4  => 'April',
		5  => 'Mei',
		6  => 'Juni',
		7  => 'Juli',
		8  => 'Agustus',
		9  => 'September',
		10 => 'Oktober',
		11 => 'November',
		12 => 'Desember'
	);
}


function format_tanggal($tgl){
	if(!$tgl) return;
	$b = list_bulan();
	$t = explode('-',$tgl);
	$d = (int)$t[2].' '.$b[(int)$t[1]].' '.(int)$t[0];
	return $d;
}

function my_get_image($id){
	// Get the file based on the $id and $name var.
	$q = mysql_query('SELECT siswa_nisn,siswa_foto FROM siswa WHERE siswa_nisn="'.mysql_real_escape_string($id).'"');
	$f = mysql_fetch_array($q);
	// There is no file found...? Do nothing
	if(empty($f)) return;
	$imagetype = $f['image'];
	$imgname = htmlspecialchars($f['siswa_nisn']);
	$imgf = 'photo/'.$imgname;
	$imgsize = @filesize($imgf);
	// Cache the image for performance reason
	header('Expires: '.gmdate('D, d M Y H:i:s', time() + 604800).'GMT');
	header('Cache-Control: max-age=604800');
	// Tell the browser that we want to display it on browser, not to download it.
	header('Content-disposition: inline; filename="'.$imgname.'"');
	header('Content-type: '.$imagetype);
	header('Content-length: '.$imgsize);
	header('Content-range: bytes=0-'.($imgsize-1).'/'.$imgsize);
	// Return the image.
	echo file_get_contents($imgf);
	exit;
}

function multipage($NumData,$DataPerPage,$url){
	$Paging = array();
	// Pastikan bahwa nilai minimum dari halaman adalah 1.
	$page = (int)$_GET['p'];
	if($page < 1) $page = 1;
	// Hitung berapa total jumlah halaman berdasaran jumlah data.
	$NumPage = ceil($NumData/$DataPerPage);
	// Tentukan query parameter utk URL
	$MultiPage = '';
	// Jika halaman yang diminta (atau user sedang berada pada halaman) lebih besar dari 1, tampilkan link Prev.
	if($page > 1){
		$PageURL = my_parse_url($url,$page-1);
		$MultiPage .= ' <a href="'.$PageURL.'">Prev</a> ';
	}
	// Looping berdasarkan jumlah halaman untuk menampilkan nomor halaman.
	for($i = 1; $i <= $NumPage; $i++){
		$PageURL = my_parse_url($url,$i);
		if($i == $page){
			$MultiPage .= ' <span class="page_selected">'.$i.'</span> ';
		}else{
			$MultiPage .= ' <a href="'.$PageURL.'">'.$i.'</a> ';
		}
	}
	// Jika nomor halaman saat ini lebih kecil dari total jumlah halaman, tampilkan link Next.
	if($page < $NumPage){
		$PageURL = my_parse_url($url,$page+1);
		$MultiPage .= ' <a href="'.$PageURL.'">Next</a> ';
	}
	// Hanya tampilkan multipage jika jumlah halaman lebih besar dari 1.
	if($NumPage > 1) $Paging['multipage'] = '<div class="multipage">'.$MultiPage.'</div>';
	$Paging['start_row'] = ($page - 1) * $DataPerPage ;
	return $Paging;
}

function my_parse_url($url,$page=0){
	if(strpos($url,'?') === FALSE){
		$url .= '?';
	}else{
		$url .= '&amp;';
	}
	$url .= 'p='.$page;
	return $url;
}


function dob($dob){
	if(!$dob) return '-';
	$bln = list_bulan();
	list($y,$m,$d) = explode('-',$dob);
	return (int)$d.' '.$bln[(int)$m].' '.$y;
}

function umur($dob){
	if(!$dob) return;
	list($y,$m,$d) = explode('-',$dob);
	$dy = date('Y') - $y;
	$dm = date('m') - $m;
	$dd = date('d') - $d;
	if($dd < 0 || $dm < 0) $dy--;
	return $dy;
}


function read_more($string){
// strip tags to avoid breaking any html
$string = strip_tags($string);

if (strlen($string) > 200) {

    // truncate string
    $stringCut = substr($string, 0, 150);

    // make sure it ends in a word so assassinate doesn't become ass...
    $string = substr($stringCut, 0, strrpos($stringCut, ' ')).'...'; 
}
return $string;
}

function gengan(){

	$variable = list_exp();
	if($dta['id_ex'] % 2 == 0)
	{
		$variable[$dta['id_ex']] = 'timeline-inverted animate-box';
	}else{
		$variable[$dta['id_ex']] = 'animate-box timeline-unverted';
	}
}

function list_exp(){
	return array(
		0  => 'timeline-inverted animate-box',
		1  => 'animate-box timeline-unverted'
	);
}

function getid($id=0){
	if(!$id) return;
	$addclause = '';
	if($edit) $addclause = ' AND `id`!="'.mysql_real_escape_string($edit).'"';
	$q = mysql_query('SELECT * FROM `profile` WHERE `id`="'.mysql_real_escape_string($id).'"'.$addclause);
	$r = mysql_fetch_array($q);
	return $r;
}

?>