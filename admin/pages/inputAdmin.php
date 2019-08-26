<div class="content">
    <div class="animated fadeIn">
        <div class="row">
            <strong class="card-title">Tambahkan Admin</strong>
        </div>

        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-lg-8">
                            <form role="form" method="post" action="">
                                <div class="form-group">
                                    <label>Username :</label>
                                    <input name="a" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Password :</label>
                                    <input name="b" class="form-control">
                                </div>
                                <div class="form-group">
                                    <br>
                                    <input type="submit" name="tambah" value="Tambah" class="btn btn-primary">
                                </div>
                                
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php

if(isset($_POST['tambah'])){

    include ('koneksi.php');

    $user       = $_POST['a'];
    $pass       = $_POST['b'];

    $input = mysqli_query($koneksi, "INSERT INTO login (username, password) VALUES ('$user', '$pass')");

    if($input){
        
        ?>
            <script type="text/javascript">
                alert("Selamat Tambah Admin Berhasil!");
                document.location = "?halaman=daftarAdmin";
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
                        alert("Gagal Tambah Admin!!");
                    </script>
                <?php
        }


?>