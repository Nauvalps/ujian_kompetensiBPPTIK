<div id="tambah" class="modal fade" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content">
                   <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Tambah Data Buku</h4>
                   </div>
                  <form action="" method="post" enctype="multipart/form-data">
                      <div class="modal-body">
                        <div class="form-group">
                             <label class="control-label" for="kode_buku">Kode Buku</label>
                             <input type="text" name="kode_buku" class="form-control" id="kode_buku" required>
                        </div>
                        <div class="form-group">
                             <label class="control-label" for="nm_buku">Judul Buku</label>
                             <input type="text" name="nm_buku" class="form-control" id="nm_buku" required>
                        </div>
                        <div class="form-group">
                             <label class="control-label" for="pengarang_buku">Pengarang Buku</label>
                             <input type="text" name="pengarang_buku" class="form-control" id="pengarang_buku" required>
                        </div>
                      
                        <div class="form-group">
                             <label class="control-label" for="stok_buku">Jumlah Buku</label>
                             <input type="number" name="stok_buku" class="form-control" id="stok_buku" required>
                        </div>
                        <div class="form-group">
                             <label class="control-label" for="penerbit_buku">Penerbit Buku</label>
                             <input type="text" name="penerbit_buku" class="form-control" id="penerbit_buku" required>
                        </div>
                    </div>
                      <div class="modal-footer">
                            <button type="reset" class="btn btn-danger">Reset</button>
                            <input type="submit" class="btn btn-success" name="tambah" value="Simpan">
                      </div>
                  </form>
                  <?php
                   if ($upload = @$_POST['tambah']) {
                       $kode_buku = $connection->connect->real_escape_string($_POST['kode_buku']);
                       $nm_buku = $connection->connect->real_escape_string($_POST['nm_buku']);
                       $pengarang_buku = $connection->connect->real_escape_string($_POST['pengarang_buku']);
                       $stok_buku = $connection->connect->real_escape_string($_POST['stok_buku']);
                       $penerbit_buku = $connection->connect->real_escape_string($_POST['penerbit_buku']);
        
                       if($upload) {
                           $ambildata->tambah($kode_buku,$nm_buku, $pengarang_buku, $stok_buku, $penerbit_buku);
                           header("location: ?page=admin_buku");
                       } else {
                            echo "<script>alert('Upload data gagal !')</script>";
                       }
                   }
                  ?>
                </div>
            </div>
        </div>