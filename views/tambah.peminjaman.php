<div id="tambah" class="modal fade" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content">
                   <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Tambah Data Peminjaman</h4>
                   </div>
                  <form action="" method="post" enctype="multipart/form-data">
                      <div class="modal-body">
                        <div class="form-group">
                             <label class="control-label" for="id_anggota_peminjaman">Id Anggota</label>
                             <input type="text" name="id_anggota_peminjaman" class="form-control" id="id_anggota_peminjaman" required>
                        </div>
                        <div class="form-group">
                             <label class="control-label" for="nm_anggota">Nama Anggota</label>
                             <input type="text" name="nm_anggota" class="form-control" id="nm_anggota" required>
                        </div>
                        <div class="form-group">
                             <label class="control-label" for="kode_buku">Kode Buku</label>
                             <input type="text" name="kode_buku" class="form-control" id="kode_buku" required>
                        </div>
                      
                        <div class="form-group">
                             <label class="control-label" for="tgl_pinjam">Tanggal Pinjam</label>
                             <input type="date" name="tgl_pinjam" class="form-control" id="tgl_pinjam" required>
                        </div>
                        <div class="form-group">
                             <label class="control-label" for="tgl_kembali">Tanggal Kembali</label>
                             <input type="date" name="tgl_kembali" class="form-control" id="tgl_kembali" required>
                        </div>
                        <div class="form-group">
                             <label class="control-label" for="lama_pinjam">Lama Pinjam</label>
                             <input type="text" name="lama_pinjam" class="form-control" id="lama_pinjam" required>
                        </div>
                        <div class="form-group">
                             <label class="control-label" for="keadaan_buku">Keadaan Buku</label>
                             <input type="text" name="keadaan_buku" class="form-control" id="keadaan_buku" required>
                        </div>
                    </div>
                      <div class="modal-footer">
                            <button type="reset" class="btn btn-danger">Reset</button>
                            <input type="submit" class="btn btn-success" name="tambah" value="Simpan">
                      </div>
                  </form>
                  <?php
                   if ($upload = @$_POST['tambah']) {
                       $id_anggota = $connection->connect->real_escape_string($_POST['id_anggota_peminjaman']);
                       $nm_anggota = $connection->connect->real_escape_string($_POST['nm_anggota']);
                       $kode_buku = $connection->connect->real_escape_string($_POST['kode_buku']);
                       $tgl_pinjam = $connection->connect->real_escape_string($_POST['tgl_pinjam']);
                       $tgl_kembali = $connection->connect->real_escape_string($_POST['tgl_kembali']);
                       $lama_pinjam = $connection->connect->real_escape_string($_POST['lama_pinjam']);
                       $keadaan_buku = $connection->connect->real_escape_string($_POST['keadaan_buku']);

                       if($upload) {
                           $ambildata->tambah($id_anggota,$nm_anggota, $kode_buku, $tgl_pinjam,$tgl_kembali,$lama_pinjam,$keadaan_buku);
                           header("location: ?page=admin_peminjaman");
                       } else {
                            echo "<script>alert('Upload data gagal !')</script>";
                       }
                   }
                  ?>
                </div>
            </div>
        </div>