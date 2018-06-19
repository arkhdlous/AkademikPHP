<?php
include "koneksi.php";

//akhir koneksi
#ambil data di tabel dan masukkan ke array
$query = "SELECT * FROM surat_masuk ORDER BY No_Surat";
$sql = mysql_query ($query);
$data = array();
while ($row = mysql_fetch_assoc($sql)) {
array_push($data, $row);
}
#setting judul laporan dan header tabel
$judul0 = " ";
$judul = "Laporan Surat Masuk";
$judul2 = "Periode : 01 April 2012 s/d 15 April 2012";
$judul3 = "Tanggal Cetak : 16-04-2012";
$header = array(
array("label"=>"No Surat", "length"=>23, "align"=>"L"),
array("label"=>"Kode Bagian", "length"=>23, "align"=>"L"),
array("label"=>"Tujuan", "length"=>35, "align"=>"L"),
array("label"=>"Tanggal Surat", "length"=>35, "align"=>"L"),
array("label"=>"Tanggal Surat Diterima", "length"=>35, "align"=>"L"),
array("label"=>"Isi Surat", "length"=>60, "align"=>"L"),
array("label"=>"Keterangan", "length"=>50, "align"=>"L"),
);
#sertakan library FPDF dan bentuk objek
include_once ("pdf/fpdf.php");
$pdf = new FPDF('L','mm','A4');
$pdf->AddPage('','');
#tampilkan judul laporan
$pdf->SetFont('Arial','B','15');
$pdf->Cell(0,30, $judul0, '0', 1, 'C');
$pdf->Cell(0,20, $judul, '0', 1, 'C');
$pdf->Cell(0,10, $judul2, '0', 1, ’R’);
$pdf->Cell(0,10, $judul3, '0', 1, ’L’);
#buat header tabel
$pdf->SetFont('Arial','','7');
$pdf->SetFillColor('silver',0,0);
$pdf->SetTextColor(255);
$pdf->SetDrawColor('silver',0,0);
foreach ($header as $kolom) {
$pdf->Cell($kolom['length'], 5, $kolom['label'], 1, '0',
$kolom['align'], true);
}
$pdf->Ln();
#tampilkan data tabelnya
$pdf->SetFillColor(224,235,255);
$pdf->SetTextColor(0);
$pdf->SetFont('');
$fill=false;
foreach ($data as $baris) {
$i = 0;
foreach ($baris as $cell) {
$pdf->Cell($header[$i]['length'], 5, $cell, 1, '0',
$kolom['align'], $fill);
$i++;
}
$fill = !$fill;
$pdf->Ln();
}
#output file PDF
$pdf->Output();
?>