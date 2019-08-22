<div id="edit" class="modal fade" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content">
                   <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Edit Data Buku</h4>
                   </div>
                  <form id="form" enctype="multipart/form-data">
                      <div class="modal-body" id="modal-edit">
                        <div class="form-group">
                             <label class="control-label" for="nm_buku">Nama Buku</label>
                             <input type="hidden" name="kode_buku" id="kode_buku">
                             <input type="text" name="nm_buku" class="form-control" id="nm_buku" required>
                        </div>
                        <div class="form-group">
                             <label class="control-label" for="pengarang_buku">Pengarang Buku</label>
                             <input type="text" name="pengarang_buku" class="form-control" id="pengarang_buku" required>
                        </div>
                      
                        <div class="form-group">
                             <label class="control-label" for="stok_buku">Stok Buku</label>
                             <input type="number" name="stok_buku" class="form-control" id="stok_buku" required>
                        </div>
                        <div class="form-group">
                             <label class="control-label" for="penerbit_buku">Penerbit Buku</label>
                             <input type="text" name="penerbit_buku" class="form-control" id="penerbit_buku" required>
                        </div>
                    
                       </div>
                      <div class="modal-footer">
                            <input type="submit" class="btn btn-success" name="edit" value="Simpan">
                  </form>
                </div>
            </div>
        </div>
        <script type="text/javascript">
            $(document).on("click", "#edit_buku", function() {
                var idbuku = $(this).data('id');
                var nmbuku = $(this).data('nama');
                var pengarangbuku = $(this).data('pengarangbuku');
                var stokbuku = $(this).data('stk');
                var penerbitbuku = $(this).data('penerbitbuku');
                $("#modal-edit #kode_buku").val(idbuku);
                $("#modal-edit #nm_buku").val(nmbuku);
                $("#modal-edit #pengarang_buku").val(pengarangbuku);
                $("#modal-edit #stok_buku").val(stokbuku);
                $("#modal-edit #penerbit_buku").val(penerbitbuku);

            })

            $(document).ready(function(e) {
                $("#form").on("submit", (function(e) {
                    e.preventDefault();
                    $.ajax({
                        url : 'models/edit_buku.php',
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