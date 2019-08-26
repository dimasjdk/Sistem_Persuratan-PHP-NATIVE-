<?php
$sql = "SELECT * FROM 
  `kecamatan`
  INNER JOIN `skt` ON `kecamatan`.`id_kec` = `skt`.`kecamatan`
  INNER JOIN `kelurahan` ON `kelurahan`.`id_kel` = `skt`.`kelurahan` WHERE id_no='$_GET[id]'";
$result = mysqli_query($koneksi,$sql);

$pecah = mysqli_fetch_array($result)                    

?>

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Begin Page Content -->
        <div class="container-fluid">

            <div class="content">
                <div class="animated fadeIn">
                    <div style="text-align: right;">
                        <label>Tanggal Daftar</label>
                        <h6 style="color: orange;"><?php echo $pecah['tanggal']; ?></h6>
                      </div>
                        <strong class="card-title">1. Biodata Pengisi</strong>
                        
                   

                    <div class="col-lg-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                            </div>
                            <div class="panel-body">
                                <div class="row">
                                    <div class="col-lg-8">
                                        <form>
                                            <div class="form-group">
                                                <tr>
                                                    <label>Nama :</label>
                                                    <h5 style="color: orange;"><?php echo $pecah['nama']; ?></h5>
                                                </tr>

                                            </div>
                                            <div class="form-group">
                                                <tr>
                                                    <label>Tempat / Tanggal lahir :</label>
                                                    <h5 style="color: orange;"> (<?php echo $pecah['temhir']; ?>) <?php echo $pecah['ttl']; ?></h5>
                                                </tr>
                                            </div>
                                            <div class="form-group">
                                                <label>Agama :</label>
                                                <h5 style="color: orange;"><?php echo $pecah['agama']; ?></h5>
                                            </div>
                                            <div class="form-group">
                                                <tr>
                                                    <label>Pekerjaan :</label>
                                                    <h5 style="color: orange;"><?php echo $pecah['pekerjaan']; ?></h5>
                                                </tr>

                                                <div class="form-group">
                                                    <label>Alamat :</label>
                                                    <h5 style="color: orange;"><?php echo $pecah['alamat']; ?></h5>
                                                </div>

                                            </form>

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
                                        <form role="form">
                                            <div class="form-group">
                                                <tr>
                                                    <label>Nama Sanggar / Kelompok Kesenian :</label>
                                                    <h5 style="color: orange;"><?php echo $pecah['sanggar']; ?></h5>
                                                </tr>
                                            </div>
                                            <div class="form-group">
                                                <tr>
                                                    <label>Jenis Kegiatan :</label>
                                                    <h5 style="color: orange;"><?php echo $pecah['jenis']; ?></h5>
                                                </tr>
                                            </div>
                                            <div class="form-group">
                                                <tr>
                                                    <label>Kecamatan :</label>
                                                    <h5 style="color: orange;"><?php echo $pecah['nama_kec']; ?></h5>
                                                </tr>
                                            </div>
                                            <div class="form-group">
                                                <tr>
                                                    <label>Kelurahan :</label>
                                                    <h5 style="color: orange;"><?php echo $pecah['nama_kel']; ?></h5>
                                                </tr>
                                            </div>
                                            <div class="form-group">
                                                <tr>
                                                    <label>Jumlah Pengurus :</label>
                                                    <h5 style="color: orange;"><?php echo $pecah['jml_pengurus']; ?></h5>
                                                </tr>
                                            </div>
                                            <div class="form-group">
                                                <tr>
                                                    <label>Jumlah Anggota :</label>
                                                    <h5 style="color: orange;"><?php echo $pecah['jml_anggota']; ?></h5>
                                                </tr>
                                            </div>
                                            <div class="form-group">
                                                <tr>
                                                    <label>Tanggal Berdiri :</label>
                                                    <h5 style="color: orange;"><?php echo $pecah['berdiri']; ?></h5>
                                                </tr>
                                            </div>
                                            <div class="form-group">
                                                <tr>
                                                    <label>Nama Pimpinan :</label>
                                                    <h5 style="color: orange;"><?php echo $pecah['pimpinan']; ?></h5>
                                                </tr>
                                            </div>
                                            <div class="form-group">
                                                <tr>
                                                    <label>Nomor Telephone :</label>
                                                    <h5 style="color: orange;"><?php echo $pecah['telp']; ?></h5>
                                                </tr>
                                            </div>




                                        </form>

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
                        <strong class="card-title">3. Lampiran Ketua Sangar / Kelompok Kesenian</strong>
                    </div>

                    <div class="col-lg-12">
                        <div class="panel panel-default">
                            <div class="panel-body">
                                <div class="panel-body">
                                    <div class="table-responsive">
                                        <table class="table table-striped table-bordered table-hover">
                                            <thead style="text-align: center;">
                                                <tr>
                                                    <th>Foto Biodata</th>
                                                    <th>Pas Foto</th>
                                                    <th>Foto KTP</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>
                                                       <img style="width: 80%;" src="img_skt/<?php echo $pecah['bio_ket']; ?>">
                                                   </td>
                                                   <td>
                                                       <img style="width: 80%;" src="img_skt/<?php echo $pecah['foto_ket']; ?>">
                                                   </td>
                                                   <td>
                                                       <img style="width: 80%;" src="img_skt/<?php echo $pecah['ktp_ket']; ?>">
                                                   </td>
                                               </tr>

                                           </tbody>
                                       </table>
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
                    <strong class="card-title">4. Lampiran Sekretaris Sangar / Kelompok Kesenian</strong>
                </div>

                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                        </div>
                        <div class="panel-body">
                            <div class="panel-body">
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered table-hover">
                                        <thead>
                                            <tr>
                                                <th width="300px"><center>Foto Biodata</center></th>
                                                <th width="300px"><center>Pas Foto</center></th>
                                                <th width="300px"><center>Foto KTP</center></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                   <img style="width: 80%;" src="img_skt/<?php echo $pecah['bio_sek']; ?>">
                                               </td>
                                               <td>
                                                   <img style="width: 80%;" src="img_skt/<?php echo $pecah['foto_sek']; ?>">
                                               </td>
                                               <td>
                                                   <img style="width: 80%;" src="img_skt/<?php echo $pecah['ktp_sek']; ?>">
                                               </td>
                                           </tr>

                                       </tbody>
                                   </table>
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
                <strong class="card-title">5. Lampiran Bendahara Sangar / Kelompok Kesenian</strong>
            </div>

            <div class="col-lg-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                    </div>
                    <div class="panel-body">
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th width="300px"><center>Foto Biodata</center></th>
                                            <th width="300px"><center>Pas Foto</center></th>
                                            <th width="300px"><center>Foto KTP</center></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                               <img style="width: 80%;" src="img_skt/<?php echo $pecah['bio_ben']; ?>">
                                           </td>
                                           <td>
                                               <img style="width: 80%;" src="img_skt/<?php echo $pecah['foto_ben']; ?>">
                                           </td>
                                           <td>
                                               <img style="width: 80%;" src="img_skt/<?php echo $pecah['ktp_ben']; ?>">
                                           </td>
                                       </tr>

                                   </tbody>
                               </table>
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
            <strong class="card-title">6. Lampiran Pelengkap Syarat Diterbitkannya SKT (1)</strong>
        </div>

        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                </div>
                <div class="panel-body">
                    <div class="panel-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th width="300px"><center>Susunan Pengurus</center></th>
                                        <th width="300px"><center>Jadwal & Latihan Rutin</center></th>
                                        <th width="300px"><center>Foto Papan Nama Kesenian</center></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                           <img style="width: 80%;" src="img_skt/<?php echo $pecah['susunan']; ?>">
                                       </td>
                                       <td>
                                           <img style="width: 80%;" src="img_skt/<?php echo $pecah['jadwal']; ?>">
                                       </td>
                                       <td>
                                           <img style="width: 80%;" src="img_skt/<?php echo $pecah['papan_nama']; ?>">
                                       </td>
                                   </tr>

                               </tbody>
                           </table>
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
            <strong class="card-title">7. Lampiran Pelengkap Syarat Diterbitkannya SKT (2)</strong>
        </div>

        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                </div>
                <div class="panel-body">
                    <div class="panel-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th width="300px"><center>Surat Domisili</center></th>
                                        <th width="300px"><center>Foto Kegiatan 1</center></th>
                                        <th width="300px"><center>Foto Kegiatan 2</center></th>
                                    </tr>
                                </thead>
                                <tbody style="text-align: center;">
                                    <tr>
                                        <td>
                                           <img style="width: 80%" src="img_skt/<?php echo $pecah['domisili']; ?>">
                                       </td>
                                       <td>
                                           <img style="width: 80%;" src="img_skt/<?php echo $pecah['kegiatan1']; ?>">
                                       </td>
                                       <td>
                                           <img style="width: 80%;" src="img_skt/<?php echo $pecah['kegiatan2']; ?>">
                                       </td>
                                   </tr>

                               </tbody>
                           </table>
                       </div>
                   </div>

               </div>
           </div>
       </div>

       <thead>
        <form method="POST">
            <table>
              <tr>
                <td>

                    <select name="keterangan" class="form-control">
                        <option value="Diterima">Diterima</option>
                        <option value="Belum Diterima">Belum Diterima</option>
                    </select>

                </td>

                <td>

                  <input type="submit" name="submit" value="Validasi" class="btn btn-success">

              </td>
          </tr>
      </table>
  </form>
  <?php
  if (isset($_POST['submit'])) {
                                # code...
    $ket= $_POST['keterangan'];

    $sql=$koneksi->query("UPDATE skt SET
        ket='$ket' WHERE id_no = '$_GET[id]'");

    if ($sql) {
        ?>
        <script type="text/javascript">
            document.location = '?halaman=dataSkt';
        </script>
        <?php
    } else {
        echo "<script>";
        echo "alert('Gagal')";
        echo "</script>";
    }
}
?>
</thead>
<br>
<thead>
    <tr>
        <th>                                            
            <a href="?halaman=editSkt&id=<?php echo $pecah['id_no'] ?>" class="btn btn-primary"><i class="fa fa-edit"></i> Edit</a>
        </th>
        <th>
            <a href="?halaman=hapusSkt&id=<?php echo $pecah['id_no'] ?>" class="btn-danger btn"><i class="fa fa-trash"></i> Hapus</a>
        </th>
        <th>
            <a href="pages/printSkt.php?id=<?php echo $pecah['id_no'] ?>" class="btn-warning btn" target="_blank"><i class="fa fa-inbox"></i> Print</a>
        </th>
    </tr>
</thead>
</div>
</div>

</div>
</div>
</div>
</div>