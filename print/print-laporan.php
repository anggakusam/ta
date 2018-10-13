<?php
//============================================================+
// File name   : example_003.php
// Begin       : 2008-03-04
// Last Update : 2013-05-14
//
// Description : Example 003 for TCPDF class
//               Custom Header and Footer
//
// Author: Nicola Asuni
//
// (c) Copyright:
//               Nicola Asuni
//               Tecnick.com LTD
//               www.tecnick.com
//               info@tecnick.com
//============================================================+

/**
 * Creates an example PDF TEST document using TCPDF
 * @package com.tecnick.tcpdf
 * @abstract TCPDF - Example: Custom Header and Footer
 * @author Nicola Asuni
 * @since 2008-03-04
 */

// Include the main TCPDF library (search for installation path).
require_once('tcpdf_include.php');


// Extend the TCPDF class to create custom Header and Footer
class MYPDF extends TCPDF {

	//Page header
	public function Header() {
		// Logo
		$this->SetFont('helvetica', 'B', 20);
		// Title
		$this->Cell(0, 15, ' Rumah Bersalin Bidan Iyam Siti Purnama, Amd. Keb.', 0, false, 'C', 0, '', 0, false, 'M', 'M');
	}

	// Page footer
	public function Footer() {
		// Position at 15 mm from bottom
		$this->SetY(-15);
		// Set font
		$this->SetFont('helvetica', 'I', 8);
		// Page number
		$this->Cell(0, 10, 'Page '.$this->getAliasNumPage().'/'.$this->getAliasNbPages(), 0, false, 'C', 0, '', 0, false, 'T', 'M');
	}
}

// create new PDF document
$pdf = new MYPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);

// set document information
$pdf->SetCreator(PDF_CREATOR);
$pdf->SetAuthor('Nicola Asuni');
$pdf->SetTitle('TCPDF Example 003');
$pdf->SetSubject('TCPDF Tutorial');
$pdf->SetKeywords('TCPDF, PDF, example, test, guide');

// set default header data
$pdf->SetHeaderData(PDF_HEADER_LOGO, PDF_HEADER_LOGO_WIDTH, PDF_HEADER_TITLE, PDF_HEADER_STRING);

// set header and footer fonts
$pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));
$pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));

// set default monospaced font
$pdf->SetDefaultMonospacedFont(PDF_FONT_MONOSPACED);

// set margins
$pdf->SetMargins(PDF_MARGIN_LEFT, PDF_MARGIN_TOP, PDF_MARGIN_RIGHT);
$pdf->SetHeaderMargin(PDF_MARGIN_HEADER);
$pdf->SetFooterMargin(PDF_MARGIN_FOOTER);

// set auto page breaks
$pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);

// set image scale factor
$pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);

// set some language-dependent strings (optional)
if (@file_exists(dirname(__FILE__).'/lang/eng.php')) {
	require_once(dirname(__FILE__).'/lang/eng.php');
	$pdf->setLanguageArray($l);
}

// ---------------------------------------------------------

// set font
$pdf->SetFont('times', '', 12);

// add a page
$pdf->AddPage();


include "../koneksi.php";


// ISI PDF

$tableHead_kunjungan = "
	<h2>Data Kunjungan Umum</h2>
      <table border='1'>
        <thead>
          <tr>
            <th width='20px'>No</th>
            <th>Tanggal Kunjungan</th>
            <th>Nama</th>
            <th>keluhan</th>
            <th>Terapi</th>
            <th>Keterangan</th>
          </tr>
        </thead>
		<tbody>

";


$tableIsi_kunjungan = "

";

$tahun = date("Y");
$bulan = date("m");

$sql = "select * from kunjungan_umum WHERE YEAR(tgl_kunjungan) = $tahun AND MONTH(tgl_kunjungan) = $bulan";
$query = mysqli_query($con, $sql);
$nomer = 1;
if ($query) {

	while ($data = mysqli_fetch_array($query)) {
	
	$tableIsi_kunjungan .= "
	
			<tr>
				<td>". $nomer ."</td>
				<td>". $data['tgl_kunjungan'] ."</td>
				<td>". $data['nama'] ."</td>
				<td>". $data['keluhan'] ."</td>
				<td>". $data['terapi'] ."</td>
				<td>". $data['keterangan'] ."</td>
			</tr>
	";
	$nomer++;
	}

}
else{
	$tableIsi_kunjungan = "<tr><td colspan='7'>eror nich datanya ga muncul</td></tr>";
}


$tableFoot_kunjungan = "
	
		

		</tbody>
		</table>
";

$data_kunjungan = $tableHead_kunjungan ."". $tableIsi_kunjungan ."". $tableFoot_kunjungan;

// ISI PDF SAMPE SINI



// ISI PDF

$tableHead_bersalin = "
	<h2>Data Bersalin</h2>
      <table border='1'>
        <thead>
          <tr>
            <th width='20px'>No</th>
            <th>Tanggal Kunjungan</th>
            <th>Nama</th>
			<th>Diagnosa</th>
			<th>Tanggal Lahir </th>
            <th>Jenis Kelamin</th>
            <th>Berat Badan</th>
            <th>Panjang Badan</th>
          </tr>
        </thead>
		<tbody>

";


$tableIsi_bersalin = "

";


$tahun = date("Y");
$bulan = date("m");

$sql = "select * from persalinan WHERE YEAR(tgl_kunjungan) = $tahun AND MONTH(tgl_kunjungan) = $bulan";
$query = mysqli_query($con, $sql);
$nomer = 1;
if ($query) {

	while ($data = mysqli_fetch_array($query)) {
	
	$tableIsi_bersalin .= "
	
			<tr>
				<td>". $nomer ."</td>
				<td>". $data['tgl_kunjungan'] ."</td>
				<td>". $data['nama'] ."</td>
				<td>". $data['diagnosa'] ."</td>
				<td>". $data['jam_lahir'] ."</td>
				<td>". $data['jenis_kelamin'] ."</td>
				<td>". $data['berat_badan'] ."</td>
				<td>". $data['panjang_badan'] ."</td>
			</tr>
	";
	$nomer++;
	}

}
else{
	$tableIsi_bersalin = "<tr><td colspan='7'>eror nich datanya ga muncul</td></tr>";
}


$tableFoot_bersalin = "
	
		

		</tbody>
		</table>
";

$data_bersalin = $tableHead_bersalin ."". $tableIsi_bersalin ."". $tableFoot_bersalin;

// ISI PDF SAMPE SINI


// ISI PDF

$tableHead_imunisasi = "
	<h2>Data Imunisasi</h2>
      <table border='1'>
        <thead>
          <tr>
            <th width='20px'>No</th>
            <th>Tanggal Kunjungan</th>
            <th>Nama</th>
			<th>Nama Bayi</th>
			<th>Berat Badan </th>
            <th>Lingkar Kepala</th>
            <th>Jenis Imunisasi</th>
            <th>Tanggal Lahir Bayi</th>
          </tr>
        </thead>
		<tbody>

";


$tableIsi_imunisasi = "

";


$tahun = date("Y");
$bulan = date("m");

$sql = "select * from imunisasi WHERE YEAR(tgl_kunjungan) = $tahun AND MONTH(tgl_kunjungan) = $bulan";
$query = mysqli_query($con, $sql);
$nomer = 1;
if ($query) {

	while ($data = mysqli_fetch_array($query)) {
	
	$tableIsi_imunisasi .= "
	
			<tr>
				<td>". $nomer ."</td>
				<td>". $data['tgl_kunjungan'] ."</td>
				<td>". $data['nama'] ."</td>
				<td>". $data['nama_bayi'] ."</td>
				<td>". $data['berat_badan_bayi'] ."</td>
				<td>". $data['lingkar_kepala_bayi'] ."</td>
				<td>". $data['jenis_imunisasi'] ."</td>
				<td>". $data['tgl_lahir_bayi'] ."</td>
			</tr>
	";
	$nomer++;
	}

}
else{
	$tableIsi_imunisasi = "<tr><td colspan='7'>eror nich datanya ga muncul</td></tr>";
}


$tableFoot_imunisasi = "
	
		

		</tbody>
		</table>
";

$data_imunisasi = $tableHead_imunisasi ."". $tableIsi_imunisasi ."". $tableFoot_imunisasi;

// ISI PDF SAMPE SINI




// ISI PDF

$tableHead_bersalin = "
	<h2>Data Bersalin</h2>
      <table border='1'>
        <thead>
          <tr>
            <th width='20px'>No</th>
            <th>Tanggal Kunjungan</th>
            <th>Nama</th>
			<th>Diagnosa</th>
			<th>Tanggal Lahir </th>
            <th>Jenis Kelamin</th>
            <th>Berat Badan</th>
            <th>Panjang Badan</th>
          </tr>
        </thead>
		<tbody>

";


$tableIsi_bersalin = "

";


$tahun = date("Y");
$bulan = date("m");

$sql = "select * from persalinan WHERE YEAR(tgl_kunjungan) = $tahun AND MONTH(tgl_kunjungan) = $bulan";
$query = mysqli_query($con, $sql);
$nomer = 1;
if ($query) {

	while ($data = mysqli_fetch_array($query)) {
	
	$tableIsi_bersalin .= "
	
			<tr>
				<td>". $nomer ."</td>
				<td>". $data['tgl_kunjungan'] ."</td>
				<td>". $data['nama'] ."</td>
				<td>". $data['diagnosa'] ."</td>
				<td>". $data['jam_lahir'] ."</td>
				<td>". $data['jenis_kelamin'] ."</td>
				<td>". $data['berat_badan'] ."</td>
				<td>". $data['panjang_badan'] ."</td>
			</tr>
	";
	$nomer++;
	}

}
else{
	$tableIsi_bersalin = "<tr><td colspan='7'>eror nich datanya ga muncul</td></tr>";
}


$tableFoot_bersalin = "
	
		

		</tbody>
		</table>
";

$data_bersalin = $tableHead_bersalin ."". $tableIsi_bersalin ."". $tableFoot_bersalin;

// ISI PDF SAMPE SINI


// ISI PDF

$tableHead_kb = "
	<h2>Data KB</h2>
      <table border='1'>
        <thead>
          <tr>
            <th width='20px'>No</th>
            <th>Tanggal Kunjungan</th>
            <th>Nama</th>
			<th>Berat Badan</th>
			<th>Tekanan Darah </th>
			<th>Metode KB</th>
          </tr>
        </thead>
		<tbody>

";


$tableIsi_kb = "

";


$tahun = date("Y");
$bulan = date("m");

$sql = "select * from kb WHERE YEAR(tgl_kunjungan) = $tahun AND MONTH(tgl_kunjungan) = $bulan";
$query = mysqli_query($con, $sql);
$nomer = 1;
if ($query) {

	while ($data = mysqli_fetch_array($query)) {
	
	$tableIsi_kb .= "
	
			<tr>
				<td>". $nomer ."</td>
				<td>". $data['tgl_kunjungan'] ."</td>
				<td>". $data['nama'] ."</td>
				<td>". $data['berat_badan'] ."</td>
				<td>". $data['tekanan_darah'] ."</td>
				<td>". $data['metode_kb'] ."</td>
			</tr>
	";
	$nomer++;
	}

}
else{
	$tableIsi_kb = "<tr><td colspan='7'>eror nich datanya ga muncul</td></tr>";
}


$tableFoot_kb = "
	
		

		</tbody>
		</table>
";

$data_kb = $tableHead_kb ."". $tableIsi_kb ."". $tableFoot_kb;

// ISI PDF SAMPE SINI


// ISI PDF

$tableHead_antenatal = "
	<h2>Data Antenatal</h2>
      <table border='1'>
        <thead>
          <tr>
            <th width='20px'>No</th>
            <th>Tanggal Kunjungan</th>
            <th>Nama</th>
			<th>Diagnosa</th>
			<th>Berat Badan</th>
			<th>Tekanan Darah</th>
			<th>Taksiran Persalinan</th>
			<th>Tindakan</th>
			<th>Obat</th>
          </tr>
        </thead>
		<tbody>

";


$tableIsi_antenatal = "

";


$tahun = date("Y");
$bulan = date("m");

$sql = "select * from antenatal_care WHERE YEAR(tgl_kunjungan) = $tahun AND MONTH(tgl_kunjungan) = $bulan";
$query = mysqli_query($con, $sql);
$nomer = 1;
if ($query) {

	while ($data = mysqli_fetch_array($query)) {
	
	$tableIsi_antenatal .= "
	
			<tr>
				<td>". $nomer ."</td>
				<td>". $data['tgl_kunjungan'] ."</td>
				<td>". $data['nama'] ."</td>
				<td>". $data['diagnosa'] ."</td>
				<td>". $data['berat_badan'] ."</td>
				<td>". $data['tekanan_darah'] ."</td>
				<td>". $data['taksiran_persalinan'] ."</td>
				<td>". $data['tindakan'] ."</td>
				<td>". $data['obat'] ."</td>
			</tr>
	";
	$nomer++;
	}

}
else{
	$tableIsi_antenatal = "<tr><td colspan='7'>eror nich datanya ga muncul</td></tr>";
}


$tableFoot_antenatal = "
	
		

		</tbody>
		</table>
";

$data_antenatal = $tableHead_antenatal ."". $tableIsi_antenatal ."". $tableFoot_antenatal;

// ISI PDF SAMPE SINI

$html = $data_kunjungan . $data_bersalin . $data_imunisasi . $data_kb . $data_antenatal;
// output the HTML content
$pdf->writeHTML($html, true, false, true, false, '');

// ---------------------------------------------------------

//Close and output PDF document
$pdf->Output('example_003.pdf', 'I');

//============================================================+
// END OF FILE
//============================================================+
