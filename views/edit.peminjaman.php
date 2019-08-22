<div id="edit" class="modal fade" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content">
                   <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Edit Data Peminjaman</h4>
                   </div>
                  <form id="form" enctype="multipart/form-data">
                      <div class="modal-body" id="modal-edit">
                        <div class="form-group">
                             <label class="control-label" for="nama_anggota">Nama Anggota</label>
                             <input type="hidden" name="id_anggota_peminjaman" id="id_anggota_peminjaman">
                             <input type="text" name="nama_anggota" class="form-control" id="nama_anggota" required>
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
                             <input type="text" name="tgl_kembali" class="form-control" id="tgl_kembali" required>
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
                            <input type="submit" class="btn btn-success" name="edit" value="Simpan">
                  </form>
                </div>
            </div>
        </div>
        <script type="text/javascript">
            $(document).on("click", "#edit_peminjaman", function() {
                var idanggota = $(this).data('id');
                var nmanggota = $(this).data('nama');
                var kdbuku = $(this).data('kodebuku');
                var tglpinjam = $(this).data('tglpinjam');
                var tglkembali = $(this).data('tglkembali');
                var lamapinjam = $(this).data('lamapinjam');
                var keadaanbuku = $(this).data('keadaanbuku');
                $("#modal-edit #id_anggota_peminjaman").val(idanggota);
                $("#modal-edit #nama_anggota").val(nmanggota);
                $("#modal-edit #kode_buku").val(kdbuku);
                $("#modal-edit #tgl_pinjam").val(tglpinjam);
                $("#modal-edit #tgl_kembali").val(tglkembali);
                $("#modal-edit #lama_pinjam").val(lamapinjam);
                $("#modal-edit #keadaan_buku").val(keadaanbuku);

            })

            $(document).ready(function(e) {
                $("#form").on("submit", (function(e) {
                    e.preventDefault();
                    $.ajax({
                        url : 'models/edit_peminjaman.php',
                        type : 'POST',
                        data : new FormData(this),
                        contentType : false,
                        cache : false,
                        processData : false,
                        success : function(msg) {
                            $('.table').html(msg);
                            
                        } 
                    });
                }));
            })
        </script>  