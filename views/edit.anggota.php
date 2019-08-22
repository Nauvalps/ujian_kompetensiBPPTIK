<div id="edit" class="modal fade" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content">
                   <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Edit Data Anggota</h4>
                   </div>
                  <form id="form" enctype="multipart/form-data">
                      <div class="modal-body" id="modal-edit">
                        <div class="form-group">
                             <label class="control-label" for="nm_anggota">Nama Anggota</label>
                             <input type="hidden" name="id_anggota" id="id_anggota">
                             <input type="text" name="nm_anggota" class="form-control" id="nm_anggota" required>
                        </div>
                        <div class="form-group">
                             <label class="control-label" for="alamat">Alamat</label>
                             <input type="text" name="alamat" class="form-control" id="alamat" required>
                        </div>
                      
                        <div class="form-group">
                             <label class="control-label" for="status">Status Anggota</label>
                             <input type="text" name="status" class="form-control" id="status" required>
                        </div>
                        
                       </div>
                      <div class="modal-footer">
                            <input type="submit" class="btn btn-success" name="edit" value="Simpan">
                  </form>
                </div>
            </div>
        </div>
        <script type="text/javascript">
            $(document).on("click", "#edit_anggota", function() {
                var idanggota = $(this).data('id');
                var nmanggota = $(this).data('nama');
                var alamat = $(this).data('alamat');
                var status = $(this).data('status');
                $("#modal-edit #id_anggota").val(idanggota);
                $("#modal-edit #nm_anggota").val(nmanggota);
                $("#modal-edit #alamat").val(alamat);
                $("#modal-edit #status").val(status);

            })

            $(document).ready(function(e) {
                $("#form").on("submit", (function(e) {
                    e.preventDefault();
                    $.ajax({
                        url : 'models/edit_anggota.php',
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