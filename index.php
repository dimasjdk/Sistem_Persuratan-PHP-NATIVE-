<?php
	include 'koneksi.php';
?>

<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from www.ansonika.com/mavia/ by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 12 Feb 2019 03:43:11 GMT -->
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="MAVIA - Register, Reservation, Questionare, Reviews form wizard">
	<meta name="author" content="Ansonika">
	<title>Dinas Kebudayaan dan Pariwisata Kota Semarang</title>

	<!-- Favicons-->
	<link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
	<link rel="apple-touch-icon" type="image/x-icon" href="img/apple-touch-icon-57x57-precomposed.png">
	<link rel="apple-touch-icon" type="image/x-icon" sizes="72x72" href="img/apple-touch-icon-72x72-precomposed.png">
	<link rel="apple-touch-icon" type="image/x-icon" sizes="114x114" href="img/apple-touch-icon-114x114-precomposed.png">
	<link rel="apple-touch-icon" type="image/x-icon" sizes="144x144" href="img/apple-touch-icon-144x144-precomposed.png">

	<!-- GOOGLE WEB FONT -->
	<link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i" rel="stylesheet">

	<!-- BASE CSS -->
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/style.css" rel="stylesheet">
	<link href="css/responsive.css" rel="stylesheet">
	<link href="css/menu.css" rel="stylesheet">
	<link href="css/animate.min.css" rel="stylesheet">
	<link href="css/icon_fonts/css/all_icons_min.css" rel="stylesheet">
	<link href="css/skins/square/grey.css" rel="stylesheet">

	<!-- YOUR CUSTOM CSS -->
	<link href="css/custom.css" rel="stylesheet">

	
	<!-- Modernizr -->

</head>

<body>
	
	<div id="preloader">
		<div data-loader="circle-side"></div>
	</div><!-- /Preload -->
	
	

	<header>
		<div class="container-fluid">
		    <div class="row">
                <div class="col-9">
                    <div id="logo_home">
                        <img style="width: 30px; margin: 2px;" src="img/logo.png">
                    </div>
                </div>
                <div class="col-3">
                    <div id="social">
                        <ul>
                            <li><a href="https://www.facebook.com/disbudparsmg/"><i class="icon-facebook"></i></a></li>
                            <li><a href="https://twitter.com/disbudparkotsmg"><i class="icon-twitter"></i></a></li>
                            <li><a href="https://plus.google.com/101722873305306477299"><i class="icon-google"></i></a></li>
                        </ul>
                    </div>
                    <!-- /social -->
                </div>
            </div>
		</div>
		<!-- container -->
	</header>
	<!-- End Header -->

	<main>
		<div id="form_container">
			<div class="row">
				<div class="col-lg-5">
					<div id="left_form">
						<center><figure><img src="img/registration_bg.svg" alt=""></figure></center>
						<h2>Pendaftaran SKT</h2>
						<p>Daftarkan Sanggar Atau Kelompok Kesenian Anda Dengan Mengisi Formulir Pendaftaran Dengan Baik Dan Benar. <br><br><br><br><br><br>Terimakasih </p>
						<a href="#0" id="more_info" data-toggle="modal" data-target="#more-info"><i class="pe-7s-info"></i></a>
					</div>
				</div>
				<div class="col-lg-7">

					<div id="wizard_container">

						<!-- /top-wizard -->
						<form  method="POST" enctype="multipart/form-data">
							<input id="website" name="website" type="text" value="">
							<!-- Leave for security protection, read docs for details -->
							<div id="middle-wizard">

								<div id="step1" class="step">
									<h3 class="main_question"><strong>1/7</strong>Biodata Pendaftar</h3>
									<div class="row">
										<div class="col-md-12">
											<div class="form-group">
												<input type="text" name="nama" class="form-control" placeholder="Nama Lengkap">
											</div>
										</div>
										
									</div>
									<!-- /row -->

									<div class="row">
										<div class="col-md-6">
											<div class="form-group">
												<input type="text" name="temhir" class="form-control" placeholder="Tempat Lahir">
											</div>
										</div>
										
										<div class="col-md-6">
											<div class="form-group">
												<input type="date" name="ttl" class="form-control" placeholder="Tanggal Lahir">
											</div>
										</div>
									</div>

									<div class="row">
										<div class="col-md-12">
											<div class="form-group">
												<select name="agama" class="form-control">
													<option value="">Pilih Agama</option>
													<option value="Islam"> Islam</option>
													<option value="Kristen"> Kristen</option>
													<option value="Katolik"> Katolik</option>
													<option value="Hindu"> Hindu</option>
													<option value="Budha"> Budha</option>
												</select>
											</div>
										</div>							
									</div>

									<div class="row">
										<div class="col-md-12">
											<div class="form-group">
												<input type="text" name="pekerjaan" class="form-control" placeholder="Pekerjaan">
											</div>
										</div>
									</div>

									<div class="row">
										<div class="col-md-12">
											<div class="form-group">
												<input type="text" name="alamat" class="form-control" placeholder="Alamat">
											</div>
										</div>
									</div>

								</div>
								<!-- /step-->

								<div id="step2" class="step">
									<h3 class="main_question"><strong>2/7</strong>Dengan ini mengajukan permohonan agar diberikan Surat Keterangan Terdaftar (SKT) untuk : </h3>
									<div class="row">
										<div class="col-md-6">
											<div class="form-group">
												<input type="text" name="sanggar" class="form-control required" placeholder="Nama Sanggar / Kelompok Kesenian">
											</div>
										</div>

										<div class="col-md-6">
											<div class="form-group">
												<input type="text" name="pimpinan" class="form-control required" placeholder="Nama Pimpinan">
											</div>
										</div>
									</div>
									<!-- /row -->
									<div class="row">
										<div class="col-md-6">
											<div class="form-group">
											<select type="text" name="kec" id="kec" class="form-control required">
												<?php

												$kota = 3374;
												$kec  = $koneksi->query("SELECT id_kec, nama_kec FROM kecamatan WHERE id_kab='$kota' order by nama_kec");

												echo "<option>-- Pilih Kecamatan --</option>";
												while($k = $kec->fetch_assoc()){

													?>
													<option value="<?php echo $k['id_kec']; ?>"> <?php echo $k['nama_kec']; ?></option>
													<?php
												}
												?>
												
											</select>
											</div>
										</div>
										
										

										<div class="col-md-6">
											<div class="form-group">
													<select type="text" name="kel" id="kel" class="form-control required">
														<option>--Pilih Kelurahan--</option>
													</select>
												</div>
											</div>



									</div>

									<div class="row">
										<div class="col-md-6">
											<div class="form-group">
												<select type="text" name="jenis_kel" class="form-control required">
													<option value="">Jenis Kesenian</option>
													<option value="Seni Tari">Seni Tari</option>
													<option value="Seni Rupa">Seni Rupa</option>
													<option value="Seni Musik">Seni Musik</option>
													<option value="Seni Teater">Seni Teater</option>
													<option value="Seni Sastra">Seni Sastra</option>
													<option value="Seni Lainnya">Seni Lainnya</option>
												</select>
											</div>
										</div>

										<div class="col-md-6">
											<div class="form-group">
												<input type="date" name="tgl_berdiri" class="form-control required" placeholder="Tanggal Berdiri">
											</div>
										</div>

										<div class="col-md-6">
											<div class="form-group">
												<input type="text" name="jml_pengurus" class="form-control required" placeholder="Jumlah Pengurus">
											</div>
										</div>

										<div class="col-md-6">
											<div class="form-group">
												<input type="text" name="jml_anggota" class="form-control required" placeholder="Jumlah Anggota">
											</div>
										</div>

										<div class="col-md-12">
											<div class="form-group">
												<input type="text" name="telphone" class="form-control required" placeholder="Nomor Telephone">
											</div>
										</div>
									</div>
								</div>
								<!-- /step-->

								<div id="step3" class="step">
									<h3 class="main_question"><strong>3/7</strong>Lampiran Pimpinan - Ketua Sanggar </h3>
									<div class="row">
										<div class="col-md-12">
											<div class="form-group">
												
											
											<p><strong>1.</strong>Biodata Ketua (Hasil Scan)</p>
											<input type="file" name="l" />

											</div>
										</div>
					
										<div class="col-md-12">
											<div class="form-group">
												
											
											<p><strong>2.</strong>Pas Photo (Ketua)</p>
											<input type="file" name="l1" />

											</div>
										</div>

										<div class="col-md-12">
											<div class="form-group">
												
											
											<p><strong>3.</strong>Foto KTP (Ketua)</p>
											<input type="file" name="l2" value="upload gambar"/>

											</div>
										</div>


									</div>
									<!-- /row -->
									
								</div>
								<!-- /step-->

								<div id="step4" class="step">
									<h3 class="main_question"><strong>4/7</strong>Lampiran Pimpinan - Sekretaris Sanggar </h3>
									<div class="row">
										<div class="col-md-12">
											<div class="form-group">
												
											<p><strong>1.</strong>Biodata Sekretaris (Hasil Scan)</p>
											<input type="file" name="m" value="upload gambar"/>

											</div>
										</div>
					
										<div class="col-md-12">
											<div class="form-group">

											<p><strong>2.</strong>Pas Photo (Sekretaris)</p>
											<input type="file" name="m1" value="upload gambar"/>

											</div>
										</div>

										<div class="col-md-12">
											<div class="form-group">
												
											<p><strong>3.</strong>Foto KTP (Sekretaris)</p>
											<input type="file" name="m2" value="upload gambar"/>

											</div>
										</div>


									</div>
									<!-- /row -->
									
								</div>
								<!-- /step-->

								
								<div id="step5" class="step">
									<h3 class="main_question"><strong>5/7</strong>Lampiran Pimpinan - Bendahara Sanggar </h3>
									<div class="row">
										<div class="col-md-12">
											<div class="form-group">

											<p><strong>1.</strong>Biodata Bendahara (Hasil Scan)</p>
											<input type="file" name="n" value="upload gambar"/>

											</div>
										</div>
					
										<div class="col-md-12">
											<div class="form-group">

											<p><strong>2.</strong>Pas Photo (Bendahara)</p>
											<input type="file" name="n1" value="upload gambar"/>

											</div>
										</div>

										<div class="col-md-12">
											<div class="form-group">
											
											<p><strong>3.</strong>Foto KTP (Bendahara)</p>
											<input type="file" name="n2" value="upload gambar"/>

											</div>
										</div>


									</div>
									<!-- /row -->
									
								</div>
								<!-- /step-->

								<div id="step6" class="step">
									<h3 class="main_question"><strong>6/7</strong>Lampiran Pelengkap Syarat Diterbitkannya SKT (1) </h3>
									<div class="row">
										<div class="col-md-12">
											<div class="form-group">
											
											<p><strong>1.</strong>Susunan Pengurus (Hasil Scan)</p>
											<input type="file" name="o" value="upload gambar"/>

											</div>
										</div>
					
										<div class="col-md-12">
											<div class="form-group">
										
											<p><strong>2.</strong>Jadwal & Tempat latihan rutin (Hasil Scan)</p>
											<input type="file" name="p" value="upload gambar"/>

											</div>
										</div>

										<div class="col-md-12">
											<div class="form-group">
										
											<p><strong>3.</strong>Photo Papan Nama Kelompok Kesenian</p>
											<input type="file" name="q" value="upload gambar"/>

											</div>
										</div>


									</div>
									<!-- /row -->
									
								</div>
								<!-- /step-->

								<div id="step7" class="submit step">
									<h3 class="main_question"><strong>7/7</strong>Lampiran Pelengkap Syarat Diterbitkannya SKT (2)</h3>
									

									<div class="row">
										<div class="col-md-12">
											<div class="form-group">
										
											<p><strong>1.</strong>Surat Keterangan Domisili</p>
											<input type="file" name="r" value="upload gambar"/>

											</div>
										</div>
					
										<div class="col-md-12">
											<div class="form-group">
										
											<p><strong>2.</strong>Foto Kegiatan (1)</p>
											<input type="file" name="s1" value="upload gambar"/>

											</div>
										</div>

										<div class="col-md-12">
											<div class="form-group">
										
											<p><strong>3.</strong>Foto Kegiatan (2)</p>
											<input type="file" name="s2" value="upload gambar"/>


											</div>
										</div>



									<div class="form-group terms">
										<input name="terms" type="checkbox" class="icheck required" value="yes">
										<label>Pastikan Semua Di Isi Dengan Tepat <a href="#" data-toggle="modal" data-target="#"></a> !!!</label>
									</div>
								</div>
								<!-- /step-->
							</div>
							<BR><BR>
							<!-- /middle-wizard -->
							<div id="bottom-wizard">
								<button type="button" name="backward" class="backward">Kembali </button>
								<button type="button" name="forward" class="forward">Lanjutkan</button>
								<button type="submit" name="process" class="submit">Kirim</button>
							</div>
							<!-- /bottom-wizard -->
						</form>
					</div>
					<!-- /Wizard container -->
				</div>
			</div><!-- /Row -->
		</div><!-- /Form_container -->
	</main>
	
	<footer id="home" class="clearfix">
		<p>© Kementrian Kebudayaan Dan Pariwisata Kota Semarang</p>
		
	</footer>
	<!-- end footer-->
	


	

	<!-- Modal info -->
	<div class="modal fade" id="more-info" tabindex="-1" role="dialog" aria-labelledby="more-infoLabel" aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered">
			<div class="modal-content">
				<div class="modal-header">
					<h4 class="modal-title" id="more-infoLabel">Mengapa Harus Mendaftarkan SKT ???</h4>
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				</div>
				<div class="modal-body">
					<p>Agar Sanggar ataupun Kelompok Kesenian <strong>terdaftar sebagai Organisasi Kemasyarakatan </strong> dan dalam melaksanakan kegiaannya agar tidak bertentanan dengan ketentuan perundang undangan yang berlaku. </p>
					<p>Memperhatikan perundang undangan tersbut telah tertera dalam <strong>Undang Undang nomor 17 tahun 2013 </strong> tentang Organinasi Kemasyarakatan</p>
					
				</div>
				<div class="modal-footer">
					<button type="button" class="btn_1" data-dismiss="modal">Close</button>
				</div>
			</div>
			<!-- /.modal-content -->
		</div>
		<!-- /.modal-dialog -->
	</div>
	<!-- /.modal -->

	<!-- SCRIPTS -->
	<!-- Jquery-->
	<script src="js/jquery-3.2.1.min.js"></script>
	<!-- Common script -->
	<script src="js/common_scripts_min.js"></script>
	<!-- Wizard script -->
	<script src="js/registration_wizard_func.js"></script>
	<!-- Menu script -->
	<script src="js/velocity.min.js"></script>
	<script src="js/main.js"></script>
	<!-- Theme script -->
	<script src="js/functions.js"></script>

</body>
</html>

<?php
//mulai proses tambah data

//cek dahulu, jika tombol tambah di klik
if(isset($_POST['process'])){
	
	//inlcude atau memasukkan file koneksi ke database
	include('koneksi.php');
	
	//jika tombol tambah benar di klik maka lanjut prosesnya
	// (nama didatabase) --- (nama diform)
	$nama		= $_POST['nama'];
	$temhir		= $_POST['temhir'];	
	$ttl		= $_POST['ttl'];	
	$agama		= $_POST['agama'];	
	$pekerjaan	= $_POST['pekerjaan'];
	$alamat		= $_POST['alamat'];

	$sanggar 	= $_POST['sanggar'];
	$pimpinan 	= $_POST['pimpinan'];
	$kecamatan  = $_POST['kec'];
	$kelurahan = $_POST['kel'];
	$jenis 		= $_POST['jenis_kel'];
	$jml_pengurus = $_POST['jml_pengurus'];
	$jml_anggota = $_POST['jml_anggota'];
	$berdiri 	= $_POST['tgl_berdiri'];	
	$telp 		= $_POST['telphone'];

	$bio_ket    = $_FILES['l']['name'];
	$tmp_bioket	= $_FILES['l']['tmp_name'];
	$foto_ket   = $_FILES['l1']['name'];
	$tmp_fotoket= $_FILES['l1']['tmp_name'];
	$ktp_ket	= $_FILES['l2']['name'];
	$tmp_ktpket	= $_FILES['l2']['tmp_name'];

	$bio_sek    = $_FILES['m']['name'];
	$tmp_biosek	= $_FILES['m']['tmp_name'];
	$foto_sek   = $_FILES['m1']['name'];
	$tmp_fotosek= $_FILES['m1']['tmp_name'];
	$ktp_sek	= $_FILES['m2']['name'];
	$tmp_ktpsek	= $_FILES['m2']['tmp_name'];

	$bio_ben    = $_FILES['n']['name'];
	$tmp_bioben	= $_FILES['n']['tmp_name'];
	$foto_ben   = $_FILES['n1']['name'];
	$tmp_fotoben= $_FILES['n1']['tmp_name'];
	$ktp_ben	= $_FILES['n2']['name'];
	$tmp_ktpben	= $_FILES['n2']['tmp_name'];

	$susunan 	= $_FILES['o']['name'];
	$tmp_susunan= $_FILES['o']['tmp_name'];
	$jadwal 	= $_FILES['p']['name'];
	$tmp_jadwal = $_FILES['p']['tmp_name'];
	$papan_nama = $_FILES['q']['name'];
	$tmp_papan  = $_FILES['q']['tmp_name'];
	$domisili 	= $_FILES['r']['name'];
	$tmp_domisili= $_FILES['r']['tmp_name'];
	$kegiatan1 	= $_FILES['s1']['name'];
	$tmp_kegiatan1= $_FILES['s1']['tmp_name'];
	$kegiatan2 	= $_FILES['s2']['name'];
	$tmp_kegiatan2= $_FILES['s2']['tmp_name'];

	$tanggal	= date("d-m-Y H:i:s");
	


// Set path folder tempat menyimpan fotonya
$path1 = "admin/img_skt/".$bio_ket;
$path2 = "admin/img_skt/".$foto_ket;
$path3 = "admin/img_skt/".$ktp_ket;
$path4 = "admin/img_skt/".$bio_sek;
$path5 = "admin/img_skt/".$foto_sek;
$path6 = "admin/img_skt/".$ktp_sek;
$path7 = "admin/img_skt/".$bio_ben;
$path8 = "admin/img_skt/".$foto_ben;
$path9 = "admin/img_skt/".$ktp_ben;
$path10 = "admin/img_skt/".$susunan;
$path11 = "admin/img_skt/".$jadwal;
$path12 = "admin/img_skt/".$papan_nama;
$path13 = "admin/img_skt/".$domisili;
$path14 = "admin/img_skt/".$kegiatan1;
$path15 = "admin/img_skt/".$kegiatan2;



if (move_uploaded_file($tmp_bioket, $path1)) {
	move_uploaded_file($tmp_fotoket, $path2);
	move_uploaded_file($tmp_ktpket, $path3);
	move_uploaded_file($tmp_biosek, $path4);
	move_uploaded_file($tmp_fotosek, $path5);
	move_uploaded_file($tmp_ktpsek, $path6);
	move_uploaded_file($tmp_bioben, $path7);
	move_uploaded_file($tmp_fotoben, $path8);
	move_uploaded_file($tmp_ktpben, $path9);
	move_uploaded_file($tmp_susunan, $path10);
	move_uploaded_file($tmp_jadwal, $path11);
	move_uploaded_file($tmp_papan, $path12);
	move_uploaded_file($tmp_domisili, $path13);
	move_uploaded_file($tmp_kegiatan1, $path14);
	move_uploaded_file($tmp_kegiatan2, $path15);

	$input = mysqli_query($koneksi, "INSERT INTO skt (nama, temhir, ttl, agama, pekerjaan, alamat, sanggar, pimpinan, kecamatan, kelurahan, jenis, jml_pengurus, jml_anggota, berdiri, telp, bio_ket, foto_ket, ktp_ket, bio_sek, foto_sek, ktp_sek, bio_ben, foto_ben, ktp_ben, susunan, jadwal, papan_nama, domisili, kegiatan1, kegiatan2, tanggal) VALUES('$nama', '$temhir', '$ttl', '$agama', '$pekerjaan', '$alamat', '$sanggar', '$pimpinan', '$kecamatan', '$kelurahan', '$jenis', '$jml_pengurus', '$jml_anggota', '$berdiri', '$telp', '$bio_ket', '$foto_ket', '$ktp_ket', '$bio_sek', '$foto_sek', '$ktp_sek', '$bio_ben', '$foto_ben', '$ktp_ben', '$susunan', '$jadwal', '$papan_nama', '$domisili', '$kegiatan1', '$kegiatan2', '$tanggal')");
	if($input){
		
		?>
			<script type="text/javascript">
				alert("Selamat Pengisian SKT Anda Berhasil!");
				document.location = "/pariwisata";
			</script>
		<?php
		
			}else{

				?>
					<!-- <script type="text/javascript">
						alert("Mohon Maaf Data Anda Ada yang Salah! Mohon Masukkan Ulang Sesuai Data yang Benar!");
					</script> -->
				<?php
				var_dump($input);
				
			}

		} else {
			?>
					<script type="text/javascript">
						alert("Gagal upload foto!!");
					</script>
				<?php
		}


}

?>


<script type="text/javascript">

	$(document).ready(function(){ 

      $('#kec').change(function(){
 
      //Mengambil value dari option select provinsi kemudian parameternya dikirim menggunakan ajax
      var kecamatan = $('#kec').val();
 
      $.ajax({
        type : 'GET',
        url : 'http://localhost/pariwisata/database/get_kelurahan.php',
        data :  'kec=' + kecamatan,
        success: function (data) {
 
              //jika data berhasil didapatkan, tampilkan ke dalam option select kabupaten
              $("#kel").html(data);
            }
 
          });
 
    });
 
 
 
 
 
    });
</script>