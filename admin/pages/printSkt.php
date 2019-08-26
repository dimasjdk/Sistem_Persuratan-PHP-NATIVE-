

<?php
require '../../vendor/autoload.php';
require '../../koneksi.php';

$sql = "SELECT * from skt WHERE id_no='$_GET[id]'";
$result = mysqli_query($koneksi,$sql);

$pecah = mysqli_fetch_array($result);

/**
 * 
 */
class JDK extends FPDF
{
	
	function Header()
	{
    // Arial bold 15
    $this->SetFont('Arial','B',15);
    // Move to the right
    $this->Cell(80);
    // Title
    $this->Cell(30,10,'Data Pengaju SKT (Surat Keterangan Terdaftar)',0,0,'C');

    $this->Ln(20);
	}
	// function Content()
	// {
	// 	<?php echo $pecah ['']
	// }

	function Footer()
	{
    // Position at 1.5 cm from bottom
		$this->SetY(-15);
    // Arial italic 8
		$this->SetFont('Arial','I',8);
    // Page number
		$this->Cell(0,10,'Dinas Kebudayaan Dan Pariwisata Kota Semarang ',0,0,'C');
	}
}

$pdf = new JDK();
$pdf->AddPage();
$pdf->SetFont('Times','',12);
//$pdf->Cell(80);
$pdf->Cell(90,10, "Nama               : $pecah[nama]");
$pdf->Ln(10);
$pdf->Cell(80,10, "Tempat Lahir   : $pecah[temhir]");
$pdf->Ln(10);
$pdf->Cell(80,10, "Tanggal Lahir  : $pecah[ttl]");
$pdf->Ln(10);
$pdf->Cell(80,10, "Agama             : $pecah[agama]");
$pdf->Ln(10);
$pdf->Cell(80,10, "Pekerjaan         : $pecah[pekerjaan]");
$pdf->Ln(10);
$pdf->Cell(80,10, "Alamat            : $pecah[alamat]");
$pdf->Ln(20);
$pdf->Cell(80,10, "Nama Sanggar/Kesenian  : $pecah[sanggar]");
$pdf->Ln(10);
$pdf->Cell(80,10, "Jenis Kegiatan      : $pecah[jenis]");
$pdf->Ln(10);
$pdf->Cell(80,10, "Jumlah Pengurus  : $pecah[jml_pengurus]");
$pdf->Ln(10);
$pdf->Cell(80,10, "Jumlah Anggota   : $pecah[jml_anggota]");
$pdf->Ln(10);
$pdf->Cell(80,10, "Tanggal Berdiri    : $pecah[berdiri]");
$pdf->Ln(10);
$pdf->Cell(80,10, "Nama Pimpinan    : $pecah[pimpinan]");
$pdf->Ln(10);
$pdf->Cell(80,10, "Nomor Telephone : $pecah[telp]");
$pdf->Output();
?>