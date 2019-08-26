<?php
//echo $_GET['id'];
$sql = $koneksi->query("SELECT * FROM skt WHERE id_no='$_GET[id]'");
$data = $sql->fetch_assoc();

//echo "<pre>";
//print_r($pecah);
//echo "</pre>";

?>

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Begin Page Content -->
        <div class="container-fluid">

<form method="post" action="">
<div class="content">
    <div class="animated fadeIn">
        <div class="row">
            <strong class="card-title">1. Biodata Pengisi</strong>
        </div>

        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-body">
                    <div class="row">
                        <div class="col-lg-8">
                                <div class="form-group">
                                    <tr>
                                        <label>Nama :</label>
                                        <td>
                                            <input type="text" name="nama" class="form-control" value="<?php echo $data['nama']; ?>">
                                        </td>
                                    </tr>
                                    
                                    </div>
                                    <div class="form-group">
                                    <tr>
                                        <label>Tempat Lahir :</label>
                                        <td>
                                            <input type="text" name="temhir" class="form-control" value="<?php echo $data['temhir']; ?>">
                                        </td>
                                    </tr>
                                    
                                    </div>
                                    <div class="form-group">
                                        <tr>
                                            <label>Tanggal lahir :</label>
                                            <td>
                                                <input type="date" name="ttl" class="form-control" value="<?php echo $data['ttl']; ?>">
                                            </td>
                                        </tr>                                        
                                        </div>
                                        <div class="form-group">
                                            <tr>
                                                <label>Agama :</label>
                                                <td>
                                                    <select name="agama" class="form-control" value="<?php echo $data['agama']; ?>" >
                                                        <option>Agama</option>
                                                        <option value="Islam">Islam</option>
                                                        <option value="Kristen">Kristen</option>
                                                        <option value="Konghucu">Kong Hu Cu</option>
                                                        <option value="Hindu">Hindu</option>
                                                        <option value="Budha">Budha</option>                  
                                                    </select>
                                                </td>
                                            </tr>
                                            </div>
                                            <div class="form-group">
                                                <label>Pekerjaan :</label>
                                                <tr>
                                                    <td>
                                                        <input type="text" name="pekerjaan" class="form-control" value="<?php echo $data['pekerjaan']; ?>">
                                                    </td>
                                                </tr>
                                                </div>
                                                <div class="form-group">
                                                    <label>Alamat :</label>
                                                    <tr>
                                                        <td>
                                                            <input type="text" name="alamat" class="form-control" value="<?php echo $data['alamat']; ?>">
                                                            
                                                        </td>
                                                    </tr>
                                                </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="content">
                    <div class="animated fadeIn">
                        <div class="row">
                            <strong class="card-title">2. Dengan ini mengajukan permohonan agar diberikan Surat Keterangan Terdaftar (SKT) untuk :</strong>
                        </div>

                        <div class="col-lg-12">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                </div>
                                <div class="panel-body">
                                    <div class="row">
                                        <div class="col-lg-8">
                                                <div class="form-group">
                                                    <tr>
                                                        <label>Nama Sanggar / Kelompok Kesenian :</label>
                                                        <td>
                                                            <input type="text" name="sanggar" class="form-control" value="<?php echo $data['sanggar']; ?>">
                                                        </td>
                                                    </tr>
                                                </div>
                                                    <div class="form-group">
                                                        <tr>
                                                            <label>Jenis Kegiatan :</label>
                                                            <td>
                                                                <input type="text" name="jenis" class="form-control" value="<?php echo $data['jenis']; ?>">
                                                            </td>
                                                        </tr>
                                                    </div>
                                                        <div class="form-group">
                                                            <tr>
                                                                <label>Jumlah Pengurus :</label>
                                                                <td>
                                                                    <input type="text" name="jml_pengurus" class="form-control" value="<?php echo $data['jml_pengurus']; ?>">
                                                                </td>
                                                            </tr>
                                                        </div>
                                                            <div class="form-group">
                                                                <tr>
                                                                    <label>Jumlah Anggota :</label>
                                                                    <td>
                                                                        <input type="text" name="jml_anggota" class="form-control" value="<?php echo $data['jml_anggota']; ?>">
                                                                    </td>
                                                                </tr>
                                                                </div>
                                                                <div class="form-group">
                                                                    <tr>
                                                                        <label>Tanggal Berdiri :</label>
                                                                        <td>
                                                                            <input type="date" name="berdiri" class="form-control" value="<?php echo $data['berdiri']; ?>">
                                                                        </td>
                                                                    </tr>
                                                                </div>
                                                                <div class="form-group">
                                                                    <tr>
                                                                        <label>Pimpinan :</label>
                                                                        <td>
                                                                            <input type="text" name="pimpinan" class="form-control" value="<?php echo $data['pimpinan']; ?>">
                                                                        </td>
                                                                    </tr>
                                                                </div>
                                                                <div class="form-group">
                                                                    <tr>
                                                                        <label>Nomor Telephone :</label>
                                                                        <td>
                                                                            <input type="text" name="telp" class="form-control" value="<?php echo $data['telp']; ?>">
                                                                        </td>
                                                                    </tr>
                                                                </div>
                                                            </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div> 

                                <div class="content">
                                    <div class="animated fadeIn">

                                        <br>
                                        <br>
                                        <input type="submit" name="save" class="btn btn-primary" value="Simpan">
                                    </div>
                                </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>


<?php



  if (isset($_POST['save']))
  {
    $nama           = $_POST['nama'];
    $tempat_lahir   = $_POST['temhir'];
    $ttl            = $_POST['ttl'];
    $agama          = $_POST['agama'];
    $pekerjaan      = $_POST['pekerjaan'];
    $alamat         = $_POST['alamat'];
    $sanggar        = $_POST['sanggar'];
    $genre          = $_POST['jenis'];
    $jumlah_peng    = $_POST['jml_pengurus'];
    $jumlah_ang     = $_POST['jml_anggota'];
    $tgl_berdiri    = $_POST['berdiri'];
    $pimpinan       = $_POST['pimpinan'];
    $telpon         = $_POST['telp'];

    $sql = $koneksi->query("UPDATE skt SET
        nama         = '$nama',
        temhir       = '$tempat_lahir',
        ttl          = '$ttl',
        agama        = '$agama',
        pekerjaan    = '$pekerjaan',
        alamat       = '$alamat',
        sanggar      = '$sanggar',
        jenis        = '$genre',
        jml_pengurus = '$jumlah_peng',
        jml_anggota  = '$jumlah_ang',
        berdiri      = '$tgl_berdiri',
        pimpinan     = '$pimpinan',
        telp         = '$telpon' WHERE id_no='$_GET[id]'");

    if($sql){ // Cek jika proses simpan ke database sukses atau tidak
      echo "<script>alert('Data Berhasil diubah');</script>";
      echo "<script>location='?halaman=dataSkt'</script>";
    }else{
    // Jika Gagal, Lakukan :

      echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";
      echo "<br><a href='?halaman=editSkt'>Kembali Ke Form</a>";
    }

    }
?>
