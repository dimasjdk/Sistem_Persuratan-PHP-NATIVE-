<?php
	include 'koneksi.php';


$kec_id = $_POST['kec_id'];

$sql_desa = mysqli_query($koneksi, "SELECT * FROM desa where kec_id = $kec_id");

echo '<option></option>';
while ($row_desa = mysqli_fetch_array($sql_desa)) {
	echo '<option value="'.$row_desa['id'].'">'.$row_desa['nama_desa'].'</option>';
}


?>