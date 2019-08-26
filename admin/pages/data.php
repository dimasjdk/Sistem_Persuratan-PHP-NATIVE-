  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-2 text-gray-800">Data SKT</h1>
          <p class="mb-4">SKT adalah surat keterangan terdaftar, yang dikhususkan untuk sanggar/kesenian yang berada diseluruh kota semarang</a>.</p>

          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Data Sanggar/Kesenian</h6>
            </div>
            <form name="formpencari" method="get" action="search.php">
            <div class="card-body">
              <div class="table-responsive">
                <div id="dataTable_wrapper" class="dataTables_wrapper dt-bootstrap4">
                  <div class="row">
                    <div class="col-sm-12 col-md-8">
                        <label>
                        Show
                        <select name="dataTable_length" aria-controls="dataTable" class="custom-select custom-select-sm form-control form-control-sm">
                          <option value="10">10</option>
                          <option value="25">25</option>
                          <option value="50">50</option>
                          <option value="100">100</option>
                        </select>
                        </label>
                    </div>
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead style="text-align: center;">
                    <tr>
                      <th>Nomor</th>
                      <th>Nama Sanggar/Kesenian</th>
                      <th>Jenis</th>
                      <th>Alamat</th>
                      <th>Telephone</th>
                      <th>Status</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <?php
                  $sql = "SELECT * from skt order by id_no";
                  $result = mysqli_query($koneksi,$sql);
                  $nomor=1;

                  while ($pecah = mysqli_fetch_array($result)) {                   

                    ?>
                    <tbody>
                      <tr>
                        <td> <center><?php echo $nomor++; ?></center> </td>
                        <td> <center><?php echo $pecah['sanggar']; ?></center> </td>
                        <td> <center><?php echo $pecah['jenis']; ?></center> </td>
                        <td> <center><?php echo $pecah['alamat']; ?></center> </td>
                        <td> <center><?php echo $pecah['telp']; ?></center> </td>
                        <td> <center>
                          <?php
                          if ($pecah['ket'] == "Diterima") {
                            ?>
                            <h6 style="background-color: #38ff38; border-radius: 15px; text-align: center; margin: 7px;"><?php echo $pecah['ket']; ?></h6>
                            <?php
                          } elseif ($pecah['ket'] == "Belum Diterima") {
                            ?>
                            <h6 style="background-color: orange; border-radius: 15px; text-align: center; margin: 7px;"><?php echo $pecah['ket']; ?></h6>
                            <?php
                          }
                          ?>

                        </center></td>
                        <td> <center>

                          <a href="?halaman=detailSkt&id=<?php echo $pecah['id_no'] ?>" class="btn btn-primary"> Detail</a>

                        </center>
                      </td>
                      <?php
                    }
                    ?>
                  </tr>

                </tbody>
              </table>
            </div>
          </div>
        </div>

      </div>
    </form>
      <!-- /.container-fluid -->

    </div>
    <!-- End of Main Content -->
  </div>
</div>
</div>
</div>


