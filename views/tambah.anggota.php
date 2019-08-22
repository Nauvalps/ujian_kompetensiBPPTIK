<div id="tambah" class="modal fade" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content">
                   <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Tambah Data Anggota</h4>
                   </div>
                  <form action="" method="post" enctype="multipart/form-data">
                      <div class="modal-body">
                        <div class="form-group">
                             <label class="control-label" for="id_anggota">Id Anggota</label>
                             <input type="text" name="id_anggota" class="form-control" id="id_anggota" required>
                        </div>
                        <div class="form-group">
                             <label class="control-label" for="nm_anggota">Nama Anggota</label>
                             <input type="text" name="nm_anggota" class="form-control" id="nm_anggota" required>
                        </div>
                        <div class="form-group">
                             <label class="control-label" for="alamat">Alamat Anggota</label>
                             <input type="text" name="alamat" class="form-control" id="alamat" required>
                        </div>
                      
                        <div class="form-group">
                             <label class="control-label" for="status">Status Anggota</label>
                             <input type="text" name="status" class="form-control" id="status" required>
                        </div>
                    </div>
                      <div class="modal-footer">
                            <button type="reset" class="btn btn-danger">Reset</button>
                            <input type="submit" class="btn btn-success" name="tambah" value="Simpan">
                      </div>
                  </form>
                  <?php
                   if ($upload = @$_POST['tambah']) {
                       $id_anggota = $connection->connect->real_escape_string($_POST['id_anggota']);
                       $nm_anggota = $connection->connect->real_escape_string($_POST['nm_anggota']);
                       $alamat = $connection->connect->real_escape_string($_POST['alamat']);
                       $status = $connection->connect->real_escape_string($_POST['status']);
                       if($upload) {
                           $ambildata->tambah($id_anggota,$nm_anggota, $alamat, $status);
                           header("location: ?page=admin_anggota");
                       } else {
                            echo "<script>alert('Upload data gagal !')</script>";
                       }
                   }
                  ?>
                </div>
            </div>
        </div>